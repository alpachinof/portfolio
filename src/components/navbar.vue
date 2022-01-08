<template>
    <nav>
        <vue-navigation-bar :options="navbarOptions" />
    </nav>


</template>



<script>
import 'vue-navigation-bar/dist/vue-navigation-bar.css'

    export default {
        name: "Navbar",


    data(){
        return{
            navbarOptions: {
                elementId: "main-navbar",
                ariaLabelMainNav: 'Main Navigation',
                isUsingVueRouter: true,
                mobileBreakpoint: 992,
                menuOptionsRight: [
                {
                    type: "link",
                    text: "Home",
                    path: '/',
                },
                {
                    type: "link",
                    text: "about",
                    path: '/about',
                },
                {
                    type: "link",
                    text: "portfolio",
                    path: '/portfolio',
                },
                {
                    type: "link",
                    text: "contact",
                    path: '/contact',
                }
            ]
            },
        }
    }
    }
</script>


<style scoped>
    *{
    margin:0;
    padding:0;
    z-index: 5;
    }
    #main-navbar {
        margin-right: 80px;
        height: 80px;
        width: 100%;
        background-color: #1C1B29;
    }
    #main-navbar__menu-options--right{
        margin-right: 80px;
    }
    .vnb__menu-options__option a:focus {
        outline: none;
    }
    .vnb__menu-options__option a:hover{
        color:#0ABE53;
    }
    .vnb-button:hover{
        color:#0ABE53;
    }
    ul{
        margin-right:80px;
        list-style:none;
        display:flex;
        justify-content:flex-end;
        height:80px;
        line-height: 80px;
    }
    li{
        margin:10px 20px;
        padding:10px;
        font-weight:40px;
        text-transform:uppercase;
    }
    .link{
        text-decoration:none;
        color:white;
    }
</style>