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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HDFS文件存储详情
 *
 * @method string getMetricItem() 获取数据项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricItem(string $MetricItem) 设置数据项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricName() 获取数据项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置数据项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDps() 获取采样值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDps(array $Dps) 设置采样值
注意：此字段可能返回 null，表示取不到有效值。
 */
class StorageSummaryDistribution extends AbstractModel
{
    /**
     * @var string 数据项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricItem;

    /**
     * @var string 数据项描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @var array 采样值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dps;

    /**
     * @param string $MetricItem 数据项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricName 数据项描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Dps 采样值
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
        if (array_key_exists("MetricItem",$param) and $param["MetricItem"] !== null) {
            $this->MetricItem = $param["MetricItem"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Dps",$param) and $param["Dps"] !== null) {
            $this->Dps = [];
            foreach ($param["Dps"] as $key => $value){
                $obj = new Dps();
                $obj->deserialize($value);
                array_push($this->Dps, $obj);
            }
        }
    }
}
