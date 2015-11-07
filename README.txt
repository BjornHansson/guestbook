Simple guestbook developed with CodeIgniter.

1. Update the settings in application/config/ to suit your environment. E.g. database.php.
2. Create the needed database and table using create_table_post.sql.

Files I have added to the framework:

create_table_post.sql

application/controllers/
	posts.php
	pages.php

application/models/
	posts_model.php

application/views/layout/
	footer.php
	header.php

application/views/pages/
	home.php

application/views/posts/
	create.php
	index.php
	view.php
