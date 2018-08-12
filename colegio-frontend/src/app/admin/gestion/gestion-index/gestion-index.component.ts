import { Component, OnInit } from '@angular/core';
import {GestionService} from "../gestion.service";
import {ToastrService} from "ngx-toastr";

@Component({
  selector: 'app-gestion-index',
  templateUrl: './gestion-index.component.html',
  styleUrls: ['./gestion-index.component.css']
})
export class GestionIndexComponent implements OnInit {
    gestiones: any = null;
    controls = {
        'current_page' : 1,
        'per_page' : 0,
        'last_page' : 0,
        'prev_page_url' : '',
        'next_page_url' : '',
        'total' : 0,
    };

    constructor(protected gestionService: GestionService,
                protected toastr: ToastrService){
        this.gestionService.index()
            .subscribe((res: any)=> {
              this.gestiones = res.data;
            });
    }

    ngOnInit() {}

    loadPage(event: any): void {
        console.log(event);
        this.gestionService.loadPage(event.page)
            .subscribe((res: any)=> {
                this.gestiones = res.data;
                this.controls.current_page = res.current_page;
                this.controls.per_page = res.per_page;
                this.controls.prev_page_url = res.prev_page_url;
                this.controls.next_page_url = res.next_page_url;
                this.controls.last_page = res.last_page;
                this.controls.total = res.total;

            });
    }

    destroy(gestion_id, index) {
        this.gestionService.destroy(gestion_id)
            .subscribe((res: any) => {
                this.toastr.success(res.message, 'Eliminacion exitosa');
                this.gestiones.splice(index, 1);
            });
    }
}
