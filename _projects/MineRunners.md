---
layout: project
title: '@MineRunner'
caption: A C++ game written in the Allegro graphics library.
description: >

  A C++ game written in the Allegro graphics library.
date: 27 Jun 2022
image: 
  path: /assets/img/projects/MineRunner.png
  srcset: 
    1920w: /assets/img/projects/MineRunner.png
    960w:  /assets/img/projects/MineRunner.png
    480w:  /assets/img/projects/MineRunner.png
links:
  - title: Link
    url: https://github.com/chrishumm
accent_color: '#4fb1ba'
accent_image:
  background: '#193747'
theme_color: '#193747'
sitemap: false
---

MineRunner is a game written in C++ that uses the Allegro library. The goal of the game is to get to the end of the stage, whilst also collecting coins and other trinkets along the way.

The levels are generated from a text file at the moment. There are various different blocks you can encounter (sloped/bouncy/moving) and your character will interact with them in different ways.

Enemies will chase you while you are close and fire projectiles, so be careful. I haven't implemented the weapons system yet.

I have implemented pixel-perfect collision, bounding box collision, a particle system and save-game features. 

It is currently an alpha, so expect some quirks.

You can view the [code](https://github.com/chrishumm/MineRunners) over on my [Github :)](https://www.github.com/chrishumm)
Or download it and have a play!

![Full-width image](/assets/img/projects/MineRunner2.png){:.lead width="800" height="100" loading="lazy"}
Use the light to navigate through the mines.
{:.figcaption}
