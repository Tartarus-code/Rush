import { Component } from '@angular/core';

@Component({
  selector: 'app-footer',
  standalone: true,
  imports: [],
  template: `<p>{{ email }}</p>`,
  templateUrl: './footer.component.html',
  styleUrl: './footer.component.css',
  
})
export class FooterComponent {
  email: string = 'info@rush.fr';
}