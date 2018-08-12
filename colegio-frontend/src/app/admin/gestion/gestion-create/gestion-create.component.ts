import { Component, OnInit } from '@angular/core';
import {FormBuilder, FormControl, FormGroup, Validators} from "@angular/forms";
import {GestionService} from "../gestion.service";
import {ToastrService} from "ngx-toastr";

@Component({
  selector: 'app-gestion-create',
  templateUrl: './gestion-create.component.html',
  styleUrls: ['./gestion-create.component.css']
})
export class GestionCreateComponent implements OnInit {

    gestionGroup: FormGroup;
    constructor(protected gestionService: GestionService,
                protected fb: FormBuilder,
                protected tostr: ToastrService) {
        this.createForm();
    }

    ngOnInit() {
    }

    createForm() {
        this.gestionGroup = this.fb.group({
            'gestion' : new FormControl(new Date().getFullYear(), Validators.required),
            'bimestre' : new FormControl('Primer bimestre', Validators.required),
        });
    }

    store() {
        this.gestionService.store(this.gestionGroup.value)
            .subscribe((res: any) => {
                this.tostr.success('Gestion ' + res.gestion + ' creada exitosamente', 'Registrado');
            }, (error: any) => {
                console.log(error);
                this.tostr.error(error.error.error, 'Error');
            });
    }

}
