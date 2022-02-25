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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 超额信息结果
 *
 * @method integer getCount() 获取记录总数。
 * @method void setCount(integer $Count) 设置记录总数。
 * @method array getData() 获取超额信息数据。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置超额信息数据。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryExceedingInfoResult extends AbstractModel
{
    /**
     * @var integer 记录总数。
     */
    public $Count;

    /**
     * @var array 超额信息数据。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @param integer $Count 记录总数。
     * @param array $Data 超额信息数据。
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new QueryExceedingInfoData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
