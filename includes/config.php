<?

/*
 *
 * Didn't really want to get into database stuff for this, figured it would be a fun little idea to use JSON right in PHP.
 *
 */
function get_projects() {
	$projects = <<<PROJECTS
	[
	{"title": "Art Nouveau Save the Date",
	"folder": "art-nouveau-save-the-date",
	"body": [
		{"heading": "title", "body": "Ashley and Mark asked me to design a save the date for their art nouveau inspired Chicago wedding. Ashley long adored the artist Alphonse Mucha's work and wanted his aesthetic to set the tone for their special day. I was so excited about this because I've always loved the soft hues and organic shapes found in both art nouveau paintings and architecture."},
		{"heading": "Arcitecture Meets Fine Art", "body": "I used one of the couple's favorite sites, the Chicago Theater, as my starting point. I drew from it's iconic spirals and lines to create the flowing waves and flourishes. The Victorian color palette and wind blown leaves were inspired by Mucha."},
		{"heading": "Process", "body": "I began by sketching the composition on paper and scanning it into Illustrator. There I created the main structure of the design, the line drawing. I completed the design in Photoshop where I individually painted each section to produce the look of a hand watercolored work."},
		{"heading": "In Their Words", "body": "I love it! It's exactly what I was looking for, and I have been looking for some time now."}
	],
	"images": [
		"art-nouveau-save-the-date-1.jpg",
		"art-nouveau-save-the-date-2.jpg",
		"art-nouveau-save-the-date-3.jpg"
	]},
	
	{"title": "Simple Typographic Stationery",
	"folder": "simple-typographic-stationery",
	"body": [
		{"heading": "title", "body": "Jen and Joel are a fun couple that wed in a science museum. When Jen asked if I would design her wedding stationery, she gave me her wedding color palette and described her wedding as \"simple.\" The color palette she selected consisted of a soft pool, a dark teal, ivory, beige and maroon. I loved the idea of using muted colors and simple type to communicate the look and feel of their big day."},
		{"heading": "Minimal with a Rustic Touch", "body": "I felt that a minimal, typographic design would work best for her stationery. This would allow for flexibility in the use of color and still adhere to Jen's \"simple\" style. To add a layer of depth to the work I included a subtle linen-like texture to some of the pieces. I designed save the date cards, invitations, information cards, program fans, and thank you post cards."},
		{"heading": "In Their Words", "body": "We absolutely love the stationery! It's beautiful!"}
	],
	"images": [
		"rustic-modern-1.jpg",
		"rustic-modern-2.jpg",
		"rustic-modern-3.jpg",
		"rustic-modern-4.jpg",
		"rustic-modern-5.jpg",
		"rustic-modern-6.jpg",
		"rustic-modern-7.jpg"
	]},
	
	{"title": "Gray and Yellow Story Invitation",
	"folder": "gray-and-yellow-story-invitation",
	"body": [
		{"heading": "title", "body": "Amanda and Tim asked me to design a wedding invitation that was bold, typographic and most importantly told their story. I was so excited to help them communicate the story of how they met. So often wedding guests don't know the bride and groom's story."},
		{"heading": "", "body": "I used a number 10 size card that I divided into two chapters: the front told the story of how they met all the way through the proposal and the back informed guests about their upcoming nuptials. I used bold vertical stripes on the back to place visual emphasis on the significance of their decision."},
		{"heading": "In Their Words", "body": "We couldn't be happier with how the invitation looks. It really is everything we hoped for."}
	],
	"images": [
		"yellow-gray-1.jpg",
		"yellow-gray-2.jpg",
		"yellow-gray-3.jpg",
		"yellow-gray-4.jpg"
	]},
	
	{"title": "Cartoon Portraits",
	"folder": "cartoon-portraits",
	"body": [
		{"heading": "title", "body": "David and Janna thought it would be fun to have a rather unconventional wedding invitation that included cartoon illustrations of themselves. Once Janna told me about David's proposal and the few words they exchanged, we decided that their conversation would compliment the cartoons perfectly."},
		{"heading": "", "body": "I began by creating stylized portraits that would become the focal point of the invitation. I added a bold striped background in the bride's favorite color, Tiffany blue. The illustration occupies much of the page to communicate not only the proposal but also hint at the bride and groom's humor. To play into the fun, cartoon theme I simplified the menu selections to icons. I also added an Ugly doll and Swedish flag which both have significance to the bride and groom."}
	],
	"images": [
		"cartoon-invite-1.jpg",
		"cartoon-invite-2.jpg"
	]},
	
	{"title": "Rustic Floral Stationery",
	"folder": "rustic-floral-stationery",
	"body": [
		{"heading": "title", "body": "Alyssa and Shea were planning their rustic wedding along side a waterfall in upstate New York when they asked me to design their stationery. We they first approached me about didn't have a particular look in mind for their stationery. Yet after they described the purple and yellow wildflowers that the bride's mother and grandmother were growing for their wedding I instantly felt that it would be a lovely symbol to include on their stationery. Alyssa also mentioned that they were planning on using lanterns throughout the reception. I felt that the addition of a lantern would be sweet imagery of their nuptials."},
		{"heading": "In Their Words", "body": "We just love the graphics from our invitations, especially the lantern. We've really embraced that theme, thanks to you!"}
	],
	"images": [
		"floral-lantern-1.jpg",
		"floral-lantern-2.jpg",
		"floral-lantern-3.jpg",
		"floral-lantern-4.jpg",
		"floral-lantern-5.jpg",
		"floral-lantern-6.jpg"
	]},
	
	{"title": "Pink and Black",
	"folder": "pink-and-black",
	"body": [
		{"heading": "title", "body": "When Ellie asked me to design her wedding stationery she had a particular vision in mind. She wanted something modern yet elegant that incorporated her bold wedding colors, magenta and black. I thought this would be a fun challenge to successfully create a design that equally portray both styles."},
		{"heading": "", "body": "I used a thick black card stock enclosure that opened to a tri-fold layered invitation. I assembled the inside panels by hand to ensure that the craftsmanship would be perfect. The black enclosure was sealed with a monogram label and placed inside a magenta envelope. I felt the magenta envelopes would provided a nice contrast amongst other pieces of mail in the guest's mailboxes."},
		{"heading": "In Their Words", "body": "Sarah designed for me invitations that no other vendor could do, it was unique to my personality while also keeping in theme with my wedding."}
	],
	"images": [
		"pink-black-invite-1.jpg",
		"pink-black-invite-2.jpg",
		"pink-black-invite-3.jpg"
	]}

	]
PROJECTS;

	$projects = json_decode(preg_replace('/(\s+)/i', ' ', $projects));
	return $projects;
}
?>