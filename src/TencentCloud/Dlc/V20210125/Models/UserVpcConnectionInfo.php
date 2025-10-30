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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户vpc网络连接信息
 *
 * @method string getEngineNetworkId() 获取引擎网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineNetworkId(string $EngineNetworkId) 设置引擎网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserVpcId() 获取用户vpcid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserVpcId(string $UserVpcId) 设置用户vpcid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserVpcEndpointId() 获取用户终端节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserVpcEndpointId(string $UserVpcEndpointId) 设置用户终端节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserVpcEndpointName() 获取用户终端节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserVpcEndpointName(string $UserVpcEndpointName) 设置用户终端节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAccessConnectionInfos() 获取接入点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessConnectionInfos(array $AccessConnectionInfos) 设置接入点信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserVpcConnectionInfo extends AbstractModel
{
    /**
     * @var string 引擎网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineNetworkId;

    /**
     * @var string 用户vpcid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserVpcId;

    /**
     * @var string 用户终端节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserVpcEndpointId;

    /**
     * @var string 用户终端节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserVpcEndpointName;

    /**
     * @var array 接入点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessConnectionInfos;

    /**
     * @param string $EngineNetworkId 引擎网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserVpcId 用户vpcid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserVpcEndpointId 用户终端节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserVpcEndpointName 用户终端节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AccessConnectionInfos 接入点信息
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
        if (array_key_exists("EngineNetworkId",$param) and $param["EngineNetworkId"] !== null) {
            $this->EngineNetworkId = $param["EngineNetworkId"];
        }

        if (array_key_exists("UserVpcId",$param) and $param["UserVpcId"] !== null) {
            $this->UserVpcId = $param["UserVpcId"];
        }

        if (array_key_exists("UserVpcEndpointId",$param) and $param["UserVpcEndpointId"] !== null) {
            $this->UserVpcEndpointId = $param["UserVpcEndpointId"];
        }

        if (array_key_exists("UserVpcEndpointName",$param) and $param["UserVpcEndpointName"] !== null) {
            $this->UserVpcEndpointName = $param["UserVpcEndpointName"];
        }

        if (array_key_exists("AccessConnectionInfos",$param) and $param["AccessConnectionInfos"] !== null) {
            $this->AccessConnectionInfos = $param["AccessConnectionInfos"];
        }
    }
}
