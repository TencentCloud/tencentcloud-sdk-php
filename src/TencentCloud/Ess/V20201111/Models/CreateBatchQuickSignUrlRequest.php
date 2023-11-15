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
 * CreateBatchQuickSignUrl请求参数结构体
 *
 * @method array getFlowIds() 获取批量签署的合同流程ID数组。
注: `在调用此接口时，请确保合同流程均为本企业发起，且合同数量不超过100个。`
 * @method void setFlowIds(array $FlowIds) 设置批量签署的合同流程ID数组。
注: `在调用此接口时，请确保合同流程均为本企业发起，且合同数量不超过100个。`
 * @method FlowCreateApprover getFlowApproverInfo() 获取批量签署的流程签署人，其中姓名(ApproverName)、参与人类型(ApproverType)必传，手机号(ApproverMobile)和证件信息(ApproverIdCardType、ApproverIdCardNumber)可任选一种或全部传入。
注:
`1. ApproverType目前只支持个人类型的签署人。`
`2. 签署人只能有手写签名和时间类型的签署控件，其他类型的填写控件和签署控件暂时都未支持。`
`3. 当需要通过短信验证码签署时，手机号ApproverMobile需要与发起合同时填写的用户手机号一致。`
 * @method void setFlowApproverInfo(FlowCreateApprover $FlowApproverInfo) 设置批量签署的流程签署人，其中姓名(ApproverName)、参与人类型(ApproverType)必传，手机号(ApproverMobile)和证件信息(ApproverIdCardType、ApproverIdCardNumber)可任选一种或全部传入。
注:
`1. ApproverType目前只支持个人类型的签署人。`
`2. 签署人只能有手写签名和时间类型的签署控件，其他类型的填写控件和签署控件暂时都未支持。`
`3. 当需要通过短信验证码签署时，手机号ApproverMobile需要与发起合同时填写的用户手机号一致。`
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId(子企业的组织ID)为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId(子企业的组织ID)为必填项。
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getJumpUrl() 获取签署完之后的H5页面的跳转链接，此链接及支持http://和https://，最大长度1000个字符。(建议https协议)
 * @method void setJumpUrl(string $JumpUrl) 设置签署完之后的H5页面的跳转链接，此链接及支持http://和https://，最大长度1000个字符。(建议https协议)
 * @method array getSignatureTypes() 获取指定批量签署合同的签名类型，可传递以下值：
<ul><li>**0**：手写签名(默认)</li>
<li>**1**：OCR楷体</li></ul>
注：
<ul><li>默认情况下，签名类型为手写签名</li>
<li>您可以传递多种值，表示可用多种签名类型。</li></ul>
 * @method void setSignatureTypes(array $SignatureTypes) 设置指定批量签署合同的签名类型，可传递以下值：
<ul><li>**0**：手写签名(默认)</li>
<li>**1**：OCR楷体</li></ul>
注：
<ul><li>默认情况下，签名类型为手写签名</li>
<li>您可以传递多种值，表示可用多种签名类型。</li></ul>
 * @method array getApproverSignTypes() 获取指定批量签署合同的认证校验方式，可传递以下值：
<ul><li>**1**：人脸认证(默认)，需进行人脸识别成功后才能签署合同</li>
<li>**2**：密码认证(默认)，需校验成功后才能签署合同</li>
<li>**3**：运营商三要素，需到运营商处比对手机号实名信息(名字、手机号、证件号)校验一致才能成功进行合同签署。</li></ul>
注：
<ul><li>默认情况下，认证校验方式为人脸和密码认证</li>
<li>您可以传递多种值，表示可用多种认证校验方式。</li></ul>
 * @method void setApproverSignTypes(array $ApproverSignTypes) 设置指定批量签署合同的认证校验方式，可传递以下值：
<ul><li>**1**：人脸认证(默认)，需进行人脸识别成功后才能签署合同</li>
<li>**2**：密码认证(默认)，需校验成功后才能签署合同</li>
<li>**3**：运营商三要素，需到运营商处比对手机号实名信息(名字、手机号、证件号)校验一致才能成功进行合同签署。</li></ul>
注：
<ul><li>默认情况下，认证校验方式为人脸和密码认证</li>
<li>您可以传递多种值，表示可用多种认证校验方式。</li></ul>
 */
class CreateBatchQuickSignUrlRequest extends AbstractModel
{
    /**
     * @var array 批量签署的合同流程ID数组。
注: `在调用此接口时，请确保合同流程均为本企业发起，且合同数量不超过100个。`
     */
    public $FlowIds;

    /**
     * @var FlowCreateApprover 批量签署的流程签署人，其中姓名(ApproverName)、参与人类型(ApproverType)必传，手机号(ApproverMobile)和证件信息(ApproverIdCardType、ApproverIdCardNumber)可任选一种或全部传入。
注:
`1. ApproverType目前只支持个人类型的签署人。`
`2. 签署人只能有手写签名和时间类型的签署控件，其他类型的填写控件和签署控件暂时都未支持。`
`3. 当需要通过短信验证码签署时，手机号ApproverMobile需要与发起合同时填写的用户手机号一致。`
     */
    public $FlowApproverInfo;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId(子企业的组织ID)为必填项。
     */
    public $Agent;

    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 签署完之后的H5页面的跳转链接，此链接及支持http://和https://，最大长度1000个字符。(建议https协议)
     */
    public $JumpUrl;

    /**
     * @var array 指定批量签署合同的签名类型，可传递以下值：
<ul><li>**0**：手写签名(默认)</li>
<li>**1**：OCR楷体</li></ul>
注：
<ul><li>默认情况下，签名类型为手写签名</li>
<li>您可以传递多种值，表示可用多种签名类型。</li></ul>
     */
    public $SignatureTypes;

    /**
     * @var array 指定批量签署合同的认证校验方式，可传递以下值：
<ul><li>**1**：人脸认证(默认)，需进行人脸识别成功后才能签署合同</li>
<li>**2**：密码认证(默认)，需校验成功后才能签署合同</li>
<li>**3**：运营商三要素，需到运营商处比对手机号实名信息(名字、手机号、证件号)校验一致才能成功进行合同签署。</li></ul>
注：
<ul><li>默认情况下，认证校验方式为人脸和密码认证</li>
<li>您可以传递多种值，表示可用多种认证校验方式。</li></ul>
     */
    public $ApproverSignTypes;

    /**
     * @param array $FlowIds 批量签署的合同流程ID数组。
注: `在调用此接口时，请确保合同流程均为本企业发起，且合同数量不超过100个。`
     * @param FlowCreateApprover $FlowApproverInfo 批量签署的流程签署人，其中姓名(ApproverName)、参与人类型(ApproverType)必传，手机号(ApproverMobile)和证件信息(ApproverIdCardType、ApproverIdCardNumber)可任选一种或全部传入。
注:
`1. ApproverType目前只支持个人类型的签署人。`
`2. 签署人只能有手写签名和时间类型的签署控件，其他类型的填写控件和签署控件暂时都未支持。`
`3. 当需要通过短信验证码签署时，手机号ApproverMobile需要与发起合同时填写的用户手机号一致。`
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId(子企业的组织ID)为必填项。
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $JumpUrl 签署完之后的H5页面的跳转链接，此链接及支持http://和https://，最大长度1000个字符。(建议https协议)
     * @param array $SignatureTypes 指定批量签署合同的签名类型，可传递以下值：
<ul><li>**0**：手写签名(默认)</li>
<li>**1**：OCR楷体</li></ul>
注：
<ul><li>默认情况下，签名类型为手写签名</li>
<li>您可以传递多种值，表示可用多种签名类型。</li></ul>
     * @param array $ApproverSignTypes 指定批量签署合同的认证校验方式，可传递以下值：
<ul><li>**1**：人脸认证(默认)，需进行人脸识别成功后才能签署合同</li>
<li>**2**：密码认证(默认)，需校验成功后才能签署合同</li>
<li>**3**：运营商三要素，需到运营商处比对手机号实名信息(名字、手机号、证件号)校验一致才能成功进行合同签署。</li></ul>
注：
<ul><li>默认情况下，认证校验方式为人脸和密码认证</li>
<li>您可以传递多种值，表示可用多种认证校验方式。</li></ul>
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
        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("FlowApproverInfo",$param) and $param["FlowApproverInfo"] !== null) {
            $this->FlowApproverInfo = new FlowCreateApprover();
            $this->FlowApproverInfo->deserialize($param["FlowApproverInfo"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("SignatureTypes",$param) and $param["SignatureTypes"] !== null) {
            $this->SignatureTypes = $param["SignatureTypes"];
        }

        if (array_key_exists("ApproverSignTypes",$param) and $param["ApproverSignTypes"] !== null) {
            $this->ApproverSignTypes = $param["ApproverSignTypes"];
        }
    }
}
