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
 * 用于创建集群价格清单 节点价格详情
 *
 * @method string getNodeType() 获取节点类型 master core task common router mysql
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeType(string $NodeType) 设置节点类型 master core task common router mysql
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPartDetailPrice() 获取节点组成部分价格详情
 * @method void setPartDetailPrice(array $PartDetailPrice) 设置节点组成部分价格详情
 */
class NodeDetailPriceResult extends AbstractModel
{
    /**
     * @var string 节点类型 master core task common router mysql
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeType;

    /**
     * @var array 节点组成部分价格详情
     */
    public $PartDetailPrice;

    /**
     * @param string $NodeType 节点类型 master core task common router mysql
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PartDetailPrice 节点组成部分价格详情
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("PartDetailPrice",$param) and $param["PartDetailPrice"] !== null) {
            $this->PartDetailPrice = [];
            foreach ($param["PartDetailPrice"] as $key => $value){
                $obj = new PartDetailPriceItem();
                $obj->deserialize($value);
                array_push($this->PartDetailPrice, $obj);
            }
        }
    }
}
