export function toggleClassesToAnimate(
    observingClassName: string,
    addedClassName: string,
    unObserve: boolean = true
) {
    let observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add(addedClassName);
                unObserve && observer.unobserve(entry.target);
            }
        });
    });
    document.querySelectorAll(observingClassName).forEach((items) => {
        observer.observe(items);
    });
}
