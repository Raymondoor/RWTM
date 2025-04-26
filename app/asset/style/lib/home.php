<style>
/* Example to import static files */
@import url("<?=STYLE_URL?>/mod/base.css");
body{
    width: 100%;
    height: 100vh;
    align-content: center;
    background: rgba(5,120,152,1);
    background: linear-gradient(135deg, rgb(60, 3, 71) 0%, rgba(5,120,152,1) 49%, rgb(0, 242, 149) 100%);
}
h1{
    width: fit-content;
    margin: 1rem auto !important;
    color: #fff;
}
form{
    display: block;
    width: 300px;
    height: fit-content;
    margin: 1rem auto;
    min-width: 1rem;
    min-height: 1rem;
    padding: 1rem;
    border-radius: 1rem;
    background: rgba(5,120,152,1);
    color: #fff;
    #txtInput{
        padding: 1rem;
        border-radius: 0.5rem;
        width: fit-content;
        margin: auto;
        background-color: #f5fafa;
        box-shadow: 3px 3px 1px rgba(10,3,71,1);
        color: #000;
    }
    h2{
        text-align: center;
        padding-bottom: 1rem;
    }
    label{
        margin: 0;
        padding: 0.5rem 0;
    }
    input{
        margin: 0.5rem;
        padding: 0.375rem;
        box-shadow: inset 1px 1px 3px #888;
    }
    #loginBtn{
        display: block;
        margin: 0 auto;
        margin-bottom: 0;
        background-color: hsl(180, 100%, 75%);
        box-shadow: 3px 3px 1px rgba(10,3,71,1);
    }
    #loginBtn:active{
        display: block;
        margin: 0 auto;
        background-color: hsl(180, 75%, 75%);
        translate: 0.125rem 0.125rem;
        box-shadow: inset 1px 1px 3px #888;
    }
    #errmsg{
        text-align: center;
        margin: 0.5rem;
    }
}
#newNav{
    width: 400px;
    margin: auto;
}
</style>
