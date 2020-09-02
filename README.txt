The Deliverable:
Please submit a git repository (Github/Bitbucket etc.) that includes:
1) Your code
2) A README that contains:
2.1) A covering note explaining the technology choices you have made.
2.22) Any instructions required to run your solution and tests in a unix environment.
=================================================================
I decided to attempt the basic tasks (as that was all I had time for as my schedule turned out to be more buisy than expected) using Wordpress.

This was achieved by simply adding some code to the functions.php of my website so it was the easiest to test quickly.

Sorry about this being such a rushed job, but things went downhill quick after our initial meeting and this was very much a last minute effort to implement plans I had made earlier in the week.

I achieved the creation of and reading of the "campaigns" table API on my website and they are currently working (unless I have misunderstood anything):
http://davidstockdalescrapcode.co.uk/wp-json/campaigns/create
http://davidstockdalescrapcode.co.uk/wp-json/campaigns/read



Initial plan for the database:
-"campaign" table:
--id: mediumint
--title: tinytext
--site_id: mediumint
--enabled: boolean
--start: datetime
--end: datetime
--code: varchar
--image_id: mediumint


If I'd had more time in my schedule I was considering storing images within the database using base64 encoding, using this as a guide https://makitweb.com/upload-and-store-an-image-in-the-database-with-php/ which would be stored within the "image" table.

-"image" table:
--image_id: mediumint
--image_name: varchar
--image: base64

-"site" table:
--site_id: mediumint
--site_name: varchar
--site_url: varchar










