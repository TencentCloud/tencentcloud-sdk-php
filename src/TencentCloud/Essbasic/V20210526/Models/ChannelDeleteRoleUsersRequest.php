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
 * ChannelDeleteRoleUsers请求参数结构体
 *
 * @method Agent getAgent() 获取代理信息此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
 * @method void setAgent(Agent $Agent) 设置代理信息此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
 * @method string getRoleId() 获取角色Id（非超管或法人角色Id）
 * @method void setRoleId(string $RoleId) 设置角色Id（非超管或法人角色Id）
 * @method array getUserIds() 获取电子签用户ID列表，与OpenIds参数二选一,优先UserIds参数，最多两百
 * @method void setUserIds(array $UserIds) 设置电子签用户ID列表，与OpenIds参数二选一,优先UserIds参数，最多两百
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method array getOpenIds() 获取客户系统用户ID列表，与UserIds参数二选一,优先UserIds参数，最多两百
 * @method void setOpenIds(array $OpenIds) 设置客户系统用户ID列表，与UserIds参数二选一,优先UserIds参数，最多两百
 */
class ChannelDeleteRoleUsersRequest extends AbstractModel
{
    /**
     * @var Agent 代理信息此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
     */
    public $Agent;

    /**
     * @var string 角色Id（非超管或法人角色Id）
     */
    public $RoleId;

    /**
     * @var array 电子签用户ID列表，与OpenIds参数二选一,优先UserIds参数，最多两百
     */
    public $UserIds;

    /**
     * @var UserInfo 操作人信息
     * @deprecated
     */
    public $Operator;

    /**
     * @var array 客户系统用户ID列表，与UserIds参数二选一,优先UserIds参数，最多两百
     */
    public $OpenIds;

    /**
     * @param Agent $Agent 代理信息此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
     * @param string $RoleId 角色Id（非超管或法人角色Id）
     * @param array $UserIds 电子签用户ID列表，与OpenIds参数二选一,优先UserIds参数，最多两百
     * @param UserInfo $Operator 操作人信息
     * @param array $OpenIds 客户系统用户ID列表，与UserIds参数二选一,优先UserIds参数，最多两百
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

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("OpenIds",$param) and $param["OpenIds"] !== null) {
            $this->OpenIds = $param["OpenIds"];
        }
    }
}
