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
 * CreateFileBackup请求参数结构体
 *
 * @method string getResourceId() 获取资源ID列表
 * @method void setResourceId(string $ResourceId) 设置资源ID列表
 * @method string getPlanId() 获取计划ID
 * @method void setPlanId(string $PlanId) 设置计划ID
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
 * @method string getDeadline() 获取备份到期时间
 * @method void setDeadline(string $Deadline) 设置备份到期时间
 * @method string getBackupName() 获取备份名称
 * @method void setBackupName(string $BackupName) 设置备份名称
 */
class CreateFileBackupRequest extends AbstractModel
{
    /**
     * @var string 资源ID列表
     */
    public $ResourceId;

    /**
     * @var string 计划ID
     */
    public $PlanId;

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
     */
    public $BackupStorageId;

    /**
     * @var string 备份到期时间
     */
    public $Deadline;

    /**
     * @var string 备份名称
     */
    public $BackupName;

    /**
     * @param string $ResourceId 资源ID列表
     * @param string $PlanId 计划ID
     * @param array $BackupPaths 备份路径列表，1~20 个
     * @param array $IncludeFileTypes 包含文件类型，0~20 个
     * @param array $ExcludePatterns 排除文件路径列表，0~20 个
     * @param boolean $ExcludeSystemDirectories 是否排除系统目录
     * @param string $BackupStorageId 备份库ID
     * @param string $Deadline 备份到期时间
     * @param string $BackupName 备份名称
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
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

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }
    }
}
