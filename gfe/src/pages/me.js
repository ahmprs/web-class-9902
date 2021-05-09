import * as React from "react";

// npm i jquery
import $ from 'jquery';

function Me() {
  const [nbr, setNbr] = React.useState(5);
  const [title, setTitle] = React.useState("");
  
  function txtChange(e) {
    setNbr(e.target.value);
  }

  function btnInc(){
    setNbr(nbr + 5);
  }

  function fnFetchBooks(){
    //   debugger;
    $.post(
        'http://localhost/web-class-9902/lbe/public/api/get-all-books',
        {},
        function(d,s){
            debugger;
            console.table(d.res);
            //  setTitle (d.res[0].book_title);
        }
    );
  }

  return (
    <>
      <h2 style={{ color: "green" }}>Test</h2>
      <input onChange={txtChange} value={nbr} type="number" />
      <button onClick={btnInc}>+</button>

      <hr />
      <button onClick={fnFetchBooks}>Fetch books</button>
      <br />
      <span>{title}</span>
    </>
  );
}

export default Me;
