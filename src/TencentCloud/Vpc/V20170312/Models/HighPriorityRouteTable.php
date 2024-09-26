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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高优路由表信息
 *
 * @method string getHighPriorityRouteTableId() 获取高优路由表唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighPriorityRouteTableId(string $HighPriorityRouteTableId) 设置高优路由表唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取VPC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取高优路由表名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置高优路由表名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubnetSet() 获取高优路由表关联的子网列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetSet(array $SubnetSet) 设置高优路由表关联的子网列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHighPriorityRouteSet() 获取高优路由表条目信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighPriorityRouteSet(array $HighPriorityRouteSet) 设置高优路由表条目信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class HighPriorityRouteTable extends AbstractModel
{
    /**
     * @var string 高优路由表唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighPriorityRouteTableId;

    /**
     * @var string VPC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 高优路由表名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 高优路由表关联的子网列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetSet;

    /**
     * @var array 高优路由表条目信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighPriorityRouteSet;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @param string $HighPriorityRouteTableId 高优路由表唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId VPC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 高优路由表名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubnetSet 高优路由表关联的子网列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HighPriorityRouteSet 高优路由表条目信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。
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
        if (array_key_exists("HighPriorityRouteTableId",$param) and $param["HighPriorityRouteTableId"] !== null) {
            $this->HighPriorityRouteTableId = $param["HighPriorityRouteTableId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SubnetSet",$param) and $param["SubnetSet"] !== null) {
            $this->SubnetSet = $param["SubnetSet"];
        }

        if (array_key_exists("HighPriorityRouteSet",$param) and $param["HighPriorityRouteSet"] !== null) {
            $this->HighPriorityRouteSet = [];
            foreach ($param["HighPriorityRouteSet"] as $key => $value){
                $obj = new HighPriorityRoute();
                $obj->deserialize($value);
                array_push($this->HighPriorityRouteSet, $obj);
            }
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
