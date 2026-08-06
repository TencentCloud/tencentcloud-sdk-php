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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 入侵防御白名单策略。必填字段：RuleName、FwType、EndTime、Info；Comment 选填
 *
 * @method string getComment() 获取策略备注，最多 200 个字符；可省略或传空字符串。
 * @method void setComment(string $Comment) 设置策略备注，最多 200 个字符；可省略或传空字符串。
 * @method string getEndTime() 获取策略截止时间，北京时间（UTC+8）YYYY-MM-DD HH:MM:SS，必须晚于当前时间；永久有效传 3000-01-01 00:00:00。
 * @method void setEndTime(string $EndTime) 设置策略截止时间，北京时间（UTC+8）YYYY-MM-DD HH:MM:SS，必须晚于当前时间；永久有效传 3000-01-01 00:00:00。
 * @method integer getFwType() 获取使用 JSON integer 表示生效范围位图，取值 1–31；各项按位相加：1 互联网旁路、2 NAT、4 VPC、8 互联网串行、16 NDR。
例如：12 表示 VPC+互联网串行，31 表示全部范围。
匹配条件支持的范围：
- 源/目的 IP、域名、IPS 规则：支持 1、2、4、8、16 及其组合。
- 威胁情报：固定为 1。
- 资产：使用 4、16 或 20。
- UserAgent、Url、XForwardedFor、HostName、FileName、FileMd5：固定为 16；RuleType=9 同样固定为 16。
 * @method void setFwType(integer $FwType) 设置使用 JSON integer 表示生效范围位图，取值 1–31；各项按位相加：1 互联网旁路、2 NAT、4 VPC、8 互联网串行、16 NDR。
例如：12 表示 VPC+互联网串行，31 表示全部范围。
匹配条件支持的范围：
- 源/目的 IP、域名、IPS 规则：支持 1、2、4、8、16 及其组合。
- 威胁情报：固定为 1。
- 资产：使用 4、16 或 20。
- UserAgent、Url、XForwardedFor、HostName、FileName、FileMd5：固定为 16；RuleType=9 同样固定为 16。
 * @method WhiteRuleInfo getInfo() 获取匹配条件。按 RuleType 填写对应字段，无值字段省略。除 UserAgent 外，同字段多值用逗号分隔；UserAgent 多值用 <#cfw-splite#>。
 * @method void setInfo(WhiteRuleInfo $Info) 设置匹配条件。按 RuleType 填写对应字段，无值字段省略。除 UserAgent 外，同字段多值用逗号分隔；UserAgent 多值用 <#cfw-splite#>。
 * @method string getRuleName() 获取策略名称，填写 1–50 个字符。
 * @method void setRuleName(string $RuleName) 设置策略名称，填写 1–50 个字符。
 */
class IdsWhiteRule extends AbstractModel
{
    /**
     * @var string 策略备注，最多 200 个字符；可省略或传空字符串。
     */
    public $Comment;

    /**
     * @var string 策略截止时间，北京时间（UTC+8）YYYY-MM-DD HH:MM:SS，必须晚于当前时间；永久有效传 3000-01-01 00:00:00。
     */
    public $EndTime;

    /**
     * @var integer 使用 JSON integer 表示生效范围位图，取值 1–31；各项按位相加：1 互联网旁路、2 NAT、4 VPC、8 互联网串行、16 NDR。
例如：12 表示 VPC+互联网串行，31 表示全部范围。
匹配条件支持的范围：
- 源/目的 IP、域名、IPS 规则：支持 1、2、4、8、16 及其组合。
- 威胁情报：固定为 1。
- 资产：使用 4、16 或 20。
- UserAgent、Url、XForwardedFor、HostName、FileName、FileMd5：固定为 16；RuleType=9 同样固定为 16。
     */
    public $FwType;

    /**
     * @var WhiteRuleInfo 匹配条件。按 RuleType 填写对应字段，无值字段省略。除 UserAgent 外，同字段多值用逗号分隔；UserAgent 多值用 <#cfw-splite#>。
     */
    public $Info;

    /**
     * @var string 策略名称，填写 1–50 个字符。
     */
    public $RuleName;

    /**
     * @param string $Comment 策略备注，最多 200 个字符；可省略或传空字符串。
     * @param string $EndTime 策略截止时间，北京时间（UTC+8）YYYY-MM-DD HH:MM:SS，必须晚于当前时间；永久有效传 3000-01-01 00:00:00。
     * @param integer $FwType 使用 JSON integer 表示生效范围位图，取值 1–31；各项按位相加：1 互联网旁路、2 NAT、4 VPC、8 互联网串行、16 NDR。
例如：12 表示 VPC+互联网串行，31 表示全部范围。
匹配条件支持的范围：
- 源/目的 IP、域名、IPS 规则：支持 1、2、4、8、16 及其组合。
- 威胁情报：固定为 1。
- 资产：使用 4、16 或 20。
- UserAgent、Url、XForwardedFor、HostName、FileName、FileMd5：固定为 16；RuleType=9 同样固定为 16。
     * @param WhiteRuleInfo $Info 匹配条件。按 RuleType 填写对应字段，无值字段省略。除 UserAgent 外，同字段多值用逗号分隔；UserAgent 多值用 <#cfw-splite#>。
     * @param string $RuleName 策略名称，填写 1–50 个字符。
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
        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = new WhiteRuleInfo();
            $this->Info->deserialize($param["Info"]);
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
