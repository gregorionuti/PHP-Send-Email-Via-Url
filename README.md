# PHP Send Email Via Url
### Send email via url passing get parameters.

This very simple php script allows to **send email in php via url** by sending get parameters. It returns a response in json format depending if the email has been sent or not.

Emails are sent via [php mail function](https://www.php.net/manual/en/function.mail.php).
 
![GitHub Release](https://img.shields.io/github/v/release/gregorionuti/PHP-Send-Email-Via-Url)
![GitHub last commit (branch)](https://img.shields.io/github/last-commit/gregorionuti/PHP-Send-Email-Via-Url/main)
![GitHub License](https://img.shields.io/github/license/gregorionuti/PHP-Send-Email-Via-Url)
![Static Badge](https://img.shields.io/badge/7.2%2B-purple?logo=php&logoColor=white&label=php)

---

#### Usage
The url should be formatted like
```
https://DOMAIN.EXT/mail.php?to=RECEIVER&from=SENDER&subject=SUBJECT&txt=CONTENT
```
where
- DOMAIN.EXT is the domain hosting the script (string)
- RECEIVER is the receiver email address (email)
- SENDER is the sender email address (email)
- SUBJECT is the subject text (string)
- CONTENT is the message text (string)
- response_code is the parameter returned in json format (value can be 0 or 1 depending if the email has been sent or not)

---

#### Links
- :speech_balloon: [Discord server](https://discord.gg/VCtqbgjERH)

---

#### Support
:coffee: Did you find it useful? You might consider buying me a coffee :blush:

[![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/Z8Z4U0RY9)

Thanks for all the caffeine :coffee: :coffee: :coffee:

---

#### Contributing
Pull requests with bugfixes and implementations are much appreciated. I'll be happy to review them and merge them once they're ready.