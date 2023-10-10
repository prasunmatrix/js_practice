<script>
  // JavaScript object
  const jsonData = {
    "name": "John",
    "age": 22
  };
  const jsonData1 = '{ "name": "John", "age": 22 }';

  // converting to JSON
  const obj = JSON.stringify(jsonData);
  const obj1 = JSON.stringify(jsonData1);

  // accessing the data
  console.log(obj); // "{"name":"John","age":22}"
  console.log(obj1);  
</script>