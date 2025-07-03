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
 * DescribeExtendedServiceAuthInfos请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getExtendServiceType() 获取要查询的扩展服务类型。
默认为空，即查询当前支持的所有扩展服务信息。
若需查询单个扩展服务的开通情况，请传递相应的值，如下所示：
<ul><li>OPEN_SERVER_SIGN：企业自动签署</li>
<li>AUTO_SIGN_CAN_FILL_IN：本企业自动签合同支持签前内容补充</li>
<li>BATCH_SIGN：批量签署</li>
<li>OVERSEA_SIGN：企业与港澳台居民签署合同</li>
<li>AGE_LIMIT_EXPANSION：拓宽签署方年龄限制</li>
<li>MOBILE_CHECK_APPROVER：个人签署方仅校验手机号</li>
<li>HIDE_OPERATOR_DISPLAY：隐藏合同经办人姓名</li>
<li>ORGANIZATION_OCR_FALLBACK：正楷临摹签名失败后更换其他签名类型</li>
<li>ORGANIZATION_FLOW_NOTIFY_TYPE：短信通知签署方</li>
<li>ORGANIZATION_FLOW_EMAIL_NOTIFY：邮件通知签署方</li>
<li>FLOW_APPROVAL：合同审批强制开启</li>
<li>ORGANIZATION_FLOW_PASSWD_NOTIFY：签署密码开通引导</li>
<li>HIDE_ONE_KEY_SIGN：个人签署方手写签名时需逐个手写</li>
<li>SIGN_SIGNATURE_DEFAULT_SET_HANDWRITE：个人签署方手动签名</li>
<li>APP_LOGIN：限制企业员工小程序端登录</li>
<li>PC_LOGIN：限制企业员工网页端登录</li>
</ul>
 * @method void setExtendServiceType(string $ExtendServiceType) 设置要查询的扩展服务类型。
默认为空，即查询当前支持的所有扩展服务信息。
若需查询单个扩展服务的开通情况，请传递相应的值，如下所示：
<ul><li>OPEN_SERVER_SIGN：企业自动签署</li>
<li>AUTO_SIGN_CAN_FILL_IN：本企业自动签合同支持签前内容补充</li>
<li>BATCH_SIGN：批量签署</li>
<li>OVERSEA_SIGN：企业与港澳台居民签署合同</li>
<li>AGE_LIMIT_EXPANSION：拓宽签署方年龄限制</li>
<li>MOBILE_CHECK_APPROVER：个人签署方仅校验手机号</li>
<li>HIDE_OPERATOR_DISPLAY：隐藏合同经办人姓名</li>
<li>ORGANIZATION_OCR_FALLBACK：正楷临摹签名失败后更换其他签名类型</li>
<li>ORGANIZATION_FLOW_NOTIFY_TYPE：短信通知签署方</li>
<li>ORGANIZATION_FLOW_EMAIL_NOTIFY：邮件通知签署方</li>
<li>FLOW_APPROVAL：合同审批强制开启</li>
<li>ORGANIZATION_FLOW_PASSWD_NOTIFY：签署密码开通引导</li>
<li>HIDE_ONE_KEY_SIGN：个人签署方手写签名时需逐个手写</li>
<li>SIGN_SIGNATURE_DEFAULT_SET_HANDWRITE：个人签署方手动签名</li>
<li>APP_LOGIN：限制企业员工小程序端登录</li>
<li>PC_LOGIN：限制企业员工网页端登录</li>
</ul>
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 */
class DescribeExtendedServiceAuthInfosRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 要查询的扩展服务类型。
默认为空，即查询当前支持的所有扩展服务信息。
若需查询单个扩展服务的开通情况，请传递相应的值，如下所示：
<ul><li>OPEN_SERVER_SIGN：企业自动签署</li>
<li>AUTO_SIGN_CAN_FILL_IN：本企业自动签合同支持签前内容补充</li>
<li>BATCH_SIGN：批量签署</li>
<li>OVERSEA_SIGN：企业与港澳台居民签署合同</li>
<li>AGE_LIMIT_EXPANSION：拓宽签署方年龄限制</li>
<li>MOBILE_CHECK_APPROVER：个人签署方仅校验手机号</li>
<li>HIDE_OPERATOR_DISPLAY：隐藏合同经办人姓名</li>
<li>ORGANIZATION_OCR_FALLBACK：正楷临摹签名失败后更换其他签名类型</li>
<li>ORGANIZATION_FLOW_NOTIFY_TYPE：短信通知签署方</li>
<li>ORGANIZATION_FLOW_EMAIL_NOTIFY：邮件通知签署方</li>
<li>FLOW_APPROVAL：合同审批强制开启</li>
<li>ORGANIZATION_FLOW_PASSWD_NOTIFY：签署密码开通引导</li>
<li>HIDE_ONE_KEY_SIGN：个人签署方手写签名时需逐个手写</li>
<li>SIGN_SIGNATURE_DEFAULT_SET_HANDWRITE：个人签署方手动签名</li>
<li>APP_LOGIN：限制企业员工小程序端登录</li>
<li>PC_LOGIN：限制企业员工网页端登录</li>
</ul>
     */
    public $ExtendServiceType;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $ExtendServiceType 要查询的扩展服务类型。
默认为空，即查询当前支持的所有扩展服务信息。
若需查询单个扩展服务的开通情况，请传递相应的值，如下所示：
<ul><li>OPEN_SERVER_SIGN：企业自动签署</li>
<li>AUTO_SIGN_CAN_FILL_IN：本企业自动签合同支持签前内容补充</li>
<li>BATCH_SIGN：批量签署</li>
<li>OVERSEA_SIGN：企业与港澳台居民签署合同</li>
<li>AGE_LIMIT_EXPANSION：拓宽签署方年龄限制</li>
<li>MOBILE_CHECK_APPROVER：个人签署方仅校验手机号</li>
<li>HIDE_OPERATOR_DISPLAY：隐藏合同经办人姓名</li>
<li>ORGANIZATION_OCR_FALLBACK：正楷临摹签名失败后更换其他签名类型</li>
<li>ORGANIZATION_FLOW_NOTIFY_TYPE：短信通知签署方</li>
<li>ORGANIZATION_FLOW_EMAIL_NOTIFY：邮件通知签署方</li>
<li>FLOW_APPROVAL：合同审批强制开启</li>
<li>ORGANIZATION_FLOW_PASSWD_NOTIFY：签署密码开通引导</li>
<li>HIDE_ONE_KEY_SIGN：个人签署方手写签名时需逐个手写</li>
<li>SIGN_SIGNATURE_DEFAULT_SET_HANDWRITE：个人签署方手动签名</li>
<li>APP_LOGIN：限制企业员工小程序端登录</li>
<li>PC_LOGIN：限制企业员工网页端登录</li>
</ul>
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
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

        if (array_key_exists("ExtendServiceType",$param) and $param["ExtendServiceType"] !== null) {
            $this->ExtendServiceType = $param["ExtendServiceType"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
