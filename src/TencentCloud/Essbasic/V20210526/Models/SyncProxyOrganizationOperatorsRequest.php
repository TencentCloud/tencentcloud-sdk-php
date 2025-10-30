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
 * SyncProxyOrganizationOperators请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
</ul>
第三方平台子客企业必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
</ul>
第三方平台子客企业必须已经经过实名认证
 * @method string getOperatorType() 获取操作类型，对应的操作
<ul><li> **CREATE** :新增员工</li>
<li> **UPDATE** :修改员工（仅支持修改未实名员工的信息，如果已经实名并加入企业的员工基础信息修改需要到小程序中进行）</li>
<li> **RESIGN** :离职员工</li></ul>
 * @method void setOperatorType(string $OperatorType) 设置操作类型，对应的操作
<ul><li> **CREATE** :新增员工</li>
<li> **UPDATE** :修改员工（仅支持修改未实名员工的信息，如果已经实名并加入企业的员工基础信息修改需要到小程序中进行）</li>
<li> **RESIGN** :离职员工</li></ul>
 * @method array getProxyOrganizationOperators() 获取员工信息列表，最多支持200个
 * @method void setProxyOrganizationOperators(array $ProxyOrganizationOperators) 设置员工信息列表，最多支持200个
 * @method UserInfo getOperator() 获取暂未开放
 * @method void setOperator(UserInfo $Operator) 设置暂未开放
 */
class SyncProxyOrganizationOperatorsRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
</ul>
第三方平台子客企业必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var string 操作类型，对应的操作
<ul><li> **CREATE** :新增员工</li>
<li> **UPDATE** :修改员工（仅支持修改未实名员工的信息，如果已经实名并加入企业的员工基础信息修改需要到小程序中进行）</li>
<li> **RESIGN** :离职员工</li></ul>
     */
    public $OperatorType;

    /**
     * @var array 员工信息列表，最多支持200个
     */
    public $ProxyOrganizationOperators;

    /**
     * @var UserInfo 暂未开放
     * @deprecated
     */
    public $Operator;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
</ul>
第三方平台子客企业必须已经经过实名认证
     * @param string $OperatorType 操作类型，对应的操作
<ul><li> **CREATE** :新增员工</li>
<li> **UPDATE** :修改员工（仅支持修改未实名员工的信息，如果已经实名并加入企业的员工基础信息修改需要到小程序中进行）</li>
<li> **RESIGN** :离职员工</li></ul>
     * @param array $ProxyOrganizationOperators 员工信息列表，最多支持200个
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

        if (array_key_exists("OperatorType",$param) and $param["OperatorType"] !== null) {
            $this->OperatorType = $param["OperatorType"];
        }

        if (array_key_exists("ProxyOrganizationOperators",$param) and $param["ProxyOrganizationOperators"] !== null) {
            $this->ProxyOrganizationOperators = [];
            foreach ($param["ProxyOrganizationOperators"] as $key => $value){
                $obj = new ProxyOrganizationOperator();
                $obj->deserialize($value);
                array_push($this->ProxyOrganizationOperators, $obj);
            }
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
