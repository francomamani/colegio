import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';


import { AppComponent } from './app.component';
import {
    BsDropdownModule,
    ButtonsModule,
    CarouselModule,
    CollapseModule,
    ModalModule,
    TooltipModule
} from "ngx-bootstrap";
import { LayoutComponent } from './layout/layout.component';
import { LoginComponent } from './login/login.component';
import {RouterModule} from "@angular/router";
import {appRoutes} from "./app-routing.module";
import { InicioComponent } from './inicio/inicio.component';
import {AuthService} from "./auth.service";
import {ReactiveFormsModule} from "@angular/forms";
import {HttpClientModule} from "@angular/common/http";
import {AuthGuard} from "./auth.guard";
import {BrowserAnimationsModule} from "@angular/platform-browser/animations";


@NgModule({
  declarations: [
    AppComponent,
    LayoutComponent,
    LoginComponent,
    InicioComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    ReactiveFormsModule,
    HttpClientModule,
    BsDropdownModule.forRoot(),
    TooltipModule.forRoot(),
    ModalModule.forRoot(),
    CollapseModule.forRoot(),
    CarouselModule.forRoot(),
    ButtonsModule.forRoot(),
    RouterModule.forRoot(appRoutes)
  ],
  providers: [AuthService, AuthGuard],
  bootstrap: [AppComponent]
})
export class AppModule { }
