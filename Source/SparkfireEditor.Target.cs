// Copyright 2016 FinalSpark Gamestudios

using UnrealBuildTool;
using System.Collections.Generic;

public class SparkfireEditorTarget : TargetRules
{
	public SparkfireEditorTarget(TargetInfo Target) : base(Target)
	{
		Type = TargetType.Editor;
		ExtraModuleNames.AddRange( new string[] { "Sparkfire" } );
	}
}
