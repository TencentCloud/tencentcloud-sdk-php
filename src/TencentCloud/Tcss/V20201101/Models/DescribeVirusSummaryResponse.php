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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVirusSummary返回参数结构体
 *
 * @method string getTaskId() 获取最近的一次扫描任务id
 * @method void setTaskId(string $TaskId) 设置最近的一次扫描任务id
 * @method integer getRiskContainerCnt() 获取木马影响容器个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskContainerCnt(integer $RiskContainerCnt) 设置木马影响容器个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskCnt() 获取待处理风险个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskCnt(integer $RiskCnt) 设置待处理风险个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirusDataBaseModifyTime() 获取病毒库更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirusDataBaseModifyTime(string $VirusDataBaseModifyTime) 设置病毒库更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskContainerIncrease() 获取木马影响容器个数较昨日增长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskContainerIncrease(integer $RiskContainerIncrease) 设置木马影响容器个数较昨日增长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskIncrease() 获取待处理风险个数较昨日增长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskIncrease(integer $RiskIncrease) 设置待处理风险个数较昨日增长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsolateIncrease() 获取隔离事件个数较昨日新增
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateIncrease(integer $IsolateIncrease) 设置隔离事件个数较昨日新增
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsolateCnt() 获取隔离事件总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateCnt(integer $IsolateCnt) 设置隔离事件总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVirusSummaryResponse extends AbstractModel
{
    /**
     * @var string 最近的一次扫描任务id
     */
    public $TaskId;

    /**
     * @var integer 木马影响容器个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskContainerCnt;

    /**
     * @var integer 待处理风险个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskCnt;

    /**
     * @var string 病毒库更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirusDataBaseModifyTime;

    /**
     * @var integer 木马影响容器个数较昨日增长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskContainerIncrease;

    /**
     * @var integer 待处理风险个数较昨日增长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskIncrease;

    /**
     * @var integer 隔离事件个数较昨日新增
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateIncrease;

    /**
     * @var integer 隔离事件总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateCnt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 最近的一次扫描任务id
     * @param integer $RiskContainerCnt 木马影响容器个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskCnt 待处理风险个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirusDataBaseModifyTime 病毒库更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskContainerIncrease 木马影响容器个数较昨日增长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskIncrease 待处理风险个数较昨日增长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsolateIncrease 隔离事件个数较昨日新增
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsolateCnt 隔离事件总数
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RiskContainerCnt",$param) and $param["RiskContainerCnt"] !== null) {
            $this->RiskContainerCnt = $param["RiskContainerCnt"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("VirusDataBaseModifyTime",$param) and $param["VirusDataBaseModifyTime"] !== null) {
            $this->VirusDataBaseModifyTime = $param["VirusDataBaseModifyTime"];
        }

        if (array_key_exists("RiskContainerIncrease",$param) and $param["RiskContainerIncrease"] !== null) {
            $this->RiskContainerIncrease = $param["RiskContainerIncrease"];
        }

        if (array_key_exists("RiskIncrease",$param) and $param["RiskIncrease"] !== null) {
            $this->RiskIncrease = $param["RiskIncrease"];
        }

        if (array_key_exists("IsolateIncrease",$param) and $param["IsolateIncrease"] !== null) {
            $this->IsolateIncrease = $param["IsolateIncrease"];
        }

        if (array_key_exists("IsolateCnt",$param) and $param["IsolateCnt"] !== null) {
            $this->IsolateCnt = $param["IsolateCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
