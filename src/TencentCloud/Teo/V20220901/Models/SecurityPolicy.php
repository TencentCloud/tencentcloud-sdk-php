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
 * 安全策略配置
 *
 * @method CustomRules getCustomRules() 获取<p>自定义规则配置。</p>
 * @method void setCustomRules(CustomRules $CustomRules) 设置<p>自定义规则配置。</p>
 * @method ManagedRules getManagedRules() 获取<p>托管规则配置。</p>
 * @method void setManagedRules(ManagedRules $ManagedRules) 设置<p>托管规则配置。</p>
 * @method HttpDDoSProtection getHttpDDoSProtection() 获取<p>HTTP DDOS 防护配置。</p>
 * @method void setHttpDDoSProtection(HttpDDoSProtection $HttpDDoSProtection) 设置<p>HTTP DDOS 防护配置。</p>
 * @method RateLimitingRules getRateLimitingRules() 获取<p>速率限制规则配置。</p>
 * @method void setRateLimitingRules(RateLimitingRules $RateLimitingRules) 设置<p>速率限制规则配置。</p>
 * @method ExceptionRules getExceptionRules() 获取<p>例外规则配置。</p>
 * @method void setExceptionRules(ExceptionRules $ExceptionRules) 设置<p>例外规则配置。</p>
 * @method BotManagement getBotManagement() 获取<p>Bot 管理配置。</p>
 * @method void setBotManagement(BotManagement $BotManagement) 设置<p>Bot 管理配置。</p>
 * @method BotManagementLite getBotManagementLite() 获取<p>基础 Bot 管理配置。</p>
 * @method void setBotManagementLite(BotManagementLite $BotManagementLite) 设置<p>基础 Bot 管理配置。</p>
 * @method DefaultDenySecurityActionParameters getDefaultDenySecurityActionParameters() 获取<p>默认拦截动作配置。</p>
 * @method void setDefaultDenySecurityActionParameters(DefaultDenySecurityActionParameters $DefaultDenySecurityActionParameters) 设置<p>默认拦截动作配置。</p>
 * @method SecurityHeadersToOrigin getSecurityHeadersToOrigin() 获取<p>回源请求携带安全头部配置，配置生效后将携带对应 keyname 的请求头部回源。</p>
 * @method void setSecurityHeadersToOrigin(SecurityHeadersToOrigin $SecurityHeadersToOrigin) 设置<p>回源请求携带安全头部配置，配置生效后将携带对应 keyname 的请求头部回源。</p>
 */
class SecurityPolicy extends AbstractModel
{
    /**
     * @var CustomRules <p>自定义规则配置。</p>
     */
    public $CustomRules;

    /**
     * @var ManagedRules <p>托管规则配置。</p>
     */
    public $ManagedRules;

    /**
     * @var HttpDDoSProtection <p>HTTP DDOS 防护配置。</p>
     */
    public $HttpDDoSProtection;

    /**
     * @var RateLimitingRules <p>速率限制规则配置。</p>
     */
    public $RateLimitingRules;

    /**
     * @var ExceptionRules <p>例外规则配置。</p>
     */
    public $ExceptionRules;

    /**
     * @var BotManagement <p>Bot 管理配置。</p>
     */
    public $BotManagement;

    /**
     * @var BotManagementLite <p>基础 Bot 管理配置。</p>
     */
    public $BotManagementLite;

    /**
     * @var DefaultDenySecurityActionParameters <p>默认拦截动作配置。</p>
     */
    public $DefaultDenySecurityActionParameters;

    /**
     * @var SecurityHeadersToOrigin <p>回源请求携带安全头部配置，配置生效后将携带对应 keyname 的请求头部回源。</p>
     */
    public $SecurityHeadersToOrigin;

    /**
     * @param CustomRules $CustomRules <p>自定义规则配置。</p>
     * @param ManagedRules $ManagedRules <p>托管规则配置。</p>
     * @param HttpDDoSProtection $HttpDDoSProtection <p>HTTP DDOS 防护配置。</p>
     * @param RateLimitingRules $RateLimitingRules <p>速率限制规则配置。</p>
     * @param ExceptionRules $ExceptionRules <p>例外规则配置。</p>
     * @param BotManagement $BotManagement <p>Bot 管理配置。</p>
     * @param BotManagementLite $BotManagementLite <p>基础 Bot 管理配置。</p>
     * @param DefaultDenySecurityActionParameters $DefaultDenySecurityActionParameters <p>默认拦截动作配置。</p>
     * @param SecurityHeadersToOrigin $SecurityHeadersToOrigin <p>回源请求携带安全头部配置，配置生效后将携带对应 keyname 的请求头部回源。</p>
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
        if (array_key_exists("CustomRules",$param) and $param["CustomRules"] !== null) {
            $this->CustomRules = new CustomRules();
            $this->CustomRules->deserialize($param["CustomRules"]);
        }

        if (array_key_exists("ManagedRules",$param) and $param["ManagedRules"] !== null) {
            $this->ManagedRules = new ManagedRules();
            $this->ManagedRules->deserialize($param["ManagedRules"]);
        }

        if (array_key_exists("HttpDDoSProtection",$param) and $param["HttpDDoSProtection"] !== null) {
            $this->HttpDDoSProtection = new HttpDDoSProtection();
            $this->HttpDDoSProtection->deserialize($param["HttpDDoSProtection"]);
        }

        if (array_key_exists("RateLimitingRules",$param) and $param["RateLimitingRules"] !== null) {
            $this->RateLimitingRules = new RateLimitingRules();
            $this->RateLimitingRules->deserialize($param["RateLimitingRules"]);
        }

        if (array_key_exists("ExceptionRules",$param) and $param["ExceptionRules"] !== null) {
            $this->ExceptionRules = new ExceptionRules();
            $this->ExceptionRules->deserialize($param["ExceptionRules"]);
        }

        if (array_key_exists("BotManagement",$param) and $param["BotManagement"] !== null) {
            $this->BotManagement = new BotManagement();
            $this->BotManagement->deserialize($param["BotManagement"]);
        }

        if (array_key_exists("BotManagementLite",$param) and $param["BotManagementLite"] !== null) {
            $this->BotManagementLite = new BotManagementLite();
            $this->BotManagementLite->deserialize($param["BotManagementLite"]);
        }

        if (array_key_exists("DefaultDenySecurityActionParameters",$param) and $param["DefaultDenySecurityActionParameters"] !== null) {
            $this->DefaultDenySecurityActionParameters = new DefaultDenySecurityActionParameters();
            $this->DefaultDenySecurityActionParameters->deserialize($param["DefaultDenySecurityActionParameters"]);
        }

        if (array_key_exists("SecurityHeadersToOrigin",$param) and $param["SecurityHeadersToOrigin"] !== null) {
            $this->SecurityHeadersToOrigin = new SecurityHeadersToOrigin();
            $this->SecurityHeadersToOrigin->deserialize($param["SecurityHeadersToOrigin"]);
        }
    }
}
