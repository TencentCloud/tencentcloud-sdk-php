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
 * DeleteSealPolicies请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填
 * @method array getPolicyIds() 获取印章授权编码数组。这个参数跟下面的SealId其中一个必填，另外一个可选填
 * @method void setPolicyIds(array $PolicyIds) 设置印章授权编码数组。这个参数跟下面的SealId其中一个必填，另外一个可选填
 * @method string getSealId() 获取印章ID。这个参数跟上面的PolicyIds其中一个必填，另外一个可选填
 * @method void setSealId(string $SealId) 设置印章ID。这个参数跟上面的PolicyIds其中一个必填，另外一个可选填
 * @method array getUserIds() 获取待授权的员工ID
 * @method void setUserIds(array $UserIds) 设置待授权的员工ID
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 */
class DeleteSealPoliciesRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填
     */
    public $Operator;

    /**
     * @var array 印章授权编码数组。这个参数跟下面的SealId其中一个必填，另外一个可选填
     */
    public $PolicyIds;

    /**
     * @var string 印章ID。这个参数跟上面的PolicyIds其中一个必填，另外一个可选填
     */
    public $SealId;

    /**
     * @var array 待授权的员工ID
     */
    public $UserIds;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    public $Agent;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填
     * @param array $PolicyIds 印章授权编码数组。这个参数跟下面的SealId其中一个必填，另外一个可选填
     * @param string $SealId 印章ID。这个参数跟上面的PolicyIds其中一个必填，另外一个可选填
     * @param array $UserIds 待授权的员工ID
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
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

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
