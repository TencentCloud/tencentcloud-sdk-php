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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输入的镜头信息的描述
 *
 * @method float getStartTimeStamp() 获取镜头开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTimeStamp(float $StartTimeStamp) 设置镜头开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getEndTimeStamp() 获取镜头结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTimeStamp(float $EndTimeStamp) 设置镜头结束时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ShotInfo extends AbstractModel
{
    /**
     * @var float 镜头开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTimeStamp;

    /**
     * @var float 镜头结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTimeStamp;

    /**
     * @param float $StartTimeStamp 镜头开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $EndTimeStamp 镜头结束时间
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
        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("EndTimeStamp",$param) and $param["EndTimeStamp"] !== null) {
            $this->EndTimeStamp = $param["EndTimeStamp"];
        }
    }
}
