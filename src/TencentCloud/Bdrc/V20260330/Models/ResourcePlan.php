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
 * @method string getResourceId() 获取<p>云服务器实例 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>云服务器实例 ID</p>
 * @method array getBackupPaths() 获取<p>备份路径，[0,20]</p>
 * @method void setBackupPaths(array $BackupPaths) 设置<p>备份路径，[0,20]</p>
 * @method array getIncludeFileTypes() 获取<p>包含文件类型，[0,20]</p>
 * @method void setIncludeFileTypes(array $IncludeFileTypes) 设置<p>包含文件类型，[0,20]</p>
 * @method array getExcludePatterns() 获取<p>排除路径，[0,20]</p>
 * @method void setExcludePatterns(array $ExcludePatterns) 设置<p>排除路径，[0,20]</p>
 * @method boolean getExcludeSystemDirectories() 获取<p>是否排除系统目录</p>
 * @method void setExcludeSystemDirectories(boolean $ExcludeSystemDirectories) 设置<p>是否排除系统目录</p>
 * @method boolean getExecuteImmediately() 获取<p>是否立即触发全量备份</p>
 * @method void setExecuteImmediately(boolean $ExecuteImmediately) 设置<p>是否立即触发全量备份</p>
 * @method boolean getEnableObjectAcl() 获取<p>cos备份是否备份ACL</p>
 * @method void setEnableObjectAcl(boolean $EnableObjectAcl) 设置<p>cos备份是否备份ACL</p>
 * @method boolean getEnableObjectTags() 获取<p>cos备份是否备份tag</p>
 * @method void setEnableObjectTags(boolean $EnableObjectTags) 设置<p>cos备份是否备份tag</p>
 */
class ResourcePlan extends AbstractModel
{
    /**
     * @var string <p>云服务器实例 ID</p>
     */
    public $ResourceId;

    /**
     * @var array <p>备份路径，[0,20]</p>
     */
    public $BackupPaths;

    /**
     * @var array <p>包含文件类型，[0,20]</p>
     */
    public $IncludeFileTypes;

    /**
     * @var array <p>排除路径，[0,20]</p>
     */
    public $ExcludePatterns;

    /**
     * @var boolean <p>是否排除系统目录</p>
     */
    public $ExcludeSystemDirectories;

    /**
     * @var boolean <p>是否立即触发全量备份</p>
     */
    public $ExecuteImmediately;

    /**
     * @var boolean <p>cos备份是否备份ACL</p>
     */
    public $EnableObjectAcl;

    /**
     * @var boolean <p>cos备份是否备份tag</p>
     */
    public $EnableObjectTags;

    /**
     * @param string $ResourceId <p>云服务器实例 ID</p>
     * @param array $BackupPaths <p>备份路径，[0,20]</p>
     * @param array $IncludeFileTypes <p>包含文件类型，[0,20]</p>
     * @param array $ExcludePatterns <p>排除路径，[0,20]</p>
     * @param boolean $ExcludeSystemDirectories <p>是否排除系统目录</p>
     * @param boolean $ExecuteImmediately <p>是否立即触发全量备份</p>
     * @param boolean $EnableObjectAcl <p>cos备份是否备份ACL</p>
     * @param boolean $EnableObjectTags <p>cos备份是否备份tag</p>
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

        if (array_key_exists("EnableObjectAcl",$param) and $param["EnableObjectAcl"] !== null) {
            $this->EnableObjectAcl = $param["EnableObjectAcl"];
        }

        if (array_key_exists("EnableObjectTags",$param) and $param["EnableObjectTags"] !== null) {
            $this->EnableObjectTags = $param["EnableObjectTags"];
        }
    }
}
