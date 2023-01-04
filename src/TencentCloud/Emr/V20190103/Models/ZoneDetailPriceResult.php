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
 * 用于创建集群价格清单 不同可用区下价格详情
 *
 * @method string getZoneId() 获取可用区Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(string $ZoneId) 设置可用区Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeDetailPrice() 获取不同节点的价格详情
 * @method void setNodeDetailPrice(array $NodeDetailPrice) 设置不同节点的价格详情
 */
class ZoneDetailPriceResult extends AbstractModel
{
    /**
     * @var string 可用区Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var array 不同节点的价格详情
     */
    public $NodeDetailPrice;

    /**
     * @param string $ZoneId 可用区Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeDetailPrice 不同节点的价格详情
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("NodeDetailPrice",$param) and $param["NodeDetailPrice"] !== null) {
            $this->NodeDetailPrice = [];
            foreach ($param["NodeDetailPrice"] as $key => $value){
                $obj = new NodeDetailPriceResult();
                $obj->deserialize($value);
                array_push($this->NodeDetailPrice, $obj);
            }
        }
    }
}
