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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份点信息
 *
 * @method string getBackupId() 获取备份点ID
 * @method void setBackupId(string $BackupId) 设置备份点ID
 * @method string getBackupName() 获取备份名称
 * @method void setBackupName(string $BackupName) 设置备份名称
 * @method string getPlanId() 获取所属计划ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlanId(string $PlanId) 设置所属计划ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAspInstanceId() 获取策略ID
 * @method void setAspInstanceId(string $AspInstanceId) 设置策略ID
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method integer getStatus() 获取备份状态，取值如下：
0 备份完成
1 创建中（备份进行中）
2 部分成功（指定的备份路径中部分目录不存在）
3 恢复中（该备份点正在被恢复任务使用）
92  已取消
98 创建失败
99 已删除
100 删除中

 * @method void setStatus(integer $Status) 设置备份状态，取值如下：
0 备份完成
1 创建中（备份进行中）
2 部分成功（指定的备份路径中部分目录不存在）
3 恢复中（该备份点正在被恢复任务使用）
92  已取消
98 创建失败
99 已删除
100 删除中

 * @method array getBackupPaths() 获取备份路径
 * @method void setBackupPaths(array $BackupPaths) 设置备份路径
 * @method array getIncludeFileTypes() 获取包含文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeFileTypes(array $IncludeFileTypes) 设置包含文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExcludePatterns() 获取排除路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludePatterns(array $ExcludePatterns) 设置排除路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getExcludeSystemDirectories() 获取是否排除系统目录
 * @method void setExcludeSystemDirectories(boolean $ExcludeSystemDirectories) 设置是否排除系统目录
 * @method string getVaultId() 获取备份库ID
 * @method void setVaultId(string $VaultId) 设置备份库ID
 * @method integer getScannedFileCount() 获取扫描文件数
 * @method void setScannedFileCount(integer $ScannedFileCount) 设置扫描文件数
 * @method integer getScannedSize() 获取扫描大小(字节)
 * @method void setScannedSize(integer $ScannedSize) 设置扫描大小(字节)
 * @method string getScannedSizeFormatted() 获取扫描大小(格式化)
 * @method void setScannedSizeFormatted(string $ScannedSizeFormatted) 设置扫描大小(格式化)
 * @method integer getBackupFileCount() 获取已备份文件数量
 * @method void setBackupFileCount(integer $BackupFileCount) 设置已备份文件数量
 * @method integer getBackupSize() 获取已备份大小(字节)
 * @method void setBackupSize(integer $BackupSize) 设置已备份大小(字节)
 * @method string getBackupSizeFormatted() 获取已备份大小(格式化)
 * @method void setBackupSizeFormatted(string $BackupSizeFormatted) 设置已备份大小(格式化)
 * @method float getProgress() 获取备份进度(0-100)
 * @method void setProgress(float $Progress) 设置备份进度(0-100)
 * @method string getJobId() 获取任务ID
 * @method void setJobId(string $JobId) 设置任务ID
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method boolean getIsPermanent() 获取是否为永久保留
 * @method void setIsPermanent(boolean $IsPermanent) 设置是否为永久保留
 * @method string getDeadline() 获取到期时间
 * @method void setDeadline(string $Deadline) 设置到期时间
 * @method array getNonExistSourcePaths() 获取不存在的路径信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNonExistSourcePaths(array $NonExistSourcePaths) 设置不存在的路径信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailReason() 获取备份失败原因
 * @method void setFailReason(string $FailReason) 设置备份失败原因
 * @method integer getAppId() 获取备份所属AppId
 * @method void setAppId(integer $AppId) 设置备份所属AppId
 * @method string getResourceType() 获取备份类型
 * @method void setResourceType(string $ResourceType) 设置备份类型
 */
class BackupInfo extends AbstractModel
{
    /**
     * @var string 备份点ID
     */
    public $BackupId;

    /**
     * @var string 备份名称
     */
    public $BackupName;

    /**
     * @var string 所属计划ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlanId;

    /**
     * @var string 策略ID
     */
    public $AspInstanceId;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var integer 备份状态，取值如下：
0 备份完成
1 创建中（备份进行中）
2 部分成功（指定的备份路径中部分目录不存在）
3 恢复中（该备份点正在被恢复任务使用）
92  已取消
98 创建失败
99 已删除
100 删除中

     */
    public $Status;

    /**
     * @var array 备份路径
     */
    public $BackupPaths;

    /**
     * @var array 包含文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeFileTypes;

    /**
     * @var array 排除路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcludePatterns;

    /**
     * @var boolean 是否排除系统目录
     */
    public $ExcludeSystemDirectories;

    /**
     * @var string 备份库ID
     */
    public $VaultId;

    /**
     * @var integer 扫描文件数
     */
    public $ScannedFileCount;

    /**
     * @var integer 扫描大小(字节)
     */
    public $ScannedSize;

    /**
     * @var string 扫描大小(格式化)
     */
    public $ScannedSizeFormatted;

    /**
     * @var integer 已备份文件数量
     */
    public $BackupFileCount;

    /**
     * @var integer 已备份大小(字节)
     */
    public $BackupSize;

    /**
     * @var string 已备份大小(格式化)
     */
    public $BackupSizeFormatted;

    /**
     * @var float 备份进度(0-100)
     */
    public $Progress;

    /**
     * @var string 任务ID
     */
    public $JobId;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var boolean 是否为永久保留
     */
    public $IsPermanent;

    /**
     * @var string 到期时间
     */
    public $Deadline;

    /**
     * @var array 不存在的路径信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NonExistSourcePaths;

    /**
     * @var string 备份失败原因
     */
    public $FailReason;

    /**
     * @var integer 备份所属AppId
     */
    public $AppId;

    /**
     * @var string 备份类型
     */
    public $ResourceType;

    /**
     * @param string $BackupId 备份点ID
     * @param string $BackupName 备份名称
     * @param string $PlanId 所属计划ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AspInstanceId 策略ID
     * @param string $ResourceId 资源ID
     * @param integer $Status 备份状态，取值如下：
0 备份完成
1 创建中（备份进行中）
2 部分成功（指定的备份路径中部分目录不存在）
3 恢复中（该备份点正在被恢复任务使用）
92  已取消
98 创建失败
99 已删除
100 删除中

     * @param array $BackupPaths 备份路径
     * @param array $IncludeFileTypes 包含文件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExcludePatterns 排除路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ExcludeSystemDirectories 是否排除系统目录
     * @param string $VaultId 备份库ID
     * @param integer $ScannedFileCount 扫描文件数
     * @param integer $ScannedSize 扫描大小(字节)
     * @param string $ScannedSizeFormatted 扫描大小(格式化)
     * @param integer $BackupFileCount 已备份文件数量
     * @param integer $BackupSize 已备份大小(字节)
     * @param string $BackupSizeFormatted 已备份大小(格式化)
     * @param float $Progress 备份进度(0-100)
     * @param string $JobId 任务ID
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $CreatedTime 创建时间
     * @param boolean $IsPermanent 是否为永久保留
     * @param string $Deadline 到期时间
     * @param array $NonExistSourcePaths 不存在的路径信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailReason 备份失败原因
     * @param integer $AppId 备份所属AppId
     * @param string $ResourceType 备份类型
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
        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("AspInstanceId",$param) and $param["AspInstanceId"] !== null) {
            $this->AspInstanceId = $param["AspInstanceId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BackupPaths",$param) and $param["BackupPaths"] !== null) {
            $this->BackupPaths = $param["BackupPaths"];
        }

        if (array_key_exists("IncludeFileTypes",$param) and $param["IncludeFileTypes"] !== null) {
            $this->IncludeFileTypes = $param["IncludeFileTypes"];
        }

        if (array_key_exists("ExcludePatterns",$param) and $param["ExcludePatterns"] !== null) {
            $this->ExcludePatterns = $param["ExcludePatterns"];
        }

        if (array_key_exists("ExcludeSystemDirectories",$param) and $param["ExcludeSystemDirectories"] !== null) {
            $this->ExcludeSystemDirectories = $param["ExcludeSystemDirectories"];
        }

        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }

        if (array_key_exists("ScannedFileCount",$param) and $param["ScannedFileCount"] !== null) {
            $this->ScannedFileCount = $param["ScannedFileCount"];
        }

        if (array_key_exists("ScannedSize",$param) and $param["ScannedSize"] !== null) {
            $this->ScannedSize = $param["ScannedSize"];
        }

        if (array_key_exists("ScannedSizeFormatted",$param) and $param["ScannedSizeFormatted"] !== null) {
            $this->ScannedSizeFormatted = $param["ScannedSizeFormatted"];
        }

        if (array_key_exists("BackupFileCount",$param) and $param["BackupFileCount"] !== null) {
            $this->BackupFileCount = $param["BackupFileCount"];
        }

        if (array_key_exists("BackupSize",$param) and $param["BackupSize"] !== null) {
            $this->BackupSize = $param["BackupSize"];
        }

        if (array_key_exists("BackupSizeFormatted",$param) and $param["BackupSizeFormatted"] !== null) {
            $this->BackupSizeFormatted = $param["BackupSizeFormatted"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("NonExistSourcePaths",$param) and $param["NonExistSourcePaths"] !== null) {
            $this->NonExistSourcePaths = $param["NonExistSourcePaths"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
