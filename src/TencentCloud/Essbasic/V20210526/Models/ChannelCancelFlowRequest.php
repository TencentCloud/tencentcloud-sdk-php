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
 * ChannelCancelFlow请求参数结构体
 *
 * @method string getFlowId() 获取签署流程编号
 * @method void setFlowId(string $FlowId) 设置签署流程编号
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method string getCancelMessage() 获取撤回原因，最大不超过200字符
 * @method void setCancelMessage(string $CancelMessage) 设置撤回原因，最大不超过200字符
 * @method integer getCancelMessageFormat() 获取撤销理由自定义格式；选项：
0 默认格式
1 只保留身份信息：展示为【发起方】
2 保留身份信息+企业名称：展示为【发起方xxx公司】
3 保留身份信息+企业名称+经办人名称：展示为【发起方xxxx公司-经办人姓名】
 * @method void setCancelMessageFormat(integer $CancelMessageFormat) 设置撤销理由自定义格式；选项：
0 默认格式
1 只保留身份信息：展示为【发起方】
2 保留身份信息+企业名称：展示为【发起方xxx公司】
3 保留身份信息+企业名称+经办人名称：展示为【发起方xxxx公司-经办人姓名】
 * @method UserInfo getOperator() 获取暂未开放
 * @method void setOperator(UserInfo $Operator) 设置暂未开放
 */
class ChannelCancelFlowRequest extends AbstractModel
{
    /**
     * @var string 签署流程编号
     */
    public $FlowId;

    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     */
    public $Agent;

    /**
     * @var string 撤回原因，最大不超过200字符
     */
    public $CancelMessage;

    /**
     * @var integer 撤销理由自定义格式；选项：
0 默认格式
1 只保留身份信息：展示为【发起方】
2 保留身份信息+企业名称：展示为【发起方xxx公司】
3 保留身份信息+企业名称+经办人名称：展示为【发起方xxxx公司-经办人姓名】
     */
    public $CancelMessageFormat;

    /**
     * @var UserInfo 暂未开放
     */
    public $Operator;

    /**
     * @param string $FlowId 签署流程编号
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     * @param string $CancelMessage 撤回原因，最大不超过200字符
     * @param integer $CancelMessageFormat 撤销理由自定义格式；选项：
0 默认格式
1 只保留身份信息：展示为【发起方】
2 保留身份信息+企业名称：展示为【发起方xxx公司】
3 保留身份信息+企业名称+经办人名称：展示为【发起方xxxx公司-经办人姓名】
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
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
