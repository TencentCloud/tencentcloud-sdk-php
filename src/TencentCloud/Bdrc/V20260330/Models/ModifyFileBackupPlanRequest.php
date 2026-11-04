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
 * @method string getPlanId() 获取<p>备份计划ID，此参数必填。</p>
 * @method void setPlanId(string $PlanId) 设置<p>备份计划ID，此参数必填。</p>
 * @method string getPolicyId() 获取<p>备份策略ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>备份策略ID</p>
 * @method string getPlanName() 获取<p>计划名称</p>
 * @method void setPlanName(string $PlanName) 设置<p>计划名称</p>
 * @method array getBackupPaths() 获取<p>备份路径列表，1~20 个</p>
 * @method void setBackupPaths(array $BackupPaths) 设置<p>备份路径列表，1~20 个</p>
 * @method array getIncludeFileTypes() 获取<p>包含文件类型，0~20 个</p>
 * @method void setIncludeFileTypes(array $IncludeFileTypes) 设置<p>包含文件类型，0~20 个</p>
 * @method array getExcludePatterns() 获取<p>排除文件路径列表，0~20 个</p>
 * @method void setExcludePatterns(array $ExcludePatterns) 设置<p>排除文件路径列表，0~20 个</p>
 * @method boolean getExcludeSystemDirectories() 获取<p>是否排除系统目录</p>
 * @method void setExcludeSystemDirectories(boolean $ExcludeSystemDirectories) 设置<p>是否排除系统目录</p>
 * @method string getBackupStorageId() 获取<p>备份库ID</p>
 * @method void setBackupStorageId(string $BackupStorageId) 设置<p>备份库ID</p>
 * @method string getStatus() 获取<p>计划状态，可选值：normal（正常）、paused（暂停）</p>
 * @method void setStatus(string $Status) 设置<p>计划状态，可选值：normal（正常）、paused（暂停）</p>
 * @method boolean getEnableObjectAcl() 获取<p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method void setEnableObjectAcl(boolean $EnableObjectAcl) 设置<p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method boolean getEnableObjectTags() 获取<p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method void setEnableObjectTags(boolean $EnableObjectTags) 设置<p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 */
class ModifyFileBackupPlanRequest extends AbstractModel
{
    /**
     * @var string <p>备份计划ID，此参数必填。</p>
     */
    public $PlanId;

    /**
     * @var string <p>备份策略ID</p>
     * @deprecated
     */
    public $PolicyId;

    /**
     * @var string <p>计划名称</p>
     */
    public $PlanName;

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
     * @var string <p>备份库ID</p>
     * @deprecated
     */
    public $BackupStorageId;

    /**
     * @var string <p>计划状态，可选值：normal（正常）、paused（暂停）</p>
     */
    public $Status;

    /**
     * @var boolean <p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     */
    public $EnableObjectAcl;

    /**
     * @var boolean <p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     */
    public $EnableObjectTags;

    /**
     * @param string $PlanId <p>备份计划ID，此参数必填。</p>
     * @param string $PolicyId <p>备份策略ID</p>
     * @param string $PlanName <p>计划名称</p>
     * @param array $BackupPaths <p>备份路径列表，1~20 个</p>
     * @param array $IncludeFileTypes <p>包含文件类型，0~20 个</p>
     * @param array $ExcludePatterns <p>排除文件路径列表，0~20 个</p>
     * @param boolean $ExcludeSystemDirectories <p>是否排除系统目录</p>
     * @param string $BackupStorageId <p>备份库ID</p>
     * @param string $Status <p>计划状态，可选值：normal（正常）、paused（暂停）</p>
     * @param boolean $EnableObjectAcl <p>是否备份对象ACL（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     * @param boolean $EnableObjectTags <p>是否备份对象标签（仅COS备份支持）</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
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

        if (array_key_exists("EnableObjectAcl",$param) and $param["EnableObjectAcl"] !== null) {
            $this->EnableObjectAcl = $param["EnableObjectAcl"];
        }

        if (array_key_exists("EnableObjectTags",$param) and $param["EnableObjectTags"] !== null) {
            $this->EnableObjectTags = $param["EnableObjectTags"];
        }
    }
}
