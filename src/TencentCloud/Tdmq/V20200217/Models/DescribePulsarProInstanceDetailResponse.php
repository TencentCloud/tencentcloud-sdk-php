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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePulsarProInstanceDetail返回参数结构体
 *
 * @method PulsarProClusterInfo getClusterInfo() 获取集群信息
 * @method void setClusterInfo(PulsarProClusterInfo $ClusterInfo) 设置集群信息
 * @method array getNetworkAccessPointInfos() 获取集群网络接入点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkAccessPointInfos(array $NetworkAccessPointInfos) 设置集群网络接入点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method PulsarProClusterSpecInfo getClusterSpecInfo() 获取集群规格信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterSpecInfo(PulsarProClusterSpecInfo $ClusterSpecInfo) 设置集群规格信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePulsarProInstanceDetailResponse extends AbstractModel
{
    /**
     * @var PulsarProClusterInfo 集群信息
     */
    public $ClusterInfo;

    /**
     * @var array 集群网络接入点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkAccessPointInfos;

    /**
     * @var PulsarProClusterSpecInfo 集群规格信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterSpecInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param PulsarProClusterInfo $ClusterInfo 集群信息
     * @param array $NetworkAccessPointInfos 集群网络接入点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param PulsarProClusterSpecInfo $ClusterSpecInfo 集群规格信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = new PulsarProClusterInfo();
            $this->ClusterInfo->deserialize($param["ClusterInfo"]);
        }

        if (array_key_exists("NetworkAccessPointInfos",$param) and $param["NetworkAccessPointInfos"] !== null) {
            $this->NetworkAccessPointInfos = [];
            foreach ($param["NetworkAccessPointInfos"] as $key => $value){
                $obj = new PulsarNetworkAccessPointInfo();
                $obj->deserialize($value);
                array_push($this->NetworkAccessPointInfos, $obj);
            }
        }

        if (array_key_exists("ClusterSpecInfo",$param) and $param["ClusterSpecInfo"] !== null) {
            $this->ClusterSpecInfo = new PulsarProClusterSpecInfo();
            $this->ClusterSpecInfo->deserialize($param["ClusterSpecInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
