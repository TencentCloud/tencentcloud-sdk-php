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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 前端图表使用日志存储统计柱形图数据
 *
 * @method array getStorageType() 获取存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(array $StorageType) 设置存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDates() 获取日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDates(array $Dates) 设置日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getData() 获取数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class StorageHistogramShow extends AbstractModel
{
    /**
     * @var array 存储类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var array 日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dates;

    /**
     * @var array 数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @param array $StorageType 存储类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Dates 日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Data 数据
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
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("Dates",$param) and $param["Dates"] !== null) {
            $this->Dates = $param["Dates"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new IntArray();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
