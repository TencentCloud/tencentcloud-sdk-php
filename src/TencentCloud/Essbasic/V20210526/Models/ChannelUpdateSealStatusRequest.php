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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChannelUpdateSealStatus请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
 * @method string getStatus() 获取印章状态，目前支持传入以下类型：
<ul><li>DISABLE-停用印章</li></ul>
 * @method void setStatus(string $Status) 设置印章状态，目前支持传入以下类型：
<ul><li>DISABLE-停用印章</li></ul>
 * @method string getSealId() 获取印章ID
 * @method void setSealId(string $SealId) 设置印章ID
 * @method string getReason() 获取更新印章状态原因说明
 * @method void setReason(string $Reason) 设置更新印章状态原因说明
 * @method UserInfo getOperator() 获取操作者的信息
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息
 * @method array getOptions() 获取个性化配置字段，默认不传。
 * @method void setOptions(array $Options) 设置个性化配置字段，默认不传。
 */
class ChannelUpdateSealStatusRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
     */
    public $Agent;

    /**
     * @var string 印章状态，目前支持传入以下类型：
<ul><li>DISABLE-停用印章</li></ul>
     */
    public $Status;

    /**
     * @var string 印章ID
     */
    public $SealId;

    /**
     * @var string 更新印章状态原因说明
     */
    public $Reason;

    /**
     * @var UserInfo 操作者的信息
     * @deprecated
     */
    public $Operator;

    /**
     * @var array 个性化配置字段，默认不传。
     */
    public $Options;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
     * @param string $Status 印章状态，目前支持传入以下类型：
<ul><li>DISABLE-停用印章</li></ul>
     * @param string $SealId 印章ID
     * @param string $Reason 更新印章状态原因说明
     * @param UserInfo $Operator 操作者的信息
     * @param array $Options 个性化配置字段，默认不传。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = [];
            foreach ($param["Options"] as $key => $value){
                $obj = new Option();
                $obj->deserialize($value);
                array_push($this->Options, $obj);
            }
        }
    }
}
