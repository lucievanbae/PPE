using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Collections;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.SqlClient;
using System.Windows.Forms.DataVisualization.Charting;

namespace TableauDeBord
{
    public partial class Pourcentages : Form
    {
        private int annee;
        public Pourcentages()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            annee--;
            string[] seriesArray = { "Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre" };
            int[] pointsArray = new int[12];
            pointsArray = Passerelle.nbLitAnnee(annee);
            // Set palette
            this.chart1.Palette = ChartColorPalette.EarthTones;

            // Set title
            this.chart1.Titles.Clear();
            this.chart1.Titles.Add("Pourcentage Année" + annee);
            this.chart1.Series.Clear();
            // Add series.
            for (int i = 0; i < pointsArray.Length; i++)
            {
                Series series = this.chart1.Series.Add(seriesArray[i]);
                series.Points.Add(pointsArray[i]);
            }
        }               
        
        private void Form3_Load(object sender, EventArgs e)
        {
            annee = 2016;
            // Data arrays
            string[] seriesArray = { "Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet","Août","Septembre","Octobre", "Novembre","Décembre" };
            int[] pointsArray = new int[12];

            //// Requete
            //string chaineConnexion = "Data Source=win-921c8fktgae;Initial Catalog=tableaudebord;User ID=vanbaelinghem;Password=vanbaelinghem";
            //SqlConnection laConnexion;        
            //laConnexion = new SqlConnection(chaineConnexion);
            //laConnexion.Open();
            //SqlCommand maCommande;
            //string requeteIdentifiant = "SELECT Mois, NbLitsOccup FROM Occupation WHERE Annee="+annee; // recupere les informations
            //maCommande = new SqlCommand(requeteIdentifiant, laConnexion);
            //SqlDataReader Resultat = maCommande.ExecuteReader();
            //while (Resultat.Read()) //Parcours le resultat
            //{
            //    int Mois = (int)Resultat["Mois"];
            //    int nbLitsOccup = (int)Resultat["NbLitsOccup"];
            //    pointsArray[Mois - 1] = nbLitsOccup;
            //   // MessageBox.Show("moi " + Mois+" nbLits "+nbLitsOccup);
            //}

            pointsArray = Passerelle.nbLitAnnee(annee);
            // Set palette
            this.chart1.Palette = ChartColorPalette.EarthTones;

            // Set title
            this.chart1.Titles.Add("Pourcentage Année"+annee);
            
            // Add series.
            for (int i = 0; i < seriesArray.Length; i++)
            {
                Series series = this.chart1.Series.Add(seriesArray[i]);
                series.Points.Add(pointsArray[i]);
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            annee++;
            string[] seriesArray = { "Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre" };
            int[] pointsArray = new int[12];
            pointsArray = Passerelle.nbLitAnnee(annee);
            // Set palette
            this.chart1.Palette = ChartColorPalette.EarthTones;

            // Set title
            this.chart1.Titles.Clear();
            this.chart1.Titles.Add("Pourcentage Année"+annee);
            this.chart1.Series.Clear();
            // Add series.
            for (int i = 0; i < pointsArray.Length; i++)
            {
                Series series = this.chart1.Series.Add(seriesArray[i]);
                series.Points.Add(pointsArray[i]);
            }
        }

       
    }
}
