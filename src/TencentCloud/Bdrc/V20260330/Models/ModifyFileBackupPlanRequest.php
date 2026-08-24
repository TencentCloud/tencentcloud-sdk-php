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
 * ModifyFileBackupPlan请求参数结构体
 *
 * @method string getPlanId() 获取备份计划ID
 * @method void setPlanId(string $PlanId) 设置备份计划ID
 * @method string getPolicyId() 获取备份策略ID
 * @method void setPolicyId(string $PolicyId) 设置备份策略ID
 * @method string getPlanName() 获取计划名称
 * @method void setPlanName(string $PlanName) 设置计划名称
 * @method array getBackupPaths() 获取备份路径列表，1~20 个
 * @method void setBackupPaths(array $BackupPaths) 设置备份路径列表，1~20 个
 * @method array getIncludeFileTypes() 获取包含文件类型，0~20 个
 * @method void setIncludeFileTypes(array $IncludeFileTypes) 设置包含文件类型，0~20 个
 * @method array getExcludePatterns() 获取排除文件路径列表，0~20 个
 * @method void setExcludePatterns(array $ExcludePatterns) 设置排除文件路径列表，0~20 个
 * @method boolean getExcludeSystemDirectories() 获取是否排除系统目录
 * @method void setExcludeSystemDirectories(boolean $ExcludeSystemDirectories) 设置是否排除系统目录
 * @method string getBackupStorageId() 获取备份库ID
 * @method void setBackupStorageId(string $BackupStorageId) 设置备份库ID
 * @method string getStatus() 获取计划状态，可选值：normal（正常）、paused（暂停）
 * @method void setStatus(string $Status) 设置计划状态，可选值：normal（正常）、paused（暂停）
 */
class ModifyFileBackupPlanRequest extends AbstractModel
{
    /**
     * @var string 备份计划ID
     */
    public $PlanId;

    /**
     * @var string 备份策略ID
     * @deprecated
     */
    public $PolicyId;

    /**
     * @var string 计划名称
     */
    public $PlanName;

    /**
     * @var array 备份路径列表，1~20 个
     */
    public $BackupPaths;

    /**
     * @var array 包含文件类型，0~20 个
     */
    public $IncludeFileTypes;

    /**
     * @var array 排除文件路径列表，0~20 个
     */
    public $ExcludePatterns;

    /**
     * @var boolean 是否排除系统目录
     */
    public $ExcludeSystemDirectories;

    /**
     * @var string 备份库ID
     * @deprecated
     */
    public $BackupStorageId;

    /**
     * @var string 计划状态，可选值：normal（正常）、paused（暂停）
     */
    public $Status;

    /**
     * @param string $PlanId 备份计划ID
     * @param string $PolicyId 备份策略ID
     * @param string $PlanName 计划名称
     * @param array $BackupPaths 备份路径列表，1~20 个
     * @param array $IncludeFileTypes 包含文件类型，0~20 个
     * @param array $ExcludePatterns 排除文件路径列表，0~20 个
     * @param boolean $ExcludeSystemDirectories 是否排除系统目录
     * @param string $BackupStorageId 备份库ID
     * @param string $Status 计划状态，可选值：normal（正常）、paused（暂停）
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
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

        if (array_key_exists("BackupStorageId",$param) and $param["BackupStorageId"] !== null) {
            $this->BackupStorageId = $param["BackupStorageId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
