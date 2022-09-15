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
 * DescribeScanTaskDetails返回参数结构体
 *
 * @method array getScanTaskDetailList() 获取扫描任务信息列表
 * @method void setScanTaskDetailList(array $ScanTaskDetailList) 设置扫描任务信息列表
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method integer getScanMachineCount() 获取扫描机器总数
 * @method void setScanMachineCount(integer $ScanMachineCount) 设置扫描机器总数
 * @method integer getRiskMachineCount() 获取发现风险机器数
 * @method void setRiskMachineCount(integer $RiskMachineCount) 设置发现风险机器数
 * @method string getScanBeginTime() 获取扫描开始时间
 * @method void setScanBeginTime(string $ScanBeginTime) 设置扫描开始时间
 * @method string getScanEndTime() 获取扫描结束时间
 * @method void setScanEndTime(string $ScanEndTime) 设置扫描结束时间
 * @method integer getScanTime() 获取检测时间
 * @method void setScanTime(integer $ScanTime) 设置检测时间
 * @method integer getScanProgress() 获取扫描进度
 * @method void setScanProgress(integer $ScanProgress) 设置扫描进度
 * @method integer getScanLeftTime() 获取扫描剩余时间
 * @method void setScanLeftTime(integer $ScanLeftTime) 设置扫描剩余时间
 * @method array getScanContent() 获取扫描内容
 * @method void setScanContent(array $ScanContent) 设置扫描内容
 * @method array getVulInfo() 获取漏洞信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulInfo(array $VulInfo) 设置漏洞信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskEventCount() 获取风险事件个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskEventCount(integer $RiskEventCount) 设置风险事件个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取0一键检测 1定时检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置0一键检测 1定时检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStoppingAll() 获取任务是否全部正在被停止 ture是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoppingAll(boolean $StoppingAll) 设置任务是否全部正在被停止 ture是
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVulCount() 获取扫描出漏洞个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulCount(integer $VulCount) 设置扫描出漏洞个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeScanTaskDetailsResponse extends AbstractModel
{
    /**
     * @var array 扫描任务信息列表
     */
    public $ScanTaskDetailList;

    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var integer 扫描机器总数
     */
    public $ScanMachineCount;

    /**
     * @var integer 发现风险机器数
     */
    public $RiskMachineCount;

    /**
     * @var string 扫描开始时间
     */
    public $ScanBeginTime;

    /**
     * @var string 扫描结束时间
     */
    public $ScanEndTime;

    /**
     * @var integer 检测时间
     */
    public $ScanTime;

    /**
     * @var integer 扫描进度
     */
    public $ScanProgress;

    /**
     * @var integer 扫描剩余时间
     */
    public $ScanLeftTime;

    /**
     * @var array 扫描内容
     */
    public $ScanContent;

    /**
     * @var array 漏洞信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulInfo;

    /**
     * @var integer 风险事件个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskEventCount;

    /**
     * @var integer 0一键检测 1定时检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var boolean 任务是否全部正在被停止 ture是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoppingAll;

    /**
     * @var integer 扫描出漏洞个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ScanTaskDetailList 扫描任务信息列表
     * @param integer $TotalCount 总数
     * @param integer $ScanMachineCount 扫描机器总数
     * @param integer $RiskMachineCount 发现风险机器数
     * @param string $ScanBeginTime 扫描开始时间
     * @param string $ScanEndTime 扫描结束时间
     * @param integer $ScanTime 检测时间
     * @param integer $ScanProgress 扫描进度
     * @param integer $ScanLeftTime 扫描剩余时间
     * @param array $ScanContent 扫描内容
     * @param array $VulInfo 漏洞信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskEventCount 风险事件个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 0一键检测 1定时检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $StoppingAll 任务是否全部正在被停止 ture是
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VulCount 扫描出漏洞个数
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
        if (array_key_exists("ScanTaskDetailList",$param) and $param["ScanTaskDetailList"] !== null) {
            $this->ScanTaskDetailList = [];
            foreach ($param["ScanTaskDetailList"] as $key => $value){
                $obj = new ScanTaskDetails();
                $obj->deserialize($value);
                array_push($this->ScanTaskDetailList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ScanMachineCount",$param) and $param["ScanMachineCount"] !== null) {
            $this->ScanMachineCount = $param["ScanMachineCount"];
        }

        if (array_key_exists("RiskMachineCount",$param) and $param["RiskMachineCount"] !== null) {
            $this->RiskMachineCount = $param["RiskMachineCount"];
        }

        if (array_key_exists("ScanBeginTime",$param) and $param["ScanBeginTime"] !== null) {
            $this->ScanBeginTime = $param["ScanBeginTime"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("ScanProgress",$param) and $param["ScanProgress"] !== null) {
            $this->ScanProgress = $param["ScanProgress"];
        }

        if (array_key_exists("ScanLeftTime",$param) and $param["ScanLeftTime"] !== null) {
            $this->ScanLeftTime = $param["ScanLeftTime"];
        }

        if (array_key_exists("ScanContent",$param) and $param["ScanContent"] !== null) {
            $this->ScanContent = $param["ScanContent"];
        }

        if (array_key_exists("VulInfo",$param) and $param["VulInfo"] !== null) {
            $this->VulInfo = [];
            foreach ($param["VulInfo"] as $key => $value){
                $obj = new VulDetailInfo();
                $obj->deserialize($value);
                array_push($this->VulInfo, $obj);
            }
        }

        if (array_key_exists("RiskEventCount",$param) and $param["RiskEventCount"] !== null) {
            $this->RiskEventCount = $param["RiskEventCount"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StoppingAll",$param) and $param["StoppingAll"] !== null) {
            $this->StoppingAll = $param["StoppingAll"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
