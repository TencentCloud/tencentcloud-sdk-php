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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceRenewNodes返回参数结构体
 *
 * @method integer getTotalCnt() 获取查询到的节点总数
 * @method void setTotalCnt(integer $TotalCnt) 设置查询到的节点总数
 * @method array getNodeList() 获取节点详细信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeList(array $NodeList) 设置节点详细信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMetaInfo() 获取用户所有的标签键列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaInfo(array $MetaInfo) 设置用户所有的标签键列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRedisInfo() 获取集群依赖的Redis实例Id
 * @method void setRedisInfo(array $RedisInfo) 设置集群依赖的Redis实例Id
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceRenewNodesResponse extends AbstractModel
{
    /**
     * @var integer 查询到的节点总数
     */
    public $TotalCnt;

    /**
     * @var array 节点详细信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeList;

    /**
     * @var array 用户所有的标签键列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaInfo;

    /**
     * @var array 集群依赖的Redis实例Id
     */
    public $RedisInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCnt 查询到的节点总数
     * @param array $NodeList 节点详细信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MetaInfo 用户所有的标签键列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RedisInfo 集群依赖的Redis实例Id
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
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = [];
            foreach ($param["NodeList"] as $key => $value){
                $obj = new RenewInstancesInfo();
                $obj->deserialize($value);
                array_push($this->NodeList, $obj);
            }
        }

        if (array_key_exists("MetaInfo",$param) and $param["MetaInfo"] !== null) {
            $this->MetaInfo = $param["MetaInfo"];
        }

        if (array_key_exists("RedisInfo",$param) and $param["RedisInfo"] !== null) {
            $this->RedisInfo = $param["RedisInfo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
