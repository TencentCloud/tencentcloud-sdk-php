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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例日志简述信息
 *
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurRunDate() 获取数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurRunDate(string $CurRunDate) 设置数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTries() 获取尝试运行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTries(string $Tries) 设置尝试运行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdate() 获取日志更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdate(string $LastUpdate) 设置日志更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrokerIp() 获取日志所在节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerIp(string $BrokerIp) 设置日志所在节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileSize() 获取文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(string $FileSize) 设置文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginFileName() 获取文件名 含全路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginFileName(string $OriginFileName) 设置文件名 含全路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取日志创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置日志创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceLogType() 获取实例日志类型, run: 运行; kill: 终止
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceLogType(string $InstanceLogType) 设置实例日志类型, run: 运行; kill: 终止
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCostTime() 获取运行耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCostTime(string $CostTime) 设置运行耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceStatus() 获取实例状态 COMPLETED 完成 FAILED失败重试 EXPIRED失败 RUNNING运行中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态 COMPLETED 完成 FAILED失败重试 EXPIRED失败 RUNNING运行中
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceLogInfo extends AbstractModel
{
    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 数据时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurRunDate;

    /**
     * @var string 尝试运行次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tries;

    /**
     * @var string 日志更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdate;

    /**
     * @var string 日志所在节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerIp;

    /**
     * @var string 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 文件名 含全路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginFileName;

    /**
     * @var string 日志创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 实例日志类型, run: 运行; kill: 终止
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceLogType;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 运行耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CostTime;

    /**
     * @var string 实例状态 COMPLETED 完成 FAILED失败重试 EXPIRED失败 RUNNING运行中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatus;

    /**
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurRunDate 数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tries 尝试运行次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdate 日志更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrokerIp 日志所在节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileSize 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginFileName 文件名 含全路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 日志创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceLogType 实例日志类型, run: 运行; kill: 终止
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CostTime 运行耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceStatus 实例状态 COMPLETED 完成 FAILED失败重试 EXPIRED失败 RUNNING运行中
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("LastUpdate",$param) and $param["LastUpdate"] !== null) {
            $this->LastUpdate = $param["LastUpdate"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("OriginFileName",$param) and $param["OriginFileName"] !== null) {
            $this->OriginFileName = $param["OriginFileName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceLogType",$param) and $param["InstanceLogType"] !== null) {
            $this->InstanceLogType = $param["InstanceLogType"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }
    }
}
