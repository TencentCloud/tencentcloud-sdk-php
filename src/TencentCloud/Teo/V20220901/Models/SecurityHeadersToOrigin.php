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
 * 回源请求携带安全头部配置，配置生效后将携带对应 keyname 的请求头部回源。
 *
 * @method array getBotIdentificationHeaders() 获取<p>Bot 标识信息回源头部配置。</p><p>枚举值：</p><ul><li>EO-Bot-Botnet-ID： 基于 Bot 请求特征生成的识别标识。</li></ul>
 * @method void setBotIdentificationHeaders(array $BotIdentificationHeaders) 设置<p>Bot 标识信息回源头部配置。</p><p>枚举值：</p><ul><li>EO-Bot-Botnet-ID： 基于 Bot 请求特征生成的识别标识。</li></ul>
 * @method array getBotManagementHeaders() 获取<p>高级 Bot 管理模块识别结果回源头部配置。</p><p>枚举值：</p><ul><li>EO-Bot-Client-Attestation： 高级 Bot 管理 - 客户端认证模块认证票据校验结果；</li><li>EO-Bot-Client-Risk： 高级 Bot 管理 - 客户端认证模块设备风险评估结果；</li><li>EO-Bot-Intelligence： 高级 Bot 管理 - Bot 智能分析模块识别结果；</li><li>EO-Bot-IP-Reputation： 高级 Bot 管理 - 客户端画像分析识别结果；</li><li>EO-Bot-Known-Tool： 高级 Bot 管理 - 基础特征管理 - UA 特征规则模块识别结果；</li><li>EO-Bot-Search-Engine： 高级 Bot 管理 - 基础特征管理 - 搜索引擎规则模块识别结果；</li><li>EO-Bot-Source-IDC： 高级 Bot 管理 - 基础特征管理 - IDC 规则模块识别结果；</li><li>EO-Bot-User-Risk： 高级 Bot 管理 - 客户端认证模块账号风险评估结果。</li></ul>
 * @method void setBotManagementHeaders(array $BotManagementHeaders) 设置<p>高级 Bot 管理模块识别结果回源头部配置。</p><p>枚举值：</p><ul><li>EO-Bot-Client-Attestation： 高级 Bot 管理 - 客户端认证模块认证票据校验结果；</li><li>EO-Bot-Client-Risk： 高级 Bot 管理 - 客户端认证模块设备风险评估结果；</li><li>EO-Bot-Intelligence： 高级 Bot 管理 - Bot 智能分析模块识别结果；</li><li>EO-Bot-IP-Reputation： 高级 Bot 管理 - 客户端画像分析识别结果；</li><li>EO-Bot-Known-Tool： 高级 Bot 管理 - 基础特征管理 - UA 特征规则模块识别结果；</li><li>EO-Bot-Search-Engine： 高级 Bot 管理 - 基础特征管理 - 搜索引擎规则模块识别结果；</li><li>EO-Bot-Source-IDC： 高级 Bot 管理 - 基础特征管理 - IDC 规则模块识别结果；</li><li>EO-Bot-User-Risk： 高级 Bot 管理 - 客户端认证模块账号风险评估结果。</li></ul>
 * @method array getClientFingerprintHeaders() 获取<p>客户端指纹信息回源头部配置。</p><p>枚举值：</p><ul><li>EO-Bot-Fingerprint： 客户端指纹信息。</li></ul>
 * @method void setClientFingerprintHeaders(array $ClientFingerprintHeaders) 设置<p>客户端指纹信息回源头部配置。</p><p>枚举值：</p><ul><li>EO-Bot-Fingerprint： 客户端指纹信息。</li></ul>
 */
class SecurityHeadersToOrigin extends AbstractModel
{
    /**
     * @var array <p>Bot 标识信息回源头部配置。</p><p>枚举值：</p><ul><li>EO-Bot-Botnet-ID： 基于 Bot 请求特征生成的识别标识。</li></ul>
     */
    public $BotIdentificationHeaders;

    /**
     * @var array <p>高级 Bot 管理模块识别结果回源头部配置。</p><p>枚举值：</p><ul><li>EO-Bot-Client-Attestation： 高级 Bot 管理 - 客户端认证模块认证票据校验结果；</li><li>EO-Bot-Client-Risk： 高级 Bot 管理 - 客户端认证模块设备风险评估结果；</li><li>EO-Bot-Intelligence： 高级 Bot 管理 - Bot 智能分析模块识别结果；</li><li>EO-Bot-IP-Reputation： 高级 Bot 管理 - 客户端画像分析识别结果；</li><li>EO-Bot-Known-Tool： 高级 Bot 管理 - 基础特征管理 - UA 特征规则模块识别结果；</li><li>EO-Bot-Search-Engine： 高级 Bot 管理 - 基础特征管理 - 搜索引擎规则模块识别结果；</li><li>EO-Bot-Source-IDC： 高级 Bot 管理 - 基础特征管理 - IDC 规则模块识别结果；</li><li>EO-Bot-User-Risk： 高级 Bot 管理 - 客户端认证模块账号风险评估结果。</li></ul>
     */
    public $BotManagementHeaders;

    /**
     * @var array <p>客户端指纹信息回源头部配置。</p><p>枚举值：</p><ul><li>EO-Bot-Fingerprint： 客户端指纹信息。</li></ul>
     */
    public $ClientFingerprintHeaders;

    /**
     * @param array $BotIdentificationHeaders <p>Bot 标识信息回源头部配置。</p><p>枚举值：</p><ul><li>EO-Bot-Botnet-ID： 基于 Bot 请求特征生成的识别标识。</li></ul>
     * @param array $BotManagementHeaders <p>高级 Bot 管理模块识别结果回源头部配置。</p><p>枚举值：</p><ul><li>EO-Bot-Client-Attestation： 高级 Bot 管理 - 客户端认证模块认证票据校验结果；</li><li>EO-Bot-Client-Risk： 高级 Bot 管理 - 客户端认证模块设备风险评估结果；</li><li>EO-Bot-Intelligence： 高级 Bot 管理 - Bot 智能分析模块识别结果；</li><li>EO-Bot-IP-Reputation： 高级 Bot 管理 - 客户端画像分析识别结果；</li><li>EO-Bot-Known-Tool： 高级 Bot 管理 - 基础特征管理 - UA 特征规则模块识别结果；</li><li>EO-Bot-Search-Engine： 高级 Bot 管理 - 基础特征管理 - 搜索引擎规则模块识别结果；</li><li>EO-Bot-Source-IDC： 高级 Bot 管理 - 基础特征管理 - IDC 规则模块识别结果；</li><li>EO-Bot-User-Risk： 高级 Bot 管理 - 客户端认证模块账号风险评估结果。</li></ul>
     * @param array $ClientFingerprintHeaders <p>客户端指纹信息回源头部配置。</p><p>枚举值：</p><ul><li>EO-Bot-Fingerprint： 客户端指纹信息。</li></ul>
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
        if (array_key_exists("BotIdentificationHeaders",$param) and $param["BotIdentificationHeaders"] !== null) {
            $this->BotIdentificationHeaders = $param["BotIdentificationHeaders"];
        }

        if (array_key_exists("BotManagementHeaders",$param) and $param["BotManagementHeaders"] !== null) {
            $this->BotManagementHeaders = $param["BotManagementHeaders"];
        }

        if (array_key_exists("ClientFingerprintHeaders",$param) and $param["ClientFingerprintHeaders"] !== null) {
            $this->ClientFingerprintHeaders = $param["ClientFingerprintHeaders"];
        }
    }
}
