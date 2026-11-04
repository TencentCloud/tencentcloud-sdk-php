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
 * @method string getBackupId() 获取<p>备份点ID</p>
 * @method void setBackupId(string $BackupId) 设置<p>备份点ID</p>
 * @method string getBackupName() 获取<p>备份名称</p>
 * @method void setBackupName(string $BackupName) 设置<p>备份名称</p>
 * @method string getPlanId() 获取<p>所属计划ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlanId(string $PlanId) 设置<p>所属计划ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAspInstanceId() 获取<p>策略ID</p>
 * @method void setAspInstanceId(string $AspInstanceId) 设置<p>策略ID</p>
 * @method string getResourceId() 获取<p>资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID</p>
 * @method integer getStatus() 获取<p>备份状态，取值如下：<br>0 备份完成<br>1 创建中（备份进行中）<br>2 部分成功（指定的备份路径中部分目录不存在）<br>3 恢复中（该备份点正在被恢复任务使用）<br>92  已取消<br>98 创建失败<br>99 已删除<br>100 删除中</p>
 * @method void setStatus(integer $Status) 设置<p>备份状态，取值如下：<br>0 备份完成<br>1 创建中（备份进行中）<br>2 部分成功（指定的备份路径中部分目录不存在）<br>3 恢复中（该备份点正在被恢复任务使用）<br>92  已取消<br>98 创建失败<br>99 已删除<br>100 删除中</p>
 * @method array getBackupPaths() 获取<p>备份路径</p>
 * @method void setBackupPaths(array $BackupPaths) 设置<p>备份路径</p>
 * @method array getIncludeFileTypes() 获取<p>包含文件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeFileTypes(array $IncludeFileTypes) 设置<p>包含文件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExcludePatterns() 获取<p>排除路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludePatterns(array $ExcludePatterns) 设置<p>排除路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getExcludeSystemDirectories() 获取<p>是否排除系统目录</p>
 * @method void setExcludeSystemDirectories(boolean $ExcludeSystemDirectories) 设置<p>是否排除系统目录</p>
 * @method string getVaultId() 获取<p>备份库ID</p>
 * @method void setVaultId(string $VaultId) 设置<p>备份库ID</p>
 * @method integer getScannedFileCount() 获取<p>扫描文件数</p>
 * @method void setScannedFileCount(integer $ScannedFileCount) 设置<p>扫描文件数</p>
 * @method integer getScannedSize() 获取<p>扫描大小(字节)</p>
 * @method void setScannedSize(integer $ScannedSize) 设置<p>扫描大小(字节)</p>
 * @method string getScannedSizeFormatted() 获取<p>扫描大小(格式化)</p>
 * @method void setScannedSizeFormatted(string $ScannedSizeFormatted) 设置<p>扫描大小(格式化)</p>
 * @method integer getBackupFileCount() 获取<p>已备份文件数量</p>
 * @method void setBackupFileCount(integer $BackupFileCount) 设置<p>已备份文件数量</p>
 * @method integer getBackupSize() 获取<p>已备份大小(字节)</p>
 * @method void setBackupSize(integer $BackupSize) 设置<p>已备份大小(字节)</p>
 * @method string getBackupSizeFormatted() 获取<p>已备份大小(格式化)</p>
 * @method void setBackupSizeFormatted(string $BackupSizeFormatted) 设置<p>已备份大小(格式化)</p>
 * @method float getProgress() 获取<p>备份进度(0-100)</p>
 * @method void setProgress(float $Progress) 设置<p>备份进度(0-100)</p>
 * @method string getJobId() 获取<p>任务ID</p>
 * @method void setJobId(string $JobId) 设置<p>任务ID</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method boolean getIsPermanent() 获取<p>是否为永久保留</p>
 * @method void setIsPermanent(boolean $IsPermanent) 设置<p>是否为永久保留</p>
 * @method string getDeadline() 获取<p>到期时间</p>
 * @method void setDeadline(string $Deadline) 设置<p>到期时间</p>
 * @method array getNonExistSourcePaths() 获取<p>不存在的路径信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNonExistSourcePaths(array $NonExistSourcePaths) 设置<p>不存在的路径信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailReason() 获取<p>备份失败原因</p>
 * @method void setFailReason(string $FailReason) 设置<p>备份失败原因</p>
 * @method integer getAppId() 获取<p>备份所属AppId</p>
 * @method void setAppId(integer $AppId) 设置<p>备份所属AppId</p>
 * @method string getResourceType() 获取<p>备份类型</p>
 * @method void setResourceType(string $ResourceType) 设置<p>备份类型</p>
 * @method boolean getIsInventoryPending() 获取<p>cos备份场景使用，标识是否清单生成中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsInventoryPending(boolean $IsInventoryPending) 设置<p>cos备份场景使用，标识是否清单生成中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableObjectAcl() 获取<p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableObjectAcl(boolean $EnableObjectAcl) 设置<p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableObjectTags() 获取<p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableObjectTags(boolean $EnableObjectTags) 设置<p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloudResourceId() 获取<p>云上资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudResourceId(string $CloudResourceId) 设置<p>云上资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductType() 获取<p>产品存储类型</p><p>枚举值：</p><ul><li>SD： 文件系统通用标准型存储</li><li>HP： 文件系统通用性能性存储</li><li>TB： 文件系统Turbo标准型存储</li><li>TP： 文件系统Turbo性能型存储</li><li>THP： 文件系统Turbo吞吐型存储</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductType(string $ProductType) 设置<p>产品存储类型</p><p>枚举值：</p><ul><li>SD： 文件系统通用标准型存储</li><li>HP： 文件系统通用性能性存储</li><li>TB： 文件系统Turbo标准型存储</li><li>TP： 文件系统Turbo性能型存储</li><li>THP： 文件系统Turbo吞吐型存储</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupInfo extends AbstractModel
{
    /**
     * @var string <p>备份点ID</p>
     */
    public $BackupId;

    /**
     * @var string <p>备份名称</p>
     */
    public $BackupName;

    /**
     * @var string <p>所属计划ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlanId;

    /**
     * @var string <p>策略ID</p>
     */
    public $AspInstanceId;

    /**
     * @var string <p>资源ID</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>备份状态，取值如下：<br>0 备份完成<br>1 创建中（备份进行中）<br>2 部分成功（指定的备份路径中部分目录不存在）<br>3 恢复中（该备份点正在被恢复任务使用）<br>92  已取消<br>98 创建失败<br>99 已删除<br>100 删除中</p>
     */
    public $Status;

    /**
     * @var array <p>备份路径</p>
     */
    public $BackupPaths;

    /**
     * @var array <p>包含文件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeFileTypes;

    /**
     * @var array <p>排除路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcludePatterns;

    /**
     * @var boolean <p>是否排除系统目录</p>
     */
    public $ExcludeSystemDirectories;

    /**
     * @var string <p>备份库ID</p>
     */
    public $VaultId;

    /**
     * @var integer <p>扫描文件数</p>
     */
    public $ScannedFileCount;

    /**
     * @var integer <p>扫描大小(字节)</p>
     */
    public $ScannedSize;

    /**
     * @var string <p>扫描大小(格式化)</p>
     */
    public $ScannedSizeFormatted;

    /**
     * @var integer <p>已备份文件数量</p>
     */
    public $BackupFileCount;

    /**
     * @var integer <p>已备份大小(字节)</p>
     */
    public $BackupSize;

    /**
     * @var string <p>已备份大小(格式化)</p>
     */
    public $BackupSizeFormatted;

    /**
     * @var float <p>备份进度(0-100)</p>
     */
    public $Progress;

    /**
     * @var string <p>任务ID</p>
     */
    public $JobId;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var boolean <p>是否为永久保留</p>
     */
    public $IsPermanent;

    /**
     * @var string <p>到期时间</p>
     */
    public $Deadline;

    /**
     * @var array <p>不存在的路径信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NonExistSourcePaths;

    /**
     * @var string <p>备份失败原因</p>
     */
    public $FailReason;

    /**
     * @var integer <p>备份所属AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>备份类型</p>
     */
    public $ResourceType;

    /**
     * @var boolean <p>cos备份场景使用，标识是否清单生成中</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsInventoryPending;

    /**
     * @var boolean <p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableObjectAcl;

    /**
     * @var boolean <p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableObjectTags;

    /**
     * @var string <p>云上资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudResourceId;

    /**
     * @var string <p>产品存储类型</p><p>枚举值：</p><ul><li>SD： 文件系统通用标准型存储</li><li>HP： 文件系统通用性能性存储</li><li>TB： 文件系统Turbo标准型存储</li><li>TP： 文件系统Turbo性能型存储</li><li>THP： 文件系统Turbo吞吐型存储</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductType;

    /**
     * @param string $BackupId <p>备份点ID</p>
     * @param string $BackupName <p>备份名称</p>
     * @param string $PlanId <p>所属计划ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AspInstanceId <p>策略ID</p>
     * @param string $ResourceId <p>资源ID</p>
     * @param integer $Status <p>备份状态，取值如下：<br>0 备份完成<br>1 创建中（备份进行中）<br>2 部分成功（指定的备份路径中部分目录不存在）<br>3 恢复中（该备份点正在被恢复任务使用）<br>92  已取消<br>98 创建失败<br>99 已删除<br>100 删除中</p>
     * @param array $BackupPaths <p>备份路径</p>
     * @param array $IncludeFileTypes <p>包含文件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExcludePatterns <p>排除路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ExcludeSystemDirectories <p>是否排除系统目录</p>
     * @param string $VaultId <p>备份库ID</p>
     * @param integer $ScannedFileCount <p>扫描文件数</p>
     * @param integer $ScannedSize <p>扫描大小(字节)</p>
     * @param string $ScannedSizeFormatted <p>扫描大小(格式化)</p>
     * @param integer $BackupFileCount <p>已备份文件数量</p>
     * @param integer $BackupSize <p>已备份大小(字节)</p>
     * @param string $BackupSizeFormatted <p>已备份大小(格式化)</p>
     * @param float $Progress <p>备份进度(0-100)</p>
     * @param string $JobId <p>任务ID</p>
     * @param string $StartTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
     * @param string $CreatedTime <p>创建时间</p>
     * @param boolean $IsPermanent <p>是否为永久保留</p>
     * @param string $Deadline <p>到期时间</p>
     * @param array $NonExistSourcePaths <p>不存在的路径信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailReason <p>备份失败原因</p>
     * @param integer $AppId <p>备份所属AppId</p>
     * @param string $ResourceType <p>备份类型</p>
     * @param boolean $IsInventoryPending <p>cos备份场景使用，标识是否清单生成中</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableObjectAcl <p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableObjectTags <p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloudResourceId <p>云上资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductType <p>产品存储类型</p><p>枚举值：</p><ul><li>SD： 文件系统通用标准型存储</li><li>HP： 文件系统通用性能性存储</li><li>TB： 文件系统Turbo标准型存储</li><li>TP： 文件系统Turbo性能型存储</li><li>THP： 文件系统Turbo吞吐型存储</li></ul>
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

        if (array_key_exists("IsInventoryPending",$param) and $param["IsInventoryPending"] !== null) {
            $this->IsInventoryPending = $param["IsInventoryPending"];
        }

        if (array_key_exists("EnableObjectAcl",$param) and $param["EnableObjectAcl"] !== null) {
            $this->EnableObjectAcl = $param["EnableObjectAcl"];
        }

        if (array_key_exists("EnableObjectTags",$param) and $param["EnableObjectTags"] !== null) {
            $this->EnableObjectTags = $param["EnableObjectTags"];
        }

        if (array_key_exists("CloudResourceId",$param) and $param["CloudResourceId"] !== null) {
            $this->CloudResourceId = $param["CloudResourceId"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }
    }
}
