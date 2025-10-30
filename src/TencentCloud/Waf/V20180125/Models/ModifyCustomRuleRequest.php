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
 * ModifyCustomRule请求参数结构体
 *
 * @method string getDomain() 获取编辑的域名
 * @method void setDomain(string $Domain) 设置编辑的域名
 * @method integer getRuleId() 获取编辑的规则ID
 * @method void setRuleId(integer $RuleId) 设置编辑的规则ID
 * @method string getRuleName() 获取编辑的规则名称
 * @method void setRuleName(string $RuleName) 设置编辑的规则名称
 * @method string getRuleAction() 获取动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
 * @method void setRuleAction(string $RuleAction) 设置动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
 * @method array getStrategies() 获取匹配条件数组
 * @method void setStrategies(array $Strategies) 设置匹配条件数组
 * @method string getEdition() 获取WAF的版本，clb-waf代表负载均衡WAF、sparta-waf代表SaaS WAF，默认是sparta-waf。
 * @method void setEdition(string $Edition) 设置WAF的版本，clb-waf代表负载均衡WAF、sparta-waf代表SaaS WAF，默认是sparta-waf。
 * @method string getRedirect() 获取动作为重定向的时候重定向URL，默认为"/"
 * @method void setRedirect(string $Redirect) 设置动作为重定向的时候重定向URL，默认为"/"
 * @method string getBypass() 获取放行时是否继续执行其它检查逻辑，继续执行地域封禁防护：geoip、继续执行CC策略防护：cc、继续执行WEB应用防护：owasp、继续执行AI引擎防护：ai、继续执行信息防泄漏防护：antileakage。如果多个勾选那么以,串接。
默认是"geoip,cc,owasp,ai,antileakage"
 * @method void setBypass(string $Bypass) 设置放行时是否继续执行其它检查逻辑，继续执行地域封禁防护：geoip、继续执行CC策略防护：cc、继续执行WEB应用防护：owasp、继续执行AI引擎防护：ai、继续执行信息防泄漏防护：antileakage。如果多个勾选那么以,串接。
默认是"geoip,cc,owasp,ai,antileakage"
 * @method integer getSortId() 获取优先级，1~100的整数，数字越小，代表这条规则的执行优先级越高。
默认是100
 * @method void setSortId(integer $SortId) 设置优先级，1~100的整数，数字越小，代表这条规则的执行优先级越高。
默认是100
 * @method integer getExpireTime() 获取规则生效截止时间，0：永久生效，其它值为对应时间的时间戳。
默认是0
 * @method void setExpireTime(integer $ExpireTime) 设置规则生效截止时间，0：永久生效，其它值为对应时间的时间戳。
默认是0
 * @method string getJobType() 获取规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method void setJobType(string $JobType) 设置规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method JobDateTime getJobDateTime() 获取定时任务配置
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时任务配置
 * @method string getSource() 获取规则来源，判断是不是小程序的
 * @method void setSource(string $Source) 设置规则来源，判断是不是小程序的
 * @method integer getStatus() 获取开关状态，小程序风控规则的时候传该值
 * @method void setStatus(integer $Status) 设置开关状态，小程序风控规则的时候传该值
 * @method string getPageId() 获取拦截页面id
 * @method void setPageId(string $PageId) 设置拦截页面id
 * @method string getLogicalOp() 获取匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 * @method void setLogicalOp(string $LogicalOp) 设置匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 * @method integer getActionRatio() 获取规则生效比例
 * @method void setActionRatio(integer $ActionRatio) 设置规则生效比例
 */
class ModifyCustomRuleRequest extends AbstractModel
{
    /**
     * @var string 编辑的域名
     */
    public $Domain;

    /**
     * @var integer 编辑的规则ID
     */
    public $RuleId;

    /**
     * @var string 编辑的规则名称
     */
    public $RuleName;

    /**
     * @var string 动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
     */
    public $RuleAction;

    /**
     * @var array 匹配条件数组
     */
    public $Strategies;

    /**
     * @var string WAF的版本，clb-waf代表负载均衡WAF、sparta-waf代表SaaS WAF，默认是sparta-waf。
     */
    public $Edition;

    /**
     * @var string 动作为重定向的时候重定向URL，默认为"/"
     */
    public $Redirect;

    /**
     * @var string 放行时是否继续执行其它检查逻辑，继续执行地域封禁防护：geoip、继续执行CC策略防护：cc、继续执行WEB应用防护：owasp、继续执行AI引擎防护：ai、继续执行信息防泄漏防护：antileakage。如果多个勾选那么以,串接。
默认是"geoip,cc,owasp,ai,antileakage"
     * @deprecated
     */
    public $Bypass;

    /**
     * @var integer 优先级，1~100的整数，数字越小，代表这条规则的执行优先级越高。
默认是100
     */
    public $SortId;

    /**
     * @var integer 规则生效截止时间，0：永久生效，其它值为对应时间的时间戳。
默认是0
     */
    public $ExpireTime;

    /**
     * @var string 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     */
    public $JobType;

    /**
     * @var JobDateTime 定时任务配置
     */
    public $JobDateTime;

    /**
     * @var string 规则来源，判断是不是小程序的
     */
    public $Source;

    /**
     * @var integer 开关状态，小程序风控规则的时候传该值
     */
    public $Status;

    /**
     * @var string 拦截页面id
     */
    public $PageId;

    /**
     * @var string 匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
     */
    public $LogicalOp;

    /**
     * @var integer 规则生效比例
     */
    public $ActionRatio;

    /**
     * @param string $Domain 编辑的域名
     * @param integer $RuleId 编辑的规则ID
     * @param string $RuleName 编辑的规则名称
     * @param string $RuleAction 动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
     * @param array $Strategies 匹配条件数组
     * @param string $Edition WAF的版本，clb-waf代表负载均衡WAF、sparta-waf代表SaaS WAF，默认是sparta-waf。
     * @param string $Redirect 动作为重定向的时候重定向URL，默认为"/"
     * @param string $Bypass 放行时是否继续执行其它检查逻辑，继续执行地域封禁防护：geoip、继续执行CC策略防护：cc、继续执行WEB应用防护：owasp、继续执行AI引擎防护：ai、继续执行信息防泄漏防护：antileakage。如果多个勾选那么以,串接。
默认是"geoip,cc,owasp,ai,antileakage"
     * @param integer $SortId 优先级，1~100的整数，数字越小，代表这条规则的执行优先级越高。
默认是100
     * @param integer $ExpireTime 规则生效截止时间，0：永久生效，其它值为对应时间的时间戳。
默认是0
     * @param string $JobType 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     * @param JobDateTime $JobDateTime 定时任务配置
     * @param string $Source 规则来源，判断是不是小程序的
     * @param integer $Status 开关状态，小程序风控规则的时候传该值
     * @param string $PageId 拦截页面id
     * @param string $LogicalOp 匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
     * @param integer $ActionRatio 规则生效比例
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Redirect",$param) and $param["Redirect"] !== null) {
            $this->Redirect = $param["Redirect"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("LogicalOp",$param) and $param["LogicalOp"] !== null) {
            $this->LogicalOp = $param["LogicalOp"];
        }

        if (array_key_exists("ActionRatio",$param) and $param["ActionRatio"] !== null) {
            $this->ActionRatio = $param["ActionRatio"];
        }
    }
}
