const randNum = (min, max) => {
  return Math.floor(Math.random() * (max - min + 1)) + min;
};

function cek(tbl, mini, maxi, reqRslt) {
  const value = [];
  const table = tbl;
  const minimumValue = mini;
  const maximumValue = maxi;
  const reqResult = reqRslt;

  let summedValue = 0;
  let finalResult = 0;
  let run = true;
  let attempt = 0;

  while (run) {
    for (let i = 0; i < table; i++) {
      value.push(randNum(minimumValue, maximumValue));
      summedValue += value[i];
    }

    finalResult = summedValue / value.length;

    if (finalResult === reqResult) {
      run = false;
      attempt++;
    } else {
      run = true;
      value.length = 0;
      summedValue = 0;
      attempt++;
    }
  }

  return (
    `${value} : ${summedValue} / ${value.length} => ${finalResult} with attempt of ${attempt}`
  );
}

console.log(cek(10,79,93,84));
