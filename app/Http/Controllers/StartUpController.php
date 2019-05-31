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
        $book->TitleCover = "";
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
        $book->TitleCover = "";
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
        $book->TitleCover = "";
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
        $book->TitleCover = "";
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
        $book->TitleCover = "";
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
        $book->TitleCover = "";
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
        $book->TitleCover = "";
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
        $book->TitleCover = "";
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
        $book->TitleCover = "";
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
        $book->TitleCover = "";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 3;
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
        $book->TitleCover = "";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 3;
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
        $book->TitleCover = "";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 4;
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
        $book->TitleCover = "";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 4;
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
        $book->TitleCover = "";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID =5 ;
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
        $book->TitleCover = "";
        $book->ViewCount = 0;
        $book->TotalRate = '';
        $book->TotalReview= '';
        $book->UserID = 5;
        $book->DateOfPublish =  date("Y-m-d");
        $book->save();

        $is_category = new IsCategory();
        $categories = Category::all();
        $is_category->CategoryID =4;
        $is_category->BookID = Books::max('id');
        $is_category->save();

    }
}
