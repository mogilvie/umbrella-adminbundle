<?php

namespace Umbrella\AdminBundle;

class UmbrellaAdminConfiguration
{
    private array $config;

    /**
     * UmbrellaAdminConfiguration constructor.
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function homeRoute(): string
    {
        return $this->config['home_route'];
    }

    public function menuAlias(): string
    {
        return $this->config['menu_alias'];
    }

    // Theme

    public function themeName(): string
    {
        return $this->config['theme']['name'];
    }

    public function themeIcon(): ?string
    {
        return $this->config['theme']['icon'];
    }

    public function themeLogo(): ?string
    {
        return $this->config['theme']['logo'];
    }

    public function themeLogoSm(): ?string
    {
        return $this->config['theme']['logo_sm'];
    }

    // Assets

    public function assetScriptEntry(): string
    {
        return $this->config['assets']['script_entry'];
    }

    public function assetStylesheetEntry(): string
    {
        return $this->config['assets']['stylesheet_entry'];
    }

    // User

    public function userClass(): string
    {
        return $this->config['user']['class'];
    }

    public function userTable(): string
    {
        return $this->config['user']['table'];
    }

    public function userForm(): string
    {
        return $this->config['user']['form'];
    }

    public function userMailerFromEmail(): string
    {
        return $this->config['user_mailer']['from_email'];
    }

    public function userMailerFromName(): string
    {
        return $this->config['user_mailer']['from_name'];
    }

    // Profile

    public function profileEnable(): bool
    {
        return $this->config['user_profile']['enabled'];
    }

    public function routeProfile(): string
    {
        return $this->config['user_profile']['route'];
    }

    public function profileForm(): string
    {
        return $this->config['user_profile']['form'];
    }

    // Security

    public function passwordRequestTtl(): int
    {
        return $this->config['security']['password_request_ttl'];
    }

    // Notification

    public function notificationEnable(): bool
    {
        return $this->config['notification']['enabled'];
    }

    public function notificationPollInterval(): int
    {
        return $this->config['notification']['poll_interval'];
    }
}
