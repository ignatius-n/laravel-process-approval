<?php

namespace RingleSoft\LaravelProcessApproval\Enums;

enum ApprovalActionEnum: string
{
    case SUBMITTED = 'Submitted';
    case APPROVED = 'Approved';
    case REJECTED = 'Rejected';
    case DISCARDED = 'Discarded';
}
