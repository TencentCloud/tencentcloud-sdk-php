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
 * 备份计划详情
 *
 * @method string getPlanId() 获取<p>备份计划ID</p>
 * @method void setPlanId(string $PlanId) 设置<p>备份计划ID</p>
 * @method array getResourceIds() 获取<p>计划关联的实例ID</p>
 * @method void setResourceIds(array $ResourceIds) 设置<p>计划关联的实例ID</p>
 * @method string getPlanName() 获取<p>计划名称</p>
 * @method void setPlanName(string $PlanName) 设置<p>计划名称</p>
 * @method array getBackupPaths() 获取<p>备份路径列表，1~20 个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupPaths(array $BackupPaths) 设置<p>备份路径列表，1~20 个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIncludeFileTypes() 获取<p>包含文件类型，0~20 个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeFileTypes(array $IncludeFileTypes) 设置<p>包含文件类型，0~20 个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExcludePatterns() 获取<p>排除文件路径列表，0~20 个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludePatterns(array $ExcludePatterns) 设置<p>排除文件路径列表，0~20 个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getExcludeSystemDirectories() 获取<p>是否排除系统目录</p>
 * @method void setExcludeSystemDirectories(boolean $ExcludeSystemDirectories) 设置<p>是否排除系统目录</p>
 * @method string getVaultId() 获取<p>备份库ID</p>
 * @method void setVaultId(string $VaultId) 设置<p>备份库ID</p>
 * @method string getStatus() 获取<p>备份计划状态</p>
 * @method void setStatus(string $Status) 设置<p>备份计划状态</p>
 * @method string getAspId() 获取<p>策略ID</p>
 * @method void setAspId(string $AspId) 设置<p>策略ID</p>
 * @method string getAspName() 获取<p>策略名称</p>
 * @method void setAspName(string $AspName) 设置<p>策略名称</p>
 * @method AspInfo getAspPolicy() 获取<p>策略详情</p>
 * @method void setAspPolicy(AspInfo $AspPolicy) 设置<p>策略详情</p>
 * @method string getLastExecuteTime() 获取<p>最近一次执行时间</p>
 * @method void setLastExecuteTime(string $LastExecuteTime) 设置<p>最近一次执行时间</p>
 * @method string getNextTriggerTime() 获取<p>下次触发时间</p>
 * @method void setNextTriggerTime(string $NextTriggerTime) 设置<p>下次触发时间</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method string getLastTriggerError() 获取<p>最近一次执行错误信息</p>
 * @method void setLastTriggerError(string $LastTriggerError) 设置<p>最近一次执行错误信息</p>
 * @method integer getBackupCount() 获取<p>备份数量</p>
 * @method void setBackupCount(integer $BackupCount) 设置<p>备份数量</p>
 * @method array getFlowControlSettings() 获取<p>流控信息</p>
 * @method void setFlowControlSettings(array $FlowControlSettings) 设置<p>流控信息</p>
 * @method boolean getEnableObjectAcl() 获取<p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableObjectAcl(boolean $EnableObjectAcl) 设置<p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableObjectTags() 获取<p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableObjectTags(boolean $EnableObjectTags) 设置<p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductType() 获取<p>产品存储类型。CFS 资源返回文件系统存储类型；非 CFS 资源无存储类型，返回资源类型标识。</p><p>枚举值：</p><ul><li>SD： 文件系统通用标准型存储</li><li>HP： 文件系统通用性能性存储</li><li>TB： 文件系统Turbo标准型存储</li><li>TP： 文件系统Turbo性能型存储</li><li>THP： 文件系统Turbo吞吐型存储</li><li>CVM_AGENT： CVM 资源（非 CFS 资源时返回）</li><li>COS_AGENT： COS 资源（非 CFS 资源时返回）</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductType(string $ProductType) 设置<p>产品存储类型。CFS 资源返回文件系统存储类型；非 CFS 资源无存储类型，返回资源类型标识。</p><p>枚举值：</p><ul><li>SD： 文件系统通用标准型存储</li><li>HP： 文件系统通用性能性存储</li><li>TB： 文件系统Turbo标准型存储</li><li>TP： 文件系统Turbo性能型存储</li><li>THP： 文件系统Turbo吞吐型存储</li><li>CVM_AGENT： CVM 资源（非 CFS 资源时返回）</li><li>COS_AGENT： COS 资源（非 CFS 资源时返回）</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PlanInfo extends AbstractModel
{
    /**
     * @var string <p>备份计划ID</p>
     */
    public $PlanId;

    /**
     * @var array <p>计划关联的实例ID</p>
     */
    public $ResourceIds;

    /**
     * @var string <p>计划名称</p>
     */
    public $PlanName;

    /**
     * @var array <p>备份路径列表，1~20 个</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupPaths;

    /**
     * @var array <p>包含文件类型，0~20 个</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeFileTypes;

    /**
     * @var array <p>排除文件路径列表，0~20 个</p>
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
     * @var string <p>备份计划状态</p>
     */
    public $Status;

    /**
     * @var string <p>策略ID</p>
     */
    public $AspId;

    /**
     * @var string <p>策略名称</p>
     */
    public $AspName;

    /**
     * @var AspInfo <p>策略详情</p>
     */
    public $AspPolicy;

    /**
     * @var string <p>最近一次执行时间</p>
     */
    public $LastExecuteTime;

    /**
     * @var string <p>下次触发时间</p>
     */
    public $NextTriggerTime;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>最近一次执行错误信息</p>
     */
    public $LastTriggerError;

    /**
     * @var integer <p>备份数量</p>
     */
    public $BackupCount;

    /**
     * @var array <p>流控信息</p>
     */
    public $FlowControlSettings;

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
     * @var string <p>产品存储类型。CFS 资源返回文件系统存储类型；非 CFS 资源无存储类型，返回资源类型标识。</p><p>枚举值：</p><ul><li>SD： 文件系统通用标准型存储</li><li>HP： 文件系统通用性能性存储</li><li>TB： 文件系统Turbo标准型存储</li><li>TP： 文件系统Turbo性能型存储</li><li>THP： 文件系统Turbo吞吐型存储</li><li>CVM_AGENT： CVM 资源（非 CFS 资源时返回）</li><li>COS_AGENT： COS 资源（非 CFS 资源时返回）</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductType;

    /**
     * @param string $PlanId <p>备份计划ID</p>
     * @param array $ResourceIds <p>计划关联的实例ID</p>
     * @param string $PlanName <p>计划名称</p>
     * @param array $BackupPaths <p>备份路径列表，1~20 个</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IncludeFileTypes <p>包含文件类型，0~20 个</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExcludePatterns <p>排除文件路径列表，0~20 个</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ExcludeSystemDirectories <p>是否排除系统目录</p>
     * @param string $VaultId <p>备份库ID</p>
     * @param string $Status <p>备份计划状态</p>
     * @param string $AspId <p>策略ID</p>
     * @param string $AspName <p>策略名称</p>
     * @param AspInfo $AspPolicy <p>策略详情</p>
     * @param string $LastExecuteTime <p>最近一次执行时间</p>
     * @param string $NextTriggerTime <p>下次触发时间</p>
     * @param string $CreatedTime <p>创建时间</p>
     * @param string $LastTriggerError <p>最近一次执行错误信息</p>
     * @param integer $BackupCount <p>备份数量</p>
     * @param array $FlowControlSettings <p>流控信息</p>
     * @param boolean $EnableObjectAcl <p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableObjectTags <p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductType <p>产品存储类型。CFS 资源返回文件系统存储类型；非 CFS 资源无存储类型，返回资源类型标识。</p><p>枚举值：</p><ul><li>SD： 文件系统通用标准型存储</li><li>HP： 文件系统通用性能性存储</li><li>TB： 文件系统Turbo标准型存储</li><li>TP： 文件系统Turbo性能型存储</li><li>THP： 文件系统Turbo吞吐型存储</li><li>CVM_AGENT： CVM 资源（非 CFS 资源时返回）</li><li>COS_AGENT： COS 资源（非 CFS 资源时返回）</li></ul>
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AspId",$param) and $param["AspId"] !== null) {
            $this->AspId = $param["AspId"];
        }

        if (array_key_exists("AspName",$param) and $param["AspName"] !== null) {
            $this->AspName = $param["AspName"];
        }

        if (array_key_exists("AspPolicy",$param) and $param["AspPolicy"] !== null) {
            $this->AspPolicy = new AspInfo();
            $this->AspPolicy->deserialize($param["AspPolicy"]);
        }

        if (array_key_exists("LastExecuteTime",$param) and $param["LastExecuteTime"] !== null) {
            $this->LastExecuteTime = $param["LastExecuteTime"];
        }

        if (array_key_exists("NextTriggerTime",$param) and $param["NextTriggerTime"] !== null) {
            $this->NextTriggerTime = $param["NextTriggerTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("LastTriggerError",$param) and $param["LastTriggerError"] !== null) {
            $this->LastTriggerError = $param["LastTriggerError"];
        }

        if (array_key_exists("BackupCount",$param) and $param["BackupCount"] !== null) {
            $this->BackupCount = $param["BackupCount"];
        }

        if (array_key_exists("FlowControlSettings",$param) and $param["FlowControlSettings"] !== null) {
            $this->FlowControlSettings = [];
            foreach ($param["FlowControlSettings"] as $key => $value){
                $obj = new FlowControlRule();
                $obj->deserialize($value);
                array_push($this->FlowControlSettings, $obj);
            }
        }

        if (array_key_exists("EnableObjectAcl",$param) and $param["EnableObjectAcl"] !== null) {
            $this->EnableObjectAcl = $param["EnableObjectAcl"];
        }

        if (array_key_exists("EnableObjectTags",$param) and $param["EnableObjectTags"] !== null) {
            $this->EnableObjectTags = $param["EnableObjectTags"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }
    }
}
