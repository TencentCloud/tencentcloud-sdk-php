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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述Savepoint信息
 *
 * @method integer getId() 获取<p>主键</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置<p>主键</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersionId() 获取<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(integer $VersionId) 设置<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>状态 1: Active; 2: Expired; 3: InProgress; 4: Failed; 5: Timeout</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>状态 1: Active; 2: Expired; 3: InProgress; 4: Failed; 5: Timeout</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取<p>路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置<p>路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取<p>大小</p><p>单位：Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置<p>大小</p><p>单位：Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordType() 获取<p>快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordType(integer $RecordType) 设置<p>快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobRuntimeId() 获取<p>运行作业实例的顺序 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobRuntimeId(integer $JobRuntimeId) 设置<p>运行作业实例的顺序 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取<p>固定超时时间</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置<p>固定超时时间</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSerialId() 获取<p>快照 serialId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialId(string $SerialId) 设置<p>快照 serialId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeConsuming() 获取<p>耗时</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeConsuming(integer $TimeConsuming) 设置<p>耗时</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPathStatus() 获取<p>快照路径状态 1：可用；2：不可用；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathStatus(integer $PathStatus) 设置<p>快照路径状态 1：可用；2：不可用；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlinkVersion() 获取<p>Flink版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlinkVersion(string $FlinkVersion) 设置<p>Flink版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsIncremental() 获取<p>CheckPoint是否增量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsIncremental(string $IsIncremental) 设置<p>CheckPoint是否增量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckpointSize() 获取<p>checkpoint 大小</p><p>单位：Byte</p>
 * @method void setCheckpointSize(integer $CheckpointSize) 设置<p>checkpoint 大小</p><p>单位：Byte</p>
 */
class Savepoint extends AbstractModel
{
    /**
     * @var integer <p>主键</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var integer <p>状态 1: Active; 2: Expired; 3: InProgress; 4: Failed; 5: Timeout</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var integer <p>大小</p><p>单位：Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var integer <p>快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordType;

    /**
     * @var integer <p>运行作业实例的顺序 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobRuntimeId;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>固定超时时间</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @var string <p>快照 serialId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialId;

    /**
     * @var integer <p>耗时</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeConsuming;

    /**
     * @var integer <p>快照路径状态 1：可用；2：不可用；</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathStatus;

    /**
     * @var string <p>Flink版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlinkVersion;

    /**
     * @var string <p>CheckPoint是否增量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsIncremental;

    /**
     * @var integer <p>checkpoint 大小</p><p>单位：Byte</p>
     */
    public $CheckpointSize;

    /**
     * @param integer $Id <p>主键</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VersionId <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>状态 1: Active; 2: Expired; 3: InProgress; 4: Failed; 5: Timeout</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path <p>路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size <p>大小</p><p>单位：Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordType <p>快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobRuntimeId <p>运行作业实例的顺序 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout <p>固定超时时间</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SerialId <p>快照 serialId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeConsuming <p>耗时</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PathStatus <p>快照路径状态 1：可用；2：不可用；</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlinkVersion <p>Flink版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsIncremental <p>CheckPoint是否增量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckpointSize <p>checkpoint 大小</p><p>单位：Byte</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("JobRuntimeId",$param) and $param["JobRuntimeId"] !== null) {
            $this->JobRuntimeId = $param["JobRuntimeId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("SerialId",$param) and $param["SerialId"] !== null) {
            $this->SerialId = $param["SerialId"];
        }

        if (array_key_exists("TimeConsuming",$param) and $param["TimeConsuming"] !== null) {
            $this->TimeConsuming = $param["TimeConsuming"];
        }

        if (array_key_exists("PathStatus",$param) and $param["PathStatus"] !== null) {
            $this->PathStatus = $param["PathStatus"];
        }

        if (array_key_exists("FlinkVersion",$param) and $param["FlinkVersion"] !== null) {
            $this->FlinkVersion = $param["FlinkVersion"];
        }

        if (array_key_exists("IsIncremental",$param) and $param["IsIncremental"] !== null) {
            $this->IsIncremental = $param["IsIncremental"];
        }

        if (array_key_exists("CheckpointSize",$param) and $param["CheckpointSize"] !== null) {
            $this->CheckpointSize = $param["CheckpointSize"];
        }
    }
}
