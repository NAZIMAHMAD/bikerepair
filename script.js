


const navbar = () =>


    {

        document.getElementsByClassName("navbar_list")[0].style.display="block";

    }



    const cut = () =>


        {
    
                        document.getElementsByClassName("navbar_list")[0].style.display="none";
    
        }


        
let form = document.getElementById("contact_form");

form.addEventListener("submit", (event) => {
    event.preventDefault(); // Prevent form submission

    // Get form field values
    let name = document.getElementsByClassName("name")[0].value;
    let number = document.getElementsByClassName("number")[0].value;
    let problem = document.getElementsByClassName("problem")[0].value;
    let date = document.getElementsByClassName("date")[0].value;
    let whatsappNumber = '8233961473';

    // Construct WhatsApp message with headers
    let whatsappMessage = `can you help with such problem to my bike repair:||`;
    whatsappMessage += `Name: ${name},,,,`;
    whatsappMessage += `Number: ${number},,,,`;
    whatsappMessage += `bike problem: ${problem},,,,`;
    whatsappMessage += `Date: ${date},,,,`;

   
    // Create WhatsApp link
    let whatsappLink = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

    // Redirect to WhatsApp
    window.open(whatsappLink, '_blank');
});
