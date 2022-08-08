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
 * 实例日志实体
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getCurRunDate() 获取数据时间
 * @method void setCurRunDate(string $CurRunDate) 设置数据时间
 * @method string getTries() 获取尝试运行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTries(string $Tries) 设置尝试运行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdate() 获取日志更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdate(string $LastUpdate) 设置日志更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrokerIp() 获取日志所在节点
 * @method void setBrokerIp(string $BrokerIp) 设置日志所在节点
 * @method string getOriginFileName() 获取文件名  含全路径
 * @method void setOriginFileName(string $OriginFileName) 设置文件名  含全路径
 * @method string getCreateTime() 获取日志创建时间
 * @method void setCreateTime(string $CreateTime) 设置日志创建时间
 * @method string getInstanceLogType() 获取实例日志类型, run: 运行; kill: 终止
 * @method void setInstanceLogType(string $InstanceLogType) 设置实例日志类型, run: 运行; kill: 终止
 * @method float getCostTime() 获取运行耗时
 * @method void setCostTime(float $CostTime) 设置运行耗时
 */
class InstanceLog extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 数据时间
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
     */
    public $BrokerIp;

    /**
     * @var string 文件名  含全路径
     */
    public $OriginFileName;

    /**
     * @var string 日志创建时间
     */
    public $CreateTime;

    /**
     * @var string 实例日志类型, run: 运行; kill: 终止
     */
    public $InstanceLogType;

    /**
     * @var float 运行耗时
     */
    public $CostTime;

    /**
     * @param string $TaskId 任务ID
     * @param string $CurRunDate 数据时间
     * @param string $Tries 尝试运行次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdate 日志更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrokerIp 日志所在节点
     * @param string $OriginFileName 文件名  含全路径
     * @param string $CreateTime 日志创建时间
     * @param string $InstanceLogType 实例日志类型, run: 运行; kill: 终止
     * @param float $CostTime 运行耗时
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

        if (array_key_exists("OriginFileName",$param) and $param["OriginFileName"] !== null) {
            $this->OriginFileName = $param["OriginFileName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceLogType",$param) and $param["InstanceLogType"] !== null) {
            $this->InstanceLogType = $param["InstanceLogType"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }
    }
}
