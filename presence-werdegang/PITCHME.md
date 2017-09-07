![Logo](/assets/images/wcbrn_banner.png)

Werdegang eines WordPress basierten Produktangebots!

---?image=/assets/images/wcbrn_banner.png

Unter dem Motto *am einfachsten geht online offline* bieten wir neu ein Produkt ![PRESENCE](/assets/images/presence-logo.png)

---
- Slide |
- mit |
- "Fragmenten"|

---
Next

## das ist die Folie Zwei

![Info-Video](https://www.youtube.com/embed/tb7VplYMDoM)
---
### Zwei A!

Note:
Dies sind Notizen.
- eins
- zwei
- drei

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
## Slide 2 (b)
---
Next

