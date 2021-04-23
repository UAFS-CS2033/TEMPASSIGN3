use blogdb;

/*ARTICLE DATA*/
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,1,19,'PSG BEATS BAYERN','https://content.api.news/v3/images/bin/6a22c0b006b8cf32c8c7fe7aee237438?imwidth=768','Psg beat bayern in the second leg they will versus next week',DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,3,23,'Cure for Sneezing Discovered', 'https://img.emedihealth.com/wp-content/uploads/2020/02/sneezing-feat-1-1.jpg', 'Manny Yoyo found the cure April 1 in his parents basement', DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,5,19,'New animal Species found','https://health.wyo.gov/wp-content/uploads/2017/05/question-mark-on-chalkboard.jpg', 'A new species combined with a seagull and rabit is now to be called a sabbit', DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,1,22,'School Closing','https://gray-wtvy-prod.cdn.arcpublishing.com/resizer/R6VmulFYRo3DWmSATcAAZdiWuaI=/1200x675/smart/cloudfront-us-east-1.images.arcpublishing.com/gray/UTTLS5TFLNMYTDKUFPB2IDAG3Y.jpg', 'The GreenWood School will permantanley close on April 4',DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,3,21,'Real Madrid Lose','https://www.si.com/.image/t_share/MTc3MjE0MDIzMDk4NDQyOTEz/real-madrid-benzema-ucl-struggle.jpg','Real Madrid lose and are now in 3rd place right behind barca and aletico',DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,5,23,'New Stomach Bug', 'https://vitalrecord.tamhsc.edu/wp-content/uploads/2015/12/Stomach-Bug.jpg', 'A recent bug has been going around. make sure to stay clean!', DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,1,19,'Dog back home','https://s3.amazonaws.com/cdn-origin-etr.akc.org/wp-content/uploads/2017/11/12213218/German-Shepherd-on-White-00.jpg', 'Zeus the german sherphard was reunited with his famaily on tuesday after being lost', DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,3,22,'Grad 2021!!!','https://about.fb.com/wp-content/uploads/2020/04/Grad_edit3.jpg?fit=1920%2C1080', 'The Arkansas school district have given the green light to have a graduaton this year.',DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,5,21,'New Super League','https://e0.365dm.com/21/04/2048x1152/skysports-european-super-league_5347590.jpg','A new cup tournament is expected to replace the wide known UEFA Champions League',DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,1,24,'Cure for laziness found', 'https://miro.medium.com/max/613/1*ALVC0GsmKCTzu_bSVgeR2Q.png', 'Micael Hines has found the cure to laziness so there are no excuses anymore!', DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,3,19,'Lizard have gone extinct','https://nypost.com/wp-content/uploads/sites/2/2019/05/extinction-report.jpg?quality=80&strip=all&w=680&h=356&crop=1', 'The green lizard are offically extinct and no longer exist.', DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,5,22,'School make mask optional','https://gray-wmtv-prod.cdn.arcpublishing.com/resizer/JgUP_cx3mNmTtVN0Aeb98C3-S90=/1200x675/smart/cloudfront-us-east-1.images.arcpublishing.com/gray/MKG2VG7GVJEYVKIYCDNA325K34.jpg', 'School board has settle that the mask are now optional as the rate of corona has decreased',DEFAULT);


/*TOPIC DATA*/
INSERT INTO topics(topID,name,description,lastModified) VALUES (DEFAULT,'Animals','All about animals',DEFAULT);
INSERT INTO topics(topID,name,description,lastModified) VALUES (DEFAULT,'Politics','Democratics vs Republicans',DEFAULT);
INSERT INTO topics(topID,name,description,lastModified) VALUES (DEFAULT,'Sports','Soccer,Football,Basketball',DEFAULT);
INSERT INTO topics(topID,name,description,lastModified) VALUES (DEFAULT,'Educations','School news',DEFAULT);
INSERT INTO topics(topID,name,description,lastModified) VALUES (DEFAULT,'Health','Updates on pandemic',DEFAULT);
INSERT INTO topics(topID,name,description,lastModified) VALUES (DEFAULT,'Science','The future of science',DEFAULT);


/*USER DATA*/
insert into users(userID,username,lastname,firstname,password,email,role,lastModified) VALUES(Default,'test','Bob','Smith','password1','bobsmith@gmail.com','author',Default);
insert into users(userID,username,lastname,firstname,password,email,role,lastModified) VALUES(Default,'test2','Mary','Jones','password22','maryjj@gmail.com','author',Default);
insert into users(userID,username,lastname,firstname,password,email,role,lastModified) VALUES(Default,'test','bob','smith','password5555','juanth@gmail.com','author',Default);

/*COMMENTS DATA*/

use blogdb;

insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,11,'PSG is the best!',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,11,'Bayern played good',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,11,'Cannot wait for the final',Default);


insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,12,'Where is the cure for coughing',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,12,'I hate sneezing',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,12,'I took my shot',Default);


insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,13,'aww he looks cute',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,13,'I saw one on the street',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,13,'Looks super ugly imo',Default);


insert into comments(comID,authorID,artID,content,lastModified) Values (Default,3,14,'Yayyyy',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,3,14,'going to watch tv all day',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,3,14,'What schools?',Default);


insert into comments(comID,authorID,artID,content,lastModified) Values (Default,3,15,'hahahaha',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,3,15,'Barca all the way',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,3,15,'sucky team',Default);


insert into comments(comID,authorID,artID,content,lastModified) Values (Default,5,16,'I think I have it',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,5,16,'Stay safe',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,5,16,'How long does it last?',Default);


insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,17,'Aww he so cute',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,17,'This made my day',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,17,'I love dogs',Default);


insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,18,'LETS GOOO',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,18,'about time',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,1,18,'Cannot wait!',Default);


insert into comments(comID,authorID,artID,content,lastModified) Values (Default,5,19,'This league sucks',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,5,19,'All they want is money',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,5,19,'This is sad',Default);


insert into comments(comID,authorID,artID,content,lastModified) Values (Default,5,20,'Im still lazy lol',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,5,20,'working 24 hours now!',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,5,20,'This is cool',Default);


insert into comments(comID,authorID,artID,content,lastModified) Values (Default,5,21,'Never even seen them',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,5,21,'They looked so cool',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,5,21,'This need to stop!',Default);


insert into comments(comID,authorID,artID,content,lastModified) Values (Default,3,22,'I dont know how I feel about this',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,3,22,'Niceeee',Default);
insert into comments(comID,authorID,artID,content,lastModified) Values (Default,3,22,'Those mask are itchy',Default);