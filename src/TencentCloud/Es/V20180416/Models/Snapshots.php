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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群快照数据结构
 *
 * @method string getSnapshotName() 获取快照名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUuid() 获取快照Uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUuid(string $Uuid) 设置快照Uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取该快照所属集群的版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置该快照所属集群的版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndices() 获取备份的索引列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndices(array $Indices) 设置备份的索引列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataStreams() 获取备份的datastream列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataStreams(array $DataStreams) 设置备份的datastream列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取备份的状态

FAILED            备份失败

IN_PROGRESS 备份执行中

PARTIAL          备份部分成功，部分失败，备份失败的索引和原因会在Failures字段中展示

SUCCESS     备份成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置备份的状态

FAILED            备份失败

IN_PROGRESS 备份执行中

PARTIAL          备份部分成功，部分失败，备份失败的索引和原因会在Failures字段中展示

SUCCESS     备份成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取快照备份的开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置快照备份的开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取快照备份的结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置快照备份的结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDurationInMillis() 获取快照备份的耗时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurationInMillis(integer $DurationInMillis) 设置快照备份的耗时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalShards() 获取备份的总分片数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalShards(integer $TotalShards) 设置备份的总分片数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailedShards() 获取备份失败的分片数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedShards(integer $FailedShards) 设置备份失败的分片数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessfulShards() 获取备份成功的分片数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessfulShards(integer $SuccessfulShards) 设置备份成功的分片数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFailures() 获取备份失败的索引分片和失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailures(array $Failures) 设置备份失败的索引分片和失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserBackUp() 获取是否用户备份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserBackUp(string $UserBackUp) 设置是否用户备份
注意：此字段可能返回 null，表示取不到有效值。
 */
class Snapshots extends AbstractModel
{
    /**
     * @var string 快照名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotName;

    /**
     * @var string 快照Uuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uuid;

    /**
     * @var string 该快照所属集群的版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var array 备份的索引列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Indices;

    /**
     * @var array 备份的datastream列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataStreams;

    /**
     * @var string 备份的状态

FAILED            备份失败

IN_PROGRESS 备份执行中

PARTIAL          备份部分成功，部分失败，备份失败的索引和原因会在Failures字段中展示

SUCCESS     备份成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 快照备份的开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 快照备份的结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 快照备份的耗时时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DurationInMillis;

    /**
     * @var integer 备份的总分片数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalShards;

    /**
     * @var integer 备份失败的分片数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedShards;

    /**
     * @var integer 备份成功的分片数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessfulShards;

    /**
     * @var array 备份失败的索引分片和失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Failures;

    /**
     * @var string 是否用户备份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserBackUp;

    /**
     * @param string $SnapshotName 快照名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uuid 快照Uuid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 该快照所属集群的版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Indices 备份的索引列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataStreams 备份的datastream列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 备份的状态

FAILED            备份失败

IN_PROGRESS 备份执行中

PARTIAL          备份部分成功，部分失败，备份失败的索引和原因会在Failures字段中展示

SUCCESS     备份成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 快照备份的开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 快照备份的结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DurationInMillis 快照备份的耗时时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalShards 备份的总分片数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailedShards 备份失败的分片数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessfulShards 备份成功的分片数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Failures 备份失败的索引分片和失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserBackUp 是否用户备份
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
        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Indices",$param) and $param["Indices"] !== null) {
            $this->Indices = $param["Indices"];
        }

        if (array_key_exists("DataStreams",$param) and $param["DataStreams"] !== null) {
            $this->DataStreams = $param["DataStreams"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DurationInMillis",$param) and $param["DurationInMillis"] !== null) {
            $this->DurationInMillis = $param["DurationInMillis"];
        }

        if (array_key_exists("TotalShards",$param) and $param["TotalShards"] !== null) {
            $this->TotalShards = $param["TotalShards"];
        }

        if (array_key_exists("FailedShards",$param) and $param["FailedShards"] !== null) {
            $this->FailedShards = $param["FailedShards"];
        }

        if (array_key_exists("SuccessfulShards",$param) and $param["SuccessfulShards"] !== null) {
            $this->SuccessfulShards = $param["SuccessfulShards"];
        }

        if (array_key_exists("Failures",$param) and $param["Failures"] !== null) {
            $this->Failures = [];
            foreach ($param["Failures"] as $key => $value){
                $obj = new Failures();
                $obj->deserialize($value);
                array_push($this->Failures, $obj);
            }
        }

        if (array_key_exists("UserBackUp",$param) and $param["UserBackUp"] !== null) {
            $this->UserBackUp = $param["UserBackUp"];
        }
    }
}
