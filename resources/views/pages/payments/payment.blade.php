<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form>
        <input type="hidden" name="amount" id="amount" value="500">
        <button type="button" class="btn btn-primary" id="rzp-button">Pay with Razorpay</button>
    </form>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        function createRazorpayGetway(amount, currency, order_id) {
            let options = {
                "key": "{{ env('RAZORPAY_KEY') }}",
                "amount": amount,
                "currency": currency,
                "name": "LegalSuccessIndia",
                "description": "Transaction Done",
                "image": "{{ Vite::image('logo.png') }}",
                "order_id": order_id, // Pass the order ID created from the server
                "handler": async function(response) {
                    let res = await fetch('/payment-callback', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            _token: "{{ csrf_token() }}",
                            ...response,
                        })
                    });
                    let data = await res.json();
                    if (data.status == 'success') {
                        window.location.href = '/payment/success';
                    } else {
                        alert(data.message);
                    }
                },
                "prefill": {
                    name: "{{ auth()->user()->name }}",
                    email: "{{ auth()->user()->email }}",
                },
                "theme": {
                    "color": "#111"
                },
            };
            return new Razorpay(options);
        }

        document.getElementById('rzp-button').onclick = async function(e) {
            e.preventDefault();
            let res = await fetch('/create-order', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    amount: document.getElementById('amount').value,
                    _token: "{{ csrf_token() }}"
                })
            });
            let data = await res.json();
            createRazorpayGetway(data.amount, data.currency, data.id).open();
        }
    </script>
</body>

</html>
