use blogdb;


/*TOPIC DATA*/
INSERT INTO topics(topID,name,description,lastModified) VALUES (DEFAULT,'Animals','All about animals',DEFAULT);
INSERT INTO topics(topID,name,description,lastModified) VALUES (DEFAULT,'Politics','Democratics vs Republicans',DEFAULT);
INSERT INTO topics(topID,name,description,lastModified) VALUES (DEFAULT,'Sports','Soccer,Football,Basketball',DEFAULT);
INSERT INTO topics(topID,name,description,lastModified) VALUES (DEFAULT,'Educations','School news',DEFAULT);
INSERT INTO topics(topID,name,description,lastModified) VALUES (DEFAULT,'Health','Updates on pandemic',DEFAULT);
INSERT INTO topics(topID,name,description,lastModified) VALUES (DEFAULT,'Science','The future of science',DEFAULT);

/*ARTICLE DATA
AuthorID starts at 0 and CatID start at 500 CATID connects too topID*/
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,0,2,'PSG BEATS BAYERN','https://content.api.news/v3/images/bin/6a22c0b006b8cf32c8c7fe7aee237438?imwidth=768','Psg beat bayern in the second leg they will versus next week',DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,1,4,'Cure for Sneezing Discovered', 'https://img.emedihealth.com/wp-content/uploads/2020/02/sneezing-feat-1-1.jpg', 'Manny Yoyo found the cure April 1 in his parents basement', DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,2,0,'New animal Species found','https://lh3.googleusercontent.com/proxy/imQeYuThIShWRG0BQzTqc5JUsprEp1JJlxRyFDIazZKXrOcE33qROYGjnPGcs9fSVs6NgoM5DT8NFddSGGnI7ZdZiuoudgKz5iVVsGU_czx9_qlnru7NmDXCE9fd', 'A new species combined with a seagull and rabit is now to be called a sabbit', DEFAULT);
INSERT INTO articles (artID,authorID,catID,title,image,content,lastModified) VALUES (DEFAULT,3,3,'School Closing','https://gray-wtvy-prod.cdn.arcpublishing.com/resizer/R6VmulFYRo3DWmSATcAAZdiWuaI=/1200x675/smart/cloudfront-us-east-1.images.arcpublishing.com/gray/UTTLS5TFLNMYTDKUFPB2IDAG3Y.jpg', 'The GreenWood School will permantanley close on April 4',DEFAULT);

/*COMMENTS DATA*/












