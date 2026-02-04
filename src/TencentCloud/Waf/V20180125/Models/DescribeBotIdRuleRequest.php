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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBotIdRule请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getSceneId() 获取场景ID
 * @method void setSceneId(string $SceneId) 设置场景ID
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method string getBotId() 获取规则名称
 * @method void setBotId(string $BotId) 设置规则名称
 * @method array getLevel() 获取风险等级筛选
 * @method void setLevel(array $Level) 设置风险等级筛选
 * @method array getBotIdType() 获取规则类型筛选"cbe-01": "爬虫型BOT", 	"cbe-02": "刷量型BOT", 	"cbe-03": "账号穷举型BOT", 	"cbe-04": "恶意扫描型BOT", 	"cbe-05": "DDoS型BOT", 	"cbe-06": "垃圾邮件发送型BOT", 	"cbe-07": "社交媒体自动化型BOT", 	"cbe-08": "竞争对手数据收集型BOT", 	"cbe-09": "恶意软件传播型BOT"
 * @method void setBotIdType(array $BotIdType) 设置规则类型筛选"cbe-01": "爬虫型BOT", 	"cbe-02": "刷量型BOT", 	"cbe-03": "账号穷举型BOT", 	"cbe-04": "恶意扫描型BOT", 	"cbe-05": "DDoS型BOT", 	"cbe-06": "垃圾邮件发送型BOT", 	"cbe-07": "社交媒体自动化型BOT", 	"cbe-08": "竞争对手数据收集型BOT", 	"cbe-09": "恶意软件传播型BOT"
 * @method integer getStatus() 获取规则开关-用于筛选: 0-全部 1-关闭 2-开启
 * @method void setStatus(integer $Status) 设置规则开关-用于筛选: 0-全部 1-关闭 2-开启
 * @method array getRuleAction() 获取动作类型-用于筛选
 * @method void setRuleAction(array $RuleAction) 设置动作类型-用于筛选
 */
class DescribeBotIdRuleRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 场景ID
     */
    public $SceneId;

    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $BotId;

    /**
     * @var array 风险等级筛选
     */
    public $Level;

    /**
     * @var array 规则类型筛选"cbe-01": "爬虫型BOT", 	"cbe-02": "刷量型BOT", 	"cbe-03": "账号穷举型BOT", 	"cbe-04": "恶意扫描型BOT", 	"cbe-05": "DDoS型BOT", 	"cbe-06": "垃圾邮件发送型BOT", 	"cbe-07": "社交媒体自动化型BOT", 	"cbe-08": "竞争对手数据收集型BOT", 	"cbe-09": "恶意软件传播型BOT"
     */
    public $BotIdType;

    /**
     * @var integer 规则开关-用于筛选: 0-全部 1-关闭 2-开启
     */
    public $Status;

    /**
     * @var array 动作类型-用于筛选
     */
    public $RuleAction;

    /**
     * @param string $Domain 域名
     * @param string $SceneId 场景ID
     * @param string $RuleId 规则ID
     * @param string $BotId 规则名称
     * @param array $Level 风险等级筛选
     * @param array $BotIdType 规则类型筛选"cbe-01": "爬虫型BOT", 	"cbe-02": "刷量型BOT", 	"cbe-03": "账号穷举型BOT", 	"cbe-04": "恶意扫描型BOT", 	"cbe-05": "DDoS型BOT", 	"cbe-06": "垃圾邮件发送型BOT", 	"cbe-07": "社交媒体自动化型BOT", 	"cbe-08": "竞争对手数据收集型BOT", 	"cbe-09": "恶意软件传播型BOT"
     * @param integer $Status 规则开关-用于筛选: 0-全部 1-关闭 2-开启
     * @param array $RuleAction 动作类型-用于筛选
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("BotIdType",$param) and $param["BotIdType"] !== null) {
            $this->BotIdType = $param["BotIdType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }
    }
}
