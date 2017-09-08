![Logo](/assets/images/wcbrn_banner.png)

Werdegang eines WordPress basierten Produktangebots!

---?image=/assets/images/online-offline.png

Unter dem Motto *am einfachsten geht online offline* bieten wir bei switchplus ein neues Produkt an
![PRESENCE](/assets/images/presence-logo.png)

---
- Wie kam es dazu (warum)?
- Erfahrungen und Schwierigkeiten
- Erlebnisse mit Betatestern
---
Wer bin ich?
Lehrertyp: ich will, was ich weiss anderen beibringen.
Seit 1996 begeistert vom Internet/Web

Note:
bereits ab 1995: Bulletin Boards (Modem) und noch vorher "Programm" auf Casio Rechner für Misch-Kreuz 

---
Erlebnisse mit Betatestern:

- Wir bieten ein kostenloses erstes Jahr an, der Kunde nimmt zwei |
- Wir schreiben dem Kunde, seine Landing Page sei jetzt online |  
und höre nichts, bis er eine Woche später droht, weil das Kontaktformular nicht funktioniere.
- es gab natürlich auch positive, schöne Beispiele, wie der Rebel, der bei seiner Ausstellungseröffung im Landesmuseum rundum allen erzählt, wie begeistert er ist und wie gut und schnell wir seien obwohl es eigentlich keinen Anlass gibt darüber zu erzählen.

Note:
1. Eine Firma, zwei total unterschiedliche Geschäfte
2. Zuerst erklärte er, seine Seite dürfe nicht früher als x online sein (Konkurrenzverbot, war noch angestellt und wollte sich selbständig machen), dann sollte es plötzlich doch früher sein.
Mails waren in seinem Spam-Ordner. (Mail wollte er extern behalten).  
Keine Reaktion auf unsere Hilfe, bis zum nächsten "juristischen" Mail.
3. Und er wollte uns unbedingt als "Sponsor" auf seiner [Rebel Video](https://rebelvideo.ch/ueber/) erwähnen...




---
## Folie Zwei mit YouTube Video

![Info-Video](https://www.youtube.com/embed/tb7VplYMDoM)
---
### Folie mit Speaker notes

<code>S</code>
oder <code>?n=true</code>

Note:
Dies sind Notizen.
- eins
- zwei
- drei

---
Next: Code from file

---?code=/assets/code/functions.php

---
Inline Code

```
		add_theme_support( 'html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		] );
```

---
Inline Code with fragments


```python
from time import localtime

activities = {8: 'Sleeping', 9: 'Commuting', 17: 'Working',
              18: 'Commuting', 20: 'Eating', 22: 'Resting' }

time_now = localtime()
hour = time_now.tm_hour

for activity_time in sorted(activities.keys()):
    if hour < activity_time:
        print activities[activity_time]
        break
else:
    print 'Unknown, AFK or sleeping!'
```

@[1](Python from..import statement)
@[3-4](Python dictionary initialization block)
@[6-7](Python working with time)
@[9-14](Python for..else statement)
---

