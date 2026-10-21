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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCfwShareRole请求参数结构体
 *
 * @method string getCfwShareRole() 获取云防火墙共享角色，取值：sharer（共享者）、user（使用者）、none（无共享角色）。共享者→使用者禁止直接变更，需先设为 none
 * @method void setCfwShareRole(string $CfwShareRole) 设置云防火墙共享角色，取值：sharer（共享者）、user（使用者）、none（无共享角色）。共享者→使用者禁止直接变更，需先设为 none
 * @method string getUserMemberId() 获取使用者Id
 * @method void setUserMemberId(string $UserMemberId) 设置使用者Id
 * @method string getSharerMemberId() 获取共享者账号ID，CfwShareRole 为 user 时必填
 * @method void setSharerMemberId(string $SharerMemberId) 设置共享者账号ID，CfwShareRole 为 user 时必填
 */
class ModifyCfwShareRoleRequest extends AbstractModel
{
    /**
     * @var string 云防火墙共享角色，取值：sharer（共享者）、user（使用者）、none（无共享角色）。共享者→使用者禁止直接变更，需先设为 none
     */
    public $CfwShareRole;

    /**
     * @var string 使用者Id
     */
    public $UserMemberId;

    /**
     * @var string 共享者账号ID，CfwShareRole 为 user 时必填
     */
    public $SharerMemberId;

    /**
     * @param string $CfwShareRole 云防火墙共享角色，取值：sharer（共享者）、user（使用者）、none（无共享角色）。共享者→使用者禁止直接变更，需先设为 none
     * @param string $UserMemberId 使用者Id
     * @param string $SharerMemberId 共享者账号ID，CfwShareRole 为 user 时必填
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
        if (array_key_exists("CfwShareRole",$param) and $param["CfwShareRole"] !== null) {
            $this->CfwShareRole = $param["CfwShareRole"];
        }

        if (array_key_exists("UserMemberId",$param) and $param["UserMemberId"] !== null) {
            $this->UserMemberId = $param["UserMemberId"];
        }

        if (array_key_exists("SharerMemberId",$param) and $param["SharerMemberId"] !== null) {
            $this->SharerMemberId = $param["SharerMemberId"];
        }
    }
}
