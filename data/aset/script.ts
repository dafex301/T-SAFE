import fs from "fs";
import data from "./aset.json";

function convertDate(inputFormat) {
    const [month, day, year] = inputFormat.split("/");
    return [year, month.padStart(2, "0"), day.padStart(2, "0")].join("-");
}

function convertToPhpArray(jsonData) {
    return jsonData
        .map((item) => {
            let phpArray = "[\n";
            for (let key in item) {
                if (key === "tanggal") {
                    const formattedDate = convertDate(item[key]);
                    phpArray += `    "${key}" => "${formattedDate}",\n`;
                } else {
                    phpArray += `    "${key}" => "${item[key]}",\n`;
                }
            }
            phpArray += "],\n";
            return phpArray;
        })
        .join("");
}

const phpArray = convertToPhpArray(data);
fs.writeFileSync("output.txt", `[\n${phpArray}];`);
