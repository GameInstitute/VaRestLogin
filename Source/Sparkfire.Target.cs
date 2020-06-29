// Copyright 2016 FinalSpark Gamestudios

using UnrealBuildTool;
using System.Collections.Generic;

public class SparkfireTarget : TargetRules
{
	public SparkfireTarget(TargetInfo Target) : base(Target)
	{
		Type = TargetType.Game;
		ExtraModuleNames.AddRange( new string[] { "Sparkfire" } );
	}
}
