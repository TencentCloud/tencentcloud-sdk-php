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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChannelDeleteRole请求参数结构体
 *
 * @method Agent getAgent() 获取代理企业和员工的信息。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
 * @method array getRoleIds() 获取角色id，最多20个
 * @method void setRoleIds(array $RoleIds) 设置角色id，最多20个
 */
class ChannelDeleteRoleRequest extends AbstractModel
{
    /**
     * @var Agent 代理企业和员工的信息。
     */
    public $Agent;

    /**
     * @var array 角色id，最多20个
     */
    public $RoleIds;

    /**
     * @param Agent $Agent 代理企业和员工的信息。
     * @param array $RoleIds 角色id，最多20个
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }
    }
}
