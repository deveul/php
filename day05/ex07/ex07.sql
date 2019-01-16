SELECT title, summary  FROM film WHERE summary REGEXP '42' OR title REGEXP '42' ORDER BY duration;
