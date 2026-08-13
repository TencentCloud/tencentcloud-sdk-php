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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEDRScanTaskDetail返回参数结构体
 *
 * @method integer getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(integer $TaskId) 设置<p>任务ID</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getStatus() 获取<p>整体状态：WAIT/SCANNING/FINISHED/FAILED/CANCELED/TERMINATED/TIMEOUT</p>
 * @method void setStatus(string $Status) 设置<p>整体状态：WAIT/SCANNING/FINISHED/FAILED/CANCELED/TERMINATED/TIMEOUT</p>
 * @method string getTaskType() 获取<p>任务类型：HOST/CONTAINER</p>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型：HOST/CONTAINER</p>
 * @method string getTriggerType() 获取<p>触发方式：MANUAL/CYCLE</p>
 * @method void setTriggerType(string $TriggerType) 设置<p>触发方式：MANUAL/CYCLE</p>
 * @method string getStartTime() 获取<p>任务开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>任务开始时间</p>
 * @method string getEndTime() 获取<p>任务结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>任务结束时间</p>
 * @method string getScanType() 获取<p>检测模式：full/quick/include/exclude</p>
 * @method void setScanType(string $ScanType) 设置<p>检测模式：full/quick/include/exclude</p>
 * @method array getCustomPaths() 获取<p>自选路径列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomPaths(array $CustomPaths) 设置<p>自选路径列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取<p>超时时间（秒）</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间（秒）</p>
 * @method integer getEnableMemShellScan() 获取<p>是否开启深度检测：0-否/1-是</p>
 * @method void setEnableMemShellScan(integer $EnableMemShellScan) 设置<p>是否开启深度检测：0-否/1-是</p>
 * @method integer getCreateAppID() 获取<p>创建者账号AppId</p>
 * @method void setCreateAppID(integer $CreateAppID) 设置<p>创建者账号AppId</p>
 * @method string getAccountName() 获取<p>任务创建者账号名称（后端富化）</p>
 * @method void setAccountName(string $AccountName) 设置<p>任务创建者账号名称（后端富化）</p>
 * @method integer getCloudType() 获取<p>创建者云类型</p>
 * @method void setCloudType(integer $CloudType) 设置<p>创建者云类型</p>
 * @method integer getTotalAssetCount() 获取<p>任务总资产数</p>
 * @method void setTotalAssetCount(integer $TotalAssetCount) 设置<p>任务总资产数</p>
 * @method integer getFinishedAssetCount() 获取<p>已完成资产数</p>
 * @method void setFinishedAssetCount(integer $FinishedAssetCount) 设置<p>已完成资产数</p>
 * @method integer getRiskAssetCount() 获取<p>风险资产数</p>
 * @method void setRiskAssetCount(integer $RiskAssetCount) 设置<p>风险资产数</p>
 * @method array getHostList() 获取<p>主机资产列表（TaskType=HOST时有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostList(array $HostList) 设置<p>主机资产列表（TaskType=HOST时有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getContainerList() 获取<p>容器资产列表（TaskType=CONTAINER时有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerList(array $ContainerList) 设置<p>容器资产列表（TaskType=CONTAINER时有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取<p>当前筛选条件下资产列表总条数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>当前筛选条件下资产列表总条数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEDRScanTaskDetailResponse extends AbstractModel
{
    /**
     * @var integer <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>整体状态：WAIT/SCANNING/FINISHED/FAILED/CANCELED/TERMINATED/TIMEOUT</p>
     */
    public $Status;

    /**
     * @var string <p>任务类型：HOST/CONTAINER</p>
     */
    public $TaskType;

    /**
     * @var string <p>触发方式：MANUAL/CYCLE</p>
     */
    public $TriggerType;

    /**
     * @var string <p>任务开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>任务结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>检测模式：full/quick/include/exclude</p>
     */
    public $ScanType;

    /**
     * @var array <p>自选路径列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomPaths;

    /**
     * @var integer <p>超时时间（秒）</p>
     */
    public $Timeout;

    /**
     * @var integer <p>是否开启深度检测：0-否/1-是</p>
     */
    public $EnableMemShellScan;

    /**
     * @var integer <p>创建者账号AppId</p>
     */
    public $CreateAppID;

    /**
     * @var string <p>任务创建者账号名称（后端富化）</p>
     */
    public $AccountName;

    /**
     * @var integer <p>创建者云类型</p>
     */
    public $CloudType;

    /**
     * @var integer <p>任务总资产数</p>
     */
    public $TotalAssetCount;

    /**
     * @var integer <p>已完成资产数</p>
     */
    public $FinishedAssetCount;

    /**
     * @var integer <p>风险资产数</p>
     */
    public $RiskAssetCount;

    /**
     * @var array <p>主机资产列表（TaskType=HOST时有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostList;

    /**
     * @var array <p>容器资产列表（TaskType=CONTAINER时有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerList;

    /**
     * @var integer <p>当前筛选条件下资产列表总条数</p>
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TaskId <p>任务ID</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $Status <p>整体状态：WAIT/SCANNING/FINISHED/FAILED/CANCELED/TERMINATED/TIMEOUT</p>
     * @param string $TaskType <p>任务类型：HOST/CONTAINER</p>
     * @param string $TriggerType <p>触发方式：MANUAL/CYCLE</p>
     * @param string $StartTime <p>任务开始时间</p>
     * @param string $EndTime <p>任务结束时间</p>
     * @param string $ScanType <p>检测模式：full/quick/include/exclude</p>
     * @param array $CustomPaths <p>自选路径列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout <p>超时时间（秒）</p>
     * @param integer $EnableMemShellScan <p>是否开启深度检测：0-否/1-是</p>
     * @param integer $CreateAppID <p>创建者账号AppId</p>
     * @param string $AccountName <p>任务创建者账号名称（后端富化）</p>
     * @param integer $CloudType <p>创建者云类型</p>
     * @param integer $TotalAssetCount <p>任务总资产数</p>
     * @param integer $FinishedAssetCount <p>已完成资产数</p>
     * @param integer $RiskAssetCount <p>风险资产数</p>
     * @param array $HostList <p>主机资产列表（TaskType=HOST时有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ContainerList <p>容器资产列表（TaskType=CONTAINER时有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount <p>当前筛选条件下资产列表总条数</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("CustomPaths",$param) and $param["CustomPaths"] !== null) {
            $this->CustomPaths = $param["CustomPaths"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("EnableMemShellScan",$param) and $param["EnableMemShellScan"] !== null) {
            $this->EnableMemShellScan = $param["EnableMemShellScan"];
        }

        if (array_key_exists("CreateAppID",$param) and $param["CreateAppID"] !== null) {
            $this->CreateAppID = $param["CreateAppID"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("TotalAssetCount",$param) and $param["TotalAssetCount"] !== null) {
            $this->TotalAssetCount = $param["TotalAssetCount"];
        }

        if (array_key_exists("FinishedAssetCount",$param) and $param["FinishedAssetCount"] !== null) {
            $this->FinishedAssetCount = $param["FinishedAssetCount"];
        }

        if (array_key_exists("RiskAssetCount",$param) and $param["RiskAssetCount"] !== null) {
            $this->RiskAssetCount = $param["RiskAssetCount"];
        }

        if (array_key_exists("HostList",$param) and $param["HostList"] !== null) {
            $this->HostList = [];
            foreach ($param["HostList"] as $key => $value){
                $obj = new EDRScanTaskHostItem();
                $obj->deserialize($value);
                array_push($this->HostList, $obj);
            }
        }

        if (array_key_exists("ContainerList",$param) and $param["ContainerList"] !== null) {
            $this->ContainerList = [];
            foreach ($param["ContainerList"] as $key => $value){
                $obj = new EDRScanTaskContainerItem();
                $obj->deserialize($value);
                array_push($this->ContainerList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
