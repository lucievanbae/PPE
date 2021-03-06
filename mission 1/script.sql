USE [tableaudebord]
GO
/****** Object:  Table [dbo].[Connexion]    Script Date: 10/18/2016 14:15:17 ******/
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
/****** Object:  Table [dbo].[NbeLitsTotal]    Script Date: 10/18/2016 14:15:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[NbeLitsTotal](
	[totalLits] [int] NOT NULL,
 CONSTRAINT [PK_NbeLitsTotal] PRIMARY KEY CLUSTERED 
(
	[totalLits] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Occupation]    Script Date: 10/18/2016 14:15:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Occupation](
	[Mois] [int] NOT NULL,
	[Annee] [int] NOT NULL,
	[nbLitsOccup] [int] NOT NULL,
 CONSTRAINT [PK_Occupation] PRIMARY KEY CLUSTERED 
(
	[Mois] ASC,
	[Annee] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[dureeMoy]    Script Date: 10/18/2016 14:15:17 ******/
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
