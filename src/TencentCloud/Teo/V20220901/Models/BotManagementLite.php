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
 * Web 安全的基础 BOT 规则结构。
 *
 * @method CAPTCHAPageChallenge getCAPTCHAPageChallenge() 获取人机校验页的具体配置。
 * @method void setCAPTCHAPageChallenge(CAPTCHAPageChallenge $CAPTCHAPageChallenge) 设置人机校验页的具体配置。
 * @method AICrawlerDetection getAICrawlerDetection() 获取AI爬虫检测的具体配置。
 * @method void setAICrawlerDetection(AICrawlerDetection $AICrawlerDetection) 设置AI爬虫检测的具体配置。
 */
class BotManagementLite extends AbstractModel
{
    /**
     * @var CAPTCHAPageChallenge 人机校验页的具体配置。
     */
    public $CAPTCHAPageChallenge;

    /**
     * @var AICrawlerDetection AI爬虫检测的具体配置。
     */
    public $AICrawlerDetection;

    /**
     * @param CAPTCHAPageChallenge $CAPTCHAPageChallenge 人机校验页的具体配置。
     * @param AICrawlerDetection $AICrawlerDetection AI爬虫检测的具体配置。
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
        if (array_key_exists("CAPTCHAPageChallenge",$param) and $param["CAPTCHAPageChallenge"] !== null) {
            $this->CAPTCHAPageChallenge = new CAPTCHAPageChallenge();
            $this->CAPTCHAPageChallenge->deserialize($param["CAPTCHAPageChallenge"]);
        }

        if (array_key_exists("AICrawlerDetection",$param) and $param["AICrawlerDetection"] !== null) {
            $this->AICrawlerDetection = new AICrawlerDetection();
            $this->AICrawlerDetection->deserialize($param["AICrawlerDetection"]);
        }
    }
}
