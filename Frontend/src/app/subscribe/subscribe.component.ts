import { Component } from '@angular/core';
import { FooterComponent } from '../core/footer/footer.component';
import { HeaderComponent } from '../core/header/header.component';
@Component({
  selector: 'app-subscribe',
  standalone: true,
  imports: [HeaderComponent, FooterComponent],
  templateUrl: './subscribe.component.html',
  styleUrl: './subscribe.component.css'
})
export class SubscribeComponent {

}
