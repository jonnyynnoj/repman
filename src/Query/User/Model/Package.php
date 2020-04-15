<?php

declare(strict_types=1);

namespace Buddy\Repman\Query\User\Model;

final class Package
{
    private string $id;
    private string $type;
    private string $url;
    private ?string $name;
    private ?string $latestReleasedVersion;
    private ?\DateTimeImmutable $latestReleaseDate;
    private ?string $description;
    private ?\DateTimeImmutable $lastSyncAt;
    private ?string $lastSyncError;
    private ?\DateTimeImmutable $webhookCreatedAt;

    public function __construct(
        string $id,
        string $type,
        string $url,
        ?string $name = null,
        ?string $latestReleasedVersion = null,
        ?\DateTimeImmutable $latestReleaseDate = null,
        ?string $description = null,
        ?\DateTimeImmutable $lastSyncAt = null,
        ?string $lastSyncError = null,
        ?\DateTimeImmutable $webhookCreatedAt = null
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->url = $url;
        $this->name = $name;
        $this->latestReleasedVersion = $latestReleasedVersion;
        $this->latestReleaseDate = $latestReleaseDate;
        $this->description = $description;
        $this->lastSyncAt = $lastSyncAt;
        $this->lastSyncError = $lastSyncError;
        $this->webhookCreatedAt = $webhookCreatedAt;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function latestReleasedVersion(): ?string
    {
        return $this->latestReleasedVersion;
    }

    public function latestReleaseDate(): ?\DateTimeImmutable
    {
        return $this->latestReleaseDate;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function lastSyncAt(): ?\DateTimeImmutable
    {
        return $this->lastSyncAt;
    }

    public function lastSyncError(): ?string
    {
        return $this->lastSyncError;
    }

    public function webhookCreatedAt(): ?\DateTimeImmutable
    {
        return $this->webhookCreatedAt;
    }

    public function allowToAutoAddWebhook(): bool
    {
        return in_array($this->type, ['github-oauth', 'gitlab-oauth', 'bitbucket-oauth'], true);
    }
}
