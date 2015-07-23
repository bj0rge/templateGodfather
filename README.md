# templateGodfather
A pdf template for generating the standard letter a new UTT student will receive from the BDE with his godfather and his team greeting message.

## How does it work?

It's just a php script. Run index.php on a php server and all will be good. Well, I hope so. In my environment it's ok.

In fact, that's just basically some html & css translated into pdf. That's very useful when you have, like us (UTT student's association for the integration) 700 different pdf to generate.

### On what is it based?

I use a well known php library: [html2pdf](https://github.com/spipu/html2pdf), which, hmm... transforms html to hmm... pdf.

### So, if the library does all the work, what did you do?

Here I just had to create the template, so the variables are already filled with lipsum text. But the aim is to take the informations from a db or a csv file. I didn't have to do that part.

What I did is creating the background map with Illustrator (inspired from [that article](http://studio-ican.fr/tutoriel-illustrator-ancienne-carte-marine-game-design-web-design-animation-1er-annee/)), integrating it on an old parchment texture on Photoshop, adding other parchments (from [cgtextures.com](http://www.cgtextures.com)) for the different text areas, and making all this fit with html and CSS.

That was a pretty hard work actually.
