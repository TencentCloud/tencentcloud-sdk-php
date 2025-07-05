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
 * DescribeCustomRules接口回包中的复杂类型
 *
 * @method string getActionType() 获取动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
 * @method void setActionType(string $ActionType) 设置动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
 * @method string getBypass() 获取跳过的策略
 * @method void setBypass(string $Bypass) 设置跳过的策略
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method string getName() 获取策略名称
 * @method void setName(string $Name) 设置策略名称
 * @method string getRedirect() 获取重定向地址
 * @method void setRedirect(string $Redirect) 设置重定向地址
 * @method string getRuleId() 获取策略ID
 * @method void setRuleId(string $RuleId) 设置策略ID
 * @method string getSortId() 获取优先级
 * @method void setSortId(string $SortId) 设置优先级
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method array getStrategies() 获取策略详情
 * @method void setStrategies(array $Strategies) 设置策略详情
 * @method string getEventId() 获取事件id
 * @method void setEventId(string $EventId) 设置事件id
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method integer getValidStatus() 获取生效状态
 * @method void setValidStatus(integer $ValidStatus) 设置生效状态
 * @method string getSource() 获取来源
 * @method void setSource(string $Source) 设置来源
 * @method string getJobType() 获取定时任务类型
 * @method void setJobType(string $JobType) 设置定时任务类型
 * @method JobDateTime getJobDateTime() 获取定时任务配置信息
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时任务配置信息
 * @method string getCronType() 获取周期任务粒度
 * @method void setCronType(string $CronType) 设置周期任务粒度
 * @method string getLabel() 获取自定义标签，风控规则用，用来表示是内置规则还是用户自定义的
 * @method void setLabel(string $Label) 设置自定义标签，风控规则用，用来表示是内置规则还是用户自定义的
 * @method string getPageId() 获取拦截页面id
 * @method void setPageId(string $PageId) 设置拦截页面id
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getLogicalOp() 获取匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 * @method void setLogicalOp(string $LogicalOp) 设置匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 */
class DescribeCustomRulesRspRuleListItem extends AbstractModel
{
    /**
     * @var string 动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
     */
    public $ActionType;

    /**
     * @var string 跳过的策略
     */
    public $Bypass;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var string 策略名称
     */
    public $Name;

    /**
     * @var string 重定向地址
     */
    public $Redirect;

    /**
     * @var string 策略ID
     */
    public $RuleId;

    /**
     * @var string 优先级
     */
    public $SortId;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var array 策略详情
     */
    public $Strategies;

    /**
     * @var string 事件id
     */
    public $EventId;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var integer 生效状态
     */
    public $ValidStatus;

    /**
     * @var string 来源
     */
    public $Source;

    /**
     * @var string 定时任务类型
     */
    public $JobType;

    /**
     * @var JobDateTime 定时任务配置信息
     */
    public $JobDateTime;

    /**
     * @var string 周期任务粒度
     */
    public $CronType;

    /**
     * @var string 自定义标签，风控规则用，用来表示是内置规则还是用户自定义的
     */
    public $Label;

    /**
     * @var string 拦截页面id
     */
    public $PageId;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
     */
    public $LogicalOp;

    /**
     * @param string $ActionType 动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
     * @param string $Bypass 跳过的策略
     * @param string $CreateTime 创建时间
     * @param string $ExpireTime 过期时间
     * @param string $Name 策略名称
     * @param string $Redirect 重定向地址
     * @param string $RuleId 策略ID
     * @param string $SortId 优先级
     * @param string $Status 状态
     * @param array $Strategies 策略详情
     * @param string $EventId 事件id
     * @param string $ModifyTime 修改时间
     * @param integer $ValidStatus 生效状态
     * @param string $Source 来源
     * @param string $JobType 定时任务类型
     * @param JobDateTime $JobDateTime 定时任务配置信息
     * @param string $CronType 周期任务粒度
     * @param string $Label 自定义标签，风控规则用，用来表示是内置规则还是用户自定义的
     * @param string $PageId 拦截页面id
     * @param string $Domain 域名
     * @param string $LogicalOp 匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Redirect",$param) and $param["Redirect"] !== null) {
            $this->Redirect = $param["Redirect"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
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

        if (array_key_exists("CronType",$param) and $param["CronType"] !== null) {
            $this->CronType = $param["CronType"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LogicalOp",$param) and $param["LogicalOp"] !== null) {
            $this->LogicalOp = $param["LogicalOp"];
        }
    }
}
