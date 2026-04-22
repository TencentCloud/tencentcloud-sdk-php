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
 * 批量自定义规则列表信息Item
 *
 * @method integer getId() 获取规则Id
 * @method void setId(integer $Id) 设置规则Id
 * @method integer getActionType() 获取动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
 * @method void setActionType(integer $ActionType) 设置动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
 * @method string getBypass() 获取加白模块
 * @method void setBypass(string $Bypass) 设置加白模块
 * @method integer getExpireTime() 获取有效期
 * @method void setExpireTime(integer $ExpireTime) 设置有效期
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getRedirect() 获取重定向地址
 * @method void setRedirect(string $Redirect) 设置重定向地址
 * @method integer getSortId() 获取优先级
 * @method void setSortId(integer $SortId) 设置优先级
 * @method integer getStatus() 获取开关状态
 * @method void setStatus(integer $Status) 设置开关状态
 * @method array getDomains() 获取域名列表
 * @method void setDomains(array $Domains) 设置域名列表
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method array getStrategies() 获取策略列表
 * @method void setStrategies(array $Strategies) 设置策略列表
 * @method string getEventId() 获取事件Id
 * @method void setEventId(string $EventId) 设置事件Id
 * @method integer getValidStatus() 获取生效状态
 * @method void setValidStatus(integer $ValidStatus) 设置生效状态
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getJobType() 获取规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method void setJobType(string $JobType) 设置规则执行的方式，TimedJob为定时执行，CronJob为周期执行
 * @method JobDateTime getJobDateTime() 获取定时任务配置
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时任务配置
 * @method string getCronType() 获取周期任务粒度
 * @method void setCronType(string $CronType) 设置周期任务粒度
 * @method string getLabel() 获取标签
 * @method void setLabel(string $Label) 设置标签
 * @method string getPageId() 获取页面ID
 * @method void setPageId(string $PageId) 设置页面ID
 * @method string getLogicalOp() 获取匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 * @method void setLogicalOp(string $LogicalOp) 设置匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
 * @method integer getActionRatio() 获取动作灰度的比例
 * @method void setActionRatio(integer $ActionRatio) 设置动作灰度的比例
 */
class BatchCustomRuleListItem extends AbstractModel
{
    /**
     * @var integer 规则Id
     */
    public $Id;

    /**
     * @var integer 动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
     */
    public $ActionType;

    /**
     * @var string 加白模块
     */
    public $Bypass;

    /**
     * @var integer 有效期
     */
    public $ExpireTime;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 重定向地址
     */
    public $Redirect;

    /**
     * @var integer 优先级
     */
    public $SortId;

    /**
     * @var integer 开关状态
     */
    public $Status;

    /**
     * @var array 域名列表
     */
    public $Domains;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var array 策略列表
     */
    public $Strategies;

    /**
     * @var string 事件Id
     */
    public $EventId;

    /**
     * @var integer 生效状态
     */
    public $ValidStatus;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     */
    public $JobType;

    /**
     * @var JobDateTime 定时任务配置
     */
    public $JobDateTime;

    /**
     * @var string 周期任务粒度
     */
    public $CronType;

    /**
     * @var string 标签
     */
    public $Label;

    /**
     * @var string 页面ID
     */
    public $PageId;

    /**
     * @var string 匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
     */
    public $LogicalOp;

    /**
     * @var integer 动作灰度的比例
     */
    public $ActionRatio;

    /**
     * @param integer $Id 规则Id
     * @param integer $ActionType 动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验
     * @param string $Bypass 加白模块
     * @param integer $ExpireTime 有效期
     * @param string $Name 规则名称
     * @param string $Redirect 重定向地址
     * @param integer $SortId 优先级
     * @param integer $Status 开关状态
     * @param array $Domains 域名列表
     * @param string $Remark 备注
     * @param array $Strategies 策略列表
     * @param string $EventId 事件Id
     * @param integer $ValidStatus 生效状态
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $JobType 规则执行的方式，TimedJob为定时执行，CronJob为周期执行
     * @param JobDateTime $JobDateTime 定时任务配置
     * @param string $CronType 周期任务粒度
     * @param string $Label 标签
     * @param string $PageId 页面ID
     * @param string $LogicalOp 匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系
     * @param integer $ActionRatio 动作灰度的比例
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
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

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
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

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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

        if (array_key_exists("LogicalOp",$param) and $param["LogicalOp"] !== null) {
            $this->LogicalOp = $param["LogicalOp"];
        }

        if (array_key_exists("ActionRatio",$param) and $param["ActionRatio"] !== null) {
            $this->ActionRatio = $param["ActionRatio"];
        }
    }
}
