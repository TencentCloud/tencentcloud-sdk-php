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
 * @method string getPlanId() 获取备份计划ID
 * @method void setPlanId(string $PlanId) 设置备份计划ID
 * @method array getResourceIds() 获取计划关联的实例ID
 * @method void setResourceIds(array $ResourceIds) 设置计划关联的实例ID
 * @method string getPlanName() 获取计划名称
 * @method void setPlanName(string $PlanName) 设置计划名称
 * @method array getBackupPaths() 获取备份路径列表，1~20 个
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupPaths(array $BackupPaths) 设置备份路径列表，1~20 个
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIncludeFileTypes() 获取包含文件类型，0~20 个
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeFileTypes(array $IncludeFileTypes) 设置包含文件类型，0~20 个
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExcludePatterns() 获取排除文件路径列表，0~20 个
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludePatterns(array $ExcludePatterns) 设置排除文件路径列表，0~20 个
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getExcludeSystemDirectories() 获取是否排除系统目录
 * @method void setExcludeSystemDirectories(boolean $ExcludeSystemDirectories) 设置是否排除系统目录
 * @method string getVaultId() 获取备份库ID
 * @method void setVaultId(string $VaultId) 设置备份库ID
 * @method string getStatus() 获取备份计划状态
 * @method void setStatus(string $Status) 设置备份计划状态
 * @method string getAspId() 获取策略ID
 * @method void setAspId(string $AspId) 设置策略ID
 * @method string getAspName() 获取策略名称
 * @method void setAspName(string $AspName) 设置策略名称
 * @method AspInfo getAspPolicy() 获取策略详情
 * @method void setAspPolicy(AspInfo $AspPolicy) 设置策略详情
 * @method string getLastExecuteTime() 获取最近一次执行时间
 * @method void setLastExecuteTime(string $LastExecuteTime) 设置最近一次执行时间
 * @method string getNextTriggerTime() 获取下次触发时间
 * @method void setNextTriggerTime(string $NextTriggerTime) 设置下次触发时间
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getLastTriggerError() 获取最近一次执行错误信息
 * @method void setLastTriggerError(string $LastTriggerError) 设置最近一次执行错误信息
 * @method integer getBackupCount() 获取备份数量
 * @method void setBackupCount(integer $BackupCount) 设置备份数量
 * @method array getFlowControlSettings() 获取流控信息
 * @method void setFlowControlSettings(array $FlowControlSettings) 设置流控信息
 */
class PlanInfo extends AbstractModel
{
    /**
     * @var string 备份计划ID
     */
    public $PlanId;

    /**
     * @var array 计划关联的实例ID
     */
    public $ResourceIds;

    /**
     * @var string 计划名称
     */
    public $PlanName;

    /**
     * @var array 备份路径列表，1~20 个
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupPaths;

    /**
     * @var array 包含文件类型，0~20 个
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeFileTypes;

    /**
     * @var array 排除文件路径列表，0~20 个
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
     * @var string 备份计划状态
     */
    public $Status;

    /**
     * @var string 策略ID
     */
    public $AspId;

    /**
     * @var string 策略名称
     */
    public $AspName;

    /**
     * @var AspInfo 策略详情
     */
    public $AspPolicy;

    /**
     * @var string 最近一次执行时间
     */
    public $LastExecuteTime;

    /**
     * @var string 下次触发时间
     */
    public $NextTriggerTime;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 最近一次执行错误信息
     */
    public $LastTriggerError;

    /**
     * @var integer 备份数量
     */
    public $BackupCount;

    /**
     * @var array 流控信息
     */
    public $FlowControlSettings;

    /**
     * @param string $PlanId 备份计划ID
     * @param array $ResourceIds 计划关联的实例ID
     * @param string $PlanName 计划名称
     * @param array $BackupPaths 备份路径列表，1~20 个
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IncludeFileTypes 包含文件类型，0~20 个
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExcludePatterns 排除文件路径列表，0~20 个
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ExcludeSystemDirectories 是否排除系统目录
     * @param string $VaultId 备份库ID
     * @param string $Status 备份计划状态
     * @param string $AspId 策略ID
     * @param string $AspName 策略名称
     * @param AspInfo $AspPolicy 策略详情
     * @param string $LastExecuteTime 最近一次执行时间
     * @param string $NextTriggerTime 下次触发时间
     * @param string $CreatedTime 创建时间
     * @param string $LastTriggerError 最近一次执行错误信息
     * @param integer $BackupCount 备份数量
     * @param array $FlowControlSettings 流控信息
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
    }
}
