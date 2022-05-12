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
 * 集群节点拓扑信息
 *
 * @method integer getZoneId() 获取可用区ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置可用区ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取可用区信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubnetInfoList() 获取子网信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetInfoList(array $SubnetInfoList) 设置子网信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeInfoList() 获取节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeInfoList(array $NodeInfoList) 设置节点信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopologyInfo extends AbstractModel
{
    /**
     * @var integer 可用区ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string 可用区信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var array 子网信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetInfoList;

    /**
     * @var array 节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeInfoList;

    /**
     * @param integer $ZoneId 可用区ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 可用区信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubnetInfoList 子网信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeInfoList 节点信息
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SubnetInfoList",$param) and $param["SubnetInfoList"] !== null) {
            $this->SubnetInfoList = [];
            foreach ($param["SubnetInfoList"] as $key => $value){
                $obj = new SubnetInfo();
                $obj->deserialize($value);
                array_push($this->SubnetInfoList, $obj);
            }
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new ShortNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }
    }
}
