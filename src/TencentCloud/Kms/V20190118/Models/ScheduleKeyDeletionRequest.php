<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScheduleKeyDeletion请求参数结构体
 *
 * @method string getKeyId() 获取CMK的唯一标志
 * @method void setKeyId(string $KeyId) 设置CMK的唯一标志
 * @method integer getPendingWindowInDays() 获取计划删除时间区间[7,30]
 * @method void setPendingWindowInDays(integer $PendingWindowInDays) 设置计划删除时间区间[7,30]
 * @method MemberAccount getMemberAccount() 获取可信服务成员账号信息,当前账号时管理员或者委派管理员时有效。
 * @method void setMemberAccount(MemberAccount $MemberAccount) 设置可信服务成员账号信息,当前账号时管理员或者委派管理员时有效。
 */
class ScheduleKeyDeletionRequest extends AbstractModel
{
    /**
     * @var string CMK的唯一标志
     */
    public $KeyId;

    /**
     * @var integer 计划删除时间区间[7,30]
     */
    public $PendingWindowInDays;

    /**
     * @var MemberAccount 可信服务成员账号信息,当前账号时管理员或者委派管理员时有效。
     */
    public $MemberAccount;

    /**
     * @param string $KeyId CMK的唯一标志
     * @param integer $PendingWindowInDays 计划删除时间区间[7,30]
     * @param MemberAccount $MemberAccount 可信服务成员账号信息,当前账号时管理员或者委派管理员时有效。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("PendingWindowInDays",$param) and $param["PendingWindowInDays"] !== null) {
            $this->PendingWindowInDays = $param["PendingWindowInDays"];
        }

        if (array_key_exists("MemberAccount",$param) and $param["MemberAccount"] !== null) {
            $this->MemberAccount = new MemberAccount();
            $this->MemberAccount->deserialize($param["MemberAccount"]);
        }
    }
}
