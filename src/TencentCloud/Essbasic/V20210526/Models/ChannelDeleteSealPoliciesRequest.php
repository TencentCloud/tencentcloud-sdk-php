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
 * ChannelDeleteSealPolicies请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method string getSealId() 获取指定印章ID
 * @method void setSealId(string $SealId) 设置指定印章ID
 * @method array getUserIds() 获取指定用户ID数组
 * @method void setUserIds(array $UserIds) 设置指定用户ID数组
 * @method OrganizationInfo getOrganization() 获取组织机构信息，不用传
 * @method void setOrganization(OrganizationInfo $Organization) 设置组织机构信息，不用传
 * @method UserInfo getOperator() 获取操作人（用户）信息，不用传
 * @method void setOperator(UserInfo $Operator) 设置操作人（用户）信息，不用传
 */
class ChannelDeleteSealPoliciesRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     */
    public $Agent;

    /**
     * @var string 指定印章ID
     */
    public $SealId;

    /**
     * @var array 指定用户ID数组
     */
    public $UserIds;

    /**
     * @var OrganizationInfo 组织机构信息，不用传
     */
    public $Organization;

    /**
     * @var UserInfo 操作人（用户）信息，不用传
     */
    public $Operator;

    /**
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     * @param string $SealId 指定印章ID
     * @param array $UserIds 指定用户ID数组
     * @param OrganizationInfo $Organization 组织机构信息，不用传
     * @param UserInfo $Operator 操作人（用户）信息，不用传
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

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = new OrganizationInfo();
            $this->Organization->deserialize($param["Organization"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
