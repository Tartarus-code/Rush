import { Component, OnInit } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { HeaderComponent } from './core/header/header.component';
import { MainComponent } from './main/main.component';
import { FooterComponent } from './core/footer/footer.component';
import { ContactComponent } from './contact/contact.component';
import { SubscribeComponent } from './subscribe/subscribe.component';
import * as AOS from 'aos';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, HeaderComponent, MainComponent, FooterComponent, ContactComponent, SubscribeComponent],
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  title = 'Rush';

  ngOnInit() {
    AOS.init();
  }
}
