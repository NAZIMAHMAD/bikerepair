
<?php



header("Content-type: text/css; charset: UTF-8");


?>

@media (min-width:0px) and (max-width:1024px)
 {
    
.login_container_child
{
    flex-direction:column;
}


    .child_header
    {
        width:95%;
    }
    
    
    .header_btn
    {
        display:none;
    }
    
    
    .menu_icon
    {
        font-size:2rem;
    }
    
    .subheader
    {
        padding-right:1rem;
    }
    
    .header_btn1
    {
        width:10rem;
        height:3rem;
        border-radius:5px;
        color:white;
        background-color:black;
        text-transform: capitalize;
        font-size:var(--btn-font);
        font-weight: 400;
    
    
    }

    .child_header>i 
    {
        display:block
    }
    
      .menu_icon {
        cursor: pointer;
        display:block;
      }
    
    
      .navbar_list {
        position: fixed;
        top: 0;
        right: 0;
        background-color: #f8f9fa;
        padding: 10px;
        width: 70%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index:999;
        display:none;
        transition:all 0.5s;
        height:100vh;
      }

      .navbar_list>ul
      {
        display:inline-block;
        height:100vh;
        width:100%;
      }

      .navbar_list>ul>li 
      {
        display:block;
        padding-top:2rem;
      }


      .navbar_list>i
      {
        display:block;
        padding-left:7rem;
        padding-top:2rem;

      }
    
      .header_btn1
      {
        display:block;
        
      }
    
      .xmark
      {
        display:block;
        color:black;
        position: relative;
        left:10rem;
        top:2rem;
        font-size:1.3rem;
      }

      
    
    
    
     
      
    
    /* hero section */
    
    
    
    
    .hero_section
    {
        height:100vh;
    }


    .carousel
    {
        height:100%;
    }

    .carousel-inner
    {
        height:100%;


    }

    .carousel-item
    {
        height:100%;
    }



    .slide>img 
    {
        height:100vh;
        object-fit:center;
    }
    
    
    /* banner section */
    
    .banner_section
    {
        height:auto !important;
        display:grid;
        place-items:center;
        padding:4rem 0 3rem 0;
    
    }
    
    
    .banner_section_child
    {
    width:95% !important;
    height:auto;
    padding:0;
    
    
    }
    
    .banner_section_child>h3
    {
    font-size:32px;
    }
    
    
    /* services section */
    
    .service_section_child>h2
    {
    font-size:32px;
    line-height:3rem;
    }
    
    .service_section_child
    {
        width:95% !important;
    }
    
    .service_card>p 
    {
        position: relative;
        left:1rem;
    }
    
    .service_card
    {
        width:100% !important;
    }

    /* banner css */

    .banner_section_child>h3
    {
line-height:3rem;
    }
    
    
    
    
    /* belive */
    
    .believe_section_child
    {
        display:flex;
        flex-direction:column-reverse;
        height:auto;
    
    }
    
    .believe_section_child_left
    {
        width:100% ;
    }
    
    .believe_section_child_right 
    {
    width:95%;
    }
    
    .believe_section_child_right_content>h3 
    {
        font-size:32px;
        line-height:3rem;

    }
    
    .believe_section_child_right_content
    {
        width:100% !important;
    }
    
    
    
    
    
    .beauty_section_beauty_child
    {
        display:flex;
        flex-direction: column;
        width:95% !important;
    
    
        
    }
    
    .beauty_section_beauty_child_left 
    {
        width:100% !important;
    
    
    }
    
    .beauty_section_beauty_child_left>h3 
    {
        font-size:34px;
        line-height:3rem;

    }
    
    .beauty_section_beauty_child_right
    {
        display:flex;
        flex-direction:column;
        width:100%;
        margin-top:2rem;
        gap:3rem;
    
    }
    
    .beauty_section_beauty_child_right_card
    {
        width:100%;
    }


/* blog css */


.slider-container
{
    width:95%;
    overflow-x: auto;
            overflow-y: hidden;

            white-space: nowrap;
            scroll-behavior: smooth;
            height:35rem;
}

.blog_box>h2 
{
    width:95%;

}

.blog_card
{
    display: inline-block;
            width:100%;
            margin-right: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            overflow: hidden;
            white-space: normal;
            vertical-align: top;
            height:100%;
            border-radius:5px;
            border:1px solid skyblue;
}

.blog_card img 
{
height:40%;
}


.blog_card_content
{
    height:60%;
}

.blog_card_content>h4 
{
    font-size:1.5rem;
}

.blog_card_content>p 
{
    font-size:18px;
    line-height:1.7rem;
}


    
    /* form section */
    
    .form_section_child
    {
        display:flex;
        flex-direction:column;
        box-shadow: #f8f9fa;
    }
    
    .form_section
    {
        width:100% !important;
    }
    
    .user_box
    {
        width:100%;
    }
    
    .user_box>input 
    {
        width:100%;
    }
    
    .form_section>h3 
    {
        padding-left:2rem;
        font-size:34px;
    }

    .form_button>input 
    {
        width:100%;


    }
    
    .form_button
    {
        width:100%;
        margin-left:0rem !important;

    }
    
    
    /* footer section */
    
    .footer_section_child
    {
        display:flex;
        flex-direction:column;
    }
    
    .footer_section_child_card1
    {
        width:100% !important;
    
    }
    
    
    .footer_section_child_card1>img 
    {
        width:100% !important;
    }
    
    .footer_section_child_card>p 
    {
        color:rgb(160, 160, 160);
    }
    
    .footer_section_child_card>h3 
    {
        font-size:2rem;
    }
    
    
    .footer_section_child_card
    {
        width:100%;
        height:auto;
        margin-top:2rem;
    }
    
    .icon_box
    {
    display:flex;
    flex-direction:row;
    margin-top:2rem;
    
    }
    
    .social_icon
    {
        font-size:4rem;
        color:white;
    }
    
    
    }



    @media (min-width:1024px) and (max-width:1346px)
  
    {



.service_card
{
    width:30%;
}

.believe_section
{
    padding:6rem 0 7rem 0;
    height:auto;
}



    }


    @media (min-width:960px) and (max-width:1080px)

    {

        
        .banner_section
        {
height:auto;
        }

.banner_section_child
{
    height:auto ;
}


/* belive section css */

.believe_section
{
    padding:9rem 0 3rem 0;
    height:50rem;
    box-sizing:border-box;
}

.believe_section_child_right
{
height:auto;
box-sizing:border-box;

}



    }