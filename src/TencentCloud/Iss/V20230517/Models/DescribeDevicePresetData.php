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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询设备预置位返回数据
 *
 * @method integer getIndex() 获取预置位索引    只支持1-10的索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(integer $Index) 设置预置位索引    只支持1-10的索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取预置位名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置预置位名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeDevicePresetData extends AbstractModel
{
    /**
     * @var integer 预置位索引    只支持1-10的索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string 预置位名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param integer $Index 预置位索引    只支持1-10的索引
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 预置位名称
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
