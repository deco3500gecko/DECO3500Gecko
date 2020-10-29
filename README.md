# Wiki Outline

Links to each page of the wiki

# Promotional Material

## Website

Link to website: http://glennb19.sg-host.com/

![website](https://user-images.githubusercontent.com/45459833/97549299-f57d4980-1a1b-11eb-8a3e-6e15fab081e9.JPG)

## Poster

Link to download poster: https://smallpdf.com/shared#st=c25bf98d-e5bc-49ca-93fd-56ca94075e73&fn=DECO3500+Poster.pdf&ct=1603963091874&tl=share-document&rf=link

![DECO3500 Poster](https://user-images.githubusercontent.com/45459833/97549529-3aa17b80-1a1c-11eb-89da-3b46df97c190.png)

# Prototype Details

## How to Deploy the Prototype

Our prototype uses CodeIgniter, a rapid web development framework for PHP. In order to deploy the prototype, 
1. You must install CodeIgniter (preferably CodeIgniter 3) from [https://codeigniter.com/download](https://codeigniter.com/download) and, because the project is running on a localhost server, you will also need to install XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).

![codeigniter](https://user-images.githubusercontent.com/45459833/97135452-091a7d00-179c-11eb-88ec-211314b8c9ff.JPG)
![xampp](https://user-images.githubusercontent.com/45459833/97135499-2fd8b380-179c-11eb-8561-210387e537c8.JPG)

2. Once installed, run XAMPP control panel and run Apache and MySQL.

![xamppPanel](https://user-images.githubusercontent.com/45459833/97135772-0d936580-179d-11eb-9e7c-848044a56e81.png)

3. Download this project's source code. Navigate to where XAMPP is installed - usually this is in your main drive. Then, navigate to 'htdocs' and create a folder named anything (this name will be used to access the prototype on the localhost server. Place the previously downloaded source code into this folder.

![htdocs](https://user-images.githubusercontent.com/45459833/97136024-b6da5b80-179d-11eb-9cec-009e7f45da6c.JPG)

4. In the source code there should be a file called 'deco3500.sql'. Keep this file in an easy to access place. Go to your browser and type localhost/phpmyadmin in the URL. There, import the sql file.

![phpmyadmin](https://user-images.githubusercontent.com/45459833/97136114-fa34ca00-179d-11eb-839a-3491090aab28.JPG)

5. To access and use the prototype, type localhost/name_of_your_folder in your browser URL.


## How to Use the Prototype

This prototype is designed to be used primarily by teachers and to be displayed to classroom via a projector or large screen. Students of the class cannot directly interact with the prototype, but their actions will impact several outcomes. Hence, many of the features implemented in the prototype are designed for the teacher. It is also designed to be used in a short period at the start of the day, where teachers will typically do a roll call. There are four main pages: Dashboard, Classes, Teams, and Rewards.

### Dashboard

![project](https://user-images.githubusercontent.com/45459833/97136229-497afa80-179e-11eb-8671-4cc89b383584.JPG)

The Dashboard page will be the main page where both the teacher and the students will interact with the system. It is the page where the teacher will do a roll call. It is also the place where students will be able to see the progress of their attendance. After completing the roll call, a bar chart will appear showing the day's attendance rates.

![barchart](https://user-images.githubusercontent.com/45459833/97139187-a7f7a700-17a5-11eb-91c6-17b3b568c10a.JPG)

Furthermore, the position of the rockets, which represents the teams, will change by moving closer to the moon/planet. The teacher will be able to change the classroom and the date when completing the roll call.

### Classes

![classes](https://user-images.githubusercontent.com/45459833/97139633-a9759f00-17a6-11eb-8adf-0e1bb43a8517.JPG)

The Classes page shows a summarised description of the students from each class. The teacher is able to add/delete students and edit student information.

### Teams

![teams](https://user-images.githubusercontent.com/45459833/97139844-1b4de880-17a7-11eb-96f0-2a674bef154f.JPG)

The Teams page shows each of the teams for each class. The teacher is able to add/delete teams, edit team information, and change team members.

### Rewards

![rewards](https://user-images.githubusercontent.com/45459833/97139956-6962ec00-17a7-11eb-8aa9-499077884e8f.JPG)

The Rewards page shows the rewards that the students can earn. Each win a team earns results in a reward they can redeem. This page, along with the Dashboard, may be displayed to the students. The teacher can add/remove rewards and redeem rewards.

<!--
**deco3500gecko/DECO3500Gecko** is a ✨ _special_ ✨ repository because its `README.md` (this file) appears on your GitHub profile.

Here are some ideas to get you started:

- 🔭 I’m currently working on ...
- 🌱 I’m currently learning ...
- 👯 I’m looking to collaborate on ...
- 🤔 I’m looking for help with ...
- 💬 Ask me about ...
- 📫 How to reach me: ...
- 😄 Pronouns: ...
- ⚡ Fun fact: ...
-->
