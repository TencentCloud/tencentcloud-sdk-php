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
 * CreateSignUrls请求参数结构体
 *
 * @method Agent getAgent() 获取渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method void setAgent(Agent $Agent) 设置渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method array getFlowIds() 获取签署流程编号数组，最多支持100个。(备注：该参数和合同组编号必须二选一)
 * @method void setFlowIds(array $FlowIds) 设置签署流程编号数组，最多支持100个。(备注：该参数和合同组编号必须二选一)
 * @method string getFlowGroupId() 获取合同组编号(备注：该参数和合同(流程)编号数组必须二选一)
 * @method void setFlowGroupId(string $FlowGroupId) 设置合同组编号(备注：该参数和合同(流程)编号数组必须二选一)
 * @method string getEndpoint() 获取签署链接类型：“WEIXINAPP”-短链直接跳小程序；“CHANNEL”-跳转H5页面；“APP”-第三方APP或小程序跳转电子签小程序；"LONGURL2WEIXINAPP"-长链接跳转小程序；默认“WEIXINAPP”类型，即跳转至小程序；
 * @method void setEndpoint(string $Endpoint) 设置签署链接类型：“WEIXINAPP”-短链直接跳小程序；“CHANNEL”-跳转H5页面；“APP”-第三方APP或小程序跳转电子签小程序；"LONGURL2WEIXINAPP"-长链接跳转小程序；默认“WEIXINAPP”类型，即跳转至小程序；
 * @method string getGenerateType() 获取签署链接生成类型，默认是 "ALL"；
"ALL"：全部签署方签署链接，此时不会给自动签署的签署方创建签署链接；
"CHANNEL"：渠道合作企业；
"NOT_CHANNEL"：非渠道合作企业；
"PERSON"：个人；
"FOLLOWER"：关注方，目前是合同抄送方；
 * @method void setGenerateType(string $GenerateType) 设置签署链接生成类型，默认是 "ALL"；
"ALL"：全部签署方签署链接，此时不会给自动签署的签署方创建签署链接；
"CHANNEL"：渠道合作企业；
"NOT_CHANNEL"：非渠道合作企业；
"PERSON"：个人；
"FOLLOWER"：关注方，目前是合同抄送方；
 * @method string getOrganizationName() 获取非渠道合作企业参与方的企业名称，GenerateType为"NOT_CHANNEL"时必填
 * @method void setOrganizationName(string $OrganizationName) 设置非渠道合作企业参与方的企业名称，GenerateType为"NOT_CHANNEL"时必填
 * @method string getName() 获取参与人姓名，GenerateType为"PERSON"时必填
 * @method void setName(string $Name) 设置参与人姓名，GenerateType为"PERSON"时必填
 * @method string getMobile() 获取参与人手机号；
GenerateType为"PERSON"或"FOLLOWER"时必填
 * @method void setMobile(string $Mobile) 设置参与人手机号；
GenerateType为"PERSON"或"FOLLOWER"时必填
 * @method string getOrganizationOpenId() 获取渠道合作企业的企业Id，GenerateType为"CHANNEL"时必填
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置渠道合作企业的企业Id，GenerateType为"CHANNEL"时必填
 * @method string getOpenId() 获取渠道合作企业参与人OpenId，GenerateType为"CHANNEL"时可用，指定到具体参与人
 * @method void setOpenId(string $OpenId) 设置渠道合作企业参与人OpenId，GenerateType为"CHANNEL"时可用，指定到具体参与人
 * @method boolean getAutoJumpBack() 获取Endpoint为"APP" 类型的签署链接，可以设置此值；支持调用方小程序打开签署链接，在电子签小程序完成签署后自动回跳至调用方小程序
 * @method void setAutoJumpBack(boolean $AutoJumpBack) 设置Endpoint为"APP" 类型的签署链接，可以设置此值；支持调用方小程序打开签署链接，在电子签小程序完成签署后自动回跳至调用方小程序
 * @method string getJumpUrl() 获取签署完之后的H5页面的跳转链接，针对Endpoint为CHANNEL时有效，最大长度1000个字符。
 * @method void setJumpUrl(string $JumpUrl) 设置签署完之后的H5页面的跳转链接，针对Endpoint为CHANNEL时有效，最大长度1000个字符。
 * @method UserInfo getOperator() 获取操作者的信息
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息
 */
class CreateSignUrlsRequest extends AbstractModel
{
    /**
     * @var Agent 渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     */
    public $Agent;

    /**
     * @var array 签署流程编号数组，最多支持100个。(备注：该参数和合同组编号必须二选一)
     */
    public $FlowIds;

    /**
     * @var string 合同组编号(备注：该参数和合同(流程)编号数组必须二选一)
     */
    public $FlowGroupId;

    /**
     * @var string 签署链接类型：“WEIXINAPP”-短链直接跳小程序；“CHANNEL”-跳转H5页面；“APP”-第三方APP或小程序跳转电子签小程序；"LONGURL2WEIXINAPP"-长链接跳转小程序；默认“WEIXINAPP”类型，即跳转至小程序；
     */
    public $Endpoint;

    /**
     * @var string 签署链接生成类型，默认是 "ALL"；
"ALL"：全部签署方签署链接，此时不会给自动签署的签署方创建签署链接；
"CHANNEL"：渠道合作企业；
"NOT_CHANNEL"：非渠道合作企业；
"PERSON"：个人；
"FOLLOWER"：关注方，目前是合同抄送方；
     */
    public $GenerateType;

    /**
     * @var string 非渠道合作企业参与方的企业名称，GenerateType为"NOT_CHANNEL"时必填
     */
    public $OrganizationName;

    /**
     * @var string 参与人姓名，GenerateType为"PERSON"时必填
     */
    public $Name;

    /**
     * @var string 参与人手机号；
GenerateType为"PERSON"或"FOLLOWER"时必填
     */
    public $Mobile;

    /**
     * @var string 渠道合作企业的企业Id，GenerateType为"CHANNEL"时必填
     */
    public $OrganizationOpenId;

    /**
     * @var string 渠道合作企业参与人OpenId，GenerateType为"CHANNEL"时可用，指定到具体参与人
     */
    public $OpenId;

    /**
     * @var boolean Endpoint为"APP" 类型的签署链接，可以设置此值；支持调用方小程序打开签署链接，在电子签小程序完成签署后自动回跳至调用方小程序
     */
    public $AutoJumpBack;

    /**
     * @var string 签署完之后的H5页面的跳转链接，针对Endpoint为CHANNEL时有效，最大长度1000个字符。
     */
    public $JumpUrl;

    /**
     * @var UserInfo 操作者的信息
     */
    public $Operator;

    /**
     * @param Agent $Agent 渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     * @param array $FlowIds 签署流程编号数组，最多支持100个。(备注：该参数和合同组编号必须二选一)
     * @param string $FlowGroupId 合同组编号(备注：该参数和合同(流程)编号数组必须二选一)
     * @param string $Endpoint 签署链接类型：“WEIXINAPP”-短链直接跳小程序；“CHANNEL”-跳转H5页面；“APP”-第三方APP或小程序跳转电子签小程序；"LONGURL2WEIXINAPP"-长链接跳转小程序；默认“WEIXINAPP”类型，即跳转至小程序；
     * @param string $GenerateType 签署链接生成类型，默认是 "ALL"；
"ALL"：全部签署方签署链接，此时不会给自动签署的签署方创建签署链接；
"CHANNEL"：渠道合作企业；
"NOT_CHANNEL"：非渠道合作企业；
"PERSON"：个人；
"FOLLOWER"：关注方，目前是合同抄送方；
     * @param string $OrganizationName 非渠道合作企业参与方的企业名称，GenerateType为"NOT_CHANNEL"时必填
     * @param string $Name 参与人姓名，GenerateType为"PERSON"时必填
     * @param string $Mobile 参与人手机号；
GenerateType为"PERSON"或"FOLLOWER"时必填
     * @param string $OrganizationOpenId 渠道合作企业的企业Id，GenerateType为"CHANNEL"时必填
     * @param string $OpenId 渠道合作企业参与人OpenId，GenerateType为"CHANNEL"时可用，指定到具体参与人
     * @param boolean $AutoJumpBack Endpoint为"APP" 类型的签署链接，可以设置此值；支持调用方小程序打开签署链接，在电子签小程序完成签署后自动回跳至调用方小程序
     * @param string $JumpUrl 签署完之后的H5页面的跳转链接，针对Endpoint为CHANNEL时有效，最大长度1000个字符。
     * @param UserInfo $Operator 操作者的信息
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

        if (array_key_exists("FlowGroupId",$param) and $param["FlowGroupId"] !== null) {
            $this->FlowGroupId = $param["FlowGroupId"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("AutoJumpBack",$param) and $param["AutoJumpBack"] !== null) {
            $this->AutoJumpBack = $param["AutoJumpBack"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
