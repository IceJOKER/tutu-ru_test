# tutu-ru_test

Practical exercises:
1. --
2. Just Google It: *distributed cron jobs* => [dkron.io](), [https://facebook.github.io/bistro/]()
3. 
```
on new TM msg
do
    var emoji
    
    try
        emoji = getCountryEmoji (msg)
    catch CountryNotFoundException
        sendMsg('There is no country %s', msg)
     
    sendMsg("%s - https://wikipedia.org/wiki/%s",  emoji, msg)
done 
```