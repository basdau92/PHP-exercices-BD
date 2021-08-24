-- Changer la date de publication de la table "images" (à l'id 6) par la date actuelle
UPDATE `images`
SET `publicationDate` = "2021-08-24"
WHERE `id` = "5";
-- Changer la durée de la vidéo de la table "videos" (à l'id 2) par 1:41
UPDATE `videos`
SET `duration` = "1:41"
WHERE `id` = "2";