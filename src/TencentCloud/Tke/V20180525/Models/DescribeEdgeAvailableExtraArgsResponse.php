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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeAvailableExtraArgs返回参数结构体
 *
 * @method string getClusterVersion() 获取集群版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method EdgeAvailableExtraArgs getAvailableExtraArgs() 获取可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableExtraArgs(EdgeAvailableExtraArgs $AvailableExtraArgs) 设置可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEdgeAvailableExtraArgsResponse extends AbstractModel
{
    /**
     * @var string 集群版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterVersion;

    /**
     * @var EdgeAvailableExtraArgs 可用的自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableExtraArgs;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterVersion 集群版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param EdgeAvailableExtraArgs $AvailableExtraArgs 可用的自定义参数
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
        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("AvailableExtraArgs",$param) and $param["AvailableExtraArgs"] !== null) {
            $this->AvailableExtraArgs = new EdgeAvailableExtraArgs();
            $this->AvailableExtraArgs->deserialize($param["AvailableExtraArgs"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
