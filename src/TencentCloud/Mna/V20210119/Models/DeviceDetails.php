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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备详细信息
 *
 * @method DeviceBaseInfo getDeviceBaseInfo() 获取设备基本信息
 * @method void setDeviceBaseInfo(DeviceBaseInfo $DeviceBaseInfo) 设置设备基本信息
 * @method array getDeviceNetInfo() 获取设备网络信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceNetInfo(array $DeviceNetInfo) 设置设备网络信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewaySite() 获取聚合服务器地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewaySite(string $GatewaySite) 设置聚合服务器地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getBusinessDownRate() 获取业务下行速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessDownRate(float $BusinessDownRate) 设置业务下行速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getBusinessUpRate() 获取业务上行速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessUpRate(float $BusinessUpRate) 设置业务上行速率
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceDetails extends AbstractModel
{
    /**
     * @var DeviceBaseInfo 设备基本信息
     */
    public $DeviceBaseInfo;

    /**
     * @var array 设备网络信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceNetInfo;

    /**
     * @var string 聚合服务器地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewaySite;

    /**
     * @var float 业务下行速率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessDownRate;

    /**
     * @var float 业务上行速率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessUpRate;

    /**
     * @param DeviceBaseInfo $DeviceBaseInfo 设备基本信息
     * @param array $DeviceNetInfo 设备网络信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewaySite 聚合服务器地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $BusinessDownRate 业务下行速率
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $BusinessUpRate 业务上行速率
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
        if (array_key_exists("DeviceBaseInfo",$param) and $param["DeviceBaseInfo"] !== null) {
            $this->DeviceBaseInfo = new DeviceBaseInfo();
            $this->DeviceBaseInfo->deserialize($param["DeviceBaseInfo"]);
        }

        if (array_key_exists("DeviceNetInfo",$param) and $param["DeviceNetInfo"] !== null) {
            $this->DeviceNetInfo = [];
            foreach ($param["DeviceNetInfo"] as $key => $value){
                $obj = new DeviceNetInfo();
                $obj->deserialize($value);
                array_push($this->DeviceNetInfo, $obj);
            }
        }

        if (array_key_exists("GatewaySite",$param) and $param["GatewaySite"] !== null) {
            $this->GatewaySite = $param["GatewaySite"];
        }

        if (array_key_exists("BusinessDownRate",$param) and $param["BusinessDownRate"] !== null) {
            $this->BusinessDownRate = $param["BusinessDownRate"];
        }

        if (array_key_exists("BusinessUpRate",$param) and $param["BusinessUpRate"] !== null) {
            $this->BusinessUpRate = $param["BusinessUpRate"];
        }
    }
}
