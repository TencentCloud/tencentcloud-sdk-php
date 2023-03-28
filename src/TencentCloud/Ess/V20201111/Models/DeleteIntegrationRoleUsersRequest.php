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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteIntegrationRoleUsers请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人
 * @method void setOperator(UserInfo $Operator) 设置操作人
 * @method string getRoleId() 获取角色id
 * @method void setRoleId(string $RoleId) 设置角色id
 * @method array getUsers() 获取用户信息
 * @method void setUsers(array $Users) 设置用户信息
 * @method Agent getAgent() 获取代理信息
 * @method void setAgent(Agent $Agent) 设置代理信息
 */
class DeleteIntegrationRoleUsersRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人
     */
    public $Operator;

    /**
     * @var string 角色id
     */
    public $RoleId;

    /**
     * @var array 用户信息
     */
    public $Users;

    /**
     * @var Agent 代理信息
     */
    public $Agent;

    /**
     * @param UserInfo $Operator 操作人
     * @param string $RoleId 角色id
     * @param array $Users 用户信息
     * @param Agent $Agent 代理信息
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = [];
            foreach ($param["Users"] as $key => $value){
                $obj = new UserInfo();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
