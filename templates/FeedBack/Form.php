<h1>FeedBack</h1>

<form action="<?= $formPath ?>" method="post">
    <input type="text" name="nick" placeholder="Enter your name"><br>
    <textarea name="message" cols="30" rows="10">Enter your message</textarea><br>

    <select name="mark">
        <option value=”1”>1</option>
        <option value=”2”>2</option>
        <option value=”3”>3</option>
        <option value=”4”>4</option>
        <option value=”5”>5</option>
    </select>
    <input type="submit" value="send">
</form>