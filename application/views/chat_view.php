<!DOCTYPE html>
<html>

<head>
    <title>Feedback</title>
</head>
  
<div class="container-fluid">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" >
<body>
    <h2>Feedback</h2>

<form action="<?php echo site_url('chat/send_message'); ?>" method="post">
        <label for="sender">Sender:</label>
        <input type="text" name="sender" id="sender" required><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea><br>

        <input type="submit" value="Send">
    </form>

    
    <br>
    <div id="chat-messages">
        <?php foreach ($messages as $message) : ?>
            <p><strong><?php echo $message['sender']; ?>:</strong> <?php echo $message['message']; ?></p>
        <?php endforeach; ?>
    </div>
</body>
</html>
        </div>
    </div>
</div>
</div>


