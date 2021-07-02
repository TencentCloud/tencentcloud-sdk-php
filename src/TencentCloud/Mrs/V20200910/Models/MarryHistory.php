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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 婚育史
 *
 * @method string getMarriage() 获取结婚史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMarriage(string $Marriage) 设置结婚史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFertility() 获取生育史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFertility(string $Fertility) 设置生育史
注意：此字段可能返回 null，表示取不到有效值。
 */
class MarryHistory extends AbstractModel
{
    /**
     * @var string 结婚史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Marriage;

    /**
     * @var string 生育史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fertility;

    /**
     * @param string $Marriage 结婚史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Fertility 生育史
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
        if (array_key_exists("Marriage",$param) and $param["Marriage"] !== null) {
            $this->Marriage = $param["Marriage"];
        }

        if (array_key_exists("Fertility",$param) and $param["Fertility"] !== null) {
            $this->Fertility = $param["Fertility"];
        }
    }
}
