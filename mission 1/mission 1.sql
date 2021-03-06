USE [tableaudebord]
GO
/****** Object:  Table [dbo].[Connexion]    Script Date: 03/21/2017 13:48:30 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Connexion](
	[Login] [nvarchar](50) NOT NULL,
	[MotDePasse] [nvarchar](50) NOT NULL,
	[libelle] [nchar](10) NOT NULL,
 CONSTRAINT [PK_Connexion2] PRIMARY KEY CLUSTERED 
(
	[Login] ASC,
	[MotDePasse] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[dureeMoy]    Script Date: 03/21/2017 13:48:30 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[dureeMoy](
	[mois] [int] NOT NULL,
	[annee] [int] NOT NULL,
	[dureeMoy] [int] NOT NULL,
 CONSTRAINT [PK_dureeMoy] PRIMARY KEY CLUSTERED 
(
	[mois] ASC,
	[annee] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[CoutTotal]    Script Date: 03/21/2017 13:48:30 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CoutTotal](
	[Mois] [int] NOT NULL,
	[Annee] [int] NOT NULL,
	[prixTotal] [int] NOT NULL,
 CONSTRAINT [PK_CoutTotal] PRIMARY KEY CLUSTERED 
(
	[Mois] ASC,
	[Annee] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Service]    Script Date: 03/21/2017 13:48:30 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Service](
	[id] [int] NOT NULL,
	[libelle] [varchar](255) NULL,
 CONSTRAINT [PK_Service] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[NbeLitsTotal]    Script Date: 03/21/2017 13:48:30 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[NbeLitsTotal](
	[totalLits] [int] NOT NULL,
	[idService] [int] NULL,
 CONSTRAINT [PK_NbeLitsTotal] PRIMARY KEY CLUSTERED 
(
	[totalLits] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Occupation]    Script Date: 03/21/2017 13:48:30 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Occupation](
	[Mois] [int] NOT NULL,
	[Annee] [int] NOT NULL,
	[nbLitsOccup] [int] NOT NULL,
	[idService] [int] NULL,
 CONSTRAINT [PK_Occupation2] PRIMARY KEY CLUSTERED 
(
	[Mois] ASC,
	[Annee] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  ForeignKey [FK_NbeLitsTotal_Service]    Script Date: 03/21/2017 13:48:30 ******/
ALTER TABLE [dbo].[NbeLitsTotal]  WITH CHECK ADD  CONSTRAINT [FK_NbeLitsTotal_Service] FOREIGN KEY([idService])
REFERENCES [dbo].[Service] ([id])
GO
ALTER TABLE [dbo].[NbeLitsTotal] CHECK CONSTRAINT [FK_NbeLitsTotal_Service]
GO
/****** Object:  ForeignKey [FK_Occupation_Service]    Script Date: 03/21/2017 13:48:30 ******/
ALTER TABLE [dbo].[Occupation]  WITH CHECK ADD  CONSTRAINT [FK_Occupation_Service] FOREIGN KEY([idService])
REFERENCES [dbo].[Service] ([id])
GO
ALTER TABLE [dbo].[Occupation] CHECK CONSTRAINT [FK_Occupation_Service]
GO
