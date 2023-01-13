<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method integer getId() 获取主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersionId() 获取版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(integer $VersionId) 设置版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态 1: Active; 2: Expired; 3: InProgress; 4: Failed; 5: Timeout
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态 1: Active; 2: Expired; 3: InProgress; 4: Failed; 5: Timeout
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordType() 获取快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordType(integer $RecordType) 设置快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobRuntimeId() 获取运行作业实例的顺序 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobRuntimeId(integer $JobRuntimeId) 设置运行作业实例的顺序 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取固定超时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置固定超时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSerialId() 获取快照 serialId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialId(string $SerialId) 设置快照 serialId
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeConsuming() 获取耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeConsuming(integer $TimeConsuming) 设置耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPathStatus() 获取快照路径状态 1：可用；2：不可用；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathStatus(integer $PathStatus) 设置快照路径状态 1：可用；2：不可用；
注意：此字段可能返回 null，表示取不到有效值。
 */
class Savepoint extends AbstractModel
{
    /**
     * @var integer 主键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var integer 状态 1: Active; 2: Expired; 3: InProgress; 4: Failed; 5: Timeout
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var integer 大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var integer 快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordType;

    /**
     * @var integer 运行作业实例的顺序 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobRuntimeId;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 固定超时时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @var string 快照 serialId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialId;

    /**
     * @var integer 耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeConsuming;

    /**
     * @var integer 快照路径状态 1：可用；2：不可用；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathStatus;

    /**
     * @param integer $Id 主键
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VersionId 版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态 1: Active; 2: Expired; 3: InProgress; 4: Failed; 5: Timeout
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path 路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size 大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordType 快照类型 1: savepoint；2: checkpoint；3: cancelWithSavepoint
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobRuntimeId 运行作业实例的顺序 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout 固定超时时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SerialId 快照 serialId
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeConsuming 耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PathStatus 快照路径状态 1：可用；2：不可用；
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
    }
}
