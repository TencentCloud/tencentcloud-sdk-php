<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BOT记录详细内容
 *
 * @method string getAction() 获取动作，取值为以为3个类型中的一个："intercept","permit","monitor"，分别表示： 拦截， 放行，监控
 * @method void setAction(string $Action) 设置动作，取值为以为3个类型中的一个："intercept","permit","monitor"，分别表示： 拦截， 放行，监控
 * @method integer getNums() 获取会话总次数
 * @method void setNums(integer $Nums) 设置会话总次数
 * @method string getRuleName() 获取BotType=UB时，表示预测标签，取值如下：
                "crawler_unregular",
                "crawler_regular",
                "request_repeat",
                "credential_miss_user",
                "credential_without_user",
                "credential_only_action",
                "credential_user_password",
                "credential_cracking",
                "credential_stuffing",
                "brush_sms",
                "brush_captcha",
                "reg_malicious"
BotType=TCB时，表示Bot分类，取值如下：
                "Uncategorised",
                "Search engine bot",
                "Site monitor",
                "Screenshot creator",
                "Link checker",
                "Web scraper",
                "Vulnerability scanner",
                "Virus scanner",
                "Speed tester",
                "Feed Fetcher",
                "Tool",
                "Marketing"
BotType=UCB时，为二期接口，暂时未定义内容
 * @method void setRuleName(string $RuleName) 设置BotType=UB时，表示预测标签，取值如下：
                "crawler_unregular",
                "crawler_regular",
                "request_repeat",
                "credential_miss_user",
                "credential_without_user",
                "credential_only_action",
                "credential_user_password",
                "credential_cracking",
                "credential_stuffing",
                "brush_sms",
                "brush_captcha",
                "reg_malicious"
BotType=TCB时，表示Bot分类，取值如下：
                "Uncategorised",
                "Search engine bot",
                "Site monitor",
                "Screenshot creator",
                "Link checker",
                "Web scraper",
                "Vulnerability scanner",
                "Virus scanner",
                "Speed tester",
                "Feed Fetcher",
                "Tool",
                "Marketing"
BotType=UCB时，为二期接口，暂时未定义内容
 * @method float getSessionDuration() 获取会话持续时间
 * @method void setSessionDuration(float $SessionDuration) 设置会话持续时间
 * @method string getSrcIp() 获取访问源IP
 * @method void setSrcIp(string $SrcIp) 设置访问源IP
 * @method array getBotFeature() 获取异常特征
 * @method void setBotFeature(array $BotFeature) 设置异常特征
 * @method string getTime() 获取最新检测时间
 * @method void setTime(string $Time) 设置最新检测时间
 * @method integer getScore() 获取BOT得分
 * @method void setScore(integer $Score) 设置BOT得分
 * @method float getAvgSpeed() 获取平均速率
 * @method void setAvgSpeed(float $AvgSpeed) 设置平均速率
 * @method string getTcbDetail() 获取BotType=TCB，表示TCB名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTcbDetail(string $TcbDetail) 设置BotType=TCB，表示TCB名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取BOT记录唯一ID，用于查询访问详情
 * @method void setId(string $Id) 设置BOT记录唯一ID，用于查询访问详情
 * @method string getDomain() 获取域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名
注意：此字段可能返回 null，表示取不到有效值。
 */
class BotRecord extends AbstractModel
{
    /**
     * @var string 动作，取值为以为3个类型中的一个："intercept","permit","monitor"，分别表示： 拦截， 放行，监控
     */
    public $Action;

    /**
     * @var integer 会话总次数
     */
    public $Nums;

    /**
     * @var string BotType=UB时，表示预测标签，取值如下：
                "crawler_unregular",
                "crawler_regular",
                "request_repeat",
                "credential_miss_user",
                "credential_without_user",
                "credential_only_action",
                "credential_user_password",
                "credential_cracking",
                "credential_stuffing",
                "brush_sms",
                "brush_captcha",
                "reg_malicious"
BotType=TCB时，表示Bot分类，取值如下：
                "Uncategorised",
                "Search engine bot",
                "Site monitor",
                "Screenshot creator",
                "Link checker",
                "Web scraper",
                "Vulnerability scanner",
                "Virus scanner",
                "Speed tester",
                "Feed Fetcher",
                "Tool",
                "Marketing"
BotType=UCB时，为二期接口，暂时未定义内容
     */
    public $RuleName;

    /**
     * @var float 会话持续时间
     */
    public $SessionDuration;

    /**
     * @var string 访问源IP
     */
    public $SrcIp;

    /**
     * @var array 异常特征
     */
    public $BotFeature;

    /**
     * @var string 最新检测时间
     */
    public $Time;

    /**
     * @var integer BOT得分
     */
    public $Score;

    /**
     * @var float 平均速率
     */
    public $AvgSpeed;

    /**
     * @var string BotType=TCB，表示TCB名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TcbDetail;

    /**
     * @var string BOT记录唯一ID，用于查询访问详情
     */
    public $Id;

    /**
     * @var string 域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @param string $Action 动作，取值为以为3个类型中的一个："intercept","permit","monitor"，分别表示： 拦截， 放行，监控
     * @param integer $Nums 会话总次数
     * @param string $RuleName BotType=UB时，表示预测标签，取值如下：
                "crawler_unregular",
                "crawler_regular",
                "request_repeat",
                "credential_miss_user",
                "credential_without_user",
                "credential_only_action",
                "credential_user_password",
                "credential_cracking",
                "credential_stuffing",
                "brush_sms",
                "brush_captcha",
                "reg_malicious"
BotType=TCB时，表示Bot分类，取值如下：
                "Uncategorised",
                "Search engine bot",
                "Site monitor",
                "Screenshot creator",
                "Link checker",
                "Web scraper",
                "Vulnerability scanner",
                "Virus scanner",
                "Speed tester",
                "Feed Fetcher",
                "Tool",
                "Marketing"
BotType=UCB时，为二期接口，暂时未定义内容
     * @param float $SessionDuration 会话持续时间
     * @param string $SrcIp 访问源IP
     * @param array $BotFeature 异常特征
     * @param string $Time 最新检测时间
     * @param integer $Score BOT得分
     * @param float $AvgSpeed 平均速率
     * @param string $TcbDetail BotType=TCB，表示TCB名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id BOT记录唯一ID，用于查询访问详情
     * @param string $Domain 域名
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Nums",$param) and $param["Nums"] !== null) {
            $this->Nums = $param["Nums"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("SessionDuration",$param) and $param["SessionDuration"] !== null) {
            $this->SessionDuration = $param["SessionDuration"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("BotFeature",$param) and $param["BotFeature"] !== null) {
            $this->BotFeature = $param["BotFeature"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("AvgSpeed",$param) and $param["AvgSpeed"] !== null) {
            $this->AvgSpeed = $param["AvgSpeed"];
        }

        if (array_key_exists("TcbDetail",$param) and $param["TcbDetail"] !== null) {
            $this->TcbDetail = $param["TcbDetail"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
