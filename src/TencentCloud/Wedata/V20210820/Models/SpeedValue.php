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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 速度值对象
 *
 * @method integer getTime() 获取带毫秒的时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(integer $Time) 设置带毫秒的时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSpeed() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeed(float $Speed) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpeedValue extends AbstractModel
{
    /**
     * @var integer 带毫秒的时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var float 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Speed;

    /**
     * @param integer $Time 带毫秒的时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Speed 无
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }
    }
}
