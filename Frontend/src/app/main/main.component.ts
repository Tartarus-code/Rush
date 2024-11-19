import { Component } from '@angular/core';
import { FooterComponent } from '../core/footer/footer.component';
import { DiscoverComponent } from '../core/discover/discover.component';
@Component({
  selector: 'app-main',
  standalone: true,
  imports: [DiscoverComponent, FooterComponent],
  templateUrl: './main.component.html',
  styleUrl: './main.component.css'
})

export class MainComponent {

}
