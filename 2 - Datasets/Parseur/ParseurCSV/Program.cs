using System;
using System.Globalization;
using System.Text.RegularExpressions;
using GenericParsing;
using ParseurCSV.Model;

class Program
{
    static void Main()
    {
        Console.WriteLine("====================");
        Console.WriteLine("Veuillez choisir un dataset à parser :");
        Console.WriteLine("1. Annual Surface Temperature Change");
        Console.WriteLine("2. Atmospheric CO2 concentrations");
        Console.WriteLine("3. Climate related distasters frequency");
        Console.WriteLine("====================");

        int userInput = Convert.ToInt32(Console.ReadLine());

        switch (userInput)
        {
            case 1:
                string csvFilePath = @"C:\Users\drama\OneDrive\Bureau\Epitech\T-ESP-800-esp800-33787-TerraProxima-1\2 - Datasets\Annual_Surface_Temperature_Change.csv";
                string newcsvFilePath = @"C:\Users\drama\OneDrive\Bureau\Epitech\T-ESP-800-esp800-33787-TerraProxima-1\2 - Datasets\Annual_Surface_Temperature_Change_world.csv";
                WriteTemperatureCSV(csvFilePath, newcsvFilePath);
                break;
            case 2:
                csvFilePath = @"C:\Users\drama\OneDrive\Bureau\Epitech\T-ESP-800-esp800-33787-TerraProxima-1\2 - Datasets\Dataset_CO2.csv";
                newcsvFilePath = @"C:\Users\drama\OneDrive\Bureau\Epitech\T-ESP-800-esp800-33787-TerraProxima-1\2 - Datasets\Dataset_CO2_parse.csv";
                WriteCO2CSV(csvFilePath, newcsvFilePath);
                break;
            case 3:
                csvFilePath = @"C:\Users\drama\OneDrive\Bureau\Epitech\T-ESP-800-esp800-33787-TerraProxima-1\2 - Datasets\Climate-related_Disasters_Frequency.csv";
                newcsvFilePath = @"C:\Users\drama\OneDrive\Bureau\Epitech\T-ESP-800-esp800-33787-TerraProxima-1\2 - Datasets\Climate-related_Disasters_Frequency_parse.csv";
                WriteDisastersCSV(csvFilePath, newcsvFilePath);
                break;
            default:
                Console.WriteLine("Choix invalide.");
                break;
        }

        Console.WriteLine("Appuyez sur une touche pour quitter.");
        Console.ReadKey();
    }

    static void WriteTemperatureCSV(string csvFilePath, string newcsvFilePath)
    {

        using (var reader = new StreamReader(csvFilePath))
        using (var writer = new StreamWriter(newcsvFilePath))
        {
            var header = reader.ReadLine(); // Ignorer la ligne d'en-tête
            var columnNames = header.Split(',');

            while (!reader.EndOfStream)
            {
                var line = reader.ReadLine();
                var values = line.Split(',');

                var country = values[1];

                if (country.ToLower() == "world")
                {
                    var temperature = new TemperatureData();
                    temperature.Country = country;

                    for (int i = 1; i < columnNames.Length; i++)
                    {
                        var columnName = columnNames[i];
                        if (int.TryParse(columnName.Substring(1), out int year) && year >= 1995 && year <= 2020)
                        {
                            if (float.TryParse(values[i], NumberStyles.Float, CultureInfo.InvariantCulture, out float temperatureValue))
                            {
                                temperature.TemperatureByYear[year] = temperatureValue;
                            }
                        }
                    }

                    writer.WriteLine($"{temperature.Country},{string.Join(",", temperature.TemperatureByYear.Values)}");

                    break;
                }
            }
        }
    }

    static void WriteCO2CSV(string csvFilePath, string newcsvFilePath)
    {


        using (var reader = new StreamReader(csvFilePath))
        using (var writer = new StreamWriter(newcsvFilePath))
        {
            var header = reader.ReadLine(); // Ignorer la ligne d'en-tête
            var columnNames = header.Split(';');

            Dictionary<int, List<float>> CO2PerYear = new Dictionary<int, List<float>>();

            while (!reader.EndOfStream)
            {
                var line = reader.ReadLine();
                var values = line.Split(';');

                CO2Data co2Datas = new CO2Data
                {
                    ObjectID = int.Parse(values[0]),
                    Year = int.Parse(values[1]),
                    Month = values[2],
                    Value = float.Parse(values[3], CultureInfo.InvariantCulture)
                };

                if(co2Datas.Year >= 1995 && co2Datas.Year <= 2020)
                {
                    if (!CO2PerYear.ContainsKey(co2Datas.Year))
                    {
                        CO2PerYear[co2Datas.Year] = new List<float>();
                    }
                    CO2PerYear[co2Datas.Year].Add(co2Datas.Value);
                }
            }

            foreach (var kvp in CO2PerYear)
            {
                int year = kvp.Key;
                var CO2 = kvp.Value;

                float CO2Average = CalcAverageCO2(CO2);

                Console.WriteLine($"Année : {year}, Moyenne des mois : {CO2Average}");

                writer.WriteLine($"{year},{string.Join(",", CO2Average.ToString().Replace(",","."))}");

            }
        }

    }

    static void WriteDisastersCSV(string csvFilePath, string newcsvFilePath)
    {
        using (var writer = new StreamWriter(newcsvFilePath))
        using (GenericParser parser = new GenericParser(csvFilePath))
        {

            parser.FirstRowHasHeader = true;
            parser.TextQualifier = '"';
            parser.ColumnDelimiter = ',';
            parser.SkipEmptyRows = true;
            parser.TrimResults = true;

            writer.WriteLine("Country,Indicator,F1995,F1996,F1997,F1998,F1999,F2000,F2001,F2002,F2003,F2004,F2005,F2006,F2007,F2008,F2009,F2010,F2011,F2012,F2013,F2014,F2015,F2016,F2017,F2018,F2019,F2020");

            string regex = @":\s(.*)";

            while (parser.Read())
            {
                string country = parser["Country"];
                string indicator = parser["Indicator"];
                string F1995 = parser["F1995"];
                string F1996 = parser["F1996"];
                string F1997 = parser["F1997"];
                string F1998 = parser["F1998"];
                string F1999 = parser["F1999"];
                string F2000 = parser["F2000"];
                string F2001 = parser["F2001"];
                string F2002 = parser["F2002"];
                string F2003 = parser["F2003"];
                string F2004 = parser["F2004"];
                string F2005 = parser["F2005"];
                string F2006 = parser["F2006"];
                string F2007 = parser["F2007"];
                string F2008 = parser["F2008"];
                string F2009 = parser["F2009"];
                string F2010 = parser["F2010"];
                string F2011 = parser["F2011"];
                string F2012 = parser["F2012"];
                string F2013 = parser["F2013"];
                string F2014 = parser["F2014"];
                string F2015 = parser["F2015"];
                string F2016 = parser["F2016"];
                string F2017 = parser["F2017"];
                string F2018 = parser["F2018"];
                string F2019 = parser["F2019"];
                string F2020 = parser["F2020"];


                if(country.ToLower() == "france")
                {

                    MatchCollection indicatorMatch = Regex.Matches(indicator, regex);

                    writer.WriteLine($"{country},{indicatorMatch[0].Groups[1].Value},{F1995},{F1996},{F1997},{F1998},{F1999},{F2000},{F2001},{F2002},{F2003},{F2004},{F2005},{F2006},{F2007},{F2008},{F2009},{F2010},{F2011},{F2012},{F2013},{F2014},{F2015},{F2016},{F2017},{F2018},{F2019},{F2020}");
                }

            }
        }
    }


    static float CalcAverageCO2(List<float> CO2List)
    {
        if (CO2List.Count == 0)
            return 0;

        float sum = 0;

        foreach (var value in CO2List)
        {
            sum += value;
        }

        return sum / CO2List.Count;
    }
}