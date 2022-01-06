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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询设备统计返回值
 *
 * @method float getValue() 获取统计值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(float $Value) 设置统计值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTime() 获取统计时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(integer $Time) 设置统计时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceMonitorValue extends AbstractModel
{
    /**
     * @var float 统计值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var integer 统计时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @param float $Value 统计值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Time 统计时间
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}
