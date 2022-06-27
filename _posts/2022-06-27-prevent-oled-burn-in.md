---
layout: post
title: How to Prevent Laptop OLED Burn-In
image: 
  path: /assets/img/blog/oled_title.jpg
sitemap: true
tags: [tech]
hide_last_modified: false
---
Did you buy a new OLED laptop?
{:.figcaption}

## Table of Contents

1. this ordered seed list will be replaced by the toc
{:toc}

So, I recently purchased an OLED screen laptop (Asus Space Edition to be precise) and was utterly blown away with how crisp and clear the image appears. Seriously, watching movies and consuming content on this thing is incredible. The biggest benefit for me is late night coding – bright LCD panels can’t compare to the deep blacks of an OLED; My eyes thank me.

So things sound well and dandy, right? Not quite. OLED panels suffer from a problem known as burn-in. Burn-in is essentially when you can see a ghosted image on your screen even after powering off the laptop. If you remember computers from the early 2000s, you’ll no doubt remember the animated screensavers being a thing. Phosphor burn-in similarly affected CRT monitors and we all got to enjoy those funky screensavers.

## Why do OLED screens get burn-in?

OLED stands for Organic LED, and organic implies that the pixels are self-lit. This means every pixel lights up by itself. OLED outputs the colours by lighting up the pixels on the screen, whereas traditional LCD screens use a backlight shone through a layer of colour filters to display an image.
The problem arises when a static image is displayed for a long period, the pixel itself will start to ‘burn in’ and the image will be permanently etched into your screen. Depending on the quality of the panel, some pixels will wear out before others and thus reduce the lifespan of the screen.
Although OLED panels are new for laptops, they have been around for quite a while in the mobile and TV space. I’ve compiled a few strategies you can use to mitigate OLED laptop burn-in.

## Brightness

By far the easiest and most impactful thing you can do is reduce the brightness. OLED panels degrade much faster on higher brightness settings since you are essentially pushing the pixels to output more light. You can change your power options to set a default brightness on a specific power plan. I rarely go above 30% unless actively consuming content.

## Pixel shifting

Pixel shifting is a technology that essentially switches the neighbouring pixels to display the same image. The effect of this is that your screen is unnoticeably shifting around pixels and forcing your panel to display a different image. Remember, static = bad with OLED screens.
My laptop comes with MyAsus which has a set of tools to enable this (along with pixel refresh). So far, I am unaware of any solution for Linux, so I would be cautious about running Linux long term on an OLED laptop before pixel shifting technology is available.  

## Windows Dark Theme

![Full-width image](/assets/img/blog/dark_mode.png){:.lead width="800" height="100" loading="lazy"}
You can find this under personalisation settings.
{:.figcaption}

Static bright images are the leading cause of burn-in on an OLED panel. Windows, unfortunately, is full of these. If you use the default installation without customizing anything, you’ll be bombarded with a lot of white static menus and icons.
If you are using Windows 11, you can right click on your desktop and go into personalization. From there, navigate to colours and change ‘Choose your mode’ to DarkMode. This should apply system wide and most menus will now default to a black background. 

## Dark Theme for Chrome / Firefox

If you’re like me, you will probably spend the majority of your time using an internet browser. Browsers are full of static menus, and static menus aren’t good for OLED panels. I currently use Edge (better battery consumption), so I use this OLED theme. It can also be used on Chromium based browsers such as Brave and Chrome. I use this OLED theme for Firefox.  
Apart from changing the theme, you can also browse in full-screen mode (F11). This is to hide the menu bar and offers a better reading experience in my opinion. 

## Dark reader, DarkPDF, Desaturate Favicons

These are a few essential OLED extensions for me when browsing the web. [Dark Reader](https://darkreader.org/) will save your eyes, especially if you like to browse in low-light conditions at night. It essentially modifies the pages’ CSS and changes the colour scheme dark. You can go further and customize the colour scheme to use a true black for the background colour.
I use [DarkPDF](https://chrome.google.com/webstore/detail/darkpdf/cfemcmeknmapecneeeaajnbhhgfgkfhp) when reading PDFs in the in-built browser. It essentially does the same as DarkReader, converting the harsh white colours to an easier to read darker colour

For those who want to go further, you can use the [Desaturate Favicons](https://chrome.google.com/webstore/detail/desaturate-favicons/dkenplobjcbiljmfbgpbpaboipfgpcbm) extension for chromium browsers. It does exactly what it says on the tin; it will desaturate favicons which are not your current active window. Extremely bright favicons might burn in if you leave a lot of tabs open.

## Dark Theme for Word

![Full-width image](/assets/img/blog/word_dark.png){:.lead width="800" height="100" loading="lazy"}
A not-so-obvious option under the 'Account'.
{:.figcaption}

Surprisingly, when I first started up word, it defaulted to a dark theme. If this isn’t the case for you, you can change it by going to Accounts and setting it manually. Word offers a grey theme, but the default dark theme is better for OLED screens.
Visual Code Editor Dark Theme
If you code a lot as I do, you’ll no doubt use an editor. I currently use visual studio code [this theme](https://marketplace.visualstudio.com/items?itemName=ChadBaileyVh.oled-pure-black---vscode) for coding. You can change and edit your current theme by going to File, Preferences and colour Theme. It changes the background to a true black and looks great for programming late at night.

## Translucent TB

Translucent TB does what the name implies; it takes the default taskbar and adds a transparency effect. As your taskbar in Windows is constantly shown at the bottom, it can help prevent any burn-in with static elements. You can install it from the Windows Store [here](https://apps.microsoft.com/store/detail/translucenttb/9PF4KZ2VN4W9?hl=en-us&gl=US). 


## Hide TB

I prefer to hide the taskbar in windows, it looks much cleaner to me and helps me focus more on what I’m working on at the moment. It also helps a lot with mitigating burn-in. You can hide the TB in Windows 11 by right clicking on your desktop, going to personalization and then navigating to the taskbar menu option. From here you should see a drop-down menu called Taskbar Behaviours, check the box to automatically hide the taskbar and you are done!

## Turn off Display

![Full-width image](/assets/img/blog/screen_turn_off.png){:.lead width="800" height="100" loading="lazy"}
Display settings are easily accessible.
{:.figcaption}

Since burn-in occurs when static elements are shown for a long period, it makes sense to change the default values. If you are using Windows, you can go to System settings and then go to Power & Battery. From here, change the values under the Screen and Sleep menu. I suggest setting it to the lowest value of 1 minute. 
You can set the value much lower than 1 minute, but it requires running a few commands in PowerShell.


~~~powershell
#On Battery
powercfg /SETDCVALUEINDEX SCHEME_CURRENT 7516b95f-f776-4464-8c53-06167f40cc99 3c0bc021-c8a8-4e07-a973-6b14cbcb2b7e #<VALUE IN SECONDS GOES HERE>

#On AC
powercfg /SETACVALUEINDEX SCHEME_CURRENT 7516b95f-f776-4464-8c53-06167f40cc99 3c0bc021-c8a8-4e07-a973-6b14cbcb2b7e #<VALUE IN SECONDS GOES HERE>
~~~

Remember the values are set in seconds!
{:.figcaption}


I have personally had my Windows background set to a jet-black, however, there are a lot of great OLED backgrounds you can use and you can find some here. Welcome to the Dark Side (reddit.com)
Apart from changing the background, you can also opt to hide your icons from the desktop. To remove the recycle bin go to Personalization > Themes > Desktop icon settings and change from there.

## Turn off HDR and Change Refresh Rate
  
This tip helps save a bit of battery. If you aren’t gaming or consuming content, you can change your screen's refresh rate and turn off HDR. You’ll save quite a bit of battery and potentially helps prevent OLED burn-in.

## Summary

These are just a few things I do to keep peace of mind when using my laptop. I hope you can apply some of the techniques I use to help extend your OLED laptop's life. If you have any more suggestions for me to add, feel free to contact me and I’ll add them to the list.
