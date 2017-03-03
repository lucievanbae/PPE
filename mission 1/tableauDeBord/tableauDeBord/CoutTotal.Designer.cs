namespace TableauDeBord
{
    partial class CoutTotal
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.Windows.Forms.DataVisualization.Charting.ChartArea chartArea2 = new System.Windows.Forms.DataVisualization.Charting.ChartArea();
            System.Windows.Forms.DataVisualization.Charting.Series series2 = new System.Windows.Forms.DataVisualization.Charting.Series();
            System.Windows.Forms.DataVisualization.Charting.Title title2 = new System.Windows.Forms.DataVisualization.Charting.Title();
            this.chartMedoc = new System.Windows.Forms.DataVisualization.Charting.Chart();
            this.tableaudebordDataSet10 = new TableauDeBord.tableaudebordDataSet10();
            this.coutTotalBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.coutTotalTableAdapter = new TableauDeBord.tableaudebordDataSet10TableAdapters.CoutTotalTableAdapter();
            this.btnAnneePrecedente = new System.Windows.Forms.Button();
            this.btnAnneeSuivante = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.chartMedoc)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.tableaudebordDataSet10)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.coutTotalBindingSource)).BeginInit();
            this.SuspendLayout();
            // 
            // chartMedoc
            // 
            this.chartMedoc.AllowDrop = true;
            chartArea2.Name = "ChartArea1";
            this.chartMedoc.ChartAreas.Add(chartArea2);
            this.chartMedoc.DataSource = this.coutTotalBindingSource;
            this.chartMedoc.Location = new System.Drawing.Point(12, 12);
            this.chartMedoc.Name = "chartMedoc";
            series2.ChartArea = "ChartArea1";
            series2.Name = "Mois";
            this.chartMedoc.Series.Add(series2);
            this.chartMedoc.Size = new System.Drawing.Size(632, 459);
            this.chartMedoc.TabIndex = 4;
            this.chartMedoc.Text = "chart1";
            title2.Name = "Pourcentage";
            this.chartMedoc.Titles.Add(title2);
            // 
            // tableaudebordDataSet10
            // 
            this.tableaudebordDataSet10.DataSetName = "tableaudebordDataSet10";
            this.tableaudebordDataSet10.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // coutTotalBindingSource
            // 
            this.coutTotalBindingSource.DataMember = "CoutTotal";
            this.coutTotalBindingSource.DataSource = this.tableaudebordDataSet10;
            // 
            // coutTotalTableAdapter
            // 
            this.coutTotalTableAdapter.ClearBeforeFill = true;
            // 
            // btnAnneePrecedente
            // 
            this.btnAnneePrecedente.Location = new System.Drawing.Point(56, 496);
            this.btnAnneePrecedente.Name = "btnAnneePrecedente";
            this.btnAnneePrecedente.Size = new System.Drawing.Size(114, 23);
            this.btnAnneePrecedente.TabIndex = 5;
            this.btnAnneePrecedente.Text = "Année précédente";
            this.btnAnneePrecedente.UseVisualStyleBackColor = true;
            this.btnAnneePrecedente.Click += new System.EventHandler(this.btnAnneePrecedente_Click);
            // 
            // btnAnneeSuivante
            // 
            this.btnAnneeSuivante.Location = new System.Drawing.Point(500, 496);
            this.btnAnneeSuivante.Name = "btnAnneeSuivante";
            this.btnAnneeSuivante.Size = new System.Drawing.Size(100, 23);
            this.btnAnneeSuivante.TabIndex = 6;
            this.btnAnneeSuivante.Text = "Année suivante";
            this.btnAnneeSuivante.UseVisualStyleBackColor = true;
            this.btnAnneeSuivante.Click += new System.EventHandler(this.btnAnneeSuivante_Click);
            // 
            // CoutTotal
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(656, 601);
            this.Controls.Add(this.btnAnneeSuivante);
            this.Controls.Add(this.btnAnneePrecedente);
            this.Controls.Add(this.chartMedoc);
            this.Name = "CoutTotal";
            this.Text = "CoutTotal";
            this.Load += new System.EventHandler(this.CoutTotal_Load);
            ((System.ComponentModel.ISupportInitialize)(this.chartMedoc)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.tableaudebordDataSet10)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.coutTotalBindingSource)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.DataVisualization.Charting.Chart chartMedoc;
        private tableaudebordDataSet10 tableaudebordDataSet10;
        private System.Windows.Forms.BindingSource coutTotalBindingSource;
        private tableaudebordDataSet10TableAdapters.CoutTotalTableAdapter coutTotalTableAdapter;
        private System.Windows.Forms.Button btnAnneePrecedente;
        private System.Windows.Forms.Button btnAnneeSuivante;
    }
}