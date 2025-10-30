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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDMQ参数详情
 *
 * @method string getClusterType() 获取集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(string $ClusterType) 设置集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterEndPoint() 获取集群支撑网接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterEndPoint(string $ClusterEndPoint) 设置集群支撑网接入点
注意：此字段可能返回 null，表示取不到有效值。
 */
class TDMQParams extends AbstractModel
{
    /**
     * @var string 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var string 集群支撑网接入点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterEndPoint;

    /**
     * @param string $ClusterType 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterEndPoint 集群支撑网接入点
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
        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterEndPoint",$param) and $param["ClusterEndPoint"] !== null) {
            $this->ClusterEndPoint = $param["ClusterEndPoint"];
        }
    }
}
