<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 禁言用户信息数组，内容包括被禁言的成员 ID，及其被禁言到的时间（使用 UTC 时间，即世界协调时间）
 *
 * @method string getMemberAccount() 获取用户 ID
 * @method void setMemberAccount(string $MemberAccount) 设置用户 ID
 * @method integer getMutedUntil() 获取禁言到的时间（使用 UTC 时间，即世界协调时间）
 * @method void setMutedUntil(integer $MutedUntil) 设置禁言到的时间（使用 UTC 时间，即世界协调时间）
 */
class MutedAccountList extends AbstractModel
{
    /**
     * @var string 用户 ID
     */
    public $MemberAccount;

    /**
     * @var integer 禁言到的时间（使用 UTC 时间，即世界协调时间）
     */
    public $MutedUntil;

    /**
     * @param string $MemberAccount 用户 ID
     * @param integer $MutedUntil 禁言到的时间（使用 UTC 时间，即世界协调时间）
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
        if (array_key_exists("MemberAccount",$param) and $param["MemberAccount"] !== null) {
            $this->MemberAccount = $param["MemberAccount"];
        }

        if (array_key_exists("MutedUntil",$param) and $param["MutedUntil"] !== null) {
            $this->MutedUntil = $param["MutedUntil"];
        }
    }
}
