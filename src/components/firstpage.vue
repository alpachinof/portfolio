<template>
    <div>
        <h1>Hi,<br>
        Im Mohammad,<br>
        web developer</h1>
        <h2>Junior Front-End Developer / Software Engineer Student</h2>
        <div class="svg">
            <img src="../assets/undraw_Coding_re_iv62.svg">
        </div>

        <div class="social">

            <ul>
                <li>
                    <a target="_blank" href="https://github.com/alpachinof">
                    <font-awesome-icon :icon="['fab', 'github']" />
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://instagram.com/lil.mamad_">
                    <font-awesome-icon :icon="['fab', 'instagram']" />
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://wa.me/989156640823">
                    <font-awesome-icon :icon="['fab', 'whatsapp']" />
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://t.me/lidlmamad">
                    <font-awesome-icon :icon="['fab', 'telegram']" />
                    </a>
                </li>
            


        </ul>


        </div>
    </div>
</template>


<script>
export default{
    name: "firstpage",
};
</script>



<style scoped>
    *{
    margin:0;
    padding:0;
    }
    .svg{
        max-height:300px;
        width: 100%;
        max-width:600px;
        position:relative;
        left:45%;
        bottom:90px;
        background-color:transparent;
    }
    img{
        width:100%;
        height:auto;
    }
    h1{
        padding-top:20px;
        margin-left:80px;
        font-weight:bold;
        font-size:50px;
    }
    h2{
        margin-left:80px;
        padding-top:7px;;
        font-weight:lighter;
        font-size:20px;
    }
    li{
        list-style:none;
        font-size:30px;
        text-align:center;
    }
    .social{
        position:fixed;
        left:30px;
        bottom:80px;
    }
    a{
        color: white;
    }
    a:hover{
        cursor:pointer;
        color:#0ABE53;

    }
    @media only screen and (max-width: 600px){

        h1{
            font-size: 40px;
            margin-left: 20px;
        }
        h2{
            font-size: 15px;
            margin-left: 20px;
        }
        .svg{
            max-width: 350px;
            position:relative;
            left:10%;
            bottom:-20px;
        }
        .social ul{
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            left: 30%;
            bottom: 80px;
        }
        .social ul li{
            margin-left: 10px;
        }
    }
    @media only screen and (min-width: 600px) and (max-width: 768px){

        h1{
            font-size: 40px;
        }
        h2{
            font-size: 15px;
        }
        .svg{
            max-width: 450px;
            position:relative;
            left:25%;
            bottom: -20px;
        }
    }
    @media only screen and (min-width: 768px) and (max-width: 992px) {

        h1{
            font-size: 40px;
        }
        h2{
            font-size: 15px;
        }
        .svg{
            max-width: 500px;
            position:relative;
            left:30%;
            bottom: -25px;
        }
    }
    @media only screen and (min-width: 992px) and (max-width: 1200px){

        .svg{
            width: auto;
            position:relative;
            height: auto;
            left:40%;
            bottom: 25px;
        }
    }
    @media only screen and  (min-width: 1200px){
        .svg{
            max-width: 45vw;
            height: auto;
        }
        h1{
            font-size: 3.8vw;
        }
        h2{
            font-size: 1.6vw;
        }
    }



</style>