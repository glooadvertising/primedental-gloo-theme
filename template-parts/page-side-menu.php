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
                <li class="border-b border-0 border-lavender/50 hover:text-lavender text-xs hover:border-lavender transition-all">
                    <a href="#${e.getAttribute('id')}" class="flex p-3 pl-0 truncate">${e.innerText}</a>
                </li>`) ;
            });
            document.write(`
            </ul>
        </nav>
    `)
    
</script>
