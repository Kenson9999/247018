import { TestBed } from '@angular/core/testing';

import { RestfulserviceService } from './restfulservice.service';

describe('RestfulserviceService', () => {
  let service: RestfulserviceService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(RestfulserviceService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
