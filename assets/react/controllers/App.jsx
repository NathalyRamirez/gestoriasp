import React, { useState } from "react";
import { default as Login } from "./Components/Login";
import { default as NavbarSP } from "./Components/NavbarSP";
import axios from "axios";
import { default as Workers } from "./Workers";

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
         Workers
        </>
      )}
      {!token && <Login handleLogin={handleLogin} />}
    </>
  );
}
