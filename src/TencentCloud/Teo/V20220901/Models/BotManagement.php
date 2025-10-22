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
 * Web 安全的 BOT 规则结构。
 *
 * @method string getEnabled() 获取Bot 管理是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method void setEnabled(string $Enabled) 设置Bot 管理是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method BotManagementCustomRules getCustomRules() 获取Bot 管理的自定义规则，组合各类爬虫和请求行为特征，精准定义 Bot 并配置定制化处置方式。
 * @method void setCustomRules(BotManagementCustomRules $CustomRules) 设置Bot 管理的自定义规则，组合各类爬虫和请求行为特征，精准定义 Bot 并配置定制化处置方式。
 * @method BasicBotSettings getBasicBotSettings() 获取Bot 管理的基础配置，对策略关联的所有域名生效。可以通过 CustomRules 进行精细化定制。
 * @method void setBasicBotSettings(BasicBotSettings $BasicBotSettings) 设置Bot 管理的基础配置，对策略关联的所有域名生效。可以通过 CustomRules 进行精细化定制。
 * @method ClientAttestationRules getClientAttestationRules() 获取客户端认证规则的定义列表。该功能内测中，如需使用，请提工单。
 * @method void setClientAttestationRules(ClientAttestationRules $ClientAttestationRules) 设置客户端认证规则的定义列表。该功能内测中，如需使用，请提工单。
 * @method BrowserImpersonationDetection getBrowserImpersonationDetection() 获取配置浏览器伪造识别规则（原主动特征识别规则）。设置注入 JavaScript 的响应页面范围，浏览器校验选项，以及对非浏览器客户端的处置方式。
 * @method void setBrowserImpersonationDetection(BrowserImpersonationDetection $BrowserImpersonationDetection) 设置配置浏览器伪造识别规则（原主动特征识别规则）。设置注入 JavaScript 的响应页面范围，浏览器校验选项，以及对非浏览器客户端的处置方式。
 */
class BotManagement extends AbstractModel
{
    /**
     * @var string Bot 管理是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     */
    public $Enabled;

    /**
     * @var BotManagementCustomRules Bot 管理的自定义规则，组合各类爬虫和请求行为特征，精准定义 Bot 并配置定制化处置方式。
     */
    public $CustomRules;

    /**
     * @var BasicBotSettings Bot 管理的基础配置，对策略关联的所有域名生效。可以通过 CustomRules 进行精细化定制。
     */
    public $BasicBotSettings;

    /**
     * @var ClientAttestationRules 客户端认证规则的定义列表。该功能内测中，如需使用，请提工单。
     */
    public $ClientAttestationRules;

    /**
     * @var BrowserImpersonationDetection 配置浏览器伪造识别规则（原主动特征识别规则）。设置注入 JavaScript 的响应页面范围，浏览器校验选项，以及对非浏览器客户端的处置方式。
     */
    public $BrowserImpersonationDetection;

    /**
     * @param string $Enabled Bot 管理是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     * @param BotManagementCustomRules $CustomRules Bot 管理的自定义规则，组合各类爬虫和请求行为特征，精准定义 Bot 并配置定制化处置方式。
     * @param BasicBotSettings $BasicBotSettings Bot 管理的基础配置，对策略关联的所有域名生效。可以通过 CustomRules 进行精细化定制。
     * @param ClientAttestationRules $ClientAttestationRules 客户端认证规则的定义列表。该功能内测中，如需使用，请提工单。
     * @param BrowserImpersonationDetection $BrowserImpersonationDetection 配置浏览器伪造识别规则（原主动特征识别规则）。设置注入 JavaScript 的响应页面范围，浏览器校验选项，以及对非浏览器客户端的处置方式。
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("CustomRules",$param) and $param["CustomRules"] !== null) {
            $this->CustomRules = new BotManagementCustomRules();
            $this->CustomRules->deserialize($param["CustomRules"]);
        }

        if (array_key_exists("BasicBotSettings",$param) and $param["BasicBotSettings"] !== null) {
            $this->BasicBotSettings = new BasicBotSettings();
            $this->BasicBotSettings->deserialize($param["BasicBotSettings"]);
        }

        if (array_key_exists("ClientAttestationRules",$param) and $param["ClientAttestationRules"] !== null) {
            $this->ClientAttestationRules = new ClientAttestationRules();
            $this->ClientAttestationRules->deserialize($param["ClientAttestationRules"]);
        }

        if (array_key_exists("BrowserImpersonationDetection",$param) and $param["BrowserImpersonationDetection"] !== null) {
            $this->BrowserImpersonationDetection = new BrowserImpersonationDetection();
            $this->BrowserImpersonationDetection->deserialize($param["BrowserImpersonationDetection"]);
        }
    }
}
