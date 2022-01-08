<template>
    <div class="main">
        <div class="contact">
            <div class="form">
                <form v-on:submit.prevent>
                    <h1 class="h1-contact">Contact</h1>
                    <div class="input-box">
                    <input type="text" id="name" placeholder="Name" required="required">
                    </div>
                    <div class="input-box">
                    <input type="email" id="email" placeholder="Email"><br>
                    </div>
                    <div class="input-box">
                    <textarea class="input-box" placeholder="your message"></textarea>
                    </div>
                    <div class="input-box">
                    <input type="submit" id="submit">
                    </div>
                </form>
            </div>
            <div class="svg">
                <img src="@/assets/messagesent.svg">
            </div>
        </div>
    </div>
</template>



<script>




</script>




<style scoped>
*{
    margin:0;
    padding:0;
    
}
.main{
    display: flex;
    justify-content: center;
    align-items: center;
}
.contact{
    display:flex;
    height: 100%;
    width: 100%;
}
.form{
    width: 400px;
    background-color: #2a283e;
    height: 490px;
    margin: 20px auto;
    display: flex;
    align-items:center;
    align-content:center;
    justify-content:space-evenly;
    flex-shrink: 0;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 20px;
    
}
.h1-contact{
    position: relative;
    text-align: center;
    transform: translate(0,-50%);
    font-size: 50px;
    font-weight: bold;
}
.input-box{
    width: 100%;
    position: relative;
    margin-top: 30px;
}
.input-box input,
.input-box textarea{
    width: 100%;
    border: none;
    height: 40px;
    line-height: 40px;
    border-bottom: 2px solid #14141E;
    outline: none;
    resize: none;
    font-size: 16px;
    background-color: #1C1B29;
    color:white;
    padding-left: 10px;
    border-radius: 2px;
}
#submit{
    background-color: #0ABE53;
    border: none;
    cursor: pointer;
}
.svg{
    max-width:500px;
    height:520px;
    margin: auto;
}
img{
    width:100%;
    height:100%;
}
@media only screen and (max-width:992px) {
.svg{
    display: none;
}
.form{
    display: flex;
    align-items:center;
    justify-content: center;
    margin: 20px auto;
}
}
@media only screen and (min-width: 992px) and (max-width: 1200px) {
.form{
    margin: 20px 80px;
}
}
@media only screen and  (min-width: 1500px){
.svg{
    max-width: 40vw;
    height: auto;
}
.main{
        margin-top: 5%;
    }
}





</style>