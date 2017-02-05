<div class="lightbox_content">
        <h1>Study Design</h1>
<p>This study uses the Burrows Delta measure to analyze McClure and Cather as candidate authors of McClure's <em>My Autobiography</em>. Since McClure did not write a great deal of his own,
I have conducted this study using his 1917 monograph <em>Obstacles to Peace</em>. Using, head-to-head tests, I compare <em>Obstacles to Peace</em> to various works by Cather, in each case using
<em>My Autobiography</em> as the point of comparison. The study performs identical tests on the book and magazine versions of <em>My Autobiography</em>,
and performs additional tests on each installment of the autobiography separately, to investigate the possibility that Cather wrote some installments but not others.</p>

<p>Text Processing: For these tests, I used Cather Archive encoded texts wherever possible and stripped all xml to use only plain text.
In lieu of Cather Archive editions, I used Project Gutenberg and Project Gutenberg Australia digitizations wherever I could.
For the book versions of <em>My Autobiography</em> and <em>Obstacles to Peace</em>, I used ABBYY FineReader to perform OCR.
I used an automatic correction script based upon past work by Ted Underwood, which eliminates most OCR transcription errors
and can produce texts that are up to 97 percent accurate, which is more than sufficient for this kind of computational analysis. </p>

<p>Programs Used: I removed all punctuation and capitalization from the text and tokenized words using Python's Natural Language Toolkit and stored data
values in an SQLite database. MY Burrows' Delta script is also written in Python and leverages the Numpy and mathplotlib libraries.
A copy of my most recent Delta script is available on Github (See https://github.com/mjlavin80/burrows_delta_class).</p>

<p>Settings: Burrows' Delta has many internal settings that can be changed to optimize analysis. My tests compared the 60 most frequent terms
in any given grouping, and I performed these tests excluding any term that did not appear once in each text (culling = 100).
I then did the same tests  without this restriction (culling = 0).

Length control Measures: Tests of very different lengths can distort results, so I calculated top terms using frequencies (count/text length) instead of raw counts.
Additionally, I used a resampling method called bootstrapping to compare sample sets of equal length. For more information on bootstrapping,
see <em>Bootstrapping: A Nonparametric Approach to Statistical Inference</em> (Mooney and Duval, 1993).</p>
    </div>