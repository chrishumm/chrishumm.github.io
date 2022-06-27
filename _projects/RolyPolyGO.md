---
layout: project
title: '@RolyPolyGO'
caption: A mobile physics game written in in C# and Unity.
description: >
  This is a fun little game I wrote using C# and Unity.
  A small physics based puzzle game with highscore connectivity
date: 27 Jun 2022
image: 
  path: /assets/img/projects/RolyPolyGO.png
  srcset: 
    1920w: /assets/img/projects/RolyPolyGO.png
    960w:  /assets/img/projects/RolyPolyGO@0,5x.png
    480w:  /assets/img/projects/RolyPolyGO@0,25x.png
links:
  - title: Link
    url: https://github.com/chrishumm
accent_color: '#4fb1ba'
accent_image:
  background: '#193747'
theme_color: '#193747'
sitemap: false
---

This is RolyPolyGO. It is a game written in C# that runs on the Unity engine. I have a login system that tracks player currency which can be spent on different skins in the game. The data is stored in AWs on an RDS database. I use PHP running on EC2 instances to help integrate with the backend. 

The game can be run on PC or mobile and primarily uses touch to control the ball to the end of the course.
Several enemies on contact will cause various status effects that need to be watched out for.
The goal is getting to the end the fastest, you have infinite lives.

It is currently an alpha, so expect some quirks.

You can view the [code](https://github.com/chrishumm/RolyPolyGO) over on my [Github :)](https://www.github.com/chrishumm)
Or download it and have a play!

![Full-width image](/assets/img/projects/RolyPolyGO2.png){:.lead width="800" height="100" loading="lazy"}
Avoid enemies along the course.
{:.figcaption}
