import * as React from "react";
import $ from "jquery";

function Students() {
  const [rows, setRows] = React.useState("");

  return (
    <>
      <h3>This is students page</h3>
      <button onClick={fetchStudentsData}>Fetch Students</button>
      <hr />
      <table>
        <thead>
          <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Phone</th>
            <th>Student Active</th>
          </tr>
        </thead>
        <tbody>{rows}</tbody>
      </table>
    </>
  );

  function fetchStudentsData() {
    $.post(
      "http://localhost/web-class-9902/lbe/public/api/get-all-students",
      {},
      function (d, s) {
        console.log(d);

        let $pr = d.res.map((x) => {
          return (
            <tr key={x.std_id}>
              <td>{x.std_id}</td>
              <td>{x.std_name}</td>
              <td>{x.std_phone}</td>
              <td>{x.std_active == 0 ? 'NO':"YES"}</td>
            </tr>
          );
        });

        setRows($pr);
      }
    );
  }
}

export default Students;
