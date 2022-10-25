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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceBindGateway返回参数结构体
 *
 * @method string getGatewayProductId() 获取网关产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayProductId(string $GatewayProductId) 设置网关产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayDeviceName() 获取网关设备名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayDeviceName(string $GatewayDeviceName) 设置网关设备名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayName() 获取网关产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayName(string $GatewayName) 设置网关产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayProductOwnerName() 获取设备对应产品所属的主账号名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayProductOwnerName(string $GatewayProductOwnerName) 设置设备对应产品所属的主账号名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayProductOwnerUin() 获取设备对应产品所属的主账号 UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayProductOwnerUin(string $GatewayProductOwnerUin) 设置设备对应产品所属的主账号 UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDeviceBindGatewayResponse extends AbstractModel
{
    /**
     * @var string 网关产品ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayProductId;

    /**
     * @var string 网关设备名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayDeviceName;

    /**
     * @var string 网关产品名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayName;

    /**
     * @var string 设备对应产品所属的主账号名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayProductOwnerName;

    /**
     * @var string 设备对应产品所属的主账号 UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayProductOwnerUin;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $GatewayProductId 网关产品ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayDeviceName 网关设备名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayName 网关产品名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayProductOwnerName 设备对应产品所属的主账号名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayProductOwnerUin 设备对应产品所属的主账号 UIN
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
        if (array_key_exists("GatewayProductId",$param) and $param["GatewayProductId"] !== null) {
            $this->GatewayProductId = $param["GatewayProductId"];
        }

        if (array_key_exists("GatewayDeviceName",$param) and $param["GatewayDeviceName"] !== null) {
            $this->GatewayDeviceName = $param["GatewayDeviceName"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("GatewayProductOwnerName",$param) and $param["GatewayProductOwnerName"] !== null) {
            $this->GatewayProductOwnerName = $param["GatewayProductOwnerName"];
        }

        if (array_key_exists("GatewayProductOwnerUin",$param) and $param["GatewayProductOwnerUin"] !== null) {
            $this->GatewayProductOwnerUin = $param["GatewayProductOwnerUin"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
