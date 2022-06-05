<h1>Steps</h1>

<h3>Step 1</h3>
<h5>Create 4 Databases</h5>
<ul>
	<li>MTlandlord</li>
	<li>vue</li>
	<li>javascript</li>
	<li>php</li>
</ul>

<h3>Step2</h3>
<p>Remove .example</p>
<p>Change .env.example => .env</p>

<h3>Step3</h3>
<p>Install Composer: Use Command below</p>
<i>composer install</i>

<h3>Step4</h3>
<p>Landlord migration: Use Command below</p>
<i>php artisan migrate --path=database/migrations/landlord --database=landlord</i>

<h3>Step5</h3>
<p>Create Tenant in MTlandlord database</p>
<p>Copy the exact <strong>id,name,domain,database</strong></p>
<p>You can put random information in the <strong>description</strong></p>
<div><img src="./public/images/mtdb.jpg" style="width:8rem; height: auto;"></div>

<h3>Step6</h3>
<p>Tenant migration: Use Command below</p>
<i>php artisan tenants:artisan "migrate --database=tenant"</i>

<h3>Step7</h3>
<p>Run command below</p>
<i>php artisan serve</i>
<br>
<i>localhost:8000</i>
<i>vue.localhost:8000</i>
<i>javascript.localhost:8000</i>
<i>php.localhost:8000</i>

<h3>Step8</h3>
<p>Register to create users</p>
