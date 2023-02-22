import React, { useState } from "react";
import { Button, TextInput, Checkbox, Label } from "flowbite-react";
import axios from "axios";

export default function Login(props) {
  const [username, setUserName] = useState();
  const [password, setPassword] = useState();

  const handleSubmit = () => {
    props.handleLogin(username, password);
  };

  return (
    <form className="flex flex-col gap-4">
      <div>
        <div className="mb-2 block">
          {/* <Label
                    htmlFor="username1"
                    value="Your Username"
                    /> */}
        </div>
        <TextInput
          id="username1"
          type="username"
          placeholder="name@flowbite.com"
          required={true}
          onChange={(e) => setUserName(e.target.value)}
        />
      </div>
      <div>
        <div className="mb-2 block">
          {/* <Label
                    htmlFor="password1"
                    value="Your password"
                    /> */}
        </div>
        <TextInput
          id="password1"
          type="password"
          required={true}
          onChange={(e) => setPassword(e.target.value)}
        />
      </div>
      <div className="flex items-center gap-2">
        <Checkbox id="remember" />
        <Label htmlFor="remember">Remember me</Label>
      </div>

      <Button onClick={handleSubmit}>Submit</Button>
    </form>
  );
}
