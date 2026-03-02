# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.0] - 2026-03-02

### Added

- **Email Composer** — Send emails from any resource using templates as starting points, with full editing of subject, body, recipients, and attachments
- **Dynamic Templates** — Universal `TemplateMail` mailable that loads content from the database, no need for per-template Mailable classes
- **Token Replacement** — Model attributes (`{{ user.name }}`), config values (`{{ config.app.name }}`), conditionals (`{% if user.is_premium %}`), and fallbacks (`{{ user.name | 'Customer' }}`)
- **Template Versioning** — Automatic version history with compare and restore
- **Template Duplication** — Duplicate templates from the table with one click
- **Email Logging** — Every sent email is logged with status tracking, rendered body storage, and polymorphic model association
- **Translatable Templates** — Multiple languages via `spatie/laravel-translatable`, all locales stored in a single record
- **Theme System** — Create color themes and apply them to templates
- **Swappable Editor** — Ships with Filament RichEditor by default, Tiptap and TinyMCE supported via `EditorContract`
- **Categories & Tags** — Organize templates with categories and freeform tags
- **Reusable Actions** — `SendEmailAction` and `SentEmailsRelationManager` drop into any Filament resource
- **Preview & Test Send** — Preview templates inline and send test emails from the admin panel
- **Admin Settings** — Manage sender defaults, branding, logging, and attachment rules from the UI via Spatie Settings
- **Full Navigation Control** — Configure navigation groups, sort order, and visibility per resource from the plugin
- **Filament Shield Integration** — Built-in policies and automatic permission setup
- **Auth Email Overrides** — Replace verification, password reset, and welcome emails with custom templates
- **Queued Sending** — All emails are queued by default with configurable queue connection and name
- **Sent Email Cleanup** — Scheduled command to clean up old sent email records
- **Install & Uninstall Commands** — Interactive setup and teardown with panel registration, Shield config, and locale detection
- **Events** — `EmailSending`, `EmailSent`, `EmailFailed`, and `TemplateUpdated` events for application-level hooks
- **Multi-version Support** — Filament 4 and 5, Laravel 11 and 12, PHP 8.2+
- **Translations** — English, German, and Hungarian included out of the box
