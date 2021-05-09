import * as React from "react";

// npm i jquery
import $ from "jquery";

import "../styles/main_styles.css";

function Me() {
  const [nbr, setNbr] = React.useState(5);
  const [tableInfo, setTableInfo] = React.useState(null);

  function txtChange(e) {
    setNbr(e.target.value);
  }

  function btnInc() {
    setNbr(nbr + 5);
  }

  function fnFetchBooks() {
    //   debugger;
    $.post(
      "http://localhost/web-class-9902/lbe/public/api/get-all-books",
      {},
      function (d, s) {
        // console.log(d.res);
        // debugger;

        let inf = d.res.map((x) => {
          return (
              <tr key={x.book_id}>
                <td>{x.book_id}</td>
                <td className="test">{x.book_author}</td>
                <td>{x.book_title}</td>
                <td>{x.book_info}</td>
                <td>{x.book_isbn}</td>
                <td>{x.book_qty}</td>
              </tr>
          );
        });
        setTableInfo(inf);
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
      <table className="tbl">
        <thead>
          <tr>
            <th>Book ID</th>
            <th>Author</th>
            <th>Title</th>
            <th>Info</th>
            <th>ISBN</th>
            <th>Quantity</th>
          </tr>
        </thead>
        <tbody>{tableInfo}</tbody>
      </table>
    </>
  );
}

export default Me;
