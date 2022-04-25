<html>

<head>

</head>
<style>
    body {
        text-align: center;
        margin-top: 100px;
    }

    .send_sms {
        margin-left: 250px;
    }

    #msg_section {
        height: 200px;
        width: 300px;
    }

    #phone_number {
        margin-right: 118px;
    }
</style>

<body>

    <form method="POST" action="<?php echo base_url() ?>twilio_message/send_twiliosms">
        <h1>Send message</h1>
        <input type="text" id="phone_number" name="phone_number" placeholder="Enter phone number">
        <br>
        <br>
        <textarea id="msg_section" placeholder="write sms" name="text_msg"></textarea>
        <br><br>
        <button type="submit" class="send_sms" name="send_sms">send sms</button>
    </form>

</body>

</html>