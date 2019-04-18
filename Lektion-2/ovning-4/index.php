<html lang="en">
<?php require 'partials/head.php'; ?>
<body>
  <?php 
    require 'partials/header.php';
    require 'partials/nav.php'; 
  ?>
  
  <main>
    <section style="max-width: 40%">
      <h2 style="text-align:center;">  How to divide into partials in PHP</h2>
      <p> 
        We can divide our <code class="code-highlight">.php</code>-files into separate sub-files. 
        The content in the different files is not begin shared but copied to each individual file. 
        When we <code class="code-highlight">include</code> or <code class="code-highlight">require</code> some file
        we copy the content to these files. Each new page is <code class="code-highlight">stateless</code>, it does <strong>not</strong>
        remember the previous page. That is why we often <code class="code-highlight">include</code> the same <strong>variables</strong> or
        the same partial files on multiple pages. This does not always mean we have repetitive code. Sometimes the variables and code need
        to be copied to multiple locations so we can access it.
      </p>
      <p><span class="meta-data">Published: <?= date('m/d/Y - h:m'); ?></span><p>
    </section>
  </main>
  <?php require 'partials/footer.php'; ?>
</body>
</html>