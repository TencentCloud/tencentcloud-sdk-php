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
 * @method string getResourceId() 获取<p>资源ID列表</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID列表</p>
 * @method string getPlanId() 获取<p>计划ID</p>
 * @method void setPlanId(string $PlanId) 设置<p>计划ID</p>
 * @method array getBackupPaths() 获取<p>备份路径列表，1~20 个</p>
 * @method void setBackupPaths(array $BackupPaths) 设置<p>备份路径列表，1~20 个</p>
 * @method array getIncludeFileTypes() 获取<p>包含文件类型，0~20 个</p>
 * @method void setIncludeFileTypes(array $IncludeFileTypes) 设置<p>包含文件类型，0~20 个</p>
 * @method array getExcludePatterns() 获取<p>排除文件路径列表，0~20 个</p>
 * @method void setExcludePatterns(array $ExcludePatterns) 设置<p>排除文件路径列表，0~20 个</p>
 * @method boolean getExcludeSystemDirectories() 获取<p>是否排除系统目录</p>
 * @method void setExcludeSystemDirectories(boolean $ExcludeSystemDirectories) 设置<p>是否排除系统目录</p>
 * @method string getBackupStorageId() 获取<p>备份库ID，此参数必填。</p>
 * @method void setBackupStorageId(string $BackupStorageId) 设置<p>备份库ID，此参数必填。</p>
 * @method string getDeadline() 获取<p>备份到期时间</p>
 * @method void setDeadline(string $Deadline) 设置<p>备份到期时间</p>
 * @method string getBackupName() 获取<p>备份名称</p>
 * @method void setBackupName(string $BackupName) 设置<p>备份名称</p>
 * @method string getResourceType() 获取<p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>CFS_AGENT： 文件系统备份</li><li>COS_AGENT： COS备份</li></ul><p>默认值：CVM_AGENT</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>CFS_AGENT： 文件系统备份</li><li>COS_AGENT： COS备份</li></ul><p>默认值：CVM_AGENT</p>
 * @method boolean getEnableObjectAcl() 获取<p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul><p>默认值：false</p>
 * @method void setEnableObjectAcl(boolean $EnableObjectAcl) 设置<p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul><p>默认值：false</p>
 * @method boolean getEnableObjectTags() 获取<p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul><p>默认值：false</p>
 * @method void setEnableObjectTags(boolean $EnableObjectTags) 设置<p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul><p>默认值：false</p>
 */
class CreateFileBackupRequest extends AbstractModel
{
    /**
     * @var string <p>资源ID列表</p>
     */
    public $ResourceId;

    /**
     * @var string <p>计划ID</p>
     */
    public $PlanId;

    /**
     * @var array <p>备份路径列表，1~20 个</p>
     */
    public $BackupPaths;

    /**
     * @var array <p>包含文件类型，0~20 个</p>
     */
    public $IncludeFileTypes;

    /**
     * @var array <p>排除文件路径列表，0~20 个</p>
     */
    public $ExcludePatterns;

    /**
     * @var boolean <p>是否排除系统目录</p>
     */
    public $ExcludeSystemDirectories;

    /**
     * @var string <p>备份库ID，此参数必填。</p>
     */
    public $BackupStorageId;

    /**
     * @var string <p>备份到期时间</p>
     */
    public $Deadline;

    /**
     * @var string <p>备份名称</p>
     */
    public $BackupName;

    /**
     * @var string <p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>CFS_AGENT： 文件系统备份</li><li>COS_AGENT： COS备份</li></ul><p>默认值：CVM_AGENT</p>
     */
    public $ResourceType;

    /**
     * @var boolean <p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul><p>默认值：false</p>
     */
    public $EnableObjectAcl;

    /**
     * @var boolean <p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul><p>默认值：false</p>
     */
    public $EnableObjectTags;

    /**
     * @param string $ResourceId <p>资源ID列表</p>
     * @param string $PlanId <p>计划ID</p>
     * @param array $BackupPaths <p>备份路径列表，1~20 个</p>
     * @param array $IncludeFileTypes <p>包含文件类型，0~20 个</p>
     * @param array $ExcludePatterns <p>排除文件路径列表，0~20 个</p>
     * @param boolean $ExcludeSystemDirectories <p>是否排除系统目录</p>
     * @param string $BackupStorageId <p>备份库ID，此参数必填。</p>
     * @param string $Deadline <p>备份到期时间</p>
     * @param string $BackupName <p>备份名称</p>
     * @param string $ResourceType <p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>CFS_AGENT： 文件系统备份</li><li>COS_AGENT： COS备份</li></ul><p>默认值：CVM_AGENT</p>
     * @param boolean $EnableObjectAcl <p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul><p>默认值：false</p>
     * @param boolean $EnableObjectTags <p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul><p>默认值：false</p>
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("EnableObjectAcl",$param) and $param["EnableObjectAcl"] !== null) {
            $this->EnableObjectAcl = $param["EnableObjectAcl"];
        }

        if (array_key_exists("EnableObjectTags",$param) and $param["EnableObjectTags"] !== null) {
            $this->EnableObjectTags = $param["EnableObjectTags"];
        }
    }
}
