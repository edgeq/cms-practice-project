# PHP & MySQL Notes

## 5 steps to working with MySQL and PHP
![mysql-php-workflow-00](../images/mysql-php-workflow-00.png)
### Step 1 - Create a database connection
![mysql-php-workflow-01](../images/mysql-php-workflow-01.png)
	
		mysqli_connect($host, $user, $pw, $db)

* set your connection string to a $var

### Step 2 - Query the database
![mysql-php-workflow-02](../images/mysql-php-workflow-02.png)

	mysqli_query($connection, $query)
		
### Step 3 -  Work with retrived Data
![mysql-php-workflow-03](../images/mysql-php-workflow-03.png)

### Step 4 - Release data drom memory

		mysqli_free_result($result_set)

### Step 5  - Close db connection
	mysqli_close($connection)

	

