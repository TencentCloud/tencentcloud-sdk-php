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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扫描任务记录项
 *
 * @method integer getTaskId() 获取<p>任务主键 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(integer $TaskId) 设置<p>任务主键 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取<p>任务名称，如 Malware_20260702_030000</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置<p>任务名称，如 Malware_20260702_030000</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取<p>扫描类型</p><p>枚举值：</p><ul><li>MANNAL： 手动扫描</li><li>CYCLE： 定时扫描</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置<p>扫描类型</p><p>枚举值：</p><ul><li>MANNAL： 手动扫描</li><li>CYCLE： 定时扫描</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleDesc() 获取<p>定时调度描述（ScanType=1 时有值），如“每天 03:00:00”</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleDesc(string $ScheduleDesc) 设置<p>定时调度描述（ScanType=1 时有值），如“每天 03:00:00”</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskType() 获取<p>任务资产类型：0=主机扫描，1=容器扫描</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置<p>任务资产类型：0=主机扫描，1=容器扫描</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTargetAppIDs() 获取<p>扫描目标涉及的账号AppId列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetAppIDs(array $TargetAppIDs) 设置<p>扫描目标涉及的账号AppId列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountName() 获取<p>任务创建者账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountName(string $AccountName) 设置<p>任务创建者账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCloudType() 获取<p>云类型：0=腾讯云，1=AWS，2=Azure，4=阿里云</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudType(integer $CloudType) 设置<p>云类型：0=腾讯云，1=AWS，2=Azure，4=阿里云</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetSelectionType() 获取<p>资产选择方式：all=全部资产，tag=按标签选择，direct=直接选择</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetSelectionType(string $AssetSelectionType) 设置<p>资产选择方式：all=全部资产，tag=按标签选择，direct=直接选择</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalAssetCount() 获取<p>扫描资产总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalAssetCount(integer $TotalAssetCount) 设置<p>扫描资产总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateAppID() 获取<p>创建者账号AppId（前端据此判断操作权限）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateAppID(integer $CreateAppID) 设置<p>创建者账号AppId（前端据此判断操作权限）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取<p>创建者账号uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置<p>创建者账号uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorName() 获取<p>创建者账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorName(string $CreatorName) 设置<p>创建者账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreatorCloudType() 获取<p>创建者云类型：0=腾讯云, 1=AWS, 2=Azure, 4=阿里云</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorCloudType(integer $CreatorCloudType) 设置<p>创建者云类型：0=腾讯云, 1=AWS, 2=Azure, 4=阿里云</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>任务开始时间，格式 2006-01-02 15:04:05</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>任务开始时间，格式 2006-01-02 15:04:05</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>任务结束时间，未结束为空字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>任务结束时间，未结束为空字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>WAIT：待扫描，SCANNING：扫描中，FINISHED：已完成，FAILED：失败，CANCELED：已停止</p><p>枚举值：</p><ul><li>WAIT： 待扫描</li><li>SCANNING： 扫描中</li><li>FINISHED： 已完成</li><li>FAILED： 失败</li><li>CANCELED： 已停止</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>WAIT：待扫描，SCANNING：扫描中，FINISHED：已完成，FAILED：失败，CANCELED：已停止</p><p>枚举值：</p><ul><li>WAIT： 待扫描</li><li>SCANNING： 扫描中</li><li>FINISHED： 已完成</li><li>FAILED： 失败</li><li>CANCELED： 已停止</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class EDRScanRecordItem extends AbstractModel
{
    /**
     * @var integer <p>任务主键 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>任务名称，如 Malware_20260702_030000</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string <p>扫描类型</p><p>枚举值：</p><ul><li>MANNAL： 手动扫描</li><li>CYCLE： 定时扫描</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string <p>定时调度描述（ScanType=1 时有值），如“每天 03:00:00”</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleDesc;

    /**
     * @var string <p>任务资产类型：0=主机扫描，1=容器扫描</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var array <p>扫描目标涉及的账号AppId列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetAppIDs;

    /**
     * @var string <p>任务创建者账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountName;

    /**
     * @var integer <p>云类型：0=腾讯云，1=AWS，2=Azure，4=阿里云</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudType;

    /**
     * @var string <p>资产选择方式：all=全部资产，tag=按标签选择，direct=直接选择</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetSelectionType;

    /**
     * @var integer <p>扫描资产总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalAssetCount;

    /**
     * @var integer <p>创建者账号AppId（前端据此判断操作权限）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateAppID;

    /**
     * @var string <p>创建者账号uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string <p>创建者账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorName;

    /**
     * @var integer <p>创建者云类型：0=腾讯云, 1=AWS, 2=Azure, 4=阿里云</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorCloudType;

    /**
     * @var string <p>任务开始时间，格式 2006-01-02 15:04:05</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>任务结束时间，未结束为空字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>WAIT：待扫描，SCANNING：扫描中，FINISHED：已完成，FAILED：失败，CANCELED：已停止</p><p>枚举值：</p><ul><li>WAIT： 待扫描</li><li>SCANNING： 扫描中</li><li>FINISHED： 已完成</li><li>FAILED： 失败</li><li>CANCELED： 已停止</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param integer $TaskId <p>任务主键 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName <p>任务名称，如 Malware_20260702_030000</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType <p>扫描类型</p><p>枚举值：</p><ul><li>MANNAL： 手动扫描</li><li>CYCLE： 定时扫描</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleDesc <p>定时调度描述（ScanType=1 时有值），如“每天 03:00:00”</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskType <p>任务资产类型：0=主机扫描，1=容器扫描</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TargetAppIDs <p>扫描目标涉及的账号AppId列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountName <p>任务创建者账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CloudType <p>云类型：0=腾讯云，1=AWS，2=Azure，4=阿里云</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetSelectionType <p>资产选择方式：all=全部资产，tag=按标签选择，direct=直接选择</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalAssetCount <p>扫描资产总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateAppID <p>创建者账号AppId（前端据此判断操作权限）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator <p>创建者账号uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorName <p>创建者账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreatorCloudType <p>创建者云类型：0=腾讯云, 1=AWS, 2=Azure, 4=阿里云</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>任务开始时间，格式 2006-01-02 15:04:05</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>任务结束时间，未结束为空字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>WAIT：待扫描，SCANNING：扫描中，FINISHED：已完成，FAILED：失败，CANCELED：已停止</p><p>枚举值：</p><ul><li>WAIT： 待扫描</li><li>SCANNING： 扫描中</li><li>FINISHED： 已完成</li><li>FAILED： 失败</li><li>CANCELED： 已停止</li></ul>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TargetAppIDs",$param) and $param["TargetAppIDs"] !== null) {
            $this->TargetAppIDs = $param["TargetAppIDs"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("AssetSelectionType",$param) and $param["AssetSelectionType"] !== null) {
            $this->AssetSelectionType = $param["AssetSelectionType"];
        }

        if (array_key_exists("TotalAssetCount",$param) and $param["TotalAssetCount"] !== null) {
            $this->TotalAssetCount = $param["TotalAssetCount"];
        }

        if (array_key_exists("CreateAppID",$param) and $param["CreateAppID"] !== null) {
            $this->CreateAppID = $param["CreateAppID"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatorName",$param) and $param["CreatorName"] !== null) {
            $this->CreatorName = $param["CreatorName"];
        }

        if (array_key_exists("CreatorCloudType",$param) and $param["CreatorCloudType"] !== null) {
            $this->CreatorCloudType = $param["CreatorCloudType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
