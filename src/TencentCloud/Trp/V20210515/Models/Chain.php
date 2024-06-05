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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 上链数据
 *
 * @method string getCode() 获取码url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置码url
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getData() 获取上链数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置上链数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class Chain extends AbstractModel
{
    /**
     * @var string 码url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var array 上链数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @param string $Code 码url
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Data 上链数据
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new ChainValue();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
