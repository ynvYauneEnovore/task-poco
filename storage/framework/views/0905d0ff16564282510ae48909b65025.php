<?php $__env->startSection('title', 'Default Style'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(route('/')); ?>/assets/css/prism.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2>Default<span>Style </span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
	<li class="breadcrumb-item">Ui Elements</li>	
	<li class="breadcrumb-item active">Default Style</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card" id="default">
            <div class="card-header">
               <h5>Default buttons</h5>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-simple-left"></i></li>
                     <li><i class="view-html fa fa-code"></i></li>
                     <li><i class="icofont icofont-maximize full-card"></i></li>
                     <li><i class="icofont icofont-minus minimize-card"></i></li>
                     <li><i class="icofont icofont-refresh reload-card"></i></li>
                     <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
               </div>
               <span>Bootstrap state buttons</span>
            </div>
            <div class="card-body btn-showcase">
               <button class="btn btn-primary" type="button">Primary Button</button>
               <button class="btn btn-secondary" type="button">Secondary Button</button>
               <button class="btn btn-success" type="button">Success Button</button>
               <button class="btn btn-info" type="button">Info Button</button>
               <button class="btn btn-warning" type="button">Warning Button</button>
               <button class="btn btn-danger" type="button">Danger Button</button>
               <button class="btn btn-light" type="button">Light Button</button>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head11" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head11">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-primary"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-success"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-info"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-warning"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-danger"&gt;danger button&lt;/button&gt;
&lt;button type="button" class="btn btn-light"&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header">
               <h5>flat button</h5>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-simple-left"></i></li>
                     <li><i class="view-html fa fa-code"></i></li>
                     <li><i class="icofont icofont-maximize full-card"></i></li>
                     <li><i class="icofont icofont-minus minimize-card"></i></li>
                     <li><i class="icofont icofont-refresh reload-card"></i></li>
                     <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
               </div>
               <span>Add <code>.btn-square</code> class for flat button</span>
            </div>
            <div class="card-body btn-showcase">
               <button class="btn btn-square btn-primary" type="button">Primary Button</button>
               <button class="btn btn-square btn-secondary" type="button">Secondary Button</button>
               <button class="btn btn-square btn-success" type="button">Success Button</button>
               <button class="btn btn-square btn-info" type="button">Info Button</button>
               <button class="btn btn-square btn-warning" type="button">Warning Button</button>
               <button class="btn btn-square btn-danger" type="button">Danger Button</button>
               <button class="btn btn-square btn-light" type="button">Light Button</button>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head99" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head99">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-primary&quot;&gt;primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-secondary&quot;&gt;secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-success&quot;&gt;Success Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-info&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-warning&quot;&gt;warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-danger&quot;&gt;danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-light&quot;&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt; </code></pre>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header">
               <h5>Edge button</h5>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-simple-left"></i></li>
                     <li><i class="view-html fa fa-code"></i></li>
                     <li><i class="icofont icofont-maximize full-card"></i></li>
                     <li><i class="icofont icofont-minus minimize-card"></i></li>
                     <li><i class="icofont icofont-refresh reload-card"></i></li>
                     <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
               </div>
               <span>Add <code>.btn-pill</code> class for edge button</span>
            </div>
            <div class="card-body btn-showcase">
               <button class="btn btn-pill btn-primary" type="button">Primary Button</button>
               <button class="btn btn-pill btn-secondary" type="button">Secondary Button</button>
               <button class="btn btn-pill btn-success" type="button">Success Button</button>
               <button class="btn btn-pill btn-info" type="button">Info Button</button>
               <button class="btn btn-pill btn-warning" type="button">Warning Button</button>
               <button class="btn btn-pill btn-danger" type="button">Danger Button</button>
               <button class="btn btn-pill btn-light" type="button">Light Button</button>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head55" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head55">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-pill btn-primary"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-pill btn-secondary"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-pill btn-success"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-pill btn-info"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-pill btn-warning"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-pill btn-danger"&gt;danger button&lt;/button&gt;
&lt;button type="button" class="btn btn-pill btn-light"&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;                             </code></pre>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header">
               <h5>Raised buttons</h5>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-simple-left"></i></li>
                     <li><i class="view-html fa fa-code"></i></li>
                     <li><i class="icofont icofont-maximize full-card"></i></li>
                     <li><i class="icofont icofont-minus minimize-card"></i></li>
                     <li><i class="icofont icofont-refresh reload-card"></i></li>
                     <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
               </div>
               <span>Add <code>.btn-pill</code> and <code>.btn-air-*</code> class  for raised button</span>
            </div>
            <div class="card-body btn-showcase">
               <button class="btn btn-pill btn-primary btn-air-primary" type="button">Primary Button</button>
               <button class="btn btn-pill btn-secondary btn-air-secondary btn-air-secondary" type="button">Secondary Button</button>
               <button class="btn btn-pill btn-success btn-air-success btn-air-success" type="button">Success Button</button>
               <button class="btn btn-pill btn-info btn-air-info btn-air-info" type="button">Info Button</button>
               <button class="btn btn-pill btn-warning btn-air-warning btn-air-warning" type="button">Warning Button</button>
               <button class="btn btn-pill btn-danger btn-air-danger" type="button">Danger Button</button>
               <button class="btn btn-pill btn-light btn-air-light" type="button">Light Button</button>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-primary btn-air-primary&quot;&gt;Primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-secondary btn-air-secondary&quot;&gt;Secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-success btn-air-success&quot;&gt;Success button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-info btn-air-info&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-warning btn-air-warning&quot;&gt;Warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-danger btn-air-danger&quot;&gt;Danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-pill btn-light btn-air-light&quot;&gt;Light button&lt;/button&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header">
               <h5>button group</h5>
            </div>
            <div class="card-body btn-group-showcase">
               <div class="row">
                  <div class="col-xl-4 col-md-6 col-sm-12">
                     <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-primary" type="button">Left</button>
                        <button class="btn btn-primary" type="button">Middle</button>
                        <button class="btn btn-primary" type="button">Right</button>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 col-sm-12">
                     <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-secondary" type="button">Left</button>
                        <button class="btn btn-secondary" type="button">Middle</button>
                        <button class="btn btn-secondary" type="button">Right</button>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 col-sm-12">
                     <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-success" type="button">Left</button>
                        <button class="btn btn-success" type="button">Middle</button>
                        <button class="btn btn-success" type="button">Right</button>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 col-sm-12">
                     <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-info" type="button">Left</button>
                        <button class="btn btn-info" type="button">Middle</button>
                        <button class="btn btn-info" type="button">Right</button>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 col-sm-12">
                     <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-warning" type="button">Left</button>
                        <button class="btn btn-warning" type="button">Middle</button>
                        <button class="btn btn-warning" type="button">Right</button>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 col-sm-12">
                     <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-danger" type="button">Left</button>
                        <button class="btn btn-danger" type="button">Middle</button>
                        <button class="btn btn-danger" type="button">Right</button>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 col-sm-12">
                     <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-light" type="button">Left</button>
                        <button class="btn btn-light" type="button">Middle</button>
                        <button class="btn btn-light" type="button">Right</button>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 col-sm-12 button-group-mb-sm">
                     <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-dark" type="button">Left</button>
                        <button class="btn btn-dark" type="button">Middle</button>
                        <button class="btn btn-dark" type="button">Right</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card" id="large-btn">
            <div class="card-header">
               <h5>Large buttons</h5>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-simple-left"></i></li>
                     <li><i class="view-html fa fa-code"></i></li>
                     <li><i class="icofont icofont-maximize full-card"></i></li>
                     <li><i class="icofont icofont-minus minimize-card"></i></li>
                     <li><i class="icofont icofont-refresh reload-card"></i></li>
                     <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
               </div>
               <span>Add <code>.btn-lg</code> class for large size buttons</span>
            </div>
            <div class="card-body btn-showcase">
               <button class="btn btn-primary btn-lg" type="button">Primary Button</button>
               <button class="btn btn-secondary btn-lg" type="button">Secondary Button</button>
               <button class="btn btn-success btn-lg" type="button">Success Button</button>
               <button class="btn btn-info btn-lg" type="button">Info Button</button>
               <button class="btn btn-warning btn-lg" type="button">Warning Button</button>
               <button class="btn btn-danger btn-lg" type="button">Danger Button</button>
               <button class="btn btn-light btn-lg" type="button">Light Button</button>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-primary btn-lg"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary btn-lg"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-success btn-lg"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-info btn-lg"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-warning btn-lg"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-danger btn-lg"&gt;danger button&lt;/button&gt;
&lt;button type="button" class="btn btn-light btn-lg"&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
         <div class="card" id="small-btn">
            <div class="card-header">
               <h5>Small buttons</h5>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-simple-left"></i></li>
                     <li><i class="view-html fa fa-code"></i></li>
                     <li><i class="icofont icofont-maximize full-card"></i></li>
                     <li><i class="icofont icofont-minus minimize-card"></i></li>
                     <li><i class="icofont icofont-refresh reload-card"></i></li>
                     <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
               </div>
               <span>Add <code>.btn-sm</code> class for small size buttons</span>
            </div>
            <div class="card-body btn-showcase">
               <button class="btn btn-primary btn-sm" type="button">Primary Button</button>
               <button class="btn btn-secondary btn-sm" type="button">Secondary Button</button>
               <button class="btn btn-success btn-sm" type="button">Success Button</button>
               <button class="btn btn-info btn-sm" type="button">Info Button</button>
               <button class="btn btn-warning btn-sm" type="button">Warning Button</button>
               <button class="btn btn-danger btn-sm" type="button">Danger Button</button>
               <button class="btn btn-light btn-sm" type="button">Light Button</button>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-primary btn-sm"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary btn-sm"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-success btn-sm"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-info btn-sm"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-warning btn-sm"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-danger btn-sm"&gt;danger button&lt;/button&gt;
&lt;button type="button" class="btn btn-light btn-sm"&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
         <div class="card" id="ex-small-btn">
            <div class="card-header">
               <h5>Extra Small buttons</h5>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-simple-left"></i></li>
                     <li><i class="view-html fa fa-code"></i></li>
                     <li><i class="icofont icofont-maximize full-card"></i></li>
                     <li><i class="icofont icofont-minus minimize-card"></i></li>
                     <li><i class="icofont icofont-refresh reload-card"></i></li>
                     <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
               </div>
               <span>Add <code>.btn-xs</code> class for extra small size buttons</span>
            </div>
            <div class="card-body btn-showcase">
               <button class="btn btn-primary btn-xs" type="button">Primary Button</button>
               <button class="btn btn-secondary btn-xs" type="button">Secondary Button</button>
               <button class="btn btn-success btn-xs" type="button">Success Button</button>
               <button class="btn btn-info btn-xs" type="button">Info Button</button>
               <button class="btn btn-warning btn-xs" type="button">Warning Button</button>
               <button class="btn btn-danger btn-xs" type="button">Danger Button</button>
               <button class="btn btn-light btn-xs" type="button">Light Button</button>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-primary btn-xs"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary btn-xs"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-success btn-xs"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-info btn-xs"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-warning btn-xs"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-danger btn-xs"&gt;danger button&lt;/button&gt;
&lt;button type="button" class="btn btn-light btn-xs"&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
         <div class="card" id="active-btn">
            <div class="card-header">
               <h5>Active Buttons</h5>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-simple-left"></i></li>
                     <li><i class="view-html fa fa-code"></i></li>
                     <li><i class="icofont icofont-maximize full-card"></i></li>
                     <li><i class="icofont icofont-minus minimize-card"></i></li>
                     <li><i class="icofont icofont-refresh reload-card"></i></li>
                     <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
               </div>
               <span>Add <code>.active</code> class for active state</span>
            </div>
            <div class="card-body btn-showcase">
               <button class="btn btn-primary active" type="button">Active</button>
               <button class="btn btn-secondary active" type="button">Active</button>
               <button class="btn btn-success active" type="button">Active</button>
               <button class="btn btn-info active" type="button">Active</button>
               <button class="btn btn-warning active" type="button">Active</button>
               <button class="btn btn-danger active" type="button">Active</button>
               <button class="btn btn-light active txt-dark" type="button">Active</button>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-primary active"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary active"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-success active"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-info active"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-warning active"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-danger active"&gt;Active&lt;/button&gt;
&lt;button type="button" class="btn btn-light active"&gt;Active&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
         <div class="card" id="disabled-btn">
            <div class="card-header">
               <h5>Disabled buttons</h5>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-simple-left"></i></li>
                     <li><i class="view-html fa fa-code"></i></li>
                     <li><i class="icofont icofont-maximize full-card"></i></li>
                     <li><i class="icofont icofont-minus minimize-card"></i></li>
                     <li><i class="icofont icofont-refresh reload-card"></i></li>
                     <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
               </div>
               <span>Add <code>.disabled</code> class or <code>disabled="disabled"</code> attribute for disabled button</span>
            </div>
            <div class="card-body btn-showcase">
               <button class="btn btn-primary disabled" type="button">Disabled</button>
               <button class="btn btn-secondary disabled" type="button">Disabled</button>
               <button class="btn btn-success disabled" type="button">Disabled</button>
               <button class="btn btn-info disabled" type="button">Disabled</button>
               <button class="btn btn-warning disabled" type="button">Disabled</button>
               <button class="btn btn-danger disabled" type="button">Disabled</button>
               <button class="btn btn-light disabled" type="button">Disabled</button>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head5">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-primary disabled"&gt;Disabled&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary disabled"&gt;Disabled&lt;/button&gt;
&lt;button type="button" class="btn btn-success disabled"&gt;Disabled&lt;/button&gt;
&lt;button type="button" class="btn btn-info disabled"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-warning disabled"&gt;Disabled&lt;/button&gt;
&lt;button type="button" class="btn btn-danger disabled"&gt;Disabled&lt;/button&gt;
&lt;button type="button" class="btn btn-light disabled"&gt;Disabled&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
         <div class="card" id="outline-button">
            <div class="card-header">
               <h5>outline buttons</h5>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-simple-left"></i></li>
                     <li><i class="view-html fa fa-code"></i></li>
                     <li><i class="icofont icofont-maximize full-card"></i></li>
                     <li><i class="icofont icofont-minus minimize-card"></i></li>
                     <li><i class="icofont icofont-refresh reload-card"></i></li>
                     <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
               </div>
               <span>Add <code>.btn-outline-*</code> class for border button</span>
            </div>
            <div class="card-body btn-showcase">
               <button class="btn btn-outline-primary" type="button">Primary Button</button>
               <button class="btn btn-outline-secondary" type="button">Secondary Button</button>
               <button class="btn btn-outline-success" type="button">Success Button</button>
               <button class="btn btn-outline-info" type="button">Info Button</button>
               <button class="btn btn-outline-warning" type="button">Warning Button</button>
               <button class="btn btn-outline-danger" type="button">Danger Button</button>
               <button class="btn btn-outline-light txt-dark" type="button">Light Button</button>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head7" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head7">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-outline-primary"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-secondary"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-success"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-info"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-warning"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-danger"&gt;danger button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-light txt-dark"&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
         <div class="card" id="outline-bold-button">
            <div class="card-header">
               <h5>bold Border outline buttons</h5>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-simple-left"></i></li>
                     <li><i class="view-html fa fa-code"></i></li>
                     <li><i class="icofont icofont-maximize full-card"></i></li>
                     <li><i class="icofont icofont-minus minimize-card"></i></li>
                     <li><i class="icofont icofont-refresh reload-card"></i></li>
                     <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
               </div>
               <span>Add <code>.btn-outline-*-2x</code> class for bold outline</span>
            </div>
            <div class="card-body btn-showcase">
               <button class="btn btn-outline-primary-2x" type="button">Primary Button</button>
               <button class="btn btn-outline-secondary-2x" type="button">Secondary Button</button>
               <button class="btn btn-outline-success-2x" type="button">Success Button</button>
               <button class="btn btn-outline-info-2x" type="button">Info Button</button>
               <button class="btn btn-outline-warning-2x" type="button">Warning Button</button>
               <button class="btn btn-outline-danger-2x" type="button">Danger Button</button>
               <button class="btn btn-outline-light-2x txt-dark" type="button">Light Button</button>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head8" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head8">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-outline-primary-2x"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-secondary-2x"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-success-2x"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-info-2x"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-warning-2x"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-danger-2x"&gt;danger button&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-light-2x txt-dark"&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
         <div class="card" id="gradiant">
            <div class="card-header">
               <h5>Gradien buttons</h5>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-simple-left"></i></li>
                     <li><i class="view-html fa fa-code"></i></li>
                     <li><i class="icofont icofont-maximize full-card"></i></li>
                     <li><i class="icofont icofont-minus minimize-card"></i></li>
                     <li><i class="icofont icofont-refresh reload-card"></i></li>
                     <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
               </div>
               <span>Add <code>.btn-*-gradien</code> class for gradien button</span>
            </div>
            <div class="card-body btn-showcase">
               <button class="btn btn-primary-gradien" type="button">Primary Button</button>
               <button class="btn btn-secondary-gradien" type="button">Secondary Button</button>
               <button class="btn btn-success-gradien" type="button">Success Button</button>
               <button class="btn btn-info-gradien" type="button">Info Button</button>
               <button class="btn btn-warning-gradien" type="button">Warning Button</button>
               <button class="btn btn-danger-gradien" type="button">Danger Button</button>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head13" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head13">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type="button" class="btn btn-primary-gradien"&gt;primary button&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary-gradien"&gt;secondary button&lt;/button&gt;
&lt;button type="button" class="btn btn-success-gradien"&gt;Success button&lt;/button&gt;
&lt;button type="button" class="btn btn-info-gradien"&gt;Info button&lt;/button&gt;
&lt;button type="button" class="btn btn-warning-gradien"&gt;warning button&lt;/button&gt;
&lt;button type="button" class="btn btn-danger-gradien"&gt;danger button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(route('/')); ?>/assets/js/clipboard/clipboard.min.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/custom-card/custom-card.js"></script>
<script src="<?php echo e(route('/')); ?>/assets/js/button-tooltip-custom.js"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/webiotspc/Documents/Poco-Laravel/laravel/template/resources/views/ui-elements/buttons.blade.php ENDPATH**/ ?>