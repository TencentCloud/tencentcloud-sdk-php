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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备影子信息
 *
 * @method string getWID() 获取设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWID(string $WID) 设置设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceShadow() 获取设备影子数据,返回有效数据为"x-json:"后字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceShadow(string $DeviceShadow) 设置设备影子数据,返回有效数据为"x-json:"后字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceShadowUpdateTime() 获取设备影子更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceShadowUpdateTime(string $DeviceShadowUpdateTime) 设置设备影子更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceShadowInfo extends AbstractModel
{
    /**
     * @var string 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WID;

    /**
     * @var string 设备影子数据,返回有效数据为"x-json:"后字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceShadow;

    /**
     * @var string 设备影子更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceShadowUpdateTime;

    /**
     * @param string $WID 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceShadow 设备影子数据,返回有效数据为"x-json:"后字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceShadowUpdateTime 设备影子更新时间
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
        if (array_key_exists("WID",$param) and $param["WID"] !== null) {
            $this->WID = $param["WID"];
        }

        if (array_key_exists("DeviceShadow",$param) and $param["DeviceShadow"] !== null) {
            $this->DeviceShadow = $param["DeviceShadow"];
        }

        if (array_key_exists("DeviceShadowUpdateTime",$param) and $param["DeviceShadowUpdateTime"] !== null) {
            $this->DeviceShadowUpdateTime = $param["DeviceShadowUpdateTime"];
        }
    }
}
