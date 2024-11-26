import { Component } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { HttpClient } from '@angular/common/http';

export class AppComponent {
  userForm: FormGroup;

  constructor(private fb: FormBuilder, private http: HttpClient) {
    this.userForm = this.fb.group({
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
    const formData = this.userForm.value;
    this.http.post('http://localhost:8000/api/user', formData)
      .subscribe(response => {
        console.log('Données envoyées avec succès', response);
      }, error => {
        console.error('Erreur lors de l\'envoi des données', error);
      });
  }
}
