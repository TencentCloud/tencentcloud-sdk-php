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
 * @method integer getTotalCnt() 获取数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCnt(integer $TotalCnt) 设置数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClusterList() 获取集群信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterList(array $ClusterList) 设置集群信息列表
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *查询结果
 */
class ClusterInfoResult extends AbstractModel
{
    /**
     * @var integer 数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCnt;

    /**
     * @var array 集群信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterList;
    /**
     * @param integer $TotalCnt 数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClusterList 集群信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("ClusterList",$param) and $param["ClusterList"] !== null) {
            $this->ClusterList = [];
            foreach ($param["ClusterList"] as $key => $value){
                $obj = new ClusterInstanceInfo();
                $obj->deserialize($value);
                array_push($this->ClusterList, $obj);
            }
        }
    }
}
