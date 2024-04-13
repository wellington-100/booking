|
|
GET
|
v
/?page=tours
|
v
form

|    method="GET"    //by default -------------------+
|   /                                                |   send in URL
+--                                                  | /
|   \                                                |
|    method="POST" ------------------+               |
|                                    v               v
+-- action="/?page=tours" --- GET / POST req ---> /?search=budapest
|                                    |
+-- name="search"                    +----- BODY "search=budapest" -----> tours.php
|                                                                           |
+-- SEARCH                                                                  v
                                                                         $_POST ?