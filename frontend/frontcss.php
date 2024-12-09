<?php



header("Content-type: text/css; charset: UTF-8");


?>

*
{
    padding:0rem;
    margin:0rem;
    font-family: sans-serif; /* or another generic font family */


}




:root
{
    --padding:4rem 0 3rem 0;
    --parh-size:18px;
    --heading-size:64px;
    --btn-font:0.8rem;
    --nd_heading:40px;



}


/* header css */



.logo_box
{
width:15rem;
height:7rem;
border-radius:50%;
}

.logo_box>img
{
width:100%;
height:7rem;
border-radius:50%;


}

.subheader
{
    background-color:rgb(12, 12, 12);
    text-align: right;
    font-size:14px;
    padding:5px 6.5rem 5px 0;
    color:white;
}

.subheader>a 
{
    text-decoration:none;
    color:white;
}



/* header css */

header
{
    width:100%;
    background-color:transparent;
    height:7rem;
    display:grid;
    place-items: center;
    background-color:white;
    z-index:1000;
    box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px;
}


.child_header
{
    display:flex;
    justify-content:space-between;
    align-items:center;
    width:85%;
    text-transform: capitalize;

}

.navbar_list>i 
{
    display:none;
}

.child_header i 
{
    display:none;
}

.navbar_list 
{
    display:flex;
    justify-content:space-around;
    align-items: center;
}


.navbar_list>ul>li 
{
display:inline-block;
padding-left:1rem;
font-weight:700;

}

.navbar_list>ul>li>a
{
    text-decoration:none;
    color:black;

}


.header_btn
{
    width:10rem;
    height:3rem;
    border-radius:5px;
    color:white;
    background-color:black;
    text-transform: capitalize;
    font-size:var(--btn-font);
    font-weight: 400;
    display:grid;
    place-items:center;


}


.header_btn1
{
    display:none;
}




/* hero section */


.hero_section {
    position:relative;
    width: 100%;
    z-index:1;
    overflow: hidden;
    height: calc(100vh - 5rem); /* Adjust height to exclude header height */


  
}

.overlay {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.3); /* Black overlay with 50% opacity */
    z-index: 100;
}

.slider {
    position: absolute;
    width:100%; /* Adjust as needed */
    height:100%; /* Adjust height as needed */
    overflow: hidden;
    top:0rem;
    
}

.slides {
    display: flex;
    transition: transform 0.5s ease;
   

}

.slide {
    flex: 0 0 100%;
    height: 100%;
    width:100%;
 

}

.slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: white;
    font-size: 18px;
    cursor: pointer;
}

.prev {
    left:9rem;
}

.next {
    right:10rem;
}

.div
{
    position: relative;
    top:0;
    
}


/* service comonets */

.service_card
{
    width:23rem;
    height:20rem;
}


.service_section_child>h2 
{
    font-size:var(--nd_heading);
    text-transform: capitalize;
    font-weight: 700;
    color:red;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.service_section_child>p 
{
    font-size:var(--parh-size);
    line-height:36px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size:18px;
    padding-top:30px;

}

.service_card>img 
{
    width:100%;
    height:17rem;
}

.service_section
{
    padding:var(--padding);
    background-color: aliceblue;
    margin: auto;

}

.service_section_child_content
{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-top:3rem;
    flex-wrap: wrap;
    gap:1.2rem;
    width:100%;
    
    
      
    
}

.service_card>p 
{
    display:inline-block;
    width:50%;
    height:3rem;
    background-color:black;
    position: relative;
    bottom:1rem;
    right:1rem;
    color:wheat;
    display:grid;
    place-items: center;
    text-transform: capitalize;
    font-size:13px;


}

.service_section_child
{
    width:85%;
    height:auto;
    border:1px solid aliceblue;
    margin: auto;
 
}



/* banner section */

.banner_section {
    width: 100%;
    height: 35rem;
    background-image: url("https://d2bywgumb0o70j.cloudfront.net/2020/01/13/ce64ed59e43fe05d9e8da689ece02808_941a97f52b92ae8d.jpg");
    background-size: cover; /* Ensures the image covers the entire container */
    padding: var(--padding); /* Padding defined by a CSS variable */
    position: relative;  
    z-index:1;
    /* Position relative to place the overlay correctly */

}

.overlay1 {
    position: absolute;      /* Position absolutely within the parent container */
    top: 0;                  /* Align to the top of the banner_section */
    left: 0;                 /* Align to the left of the banner_section */
    width: 100%;             /* Full width of the banner_section */
    height: 100%;            /* Full height of the banner_section */
    background-color:black; /* Background color for the overlay */
    opacity: 0.8; 
    z-index:-1;
}


.banner_section_child
{
    width:90%;
    text-transform: capitalize;   
    padding:3rem;
    z-index:999;
    margin:auto;
 
  
}

.banner_section_child h3 
{
    font-size:var(--nd_heading);
    font-weight: 700;
color:white;
font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
z-index:999;

}

.banner_section_child>p 
{
    line-height:36px ;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: 400;
    color:aliceblue;
    font-size:18px;
    padding-top:20px;
    z-index:999;



}


  
 

  /* belive section */
  

  .believe_section
  {
    padding: var(--padding);
    width: 100%;
    height:auto;
    position: relative;


  }

  .believe_section_child
  {
    height:30rem;
    display:flex;
    justify-content:space-between;
    align-items:center;
    width:100%;
    gap:2rem;

  }

  .believe_section_child_left,.believe_section_child_right 
  {
    width:70%;
    height:100%;

  }

  .believe_section_child_right
  {
    z-index:1;
    display:grid;
    place-items:center;
    height:auto;
  }

  .believe_section_child_left>img 
  {
    width:100%;
    height:100%;
  }

  .believe_section_child_right_content
  {
    width:90%;
    text-transform: capitalize;
    height:auto;
    
  }

  .believe_section_child_right_content>h3 
  {
    font-size:var(--nd_heading);
    font-weight: 700;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color:red;

}

.believe_section_child_right_content>p 
{
    font-size:28px;
    font-size:18px;
    line-height:36px;
    font-weight: 400;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    padding-top:30px;
}



/* beauty believe */

.beauty_section

{
    padding:var(--padding);
    background-color:aliceblue;
}

.beauty_section_beauty_child
{
    display:flex;
    justify-content:space-between;
    align-items:center;
    width:85%;
    margin:auto;
    gap:1rem;
}


.beauty_section_beauty_child_right_card>p
{
    display:inline-block;
    width:50%;
    background-color:red;
    height:3rem;
    display:grid;
    place-items:center;
    color:wheat;
    position: relative;
    bottom:3rem;
    text-transform:capitalize;
    font-size:13px;


}


 .beauty_section_beauty_child_left
{
    width:55%;
    text-transform: capitalize;
}

.beauty_section_beauty_child_left>h3 
{
    font-size:var(--nd_heading);
    font-weight: 700;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

}

.beauty_section_beauty_child_left>p 
{
    line-height:36px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size:18px;
    font-weight: 400;
    padding-top:30px;



}

.beauty_section_beauty_child_right
{
   
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:1rem;
    width:45rem;
    

}

.beauty_section_beauty_child_right_card>img 
{
    width:100%;
    height:100%;
}

.beauty_section_beauty_child_right_card
{
    width:48%;
    height:17rem;
}






/* Styles for the slider container */
     
.slider-container {
            width: 85%;
            overflow-x: auto;
            overflow-y: hidden;

            white-space: nowrap;
            scroll-behavior: smooth;
            margin:auto;
            height:30rem;
            margin-top:3rem;
            padding:0rem 0 2rem 0;

            
        }

        .slider-container::-webkit-scrollbar {
  display: none; /* Hides scrollbar in Webkit browsers */
}

        .blog_box
        {
            padding:var(--padding);
            border-bottom:1px solid grey;


        }

        .blog_box>h2 
        {
            width:85%;
            height:auto;
            margin:auto;
            font-size:var(--nd_heading);
            font-weight:700;


        }

        /* Styles for each card */
        .blog_card {
            display: inline-block;
            width:32%;
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

        /* Styles for images in the card */
        .blog_card img {
            width: 100%;
            height:40%;
            object-fit: cover;
            border-radius:5px;

        }

        /* Styles for card content */
        .blog_card_content {
            padding:2rem 0.5rem 0 0.5rem;
            height:60%;
            background:white;
            text-transform:capitalize;
            overflow:auto;
        }

        /* Styles for card headings */
        .blog_card h4 {
            font-size: 18px;
            color: #333;
            font-weight:700;
        }

        /* Styles for card paragraphs */
        .blog_card p {
            font-size: 14px;
            color: #555;
            padding-top:1rem;
            line-height:1.5rem;

        }







/* form container */

.form_section
{
    padding:1rem 0 4rem 0;

}

.user_box
{
width:40%;
height:auto;
text-transform:capitalize;
margin: auto;
}

.user_box>label
{
display:block;
font-size:18px;
padding-top:1rem;

}

.user_box>input 
{
    width:100%;
    padding-left:1rem;
    text-transform: capitalize;
    outline:none;
    height:3rem;
    margin-top:1rem;
    border:1px solid grey;
    border-radius:5px;

}

.form_section_child
{
    width:85%;
    margin: auto;
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap: wrap;

}

.form_section
{
    width:75%;
    margin:auto;

}

.form_section>h3 
{
    font-size:50px;
    text-transform: capitalize;
    font-weight: 700;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
height:1rem ;
display:inline-block;
padding:0rem;

}

.form_button
{
    width:40%;
    height:3rem;
    background-color:black;
    margin-top:2rem;
    margin-left:2.6rem;
    text-transform: capitalize;
    border-radius:5px;


}

.form_button>input 
{
    width:100%;
    height:3rem;
    color:white;
    text-transform: capitalize;
    background:red;
    border:none;
    font-size:1rem;
    border-radius:5px;
    

    


}
  

  
/* footer css */

.footer_section_child_card>ul
{
padding-left:0rem;
}



.footer_section
{
    padding:var(--padding);
    background-color:black;
}


.footer_section_child
{
    width:85%;
    height:auto;
    margin:auto;
    display:flex;
    justify-content:space-between;
}

.footer_section_child_card1
{
    width:30rem !important;
}

.footer_section_child_card>img
{
    width:9rem;
    height:9rem;
}

.footer_section_child_card
{
    color:white;
    width:20%;
    height:auto;
    box-sizing: border-box;
}

.footer_section_child_card>ul>li 
{
    list-style: none;
    color:grey;
    padding-top:1rem;
    text-transform: capitalize;
    font-weight: 400;
    font-size:18px;
}

.footer_section_child_card>ul>li>a 
{
    text-decoration:none;
    color:grey;

}



.footer_section_child_card>h3 
{
    font-size:20px;
    text-transform: capitalize;
    font-weight: 700;
}

.footer_section_child_card>p 
{
    padding-top:1rem;
    line-height:34px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color:grey;
}


.social_icon
{
    font-size:40px;
    padding-top:1rem;
       color:grey;
       
    ;
}

.icon_box>a:last-child
{
padding-left:2rem;
}


.subfooter_section
{
    padding:3rem 0 3rem 0;
    text-align:center;
    font-size:15px;
    background-color:black;
    color:rgb(80, 79, 79);
    text-transform: capitalize;
    border-top:1px solid rgb(31, 30, 30);
    


}