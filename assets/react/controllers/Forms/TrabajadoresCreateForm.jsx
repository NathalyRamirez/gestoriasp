import React, { useState } from "react";
import { TextInput, Label } from "flowbite-react";

export default function TrabajadoresCreateForm(props) {
  return (
    <>
      <div>
        <div>
           <Label value="nombre"/>
           <TextInput />
        </div>

        <div>
           <Label value="apellidos"/>
           <TextInput />
        </div>

        <div>
           <Label value="nif"/>
           <TextInput />
        </div>

      </div>
    </>
  );
}
