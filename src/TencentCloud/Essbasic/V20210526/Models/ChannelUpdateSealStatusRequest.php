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
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
 * @method string getStatus() 获取<p>印章状态，目前支持传入以下类型：</p><ul><li>ENABLE-启用印章</li><li>DISABLE-停用印章</li></ul>
 * @method void setStatus(string $Status) 设置<p>印章状态，目前支持传入以下类型：</p><ul><li>ENABLE-启用印章</li><li>DISABLE-停用印章</li></ul>
 * @method string getSealId() 获取<p>印章ID</p>
 * @method void setSealId(string $SealId) 设置<p>印章ID</p>
 * @method string getReason() 获取<p>更新印章状态原因说明</p>
 * @method void setReason(string $Reason) 设置<p>更新印章状态原因说明</p>
 * @method UserInfo getOperator() 获取<p>操作者的信息</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>操作者的信息</p>
 * @method array getOptions() 获取<p>个性化配置字段，默认不传。</p>
 * @method void setOptions(array $Options) 设置<p>个性化配置字段，默认不传。</p>
 */
class ChannelUpdateSealStatusRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
     */
    public $Agent;

    /**
     * @var string <p>印章状态，目前支持传入以下类型：</p><ul><li>ENABLE-启用印章</li><li>DISABLE-停用印章</li></ul>
     */
    public $Status;

    /**
     * @var string <p>印章ID</p>
     */
    public $SealId;

    /**
     * @var string <p>更新印章状态原因说明</p>
     */
    public $Reason;

    /**
     * @var UserInfo <p>操作者的信息</p>
     * @deprecated
     */
    public $Operator;

    /**
     * @var array <p>个性化配置字段，默认不传。</p>
     */
    public $Options;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
     * @param string $Status <p>印章状态，目前支持传入以下类型：</p><ul><li>ENABLE-启用印章</li><li>DISABLE-停用印章</li></ul>
     * @param string $SealId <p>印章ID</p>
     * @param string $Reason <p>更新印章状态原因说明</p>
     * @param UserInfo $Operator <p>操作者的信息</p>
     * @param array $Options <p>个性化配置字段，默认不传。</p>
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
