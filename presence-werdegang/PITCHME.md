![Logo](/assets/images/wcbrn_banner.png)

Werdegang eines WordPress basierten Produktangebots!

---?image=/assets/images/online-offline.png

Unter dem Motto *am einfachsten geht online offline* bieten wir bei switchplus ein neues Produkt an
&nbsp;
&nbsp;
---
- Wie kam es dazu (warum)?
- Erfahrungen und Schwierigkeiten
- Erlebnisse mit Betatestern
- Lessons learned
---
_Wer bin ich?_
- Voller Ideen
- Die Möglichkeiten des Internet begeistern mich seit 1995
- WordPress kenne ich seit ca. 2007 (Kontoerstellung bei .com)
- Account bei wordpress.org seit 2008
- chruezundquer.ch gibt es seit 2003, seit 2010 WordPress


Note:
bereits ab 1995: Bulletin Boards (Modem) und noch vorher "Programm" auf Casio Rechner für Misch-Kreuz
+++
- 26.05.2003: chruezundquer.ch
- 05.05.2010: Umstellung auf WordPress (davor pures HTML, Dreamweaver bzw. HomeSite)
- 24.01.2011 erster veröffentlichter Beitrag (Relaunch von psd-tutorials.de, 91 Worte, Hinweis auf Gewinnspiel)
- 28.03 2011 zweiter Artikel (2 Monate später, Grosse Dateien versenden, 106 Worte)

_So fleissig habe ich seither nie mehr gebloggt ;-)_

Note:
chruezundquer.ch: doofer Name, den ich cool fand bis ich herausfand, dass ich ihn immer erklären muss&hellip;
&hellip;
+++
Bis dort (2011) 15 nie veröffentlichte Beiträge, die immer noch als Entwurf vorhanden sind&hellip;
&hellip;
---
#### WordPress bei switchplus
__Erste Phase (intern):__
- Eigene Seite von der Registrierungs-Applikation entkoppeln |
- Bis dahin benötigte fast jede Änderung von Content einen Software-Release[sic]! |
- switchie.ch (Wissensdatenbank) von einem CH-CMS auf WordPress umstellen

Note:
muss ca. 2012 gewesen sein
___
#### WordPress bei switchplus
__Zweite Phase (Angebot):__
- kostenpflichtige WordPress-Installation mit wenigen, aber sinnvollen vorinstallierten Plugins
- (bzw. entfernten "Hello Dolly" und "Akismet") |
- Enthält eine Art Muster-Webseite mit integrierter Doku und Blog zu neuesten Änderungen in WordPress statt nur "Hallo Welt!" |
- Kunde darf beliebiges (auch kostenpflichtiges) Theme wählen, welches wir ihm (auf Wunsch inkl. Musterdaten) installieren

Note:
Kunden konnten schon vorher auf ihrem Hosting WordPress selber installieren. Aber wir bieten keine "One Click Installation".

---
__Wie sah/sieht das aus?__
---?image=/assets/images/wp-master-screenshot2.png
---?image=/assets/images/wp-master-screenshot-blog.png
---?image=/assets/images/wp-master-screenshot-blog1.png
---?image=/assets/images/wp-master-screenshot1.png
---?image=/assets/images/wp-master-screenshot3.png
---
### Was ist das Problem?
---
- Kunden wählten "schlimme" Themes |
Was meine ich damit?
z. Bsp:
- nicht standardkonform / the WordPress way
	- Es gab einen Theme-Anbieter, bei dem die Demodaten nur funktionierten, wenn der Admin die *user-id=1* besass und *admin* hiess und die WordPress DB das Standardpräxix "*wp_*" nutzte (was wir aus Sicherheitsgründen immer geändert hatten)
	- überfrachtete Option Panels (WordPress Philosophie wäre "Decisions not Options"
	- &hellip;
&hellip; das führte zur dritten Phase:
---
#### WordPress bei switchplus
__Dritte Phase (Schulungen):__
- zuerst in Zusammenarbeit mit der Migros klubschule in Zürich
- dann in eigenen Schulungsräumen und via Webinare
+++?image=/assets/images/ScreenShot_Webinar_2015-12-22 at 13.09.44.png
---
#### WordPress bei switchplus
__Dritte Phase (Schulungen):__
- &hellip;
&hellip;
- Schulungen halfen Kunden auch zwischen HomePageTool und WordPress zu entscheiden
- Spezialisierung auf eigenes HomePageTool und WordPress

Note:
sehr kurzfristige Anmeldungen machten es schwierig weil wir bei der klubschule voraus definitiv zu/absagen mussten

Als Hoster testeten wir zwar andere CMS, die auf unseren Servern garantiert funktionierten.
Mehr als Standard-Support boten wir nun explizit nur noch für das eigene HomePageTool und WordPress an
---
#### WordPress bei switchplus
__Vierte Phase (Website as a Service):__
- explizit 2 Zielgruppen:

![TOOLfree - PRESENCE](/assets/images/toolfree-presence.png)

Note:
Zielgruppen
- Hobby / Profi
- schnell & einfach / profitorientiert (ZKB slogan: Bei uns muss Ihre Webseite arbeiten)
---
#### Wir definieren:
![PRESENCE Vorstellung](/assets/images/presence-vorstellung.png)
---
__Sammeln und sortieren Anforderungen__
---
+++?image=/assets/images/IMG_20160614_134734.jpg
Anforderungen werden gesammelt&hellip;
&hellip;+++?image=/assets/images/IMG_20160614_134746.jpg
&hellip; gruppiert &hellip;
+++?image=/assets/images/IMG_20160614_134947.jpg
Anforderungen (2016)
+++?image=/assets/images/20160810_170743.jpeg
Anforderungen (2016)
---
__Stellen und beantworten Fragen__
- WordPress Multisite oder individuelle Sites?
- Auswahl an Themes oder (eigenes) Theme-Framework?
- Plugins?
	- Welche? (Open Source, Lizenzieren, selber schreiben&hellip;)
- &hellip;
+++
__WordPress Multisite oder individuelle Sites?__
- individuelle Sites auf einem CloudLinux mit abgeschotteten Instanzen
- Hauptgrund: Skalierbarkeit ist technisch einfacher
- 
Note:
Viele Kunden --> viele Server
Bei Multisite wird DB zum Flaschenhals, die auf mehrere Server verteilt werden muss
+++
__Auswahl an Themes oder (eigenes) Theme-Framework?__
- eigenes Theme / CSS Framework
- Hauptgrund: Themes von unterschiedlichen Quellen verfolgen oft unterschiedliche Philosophien, z. Bsp.
	- Dateistruktur
	- Customizer Optionen
	- Benennung von Menupositionen / Widget-Areas
	- Wie Social Menues, Unterseiten- / Post-Grids genutzt werden
	- etc.
- Das heisst, selbst eine sorgfältig zusammengestellte Auswahl von qualitativ sehr guten Themes wird aufwändig zu supporten
- 
+++
__Modularer Ansatz__
Wir haben uns deshalb entschieden, ein eigenes Theme-Framework zu entwickeln:

+++?image=/assets/images/invisionapp-presence-template.png

Note:
- Der modulare Ansatz ist die Idee
- mit ersten Pilotkunden haben wir einzelne Module entwickelt.
- Der Aufwand ist aber enorm, grösser als vorgesehen.
- Wir sind noch nicht da, wo wir hinwollen
- Mittelfristig sollte ein visuelles Tool, a la [components.underscores.me](https://themeshaper.com/2017/06/26/the-future-of-underscores-and-a-new-committer/) (Ulrich Pogson) die Initalisiserung neuer Projekte erleichtern.
- das war jetzt etwas technisch, zurück 


![Prozess Kundensicht](/assets/images/PRESENCE_Process_de-Kunde.jpg)
+++?image=/assets/bg/bg.jpg

![Ablauf Kreis](/assets/images/Grafik_Ablauf_Kreis_blue_DE_2.png)

+++
![Prozess mit Partner](/assets/images/PRESENCE_Process_de-internal.jpg)

+++
![Prozess allgemein](/assets/images/PRESENCE_Process_de.png)

+++
![Custom Post Type Kundenmeinung](/assets/images/kundenmeinung.png)

+++?image=/assets/images/IMG_20160614_134734.jpg
Anforderungen werden gesammelt&hellip;
&hellip;
+++?image=/assets/images/IMG_20160614_134746.jpg
&hellip;
&hellip; gruppiert &hellip;
&hellip;
+++?image=/assets/images/IMG_20160614_134947.jpg
Anforderungen (2016)
+++?image=/assets/images/20160810_170743.jpeg
Anforderungen (2016)

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
Presence Logo
![PRESENCE](/assets/images/presence-logo.png)
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
3. Und er wollte uns unbedingt als "Sponsor" auf seiner [Rebel Video](https://rebelvideo.ch/ueber/) erwähnen&hellip;
&hellip;



******************
******************
******************
******************

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
![das bin ich](/assets/images/kundendienst.jpg)
---
TODO:
Ablösung RegApp WP Jahr?

