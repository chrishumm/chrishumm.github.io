---
layout: project
title: '@TwitterBots'
caption: A collection of twitter bots that run on AWS Lambda.
description: >
  This is my Stoic Quote python bot running on AWS Lambda using EventsBridge and SNS.
date: 27 Jun 2022
image: 
  path: /assets/img/projects/twitterbots_titlecard-min.png
  srcset: 
    1920w: /assets/img/projects/twitterbots_titlecard-min.png
    960w:  /assets/img/projects/twitterbots_titlecard-min0.5.png
    480w:  /assets/img/projects/twitterbots_titlecard-min0.25.png
links:
  - title: Link
    url: https://github.com/chrishumm
accent_color: '#4fb1ba'
accent_image:
  background: '#193747'
theme_color: '#193747'
sitemap: true
---


Here is a collection of my bots written for Twitter. You can view the [repository](https://github.com/chrishumm/twitter-bots) over on my [Github :)](https://www.github.com/chrishumm). They are all written in Python and use the Tweepy library for twitter integration.
All the bots below require the use of authenticate_twitter.py. You need to provide your own auth.txt and bearer_token txt files.
The format of the files are:

~~~js
// file: "auth.txt"
<customer token>
<customer token secret>
<access token>
<access token secret>
~~~

~~~js
// file: "bearer_token.txt"
<bearer_token>
~~~

My Stoic Quote bot runs on AWS Lambda and tweets random quotes at a daily interval, complete with hashtags and doesn't repeat itself.

My reply_back bot replies back to mentions @ your username. You can modify it to scan for certain keywords and reply back. This also ran on AWS Lambda, but no longer does. (I'm not that popular!)

The retweet_bot checks for tweets that match certain keywords, favourites them and then retweets them. You can customise it to your needs.

My followfollowers bot automatically scans through your follower feed and follows back anyone you're not currently following. 

The versions uploaded to AWS slightly differ from the versions you can run on your computer. This is due to AWS Lambda needing to use s3 buckets to write files.

![Full-width image](/assets/img/projects/s3buckets-min.png){:.lead width="800" height="100" loading="lazy"}
The txt files are stored in s3 buckets.
{:.figcaption}