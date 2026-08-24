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
 * 实例Id与备份计划映射信息
 *
 * @method string getResourceId() 获取云服务器实例 ID
 * @method void setResourceId(string $ResourceId) 设置云服务器实例 ID
 * @method array getBackupPaths() 获取备份路径，[0,20]
 * @method void setBackupPaths(array $BackupPaths) 设置备份路径，[0,20]
 * @method array getIncludeFileTypes() 获取包含文件类型，[0,20]
 * @method void setIncludeFileTypes(array $IncludeFileTypes) 设置包含文件类型，[0,20]
 * @method array getExcludePatterns() 获取排除路径，[0,20]
 * @method void setExcludePatterns(array $ExcludePatterns) 设置排除路径，[0,20]
 * @method boolean getExcludeSystemDirectories() 获取是否排除系统目录
 * @method void setExcludeSystemDirectories(boolean $ExcludeSystemDirectories) 设置是否排除系统目录
 * @method boolean getExecuteImmediately() 获取是否立即触发全量备份
 * @method void setExecuteImmediately(boolean $ExecuteImmediately) 设置是否立即触发全量备份
 */
class ResourcePlan extends AbstractModel
{
    /**
     * @var string 云服务器实例 ID
     */
    public $ResourceId;

    /**
     * @var array 备份路径，[0,20]
     */
    public $BackupPaths;

    /**
     * @var array 包含文件类型，[0,20]
     */
    public $IncludeFileTypes;

    /**
     * @var array 排除路径，[0,20]
     */
    public $ExcludePatterns;

    /**
     * @var boolean 是否排除系统目录
     */
    public $ExcludeSystemDirectories;

    /**
     * @var boolean 是否立即触发全量备份
     */
    public $ExecuteImmediately;

    /**
     * @param string $ResourceId 云服务器实例 ID
     * @param array $BackupPaths 备份路径，[0,20]
     * @param array $IncludeFileTypes 包含文件类型，[0,20]
     * @param array $ExcludePatterns 排除路径，[0,20]
     * @param boolean $ExcludeSystemDirectories 是否排除系统目录
     * @param boolean $ExecuteImmediately 是否立即触发全量备份
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

        if (array_key_exists("ExecuteImmediately",$param) and $param["ExecuteImmediately"] !== null) {
            $this->ExecuteImmediately = $param["ExecuteImmediately"];
        }
    }
}
