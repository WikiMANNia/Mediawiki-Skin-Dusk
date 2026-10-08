# MediaWiki Dusk

Die Pflege dieses Forks des MediaWiki-Skins [Dusk](https://www.mediawiki.org/wiki/Skin:Dusk/de) wird von WikiMANNia verwaltet.

The maintenance of this fork of the MediaWiki skin [Dusk](https://www.mediawiki.org/wiki/Skin:Dusk) is managed by WikiMANNia.

El mantenimiento de esta bifurcación del tema de MediaWiki [Dusk](https://www.mediawiki.org/wiki/Skin:Dusk/es) está gestionado por WikiMANNia.

## Description

Der Skin Dusk unterstützt Themen, siehe dazu Erweiterung [Theme](https://www.mediawiki.org/wiki/Extension:Theme/de).

The Dusk skin supports themes; see the [Theme](https://www.mediawiki.org/wiki/Extension:Theme) extension for details.

El tema Dusk admite temas; consulta la extensión de [Temas](https://www.mediawiki.org/wiki/Extension:Theme/es) para obtener más información.

Aktuell sind das die Themen:

Currently, the themes are:

Actualmente, los temas disponibles son:
* ´green´

## Compatibility

This skin has been tested with MediaWiki versions `1.39.17`, `1.43.9`, `1.45.4`, and `1.47.0-alpha`.

The skin is expected to work with MediaWiki 1.36–1.38, but these versions are not currently tested.

## Version history

Version 3.3.5 - Mar 25, 2021
- Delete old, nowadays unused Special:Preferences CSS

Apr 5, 2021
- Ditch the Skin::setupSkinUserCss method(), require MW 1.35+
- Bug: T266735

Version 3.3.6 - Apr 18, 2021

- BaseTemplate#getToolbox is deprecated as of MW 1.35
- Bug: T279390

Version 4.3.6 - Sep 16, 2022

- Upgrade for 1.39
-- Use skin registration
-- Do not render head element any more
-- Use ResourceLoaderSkinModule
- Bug: T269626
- Bug: T306942

Jan 29, 2023
- Restore .noprint CSS class definition for proper printable view

Mar 18, 2025
: Replace class aliases from MediaWiki 1.40
: Common classes are namespaced and the class
: aliases were removed in fcbb75b8a4 (MediaWiki 1.44)
: Fixing usage of aliases added in MediaWiki 1.40

Aug 16, 2025
: Remove "i18n-all-lists-margins" and "interface-message-box" features to avoid deprecation notice, require MW 1.43+
: As per the deprecation notice/core file resources/src/mediawiki.skinning/i18n-all-lists-margins.less, the skin already loads the "elements" feature, thus no need to separately load this.
: The "interface-message-box" feature is not needed except to support a handful of extensions and can be safely removed, as per [[mw:Manual:ResourceLoaderSkinModule]].

Version 4.4 - Oct 7, 2026

- Add namespace
- Add file ´Compat.php´
- Add backward compatibility to REL1_36
- Migrated ´skin.json´ from manifest version 1 to manifest version 2.
