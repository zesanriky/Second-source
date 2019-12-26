
//===================================================================
//TASK 1


//Write a lookup() function that takes login and a property as
//arguments and returns the property value.

//The function should check if login is an actual user and the given
//property is a property of that contact.

//If both are true, then return the "value" of that property.

//If login is not found, return an error with the message,
//"Could not find user." 

//If prop is not found, return an error with the message,
//"Could not find property."
//===================================================================


const users = [
  {
    "login": "knuth",
    "firstName": "Donald",
    "lastName": "Knuth",
    "likes": ["C", "Unix"]
  },
  {
    "login": "norvig",
    "firstName": "Peter",
    "lastName": "Norvig",
    "likes": ["AI", "Search", "NASA", "Mars"]
  },
  {
    "login": "mfowler",
    "firstName": "Martin",
    "lastName": "Fowler",
    "likes": ["Design Patterns", "Refactoring"]
  },
  {
    "login": "kent",
    "firstName": "Kent",
    "lastName": "Beck",
    "likes": ["TDD", "wikis", "Design Patterns"]
  }
];


// Coding start

// lookup()

const lookup = (login, prop) => {

const found =  users.find(function(e){
    return e.login === login;
  });
  if(!found) {
    	throw "/Could not find user/";
  } else {
    if(prop in found) {
      return found[prop];
    } else {
     	throw "/Could not find property/";
    }
  }


};



// Tests
test('lookup() likes', assert => {
	const msg = `lookup(<login>, 'likes') should return likes for the specified user.`;

	const actual = lookup('norvig', 'likes');
	const expected = ["AI", "Search", "NASA", "Mars"];

	assert.deepEqual(actual, expected, msg);
	assert.end();
});


test('lookup() last name', assert => {
	const msg = `lookup(<login>, 'lastName') should return the last name
     for the specified user.`;

	const actual = lookup('knuth', 'lastName');
	const expected = 'Knuth';
	assert.deepEqual(actual, expected, msg);
	assert.end();
});


test('lookup() with unknown user', assert => {
	const msg = `lookup() with unknown user should return an error
    with the correct message.`;
 
	assert.throws(function(){
  		const value = lookup('nobody', 'likes');
	}, /Could not find user/);
	assert.end();
});


test('lookup() with unknown property', assert => {
	const msg = `lookup() with unknown property should return an error
		with the correct message`;
	assert.throws(function(){
		const value = lookup('mfowler', 'noprop');	
	}, /Could not find property/);
	assert.end();
});


// Coding end


//===================================================================
//TASK 2 - Write a second <async> function, called lookupAsync(), that
//takes the same input as lookup plus a parameter to receive a 
//<callback function>.

//The async function itself should make use of the lookup() function 
//but return the result inside the callback.

//The parameters for the callback are err and res.

//If an Error has been thrown by lookup() then it should be passed to
//err, otherwise err is null or undefined.

//If a result has been returned by lookup() then it should be passed to
//res, otherwise res is null or undefined.


//===================================================================

// Coding start

// lookupAsync()

const lookupAsync = (login, prop, callback) => {

  const found = users.find(function(e) {

    return e.login === login;
  });

    if (!found) {
      callback(new Error("Could not find user."));
    } else {
      if (prop in found) {
        callback(null, found[prop]);
      } else {
        callback(new Error("Could not find property."));
      }
    }
    
  };

// Tests
test('lookupAsync() likes', assert => {
  const msg = `lookupAsync(<login>, 'likes', callback) should return likes
    for the specified user.`;

	lookupAsync('norvig', 'likes', function(err, res){
		const actual = res;
  		const expected = ["AI", "Search", "NASA", "Mars"];
		assert.deepEqual(actual, expected, msg);
	  	assert.end();	  
  });

});


test('lookupAsync() last name', assert => {
  const msg = `lookupAsync(<login>, 'lastName') should return the last name
     for the specified user.`;

  lookupAsync('knuth', 'lastName', function(err, res){
	const expected = 'Knuth';
	const actual = res;
	assert.deepEqual(actual, expected, msg);
	assert.end(); 
  });
});


test('lookupAsync() with unknown user', assert => {
  const msg = `lookupAsync() with unknown user should return an error
    with the correct message.`;

  const value = lookupAsync('nobody', 'likes', function(err, res){
	  const actual = err.message;
	  const expected = 'Could not find user.';
	  assert.equal(actual, expected, msg);
	  assert.end();  
  });
});


test('lookupAsync() with unknown property', assert => {
  const msg = `lookupAsync() with unknown property should return an error
    with the correct message`;

  lookupAsync('mfowler', 'noprop', function(err, res){
	const actual = err.message;
	const expected = 'Could not find property.';
  	assert.equal(actual, expected, msg);
  	assert.end();
  });
});

// Coding end

//TASK 3 - Write a function, that addUser() adds a user to the users
//array. 

//It should return true if the user has been added successfully.
//It should throw an error "user exists" if a user exists with that name.
//It should throw an error "no login given" if no 'login' is provided.
//It should throw an error "no firstName given" if no 'firstName' is provided.
//It should throw an error "no lastName given" if no 'lastName' is provided.
//It should throw an error "no likes given" if no 'likes' is provided, however, likes can be an empty array. Then it should be accepted.

//===================================================================

// Coding start

const addUser = function(login, fname, lname, likes){
	const check_correct_user =  users.find(function(e){	
	  
     if (e.login === login)
         if (e.fname === fname)
          if (e.lname === lname)
            if (e.likes === likes)
            
             return true;
             
             
     if(!login) {	  
   	throw '/no login given/';
  } 
	  if(!fname) {	  
   	throw '/no firstName given/';
  } 
	 if(!lname) {	  
   	throw '/no lastName given/';
  } 
	
 if(!likes) {	  
   	throw '/no likes given/';
  }  
	if(login) {	  
   	throw '/user exists/';
  }  
  
  });};


test('addUser() no login given', assert => {
	const msg = `addUser() no login given`;
	assert.throws(function(){
		const value = addUser();	
	}, /no login given/);
	assert.end();
});


test('addUser() no firstName given', assert => {
	const msg = `addUser() no firstName given`;
	assert.throws(function(){
		const value = addUser('newuser');	
	}, /no firstName given/);
	assert.end();
});

test('addUser() no lastName given', assert => {
	const msg = `addUser() no lastName given`;
	assert.throws(function(){
		const value = addUser('newuser', "newfirstName");	
	}, /no lastName given/);
	assert.end();
});

test('addUser() no likes given', assert => {
	const msg = `addUser() no likes given`;
	assert.throws(function(){
		const value = addUser('newuser', "newfirstName", "newLastName");	
	}, /no likes given/);
	assert.end();
});

test('addUser() user exists', assert => {
	const msg = `addUser() user exists`;
	assert.throws(function(){
		const value = addUser('knuth', "newfirstName", "newLastName", []);	
	}, /user exists/);
	assert.end();
});

test('addUser() default passes', assert => {
	const msg = `addUser() default passes`;
	const value = addUser('somenewuser', "newfirstName", "newLastName", ['stuff']);	
	const expected = true;
  	assert.equal(actual, expected, msg);
	assert.end();
});

// Coding end


