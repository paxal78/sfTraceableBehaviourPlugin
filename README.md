<h2>Usage:</h2>
<h3>this is a plugin tested in Symfony 1.4</h3>
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


<pre><code>

$Model->trace(); // not save the record
$Model->save(); 
    
</code></pre>

<pre><code>

$Model->trace(true); // also save the record

    
</code></pre>