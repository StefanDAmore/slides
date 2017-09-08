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
Bilder
+++
![Prozess Kundensicht](/assets/images/PRESENCE_Process_de-Kunde.jpg)
+++
![Ablauf Kreis](Grafik_Ablauf_Kreis_blue_DE_2)
+++
![Prozess mit Partner](/assets/images/PRESENCE_Process_de-internal.jpg)
+++
![Prozess allgemein](/assets/images/PRESENCE_Process_de.jpg)
+++
![Custom Post Type Kundenmeinung](/assets/images/kundenmeinung.jpg)
+++?image=/assets/images/IMG_20160614_134947.jpg
Post it's 1
+++?image=/assets/images/IMG_20160614_134746.jpg&size=cover
Post it's 2
+++?image=/assets/images/IMG_20160614_134734.jpg
Post it's 3
---
Next: Onboarding Prozess
---
Onboarding-Prozess:
1.	Ihre Webseite braucht eine Aufgabe
Machen Sie sich Gedanken darüber, was Sie mit Ihrer Webseite erreichen wollen.
2.	Die Zielgruppe für Ihre Internet Präsenz
Mit Hilfe einer ausgedachten Person, definieren Sie repräsentativ Ihre Zielgruppe.
3.	Stellen Sie sich vor
Knapp und präzise präsentieren Sie sich und Ihre Vorteile für potentiellen Kunden.
4.	Das Profil und die Aufgaben Ihrer Webseite
Sie formulieren Sie den Hauptzweck Ihrer Internet Präsenz.
5.	Funktionelle Anforderung an die Webseite
Hier definieren Sie, welche Funktionen und Möglichkeiten Ihrer Internet Präsenz beinhalten soll
6.	Interaktion und Soziale Medien
Auf welchen Plattformen möchten Sie mit Ihren Kunden in Kontakt treten?
7.	Inhalte und Gestaltung
Wie sollen die Inhalte auf der Webseite strukturiert werden und in welchem Design möchten Sie auftreten?
8.	Launchpage und Lead-Magnet
Beginnen Sie mit dem Bekanntmachen Ihrer neuen Internet Präsenz.
Marketing und Bekanntmachung
Wie finden Kunden und Interessenten Ihre Webseite?

---
Erlebnisse mit Betatestern:

- Wir bieten ein kostenloses erstes Jahr an, der Kunde nimmt zwei 
- Wir schreiben dem Kunde, seine Landing Page sei jetzt online 
und höre nichts, bis er eine Woche später droht, weil das Kontaktformular nicht funktioniere.
- es gab natürlich auch positive, schöne Beispiele, wie der Rebel, der bei seiner Ausstellungseröffnung im Landesmuseum rundum allen erzählt, wie begeistert er ist und wie gut und schnell wir seien obwohl es eigentlich keinen Anlass gibt darüber zu erzählen.

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

