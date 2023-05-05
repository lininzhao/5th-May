 //题目：请编写一个班级类，并且可以通过该类实例化不同的班级，每个班级可以加入自己的学生和查看当前学生。

 function Class(name){
    this.name=name;
}

var class1=new Class('lihua');
console.log(class1);

