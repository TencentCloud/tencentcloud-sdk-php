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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * soc产品购买信息
 *
 * @method string getName() 获取名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndex() 获取标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(integer $Index) 设置标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class SocProductionItem extends AbstractModel
{
    /**
     * @var string 名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $Name 名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Index 标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
