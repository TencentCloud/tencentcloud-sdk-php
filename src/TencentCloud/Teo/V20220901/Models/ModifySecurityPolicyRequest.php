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
 * ModifySecurityPolicy请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method SecurityConfig getSecurityConfig() 获取安全策略配置。<li>当 SecurityPolicy 参数中的 ExceptionRules 被设置时，SecurityConfig 参数中的 ExceptConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 CustomRules 被设置时，SecurityConfig 参数中的 AclConfig、 IpTableConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 HttpDDoSProtection 和 RateLimitingRules 被设置时，SecurityConfig 参数中的 RateLimitConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 ManagedRule 被设置时，SecurityConfig 参数中的 WafConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 BotManagement 被设置时，SecurityConfig 参数中的 BotConfig 将被忽略；</li><li>对于例外规则、自定义规则、速率限制、托管规则以及 Bot 管理策略配置建议使用 SecurityPolicy 参数进行设置。</li>
 * @method void setSecurityConfig(SecurityConfig $SecurityConfig) 设置安全策略配置。<li>当 SecurityPolicy 参数中的 ExceptionRules 被设置时，SecurityConfig 参数中的 ExceptConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 CustomRules 被设置时，SecurityConfig 参数中的 AclConfig、 IpTableConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 HttpDDoSProtection 和 RateLimitingRules 被设置时，SecurityConfig 参数中的 RateLimitConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 ManagedRule 被设置时，SecurityConfig 参数中的 WafConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 BotManagement 被设置时，SecurityConfig 参数中的 BotConfig 将被忽略；</li><li>对于例外规则、自定义规则、速率限制、托管规则以及 Bot 管理策略配置建议使用 SecurityPolicy 参数进行设置。</li>
 * @method SecurityPolicy getSecurityPolicy() 获取安全策略配置。对 Web 例外规则、防护自定义策略、速率规则、托管规则和 Bot 管理配置建议使用，支持表达式语法对安全策略进行配置。
 * @method void setSecurityPolicy(SecurityPolicy $SecurityPolicy) 设置安全策略配置。对 Web 例外规则、防护自定义策略、速率规则、托管规则和 Bot 管理配置建议使用，支持表达式语法对安全策略进行配置。
 * @method string getEntity() 获取安全策略类型，可使用以下参数值： <li>ZoneDefaultPolicy：用于指定站点级策略；</li><li>Template：用于指定策略模板，需要同时指定 TemplateId 参数；</li><li>Host：用于指定域名级策略（注意：当使用域名来指定域名服务策略时，仅支持已经应用了域名级策略的域名服务或者策略模板）。</li>
 * @method void setEntity(string $Entity) 设置安全策略类型，可使用以下参数值： <li>ZoneDefaultPolicy：用于指定站点级策略；</li><li>Template：用于指定策略模板，需要同时指定 TemplateId 参数；</li><li>Host：用于指定域名级策略（注意：当使用域名来指定域名服务策略时，仅支持已经应用了域名级策略的域名服务或者策略模板）。</li>
 * @method string getHost() 获取指定域名。当 Entity 参数值为 Host 时，使用本参数指定的域名级策略，例如：使用 www.example.com ，配置该域名的域名级策略。
 * @method void setHost(string $Host) 设置指定域名。当 Entity 参数值为 Host 时，使用本参数指定的域名级策略，例如：使用 www.example.com ，配置该域名的域名级策略。
 * @method string getTemplateId() 获取指定策略模板 ID。当 Entity 参数值为 Template 时，使用本参数指定策略模板的 ID。
 * @method void setTemplateId(string $TemplateId) 设置指定策略模板 ID。当 Entity 参数值为 Template 时，使用本参数指定策略模板的 ID。
 */
class ModifySecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var SecurityConfig 安全策略配置。<li>当 SecurityPolicy 参数中的 ExceptionRules 被设置时，SecurityConfig 参数中的 ExceptConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 CustomRules 被设置时，SecurityConfig 参数中的 AclConfig、 IpTableConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 HttpDDoSProtection 和 RateLimitingRules 被设置时，SecurityConfig 参数中的 RateLimitConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 ManagedRule 被设置时，SecurityConfig 参数中的 WafConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 BotManagement 被设置时，SecurityConfig 参数中的 BotConfig 将被忽略；</li><li>对于例外规则、自定义规则、速率限制、托管规则以及 Bot 管理策略配置建议使用 SecurityPolicy 参数进行设置。</li>
     */
    public $SecurityConfig;

    /**
     * @var SecurityPolicy 安全策略配置。对 Web 例外规则、防护自定义策略、速率规则、托管规则和 Bot 管理配置建议使用，支持表达式语法对安全策略进行配置。
     */
    public $SecurityPolicy;

    /**
     * @var string 安全策略类型，可使用以下参数值： <li>ZoneDefaultPolicy：用于指定站点级策略；</li><li>Template：用于指定策略模板，需要同时指定 TemplateId 参数；</li><li>Host：用于指定域名级策略（注意：当使用域名来指定域名服务策略时，仅支持已经应用了域名级策略的域名服务或者策略模板）。</li>
     */
    public $Entity;

    /**
     * @var string 指定域名。当 Entity 参数值为 Host 时，使用本参数指定的域名级策略，例如：使用 www.example.com ，配置该域名的域名级策略。
     */
    public $Host;

    /**
     * @var string 指定策略模板 ID。当 Entity 参数值为 Template 时，使用本参数指定策略模板的 ID。
     */
    public $TemplateId;

    /**
     * @param string $ZoneId 站点 ID。
     * @param SecurityConfig $SecurityConfig 安全策略配置。<li>当 SecurityPolicy 参数中的 ExceptionRules 被设置时，SecurityConfig 参数中的 ExceptConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 CustomRules 被设置时，SecurityConfig 参数中的 AclConfig、 IpTableConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 HttpDDoSProtection 和 RateLimitingRules 被设置时，SecurityConfig 参数中的 RateLimitConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 ManagedRule 被设置时，SecurityConfig 参数中的 WafConfig 将被忽略；</li><li>当 SecurityPolicy 参数中的 BotManagement 被设置时，SecurityConfig 参数中的 BotConfig 将被忽略；</li><li>对于例外规则、自定义规则、速率限制、托管规则以及 Bot 管理策略配置建议使用 SecurityPolicy 参数进行设置。</li>
     * @param SecurityPolicy $SecurityPolicy 安全策略配置。对 Web 例外规则、防护自定义策略、速率规则、托管规则和 Bot 管理配置建议使用，支持表达式语法对安全策略进行配置。
     * @param string $Entity 安全策略类型，可使用以下参数值： <li>ZoneDefaultPolicy：用于指定站点级策略；</li><li>Template：用于指定策略模板，需要同时指定 TemplateId 参数；</li><li>Host：用于指定域名级策略（注意：当使用域名来指定域名服务策略时，仅支持已经应用了域名级策略的域名服务或者策略模板）。</li>
     * @param string $Host 指定域名。当 Entity 参数值为 Host 时，使用本参数指定的域名级策略，例如：使用 www.example.com ，配置该域名的域名级策略。
     * @param string $TemplateId 指定策略模板 ID。当 Entity 参数值为 Template 时，使用本参数指定策略模板的 ID。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("SecurityConfig",$param) and $param["SecurityConfig"] !== null) {
            $this->SecurityConfig = new SecurityConfig();
            $this->SecurityConfig->deserialize($param["SecurityConfig"]);
        }

        if (array_key_exists("SecurityPolicy",$param) and $param["SecurityPolicy"] !== null) {
            $this->SecurityPolicy = new SecurityPolicy();
            $this->SecurityPolicy->deserialize($param["SecurityPolicy"]);
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
