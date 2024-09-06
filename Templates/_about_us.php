<style>

    form{
        margin: 15px 5px;
        width: 500px;
        font-size: 16px;
    
    }
    form h1{
        text-align: center;
    }

    form input, form textarea{
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        box-sizing: border-box;
        resize: vertical;
    }
    form button{
        background: #4CAF50;
        color: white;
        padding: 10px 15px;
        margin-top: 5px;
        border: none;
        cursor: pointer;
    }
    form button:hover{
        background: green;
    }
</style>
<br>

    <section id="about us">

    <div class="container">
        <center>
        <div class="card text-bg-secondary mb-3 text-center" style="max-width: 70rem;">
            <div class="card-header fs-2 fw-medium">About Us</div>
            <div class="card-body ">
                <p class="card-text fs-4">Welcome to Genius Mobile Shop, where cutting-edge technology meets exceptional service.
                    We're dedicated to providing the latest in mobile phones, accessories, and repairs, all while delivering an unparalleled shopping experience.
                    At Genius Mobile Shop, we are passionate about technology and committed to providing our customers with the best shopping experience.
                    Our mission is to offer high-quality products and exceptional service, helping you stay connected and productive.
                    Visit us today and discover why we are the trusted choice for mobile technology enthusiasts.
                    <br><br>
                    Your One-Stop Destination for Mobile Excellence.</p>
            </div>
        </center>
        </div>




        <div class="container">
            <center>
        <div class="card text-bg-secondary mb-3 " style="max-width: 32rem;">
        <form>    
        <div class="card-header fs-2 fw-medium text-center">Contact Us</div>
            <label for="">Name</label>
            <input type="text" class="name">

            <label for="">Email</label>
            <input type="text" class="email">

            <label for="">Country</label>
            <input type="text" class="country">

            <label for="">Message</label>
            <textarea class="message"></textarea>
            <button type="button" class="text-center" onclick="sendwhatsapp();">Send Via WhatsApp</button>
        </form>
        </div>
            </center>
        </div>


    <div class="container py-5 text-center">
        <img src="./assets/about1.png" alt="blog1" class="img-fluid" style="width: 500px; height: 500px;">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <img src="./assets/about2.png" alt="blog2" class="img-fluid" style="width: 500px; height: 500px;">
    </div>
    </section>


<br>
<script>
    function sendwhatsapp(){
        var phonenumber = "+94710184876";

        var name = document.querySelector(".name").value;
        var email = document.querySelector(".email").value;
        var country = document.querySelector(".country").value;
        var message = document.querySelector(".message").value;

        var url = "http://Wa.me/" + phonenumber + "?text="
            +"*Name :* "+name+"%0a"
            +"*Email :* "+email+"%0a"
            +"*Country:* "+country+"%0a"
            +"*Message :* "+message
            +"%0a%0a"
            +"This is an example of send HTML form data to WhatsApp";

        window.open(url, '_blank').focus();
    }
</script>