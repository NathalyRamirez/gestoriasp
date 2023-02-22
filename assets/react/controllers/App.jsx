import React, { useState } from "react";
import { default as Login } from "./Login";
import { default as NavbarSP } from "./NavbarSP";
import axios from "axios";


export default function App(props) {
  const [token, setToken] = useState(null);
  const handleLogin = (username, password) => {
    const dataToSend = {
      username: username,
      password: password,
    };
    return axios({
      method: "POST",
      url: "/api/login",
      headers: {},
      data: dataToSend,
    })
      .then((response) => {
        console.log(response["data"]);
        setToken(response["data"]["token"]);
      })
      .catch((error) => {});
  };

  return (
    <>
      {token && (
        <>
          <NavbarSP />
          <div>
            <h4>Has iniciado sesión correctamente.</h4>
          </div>
        </>
      )}
      {!token && <Login handleLogin={handleLogin} />}
    </>
  );
}
