import {Unit} from "./system";

export class Goods {
  id?: string;
  title: string = "";
  description: string = "";
  stock?: number = 0;
  status?: number;
  bind?: number;
  started_at: number = 0;
  ended_at: number = 0;
  sort: number = 0;
  remark: string = "";
  created_at?: number;
}

export class ProductRecharge {
  id?: number;
  title: string = "";
  denomination: number = 0;
  give_amount: number = 0;
  unit_id: number = 0;
  show?: number;
  created_at?: number;
  unit?: Unit
}

export class ProductVIP {
  id?: number;
  title: string = "";
  day: number = 0;
  show?: number;
  created_at?: number;
}
