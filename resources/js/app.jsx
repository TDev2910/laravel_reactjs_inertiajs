import { createInertiaApp } from '@inertiajs/react'
import { createRoot } from 'react-dom/client'
import Main from './Layouts/Main'

createInertiaApp({
    resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true })
    let page = pages[`./Pages/${name}.jsx`]
    page.default.layout = 
        page.default.layout || (page => <Main>{page}</Main>);
    return page;
},
    setup({ el, App, props }) {
        createRoot(el).render(<App {...props} />)
    },
})
