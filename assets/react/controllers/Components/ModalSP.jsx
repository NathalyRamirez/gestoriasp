import React, { useState } from "react";
import { Button } from "flowbite-react";
import Modal from "react-bootstrap/Modal";

export default function ModalSP(props) {
  const [show, setShow] = useState(false);

  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);

  return (
    <>
      <Button onClick={handleShow}> Crear trabajador</Button>

      <Modal className="modalsp"
        show={show}
        onHide={handleClose}
        backdrop="static"
        keyboard={false}
      >
        <Modal.Header closeButton>
          <Modal.Title>{props.title}</Modal.Title>
        </Modal.Header>
        <Modal.Body>
           {props.children}
        </Modal.Body>
        <Modal.Footer>
        
          <Button >Finalizar</Button>
        </Modal.Footer>
      </Modal>
    </>
  );
}
