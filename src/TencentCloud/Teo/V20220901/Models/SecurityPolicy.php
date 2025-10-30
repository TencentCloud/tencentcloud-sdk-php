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
 * @method CustomRules getCustomRules() 获取自定义规则配置。
 * @method void setCustomRules(CustomRules $CustomRules) 设置自定义规则配置。
 * @method ManagedRules getManagedRules() 获取托管规则配置。
 * @method void setManagedRules(ManagedRules $ManagedRules) 设置托管规则配置。
 * @method HttpDDoSProtection getHttpDDoSProtection() 获取HTTP DDOS 防护配置。
 * @method void setHttpDDoSProtection(HttpDDoSProtection $HttpDDoSProtection) 设置HTTP DDOS 防护配置。
 * @method RateLimitingRules getRateLimitingRules() 获取速率限制规则配置。
 * @method void setRateLimitingRules(RateLimitingRules $RateLimitingRules) 设置速率限制规则配置。
 * @method ExceptionRules getExceptionRules() 获取例外规则配置。
 * @method void setExceptionRules(ExceptionRules $ExceptionRules) 设置例外规则配置。
 * @method BotManagement getBotManagement() 获取Bot 管理配置。
 * @method void setBotManagement(BotManagement $BotManagement) 设置Bot 管理配置。
 */
class SecurityPolicy extends AbstractModel
{
    /**
     * @var CustomRules 自定义规则配置。
     */
    public $CustomRules;

    /**
     * @var ManagedRules 托管规则配置。
     */
    public $ManagedRules;

    /**
     * @var HttpDDoSProtection HTTP DDOS 防护配置。
     */
    public $HttpDDoSProtection;

    /**
     * @var RateLimitingRules 速率限制规则配置。
     */
    public $RateLimitingRules;

    /**
     * @var ExceptionRules 例外规则配置。
     */
    public $ExceptionRules;

    /**
     * @var BotManagement Bot 管理配置。
     */
    public $BotManagement;

    /**
     * @param CustomRules $CustomRules 自定义规则配置。
     * @param ManagedRules $ManagedRules 托管规则配置。
     * @param HttpDDoSProtection $HttpDDoSProtection HTTP DDOS 防护配置。
     * @param RateLimitingRules $RateLimitingRules 速率限制规则配置。
     * @param ExceptionRules $ExceptionRules 例外规则配置。
     * @param BotManagement $BotManagement Bot 管理配置。
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
    }
}
