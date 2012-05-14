<h2>Usage:</h2>
<p>after you added plugin in ProjectConfiguration.class.php u can use the behaviour in yoiur schema.yml</p>

<pre><code>

Table:
  actAs:
    Traceable: ~
  columns:
  	....      
    
</code></pre>

<p>in the options you can change the name of ip address field</p>

<pre><code>

Table:
  actAs:
    Traceable:
      name: my_field
  columns:
  	....      
    
</code></pre>