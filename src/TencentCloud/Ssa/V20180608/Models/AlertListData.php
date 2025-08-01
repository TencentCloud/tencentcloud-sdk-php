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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警列表响应数据
 *
 * @method integer getTotal() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlertList() 获取返回列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertList(array $AlertList) 设置返回列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlertListAggregations getAggregations() 获取聚合参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAggregations(AlertListAggregations $Aggregations) 设置聚合参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlertListData extends AbstractModel
{
    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var array 返回列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertList;

    /**
     * @var AlertListAggregations 聚合参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Aggregations;

    /**
     * @param integer $Total 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlertList 返回列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlertListAggregations $Aggregations 聚合参数
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AlertList",$param) and $param["AlertList"] !== null) {
            $this->AlertList = [];
            foreach ($param["AlertList"] as $key => $value){
                $obj = new AlertType();
                $obj->deserialize($value);
                array_push($this->AlertList, $obj);
            }
        }

        if (array_key_exists("Aggregations",$param) and $param["Aggregations"] !== null) {
            $this->Aggregations = new AlertListAggregations();
            $this->Aggregations->deserialize($param["Aggregations"]);
        }
    }
}
