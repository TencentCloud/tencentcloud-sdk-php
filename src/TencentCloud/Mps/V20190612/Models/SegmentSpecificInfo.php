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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 切片特殊配置信息。
 *
 * @method string getSwitch() 获取启动分片时长开关，可选值：
on：打开
off：关闭
默认off
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置启动分片时长开关，可选值：
on：打开
off：关闭
默认off
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFragmentTime() 获取启动时分片时长，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFragmentTime(integer $FragmentTime) 设置启动时分片时长，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFragmentEndNum() 获取生效分片数，表示前FragmentEndNum个分片以FragmentTime时长切片，取值>=1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFragmentEndNum(integer $FragmentEndNum) 设置生效分片数，表示前FragmentEndNum个分片以FragmentTime时长切片，取值>=1
注意：此字段可能返回 null，表示取不到有效值。
 */
class SegmentSpecificInfo extends AbstractModel
{
    /**
     * @var string 启动分片时长开关，可选值：
on：打开
off：关闭
默认off
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var integer 启动时分片时长，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FragmentTime;

    /**
     * @var integer 生效分片数，表示前FragmentEndNum个分片以FragmentTime时长切片，取值>=1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FragmentEndNum;

    /**
     * @param string $Switch 启动分片时长开关，可选值：
on：打开
off：关闭
默认off
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FragmentTime 启动时分片时长，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FragmentEndNum 生效分片数，表示前FragmentEndNum个分片以FragmentTime时长切片，取值>=1
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("FragmentTime",$param) and $param["FragmentTime"] !== null) {
            $this->FragmentTime = $param["FragmentTime"];
        }

        if (array_key_exists("FragmentEndNum",$param) and $param["FragmentEndNum"] !== null) {
            $this->FragmentEndNum = $param["FragmentEndNum"];
        }
    }
}
