import { Routes } from '@angular/router';
import { ContactComponent } from './contact/contact.component';
import { MainComponent } from './main/main.component';
import { SubscribeComponent } from './subscribe/subscribe.component';
import { TeamComponent } from './team/team.component';

export const routes: Routes = [
    { path: '', component: MainComponent},
    { path: 'contact', component: ContactComponent } ,
    { path: 'subscribe', component: SubscribeComponent},
    { path: 'team', component: TeamComponent},

];
