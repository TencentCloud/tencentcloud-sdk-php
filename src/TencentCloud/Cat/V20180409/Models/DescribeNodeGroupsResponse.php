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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodeGroups返回参数结构体
 *
 * @method array getNodeList() 获取树状节点列表，总共两级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeList(array $NodeList) 设置树状节点列表，总共两级
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDistrictList() 获取省份或国家列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDistrictList(array $DistrictList) 设置省份或国家列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNetServiceList() 获取运营商列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetServiceList(array $NetServiceList) 设置运营商列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNodeGroupsResponse extends AbstractModel
{
    /**
     * @var array 树状节点列表，总共两级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeList;

    /**
     * @var array 省份或国家列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DistrictList;

    /**
     * @var array 运营商列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetServiceList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $NodeList 树状节点列表，总共两级
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DistrictList 省份或国家列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NetServiceList 运营商列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = [];
            foreach ($param["NodeList"] as $key => $value){
                $obj = new NodeTree();
                $obj->deserialize($value);
                array_push($this->NodeList, $obj);
            }
        }

        if (array_key_exists("DistrictList",$param) and $param["DistrictList"] !== null) {
            $this->DistrictList = [];
            foreach ($param["DistrictList"] as $key => $value){
                $obj = new DistinctOrNetServiceInfo();
                $obj->deserialize($value);
                array_push($this->DistrictList, $obj);
            }
        }

        if (array_key_exists("NetServiceList",$param) and $param["NetServiceList"] !== null) {
            $this->NetServiceList = [];
            foreach ($param["NetServiceList"] as $key => $value){
                $obj = new DistinctOrNetServiceInfo();
                $obj->deserialize($value);
                array_push($this->NetServiceList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
