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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名级策略。
 *
 * @method string getHost() 获取<p>站点级策略，针对站点下所有域名生效的策略，详情见 站点级策略。</p>
 * @method void setHost(string $Host) 设置<p>站点级策略，针对站点下所有域名生效的策略，详情见 站点级策略。</p>
 * @method string getPolicyType() 获取<p>当前域名使用的策略类型。取值有：<li>ZoneDefault：使用站点级策略，即 ZoneDefaultPolicy 中定义的策略配置。</li><li>Custom：使用域名级策略。使用该选项时，必须同时配置 Policy 字段，指定详细策略配置。</li><li>Template：使用策略模板。使用该选项时，必须同时配置 TemplateId 字段，指定当前域名使用的策略模板。</li></p>
 * @method void setPolicyType(string $PolicyType) 设置<p>当前域名使用的策略类型。取值有：<li>ZoneDefault：使用站点级策略，即 ZoneDefaultPolicy 中定义的策略配置。</li><li>Custom：使用域名级策略。使用该选项时，必须同时配置 Policy 字段，指定详细策略配置。</li><li>Template：使用策略模板。使用该选项时，必须同时配置 TemplateId 字段，指定当前域名使用的策略模板。</li></p>
 * @method SecurityPolicy getPolicy() 获取<p>可选。当 PolicyType 为 Custom 时，该字段为当前域名的详细策略配置，对当前域名生效。</p>
 * @method void setPolicy(SecurityPolicy $Policy) 设置<p>可选。当 PolicyType 为 Custom 时，该字段为当前域名的详细策略配置，对当前域名生效。</p>
 * @method string getTemplateId() 获取<p>可选。当 PolicyType 为 Template 时，该字段用于指定当前域名所使用的策略模板的 Id。</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>可选。当 PolicyType 为 Template 时，该字段用于指定当前域名所使用的策略模板的 Id。</p>
 */
class HostPolicy extends AbstractModel
{
    /**
     * @var string <p>站点级策略，针对站点下所有域名生效的策略，详情见 站点级策略。</p>
     */
    public $Host;

    /**
     * @var string <p>当前域名使用的策略类型。取值有：<li>ZoneDefault：使用站点级策略，即 ZoneDefaultPolicy 中定义的策略配置。</li><li>Custom：使用域名级策略。使用该选项时，必须同时配置 Policy 字段，指定详细策略配置。</li><li>Template：使用策略模板。使用该选项时，必须同时配置 TemplateId 字段，指定当前域名使用的策略模板。</li></p>
     */
    public $PolicyType;

    /**
     * @var SecurityPolicy <p>可选。当 PolicyType 为 Custom 时，该字段为当前域名的详细策略配置，对当前域名生效。</p>
     */
    public $Policy;

    /**
     * @var string <p>可选。当 PolicyType 为 Template 时，该字段用于指定当前域名所使用的策略模板的 Id。</p>
     */
    public $TemplateId;

    /**
     * @param string $Host <p>站点级策略，针对站点下所有域名生效的策略，详情见 站点级策略。</p>
     * @param string $PolicyType <p>当前域名使用的策略类型。取值有：<li>ZoneDefault：使用站点级策略，即 ZoneDefaultPolicy 中定义的策略配置。</li><li>Custom：使用域名级策略。使用该选项时，必须同时配置 Policy 字段，指定详细策略配置。</li><li>Template：使用策略模板。使用该选项时，必须同时配置 TemplateId 字段，指定当前域名使用的策略模板。</li></p>
     * @param SecurityPolicy $Policy <p>可选。当 PolicyType 为 Custom 时，该字段为当前域名的详细策略配置，对当前域名生效。</p>
     * @param string $TemplateId <p>可选。当 PolicyType 为 Template 时，该字段用于指定当前域名所使用的策略模板的 Id。</p>
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = new SecurityPolicy();
            $this->Policy->deserialize($param["Policy"]);
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
