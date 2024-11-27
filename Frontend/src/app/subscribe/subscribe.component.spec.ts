import { Component } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { HttpClient } from '@angular/common/http';
import {Validators} from '@angular/forms';

export class AppComponent {
  userForm: FormGroup;

// Récupération des valeurs du formulaire.
  constructor(private form: FormBuilder, private http: HttpClient) {

    this.userForm = this.form.group({
      nom: [''],
      prenom: [''],
      email: [''],
      password: [''],
      dateNaissance: [''], 
      numTelephone: [''],
      isNotifSms: [''],
    });
  }

  onSubmit() {
    // Conversion de l'objet en JSON.
    const formData = this.userForm.value;
    // Envoi d'une requête HTTP POST à l'API /api/user.
    this.http.post('http://localhost:8000/api/user', formData)
    // Gestion de la réponse du serveur (succès ou erreur).
      .subscribe(response => {
        console.log('Données envoyées avec succès', response);
      }, error => {
        console.error('Erreur lors de l\'envoi des données', error);
      });
  }
}




