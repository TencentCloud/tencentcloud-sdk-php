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
 * OperateTemplate请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（模板的归属企业）</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （操作人）</li>
</ul>
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（模板的归属企业）</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （操作人）</li>
</ul>
 * @method string getTemplateId() 获取模板ID，为32位字符串。
 * @method void setTemplateId(string $TemplateId) 设置模板ID，为32位字符串。
 * @method string getOperateType() 获取操作类型，可取值如下:
<ul>
<li>DELETE:  删除</li>
<li>ENABLE: 启用</li>
<li>DISABLE: 停用</li>
</ul>
 * @method void setOperateType(string $OperateType) 设置操作类型，可取值如下:
<ul>
<li>DELETE:  删除</li>
<li>ENABLE: 启用</li>
<li>DISABLE: 停用</li>
</ul>
 */
class OperateTemplateRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（模板的归属企业）</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （操作人）</li>
</ul>
     */
    public $Agent;

    /**
     * @var string 模板ID，为32位字符串。
     */
    public $TemplateId;

    /**
     * @var string 操作类型，可取值如下:
<ul>
<li>DELETE:  删除</li>
<li>ENABLE: 启用</li>
<li>DISABLE: 停用</li>
</ul>
     */
    public $OperateType;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（模板的归属企业）</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （操作人）</li>
</ul>
     * @param string $TemplateId 模板ID，为32位字符串。
     * @param string $OperateType 操作类型，可取值如下:
<ul>
<li>DELETE:  删除</li>
<li>ENABLE: 启用</li>
<li>DISABLE: 停用</li>
</ul>
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("OperateType",$param) and $param["OperateType"] !== null) {
            $this->OperateType = $param["OperateType"];
        }
    }
}
