<?php

/*
#############################################################################
#  Filename: tech.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Strategy Game
#
#  Copyright © 2009-2018 Gorlum for Project "SuperNova.WS"
#  Copyright © 2008 Aleksandar Spasojevic <spalekg@gmail.com>
#  Copyright © 2005 - 2008 KGsystem
#############################################################################
*/

/**
*
* @package language
* @system [English]
* @version 43a16.33
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();

$a_lang_array = (array(
  'tech_storage_max' => 'Max. storage capacity',
  'tech_storage' => 'In storage',
  'tech_storage_energy' => 'Consumption',
  'tech_storage_energy_max' => 'Production',
  'tech_storage_energy_fullness' => 'Load',
  'Tech' => 'Technology',
  'Requirements' => 'Requirements',
  'Metal' => 'Metal',
  'Crystal' => 'Crystal',
  'Deuterium' => 'Deuterium',
  'Energy' => 'Energy',
  'dark_matter' => 'Dark matter',
  'ds' => 'Messages',
  'Message' => 'Messages',
  'level' => 'Level',
  'treeinfo' => '[i]',
  'comingsoon' => 'Coming Soon',
  'te_dt_tx_pre' => 'Weak production',
  'tech_fullness' => 'Fullness',

  'type_mission' => array(
    MT_ATTACK => 'Attack',
    MT_AKS => 'Joint Attack',
    MT_TRANSPORT => 'Transport',
    MT_RELOCATE => 'Deployment',
    MT_HOLD => 'Retention',
    MT_SPY => 'Espionage',
    MT_COLONIZE => 'Colonization',
    MT_RECYCLE => 'Rework',
    MT_DESTROY => 'Destruction',
    MT_MISSILE => 'Missile attack',
    MT_EXPLORE => 'Expedition',
  ),
  'fleet_events' => array(
    EVENT_FLEET_NONE   => 'No event',
    EVENT_FLEET_ARRIVE => 'Arriving',
    EVENT_FLEET_STAY   => 'Hold/Expedition',
    EVENT_FLEET_RETURN => 'Return',
  ),

  'tech' => array(
    UNIT_STRUCTURES => 'Buildings',
    STRUC_MINE_METAL => 'Metal mine',
    STRUC_MINE_CRYSTAL => 'Crystal Mine',
    STRUC_MINE_DEUTERIUM => 'Deuterium Synthesizer',
    STRUC_MINE_SOLAR => 'Solar Plant',
    STRUC_MINE_FUSION => 'Fusion Reactor',
    STRUC_FACTORY_ROBOT => 'Robotics Factory',
    STRUC_FACTORY_NANO => 'Nanite Factory',
    STRUC_FACTORY_HANGAR => 'Shipyard',
    STRUC_STORE_METAL => 'Metal Storage',
    STRUC_STORE_CRYSTAL => 'Crystal Storage',
    STRUC_STORE_DEUTERIUM => 'Deuterium Tank',
    STRUC_LABORATORY => 'Research Lab',
    STRUC_TERRAFORMER => 'Terraformer',
    STRUC_ALLY_DEPOSIT => 'Alliance Depot',
    STRUC_LABORATORY_NANO => 'Special Building',

    UNIT_STRUCTURES_SPECIAL => 'Moon Buildings',
    STRUC_MOON_STATION => 'Moon Base',
    STRUC_MOON_PHALANX => 'Sensor Phalanx',
    STRUC_MOON_GATE => 'Stargate',
    STRUC_SILO => 'Missile Silo',

    UNIT_TECHNOLOGIES => 'Technologies',
    TECH_ENERGY => 'Energy Technology',
    TECH_COMPUTER => 'Computer Technology',
    TECH_SPY => 'Espionage Technology',
    TECH_ARMOR => 'Armor Technology',
    TECH_WEAPON => 'Weapons Technology',
    TECH_SHIELD => 'Shielding Technology',
    TECH_ENGINE_CHEMICAL => 'Rocket Engine',
    TECH_ENGINE_ION => 'Impulse Engine',
    TECH_ENGINE_HYPER => 'Hyperspace Drive',
    TECH_LASER => 'Laser Technology',
    TECH_ION => 'Ion Technology',
    TECH_PLASMA => 'Plasma Technology',
    TECH_HYPERSPACE => 'Hyperspace Technology',
    TECH_EXPEDITION => 'Expedition Technology',
    TECH_COLONIZATION => 'Colonization Technology',
    TECH_ASTROTECH => 'Astrophysics Technology',
    TECH_GRAVITON => 'Graviton Technology',
    TECH_RESEARCH => 'Intergalactic Research Network',

    UNIT_SHIPS               => 'Ships',
    SHIP_SATTELITE_SOLAR     => 'Solar Satellite',
    SHIP_SPY                 => 'Spy Probe',
    SHIP_CARGO_SMALL         => 'Small Cargo',
    SHIP_CARGO_BIG           => 'Large Cargo',
    SHIP_CARGO_SUPER         => 'Super Cargo',
    SHIP_CARGO_HYPER         => 'Hypercargo',
    SHIP_RECYCLER            => 'Recycler',
    SHIP_COLONIZER           => 'Colony Ship',
    SHIP_SMALL_FIGHTER_LIGHT => 'Light Fighter',
    SHIP_SMALL_FIGHTER_HEAVY => 'Heavy Fighter',
    SHIP_MEDIUM_DESTROYER    => 'Destroyer',
    SHIP_LARGE_CRUISER       => 'Cruiser',
    SHIP_LARGE_BOMBER        => 'Bomber',
    SHIP_LARGE_BATTLESHIP    => 'Battleship',
    SHIP_LARGE_DESTRUCTOR    => 'Destructor',
    SHIP_HUGE_DEATH_STAR     => 'Deathstar',
    SHIP_HUGE_SUPERNOVA      => '&quot;Supernova&quot; Class Cruiser',

    UNIT_DEFENCE                 => 'Defence',
    UNIT_DEF_TURRET_MISSILE      => 'RoLa',
    UNIT_DEF_TURRET_LASER_SMALL  => 'LaserL',
    UNIT_DEF_TURRET_LASER_BIG    => 'LaserH',
    UNIT_DEF_TURRET_GAUSS        => 'GausCa',
    UNIT_DEF_TURRET_ION          => 'IonCa',
    UNIT_DEF_TURRET_PLASMA       => 'Plasma',
    UNIT_DEF_SHIELD_SMALL        => 'SmShD',
    UNIT_DEF_SHIELD_BIG          => 'LaShD',
    UNIT_DEF_SHIELD_PLANET       => 'PlaPro',
    UNIT_DEF_MISSILE_INTERCEPTOR => 'IntMis',
    UNIT_DEF_MISSILE_INTERPLANET => 'PlanMis',

    UNIT_MERCENARIES => 'Mercenaries',
    MRC_STOCKMAN => 'Cargo Master',
    MRC_SPY => 'Spy',
    MRC_ACADEMIC => 'Academician',
//    MRC_DESTRUCTOR => 'Destroyer',
    MRC_ADMIRAL => 'Admiral',
    MRC_COORDINATOR => 'Coordinator',
    MRC_NAVIGATOR => 'Navigator',
//    MRC_ASSASIN => 'Assassin',

    UNIT_GOVERNORS => 'Governors',
    MRC_TECHNOLOGIST => 'Technologist',
    MRC_ENGINEER => 'Engineer',
    MRC_FORTIFIER => 'Fortifier',

    UNIT_RESOURCES => 'Resources',
    RES_METAL => 'Metal',
    RES_CRYSTAL => 'Crystal',
    RES_DEUTERIUM => 'Deuterium',
    RES_ENERGY => 'Energy',
    RES_DARK_MATTER => 'Dark Matter',

    UNIT_ARTIFACTS => 'Artifacts',
    ART_LHC => 'Large Hadron Collider',
    ART_HOOK_SMALL => 'Small Hook',
    ART_HOOK_MEDIUM => 'Medium Hook',
    ART_HOOK_LARGE => 'Large Hook',
    ART_RCD_SMALL => 'Small RCD',
    ART_RCD_MEDIUM => 'Medium RCD',
    ART_RCD_LARGE => 'Large RCD',
    ART_HEURISTIC_CHIP => 'Heuristic chip',
    ART_NANO_BUILDER   => 'Nanobuilder',

    UNIT_PLANS => 'Schematics',
    UNIT_PLAN_STRUC_MINE_FUSION => 'Schematic &quot;Thermonuclear plant&quot;',
    UNIT_PLAN_SHIP_CARGO_SUPER => 'Schematic &quot;Supertransport&quot;',
    UNIT_PLAN_SHIP_CARGO_HYPER => 'Schematic &quot;Hyperstransport&quot;',
    UNIT_PLAN_SHIP_DEATH_STAR => 'Schematic &quot;Death Star&quot;',
    UNIT_PLAN_SHIP_SUPERNOVA => 'Schematic &quot;Supernova class cruiser&quot;',
    UNIT_PLAN_DEF_SHIELD_PLANET => 'Schematic &quot;Planet defense&quot;',

    UNIT_PREMIUM => 'Premium',
    UNIT_CAPTAIN => 'Captain',

    UNIT_PLANET_DENSITY => 'Density',
  ),

  'tech_short' => array(
//    UNIT_STRUCTURES => 'Buildings',
//    STRUC_MINE_METAL => 'Metal mine',
//    STRUC_MINE_CRYSTAL => 'Crystal Mine',
//    STRUC_MINE_DEUTERIUM => 'Deuterium Synthesizer',
//    STRUC_MINE_SOLAR => 'Solar Plant',
//    STRUC_MINE_FUSION => 'Fusion Reactor',
//    STRUC_FACTORY_ROBOT => 'Robotics Factory',
//    STRUC_FACTORY_NANO => 'Nanite Factory',
//    STRUC_FACTORY_HANGAR => 'Shipyard',
//    STRUC_STORE_METAL => 'Metal Storage',
//    STRUC_STORE_CRYSTAL => 'Crystal Storage',
//    STRUC_STORE_DEUTERIUM => 'Deuterium Tank',
//    STRUC_LABORATORY => 'Research Lab',
//    STRUC_TERRAFORMER => 'Terraformer',
//    STRUC_ALLY_DEPOSIT => 'Alliance Depot',
//    STRUC_LABORATORY_NANO => 'Special Building',
//
//    UNIT_STRUCTURES_SPECIAL => 'Moon Buildings',
//    STRUC_MOON_STATION => 'Moon Base',
//    STRUC_MOON_PHALANX => 'Sensor Phalanx',
//    STRUC_MOON_GATE => 'Stargate',
//    STRUC_SILO => 'Missile Silo',
//
//    UNIT_TECHNOLOGIES => 'Technologies',
//    TECH_ENERGY => 'Energy Technology',
//    TECH_COMPUTER => 'Computer Technology',
//    TECH_SPY => 'Espionage Technology',
//    TECH_ARMOR => 'Armor Technology',
//    TECH_WEAPON => 'Weapons Technology',
//    TECH_SHIELD => 'Shielding Technology',
//    TECH_ENGINE_CHEMICAL => 'Rocket Engine',
//    TECH_ENGINE_ION => 'Impulse Engine',
//    TECH_ENGINE_HYPER => 'Hyperspace Drive',
//    TECH_LASER => 'Laser Technology',
//    TECH_ION => 'Ion Technology',
//    TECH_PLASMA => 'Plasma Technology',
//    TECH_HYPERSPACE => 'Hyperspace Technology',
//    TECH_EXPEDITION => 'Expedition Technology',
//    TECH_COLONIZATION => 'Colonization Technology',
//    TECH_ASTROTECH => 'Astrophysics Technology',
//    TECH_GRAVITON => 'Graviton Technology',
//    TECH_RESEARCH => 'Intergalactic Research Network',

    UNIT_SHIPS               => 'Ships',
    SHIP_SATTELITE_SOLAR     => 'SolSat',
    SHIP_SPY                 => 'SpyProb',
    SHIP_CARGO_SMALL         => 'SmCargo',
    SHIP_CARGO_BIG           => 'LgCargo',
    SHIP_CARGO_SUPER         => 'SuCargo',
    SHIP_CARGO_HYPER         => 'HyCargo',
    SHIP_RECYCLER            => 'Recycl',
    SHIP_COLONIZER           => 'Colony',
    SHIP_SMALL_FIGHTER_LIGHT => 'LtFight',
    SHIP_SMALL_FIGHTER_HEAVY => 'HvFight',
    SHIP_MEDIUM_DESTROYER    => 'Destr',
    SHIP_LARGE_CRUISER       => 'Cruiser',
    SHIP_LARGE_BOMBER        => 'Bomber',
    SHIP_LARGE_BATTLESHIP    => 'BtlShip',
    SHIP_LARGE_DESTRUCTOR    => 'Destr',
    SHIP_HUGE_DEATH_STAR     => 'DthStar',
    SHIP_HUGE_SUPERNOVA      => 'SN',

//    UNIT_DEFENCE => 'Defences',
//    UNIT_DEF_TURRET_MISSILE => 'Rocket Launcher',
//    UNIT_DEF_TURRET_LASER_SMALL => 'Light Laser',
//    UNIT_DEF_TURRET_LASER_BIG => 'Heavy Laser',
//    UNIT_DEF_TURRET_GAUSS => 'Gauss Cannon',
//    UNIT_DEF_TURRET_ION => 'Ion Cannon',
//    UNIT_DEF_TURRET_PLASMA => 'Plasma Turrent',
//    UNIT_DEF_SHIELD_SMALL => 'Small Shield Dome',
//    UNIT_DEF_SHIELD_BIG => 'Large Shield Dome',
//    UNIT_DEF_SHIELD_PLANET => 'Planetary Protection',
//    UNIT_DEF_MISSILE_INTERCEPTOR => 'Interceptor Missiles',
//    UNIT_DEF_MISSILE_INTERPLANET => 'Interplanetary Missiles',
//
//    UNIT_MERCENARIES => 'Mercenaries',
//    MRC_STOCKMAN => 'Cargo Master',
//    MRC_SPY => 'Spy',
//    MRC_ACADEMIC => 'Academician',
////    MRC_DESTRUCTOR => 'Destroyer',
//    MRC_ADMIRAL => 'Admiral',
//    MRC_COORDINATOR => 'Coordinator',
//    MRC_NAVIGATOR => 'Navigator',
////    MRC_ASSASIN => 'Assassin',
//
//    UNIT_GOVERNORS => 'Governors',
//    MRC_TECHNOLOGIST => 'Technologist',
//    MRC_ENGINEER => 'Engineer',
//    MRC_FORTIFIER => 'Fortifier',
//
//    UNIT_RESOURCES => 'Resources',
//    RES_METAL => 'Metal',
//    RES_CRYSTAL => 'Crystal',
//    RES_DEUTERIUM => 'Deuterium',
//    RES_ENERGY => 'Energy',
//    RES_DARK_MATTER => 'Dark Matter',
//
//    UNIT_ARTIFACTS => 'Artifacts',
//    ART_LHC => 'Large Hadron Collider',
//    ART_HOOK_SMALL => 'Small Hook',
//    ART_HOOK_MEDIUM => 'Medium Hook',
//    ART_HOOK_LARGE => 'Large Hook',
//    ART_RCD_SMALL => 'Small RCD',
//    ART_RCD_MEDIUM => 'Medium RCD',
//    ART_RCD_LARGE => 'Large RCD',
//    ART_HEURISTIC_CHIP => 'Heuristic chip',
//    ART_NANO_BUILDER   => 'Nanobuilder',
//
//    UNIT_PLANS => 'Schematics',
//    UNIT_PLAN_STRUC_MINE_FUSION => 'Schematic &quot;Thermonuclear plant&quot;',
//    UNIT_PLAN_SHIP_CARGO_SUPER => 'Schematic &quot;Supertransport&quot;',
//    UNIT_PLAN_SHIP_CARGO_HYPER => 'Schematic &quot;Hyperstransport&quot;',
//    UNIT_PLAN_SHIP_DEATH_STAR => 'Schematic &quot;Death Star&quot;',
//    UNIT_PLAN_SHIP_SUPERNOVA => 'Schematic &quot;Supernova class cruiser&quot;',
//    UNIT_PLAN_DEF_SHIELD_PLANET => 'Schematic &quot;Planet defense&quot;',
//
//    UNIT_PREMIUM => 'Premium',
//    UNIT_CAPTAIN => 'Captain',
//
//    UNIT_PLANET_DENSITY => 'Density',
  ),

));