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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAccountSummary返回参数结构体
 *
 * @method integer getPolicies() 获取策略数
 * @method void setPolicies(integer $Policies) 设置策略数
 * @method integer getRoles() 获取角色数
 * @method void setRoles(integer $Roles) 设置角色数
 * @method integer getIdps() 获取身份提供商数
 * @method void setIdps(integer $Idps) 设置身份提供商数
 * @method integer getUser() 获取子账户数
 * @method void setUser(integer $User) 设置子账户数
 * @method integer getGroup() 获取分组数
 * @method void setGroup(integer $Group) 设置分组数
 * @method integer getMember() 获取分组用户总数
 * @method void setMember(integer $Member) 设置分组用户总数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetAccountSummaryResponse extends AbstractModel
{
    /**
     * @var integer 策略数
     */
    public $Policies;

    /**
     * @var integer 角色数
     */
    public $Roles;

    /**
     * @var integer 身份提供商数
     */
    public $Idps;

    /**
     * @var integer 子账户数
     */
    public $User;

    /**
     * @var integer 分组数
     */
    public $Group;

    /**
     * @var integer 分组用户总数
     */
    public $Member;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Policies 策略数
     * @param integer $Roles 角色数
     * @param integer $Idps 身份提供商数
     * @param integer $User 子账户数
     * @param integer $Group 分组数
     * @param integer $Member 分组用户总数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Policies",$param) and $param["Policies"] !== null) {
            $this->Policies = $param["Policies"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = $param["Roles"];
        }

        if (array_key_exists("Idps",$param) and $param["Idps"] !== null) {
            $this->Idps = $param["Idps"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Member",$param) and $param["Member"] !== null) {
            $this->Member = $param["Member"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
