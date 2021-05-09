import * as React from "react";
import $ from "jquery";

const About = () => {
  const [cnt, setCnt] = React.useState(0);
  return (
    <>
      <h3>About page here!!</h3>
      <br />
      <input onChange={txtChanged} value={cnt} type="text" />
      <br />
      <button onClick={inc}>Increment</button>
      <br />
      <button onClick={dec}>Decrement</button>

      <br />
      <button onClick={fetchInfo}>Fetch</button>
    </>
  );

  function inc() {
    setCnt(cnt + 1);
  }

  function dec() {
    setCnt(cnt - 1);
  }

  function fetchInfo(){
      $.post('http://localhost/web-class-9902/lbe/public/api/test',{},(d,s)=>{
          console.log(d);
      });
  }

  function txtChanged(e){
      console.log(e.target.value);
      setCnt(e.target.value)
  }
};

export default About;
