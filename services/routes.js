import firstpage from './../src/components/firstpage.vue'
import about from './../src/components/about.vue'
import portfolio from './../src/components/portfolio.vue'
import contact from './../src/components/contact.vue'


export default [
    { path: "/" , component:firstpage},
    { path: "/about" , component:about},
    { path: "/portfolio" , component:portfolio},
    { path: "/contact" , component:contact},

]