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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量分布条目
 *
 * @method string getKey() 获取<p>条目 Key</p>
 * @method void setKey(string $Key) 设置<p>条目 Key</p>
 * @method array getItems() 获取<p>分布桶</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置<p>分布桶</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取<p>合计</p>
 * @method void setTotal(integer $Total) 设置<p>合计</p>
 */
class MetricDistributionBatchItem extends AbstractModel
{
    /**
     * @var string <p>条目 Key</p>
     */
    public $Key;

    /**
     * @var array <p>分布桶</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var integer <p>合计</p>
     */
    public $Total;

    /**
     * @param string $Key <p>条目 Key</p>
     * @param array $Items <p>分布桶</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total <p>合计</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new MetricDistributionItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
