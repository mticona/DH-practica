SELECT *
	FROM movies
    WHERE release_date > "1999-10-01" AND release_date <= "2004-12-31"
;
SELECT *
	FROM movies
		WHERE length > 45 AND length <150
;
SELECT *
	FROM movies
		WHERE title LIKE "T%"
		ORDER BY rating DESC
;
SELECT *
	FROM movies
    WHERE title LIKE "T%C"
    ORDER BY rating DESC
;
SELECT *
	FROM movies
    WHERE year(release_date) = 2000
    ORDER BY title ASC
;
SELECT *
	FROM movies
    WHERE title LIKE "%-%"
    ORDER BY rating DESC

;
SELECT *
	FROM movies
    WHERE year(release_date) = 1999 OR release_date LIKE "%-10-%"
    ORDER BY year(release_date) ASC, title DESC
;
SELECT *
	FROM actors
    WHERE first_name LIKE "J____Y"
    ORDER BY id ASC
;
SELECT *
	FROM actors
    WHERE first_name LIKE "%am"
    ORDER BY last_name ASC, first_name ASC
;
SELECT *
	FROM movies
    WHERE (title LIKE "Harry Potter%" OR  title LIKE "Toy Story%") AND length = 120
    ORDER BY title ASC, length DESC
;
SELECT *
	FROM movies
    WHERE rating = 8.3 OR rating = 9.1 OR rating = 9.0
    ORDER BY rating ASC
;
SELECT *
	FROM movies
    WHERE awards = 2 OR awards = 5 OR awards = 7
    ORDER BY awards DESC
;
SELECT *
	FROM movies
    WHERE length > 0
    ORDER BY rating ASC
;
SELECT *
	FROM movies
    WHERE NOT(release_date LIKE "%-07-%")
    ORDER BY rating ASC
;
