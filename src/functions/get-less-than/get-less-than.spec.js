import { getLessThan } from "./get-less-than";

describe('getLessThan', ()=> {
  it('returns an array', () => {
    expect(
      Array.isArray(
        getLessThan('foo'),
        ),
    )
    .toBeTruthy();
  });

  it('returns expected array when supplied with rock', () => {
    expect(
      getLessThan('rock'),
    )
    .toStrictEqual(['scissors', 'lizzard']);
  });

  it('returns expected array when supplied with paper', () => {
    expect(
      getLessThan('paper'),
    )
    .toStrictEqual(['rock', 'spock']);
  });

  it('returns expected array when supplied with scissors', () => {
    expect(
      getLessThan('scissors'),
    )
    .toStrictEqual(['paper', 'lizzard']);
  });

  it('returns expected array when supplied with lizzard', () => {
    expect(
      getLessThan('rock'),
    )
    .toStrictEqual(['paper', 'spock']);
  });

  it('returns expected array when supplied with spock', () => {
    expect(
      getLessThan('spock'),
    )
    .toStrictEqual(['rock', 'scissors']);
  });
});