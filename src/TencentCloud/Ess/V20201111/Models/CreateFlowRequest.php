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
 * CreateFlow请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
 * @method string getFlowName() 获取签署流程名称,最大长度200个字符
 * @method void setFlowName(string $FlowName) 设置签署流程名称,最大长度200个字符
 * @method array getApprovers() 获取签署流程参与者信息，最大限制50方
 * @method void setApprovers(array $Approvers) 设置签署流程参与者信息，最大限制50方
 * @method string getFlowType() 获取签署流程的类型(如销售合同/入职合同等)，最大长度200个字符
 * @method void setFlowType(string $FlowType) 设置签署流程的类型(如销售合同/入职合同等)，最大长度200个字符
 * @method string getClientToken() 获取客户端Token，保持接口幂等性,最大长度64个字符
 * @method void setClientToken(string $ClientToken) 设置客户端Token，保持接口幂等性,最大长度64个字符
 * @method string getRelatedFlowId() 获取暂未开放
 * @method void setRelatedFlowId(string $RelatedFlowId) 设置暂未开放
 * @method integer getDeadLine() 获取签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
 * @method void setDeadLine(integer $DeadLine) 设置签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
 * @method string getUserData() 获取用户自定义字段，回调的时候会进行透传，长度需要小于20480
 * @method void setUserData(string $UserData) 设置用户自定义字段，回调的时候会进行透传，长度需要小于20480
 * @method string getFlowDescription() 获取签署流程描述,最大长度1000个字符
 * @method void setFlowDescription(string $FlowDescription) 设置签署流程描述,最大长度1000个字符
 * @method boolean getUnordered() 获取发送类型：
true：无序签
false：有序签
注：默认为false（有序签），请和模板中的配置保持一致
 * @method void setUnordered(boolean $Unordered) 设置发送类型：
true：无序签
false：有序签
注：默认为false（有序签），请和模板中的配置保持一致
 * @method string getCustomShowMap() 获取合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
 * @method void setCustomShowMap(string $CustomShowMap) 设置合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
 * @method boolean getNeedSignReview() 获取发起方企业的签署人进行签署操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。
若设置为true，审核结果需通过接口 CreateFlowSignReview 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。

注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置发起方企业的签署人进行签署操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。
若设置为true，审核结果需通过接口 CreateFlowSignReview 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。

注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。
 * @method string getCallbackUrl() 获取暂未开放
 * @method void setCallbackUrl(string $CallbackUrl) 设置暂未开放
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method array getCcInfos() 获取被抄送人的信息列表。
注: 此功能为白名单功能，若有需要，请联系电子签客服开白使用。
 * @method void setCcInfos(array $CcInfos) 设置被抄送人的信息列表。
注: 此功能为白名单功能，若有需要，请联系电子签客服开白使用。
 */
class CreateFlowRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
     */
    public $Operator;

    /**
     * @var string 签署流程名称,最大长度200个字符
     */
    public $FlowName;

    /**
     * @var array 签署流程参与者信息，最大限制50方
     */
    public $Approvers;

    /**
     * @var string 签署流程的类型(如销售合同/入职合同等)，最大长度200个字符
     */
    public $FlowType;

    /**
     * @var string 客户端Token，保持接口幂等性,最大长度64个字符
     */
    public $ClientToken;

    /**
     * @var string 暂未开放
     */
    public $RelatedFlowId;

    /**
     * @var integer 签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
     */
    public $DeadLine;

    /**
     * @var string 用户自定义字段，回调的时候会进行透传，长度需要小于20480
     */
    public $UserData;

    /**
     * @var string 签署流程描述,最大长度1000个字符
     */
    public $FlowDescription;

    /**
     * @var boolean 发送类型：
true：无序签
false：有序签
注：默认为false（有序签），请和模板中的配置保持一致
     */
    public $Unordered;

    /**
     * @var string 合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
     */
    public $CustomShowMap;

    /**
     * @var boolean 发起方企业的签署人进行签署操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。
若设置为true，审核结果需通过接口 CreateFlowSignReview 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。

注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。
     */
    public $NeedSignReview;

    /**
     * @var string 暂未开放
     */
    public $CallbackUrl;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    public $Agent;

    /**
     * @var array 被抄送人的信息列表。
注: 此功能为白名单功能，若有需要，请联系电子签客服开白使用。
     */
    public $CcInfos;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
     * @param string $FlowName 签署流程名称,最大长度200个字符
     * @param array $Approvers 签署流程参与者信息，最大限制50方
     * @param string $FlowType 签署流程的类型(如销售合同/入职合同等)，最大长度200个字符
     * @param string $ClientToken 客户端Token，保持接口幂等性,最大长度64个字符
     * @param string $RelatedFlowId 暂未开放
     * @param integer $DeadLine 签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
     * @param string $UserData 用户自定义字段，回调的时候会进行透传，长度需要小于20480
     * @param string $FlowDescription 签署流程描述,最大长度1000个字符
     * @param boolean $Unordered 发送类型：
true：无序签
false：有序签
注：默认为false（有序签），请和模板中的配置保持一致
     * @param string $CustomShowMap 合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
     * @param boolean $NeedSignReview 发起方企业的签署人进行签署操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。
若设置为true，审核结果需通过接口 CreateFlowSignReview 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。

注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。
     * @param string $CallbackUrl 暂未开放
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     * @param array $CcInfos 被抄送人的信息列表。
注: 此功能为白名单功能，若有需要，请联系电子签客服开白使用。
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

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new FlowCreateApprover();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("RelatedFlowId",$param) and $param["RelatedFlowId"] !== null) {
            $this->RelatedFlowId = $param["RelatedFlowId"];
        }

        if (array_key_exists("DeadLine",$param) and $param["DeadLine"] !== null) {
            $this->DeadLine = $param["DeadLine"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("CustomShowMap",$param) and $param["CustomShowMap"] !== null) {
            $this->CustomShowMap = $param["CustomShowMap"];
        }

        if (array_key_exists("NeedSignReview",$param) and $param["NeedSignReview"] !== null) {
            $this->NeedSignReview = $param["NeedSignReview"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("CcInfos",$param) and $param["CcInfos"] !== null) {
            $this->CcInfos = [];
            foreach ($param["CcInfos"] as $key => $value){
                $obj = new CcInfo();
                $obj->deserialize($value);
                array_push($this->CcInfos, $obj);
            }
        }
    }
}
