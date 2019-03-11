<h2>Simple PHP Contact Form</h2>
<div class="contactFrm">    
    <form action="check.php" method="post">
        <h4>Name</h4>
        <input type="text" name="name" placeholder="Your Name" required="">
        <h4>Email </h4>
        <input type="email" name="email" placeholder="email@example.com" required="">
        <h4>Message</h4>
        <textarea name="message" placeholder="Write your message here" required=""> </textarea>
        <input type="submit" name="submit" value="Submit">
        <div class="clear"> </div>
    </form>
</div>

