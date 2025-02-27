<?php
// index.php
require_once('style.css');
require_once('chatbot.js');

// Adiciona o CSS e o JS do chatbot
//$PAGE->requires->css(new moodle_url('/local/chatbot_moodle_teste/style.css'));
//$PAGE->requires->js(new moodle_url('/local/chatbot_moodle_teste/chatbot.js'));

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Moodle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <button id="chat-button">💬</button>
    <div id="chat-container">
        <div id="chat-header">
            <div id="chat-header-left">
                <img src="https://i.imgur.com/6RK7NQp.png" alt="Bot">
                <div id="chat-title">
                    <div>Toinha Moodle</div>
                    <span id="chat-status">Online agora</span>
                </div>
            </div>
            <button id="close-chat">✖</button>
        </div>
        <div id="chat-messages"></div>
        <div id="chat-input">
            <input type="text" id="user-input" placeholder="Digite sua pergunta...">
            <button id="send-button">➤</button>
        </div>
    </div>

    <script src="chatbot.js"></script>
</body>
</html>
