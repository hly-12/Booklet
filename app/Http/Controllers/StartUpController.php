<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Books;
use App\Is_Comment_On;
use App\IsCategory;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; 

class StartUpController extends Controller
{
    public function seedData(){

        /////////////////////////////////
        $category = new Category();
        $category->Genre = "Technology";
        $category->save();

        $category = new Category();
        $category->Genre = "Fiction";
        $category->save();

        $category = new Category();
        $category->Genre = "History";
        $category->save();
        
        $category = new Category();
        $category->Genre = "Business";
        $category->save();
        
        $category = new Category();
        $category->Genre = "Cooking";
        $category->save();
//////////////////////////////////////

        $book = new Books();
        $book->Title = "The Inevitable";
        $book->Content = "<p>Much of what will happen in the next thirty years is inevitable, driven by technological trends that are already in motion. In this fascinating, provocative new book, Kevin Kelly provides an optimistic road map for the future, showing how the coming changes in our lives&mdash;from virtual reality in the home to an on-demand economy to artificial intelligence embedded in everything we manufacture&mdash;can be understood as the result of a few long-term, accelerating forces. Kelly both describes these deep trends&mdash;interacting, cognifying, flowing, screening, accessing, sharing, filtering, remixing, tracking, and questioning&mdash;and demonstrates how they overlap and are codependent on one another. These larger forces will completely revolutionize the way we buy, work, learn, and communicate with each other. By understanding and embracing them, says Kelly, it will be easier for us to remain on top of the coming wave of changes and to arrange our day-to-day relationships with technology in ways that bring forth maximum benefits. Kelly&rsquo;s bright, hopeful book will be indispensable to anyone who seeks guidance on where their business, industry, or life is heading&mdash;what to invent, where to work, in what to invest, how to better reach customers, and what to begin to put into place&mdash;as this new world emerges.</p>
        ";
        $book->TitleCover = "understand 12.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 1;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 1;
        $is_category->BookID = Books::max('id');
        $is_category->save();


        $book = new Books();
        $book->Title = "Where the Crawdads Sing";
        $book->Content = "<p>&quot;I can&#39;t even express in words how much I love this book...the way it&#39;s performed on Audible just took me right back to my long summers in Tennessee. This story has a special place in my heart - I didn&#39;t want it to end.&quot; (Reese Witherspoon)&nbsp;</p>

        <p>&quot;Painfully beautiful.&quot; (<em>The New York Times Book Review</em>)</p>
        
        <p>&quot;Perfect for fans of Barbara Kingsolver.&quot; (<em>Bustle</em>)</p>
        
        <p><strong><em>How long can you protect your heart?</em></strong></p>
        
        <p>For years, rumors of the &quot;Marsh Girl&quot; have haunted Barkley Cove, a quiet town on the North Carolina coast. So in late 1969, when handsome Chase Andrews is found dead, the locals immediately suspect Kya Clark, the so-called Marsh Girl. But Kya is not what they say. Sensitive and intelligent, she has survived for years alone in the marsh that she calls home, finding friends in the gulls and lessons in the sand. Then the time comes when she yearns to be touched and loved. When two young men from town become intrigued by her wild beauty, Kya opens herself to a new life - until the unthinkable happens.&nbsp;</p>
        
        <p>Perfect for fans of Barbara Kingsolver and Karen Russell,&nbsp;<em>Where the Crawdads Sing</em>&nbsp;is at once an exquisite ode to the natural world, a heartbreaking coming-of-age story, and a surprising tale of possible murder. Owens reminds us that we are forever shaped by the children we once were, and that we are all subject to the beautiful and violent secrets that nature keeps.</p>
        ";
        $book->TitleCover = "where the cre.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 2;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =1;
        $is_category->BookID = Books::max('id');
        $is_category->save();


        $book = new Books();
        $book->Title = "A People's History of the United States";
        $book->Content = "<p>A classic since its original landmark publication in 1980, Howard Zinn&#39;s&nbsp;<em>A People&#39;s History of the United States</em>&nbsp;is the first scholarly work to tell America&#39;s story from the bottom up - from the point of view of, and in the words of, America&#39;s women, factory workers, African-Americans, Native Americans, the working poor, and immigrant laborers.</p>

        <p>From Columbus to the Revolution to slavery and the Civil War - from World War II to the election of George W. Bush and the &quot;War on Terror&quot; -&nbsp;<em>A People&#39;s History of the United States</em>&nbsp;is an important and necessary contribution&nbsp;</p>
        ";
        $book->TitleCover = "a people history of us.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 3;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =1;
        $is_category->BookID = Books::max('id');
        $is_category->save();


        $book = new Books();
        $book->Title = "Salt, Fat, Acid, Heat: Mastering the Elements of Good Cooking";
        $book->Content = "<p><strong>Now a Netflix series!</strong><br />
        <br />
        <strong><em>New York Times</em>&nbsp;Bestseller and Winner of the 2018 James Beard Award for Best General Cookbook and multiple IACP Cookbook Awards&nbsp;</strong><br />
        <br />
        <strong>Named&nbsp;</strong><strong>one of the Best Books of 2017 by: NPR, BuzzFeed,&nbsp;<em>The</em>&nbsp;<em>Atlantic</em>,&nbsp;<em>The&nbsp;</em><em>Washington Post</em>,&nbsp;<em>Chicago Tribune</em>,&nbsp;<em>Rachel Ray Every Day</em>,&nbsp;<em>San Francisco Chronicle</em>, Vice Munchies, Elle.com,&nbsp;<em>Glamour</em>, Eater,&nbsp;<em>Newsday, Minneapolis Star Tribune</em>,<em>&nbsp;The Seattle Times</em>,&nbsp;<em>Tampa Bay Times</em>, Tasting Table,&nbsp;<em>Modern Farmer</em>,&nbsp;<em>Publishers Weekly,</em>&nbsp;and more.</strong><br />
        <br />
        A visionary new master class in cooking that distills decades of professional experience into just four simple elements, from the woman declared &ldquo;America&rsquo;s next great cooking teacher&rdquo; by Alice Waters.<br />
        <br />
        In the tradition of&nbsp;<em>The Joy of Cooking</em>&nbsp;and&nbsp;<em>How to Cook Everything</em>&nbsp;comes&nbsp;<em>Salt, Fat, Acid, Heat</em>, an ambitious new approach to cooking by a major new culinary voice. Chef and writer Samin Nosrat has taught everyone from professional chefs to middle school kids to author Michael Pollan to cook using her revolutionary, yet simple, philosophy. Master the use of just four elements&mdash;Salt, which enhances flavor; Fat, which delivers flavor and generates texture; Acid, which balances flavor; and Heat, which ultimately determines the texture of food&mdash;and anything you cook will be delicious. By explaining the hows and whys of good cooking,&nbsp;<em>Salt, Fat, Acid, Heat</em>&nbsp;will teach and inspire a new generation of cooks how to confidently make better decisions in the kitchen and cook delicious meals with any ingredients, anywhere, at any time.&nbsp;<br />
        <br />
        Echoing Samin&rsquo;s own journey from culinary novice to award-winning chef,&nbsp;<em>Salt, Fat Acid, Heat</em>immediately bridges the gap between home and professional kitchens. With charming narrative, illustrated walkthroughs, and a lighthearted approach to kitchen science, Samin demystifies the four elements of good cooking for everyone. Refer to the canon of 100 essential recipes&mdash;and dozens of variations&mdash;to put the lessons into practice and make bright, balanced vinaigrettes, perfectly caramelized roast vegetables, tender braised meats, and light, flaky pastry doughs.&nbsp;<br />
        <br />
        Featuring 150 illustrations and infographics that reveal an atlas to the world of flavor by renowned illustrator Wendy MacNaughton,&nbsp;<em>Salt, Fat, Acid, Heat</em>&nbsp;will be your compass in the kitchen. Destined to be a classic, it just might be the last cookbook you&rsquo;ll ever need.&nbsp;<br />
        <br />
        With a foreword by Michael Pollan.</p>
        ";
        $book->TitleCover = "saltfat.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 4;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =2;
        $is_category->BookID = Books::max('id');
        $is_category->save();


        $book = new Books();
        $book->Title = "Leaders Eat Last: Why Some Teams Pull Together and Others Don't";
        $book->Content = "<p>Imagine a world where almost everyone wakes up inspired to go to work, feels trusted and valued during the day, then returns home feeling fulfilled. This is not a crazy, idealized notion. Today, in many successful organizations, great leaders create environments in which people naturally work together to do remarkable things.&nbsp;<br />
        <br />
        In his work with organizations around the world, Simon Sinek noticed that some teams trust each other so deeply that they would literally put their lives on the line for each other. Other teams, no matter what incentives are offered, are doomed to infighting, fragmentation and failure. Why?<br />
        <br />
        The answer became clear during a conversation with a Marine Corps general. &quot;Officers eat last,&quot; he said. Sinek watched as the most junior Marines ate first while the most senior Marines took their place at the back of the line. What&#39;s symbolic in the chow hall is deadly serious on the battlefield: Great leaders sacrifice their own comfort--even their own survival--for the good of those in their care.<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
        Too many workplaces are driven by cynicism, paranoia, and self-interest. But the best ones foster trust and cooperation because their leaders build what Sinek calls a &quot;Circle of Safety&quot; that separates the security inside the team from the challenges outside.<br />
        <br />
        Sinek illustrates his ideas with fascinating true stories that range from the military to big business, from government to investment banking.</p>
        ";
        $book->TitleCover = "leader eat last.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 5;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =2;
        $is_category->BookID = Books::max('id');
        $is_category->save();


        $book = new Books();
        $book->Title = "The Industries of the Future";
        $book->Content = "<p>Leading innovation expert Alec Ross explains what&#39;s next for the world, mapping out the advances and stumbling blocks that will emerge in the next 10 years - for businesses, governments, and the global community - and how we can navigate them.</p>

        <p>While Alec Ross was working as Hillary Clinton&#39;s senior advisor on innovation, he traveled to 41 countries. He visited some of the toughest places in the world - from refugee camps of Congo to Syrian war zones. From phone-charger stands in Eastern Congo to R&amp;D labs in South Korea, Ross has seen what the future holds.</p>
        
        <p>Over the past two decades, the Internet has radically changed markets and businesses worldwide. In&nbsp;<em>The Industries of the Future</em>, Ross shows us what&#39;s next, highlighting the best opportunities for progress and explaining why countries thrive or sputter. He examines the specific fields that will most shape our economic future over the next 10 years, including cybercrime and cybersecurity; the commercialization of genomics; the next step for big data; and the coming impact of digital technology on money, payments, and markets. And in each of these realms, Ross addresses the toughest questions: How will we have to adapt to the changing nature of work? Is the prospect of cyberwar sparking the next arms race? How can the world&#39;s rising nations hope to match Silicon Valley in creating their own innovation hotspots?</p>
        
        <p>Ross blends storytelling and economic analysis to give a vivid and informed perspective on how sweeping global trends are affecting the ways we live, incorporating the insights of leaders ranging from tech moguls to defense experts.&nbsp;<em>The Industries of the Future</em>&nbsp;takes the intimidating, complex topics that many of us know to be important and boils them down into clear, plain-spoken language. This is an essential work for understanding how the world works - now and tomorrow - and a must-listen for businesspeople in every sector, from every country.</p>
        ";
        $book->TitleCover = "why the inustry.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 1;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =2;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "Elon Musk: Tesla, SpaceX, and the Quest for a Fantastic Future";
        $book->Content = "<p>In the spirit of&nbsp;<em>Steve Jobs</em>&nbsp;and&nbsp;<em>Moneyball</em>,&nbsp;<em>Elon Musk</em>&nbsp;is both an illuminating and authorized look at the extraordinary life of one of Silicon Valley&#39;s most exciting, unpredictable, and ambitious entrepreneurs - a real-life Tony Stark - and a fascinating exploration of the renewal of American invention and its new makers.</p>

        <p><em>Elon Musk</em>&nbsp;spotlights the technology and vision of Elon Musk, the renowned entrepreneur and innovator behind SpaceX, Tesla, and SolarCity, who sold one of his Internet companies, PayPal, for $1.5 billion. Ashlee Vance captures the full spectacle and arc of the genius&#39; life and work, from his tumultuous upbringing in South Africa and flight to the United States to his dramatic technical innovations and entrepreneurial pursuits.</p>
        
        <p>Vance uses Musk&#39;s story to explore one of the pressing questions of our age: Can the nation of inventors and creators who led the modern world for a century still compete in an age of fierce global competition? He argues that Musk - one of the most unusual and striking figures in American business history - is a contemporary, visionary amalgam of legendary inventors and industrialists, including Thomas Edison, Henry Ford, Howard Hughes, and Steve Jobs. More than any other entrepreneur today, Musk has dedicated his energies and his own vast fortune to inventing a future that is as rich and far reaching as the visionaries of the golden age of science-</p>
        ";
        $book->TitleCover = "elone mask.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 1;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =3;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "A Short History of Nearly Everything ";
        $book->Content = "<p>One of the world&rsquo;s most beloved and bestselling writers takes his ultimate journey -- into the most intriguing and intractable questions that science seeks to answer.<br />
        <br />
        In&nbsp;<strong>A Walk in the Woods</strong>, Bill Bryson trekked the Appalachian Trail -- well, most of it. In&nbsp;<strong>In A Sunburned Country</strong>, he confronted some of the most lethal wildlife Australia has to offer. Now, in his biggest book, he confronts his greatest challenge: to understand -- and, if possible, answer -- the oldest, biggest questions we have posed about the universe and ourselves. Taking as territory everything from the Big Bang to the rise of civilization, Bryson seeks to understand how we got from there being nothing at all to there being us. To that end, he has attached himself to a host of the world&rsquo;s most advanced (and often obsessed) archaeologists, anthropologists, and mathematicians, travelling to their offices, laboratories, and field camps. He has read (or tried to read) their books, pestered them with questions, apprenticed himself to their powerful minds.&nbsp;<strong>A Short History of Nearly Everything</strong><em>&nbsp;</em>is the record of this quest, and it is a sometimes profound, sometimes funny, and always supremely clear and entertaining adventure in the realms of human knowledge, as only Bill Bryson can render it. Science has never been more involving or entertaining.</p>
        ";
        $book->TitleCover = "a short history.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 2;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =3;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "Sapiens: A Brief History of Humankind";
        $book->Content = "<p>From a renowned historian comes a groundbreaking narrative of humanity&#39;s creation and evolution - a number one international best seller - that explores the ways in which biology and history have defined us and enhanced our understanding of what it means to be &quot;human&quot;.</p>

        <p>One hundred thousand years ago, at least six different species of humans inhabited Earth. Yet today there is only one -&nbsp;<em>Homo sapiens</em>. What happened to the others? And what may happen to us?</p>
        
        <p>Most books about the history of humanity pursue either a historical or a biological approach, but Dr. Yuval Noah Harari breaks the mold with this highly original book that begins about 70,000 years ago, with the appearance of modern cognition. From examining the role evolving humans have played in the global ecosystem to charting the rise of empires,&nbsp;<em>Sapiens</em>&nbsp;integrates history and science to reconsider accepted narratives, connect past developments with contemporary concerns, and examine specific events within the context of larger ideas.</p>
        
        <p>Dr. Harari also compels us to look ahead, because, over the last few decades, humans have begun to bend laws of natural selection that have governed life for the past four billion years. We are acquiring the ability to design not only the world around us but also ourselves. Where is this leading us, and what do we want to become?</p>
        
        <p>This provocative and insightful work is sure to spark debate and is essential for aficionados of Jared Diamond, James Gleick, Matt Ridley, Robert Wright, and Sharon Moalem.</p>
        ";
        $book->TitleCover = "a brief history.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID =2 ;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =3;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "ow Successful People Think: Change Your Thinking, Change Your Life";
        $book->Content = "<p>A&nbsp;<em>Wall Street Journal&nbsp;</em>bestseller, HOW SUCCESSFUL PEOPLE THINK<em>&nbsp;</em>is the perfect, compact read for today&#39;s fast-paced world.&nbsp;America&#39;s leadership expert John C. Maxwell will teach you how to be more creative and when to question popular thinking. You&#39;ll learn how to capture the big picture while focusing your thinking. You&#39;ll find out how to tap into your creative potential, develop shared ideas, and derive lessons from the past to better understand the future. With these eleven keys to more effective thinking, you&#39;ll clearly see the path to personal success.</p>
        ";
        $book->TitleCover = "how success.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 2;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =4;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "The Power of Habit: Why We Do What We Do in Life and Business ";
        $book->Content = "<p><strong><em>New York Times</em></strong>&nbsp;<strong>best seller</strong></p>

        <p><strong>The perfect gift for anyone trying to start the new year off right, this instant classic explores how we can change our lives by changing our habits.</strong></p>
        
        <p><strong>Named one of the best books of the year by</strong>&nbsp;<strong><em>The Wall Street Journal Financial Times</em></strong></p>
        
        <p>In&nbsp;<em>The Power of Habit,</em>&nbsp;award-winning business reporter Charles Duhigg takes us to the thrilling edge of scientific discoveries that explain why habits exist and how they can be changed. Distilling vast amounts of information into engrossing narratives that take us from the boardrooms of Procter &amp; Gamble to the sidelines of the NFL to the front lines of the civil rights movement, Duhigg presents a whole new understanding of human nature and its potential. At its core,&nbsp;<em>The Power of Habit</em>&nbsp;contains an exhilarating argument: The key to exercising regularly, losing weight, being more productive, and achieving success is understanding how habits work. As Duhigg shows, by harnessing this new science, we can transform our businesses, our communities, and our lives.&nbsp;</p>
        
        <p>&quot;Sharp, provocative, and useful.&quot; (Jim Collins)&nbsp;</p>
        
        <p>&quot;Few [books] become essential manuals for business and living.&nbsp;<em>The Power of Habit</em>&nbsp;is an exception. Charles Duhigg not only explains how habits are formed but how to kick bad ones and hang on to the good.&quot; (<em>Financial Times</em>)&nbsp;</p>
        ";
        $book->TitleCover = "the power.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 2;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =4;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "Salt, Fat, Acid, Heat: Mastering the Elements of Good Cooking";
        $book->Content = "<p>A visionary new master class in cooking that distills decades of professional experience into just four simple elements, from the woman declared &ldquo;America&rsquo;s next great cooking teacher&rdquo; by Alice Waters.<br />
        <br />
        In the tradition of&nbsp;<em>The Joy of Cooking</em>&nbsp;and&nbsp;<em>How to Cook Everything</em>&nbsp;comes&nbsp;<em>Salt, Fat, Acid, Heat</em>, an ambitious new approach to cooking by a major new culinary voice. Chef and writer Samin Nosrat has taught everyone from professional chefs to middle school kids to author Michael Pollan to cook using her revolutionary, yet simple, philosophy. Master the use of just four elements&mdash;Salt, which enhances flavor; Fat, which delivers flavor and generates texture; Acid, which balances flavor; and Heat, which ultimately determines the texture of food&mdash;and anything you cook will be delicious. By explaining the hows and whys of good cooking,&nbsp;<em>Salt, Fat, Acid, Heat</em>&nbsp;will teach and inspire a new generation of cooks how to confidently make better decisions in the kitchen and cook delicious meals with any ingredients, anywhere, at any time.&nbsp;<br />
        <br />
        Echoing Samin&rsquo;s own journey from culinary novice to award-winning chef,&nbsp;<em>Salt, Fat Acid, Heat</em>immediately bridges the gap between home and professional kitchens. With charming narrative, illustrated walkthroughs, and a lighthearted approach to kitchen science, Samin demystifies the four elements of good cooking for everyone. Refer to the canon of 100 essential recipes&mdash;and dozens of variations&mdash;to put the lessons into practice and make bright, balanced vinaigrettes, perfectly caramelized roast vegetables, tender braised meats, and light, flaky pastry doughs.&nbsp;<br />
        <br />
        Featuring 150 illustrations and infographics that reveal an atlas to the world of flavor by renowned illustrator Wendy MacNaughton,&nbsp;<em>Salt, Fat, Acid, Heat</em>&nbsp;will be your compass in the kitchen. Destined to be a classic, it just might be the last cookbook you&rsquo;ll ever need.&nbsp;<br />
        <br />
        With a foreword by Michael Pollan.</p>
        ";
        $book->TitleCover = "saltfat.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 1;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =5;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "The Complete Cooking for Two Cookbook: 650 Recipes for Everything You'll Ever Want to Make";
        $book->Content = "<p><strong>650 Recipes for&nbsp;EVERYTHING&nbsp;You&#39;ll Ever Want to Make.&nbsp;</strong><br />
        <br />
        Because smaller families shouldn&#39;t have to rely on recipes built for four or six, America&#39;s Test Kitchen has reengineered 650 of our best recipes to serve just two. Over the years we&#39;ve discovered that scaling down a recipe isn&#39;t as simple as cutting the ingredients in half&mdash;cooking times, temperatures, and equipment need to be adapted as well. This comprehensive cookbook takes the guesswork out of cooking for two so you can be sure that anything you want to make&mdash;from Classic Beef Stew to Lasagna to a mini batch of Fudgy Brownies or a Fluffy Yellow Layer Cake&mdash;will come out right (and perfectly proportioned) every time. We&#39;ll also give you options when you&#39;re short on time. 150 recipes, including Chicken Saltimbocca and Pan-Seared Rib-Eye Steaks with Sweet-Tart Red Wine Sauce, can be on the table in 30 minutes or less. For those times when you want healthier fare, we&#39;ve provided more than 100 recipes labeled &quot;Light&quot; such as Provencal Vegetable Soup and Poached Shrimp Salad with Avocado and Grapefruit, each with nutritional information listed in an easy-to-read chart in the back of the book. And we include chapters on for-two slow cooking, grilling, and baking pies, quick breads, cakes, and cookies. A 25-page manual teaches the basics of cooking for two, including clever shopping strategies to reduce waste, smart storage tricks help extend freshness of key ingredients, and our picks for the most useful kitchen equipment for any two-person household.</p>
        ";
        $book->TitleCover = "the complete cooking.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 1;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =5;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "The Kind of Love That Makes You Go Crazy";
        $book->Content = "<p>In this final installment Melanie will find out that sometimes love is not enough especially if you are loving the wrong person.&nbsp;<br />
        <br />
        Melanie is fresh out of jail and trying to piece her life back together after being arrested for the murder of her best friend and the attempted murder of her ex-husband Eric. She believes in her heart that she is done with Eric and prayed that she never saw him again. Unfortunately an unexpected turn of events brings the Devil himself right back in her life front and center. Has Eric changed or is he back to get revenge on Melanie for attempting to murder him?&nbsp;<br />
        <br />
        When a missing girl&#39;s family comes searching for her, secrets that should have never been revealed will flip Melanie&#39;s world upside down and inside out. Will Melanie be able to withstand this final test or will she subcumb to the pressures of it all.</p>
        ";
        $book->TitleCover = "The Kind of Love That Makes You Go Crazy.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID =2 ;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =5;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "Tor.com Publishing 2019 Debut Sampler: Some of the Most Exciting New Voices in Science Fiction and Fantasy ";
        $book->Content = "<p><strong>Tor.com Publishing is proud to present a sneak peak at its 2019 debut authors.</strong></p>

        <p>Read free sample chapters from the most exciting new voices in science fiction and fantasy today, including C. S. E. Cooney, Katharine Duckett, Jennifer Giesbrecht, Kerstin Hall, Vylar Kaftan, Scotto Moore, Tamsyn Muir, Lina Rather, Priya Sharma, and Emily Tes.</p>
        
        <p>At the Publisher&#39;s request, this title is being sold without Digital Rights Management Software (DRM) applied.</p>
        ";
        $book->TitleCover = "tor.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 2;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =4;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "The Book of Joy: Lasting Happiness in a Changing World ";
        $book->Content = "<p>The occasion was a big birthday. And it inspired two close friends to get together in Dharamsala for a talk about something very important to them. The friends were His Holiness the Dalai Lama and Archbishop Desmond Tutu. The subject was joy. Both winners of the Nobel Prize, both great spiritual masters and moral leaders of our time, they are also known for being among the most infectiously happy people on the planet.</p>

        <p>From the beginning the book was envisioned as a three-layer birthday cake: their own stories and teachings about joy, the most recent findings in the science of deep happiness, and the daily practices that anchor their own emotional and spiritual lives. Both the Dalai Lama and Archbishop Tutu have been tested by great personal and national adversity, and here they share their personal stories of struggle and renewal. Now that they are both in their 80s, they especially want to spread the core message that to have joy yourself, you must bring joy to others.</p>
        
        <p>Most of all, during that landmark week in Dharamsala, they demonstrated by their own exuberance, compassion, and humor how joy can be transformed from a fleeting emotion into an enduring way of life.</p>
        ";
        $book->TitleCover = "the book.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 1;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 1;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "We Were the Lucky Ones: A Novel";
        $book->Content = "<p>It is the spring of 1939 and three generations of the Kurc family are doing their best to live normal lives, even as the shadow of war grows closer. The talk around the family Seder table is of new babies and budding romance, not of the increasing hardships threatening Jews in their hometown of Radom, Poland. But soon the horrors overtaking Europe will become inescapable and the Kurcs will be flung to the far corners of the world, each desperately trying to navigate his or her own path to safety.&nbsp;<br />
        &nbsp;<br />
        As one sibling is forced into exile, another attempts to flee the continent, while others struggle to escape certain death, either by working grueling hours on empty stomachs in the factories of the ghetto or by hiding as gentiles in plain sight. Driven by an unwavering will to survive and by the fear that they may never see one another again, the Kurcs must rely on hope, ingenuity, and inner strength to persevere.&nbsp;<br />
        &nbsp;<br />
        An extraordinary, propulsive novel,&nbsp;<em>We Were the Lucky Ones</em>&nbsp;demonstrates how in the face of the twentieth century&rsquo;s darkest moment, the human spirit can endure and even thrive.</p>
        ";
        $book->TitleCover = "we were.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 1;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 2;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "Make Your Bed: Little Things That Can Change Your Life...and Maybe the World";
        $book->Content = "<p><em>If you want to change the world, start off by making your bed.&nbsp;</em><br />
        <br />
        On May 21, 2014, Admiral William H. McRaven addressed the graduating class of the University of Texas at Austin on their Commencement day. Taking inspiration from the university&#39;s slogan, &quot;What starts here changes the world&quot;, he shared the 10 principles he learned during Navy SEAL training that helped him overcome challenges not only in his training and long Naval career, but also throughout his life; and he explained how anyone can use these basic lessons to change themselves - and the world - for the better.&nbsp;</p>
        
        <p>Admiral McRaven&#39;s original speech went viral with over 10 million views. Building on the core tenets laid out in his speech, McRaven now recounts tales from his own life and from those of people he encountered during his military service who dealt with hardship and made tough decisions with determination, compassion, honor, and courage. Told with great humility and optimism, this timeless book provides simple wisdom, practical advice, and words of encouragement that will inspire listeners to achieve&nbsp;<em>more</em>, even in life&#39;s darkest moments.</p>
        ";
        $book->TitleCover = "make your.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 2;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 2;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "The Woman I Was Before";
        $book->Content = "<p>What if the perfect life you envy was rotten to the core?&nbsp;&nbsp;</p>

        <p>Three brand-new friends. Three very different families. Way too many secrets.&nbsp;&nbsp;</p>
        
        <p>Gisela, Sally and Kate become close when they move into the same new housing estate. But behind their shiny front doors, each has something to hide.&nbsp;&nbsp;</p>
        
        <p>Gisela&#39;s Facebook profile is plastered with photos of her high-achieving son - #soproud; her teenage daughter - #bestfriends; and her gorgeous husband - #lovemyhubs. She&#39;s the envy of everyone she knows, but how long can she keep covering up the truth?&nbsp;&nbsp;</p>
        
        <p>Sally is married to her soul mate - or so the champagne glasses glinting in front of another tropical sunset seem to suggest. But what will it take for her friends to realise the life she claims to adore is breaking her heart?&nbsp;&nbsp;</p>
        
        <p>Kate is a single mum. She uses Facebook to keep an eye on her teenage daughter but claims her own life is too boring to post anything herself. But maybe Kate wants to sit below the radar because she doesn&#39;t want anyone to look too closely and start asking questions about her past....</p>
        
        <p>Three lives collide in this gripping story about friendship, motherhood and marriage and the fa&ccedil;ade of perfection people present to the world.</p>
        ";
        $book->TitleCover = "the woman.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 2;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 3;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "A Man Called Ove";
        $book->Content = "<p>Meet Ove. He&#39;s a curmudgeon - the kind of man who points at people he dislikes as if they were burglars caught outside his bedroom window. He has staunch principles, strict routines, and a short fuse. People call him &quot;the bitter neighbor from hell&quot;. But behind the cranky exterior there is a story and a sadness. So when one November morning a chatty young couple with two chatty young daughters move in next door and accidentally flatten Ove&#39;s mailbox, it is the lead-in to a comical and heartwarming tale of unkempt cats, unexpected friendship, and the ancient art of backing up a U-Haul. All of which will change one cranky old man and a local residents&#39; association to their very foundations.</p>
        ";
        $book->TitleCover = "a man.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 1;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 3;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "Origin: A Novel";
        $book->Content = "<p>The stunningly inventive new novel from the world&#39;s most popular thriller writer.</p>

        <p>Bilbao, Spain</p>
        
        <p>Robert Langdon, Harvard professor of symbology and religious iconology, arrives at the ultramodern Guggenheim Museum Bilbao to attend a major announcement - the unveiling of a discovery that &quot;will change the face of science forever.&quot; The evening&#39;s host is Edmond Kirsch, a 40-year-old billionaire and futurist whose dazzling high-tech inventions and audacious predictions have made him a renowned global figure. Kirsch, who was one of Langdon&#39;s first students at Harvard two decades earlier, is about to reveal an astonishing breakthrough...one that will answer two of the fundamental questions of human existence.</p>
        
        <p>As the event begins, Langdon and several hundred guests find themselves captivated by an utterly original presentation, which Langdon realizes will be far more controversial than he ever imagined. But the meticulously orchestrated evening suddenly erupts into chaos, and Kirsch&#39;s precious discovery teeters on the brink of being lost forever. Reeling and facing an imminent threat, Langdon is forced into a desperate bid to escape Bilbao. With him is Ambra Vidal, the elegant museum director who worked with Kirsch to stage the provocative event. Together they flee to Barcelona on a perilous quest to locate a cryptic password that will unlock Kirsch&#39;s secret.</p>
        
        <p>Navigating the dark corridors of hidden history and extreme religion, Langdon and Vidal must evade a tormented enemy whose all-knowing power seems to emanate from Spain&#39;s Royal Palace itself...and who will stop at nothing to silence Edmond Kirsch. On a trail marked by modern art and enigmatic symbols, Langdon and Vidal uncover clues that ultimately bring them face to face with Kirsch&#39;s shocking discovery...and the breathtaking truth that has long eluded us.</p>
        
        <p><em>Origin</em>&nbsp;is Dan Brown&#39;s most brilliant and entertaining novel to date.</p>
        
        <p>Dan Brown is the author of numerous number one international best sellers, including&nbsp;<em>The Da Vinci Code</em>,&nbsp;<em>Inferno</em>,&nbsp;<em>The Lost Symbol</em>,&nbsp;<em>Angels &amp; Demons</em>,&nbsp;<em>Deception Point</em>, and&nbsp;<em>Digital Fortress</em>.</p>
        ";
        $book->TitleCover = "origin.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 1;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 4;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "Becoming";
        $book->Content = "<p>In a life filled with meaning and accomplishment, Michelle Obama has emerged as one of the most iconic and compelling women of our era. As First Lady of the United States of America&mdash;the first African American to serve in that role&mdash;she helped create the most welcoming and inclusive White House in history, while also establishing herself as a powerful advocate for women and girls in the U.S. and around the world, dramatically changing the ways that families pursue healthier and more active lives, and standing with her husband as he led America through some of its most harrowing moments. Along the way, she showed us a few dance moves, crushed Carpool Karaoke, and raised two down-to-earth daughters under an unforgiving media glare.&nbsp;<br />
        &nbsp;<br />
        In her memoir, a work of deep reflection and mesmerizing storytelling, Michelle Obama invites readers into her world, chronicling the experiences that have shaped her&mdash;from her childhood on the South Side of Chicago to her years as an executive balancing the demands of motherhood and work, to her time spent at the world&rsquo;s most famous address. With unerring honesty and lively wit, she describes her triumphs and her disappointments, both public and private, telling her full story as she has lived it&mdash;in her own words and on her own terms. Warm, wise, and revelatory,&nbsp;<em>Becoming</em>&nbsp;is the deeply personal reckoning of a woman of soul and substance who has steadily defied expectations&mdash;and whose story inspires us to do the same.</p>
        ";
        $book->TitleCover = "becoming.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 2;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 5;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "The Girl Who Lived";
        $book->Content = "<p>10 years ago, four people were brutally murdered. One girl lived.</p>

        <p>No one believes her story. The police think she&#39;s crazy. Her therapist thinks she&#39;s suicidal. Everyone else thinks she&#39;s a dangerous drunk. They&#39;re all right - but did she see the killer?</p>
        
        <p>As the anniversary of the murders approaches, Faith Winters is released from the psychiatric hospital and yanked back to the last spot on earth she wants to be - her hometown where the slayings took place. Wracked by the lingering echoes of survivor&#39;s guilt, Faith spirals into a black hole of alcoholism and wanton self-destruction. Finding no solace at the bottom of a bottle, Faith decides to track down her sister&#39;s killer - and then discovers that she&#39;s the one being hunted.</p>
        
        <p>How can one woman uncover the truth when everyone&#39;s a suspect - including herself?</p>
        
        <p>From the mind of&nbsp;<em>Wall Street Journal</em>&nbsp;best-selling author Christopher Greyson comes a story with twists and turns that take the listener on a journey of light and dark, good and evil, to the edge of madness.&nbsp;<em>The Girl Who Lived</em>should come with a warning label: Once you start listening, you won&#39;t be able to stop. Not since&nbsp;<em>Girl on the Train</em>and&nbsp;<em>Gone Girl</em>&nbsp;has a psychological thriller kept listeners so addicted - and guessing right until the last minute.</p>
        ";
        $book->TitleCover = "the girl.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 1;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 5;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "All the Ugly and Wonderful Things: A Novel";
        $book->Content = "<p>A beautiful and provocative love story between two unlikely people and the hard-won relationship that elevates them above the Midwestern meth lab backdrop of their lives.</p>

        <p>As the daughter of a drug dealer, Wavy knows not to trust people, not even her own parents. It&#39;s safer to keep her mouth shut and stay out of sight.</p>
        
        <p>Struggling to raise her little brother, Donal, eight-year-old Wavy is the only responsible adult around. Obsessed with the constellations, she finds peace in the starry night sky above the fields behind her house until one night her stargazing causes an accident. After witnessing his motorcycle wreck, she forms an unusual friendship with one of her father&#39;s thugs, Kellen, a tattooed ex-con with a heart of gold.</p>
        
        <p>By the time Wavy is a teenager, her relationship with Kellen is the only tender thing in a brutal world of addicts and debauchery. When tragedy rips Wavy&#39;s family apart, a well-meaning aunt steps in, and what is beautiful to Wavy looks ugly under the scrutiny of the outside world.</p>
        
        <p>A powerful novel you won&#39;t soon forget, Bryn Greenwood&#39;s&nbsp;<em>All the Ugly and Wonderful Things</em>&nbsp;challenges all we know and believe about love.</p>
        ";
        $book->TitleCover = "ugly.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 1;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 1;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "Proof of Heaven: A Neurosurgeon's Near-Death Experience and Journey into the Afterlife";
        $book->Content = "<p>On November 10, 2008, Dr. Eben Alexander was driven into coma by a disease so lethal that only 1 in 10,000,000 survive. Seven days later, he awakened with memories of a fantastic odyssey deep into another realm that were more real than this earthly one - memories that included meeting a deceased birth sister he had never known existed.</p>

        <p>Dr. Alexander deployed all his knowledge as a scientist to find out whether his mind could have played a trick on him. In its shutdown state, there was no way it could have functioned at all. That left only one conclusion: that we are conscious in spite of our brains - that, in fact, consciousness is at the root of all existence.</p>
        
        <p>The evidence supporting Dr. Alexander&#39;s experience transformed him into a believer in God&#39;s unconditional love and brought reconciliation to his family - and will upend our ideas about human consciousness and spirituality.</p>
        ";
        $book->TitleCover = "proof.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 2;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 1;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "One of Us Is Lying";
        $book->Content = "<p>Pay close attention, and you might solve this.</p>

        <p>On Monday afternoon five students at Bayview High walk into detention.</p>
        
        <p>Bronwyn,&nbsp;<strong>the brain</strong>, is Yale-bound and never breaks a rule.</p>
        
        <p>Addy,&nbsp;<strong>the beauty</strong>, is the picture-perfect homecoming princess.</p>
        
        <p>Nate,&nbsp;<strong>the criminal</strong>, is already on probation for dealing.</p>
        
        <p>Cooper,&nbsp;<strong>the athlete</strong>, is the all-star baseball pitcher.</p>
        
        <p>And Simon,&nbsp;<strong>the outcast</strong>, is the creator of Bayview High&#39;s notorious gossip app.</p>
        
        <p>Only Simon never makes it out of that classroom. Before the end of detention, Simon&#39;s dead. And according to investigators, his death wasn&#39;t an accident. On Monday he died. But on Tuesday he&#39;d planned to post juicy reveals about all four of his high-profile classmates, which makes all four of them suspects in his murder. Or are they the perfect patsies for a killer who&#39;s still on the loose?</p>
        
        <p>Everyone has secrets, right? What really matters is how far you would go to protect them.</p>
        
        <p><strong>Cast of narrators:</strong></p>
        
        <p>Kim Mai Guest - Bronwyn&nbsp;<br />
        Shannon McManus - Andy&nbsp;<br />
        Robbie Daymond - Nate&nbsp;<br />
        Macleod Andrews - Cooper</p>
        ";
        $book->TitleCover = "one of.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 2;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 2;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "The Book of General Ignorance";
        $book->Content = "<p>Challenging what most of us assume to be verifiable truths in areas like history, literature, science, nature, and more,<em>The Book of General Ignorance</em>&nbsp;is a witty &ldquo;gotcha&rdquo; compendium of how little we actually know about anything. It&rsquo;ll have you scratching your head wondering why we even bother to go to school.<br />
        <br />
        Think Magellan was the first man to circumnavigate the globe, baseball was invented in America, Henry VIII had six wives, Mount Everest is the tallest mountain? Wrong, wrong, wrong, and wrong again. You&rsquo;ll be surprised at how much you don&rsquo;t know! Check out THE BOOK OF GENERAL IGNORANCE for more fun entries and complete answers to the following:&nbsp;<br />
        <br />
        <strong>How long can a chicken live without its head?</strong><br />
        About two years.&nbsp;<br />
        <br />
        <strong>What do chameleons do?&nbsp;</strong><br />
        They don&rsquo;t change color to match the background. Never have; never will. Complete myth. Utter fabrication. Total Lie. They change color as a result of different emotional states.&nbsp;<br />
        <br />
        <strong>How many legs does a centipede have?</strong><br />
        Not a hundred.&nbsp;<br />
        <br />
        <strong>How many toes has a two-toed sloth?&nbsp;</strong><br />
        It&rsquo;s either six or eight.&nbsp;<br />
        <br />
        <strong>Who was the first American president?</strong><br />
        Peyton Randolph.&nbsp;<br />
        <br />
        <strong>What were George Washington&rsquo;s false teeth made from?&nbsp;</strong><br />
        Mostly hippopotamus.&nbsp;<br />
        <br />
        <strong>What was James Bond&rsquo;s favorite drink?&nbsp;</strong><br />
        Not the vodka martini.</p>
        ";
        $book->TitleCover = "general.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 2;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 2;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "The Tuscan Child";
        $book->Content = "<p>In 1944, British bomber pilot Hugo Langley parachuted from his stricken plane into the verdant fields of German-occupied Tuscany. Badly wounded, he found refuge in a ruined monastery and in the arms of Sofia Bartoli. But the love that kindled between them was shaken by an irreversible betrayal.</p>

        <p>Nearly 30 years later, Hugo&#39;s estranged daughter, Joanna, has returned home to the English countryside to arrange her father&#39;s funeral. Among his personal effects is an unopened letter addressed to Sofia. In it is a startling revelation.</p>
        
        <p>Still dealing with the emotional wounds of her own personal trauma, Joanna embarks on a healing journey to Tuscany to understand her father&#39;s history - and maybe come to understand herself as well. Joanna soon discovers that some would prefer the past be left undisturbed, but she has come too far to let go of her father&#39;s secrets now....</p>
        ";
        $book->TitleCover = "the tuscan.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 2;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 3;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "Send Down the Rain";
        $book->Content = "<p>Allie is still recovering from the loss of her family&#39;s beloved waterfront restaurant on Florida&#39;s Gulf Coast when she loses her second husband to a terrifying highway accident. Devastated and losing hope, she shudders to contemplate the future - until a cherished person from her past returns.</p>

        <p>Joseph has been adrift for many years, wounded in both body and spirit and unable to come to terms with the trauma of his Vietnam War experiences. Just as he resolves to abandon his search for peace and live alone at a remote cabin in the Carolina mountains, he discovers a mother and her two small children lost in the forest. A man of character and strength, he instinctively steps in to help them get back to their home in Florida. There he will return to his own hometown - and witness the accident that launches a bittersweet reunion with his childhood sweetheart, Allie.</p>
        
        <p>When Joseph offers to help Allie rebuild her restaurant, it seems the flame may reignite - until a 45-year-old secret from the past begins to emerge, threatening to destroy all hope for their second chance at love.</p>
        
        <p>In&nbsp;<em>Send Down the Rain</em>, Charles Martin proves himself to be a storyteller of great wisdom and compassion who bears witness to the dreams we cherish, the struggles we face, and the courage we must summon when life seems to threaten what we hold most dear.</p>
        ";
        $book->TitleCover = "send down.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 2;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 4;
        $is_category->BookID = Books::max('id');
        $is_category->save();

        $book = new Books();
        $book->Title = "The Never Game";
        $book->Content = "<p><em>&quot;You have been abandoned.&quot;</em></p>

        <p>A young woman has gone missing in Silicon Valley, and her father has hired Colter Shaw to find her. The son of a survivalist family, Shaw is an expert tracker. Now, he makes a living as a &quot;reward seeker&quot;, traveling the country to help police solve crimes and private citizens locate missing persons. But what seems a simple investigation quickly thrusts him into the dark heart of America&#39;s tech hub and the cutthroat billion-dollar video-gaming industry.&nbsp;</p>
        
        <p><em>&quot;Escape if you can.&quot;</em></p>
        
        <p>When another victim is kidnapped, the clues point to one video game with a troubled past -&nbsp;<em>The Whispering Man</em>. In that game, the player has to survive after being abandoned in an inhospitable setting with five random objects. Is a madman bringing the game to life?</p>
        
        <p><em>&quot;Or die with dignity.&quot;</em></p>
        
        <p>Shaw finds himself caught in a cat and mouse game, risking his own life to save the victims even as he pursues the kidnapper across both Silicon Valley and the dark net. Encountering eccentric game designers, trigger-happy gamers, and ruthless tech titans, he soon learns he isn&#39;t the only one on the hunt: Someone is on his trail and closing fast.</p>
        
        <p><em>The Never Game</em>&nbsp;proves once more why &quot;Deaver is a genius when it comes to manipulation and deception&quot; (Associated Press).</p>
        ";
        $book->TitleCover = "deaver.jpg";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 1;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID = 5;
        $is_category->BookID = Books::max('id');
        $is_category->save();

    }
}
