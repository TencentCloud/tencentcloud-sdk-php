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
 * Bot 管理的基础配置，对策略关联的所有域名生效。可以通过 CustomRules 进行精细化定制。
 *
 * @method SourceIDC getSourceIDC() 获取客户端 IP 的来源 IDC 配置，用于处置来自 IDC（数据中心） 的客户端 IP 的访问请求。此类来源请求不是由移动端或浏览器端直接访问。
 * @method void setSourceIDC(SourceIDC $SourceIDC) 设置客户端 IP 的来源 IDC 配置，用于处置来自 IDC（数据中心） 的客户端 IP 的访问请求。此类来源请求不是由移动端或浏览器端直接访问。
 * @method SearchEngineBots getSearchEngineBots() 获取搜索引擎爬虫配置，用于处置来自搜索引擎爬虫的请求。此类请求的 IP、User-Agent 或 rDNS 结果匹配已知搜索引擎爬虫。
 * @method void setSearchEngineBots(SearchEngineBots $SearchEngineBots) 设置搜索引擎爬虫配置，用于处置来自搜索引擎爬虫的请求。此类请求的 IP、User-Agent 或 rDNS 结果匹配已知搜索引擎爬虫。
 * @method KnownBotCategories getKnownBotCategories() 获取商业或开源工具 UA 特征配置（原 UA 特征规则），用于处置来自已知商业工具或开源工具的访问请求。此类请求的 User-Agent 头部符合已知商业或开源工具特征。
 * @method void setKnownBotCategories(KnownBotCategories $KnownBotCategories) 设置商业或开源工具 UA 特征配置（原 UA 特征规则），用于处置来自已知商业工具或开源工具的访问请求。此类请求的 User-Agent 头部符合已知商业或开源工具特征。
 * @method IPReputation getIPReputation() 获取IP 威胁情报库（原客户端画像分析）配置，用于处置近期访问行为具有特定风险特征的客户端 IP。
 * @method void setIPReputation(IPReputation $IPReputation) 设置IP 威胁情报库（原客户端画像分析）配置，用于处置近期访问行为具有特定风险特征的客户端 IP。
 * @method BotIntelligence getBotIntelligence() 获取Bot 智能分析的具体配置。
 * @method void setBotIntelligence(BotIntelligence $BotIntelligence) 设置Bot 智能分析的具体配置。
 */
class BasicBotSettings extends AbstractModel
{
    /**
     * @var SourceIDC 客户端 IP 的来源 IDC 配置，用于处置来自 IDC（数据中心） 的客户端 IP 的访问请求。此类来源请求不是由移动端或浏览器端直接访问。
     */
    public $SourceIDC;

    /**
     * @var SearchEngineBots 搜索引擎爬虫配置，用于处置来自搜索引擎爬虫的请求。此类请求的 IP、User-Agent 或 rDNS 结果匹配已知搜索引擎爬虫。
     */
    public $SearchEngineBots;

    /**
     * @var KnownBotCategories 商业或开源工具 UA 特征配置（原 UA 特征规则），用于处置来自已知商业工具或开源工具的访问请求。此类请求的 User-Agent 头部符合已知商业或开源工具特征。
     */
    public $KnownBotCategories;

    /**
     * @var IPReputation IP 威胁情报库（原客户端画像分析）配置，用于处置近期访问行为具有特定风险特征的客户端 IP。
     */
    public $IPReputation;

    /**
     * @var BotIntelligence Bot 智能分析的具体配置。
     */
    public $BotIntelligence;

    /**
     * @param SourceIDC $SourceIDC 客户端 IP 的来源 IDC 配置，用于处置来自 IDC（数据中心） 的客户端 IP 的访问请求。此类来源请求不是由移动端或浏览器端直接访问。
     * @param SearchEngineBots $SearchEngineBots 搜索引擎爬虫配置，用于处置来自搜索引擎爬虫的请求。此类请求的 IP、User-Agent 或 rDNS 结果匹配已知搜索引擎爬虫。
     * @param KnownBotCategories $KnownBotCategories 商业或开源工具 UA 特征配置（原 UA 特征规则），用于处置来自已知商业工具或开源工具的访问请求。此类请求的 User-Agent 头部符合已知商业或开源工具特征。
     * @param IPReputation $IPReputation IP 威胁情报库（原客户端画像分析）配置，用于处置近期访问行为具有特定风险特征的客户端 IP。
     * @param BotIntelligence $BotIntelligence Bot 智能分析的具体配置。
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
        if (array_key_exists("SourceIDC",$param) and $param["SourceIDC"] !== null) {
            $this->SourceIDC = new SourceIDC();
            $this->SourceIDC->deserialize($param["SourceIDC"]);
        }

        if (array_key_exists("SearchEngineBots",$param) and $param["SearchEngineBots"] !== null) {
            $this->SearchEngineBots = new SearchEngineBots();
            $this->SearchEngineBots->deserialize($param["SearchEngineBots"]);
        }

        if (array_key_exists("KnownBotCategories",$param) and $param["KnownBotCategories"] !== null) {
            $this->KnownBotCategories = new KnownBotCategories();
            $this->KnownBotCategories->deserialize($param["KnownBotCategories"]);
        }

        if (array_key_exists("IPReputation",$param) and $param["IPReputation"] !== null) {
            $this->IPReputation = new IPReputation();
            $this->IPReputation->deserialize($param["IPReputation"]);
        }

        if (array_key_exists("BotIntelligence",$param) and $param["BotIntelligence"] !== null) {
            $this->BotIntelligence = new BotIntelligence();
            $this->BotIntelligence->deserialize($param["BotIntelligence"]);
        }
    }
}
