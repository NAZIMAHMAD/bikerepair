
<?php



header("Content-type: text/css; charset: UTF-8");


?>








*
{
    padding:0rem;
    margin:0rem;
    font-family:Arial,sans-serif;
}


/* this is login page css  */

.login_container
{
    width:100%;
    height:100vh;
    background-color:whitesmoke;
    display:flex;
    justify-content:center;
    align-items:center;
    

}

.login_container_child
{
    width:80%;
    background-color:white;
    height:30rem;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    border-radius:8px;
   
    
}

.login_container_child_left 
{
    background-color:red;
    width:60%;
    height:100%;
    border-radius:8px;



}

.login_container_child_left>img 
{
    width:100%;
    height:100%;
    border-radius:8px 0 0 8px;

}

.login_container_child_right
{
    width:40%;
    height:100%;
    display:grid;
    place-items:center;
    text-transform:capitalize;

   
}

.form_box>h1 
{
font-size:40px;

}

.form_box_child input
{
    display:block;
    width:20rem;
    height:3rem;
    border-radius:5px;
    border:1px solid #999DA0;
    text-transform:capitalize;
    padding-left:1rem;

    
}

.form_box_child label
{
    font-size:18px;
    font-weight:700;
    margin:2rem 0rem 1rem 0;
    display:block;
    color:#363636;
    word-spacing:2rem;


    
}



.form_box
{
    width:auto;
    height:auto;
    
    
}

.form_box>input 
{
    width:10rem;
    height:3rem;
    background-color:red;
    color:white;
    text-transform:capitalize;
    outline:none;
    border:none;
    margin-top:2rem;
    line-height:2px;
    font-size:18px;
    word-spacing:4px;
}

.error_message
{
    color:red:
    padding-top:1rem;
}



/* admin page css */

main
{
    height:100vh;
    width:100%;
    background:whitesmoke;
    text-transform:capitalize;
}

header
{
    width:100%;
    height:12%;
    background:skyblue;
    display:grid;
    place-items:center;

}

header h3 
{
   display:inline-block;
   color:white;
   width:95%;
   letter-spacing:2px;
   
    
}

.main_section
{
    width:100%;
    height:88%;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.main_section_left
{
    width:10%;
    height:100%;
    background:black;
    display:grid;
    place-items:center;
}

.main_section_right 
{
    width:90%;
    height:100%;
    display:grid;
    place-items:center;
}

.main_section_left>ul 
{
    width:100%;
}


.main_section_left>ul>li 
{
    padding-top:1rem;
    list-style:none;
    padding-left:2.2rem;
    color:white;
}

.main_section_right_child
{
    width:97%;
    height:95%;
    background:white;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    border-radius:5px;   
    overflow:auto;

}

.main_section_right_child_header
{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:1rem;
}

.main_section_right_child_header>li 
{
    list-style:none;
    font-size:14px;
    border-right:1px solid grey;
    width:10%;
    padding:1rem;
    padding-left:3rem;
    



}



.main_section_right_child_item
{
    display:flex;
    justify-content:space-between;
    align-items:start;
    width:97%;
   
}

.main_section_right_child_item li 
{
    list-style:none;
    width:10%;
    padding:1rem;
    height:5rem;
    overflow:auto;
    border-bottom:1px solid grey;
    text-align:center;


}

.main_section_right_child_item>li>a 
{
    width:5rem;
    display:inline-block;
    text-decoration:none;
    background:skyblue;
    color:white;
    font-size:0.8rem;
    height:1.9rem;
    border-radius:5px;
    padding-top:0.5rem;
    box-sizing:border-box;
    
}

.main_section_right_child_item>li 
{
    font-size:0.8rem;
    color:grey;

}

.main_section_left>ul>li>a 
{
    text-decoration:none;
    color:white;
}



/* create page css */

.form_container
{
    width:100%;
    height:100vh;
    display:grid;
    place-items:center;
    border:none;
    background:skyblue;

}

.form_container_child
{
    width:80%;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    background:skyblue;
    padding:2rem;
    border-radius:1rem;
    
}

.form_container_child>input 
{
    width:20rem;
    height:2.5rem;
    padding-left:1rem;
    box-sizing:border-box;
    margin-top:1rem;
    border:1px solid whitesmoke;
    background:white;

}

.form_container_child>textarea 
{
    width:20rem;
    padding-left:1rem;
    box-sizing:border-box;
    margin-top:1rem;
    padding-top:1rem;

}

.form_container_child>button 
{
    width:15rem;
    height:3rem;
    background:red;
    color:white;
    outline:none;
    margin-top:1rem;
    border:none;
}

.form_container>h3 
{
    text-transform:capitalize;
    font-size:3rem;
}

/* edit blog */

.form_container
{
border:1px solid red;
    width:100%;
    height:100vh;
background:skyblue;
text-align:center;
}

.form_group
{
    margin-top:1rem;

}

.form_group>textarea 
{
    width:20rem;
    padding-left:1rem;
    box-sizing:border-box;
    margin-top:1rem;
    padding-top:1rem;
}



.form_group>input 
{
   
    width:20rem;
    height:2.5rem;
    padding-left:1rem;
    box-sizing:border-box;
    margin-top:1rem;
    border:1px solid whitesmoke;
    background:white;


}

.form_section button 
{
    width:15rem;
    height:2.5rem;
    background:red;
    margin-top:2rem;
    border:none;
    color:white;
}



