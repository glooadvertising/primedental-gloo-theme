<script>
    const headings = document.querySelectorAll('.page-content > h2');
    // console.log(headings);
    document.write(`
        <nav class="sticky top-12">
            <ul>
            `);
            headings.forEach((e) => {
                // console.log(e.getAttribute('id'))
                // console.log(e.innerText)
                document.write(`
                <li class="text-inherit font-light border-b border-0 border-current hover:font-medium hover:border-current transition-all">
                    <a href="#${e.getAttribute('id')}" class="block p-3 pr-6 pl-0 truncate">${e.innerText}</a>
                </li>`) ;
            });
            document.write(`
            </ul>
        </nav>
    `)
</script>
