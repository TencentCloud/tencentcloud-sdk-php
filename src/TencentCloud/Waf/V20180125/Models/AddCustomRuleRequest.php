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
 * AddCustomRule请求参数结构体
 *
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getSortId() 获取优先级
 * @method void setSortId(string $SortId) 设置优先级
 * @method array getStrategies() 获取策略详情
 * @method void setStrategies(array $Strategies) 设置策略详情
 * @method string getDomain() 获取需要添加策略的域名
 * @method void setDomain(string $Domain) 设置需要添加策略的域名
 * @method string getActionType() 获取动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
 * @method void setActionType(string $ActionType) 设置动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
 * @method string getRedirect() 获取如果动作是重定向，则表示重定向的地址；其他情况可以为空
 * @method void setRedirect(string $Redirect) 设置如果动作是重定向，则表示重定向的地址；其他情况可以为空
 * @method string getExpireTime() 获取过期时间，单位为秒级时间戳，例如1677254399表示过期时间为2023-02-24 23:59:59. 0表示永不过期
 * @method void setExpireTime(string $ExpireTime) 设置过期时间，单位为秒级时间戳，例如1677254399表示过期时间为2023-02-24 23:59:59. 0表示永不过期
 * @method string getEdition() 获取WAF实例类型，sparta-waf表示SAAS型WAF，clb-waf表示负载均衡型WAF
 * @method void setEdition(string $Edition) 设置WAF实例类型，sparta-waf表示SAAS型WAF，clb-waf表示负载均衡型WAF
 * @method string getBypass() 获取放行时是否继续执行其它检查逻辑，继续执行地域封禁防护：geoip、继续执行CC策略防护：cc、继续执行WEB应用防护：owasp、继续执行AI引擎防护：ai、继续执行信息防泄漏防护：antileakage。如果多个勾选那么以,串接。默认是"geoip,cc,owasp,ai,antileakage"
 * @method void setBypass(string $Bypass) 设置放行时是否继续执行其它检查逻辑，继续执行地域封禁防护：geoip、继续执行CC策略防护：cc、继续执行WEB应用防护：owasp、继续执行AI引擎防护：ai、继续执行信息防泄漏防护：antileakage。如果多个勾选那么以,串接。默认是"geoip,cc,owasp,ai,antileakage"
 * @method string getEventId() 获取添加规则的来源，默认为空
 * @method void setEventId(string $EventId) 设置添加规则的来源，默认为空
 * @method string getJobType() 获取规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method void setJobType(string $JobType) 设置规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method JobDateTime getJobDateTime() 获取规则执行的时间
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置规则执行的时间
 * @method string getSource() 获取规则来源，判断是不是小程序的
 * @method void setSource(string $Source) 设置规则来源，判断是不是小程序的
 * @method string getLabel() 获取规则标签，小程序规则用，标识是内置规则还是自定义规则
 * @method void setLabel(string $Label) 设置规则标签，小程序规则用，标识是内置规则还是自定义规则
 * @method integer getStatus() 获取开关状态，小程序风控规则的时候传该值
 * @method void setStatus(integer $Status) 设置开关状态，小程序风控规则的时候传该值
 * @method string getPageId() 获取拦截页面id
 * @method void setPageId(string $PageId) 设置拦截页面id
 * @method string getLogicalOp() 获取匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 * @method void setLogicalOp(string $LogicalOp) 设置匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 * @method integer getActionRatio() 获取按照动作灰度的比例，默认是100
 * @method void setActionRatio(integer $ActionRatio) 设置按照动作灰度的比例，默认是100
 */
class AddCustomRuleRequest extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 优先级
     */
    public $SortId;

    /**
     * @var array 策略详情
     */
    public $Strategies;

    /**
     * @var string 需要添加策略的域名
     */
    public $Domain;

    /**
     * @var string 动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
     */
    public $ActionType;

    /**
     * @var string 如果动作是重定向，则表示重定向的地址；其他情况可以为空
     */
    public $Redirect;

    /**
     * @var string 过期时间，单位为秒级时间戳，例如1677254399表示过期时间为2023-02-24 23:59:59. 0表示永不过期
     */
    public $ExpireTime;

    /**
     * @var string WAF实例类型，sparta-waf表示SAAS型WAF，clb-waf表示负载均衡型WAF
     */
    public $Edition;

    /**
     * @var string 放行时是否继续执行其它检查逻辑，继续执行地域封禁防护：geoip、继续执行CC策略防护：cc、继续执行WEB应用防护：owasp、继续执行AI引擎防护：ai、继续执行信息防泄漏防护：antileakage。如果多个勾选那么以,串接。默认是"geoip,cc,owasp,ai,antileakage"
     * @deprecated
     */
    public $Bypass;

    /**
     * @var string 添加规则的来源，默认为空
     */
    public $EventId;

    /**
     * @var string 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     */
    public $JobType;

    /**
     * @var JobDateTime 规则执行的时间
     */
    public $JobDateTime;

    /**
     * @var string 规则来源，判断是不是小程序的
     */
    public $Source;

    /**
     * @var string 规则标签，小程序规则用，标识是内置规则还是自定义规则
     */
    public $Label;

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
     * @var integer 按照动作灰度的比例，默认是100
     */
    public $ActionRatio;

    /**
     * @param string $Name 规则名称
     * @param string $SortId 优先级
     * @param array $Strategies 策略详情
     * @param string $Domain 需要添加策略的域名
     * @param string $ActionType 动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
     * @param string $Redirect 如果动作是重定向，则表示重定向的地址；其他情况可以为空
     * @param string $ExpireTime 过期时间，单位为秒级时间戳，例如1677254399表示过期时间为2023-02-24 23:59:59. 0表示永不过期
     * @param string $Edition WAF实例类型，sparta-waf表示SAAS型WAF，clb-waf表示负载均衡型WAF
     * @param string $Bypass 放行时是否继续执行其它检查逻辑，继续执行地域封禁防护：geoip、继续执行CC策略防护：cc、继续执行WEB应用防护：owasp、继续执行AI引擎防护：ai、继续执行信息防泄漏防护：antileakage。如果多个勾选那么以,串接。默认是"geoip,cc,owasp,ai,antileakage"
     * @param string $EventId 添加规则的来源，默认为空
     * @param string $JobType 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     * @param JobDateTime $JobDateTime 规则执行的时间
     * @param string $Source 规则来源，判断是不是小程序的
     * @param string $Label 规则标签，小程序规则用，标识是内置规则还是自定义规则
     * @param integer $Status 开关状态，小程序风控规则的时候传该值
     * @param string $PageId 拦截页面id
     * @param string $LogicalOp 匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
     * @param integer $ActionRatio 按照动作灰度的比例，默认是100
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Redirect",$param) and $param["Redirect"] !== null) {
            $this->Redirect = $param["Redirect"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
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

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
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
