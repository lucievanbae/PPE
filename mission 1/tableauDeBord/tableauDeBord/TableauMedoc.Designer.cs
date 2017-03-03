namespace TableauDeBord
{
    partial class TableauMedoc
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
            this.dataGridView = new System.Windows.Forms.DataGridView();
            this.tableaudebordDataSet8 = new TableauDeBord.tableaudebordDataSet8();
            this.coutTotalBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.coutTotalTableAdapter = new TableauDeBord.tableaudebordDataSet8TableAdapters.CoutTotalTableAdapter();
            this.tableaudebordDataSet9 = new TableauDeBord.tableaudebordDataSet9();
            this.coutTotalBindingSource1 = new System.Windows.Forms.BindingSource(this.components);
            this.coutTotalTableAdapter1 = new TableauDeBord.tableaudebordDataSet9TableAdapters.CoutTotalTableAdapter();
            this.moisDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.anneeDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.prixTotalDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.label1 = new System.Windows.Forms.Label();
            this.btnCoutTotal = new System.Windows.Forms.Button();
            this.btnRetour = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.tableaudebordDataSet8)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.coutTotalBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.tableaudebordDataSet9)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.coutTotalBindingSource1)).BeginInit();
            this.SuspendLayout();
            // 
            // dataGridView
            // 
            this.dataGridView.AutoGenerateColumns = false;
            this.dataGridView.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.moisDataGridViewTextBoxColumn,
            this.anneeDataGridViewTextBoxColumn,
            this.prixTotalDataGridViewTextBoxColumn});
            this.dataGridView.DataSource = this.coutTotalBindingSource;
            this.dataGridView.Location = new System.Drawing.Point(54, 87);
            this.dataGridView.Name = "dataGridView";
            this.dataGridView.Size = new System.Drawing.Size(415, 282);
            this.dataGridView.TabIndex = 0;
            // 
            // tableaudebordDataSet8
            // 
            this.tableaudebordDataSet8.DataSetName = "tableaudebordDataSet8";
            this.tableaudebordDataSet8.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // coutTotalBindingSource
            // 
            this.coutTotalBindingSource.DataMember = "CoutTotal";
            this.coutTotalBindingSource.DataSource = this.tableaudebordDataSet8;
            // 
            // coutTotalTableAdapter
            // 
            this.coutTotalTableAdapter.ClearBeforeFill = true;
            // 
            // tableaudebordDataSet9
            // 
            this.tableaudebordDataSet9.DataSetName = "tableaudebordDataSet9";
            this.tableaudebordDataSet9.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // coutTotalBindingSource1
            // 
            this.coutTotalBindingSource1.DataMember = "CoutTotal";
            this.coutTotalBindingSource1.DataSource = this.tableaudebordDataSet9;
            // 
            // coutTotalTableAdapter1
            // 
            this.coutTotalTableAdapter1.ClearBeforeFill = true;
            // 
            // moisDataGridViewTextBoxColumn
            // 
            this.moisDataGridViewTextBoxColumn.DataPropertyName = "Mois";
            this.moisDataGridViewTextBoxColumn.HeaderText = "Mois";
            this.moisDataGridViewTextBoxColumn.Name = "moisDataGridViewTextBoxColumn";
            // 
            // anneeDataGridViewTextBoxColumn
            // 
            this.anneeDataGridViewTextBoxColumn.DataPropertyName = "Annee";
            this.anneeDataGridViewTextBoxColumn.HeaderText = "Annee";
            this.anneeDataGridViewTextBoxColumn.Name = "anneeDataGridViewTextBoxColumn";
            // 
            // prixTotalDataGridViewTextBoxColumn
            // 
            this.prixTotalDataGridViewTextBoxColumn.DataPropertyName = "prixTotal";
            this.prixTotalDataGridViewTextBoxColumn.HeaderText = "prixTotal";
            this.prixTotalDataGridViewTextBoxColumn.Name = "prixTotalDataGridViewTextBoxColumn";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(51, 39);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(182, 13);
            this.label1.TabIndex = 1;
            this.label1.Text = "Coût total des médicaments par mois:";
            // 
            // btnCoutTotal
            // 
            this.btnCoutTotal.Location = new System.Drawing.Point(54, 402);
            this.btnCoutTotal.Name = "btnCoutTotal";
            this.btnCoutTotal.Size = new System.Drawing.Size(225, 23);
            this.btnCoutTotal.TabIndex = 2;
            this.btnCoutTotal.Text = "Coût total des médicaments en graphique";
            this.btnCoutTotal.UseVisualStyleBackColor = true;
            this.btnCoutTotal.Click += new System.EventHandler(this.btnCoutTotal_Click);
            // 
            // btnRetour
            // 
            this.btnRetour.Location = new System.Drawing.Point(380, 402);
            this.btnRetour.Name = "btnRetour";
            this.btnRetour.Size = new System.Drawing.Size(75, 23);
            this.btnRetour.TabIndex = 3;
            this.btnRetour.Text = "Retour";
            this.btnRetour.UseVisualStyleBackColor = true;
            this.btnRetour.Click += new System.EventHandler(this.btnRetour_Click);
            // 
            // TableauMedoc
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(568, 462);
            this.Controls.Add(this.btnRetour);
            this.Controls.Add(this.btnCoutTotal);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.dataGridView);
            this.Name = "TableauMedoc";
            this.Text = "TableauMedoc";
            this.Load += new System.EventHandler(this.TableauMedoc_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.tableaudebordDataSet8)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.coutTotalBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.tableaudebordDataSet9)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.coutTotalBindingSource1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.DataGridView dataGridView;
        private tableaudebordDataSet8 tableaudebordDataSet8;
        private System.Windows.Forms.BindingSource coutTotalBindingSource;
        private tableaudebordDataSet8TableAdapters.CoutTotalTableAdapter coutTotalTableAdapter;
        private tableaudebordDataSet9 tableaudebordDataSet9;
        private System.Windows.Forms.BindingSource coutTotalBindingSource1;
        private tableaudebordDataSet9TableAdapters.CoutTotalTableAdapter coutTotalTableAdapter1;
        private System.Windows.Forms.DataGridViewTextBoxColumn moisDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn anneeDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn prixTotalDataGridViewTextBoxColumn;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button btnCoutTotal;
        private System.Windows.Forms.Button btnRetour;
    }
}