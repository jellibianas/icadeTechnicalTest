/**
 * @property {HTMLElement} form
 */
export default class Filter {

    /**
     *
     * @param {HTMLElement|null} element
     */
    constructor(element) {
        if (element === null) {
            return
        }
        this.form = element.querySelector('.js-filter-form')
        this.bindEvents()
    }

    /**
     * Add comportments to elements
     */
    bindEvents() {

        let enabledGenre
        this.form.querySelectorAll('input[type=checkbox]').forEach(input => {
            input.addEventListener('change', function () {
                enabledGenre =
                    Array.from(this.form) // Convert checkboxes to an array to use filter and map.
                        .filter(i => i.checked) // Use Array.filter to remove unchecked checkboxes.
                        .map(i => i.value) // Use Array.map to extract only the checkbox values from the array of objects.

                const responseFetch = fetch(this.form.getAttribute('data-specific-url') + "?" + "genres=" + enabledGenre.toLocaleString() + "&ajax=1")
                responseFetch.then(response => response).then(
                    data => {
                        document.querySelector('.js-filter-content').innerHTML = data.content
                    })
            })

        })
    }

}