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
 * ChannelCreateFlowByFiles请求参数结构体
 *
 * @method Agent getAgent() 获取渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method void setAgent(Agent $Agent) 设置渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method string getFlowName() 获取签署流程名称，长度不超过200个字符
 * @method void setFlowName(string $FlowName) 设置签署流程名称，长度不超过200个字符
 * @method array getFlowApprovers() 获取签署流程签约方列表，最多不超过5个参与方
 * @method void setFlowApprovers(array $FlowApprovers) 设置签署流程签约方列表，最多不超过5个参与方
 * @method array getFileIds() 获取签署文件资源Id列表，目前仅支持单个文件
 * @method void setFileIds(array $FileIds) 设置签署文件资源Id列表，目前仅支持单个文件
 * @method array getComponents() 获取签署文件中的发起方的填写控件，需要在发起的时候进行填充
 * @method void setComponents(array $Components) 设置签署文件中的发起方的填写控件，需要在发起的时候进行填充
 * @method integer getDeadline() 获取签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年
 * @method void setDeadline(integer $Deadline) 设置签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年
 * @method string getCallbackUrl() 获取签署流程回调地址，长度不超过255个字符
 * @method void setCallbackUrl(string $CallbackUrl) 设置签署流程回调地址，长度不超过255个字符
 * @method boolean getUnordered() 获取合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署。有序签署时以传入FlowApprovers数组的顺序作为签署顺序
 * @method void setUnordered(boolean $Unordered) 设置合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署。有序签署时以传入FlowApprovers数组的顺序作为签署顺序
 * @method string getFlowType() 获取签署流程的类型，长度不超过255个字符
 * @method void setFlowType(string $FlowType) 设置签署流程的类型，长度不超过255个字符
 * @method string getFlowDescription() 获取签署流程的描述，长度不超过1000个字符
 * @method void setFlowDescription(string $FlowDescription) 设置签署流程的描述，长度不超过1000个字符
 * @method string getCustomShowMap() 获取合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
 * @method void setCustomShowMap(string $CustomShowMap) 设置合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
 * @method string getCustomerData() 获取渠道的业务信息，最大长度1000个字符。发起自动签署时，需设置对应自动签署场景，目前仅支持场景：处方单-E_PRESCRIPTION_AUTO_SIGN
 * @method void setCustomerData(string $CustomerData) 设置渠道的业务信息，最大长度1000个字符。发起自动签署时，需设置对应自动签署场景，目前仅支持场景：处方单-E_PRESCRIPTION_AUTO_SIGN
 * @method boolean getNeedSignReview() 获取发起方企业的签署人进行签署操作是否需要企业内部审批。 若设置为true,审核结果需通过接口 ChannelCreateFlowSignReview 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。  注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置发起方企业的签署人进行签署操作是否需要企业内部审批。 若设置为true,审核结果需通过接口 ChannelCreateFlowSignReview 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。  注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。
 * @method UserInfo getOperator() 获取操作者的信息
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息
 * @method string getApproverVerifyType() 获取签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
 * @method void setApproverVerifyType(string $ApproverVerifyType) 设置签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
 * @method integer getSignBeanTag() 获取标识是否允许发起后添加控件。0为不允许1为允许。如果为1，创建的时候不能有签署控件，只能创建后添加。注意发起后添加控件功能不支持添加骑缝章和签批控件
 * @method void setSignBeanTag(integer $SignBeanTag) 设置标识是否允许发起后添加控件。0为不允许1为允许。如果为1，创建的时候不能有签署控件，只能创建后添加。注意发起后添加控件功能不支持添加骑缝章和签批控件
 */
class ChannelCreateFlowByFilesRequest extends AbstractModel
{
    /**
     * @var Agent 渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     */
    public $Agent;

    /**
     * @var string 签署流程名称，长度不超过200个字符
     */
    public $FlowName;

    /**
     * @var array 签署流程签约方列表，最多不超过5个参与方
     */
    public $FlowApprovers;

    /**
     * @var array 签署文件资源Id列表，目前仅支持单个文件
     */
    public $FileIds;

    /**
     * @var array 签署文件中的发起方的填写控件，需要在发起的时候进行填充
     */
    public $Components;

    /**
     * @var integer 签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年
     */
    public $Deadline;

    /**
     * @var string 签署流程回调地址，长度不超过255个字符
     */
    public $CallbackUrl;

    /**
     * @var boolean 合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署。有序签署时以传入FlowApprovers数组的顺序作为签署顺序
     */
    public $Unordered;

    /**
     * @var string 签署流程的类型，长度不超过255个字符
     */
    public $FlowType;

    /**
     * @var string 签署流程的描述，长度不超过1000个字符
     */
    public $FlowDescription;

    /**
     * @var string 合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
     */
    public $CustomShowMap;

    /**
     * @var string 渠道的业务信息，最大长度1000个字符。发起自动签署时，需设置对应自动签署场景，目前仅支持场景：处方单-E_PRESCRIPTION_AUTO_SIGN
     */
    public $CustomerData;

    /**
     * @var boolean 发起方企业的签署人进行签署操作是否需要企业内部审批。 若设置为true,审核结果需通过接口 ChannelCreateFlowSignReview 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。  注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。
     */
    public $NeedSignReview;

    /**
     * @var UserInfo 操作者的信息
     */
    public $Operator;

    /**
     * @var string 签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
     */
    public $ApproverVerifyType;

    /**
     * @var integer 标识是否允许发起后添加控件。0为不允许1为允许。如果为1，创建的时候不能有签署控件，只能创建后添加。注意发起后添加控件功能不支持添加骑缝章和签批控件
     */
    public $SignBeanTag;

    /**
     * @param Agent $Agent 渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     * @param string $FlowName 签署流程名称，长度不超过200个字符
     * @param array $FlowApprovers 签署流程签约方列表，最多不超过5个参与方
     * @param array $FileIds 签署文件资源Id列表，目前仅支持单个文件
     * @param array $Components 签署文件中的发起方的填写控件，需要在发起的时候进行填充
     * @param integer $Deadline 签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年
     * @param string $CallbackUrl 签署流程回调地址，长度不超过255个字符
     * @param boolean $Unordered 合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署。有序签署时以传入FlowApprovers数组的顺序作为签署顺序
     * @param string $FlowType 签署流程的类型，长度不超过255个字符
     * @param string $FlowDescription 签署流程的描述，长度不超过1000个字符
     * @param string $CustomShowMap 合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
     * @param string $CustomerData 渠道的业务信息，最大长度1000个字符。发起自动签署时，需设置对应自动签署场景，目前仅支持场景：处方单-E_PRESCRIPTION_AUTO_SIGN
     * @param boolean $NeedSignReview 发起方企业的签署人进行签署操作是否需要企业内部审批。 若设置为true,审核结果需通过接口 ChannelCreateFlowSignReview 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。  注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。
     * @param UserInfo $Operator 操作者的信息
     * @param string $ApproverVerifyType 签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
     * @param integer $SignBeanTag 标识是否允许发起后添加控件。0为不允许1为允许。如果为1，创建的时候不能有签署控件，只能创建后添加。注意发起后添加控件功能不支持添加骑缝章和签批控件
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

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowApprovers",$param) and $param["FlowApprovers"] !== null) {
            $this->FlowApprovers = [];
            foreach ($param["FlowApprovers"] as $key => $value){
                $obj = new FlowApproverInfo();
                $obj->deserialize($value);
                array_push($this->FlowApprovers, $obj);
            }
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("CustomShowMap",$param) and $param["CustomShowMap"] !== null) {
            $this->CustomShowMap = $param["CustomShowMap"];
        }

        if (array_key_exists("CustomerData",$param) and $param["CustomerData"] !== null) {
            $this->CustomerData = $param["CustomerData"];
        }

        if (array_key_exists("NeedSignReview",$param) and $param["NeedSignReview"] !== null) {
            $this->NeedSignReview = $param["NeedSignReview"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("ApproverVerifyType",$param) and $param["ApproverVerifyType"] !== null) {
            $this->ApproverVerifyType = $param["ApproverVerifyType"];
        }

        if (array_key_exists("SignBeanTag",$param) and $param["SignBeanTag"] !== null) {
            $this->SignBeanTag = $param["SignBeanTag"];
        }
    }
}
