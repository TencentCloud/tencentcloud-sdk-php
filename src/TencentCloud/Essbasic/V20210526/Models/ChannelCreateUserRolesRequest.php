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
 * ChannelCreateUserRoles请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
 * @method array getRoleIds() 获取绑定角色的角色id列表，最多 100 个
 * @method void setRoleIds(array $RoleIds) 设置绑定角色的角色id列表，最多 100 个
 * @method array getUserIds() 获取电子签用户ID列表，与OpenIds参数二选一,优先UserIds参数，最多 100 个
 * @method void setUserIds(array $UserIds) 设置电子签用户ID列表，与OpenIds参数二选一,优先UserIds参数，最多 100 个
 * @method array getOpenIds() 获取客户系统用户ID列表，与UserIds参数二选一,优先UserIds参数，最多 100 个
 * @method void setOpenIds(array $OpenIds) 设置客户系统用户ID列表，与UserIds参数二选一,优先UserIds参数，最多 100 个
 * @method UserInfo getOperator() 获取操作者信息
 * @method void setOperator(UserInfo $Operator) 设置操作者信息
 */
class ChannelCreateUserRolesRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
     */
    public $Agent;

    /**
     * @var array 绑定角色的角色id列表，最多 100 个
     */
    public $RoleIds;

    /**
     * @var array 电子签用户ID列表，与OpenIds参数二选一,优先UserIds参数，最多 100 个
     */
    public $UserIds;

    /**
     * @var array 客户系统用户ID列表，与UserIds参数二选一,优先UserIds参数，最多 100 个
     */
    public $OpenIds;

    /**
     * @var UserInfo 操作者信息
     * @deprecated
     */
    public $Operator;

    /**
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
     * @param array $RoleIds 绑定角色的角色id列表，最多 100 个
     * @param array $UserIds 电子签用户ID列表，与OpenIds参数二选一,优先UserIds参数，最多 100 个
     * @param array $OpenIds 客户系统用户ID列表，与UserIds参数二选一,优先UserIds参数，最多 100 个
     * @param UserInfo $Operator 操作者信息
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

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("OpenIds",$param) and $param["OpenIds"] !== null) {
            $this->OpenIds = $param["OpenIds"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
