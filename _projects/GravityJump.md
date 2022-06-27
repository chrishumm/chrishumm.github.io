---
layout: project
title: '@GravityJump'
caption: A mobile infinite scrolling game written for Android.
description: >
  A mobile infinite scrolling game written for Android in C++
date: 27 Jun 2022
image: 
  path: /assets/img/projects/GravityJump.png
  srcset: 
    1920w: /assets/img/projects/GravityJump.png
    960w:  /assets/img/projects/GravityJump@0,5x.png
    480w:  /assets/img/projects/GravityJump@0,25x.png
links:
  - title: Link
    url: https://github.com/chrishumm
accent_color: '#4fb1ba'
accent_image:
  background: '#193747'
theme_color: '#193747'
sitemap: false
---

This is Gravity Jump. It is a cross-platform game written primarily for mobile devices (Android/iOS), it uses the cocos2dx library and is written in C++. 

The game is an infinite scolling game, using proceedrul generation in order to create the level. The parts of the levels are created with different chunks.

I have integerated metrics and achievements within the game, keeping track of various players scores and details as they play. This was going to be develoepd seperately into a metrics library that can be used to track players behaviours within different apps.

I used Googles Mocking framework to test the game during development. 

It is currently an alpha, so expect some quirks.

Here is an example of a powerup you can find in the game. (Infinite Gravity Switching)

You can view the [code](https://github.com/chrishumm/GravityJump) over on my [Github :)](https://www.github.com/chrishumm)
Or download it and have a play!

![Full-width image](/assets/img/projects/InfiniteGravity.gif){:.lead width="800" height="100" loading="lazy"}
Jump over obstacles as the level progresses!
{:.figcaption}
