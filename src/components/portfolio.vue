<template>
    <div class="main">
        <h1>Portfolio</h1>

        <div class="container">
            <div class="box">
                <a target="_blank" :href="`${publicPath}calculator/calculator.html`">calculator</a>
            </div>

            <div class="box">
                <a target="_blank" :href="`${publicPath}chrono-meter/chrono-meter.html`">timer</a>
            </div>
            
            <div class="box">
                 <a target="_blank" :href="`${publicPath}weather/weather.html`">weather</a>
            </div>
            
            <div class="box">
                 <a target="_blank" :href="`${publicPath}digital-clock/clock.html`">clock</a>
            </div>
            
            <div class="box">
                 <a target="_blank" :href="`${publicPath}random-color/color.html`">rand color</a>
            </div>
            
            <div class="box">
                 <a target="_blank" :href="`${publicPath}to-do/todo.html`">todo app</a>
            </div>

        </div>
    </div>
</template>



<script>
export default{
    data () {
        return {
            publicPath: process.env.BASE_URL
  }
}
}

</script>




<style scoped>
*{
    margin:0;
    padding:0;
}
h1{
    margin:20px;
    text-transform:uppercase;
    text-align:center;
}
.container{
    margin-top:10px;
    display:grid;
    grid-template-columns: auto auto auto;
    justify-content:center;
    align-items:center;
    grid-gap:20px;
}
.box{
    background-color:#2a283e;
    width:100%;
    width:250px;
    height:200px;
    transition: all .2s ease-in-out;
}
a{
    display: inline-block;
    text-decoration: none;
    font-size: 30px;
    color:#0ABE53;
    text-align: center;
    margin: 50% 20px;
}
.box:hover{
    transform:scale(1.05);

}
@media only screen and (max-width:600px) {

.container{
    grid-template-columns: auto;
}
}
@media only screen and (min-width: 600px) and (max-width: 992px){

.container{
    grid-template-columns: auto auto;
}
}
@media only screen and (min-width: 1500px){
    .main{
        margin-top: 5%;
    }
}



</style>