<x-message-banner msg="User login successfully " class="alert-success"/>
<x-message-banner msg="User not found " class="alert-danger"/>




<!-- Css must be write here of added component -->
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .alert-success{
        background-color: whitesmoke;
        color: darkgreen;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        height: 7vh;
        font-size: 30px;
        padding: 10px;
    }
    .alert-danger{
        background-color: whitesmoke;
        color: red;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        height: 7vh;
        font-size: 30px;
        padding: 10px;
    }
    
</style>