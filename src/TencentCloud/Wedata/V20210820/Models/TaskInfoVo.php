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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务信息
 *
 * @method string getAppID() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppID(string $AppID) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOnwerUid() 获取主账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnwerUid(string $OnwerUid) 设置主账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInChargeId() 获取负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInChargeId(string $InChargeId) 设置负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobId() 获取jobId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置jobId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineType() 获取引擎类型，DLC、EMR
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineType(string $EngineType) 设置引擎类型，DLC、EMR
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineName() 获取引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineName(string $EngineName) 设置引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineSubType() 获取引擎子类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineSubType(string $EngineSubType) 设置引擎子类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineTaskId() 获取引擎taskId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineTaskId(string $EngineTaskId) 设置引擎taskId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineExeStatus() 获取引擎执行状态，枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExeStatus(string $EngineExeStatus) 设置引擎执行状态，枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineExeUser() 获取引擎执行用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExeUser(string $EngineExeUser) 设置引擎执行用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineExeStartTime() 获取引擎执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExeStartTime(string $EngineExeStartTime) 设置引擎执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineExeEndTime() 获取引擎执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExeEndTime(string $EngineExeEndTime) 设置引擎执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductSource() 获取数据来源,DATA_INTEGRATION、DATA_EXPLORATION、DATA_QUALITY、OM_CENTER等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductSource(string $ProductSource) 设置数据来源,DATA_INTEGRATION、DATA_EXPLORATION、DATA_QUALITY、OM_CENTER等
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskInfoVo extends AbstractModel
{
    /**
     * @var string 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppID;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var integer 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string 主账号id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnwerUid;

    /**
     * @var string 负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InChargeId;

    /**
     * @var string 实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string jobId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 引擎类型，DLC、EMR
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineType;

    /**
     * @var string 引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineName;

    /**
     * @var string 引擎子类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineSubType;

    /**
     * @var string 引擎taskId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineTaskId;

    /**
     * @var string 引擎执行状态，枚举
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExeStatus;

    /**
     * @var string 引擎执行用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExeUser;

    /**
     * @var string 引擎执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExeStartTime;

    /**
     * @var string 引擎执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExeEndTime;

    /**
     * @var string 数据来源,DATA_INTEGRATION、DATA_EXPLORATION、DATA_QUALITY、OM_CENTER等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductSource;

    /**
     * @param string $AppID 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OnwerUid 主账号id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InChargeId 负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobId jobId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineType 引擎类型，DLC、EMR
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineName 引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineSubType 引擎子类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineTaskId 引擎taskId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineExeStatus 引擎执行状态，枚举
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineExeUser 引擎执行用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineExeStartTime 引擎执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineExeEndTime 引擎执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductSource 数据来源,DATA_INTEGRATION、DATA_EXPLORATION、DATA_QUALITY、OM_CENTER等
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("OnwerUid",$param) and $param["OnwerUid"] !== null) {
            $this->OnwerUid = $param["OnwerUid"];
        }

        if (array_key_exists("InChargeId",$param) and $param["InChargeId"] !== null) {
            $this->InChargeId = $param["InChargeId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("EngineSubType",$param) and $param["EngineSubType"] !== null) {
            $this->EngineSubType = $param["EngineSubType"];
        }

        if (array_key_exists("EngineTaskId",$param) and $param["EngineTaskId"] !== null) {
            $this->EngineTaskId = $param["EngineTaskId"];
        }

        if (array_key_exists("EngineExeStatus",$param) and $param["EngineExeStatus"] !== null) {
            $this->EngineExeStatus = $param["EngineExeStatus"];
        }

        if (array_key_exists("EngineExeUser",$param) and $param["EngineExeUser"] !== null) {
            $this->EngineExeUser = $param["EngineExeUser"];
        }

        if (array_key_exists("EngineExeStartTime",$param) and $param["EngineExeStartTime"] !== null) {
            $this->EngineExeStartTime = $param["EngineExeStartTime"];
        }

        if (array_key_exists("EngineExeEndTime",$param) and $param["EngineExeEndTime"] !== null) {
            $this->EngineExeEndTime = $param["EngineExeEndTime"];
        }

        if (array_key_exists("ProductSource",$param) and $param["ProductSource"] !== null) {
            $this->ProductSource = $param["ProductSource"];
        }
    }
}
