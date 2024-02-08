import {Injectable} from '@angular/core';
import {HttpReprint} from "../../util/http.reprint";
import {Paginate} from "../../entity/server-response";
import {Unit} from "../../entity/system";
import {
  UNIT_DELETE,
  UNIT_LIST,
  UNIT_SAVE,
  UNIT_VIEW
} from "../../config/system.url";
import {ProductVIP} from "../../entity/goods";

@Injectable({
  providedIn: 'root'
})
export class UnitService {

  constructor(private http: HttpReprint) {
  }

  public items(page: number = 1, query?: Unit) {
    return this.http.httpPost<Paginate<Unit>>(`${UNIT_LIST}?page=${page}`, query)
  }

  public save(postData: Unit) {
    return this.http.httpPost(UNIT_SAVE, postData)
  }

  public view(id: number) {
    return this.http.httpPost<Unit>(UNIT_VIEW, {id})
  }

  public delete(id: number | undefined) {
    return this.http.httpPost(UNIT_DELETE, {id})
  }
}
