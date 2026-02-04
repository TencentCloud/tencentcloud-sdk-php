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
 * BOT-ID规则配置详情
 *
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method string getBotId() 获取规则名称
 * @method void setBotId(string $BotId) 设置规则名称
 * @method boolean getStatus() 获取规则开关
 * @method void setStatus(boolean $Status) 设置规则开关
 * @method string getAction() 获取规则动作
 * @method void setAction(string $Action) 设置规则动作
 * @method integer getLevel() 获取风险等级
 * @method void setLevel(integer $Level) 设置风险等级
 * @method string getBotIdType() 获取"cbe-01": "爬虫型BOT",
	"cbe-02": "刷量型BOT",
	"cbe-03": "账号穷举型BOT",
	"cbe-04": "恶意扫描型BOT",
	"cbe-05": "DDoS型BOT",
	"cbe-06": "垃圾邮件发送型BOT",
	"cbe-07": "社交媒体自动化型BOT",
	"cbe-08": "竞争对手数据收集型BOT",
	"cbe-09": "恶意软件传播型BOT"
 * @method void setBotIdType(string $BotIdType) 设置"cbe-01": "爬虫型BOT",
	"cbe-02": "刷量型BOT",
	"cbe-03": "账号穷举型BOT",
	"cbe-04": "恶意扫描型BOT",
	"cbe-05": "DDoS型BOT",
	"cbe-06": "垃圾邮件发送型BOT",
	"cbe-07": "社交媒体自动化型BOT",
	"cbe-08": "竞争对手数据收集型BOT",
	"cbe-09": "恶意软件传播型BOT"
 * @method integer getModifyTime() 获取修改时间
 * @method void setModifyTime(integer $ModifyTime) 设置修改时间
 * @method integer getInsertTime() 获取插入时间
 * @method void setInsertTime(integer $InsertTime) 设置插入时间
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method string getInfluence() 获取影响
 * @method void setInfluence(string $Influence) 设置影响
 * @method string getRedirect() 获取重定向路径
 * @method void setRedirect(string $Redirect) 设置重定向路径
 * @method boolean getHasEvent() 获取是否关联事件
 * @method void setHasEvent(boolean $HasEvent) 设置是否关联事件
 */
class BotIdDetail extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $BotId;

    /**
     * @var boolean 规则开关
     */
    public $Status;

    /**
     * @var string 规则动作
     */
    public $Action;

    /**
     * @var integer 风险等级
     */
    public $Level;

    /**
     * @var string "cbe-01": "爬虫型BOT",
	"cbe-02": "刷量型BOT",
	"cbe-03": "账号穷举型BOT",
	"cbe-04": "恶意扫描型BOT",
	"cbe-05": "DDoS型BOT",
	"cbe-06": "垃圾邮件发送型BOT",
	"cbe-07": "社交媒体自动化型BOT",
	"cbe-08": "竞争对手数据收集型BOT",
	"cbe-09": "恶意软件传播型BOT"
     */
    public $BotIdType;

    /**
     * @var integer 修改时间
     */
    public $ModifyTime;

    /**
     * @var integer 插入时间
     */
    public $InsertTime;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var string 影响
     */
    public $Influence;

    /**
     * @var string 重定向路径
     */
    public $Redirect;

    /**
     * @var boolean 是否关联事件
     */
    public $HasEvent;

    /**
     * @param string $RuleId 规则ID
     * @param string $BotId 规则名称
     * @param boolean $Status 规则开关
     * @param string $Action 规则动作
     * @param integer $Level 风险等级
     * @param string $BotIdType "cbe-01": "爬虫型BOT",
	"cbe-02": "刷量型BOT",
	"cbe-03": "账号穷举型BOT",
	"cbe-04": "恶意扫描型BOT",
	"cbe-05": "DDoS型BOT",
	"cbe-06": "垃圾邮件发送型BOT",
	"cbe-07": "社交媒体自动化型BOT",
	"cbe-08": "竞争对手数据收集型BOT",
	"cbe-09": "恶意软件传播型BOT"
     * @param integer $ModifyTime 修改时间
     * @param integer $InsertTime 插入时间
     * @param string $Description 规则描述
     * @param string $Influence 影响
     * @param string $Redirect 重定向路径
     * @param boolean $HasEvent 是否关联事件
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("BotIdType",$param) and $param["BotIdType"] !== null) {
            $this->BotIdType = $param["BotIdType"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Influence",$param) and $param["Influence"] !== null) {
            $this->Influence = $param["Influence"];
        }

        if (array_key_exists("Redirect",$param) and $param["Redirect"] !== null) {
            $this->Redirect = $param["Redirect"];
        }

        if (array_key_exists("HasEvent",$param) and $param["HasEvent"] !== null) {
            $this->HasEvent = $param["HasEvent"];
        }
    }
}
