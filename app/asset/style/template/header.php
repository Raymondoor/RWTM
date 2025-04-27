<?php require_once(__DIR__.'../../../../../vendor/autoload.php');
?>
<style>
header{
    color: var(--MainColour);
}
@media(min-width:921px){
    header{
        display: block;
        #hd-desk{
            display: flex;
            align-items: center;
            justify-content: space-around;
            #title{
                letter-spacing: 2px;
                padding: 2rem 3rem;
                width: fit-content;
                height: fit-content;
                box-shadow: 0 3px 4px #888;
                border-radius: 2rem;
                margin: 1rem;
                box-shadow: 0 3px 4px #888;
                h1{
                    margin: 0;
                }
            }
            .hdrbtn{
                width: fit-content;
                height: fit-content;
                box-shadow: 0 3px 0px #888;
                border-radius: 1rem;
                margin: 1rem;
                a{
                    color: #fff;
                    text-decoration: none;
                }
                p{
                    margin: 0;
                    padding: 1rem;
                    width: fit-content;
                    height: fit-content;
                    
                }
            }
            .hdrbtn:active{
                box-shadow: 0 0 0 #888;
                border-radius: 1rem;
                margin: 1rem;
                background-color: var(--SubColour2);
                translate: 0 2px;
                a{
                    color: #fff;
                    text-decoration: none;
                }
                p{
                    margin: 0;
                    padding: 1rem;
                    width: fit-content;
                    height: fit-content;
                }
            }
            #logout{
                background-color: var(--SubColour);
            }#logout:active{
                background-color: var(--SubColour2);
            }
            #donate{
                a{
                    color: #000;
                    text-decoration: none;
                }
                background-color:rgb(255, 242, 0);
            }#donate:active{
                background-color:rgb(221, 199, 0);
            }
        }
        #hd-mobile{
            display: none;
        }
    }
}
@media(max-width:920px){
    header{
        position: sticky;
        top: 0;
        z-index: 1;
        box-shadow: 0 2px 4px #888;
        background-color: #fff;
        display: block;
        #hd-desk{
            display: none;
        }
        #hd-mobile{
            display: flex;
            justify-content: space-between;
            #title{
                letter-spacing: 2px;
                padding: 1rem;
                width: fit-content;
                height: fit-content;
                margin: 0 auto;
                h1{
                    margin: 0;
                    font-size: 1.5rem;
                }
            }
            .hdrbtn{
                width: fit-content;
                align-content: center;
                a{
                    color: #fff;
                    text-decoration: none;
                }
                p{
                    margin: 0;
                    padding: 1rem;
                    width: fit-content;
                    height: fit-content;
                    font-size: 0.85rem;
                }
            }
            .hdrbtn:active{
                background-color: var(--SubColour2);
                a{
                    color: #fff;
                    text-decoration: none;
                }
                p{
                    margin: 0;
                    padding: 1rem;
                    width: fit-content;
                    height: fit-content;
                }
            }
            #logout{
                background-color: var(--SubColour);
            }#logout:active{
                background-color: var(--SubColour2);
            }
            #donate{
                a{
                    color: #000;
                    text-decoration: none;
                }
                background-color:rgb(255, 242, 0);
            }#donate:active{
                background-color:rgb(221, 199, 0);
            }
        }
    }
}
</style>
