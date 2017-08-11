// Copyright 2016 FinalSpark Gamestudios

using UnrealBuildTool;
using System.Collections.Generic;

public class SparkfireTarget : TargetRules
{
	public SparkfireTarget(TargetInfo Target)
	{
		Type = TargetType.Game;
	}

	//
	// TargetRules interface.
	//

	public override void SetupBinaries(
		TargetInfo Target,
		ref List<UEBuildBinaryConfiguration> OutBuildBinaryConfigurations,
		ref List<string> OutExtraModuleNames
		)
	{
		OutExtraModuleNames.AddRange( new string[] { "Sparkfire" } );
	}
}
