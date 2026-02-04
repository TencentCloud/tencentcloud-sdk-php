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
 * UpsertCCRule请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method string getAdvance() 获取高级模式（是否使用Session检测），0表示不启用，1表示启用
 * @method void setAdvance(string $Advance) 设置高级模式（是否使用Session检测），0表示不启用，1表示启用
 * @method string getLimit() 获取CC检测阈值
 * @method void setLimit(string $Limit) 设置CC检测阈值
 * @method string getInterval() 获取CC检测周期
 * @method void setInterval(string $Interval) 设置CC检测周期
 * @method string getActionType() 获取动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，26表示精准人机识别，27表示JS校验
 * @method void setActionType(string $ActionType) 设置动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，26表示精准人机识别，27表示JS校验
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 * @method integer getValidTime() 获取动作有效时间
 * @method void setValidTime(integer $ValidTime) 设置动作有效时间
 * @method string getUrl() 获取检测Url
 * @method void setUrl(string $Url) 设置检测Url
 * @method integer getMatchFunc() 获取匹配方法，0表示等于，1表示前缀匹配，2表示包含，3表示不等于，6表示后缀匹配，7表示不包含
 * @method void setMatchFunc(integer $MatchFunc) 设置匹配方法，0表示等于，1表示前缀匹配，2表示包含，3表示不等于，6表示后缀匹配，7表示不包含
 * @method string getOptionsArr() 获取CC的匹配条件JSON序列化的字符串，示例：[{\"key\":\"Method\",\"args\":[\"=R0VU\"],\"match\":\"0\",\"encodeflag\":true}] Key可选值为 Method、Post、Referer、Cookie、User-Agent、CustomHeader、CaptchaRisk、CaptchaDeviceRisk、CaptchaScore match可选值为，当Key为Method的时候可选值为0（等于）、3（不等于）。 Key为Post的时候可选值为0（等于）、3（不等于），Key为Cookie的时候可选值为0（等于）、2（包含），3（不等于）、7（不包含）、 当Key为Referer的时候可选值为0（等于）、3（不等于）、1（前缀匹配）、6（后缀匹配）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）， 当Key为Cookie的时候可选值为0（等于）、3（不等于）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）， 当Key为User-Agent的时候可选值为0（等于）、3（不等于）、1（前缀匹配）、6（后缀匹配）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）， 当Key为CustomHeader的时候可选值为0（等于）、3（不等于）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）。 Key为IPLocation时，可选值为13（属于）、14（不属于）。 Key为CaptchaRisk时，可选值为0（等于）、3（不等于）、13（属于）、14（不属于）、12（存在）、5（不存在）。 Key为CaptchaDeviceRisk时，可选值为0（等于）、3（不等于）、13（属于）、14（不属于）、12（存在）、5（不存在）。 Key为CaptchaScore时，可选值为15（数值等于）、16（数值不等于）、17（数值大于）、18（数值小于）、19（数值大于等于）、20（数值小于等于）、12（存在）、5（不存在）。args用来表示匹配内容，需要设置encodeflag为true，当Key为Post、Cookie、CustomHeader时，用等号=来分别串接Key和Value，并分别用Base64编码，类似YWJj=YWJj。当Key为Referer、User-Agent时，用等号=来串接Value，类似=YWJj。
 * @method void setOptionsArr(string $OptionsArr) 设置CC的匹配条件JSON序列化的字符串，示例：[{\"key\":\"Method\",\"args\":[\"=R0VU\"],\"match\":\"0\",\"encodeflag\":true}] Key可选值为 Method、Post、Referer、Cookie、User-Agent、CustomHeader、CaptchaRisk、CaptchaDeviceRisk、CaptchaScore match可选值为，当Key为Method的时候可选值为0（等于）、3（不等于）。 Key为Post的时候可选值为0（等于）、3（不等于），Key为Cookie的时候可选值为0（等于）、2（包含），3（不等于）、7（不包含）、 当Key为Referer的时候可选值为0（等于）、3（不等于）、1（前缀匹配）、6（后缀匹配）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）， 当Key为Cookie的时候可选值为0（等于）、3（不等于）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）， 当Key为User-Agent的时候可选值为0（等于）、3（不等于）、1（前缀匹配）、6（后缀匹配）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）， 当Key为CustomHeader的时候可选值为0（等于）、3（不等于）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）。 Key为IPLocation时，可选值为13（属于）、14（不属于）。 Key为CaptchaRisk时，可选值为0（等于）、3（不等于）、13（属于）、14（不属于）、12（存在）、5（不存在）。 Key为CaptchaDeviceRisk时，可选值为0（等于）、3（不等于）、13（属于）、14（不属于）、12（存在）、5（不存在）。 Key为CaptchaScore时，可选值为15（数值等于）、16（数值不等于）、17（数值大于）、18（数值小于）、19（数值大于等于）、20（数值小于等于）、12（存在）、5（不存在）。args用来表示匹配内容，需要设置encodeflag为true，当Key为Post、Cookie、CustomHeader时，用等号=来分别串接Key和Value，并分别用Base64编码，类似YWJj=YWJj。当Key为Referer、User-Agent时，用等号=来串接Value，类似=YWJj。
 * @method string getEdition() 获取waf版本，sparta-waf或者clb-waf
 * @method void setEdition(string $Edition) 设置waf版本，sparta-waf或者clb-waf
 * @method integer getType() 获取操作类型
 * @method void setType(integer $Type) 设置操作类型
 * @method string getEventId() 获取添加规则的来源事件id
 * @method void setEventId(string $EventId) 设置添加规则的来源事件id
 * @method array getSessionApplied() 获取规则需要启用的SessionID
 * @method void setSessionApplied(array $SessionApplied) 设置规则需要启用的SessionID
 * @method integer getRuleId() 获取规则ID，新增时填0
 * @method void setRuleId(integer $RuleId) 设置规则ID，新增时填0
 * @method integer getCreateTime() 获取规则创建时间
 * @method void setCreateTime(integer $CreateTime) 设置规则创建时间
 * @method integer getLength() 获取url长度
 * @method void setLength(integer $Length) 设置url长度
 * @method string getLimitMethod() 获取限频方式
 * @method void setLimitMethod(string $LimitMethod) 设置限频方式
 * @method string getCelRule() 获取cel表达式
 * @method void setCelRule(string $CelRule) 设置cel表达式
 * @method string getLogicalOp() 获取配置方式的逻辑操作符，and或者or
 * @method void setLogicalOp(string $LogicalOp) 设置配置方式的逻辑操作符，and或者or
 * @method string getPageId() 获取页面ID
 * @method void setPageId(string $PageId) 设置页面ID
 * @method integer getActionRatio() 获取动作灰度比例，默认值100
 * @method void setActionRatio(integer $ActionRatio) 设置动作灰度比例，默认值100
 * @method string getSource() 获取规则来源
 * @method void setSource(string $Source) 设置规则来源
 * @method string getJobType() 获取forever
 * @method void setJobType(string $JobType) 设置forever
 * @method JobDateTime getJobDateTime() 获取无
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置无
 * @method integer getExpireTime() 获取0
 * @method void setExpireTime(integer $ExpireTime) 设置0
 * @method integer getValidStatus() 获取有效性
 * @method void setValidStatus(integer $ValidStatus) 设置有效性
 */
class UpsertCCRuleRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var string 高级模式（是否使用Session检测），0表示不启用，1表示启用
     */
    public $Advance;

    /**
     * @var string CC检测阈值
     */
    public $Limit;

    /**
     * @var string CC检测周期
     */
    public $Interval;

    /**
     * @var string 动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，26表示精准人机识别，27表示JS校验
     */
    public $ActionType;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @var integer 动作有效时间
     */
    public $ValidTime;

    /**
     * @var string 检测Url
     */
    public $Url;

    /**
     * @var integer 匹配方法，0表示等于，1表示前缀匹配，2表示包含，3表示不等于，6表示后缀匹配，7表示不包含
     */
    public $MatchFunc;

    /**
     * @var string CC的匹配条件JSON序列化的字符串，示例：[{\"key\":\"Method\",\"args\":[\"=R0VU\"],\"match\":\"0\",\"encodeflag\":true}] Key可选值为 Method、Post、Referer、Cookie、User-Agent、CustomHeader、CaptchaRisk、CaptchaDeviceRisk、CaptchaScore match可选值为，当Key为Method的时候可选值为0（等于）、3（不等于）。 Key为Post的时候可选值为0（等于）、3（不等于），Key为Cookie的时候可选值为0（等于）、2（包含），3（不等于）、7（不包含）、 当Key为Referer的时候可选值为0（等于）、3（不等于）、1（前缀匹配）、6（后缀匹配）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）， 当Key为Cookie的时候可选值为0（等于）、3（不等于）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）， 当Key为User-Agent的时候可选值为0（等于）、3（不等于）、1（前缀匹配）、6（后缀匹配）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）， 当Key为CustomHeader的时候可选值为0（等于）、3（不等于）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）。 Key为IPLocation时，可选值为13（属于）、14（不属于）。 Key为CaptchaRisk时，可选值为0（等于）、3（不等于）、13（属于）、14（不属于）、12（存在）、5（不存在）。 Key为CaptchaDeviceRisk时，可选值为0（等于）、3（不等于）、13（属于）、14（不属于）、12（存在）、5（不存在）。 Key为CaptchaScore时，可选值为15（数值等于）、16（数值不等于）、17（数值大于）、18（数值小于）、19（数值大于等于）、20（数值小于等于）、12（存在）、5（不存在）。args用来表示匹配内容，需要设置encodeflag为true，当Key为Post、Cookie、CustomHeader时，用等号=来分别串接Key和Value，并分别用Base64编码，类似YWJj=YWJj。当Key为Referer、User-Agent时，用等号=来串接Value，类似=YWJj。
     */
    public $OptionsArr;

    /**
     * @var string waf版本，sparta-waf或者clb-waf
     */
    public $Edition;

    /**
     * @var integer 操作类型
     */
    public $Type;

    /**
     * @var string 添加规则的来源事件id
     */
    public $EventId;

    /**
     * @var array 规则需要启用的SessionID
     */
    public $SessionApplied;

    /**
     * @var integer 规则ID，新增时填0
     */
    public $RuleId;

    /**
     * @var integer 规则创建时间
     */
    public $CreateTime;

    /**
     * @var integer url长度
     */
    public $Length;

    /**
     * @var string 限频方式
     */
    public $LimitMethod;

    /**
     * @var string cel表达式
     */
    public $CelRule;

    /**
     * @var string 配置方式的逻辑操作符，and或者or
     */
    public $LogicalOp;

    /**
     * @var string 页面ID
     */
    public $PageId;

    /**
     * @var integer 动作灰度比例，默认值100
     */
    public $ActionRatio;

    /**
     * @var string 规则来源
     */
    public $Source;

    /**
     * @var string forever
     */
    public $JobType;

    /**
     * @var JobDateTime 无
     */
    public $JobDateTime;

    /**
     * @var integer 0
     */
    public $ExpireTime;

    /**
     * @var integer 有效性
     */
    public $ValidStatus;

    /**
     * @param string $Domain 域名
     * @param string $Name 名称
     * @param integer $Status 状态
     * @param string $Advance 高级模式（是否使用Session检测），0表示不启用，1表示启用
     * @param string $Limit CC检测阈值
     * @param string $Interval CC检测周期
     * @param string $ActionType 动作，20表示观察，21表示人机识别，22表示拦截，23表示精准拦截，26表示精准人机识别，27表示JS校验
     * @param integer $Priority 优先级
     * @param integer $ValidTime 动作有效时间
     * @param string $Url 检测Url
     * @param integer $MatchFunc 匹配方法，0表示等于，1表示前缀匹配，2表示包含，3表示不等于，6表示后缀匹配，7表示不包含
     * @param string $OptionsArr CC的匹配条件JSON序列化的字符串，示例：[{\"key\":\"Method\",\"args\":[\"=R0VU\"],\"match\":\"0\",\"encodeflag\":true}] Key可选值为 Method、Post、Referer、Cookie、User-Agent、CustomHeader、CaptchaRisk、CaptchaDeviceRisk、CaptchaScore match可选值为，当Key为Method的时候可选值为0（等于）、3（不等于）。 Key为Post的时候可选值为0（等于）、3（不等于），Key为Cookie的时候可选值为0（等于）、2（包含），3（不等于）、7（不包含）、 当Key为Referer的时候可选值为0（等于）、3（不等于）、1（前缀匹配）、6（后缀匹配）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）， 当Key为Cookie的时候可选值为0（等于）、3（不等于）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）， 当Key为User-Agent的时候可选值为0（等于）、3（不等于）、1（前缀匹配）、6（后缀匹配）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）， 当Key为CustomHeader的时候可选值为0（等于）、3（不等于）、2（包含）、7（不包含）、12（存在）、5（不存在）、4（内容为空）。 Key为IPLocation时，可选值为13（属于）、14（不属于）。 Key为CaptchaRisk时，可选值为0（等于）、3（不等于）、13（属于）、14（不属于）、12（存在）、5（不存在）。 Key为CaptchaDeviceRisk时，可选值为0（等于）、3（不等于）、13（属于）、14（不属于）、12（存在）、5（不存在）。 Key为CaptchaScore时，可选值为15（数值等于）、16（数值不等于）、17（数值大于）、18（数值小于）、19（数值大于等于）、20（数值小于等于）、12（存在）、5（不存在）。args用来表示匹配内容，需要设置encodeflag为true，当Key为Post、Cookie、CustomHeader时，用等号=来分别串接Key和Value，并分别用Base64编码，类似YWJj=YWJj。当Key为Referer、User-Agent时，用等号=来串接Value，类似=YWJj。
     * @param string $Edition waf版本，sparta-waf或者clb-waf
     * @param integer $Type 操作类型
     * @param string $EventId 添加规则的来源事件id
     * @param array $SessionApplied 规则需要启用的SessionID
     * @param integer $RuleId 规则ID，新增时填0
     * @param integer $CreateTime 规则创建时间
     * @param integer $Length url长度
     * @param string $LimitMethod 限频方式
     * @param string $CelRule cel表达式
     * @param string $LogicalOp 配置方式的逻辑操作符，and或者or
     * @param string $PageId 页面ID
     * @param integer $ActionRatio 动作灰度比例，默认值100
     * @param string $Source 规则来源
     * @param string $JobType forever
     * @param JobDateTime $JobDateTime 无
     * @param integer $ExpireTime 0
     * @param integer $ValidStatus 有效性
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Advance",$param) and $param["Advance"] !== null) {
            $this->Advance = $param["Advance"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("MatchFunc",$param) and $param["MatchFunc"] !== null) {
            $this->MatchFunc = $param["MatchFunc"];
        }

        if (array_key_exists("OptionsArr",$param) and $param["OptionsArr"] !== null) {
            $this->OptionsArr = $param["OptionsArr"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("SessionApplied",$param) and $param["SessionApplied"] !== null) {
            $this->SessionApplied = $param["SessionApplied"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("LimitMethod",$param) and $param["LimitMethod"] !== null) {
            $this->LimitMethod = $param["LimitMethod"];
        }

        if (array_key_exists("CelRule",$param) and $param["CelRule"] !== null) {
            $this->CelRule = $param["CelRule"];
        }

        if (array_key_exists("LogicalOp",$param) and $param["LogicalOp"] !== null) {
            $this->LogicalOp = $param["LogicalOp"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("ActionRatio",$param) and $param["ActionRatio"] !== null) {
            $this->ActionRatio = $param["ActionRatio"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }
    }
}
