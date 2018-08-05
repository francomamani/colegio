import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {UsuarioComponent} from "./usuario/usuario.component";
import {UsuarioCreateComponent} from "./usuario/usuario-create/usuario-create.component";
import {UsuarioIndexComponent} from "./usuario/usuario-index/usuario-index.component";
import {UsuarioService} from "./usuario/usuario.service";
import {HttpClientModule} from "@angular/common/http";

const routes: Routes = [
    { path: '', component: UsuarioComponent, children: [
        { path: 'listar', component: UsuarioIndexComponent},
        { path: 'crear', component: UsuarioCreateComponent},
        { path: '', redirectTo: 'listar', pathMatch: 'full'}
    ]},

];

@NgModule({
  imports: [
      HttpClientModule,
      RouterModule.forChild(routes)],
  exports: [RouterModule],
  providers: [UsuarioService]
})
export class AdminRoutingModule { }
