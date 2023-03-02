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
 * ChannelCreateFlowGroupByFiles请求参数结构体
 *
 * @method array getFlowFileInfos() 获取每个子合同的发起所需的信息，数量限制2-100
 * @method void setFlowFileInfos(array $FlowFileInfos) 设置每个子合同的发起所需的信息，数量限制2-100
 * @method string getFlowGroupName() 获取合同组名称，长度不超过200个字符
 * @method void setFlowGroupName(string $FlowGroupName) 设置合同组名称，长度不超过200个字符
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method string getApproverVerifyType() 获取签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：若选择后者，未实名的个人签署方查看合同时，无需进行人脸识别实名认证（但签署合同时仍然需要人脸实名），该能力仅适用于个人签署方。
 * @method void setApproverVerifyType(string $ApproverVerifyType) 设置签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：若选择后者，未实名的个人签署方查看合同时，无需进行人脸识别实名认证（但签署合同时仍然需要人脸实名），该能力仅适用于个人签署方。
 * @method UserInfo getOperator() 获取操作者的信息，此参数不用传
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息，此参数不用传
 */
class ChannelCreateFlowGroupByFilesRequest extends AbstractModel
{
    /**
     * @var array 每个子合同的发起所需的信息，数量限制2-100
     */
    public $FlowFileInfos;

    /**
     * @var string 合同组名称，长度不超过200个字符
     */
    public $FlowGroupName;

    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     */
    public $Agent;

    /**
     * @var string 签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：若选择后者，未实名的个人签署方查看合同时，无需进行人脸识别实名认证（但签署合同时仍然需要人脸实名），该能力仅适用于个人签署方。
     */
    public $ApproverVerifyType;

    /**
     * @var UserInfo 操作者的信息，此参数不用传
     */
    public $Operator;

    /**
     * @param array $FlowFileInfos 每个子合同的发起所需的信息，数量限制2-100
     * @param string $FlowGroupName 合同组名称，长度不超过200个字符
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     * @param string $ApproverVerifyType 签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：若选择后者，未实名的个人签署方查看合同时，无需进行人脸识别实名认证（但签署合同时仍然需要人脸实名），该能力仅适用于个人签署方。
     * @param UserInfo $Operator 操作者的信息，此参数不用传
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
        if (array_key_exists("FlowFileInfos",$param) and $param["FlowFileInfos"] !== null) {
            $this->FlowFileInfos = [];
            foreach ($param["FlowFileInfos"] as $key => $value){
                $obj = new FlowFileInfo();
                $obj->deserialize($value);
                array_push($this->FlowFileInfos, $obj);
            }
        }

        if (array_key_exists("FlowGroupName",$param) and $param["FlowGroupName"] !== null) {
            $this->FlowGroupName = $param["FlowGroupName"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ApproverVerifyType",$param) and $param["ApproverVerifyType"] !== null) {
            $this->ApproverVerifyType = $param["ApproverVerifyType"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
