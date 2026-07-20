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
 * @method integer getId() 获取<p>规则Id</p>
 * @method void setId(integer $Id) 设置<p>规则Id</p>
 * @method integer getActionType() 获取<p>动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验</p>
 * @method void setActionType(integer $ActionType) 设置<p>动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验</p>
 * @method string getBypass() 获取<p>加白模块</p>
 * @method void setBypass(string $Bypass) 设置<p>加白模块</p>
 * @method integer getExpireTime() 获取<p>有效期</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>有效期</p>
 * @method string getName() 获取<p>规则名称</p>
 * @method void setName(string $Name) 设置<p>规则名称</p>
 * @method string getRedirect() 获取<p>重定向地址</p>
 * @method void setRedirect(string $Redirect) 设置<p>重定向地址</p>
 * @method integer getSortId() 获取<p>优先级</p>
 * @method void setSortId(integer $SortId) 设置<p>优先级</p>
 * @method integer getStatus() 获取<p>开关状态</p>
 * @method void setStatus(integer $Status) 设置<p>开关状态</p>
 * @method array getDomains() 获取<p>域名列表</p>
 * @method void setDomains(array $Domains) 设置<p>域名列表</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method array getStrategies() 获取<p>策略列表</p>
 * @method void setStrategies(array $Strategies) 设置<p>策略列表</p>
 * @method string getEventId() 获取<p>事件Id</p>
 * @method void setEventId(string $EventId) 设置<p>事件Id</p>
 * @method integer getValidStatus() 获取<p>生效状态</p>
 * @method void setValidStatus(integer $ValidStatus) 设置<p>生效状态</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getJobType() 获取<p>规则执行的方式，TimedJob为定时执行，CronJob为周期执行</p>
 * @method void setJobType(string $JobType) 设置<p>规则执行的方式，TimedJob为定时执行，CronJob为周期执行</p>
 * @method JobDateTime getJobDateTime() 获取<p>定时任务配置</p>
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置<p>定时任务配置</p>
 * @method string getCronType() 获取<p>周期任务粒度</p>
 * @method void setCronType(string $CronType) 设置<p>周期任务粒度</p>
 * @method string getLabel() 获取<p>标签</p>
 * @method void setLabel(string $Label) 设置<p>标签</p>
 * @method string getPageId() 获取<p>页面ID</p>
 * @method void setPageId(string $PageId) 设置<p>页面ID</p>
 * @method string getLogicalOp() 获取<p>匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系</p>
 * @method void setLogicalOp(string $LogicalOp) 设置<p>匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系</p>
 * @method integer getActionRatio() 获取<p>动作灰度的比例</p>
 * @method void setActionRatio(integer $ActionRatio) 设置<p>动作灰度的比例</p>
 * @method array getGroupIds() 获取<p>防护对象组ID</p>
 * @method void setGroupIds(array $GroupIds) 设置<p>防护对象组ID</p>
 */
class BatchCustomRuleListItem extends AbstractModel
{
    /**
     * @var integer <p>规则Id</p>
     */
    public $Id;

    /**
     * @var integer <p>动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验</p>
     */
    public $ActionType;

    /**
     * @var string <p>加白模块</p>
     */
    public $Bypass;

    /**
     * @var integer <p>有效期</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>规则名称</p>
     */
    public $Name;

    /**
     * @var string <p>重定向地址</p>
     */
    public $Redirect;

    /**
     * @var integer <p>优先级</p>
     */
    public $SortId;

    /**
     * @var integer <p>开关状态</p>
     */
    public $Status;

    /**
     * @var array <p>域名列表</p>
     */
    public $Domains;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var array <p>策略列表</p>
     */
    public $Strategies;

    /**
     * @var string <p>事件Id</p>
     */
    public $EventId;

    /**
     * @var integer <p>生效状态</p>
     */
    public $ValidStatus;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>规则执行的方式，TimedJob为定时执行，CronJob为周期执行</p>
     */
    public $JobType;

    /**
     * @var JobDateTime <p>定时任务配置</p>
     */
    public $JobDateTime;

    /**
     * @var string <p>周期任务粒度</p>
     */
    public $CronType;

    /**
     * @var string <p>标签</p>
     */
    public $Label;

    /**
     * @var string <p>页面ID</p>
     */
    public $PageId;

    /**
     * @var string <p>匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系</p>
     */
    public $LogicalOp;

    /**
     * @var integer <p>动作灰度的比例</p>
     */
    public $ActionRatio;

    /**
     * @var array <p>防护对象组ID</p>
     */
    public $GroupIds;

    /**
     * @param integer $Id <p>规则Id</p>
     * @param integer $ActionType <p>动作类型，1代表阻断，2代表人机识别，3代表观察，4代表重定向，5代表JS校验</p>
     * @param string $Bypass <p>加白模块</p>
     * @param integer $ExpireTime <p>有效期</p>
     * @param string $Name <p>规则名称</p>
     * @param string $Redirect <p>重定向地址</p>
     * @param integer $SortId <p>优先级</p>
     * @param integer $Status <p>开关状态</p>
     * @param array $Domains <p>域名列表</p>
     * @param string $Remark <p>备注</p>
     * @param array $Strategies <p>策略列表</p>
     * @param string $EventId <p>事件Id</p>
     * @param integer $ValidStatus <p>生效状态</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $JobType <p>规则执行的方式，TimedJob为定时执行，CronJob为周期执行</p>
     * @param JobDateTime $JobDateTime <p>定时任务配置</p>
     * @param string $CronType <p>周期任务粒度</p>
     * @param string $Label <p>标签</p>
     * @param string $PageId <p>页面ID</p>
     * @param string $LogicalOp <p>匹配条件的逻辑关系，支持and、or，分别表示多个逻辑匹配条件是与、或的关系</p>
     * @param integer $ActionRatio <p>动作灰度的比例</p>
     * @param array $GroupIds <p>防护对象组ID</p>
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

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
