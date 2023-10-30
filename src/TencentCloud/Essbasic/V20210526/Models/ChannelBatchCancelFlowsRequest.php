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
 * ChannelBatchCancelFlows请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
 * @method array getFlowIds() 获取签署流程Id数组，最多100个，超过100不处理
 * @method void setFlowIds(array $FlowIds) 设置签署流程Id数组，最多100个，超过100不处理
 * @method string getCancelMessage() 获取撤销理由,不超过200个字符
 * @method void setCancelMessage(string $CancelMessage) 设置撤销理由,不超过200个字符
 * @method integer getCancelMessageFormat() 获取撤销理由自定义格式，支持以下格式
<ul><li>0 : 默认值</li>
<li>1 : 只保留身份信息</li>
<li>2 : 保留身份信息+企业名称</li>
<li>3 : 保留身份信息+企业名称+经办人名称</li></ul>
例如,假设合同的发起方是典子谦示例企业的经办人张三，撤销理由是"合同内容错误，需要修正",合同撤销后，各签署方看到的撤销理由是会是

0: 发起方-典子谦示例企业-张三以"合同内容错误，需要修正"的理由撤销当前合同
1: 发起方以"合同内容错误，需要修正"的理由撤销当前合同
2: 发起方-典子谦示例企业以"合同内容错误，需要修正"的理由撤销当前合同
3: 发起方-典子谦示例企业-张三以"合同内容错误，需要修正"的理由撤销当前合同</br>

备注:`如果不传递撤销理由，那么默认撤销理由是 "自动撤销（通过接口实现）"`
 * @method void setCancelMessageFormat(integer $CancelMessageFormat) 设置撤销理由自定义格式，支持以下格式
<ul><li>0 : 默认值</li>
<li>1 : 只保留身份信息</li>
<li>2 : 保留身份信息+企业名称</li>
<li>3 : 保留身份信息+企业名称+经办人名称</li></ul>
例如,假设合同的发起方是典子谦示例企业的经办人张三，撤销理由是"合同内容错误，需要修正",合同撤销后，各签署方看到的撤销理由是会是

0: 发起方-典子谦示例企业-张三以"合同内容错误，需要修正"的理由撤销当前合同
1: 发起方以"合同内容错误，需要修正"的理由撤销当前合同
2: 发起方-典子谦示例企业以"合同内容错误，需要修正"的理由撤销当前合同
3: 发起方-典子谦示例企业-张三以"合同内容错误，需要修正"的理由撤销当前合同</br>

备注:`如果不传递撤销理由，那么默认撤销理由是 "自动撤销（通过接口实现）"`
 * @method UserInfo getOperator() 获取暂未开放
 * @method void setOperator(UserInfo $Operator) 设置暂未开放
 */
class ChannelBatchCancelFlowsRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
     */
    public $Agent;

    /**
     * @var array 签署流程Id数组，最多100个，超过100不处理
     */
    public $FlowIds;

    /**
     * @var string 撤销理由,不超过200个字符
     */
    public $CancelMessage;

    /**
     * @var integer 撤销理由自定义格式，支持以下格式
<ul><li>0 : 默认值</li>
<li>1 : 只保留身份信息</li>
<li>2 : 保留身份信息+企业名称</li>
<li>3 : 保留身份信息+企业名称+经办人名称</li></ul>
例如,假设合同的发起方是典子谦示例企业的经办人张三，撤销理由是"合同内容错误，需要修正",合同撤销后，各签署方看到的撤销理由是会是

0: 发起方-典子谦示例企业-张三以"合同内容错误，需要修正"的理由撤销当前合同
1: 发起方以"合同内容错误，需要修正"的理由撤销当前合同
2: 发起方-典子谦示例企业以"合同内容错误，需要修正"的理由撤销当前合同
3: 发起方-典子谦示例企业-张三以"合同内容错误，需要修正"的理由撤销当前合同</br>

备注:`如果不传递撤销理由，那么默认撤销理由是 "自动撤销（通过接口实现）"`
     */
    public $CancelMessageFormat;

    /**
     * @var UserInfo 暂未开放
     * @deprecated
     */
    public $Operator;

    /**
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
     * @param array $FlowIds 签署流程Id数组，最多100个，超过100不处理
     * @param string $CancelMessage 撤销理由,不超过200个字符
     * @param integer $CancelMessageFormat 撤销理由自定义格式，支持以下格式
<ul><li>0 : 默认值</li>
<li>1 : 只保留身份信息</li>
<li>2 : 保留身份信息+企业名称</li>
<li>3 : 保留身份信息+企业名称+经办人名称</li></ul>
例如,假设合同的发起方是典子谦示例企业的经办人张三，撤销理由是"合同内容错误，需要修正",合同撤销后，各签署方看到的撤销理由是会是

0: 发起方-典子谦示例企业-张三以"合同内容错误，需要修正"的理由撤销当前合同
1: 发起方以"合同内容错误，需要修正"的理由撤销当前合同
2: 发起方-典子谦示例企业以"合同内容错误，需要修正"的理由撤销当前合同
3: 发起方-典子谦示例企业-张三以"合同内容错误，需要修正"的理由撤销当前合同</br>

备注:`如果不传递撤销理由，那么默认撤销理由是 "自动撤销（通过接口实现）"`
     * @param UserInfo $Operator 暂未开放
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

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("CancelMessage",$param) and $param["CancelMessage"] !== null) {
            $this->CancelMessage = $param["CancelMessage"];
        }

        if (array_key_exists("CancelMessageFormat",$param) and $param["CancelMessageFormat"] !== null) {
            $this->CancelMessageFormat = $param["CancelMessageFormat"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
