
function q1(values){
    function func3(u,v){
      if (math.random()>0.5){
        var [x1,y1,z1]=func2(v);
      u=u+2;
      }else{
  
        var [x1,y1,z1]=func2(v);
        u=u-2;
      }
      return math.abs(x1*u)+math.abs(y1+u)+math.abs(z1-u);
    }
  }