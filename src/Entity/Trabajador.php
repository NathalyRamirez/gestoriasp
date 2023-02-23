<?php

namespace App\Entity;

use App\Repository\TrabajadorRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: TrabajadorRepository::class)]
class Trabajador
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $departamento = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $apellidos = null;

    #[ORM\Column(length: 255)]
    private ?string $nif = null;

    #[ORM\Column(length: 255)]
    private ?string $numero_seguridad_social = null;


    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $inicio_de_contrato = null;

    #[ORM\Column]
    private ?string $indefinido = null;

    #[ORM\Column(length: 255)]
    private ?string $alta = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepartamento(): ?string
    {
        return $this->departamento;
    }

    public function setDepartamento(string $departamento): self
    {
        $this->departamento = $departamento;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getNif(): ?string
    {
        return $this->nif;
    }

    public function setNif(string $nif): self
    {
        $this->nif = $nif;

        return $this;
    }

    public function getNumeroSeguridadSocial(): ?string
    {
        return $this->numero_seguridad_social;
    }

    public function setNumeroSeguridadSocial(string $numero_seguridad_social): self
    {
        $this->numero_seguridad_social = $numero_seguridad_social;

        return $this;
    }




    public function getInicioDeContrato(): ?\DateTimeInterface
    {
        return $this->inicio_de_contrato;
    }

    public function setInicioDeContrato(\DateTimeInterface $inicio_de_contrato): self
    {
        $this->inicio_de_contrato = $inicio_de_contrato;

        return $this;
    }





    public function isIndefinido(): ?string
    {
        return $this->indefinido;
    }

    public function setIndefinido(string $indefinido): self
    {
        $this->indefinido = $indefinido;

        return $this;
    }

    public function getAlta(): ?string
    {
        return $this->alta;
    }

    public function setAlta(string $alta): self
    {
        $this->alta = $alta;

        return $this;
    }
}
