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
 * CreateConsoleLoginUrl请求参数结构体
 *
 * @method Agent getAgent() 获取应用信息
此接口Agent.AppId、Agent.ProxyOrganizationOpenId 和 Agent. ProxyOperator.OpenId 必填
 * @method void setAgent(Agent $Agent) 设置应用信息
此接口Agent.AppId、Agent.ProxyOrganizationOpenId 和 Agent. ProxyOperator.OpenId 必填
 * @method string getProxyOrganizationName() 获取渠道侧合作企业名称，最大长度64个字符
 * @method void setProxyOrganizationName(string $ProxyOrganizationName) 设置渠道侧合作企业名称，最大长度64个字符
 * @method string getProxyOperatorName() 获取渠道侧合作企业经办人的姓名，最大长度50个字符
 * @method void setProxyOperatorName(string $ProxyOperatorName) 设置渠道侧合作企业经办人的姓名，最大长度50个字符
 * @method string getModule() 获取控制台指定模块，文件/合同管理:"DOCUMENT"，模板管理:"TEMPLATE"，印章管理:"SEAL"，组织架构/人员:"OPERATOR"，空字符串："账号信息"
 * @method void setModule(string $Module) 设置控制台指定模块，文件/合同管理:"DOCUMENT"，模板管理:"TEMPLATE"，印章管理:"SEAL"，组织架构/人员:"OPERATOR"，空字符串："账号信息"
 * @method string getModuleId() 获取控制台指定模块Id
 * @method void setModuleId(string $ModuleId) 设置控制台指定模块Id
 * @method string getUniformSocialCreditCode() 获取渠道侧合作企业统一社会信用代码，最大长度200个字符
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) 设置渠道侧合作企业统一社会信用代码，最大长度200个字符
 * @method string getMenuStatus() 获取是否展示左侧菜单栏 是：ENABLE（默认） 否：DISABLE
 * @method void setMenuStatus(string $MenuStatus) 设置是否展示左侧菜单栏 是：ENABLE（默认） 否：DISABLE
 * @method UserInfo getOperator() 获取操作者的信息
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息
 */
class CreateConsoleLoginUrlRequest extends AbstractModel
{
    /**
     * @var Agent 应用信息
此接口Agent.AppId、Agent.ProxyOrganizationOpenId 和 Agent. ProxyOperator.OpenId 必填
     */
    public $Agent;

    /**
     * @var string 渠道侧合作企业名称，最大长度64个字符
     */
    public $ProxyOrganizationName;

    /**
     * @var string 渠道侧合作企业经办人的姓名，最大长度50个字符
     */
    public $ProxyOperatorName;

    /**
     * @var string 控制台指定模块，文件/合同管理:"DOCUMENT"，模板管理:"TEMPLATE"，印章管理:"SEAL"，组织架构/人员:"OPERATOR"，空字符串："账号信息"
     */
    public $Module;

    /**
     * @var string 控制台指定模块Id
     */
    public $ModuleId;

    /**
     * @var string 渠道侧合作企业统一社会信用代码，最大长度200个字符
     */
    public $UniformSocialCreditCode;

    /**
     * @var string 是否展示左侧菜单栏 是：ENABLE（默认） 否：DISABLE
     */
    public $MenuStatus;

    /**
     * @var UserInfo 操作者的信息
     */
    public $Operator;

    /**
     * @param Agent $Agent 应用信息
此接口Agent.AppId、Agent.ProxyOrganizationOpenId 和 Agent. ProxyOperator.OpenId 必填
     * @param string $ProxyOrganizationName 渠道侧合作企业名称，最大长度64个字符
     * @param string $ProxyOperatorName 渠道侧合作企业经办人的姓名，最大长度50个字符
     * @param string $Module 控制台指定模块，文件/合同管理:"DOCUMENT"，模板管理:"TEMPLATE"，印章管理:"SEAL"，组织架构/人员:"OPERATOR"，空字符串："账号信息"
     * @param string $ModuleId 控制台指定模块Id
     * @param string $UniformSocialCreditCode 渠道侧合作企业统一社会信用代码，最大长度200个字符
     * @param string $MenuStatus 是否展示左侧菜单栏 是：ENABLE（默认） 否：DISABLE
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

        if (array_key_exists("ProxyOrganizationName",$param) and $param["ProxyOrganizationName"] !== null) {
            $this->ProxyOrganizationName = $param["ProxyOrganizationName"];
        }

        if (array_key_exists("ProxyOperatorName",$param) and $param["ProxyOperatorName"] !== null) {
            $this->ProxyOperatorName = $param["ProxyOperatorName"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("UniformSocialCreditCode",$param) and $param["UniformSocialCreditCode"] !== null) {
            $this->UniformSocialCreditCode = $param["UniformSocialCreditCode"];
        }

        if (array_key_exists("MenuStatus",$param) and $param["MenuStatus"] !== null) {
            $this->MenuStatus = $param["MenuStatus"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
