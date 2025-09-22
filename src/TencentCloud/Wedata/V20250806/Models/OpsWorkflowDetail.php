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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流调度详情
 *
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowDesc() 获取工作流描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置工作流描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowType() 获取工作流类型：
 - cycle 周期；
 - manual手动
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowType(string $WorkflowType) 设置工作流类型：
 - cycle 周期；
 - manual手动
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartupTime() 获取延时执行时间,unit=minute
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartupTime(integer $StartupTime) 设置延时执行时间,unit=minute
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取配置生效日期 开始日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置配置生效日期 开始日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取配置结束日期 结束日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置配置结束日期 结束日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取任务周期类型
* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置任务周期类型
* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取文件夹Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置文件夹Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceInitStrategy() 获取任务实例初始化策略
 - T_PLUS_1（T+1）：延迟一天初始化
 - T_PLUS_0（T+0）：当天初始化
 - T_MINUS_1（T-1）：提前一天初始化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) 设置任务实例初始化策略
 - T_PLUS_1（T+1）：延迟一天初始化
 - T_PLUS_0（T+0）：当天初始化
 - T_MINUS_1（T-1）：提前一天初始化
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerDesc() 获取调度计划释义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerDesc(string $SchedulerDesc) 设置调度计划释义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstSubmitTime() 获取工作流首次提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstSubmitTime(string $FirstSubmitTime) 设置工作流首次提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestSubmitTime() 获取工作流最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestSubmitTime(string $LatestSubmitTime) 设置工作流最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取工作流状态
* ALL_RUNNING : 全部调度中
* ALL_FREEZED : 全部已暂停
* ALL_STOPPTED : 全部已下线
* PART_RUNNING : 部分调度中
* ALL_NO_RUNNING : 全部未调度
* ALL_INVALID : 全部已失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置工作流状态
* ALL_RUNNING : 全部调度中
* ALL_FREEZED : 全部已暂停
* ALL_STOPPTED : 全部已下线
* PART_RUNNING : 部分调度中
* ALL_NO_RUNNING : 全部未调度
* ALL_INVALID : 全部已失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取负责人, 多个以‘；’隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置负责人, 多个以‘；’隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class OpsWorkflowDetail extends AbstractModel
{
    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowDesc;

    /**
     * @var string 工作流类型：
 - cycle 周期；
 - manual手动
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowType;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 延时执行时间,unit=minute
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartupTime;

    /**
     * @var string 配置生效日期 开始日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 配置结束日期 结束日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 任务周期类型
* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var string 文件夹Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string 任务实例初始化策略
 - T_PLUS_1（T+1）：延迟一天初始化
 - T_PLUS_0（T+0）：当天初始化
 - T_MINUS_1（T-1）：提前一天初始化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceInitStrategy;

    /**
     * @var string 调度计划释义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerDesc;

    /**
     * @var string 工作流首次提交时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstSubmitTime;

    /**
     * @var string 工作流最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestSubmitTime;

    /**
     * @var string 工作流状态
* ALL_RUNNING : 全部调度中
* ALL_FREEZED : 全部已暂停
* ALL_STOPPTED : 全部已下线
* PART_RUNNING : 部分调度中
* ALL_NO_RUNNING : 全部未调度
* ALL_INVALID : 全部已失效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 负责人, 多个以‘；’隔开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowDesc 工作流描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowType 工作流类型：
 - cycle 周期；
 - manual手动
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartupTime 延时执行时间,unit=minute
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 配置生效日期 开始日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 配置结束日期 结束日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType 任务周期类型
* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 文件夹Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceInitStrategy 任务实例初始化策略
 - T_PLUS_1（T+1）：延迟一天初始化
 - T_PLUS_0（T+0）：当天初始化
 - T_MINUS_1（T-1）：提前一天初始化
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerDesc 调度计划释义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstSubmitTime 工作流首次提交时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestSubmitTime 工作流最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 工作流状态
* ALL_RUNNING : 全部调度中
* ALL_FREEZED : 全部已暂停
* ALL_STOPPTED : 全部已下线
* PART_RUNNING : 部分调度中
* ALL_NO_RUNNING : 全部未调度
* ALL_INVALID : 全部已失效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 负责人, 多个以‘；’隔开
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StartupTime",$param) and $param["StartupTime"] !== null) {
            $this->StartupTime = $param["StartupTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }

        if (array_key_exists("SchedulerDesc",$param) and $param["SchedulerDesc"] !== null) {
            $this->SchedulerDesc = $param["SchedulerDesc"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("LatestSubmitTime",$param) and $param["LatestSubmitTime"] !== null) {
            $this->LatestSubmitTime = $param["LatestSubmitTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }
    }
}
