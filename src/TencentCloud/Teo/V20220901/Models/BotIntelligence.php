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
 * Bot 智能分析的具体配置。
 *
 * @method BotRatings getBotRatings() 获取基于客户端和请求特征，将请求来源分为人类来源请求、合法 Bot 请求、疑似 Bot 请求和高风险 Bot 请求，并提供请求处置选项。
 * @method void setBotRatings(BotRatings $BotRatings) 设置基于客户端和请求特征，将请求来源分为人类来源请求、合法 Bot 请求、疑似 Bot 请求和高风险 Bot 请求，并提供请求处置选项。
 * @method string getEnabled() 获取Bot 智能分析的具体配置开关。取值有：

on：开启；
off：关闭。
 * @method void setEnabled(string $Enabled) 设置Bot 智能分析的具体配置开关。取值有：

on：开启；
off：关闭。
 */
class BotIntelligence extends AbstractModel
{
    /**
     * @var BotRatings 基于客户端和请求特征，将请求来源分为人类来源请求、合法 Bot 请求、疑似 Bot 请求和高风险 Bot 请求，并提供请求处置选项。
     */
    public $BotRatings;

    /**
     * @var string Bot 智能分析的具体配置开关。取值有：

on：开启；
off：关闭。
     */
    public $Enabled;

    /**
     * @param BotRatings $BotRatings 基于客户端和请求特征，将请求来源分为人类来源请求、合法 Bot 请求、疑似 Bot 请求和高风险 Bot 请求，并提供请求处置选项。
     * @param string $Enabled Bot 智能分析的具体配置开关。取值有：

on：开启；
off：关闭。
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
        if (array_key_exists("BotRatings",$param) and $param["BotRatings"] !== null) {
            $this->BotRatings = new BotRatings();
            $this->BotRatings->deserialize($param["BotRatings"]);
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
