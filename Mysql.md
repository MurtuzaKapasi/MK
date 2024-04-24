# Queries for mysql
### ` mysqli_connect() - Connect to a MySQL server`
Syntax -- mysqli_connect($host, $user, $passwd, $dbname)

where $host = "localhost", $user = "root", $passwd = "root", $dbname = "test"
### `mysqli_close() - Close a MySQL connection`
Syntax -- mysqli_close($conn)

### `mysqli_query() - Execute an SQL query`
Syntax -- mysqli_query($conn, $sql)

where &$sql = "SELECT * FROM student"; or any mysql Query

### `mysqli_fetch_assoc() - Fetch a result row as an associative array`
Syntax -- mysqli_fetch_assoc($result)

where $result = mysqli_query($conn, $sql);

### `mysqli_fetch_row() - Fetch a result row as a numeric array`
Syntax -- mysqli_fetch_row($result)

### `mysqli_num_rows() - Get the number of rows in a result`
Syntax -- mysqli_num_rows($result)

### ` mysqli_error() - Get the last error message`
Syntax -- mysqli_error($conn)