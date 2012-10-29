var man = {
  'age' : 10,
  'weight' : 40
};

man.education = 3;

man.getAge = function () {
  return this.age;
}


function Person(age, weight) {
  this.age = age;
  this.weight = weight;
}

Person.prototype.getAge = function () {
  return this.age;
}

var person = new Person();

function vasya(education) {
  this.education = education;
}

vasya.prototype = person;

var a = new vasya(4);

jQuery(document).ready(function () {
});