---
layout: post
title: My LowRider2 CNC Project
tags: [CNC]
featured_image_thumbnail: LowRider2
featured_image: assets/images/posts/2020/08/LR.jpg
featured: true
hidden: false
---

My research has gotten interesting! I'm now dealing with matrix factorization, and I'm currently implementing DSGD in Golang.
I would've used Rust, but I cound not find a good library for sparse matrices.  

Meanwhile, I've been using my 3D printer to print [face mask straps](https://www.thingiverse.com/thing:4249113) for my local schools.
I've also been working on making a CNC router!
I've always wanted a CNC router because... well... they're cool!
When you're too lazy to cut out a part, drawing that part on your computer and hitting the "Print" button is much more convenient (and precise).
It's a tool with an astonishing level of utility, and it can save so much time if used properly.

I do not have thousands of dollars to spend on a CNC machine.
Rather, more affordable options have become available within the last few years.
One that caught my attention was the [V1 Engineering LowRider2 CNC](https://www.v1engineering.com/lowrider-cnc/) for it's affordability, portability, and simpleness.
It uses readily-available belts, thanks to the boom in 3D printing, instead of expensive leadscrews traditionally used in CNC machines. 
These are nowhere near the quality, but they bring the price down substantially.
The plastic fittings which hold everything in place are 3D printed.
This also helps to keep costs down.

I've been working on this project for quite awhile.
Almost two months, actually!
The reason for this is pretty simple:
I like pretty things, so I printed everything on the highest quality.
I also used a 30% infill, rather than the traditional 20%, in hopes to add rigidity to the structure.

Speaking of rigidity, I purchased my flat plate parts from a guy on eBay.
I much prefer his powder-coated steel parts over the suggested MDF.
It is more rigid.
It will last longer.
It looks nicer.
It was cheaper than the official MDF pieces sold through the V1 store. 

![The LowRider2 being assembled](assets/images/posts/2020/08/LR_1.jpg)

The CNC router is in the sunroom, which (as the name suggests) gets a lot of sun.
I made the mistake of printing everything in black PLA.
The entire window-side of the machine sagged, causing complete misalignment.
I reprinted many parts.
I made the mistake of printing everything on that side again in black PLA.
It sagged again.
Now, I've purchased some white PETG, and I'm starting to reprint everything (for the second time).
It's my first time using a non-PLA filament, but everything looks good so far.

The machine was somewhat functional since I had the electronics connected.
You can watch a video of it being tested below.

{% include embed/2020/08/LR.html %}
