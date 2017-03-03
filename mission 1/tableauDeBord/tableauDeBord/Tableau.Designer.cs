namespace TableauDeBord
{
    partial class Tableau
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
            this.lblTitreTableau = new System.Windows.Forms.Label();
            this.button1 = new System.Windows.Forms.Button();
            this.occupation2BindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.tableaudebordDataSet5 = new TableauDeBord.tableaudebordDataSet5();
            this.occupation2TableAdapter = new TableauDeBord.tableaudebordDataSet5TableAdapters.Occupation2TableAdapter();
            this.dataGridView1 = new System.Windows.Forms.DataGridView();
            this.moisDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.anneeDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.dureeMoyDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.dureeMoyBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.tableaudebordDataSet7 = new TableauDeBord.tableaudebordDataSet7();
            this.occupationBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.tableaudebordDataSet6 = new TableauDeBord.tableaudebordDataSet6();
            this.occupationTableAdapter = new TableauDeBord.tableaudebordDataSet6TableAdapters.OccupationTableAdapter();
            this.button2 = new System.Windows.Forms.Button();
            this.dureeMoyTableAdapter = new TableauDeBord.tableaudebordDataSet7TableAdapters.dureeMoyTableAdapter();
            this.btnRetour = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.occupation2BindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.tableaudebordDataSet5)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dureeMoyBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.tableaudebordDataSet7)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.occupationBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.tableaudebordDataSet6)).BeginInit();
            this.SuspendLayout();
            // 
            // lblTitreTableau
            // 
            this.lblTitreTableau.AutoSize = true;
            this.lblTitreTableau.Location = new System.Drawing.Point(29, 31);
            this.lblTitreTableau.Name = "lblTitreTableau";
            this.lblTitreTableau.Size = new System.Drawing.Size(189, 13);
            this.lblTitreTableau.TabIndex = 0;
            this.lblTitreTableau.Text = "Taux d\'occupation des lits de l\'hopital :";
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(259, 315);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(206, 30);
            this.button1.TabIndex = 3;
            this.button1.Text = "Afficher le pourcentage par mois";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // occupation2BindingSource
            // 
            this.occupation2BindingSource.DataMember = "Occupation2";
            this.occupation2BindingSource.DataSource = this.tableaudebordDataSet5;
            // 
            // tableaudebordDataSet5
            // 
            this.tableaudebordDataSet5.DataSetName = "tableaudebordDataSet5";
            this.tableaudebordDataSet5.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // occupation2TableAdapter
            // 
            this.occupation2TableAdapter.ClearBeforeFill = true;
            // 
            // dataGridView1
            // 
            this.dataGridView1.AutoGenerateColumns = false;
            this.dataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView1.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.moisDataGridViewTextBoxColumn,
            this.anneeDataGridViewTextBoxColumn,
            this.dureeMoyDataGridViewTextBoxColumn});
            this.dataGridView1.DataSource = this.dureeMoyBindingSource;
            this.dataGridView1.Location = new System.Drawing.Point(32, 74);
            this.dataGridView1.Name = "dataGridView1";
            this.dataGridView1.Size = new System.Drawing.Size(382, 224);
            this.dataGridView1.TabIndex = 4;
            this.dataGridView1.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView1_CellContentClick_2);
            // 
            // moisDataGridViewTextBoxColumn
            // 
            this.moisDataGridViewTextBoxColumn.DataPropertyName = "mois";
            this.moisDataGridViewTextBoxColumn.HeaderText = "mois";
            this.moisDataGridViewTextBoxColumn.Name = "moisDataGridViewTextBoxColumn";
            // 
            // anneeDataGridViewTextBoxColumn
            // 
            this.anneeDataGridViewTextBoxColumn.DataPropertyName = "annee";
            this.anneeDataGridViewTextBoxColumn.HeaderText = "annee";
            this.anneeDataGridViewTextBoxColumn.Name = "anneeDataGridViewTextBoxColumn";
            // 
            // dureeMoyDataGridViewTextBoxColumn
            // 
            this.dureeMoyDataGridViewTextBoxColumn.DataPropertyName = "dureeMoy";
            this.dureeMoyDataGridViewTextBoxColumn.HeaderText = "dureeMoy";
            this.dureeMoyDataGridViewTextBoxColumn.Name = "dureeMoyDataGridViewTextBoxColumn";
            // 
            // dureeMoyBindingSource
            // 
            this.dureeMoyBindingSource.DataMember = "dureeMoy";
            this.dureeMoyBindingSource.DataSource = this.tableaudebordDataSet7;
            // 
            // tableaudebordDataSet7
            // 
            this.tableaudebordDataSet7.DataSetName = "tableaudebordDataSet7";
            this.tableaudebordDataSet7.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // occupationBindingSource
            // 
            this.occupationBindingSource.DataMember = "Occupation";
            this.occupationBindingSource.DataSource = this.tableaudebordDataSet6;
            // 
            // tableaudebordDataSet6
            // 
            this.tableaudebordDataSet6.DataSetName = "tableaudebordDataSet6";
            this.tableaudebordDataSet6.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // occupationTableAdapter
            // 
            this.occupationTableAdapter.ClearBeforeFill = true;
            // 
            // button2
            // 
            this.button2.Location = new System.Drawing.Point(32, 315);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(202, 30);
            this.button2.TabIndex = 5;
            this.button2.Text = "Afficher la durée moyenne de séjour";
            this.button2.UseVisualStyleBackColor = true;
            this.button2.Click += new System.EventHandler(this.button2_Click);
            // 
            // dureeMoyTableAdapter
            // 
            this.dureeMoyTableAdapter.ClearBeforeFill = true;
            // 
            // btnRetour
            // 
            this.btnRetour.Location = new System.Drawing.Point(339, 372);
            this.btnRetour.Name = "btnRetour";
            this.btnRetour.Size = new System.Drawing.Size(75, 23);
            this.btnRetour.TabIndex = 6;
            this.btnRetour.Text = "Retour";
            this.btnRetour.UseVisualStyleBackColor = true;
            this.btnRetour.Click += new System.EventHandler(this.btnRetour_Click);
            // 
            // Tableau
            // 
            this.ClientSize = new System.Drawing.Size(493, 439);
            this.Controls.Add(this.btnRetour);
            this.Controls.Add(this.button2);
            this.Controls.Add(this.dataGridView1);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.lblTitreTableau);
            this.MinimizeBox = false;
            this.Name = "Tableau";
            this.Text = "Tableau du taux d\'occupation";
            this.Load += new System.EventHandler(this.tableau_Load);
            ((System.ComponentModel.ISupportInitialize)(this.occupation2BindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.tableaudebordDataSet5)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dureeMoyBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.tableaudebordDataSet7)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.occupationBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.tableaudebordDataSet6)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label lblTitreTableau;
        private System.Windows.Forms.Button button1;
        private tableaudebordDataSet5 tableaudebordDataSet5;
        private System.Windows.Forms.BindingSource occupation2BindingSource;
        private tableaudebordDataSet5TableAdapters.Occupation2TableAdapter occupation2TableAdapter;
        private System.Windows.Forms.DataGridView dataGridView1;
        private tableaudebordDataSet6 tableaudebordDataSet6;
        private System.Windows.Forms.BindingSource occupationBindingSource;
        private tableaudebordDataSet6TableAdapters.OccupationTableAdapter occupationTableAdapter;
        private System.Windows.Forms.Button button2;
        private tableaudebordDataSet7 tableaudebordDataSet7;
        private System.Windows.Forms.BindingSource dureeMoyBindingSource;
        private tableaudebordDataSet7TableAdapters.dureeMoyTableAdapter dureeMoyTableAdapter;
        private System.Windows.Forms.DataGridViewTextBoxColumn moisDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn anneeDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn dureeMoyDataGridViewTextBoxColumn;
        private System.Windows.Forms.Button btnRetour;
    }
}