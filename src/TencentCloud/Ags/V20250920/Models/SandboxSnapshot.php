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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 沙箱快照
 *
 * @method string getSnapshotId() 获取<p>沙箱快照 ID</p>
 * @method void setSnapshotId(string $SnapshotId) 设置<p>沙箱快照 ID</p>
 * @method string getSnapshotName() 获取<p>沙箱快照名称</p>
 * @method void setSnapshotName(string $SnapshotName) 设置<p>沙箱快照名称</p>
 * @method string getSourceInstanceId() 获取<p>源沙箱实例 ID，沙箱快照由其派生</p>
 * @method void setSourceInstanceId(string $SourceInstanceId) 设置<p>源沙箱实例 ID，沙箱快照由其派生</p>
 * @method boolean getMemoryIncluded() 获取<p>制作快照时是否包含内存状态</p>
 * @method void setMemoryIncluded(boolean $MemoryIncluded) 设置<p>制作快照时是否包含内存状态</p>
 * @method string getStatus() 获取<p>沙箱快照状态</p><p>枚举值：</p><ul><li>ACTIVE： 可用</li><li>DELETING： 删除中</li><li>DELETED： 已删除</li></ul>
 * @method void setStatus(string $Status) 设置<p>沙箱快照状态</p><p>枚举值：</p><ul><li>ACTIVE： 可用</li><li>DELETING： 删除中</li><li>DELETED： 已删除</li></ul>
 * @method string getStatusReason() 获取<p>用于说明沙箱快照处于该状态的原因</p>
 * @method void setStatusReason(string $StatusReason) 设置<p>用于说明沙箱快照处于该状态的原因</p>
 * @method array getTags() 获取<p>云资源标签</p>
 * @method void setTags(array $Tags) 设置<p>云资源标签</p>
 * @method string getCreateTime() 获取<p>创建时间</p><p>参数格式：ISO8601</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p><p>参数格式：ISO8601</p>
 * @method string getUpdateTime() 获取<p>更新时间</p><p>参数格式：ISO8601</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p><p>参数格式：ISO8601</p>
 */
class SandboxSnapshot extends AbstractModel
{
    /**
     * @var string <p>沙箱快照 ID</p>
     */
    public $SnapshotId;

    /**
     * @var string <p>沙箱快照名称</p>
     */
    public $SnapshotName;

    /**
     * @var string <p>源沙箱实例 ID，沙箱快照由其派生</p>
     */
    public $SourceInstanceId;

    /**
     * @var boolean <p>制作快照时是否包含内存状态</p>
     */
    public $MemoryIncluded;

    /**
     * @var string <p>沙箱快照状态</p><p>枚举值：</p><ul><li>ACTIVE： 可用</li><li>DELETING： 删除中</li><li>DELETED： 已删除</li></ul>
     */
    public $Status;

    /**
     * @var string <p>用于说明沙箱快照处于该状态的原因</p>
     */
    public $StatusReason;

    /**
     * @var array <p>云资源标签</p>
     */
    public $Tags;

    /**
     * @var string <p>创建时间</p><p>参数格式：ISO8601</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p><p>参数格式：ISO8601</p>
     */
    public $UpdateTime;

    /**
     * @param string $SnapshotId <p>沙箱快照 ID</p>
     * @param string $SnapshotName <p>沙箱快照名称</p>
     * @param string $SourceInstanceId <p>源沙箱实例 ID，沙箱快照由其派生</p>
     * @param boolean $MemoryIncluded <p>制作快照时是否包含内存状态</p>
     * @param string $Status <p>沙箱快照状态</p><p>枚举值：</p><ul><li>ACTIVE： 可用</li><li>DELETING： 删除中</li><li>DELETED： 已删除</li></ul>
     * @param string $StatusReason <p>用于说明沙箱快照处于该状态的原因</p>
     * @param array $Tags <p>云资源标签</p>
     * @param string $CreateTime <p>创建时间</p><p>参数格式：ISO8601</p>
     * @param string $UpdateTime <p>更新时间</p><p>参数格式：ISO8601</p>
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            $this->SourceInstanceId = $param["SourceInstanceId"];
        }

        if (array_key_exists("MemoryIncluded",$param) and $param["MemoryIncluded"] !== null) {
            $this->MemoryIncluded = $param["MemoryIncluded"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
