<template>
    <div class="main">
        <section>
            <h1>ABOUT ME</h1>
            <p>Hi,my name is Mohammad.I'm a software engineer student and a junior front end developer.<br>focusing on college right now and interested in learning nuxt/django in the future.</p>
        </section>

        <div class="container">
            <div class="info">
            <h2>personal details</h2>
                <ul>
                    <li><span>age:</span> {{age}} </li>
                    <li><span>full name:</span> mohammad chahkandi</li>
                    <li><span>Email:</span> m.chahkandi00032@gmail.com </li>
                    <li><span>address:</span> Iran,birjand </li>
                    <li><span>website:</span> ...... </li>
                    
                </ul>
            </div>


            <div class="info">
                <h2>hobies</h2>
                <div class="box">
                    <div class="badge">
                        <font-awesome-icon :icon="['fas', 'gamepad']" />
                    </div>

                    <div class="badge">
                        <font-awesome-icon :icon="['fas', 'headphones']" />
                    </div>

                    <div class="badge">
                        <font-awesome-icon :icon="['fas', 'coffee']" />
                    </div>

                    <div class="badge">
                        <font-awesome-icon :icon="['fas', 'dumbbell']" />
                    </div>
                </div>
                <h2>tecnologies</h2>
                <div class="box">
                    <div class="badge">
                        <font-awesome-icon :icon="['fab', 'html5']" />
                    </div>

                    <div class="badge">
                        <font-awesome-icon :icon="['fab', 'css3-alt']" />
                    </div>

                    <div class="badge">
                        <font-awesome-icon :icon="['fab', 'js']" />
                    </div>

                    <div class="badge">
                        <font-awesome-icon :icon="['fab', 'vuejs']" />
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</template>



<script>
export default{
  data() {
    let year = new Date();
    let age = year.getUTCFullYear() - 2002;

    return {
      age,
    };
  },
};
</script>




<style scoped>
*{
    margin:0;
    padding:0;
}
section{
    text-align:center;
    padding-top:20px;
}
p{
    padding: 0 20px;
    margin: 10px 0;
}
.container{
    display:flex;
    align-items:center;
    justify-content:center;
}
.info{
    width:500px;
    height:260px;
    text-align:center;
    margin:80px 80px 20px 80px;
}
.box{
    display:flex;
    justify-content:center;
    align-items:center;
    margin:10px 0;
}
.badge{
    width:60px;
    height:60px;
    text-align:center;
    line-height:60px;
    font-size:40px;
    margin: 10px 20px;
    border-radius:5px;
    background-color:#14141E;
}
li{
    list-style-type:none;
    margin:20px 0 0 40px;
}
span{
    color:#0ABE53;
}
.container .info ul{
    text-align:left;
    height:100%;
}
@media only screen and (max-width:600px) {

.info{
    max-width: 400px;
}
}
@media only screen and (max-width:900px) {

.container{
    display:flex;
    flex-direction:column;
}
.info ul{
    align-items:center;
    padding-top: 20px;
}
.container + div{
    margin-top:80px;
}
}
@media only screen and (min-width: 1500px){
    .main{
        margin-top: 5%;
    }
}


</style>