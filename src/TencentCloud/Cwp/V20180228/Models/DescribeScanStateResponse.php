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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanState返回参数结构体
 *
 * @method integer getScanState() 获取0 从未扫描过、 1 扫描中、 2扫描完成、 3停止中、 4停止完成
 * @method void setScanState(integer $ScanState) 设置0 从未扫描过、 1 扫描中、 2扫描完成、 3停止中、 4停止完成
 * @method integer getSchedule() 获取扫描进度
 * @method void setSchedule(integer $Schedule) 设置扫描进度
 * @method integer getTaskId() 获取任务Id
 * @method void setTaskId(integer $TaskId) 设置任务Id
 * @method array getVulId() 获取任务扫描的漏洞id
 * @method void setVulId(array $VulId) 设置任务扫描的漏洞id
 * @method integer getType() 获取0一键检测 1定时检测
 * @method void setType(integer $Type) 设置0一键检测 1定时检测
 * @method string getScanBeginTime() 获取开始扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanBeginTime(string $ScanBeginTime) 设置开始扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskEventCount() 获取扫描漏洞数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskEventCount(integer $RiskEventCount) 设置扫描漏洞数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanEndTime() 获取扫描结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanEndTime(string $ScanEndTime) 设置扫描结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeScanStateResponse extends AbstractModel
{
    /**
     * @var integer 0 从未扫描过、 1 扫描中、 2扫描完成、 3停止中、 4停止完成
     */
    public $ScanState;

    /**
     * @var integer 扫描进度
     */
    public $Schedule;

    /**
     * @var integer 任务Id
     */
    public $TaskId;

    /**
     * @var array 任务扫描的漏洞id
     */
    public $VulId;

    /**
     * @var integer 0一键检测 1定时检测
     */
    public $Type;

    /**
     * @var string 开始扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanBeginTime;

    /**
     * @var integer 扫描漏洞数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskEventCount;

    /**
     * @var string 扫描结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanEndTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ScanState 0 从未扫描过、 1 扫描中、 2扫描完成、 3停止中、 4停止完成
     * @param integer $Schedule 扫描进度
     * @param integer $TaskId 任务Id
     * @param array $VulId 任务扫描的漏洞id
     * @param integer $Type 0一键检测 1定时检测
     * @param string $ScanBeginTime 开始扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskEventCount 扫描漏洞数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanEndTime 扫描结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ScanState",$param) and $param["ScanState"] !== null) {
            $this->ScanState = $param["ScanState"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = $param["Schedule"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ScanBeginTime",$param) and $param["ScanBeginTime"] !== null) {
            $this->ScanBeginTime = $param["ScanBeginTime"];
        }

        if (array_key_exists("RiskEventCount",$param) and $param["RiskEventCount"] !== null) {
            $this->RiskEventCount = $param["RiskEventCount"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
