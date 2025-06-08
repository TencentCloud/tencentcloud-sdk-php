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
 * 资源组/资源包使用趋势
 *
 * @method integer getTimestamp() 获取时间戳，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置时间戳，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpuUsagePercent() 获取CPU占用百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuUsagePercent(float $CpuUsagePercent) 设置CPU占用百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMemUsagePercent() 获取内存占用百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemUsagePercent(float $MemUsagePercent) 设置内存占用百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getConcurrencyUsage() 获取当前并发度使用百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcurrencyUsage(float $ConcurrencyUsage) 设置当前并发度使用百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getOceanusCuUsage() 获取oceanus CU使用百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOceanusCuUsage(float $OceanusCuUsage) 设置oceanus CU使用百分比
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExecutorUsageTrendInfo extends AbstractModel
{
    /**
     * @var integer 时间戳，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var float CPU占用百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuUsagePercent;

    /**
     * @var float 内存占用百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemUsagePercent;

    /**
     * @var float 当前并发度使用百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConcurrencyUsage;

    /**
     * @var float oceanus CU使用百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OceanusCuUsage;

    /**
     * @param integer $Timestamp 时间戳，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CpuUsagePercent CPU占用百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MemUsagePercent 内存占用百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ConcurrencyUsage 当前并发度使用百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $OceanusCuUsage oceanus CU使用百分比
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("CpuUsagePercent",$param) and $param["CpuUsagePercent"] !== null) {
            $this->CpuUsagePercent = $param["CpuUsagePercent"];
        }

        if (array_key_exists("MemUsagePercent",$param) and $param["MemUsagePercent"] !== null) {
            $this->MemUsagePercent = $param["MemUsagePercent"];
        }

        if (array_key_exists("ConcurrencyUsage",$param) and $param["ConcurrencyUsage"] !== null) {
            $this->ConcurrencyUsage = $param["ConcurrencyUsage"];
        }

        if (array_key_exists("OceanusCuUsage",$param) and $param["OceanusCuUsage"] !== null) {
            $this->OceanusCuUsage = $param["OceanusCuUsage"];
        }
    }
}
