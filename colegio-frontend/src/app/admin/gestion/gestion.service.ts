import { Injectable } from '@angular/core';
import {HttpClient} from "@angular/common/http";
import {environment} from "../../../environments/environment.prod";

@Injectable()
export class GestionService {
    base = environment.base;
    constructor(protected http: HttpClient) { }

    index() {
        return this.http.get(this.base + 'gestiones');
    }

    loadPage(page){
        return this.http.get(this.base + 'gestiones?page=' + page);
    }

    store(request) {
        return this.http.post(this.base + 'gestiones', request);
    }

    destroy(id) {
        return this.http.delete(this.base + 'gestiones/' + id);
    }
}
