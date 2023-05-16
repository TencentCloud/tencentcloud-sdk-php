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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群巡检检查结果
 *
 * @method string getClusterId() 获取集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取诊断开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置诊断开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取诊断结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置诊断结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStatistics() 获取诊断结果统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatistics(array $Statistics) 设置诊断结果统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDiagnostics() 获取诊断结果详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagnostics(array $Diagnostics) 设置诊断结果详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getError() 获取查询巡检报告相关报错
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setError(string $Error) 设置查询巡检报告相关报错
注意：此字段可能返回 null，表示取不到有效值。
 */
class KubeJarvisStateInspectionResult extends AbstractModel
{
    /**
     * @var string 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 诊断开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 诊断结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var array 诊断结果统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Statistics;

    /**
     * @var array 诊断结果详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Diagnostics;

    /**
     * @var string 查询巡检报告相关报错
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @param string $ClusterId 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 诊断开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 诊断结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Statistics 诊断结果统计
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Diagnostics 诊断结果详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Error 查询巡检报告相关报错
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = [];
            foreach ($param["Statistics"] as $key => $value){
                $obj = new KubeJarvisStateStatistic();
                $obj->deserialize($value);
                array_push($this->Statistics, $obj);
            }
        }

        if (array_key_exists("Diagnostics",$param) and $param["Diagnostics"] !== null) {
            $this->Diagnostics = [];
            foreach ($param["Diagnostics"] as $key => $value){
                $obj = new KubeJarvisStateDiagnostic();
                $obj->deserialize($value);
                array_push($this->Diagnostics, $obj);
            }
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
