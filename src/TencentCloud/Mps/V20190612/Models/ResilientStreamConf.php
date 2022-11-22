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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 延播平滑吐流配置。
 *
 * @method boolean getEnable() 获取是否开启延播平滑吐流，true开启，false不开启，默认不开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(boolean $Enable) 设置是否开启延播平滑吐流，true开启，false不开启，默认不开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBufferTime() 获取延播时间，单位秒，目前支持的范围为10~300秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBufferTime(integer $BufferTime) 设置延播时间，单位秒，目前支持的范围为10~300秒。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResilientStreamConf extends AbstractModel
{
    /**
     * @var boolean 是否开启延播平滑吐流，true开启，false不开启，默认不开启。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var integer 延播时间，单位秒，目前支持的范围为10~300秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BufferTime;

    /**
     * @param boolean $Enable 是否开启延播平滑吐流，true开启，false不开启，默认不开启。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BufferTime 延播时间，单位秒，目前支持的范围为10~300秒。
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("BufferTime",$param) and $param["BufferTime"] !== null) {
            $this->BufferTime = $param["BufferTime"];
        }
    }
}
