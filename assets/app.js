/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
// import $ from 'jquery';

console.log('Hello Webpack Encore! Edit me in assets/app.js');


document.addEventListener( 'DOMContentLoaded', () => {

    
    let icon_user = document.querySelector('.icon_user')
    let ul_parametre = document.querySelector('.ul_parametre')

    icon_user.addEventListener('click', () => {
        if(ul_parametre.style.display == "block"){            
                ul_parametre.style.display="none" 
                        
        }else{
            console.log(ul_parametre)   
                ul_parametre.style.display="block"         
        }
    })

    let liste_marque = document.querySelector('.liste_marque')    
    let btn_search = document.querySelector('.btn_search')


    btn_search.addEventListener('click', () => {
        if(liste_marque.style.display == "block"){            
            liste_marque.style.display="none" 
                        
        }else{
            console.log(ul_parametre)   
            liste_marque.style.display="block"         
        }
    })


    let btn_specifications = document.querySelector('.btn_specifications')
    let btn_contact = document.querySelector('.btn_contact')
    let specifications = document.querySelector('.specifications')
    let form = document.querySelector('.form')

    btn_specifications.addEventListener('click', ()=>{
        specifications.style.display="block"
        form.style.display="none"
    })

    btn_contact.addEventListener('click', ()=>{
        form.style.display="block"
        specifications.style.display="none"
    })


   
   
   
})