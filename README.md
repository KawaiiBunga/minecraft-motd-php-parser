# minecraft-motd-php-parser
Minecraft MOTD/Map text parser for PHP
---------------------------------------
This function returns Minecraft MOTD/Map text that is given to it and displays it how it would it game.

Example:
- Map text returned from a server query (Unformatted):
![image](https://github.com/KawaiiBunga/minecraft-motd-php-parser/assets/107073565/a7a02dcb-da32-468d-8332-ce0afd6040fa)
- Map text parsed with this function and placed in a bootstrap bubble:
![image](https://github.com/KawaiiBunga/minecraft-motd-php-parser/assets/107073565/9e73188e-b2f7-4c51-a2b5-688b939d22a2)


How to use:
- Download and include this file in your PHP project ```require_once('motd-parser.php')```, or copy and add this function to that file.
- Wrap your Map or MOTD text in this function ```$map = parseMinecraftText('§r§fᴄʟᴀɴs§r    §r§b§k§li§r§d§k§li§r§b§k§li§r§b §r§d#1 ᴘɪxᴇʟᴍᴏɴ ɴᴇᴛᴡᴏʀᴋ §r§b§k§li§r§d§k§li§r§b§k§li§r§b    §r§fǫᴜᴇsᴛs');```
- Profit
