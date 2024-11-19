import { Component } from '@angular/core';
import { HeaderComponent } from '../core/header/header.component';
import { FooterComponent } from '../core/footer/footer.component';
@Component({
  selector: 'app-team',
  standalone: true,
  imports: [HeaderComponent, FooterComponent],
  templateUrl: './team.component.html',
  styleUrl: './team.component.css'
})
export class TeamComponent {

}
