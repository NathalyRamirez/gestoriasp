import React, { useState } from "react";
import { Button } from "flowbite-react";
import { default as TableSP } from "./Components/TableSP";
import { default as ModalSP } from "./Components/ModalSP";
import { default as TrabajadoresCreateForm } from "./Forms/TrabajadoresCreateForm";
import axios from "axios";

export default function Workers(props) {
  const [token, setToken] = useState(null);

  return (
    <>
      <h1>¡Estás en trabajadores!</h1>
      <ModalSP title="Creación de trabajador">

<TrabajadoresCreateForm/>

      </ModalSP>
      
     

      
      <TableSP />
    </>
  );
}
