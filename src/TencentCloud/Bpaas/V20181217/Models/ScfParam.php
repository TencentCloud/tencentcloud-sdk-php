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
namespace TencentCloud\Bpaas\V20181217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scf函数入参
 *
 * @method string getKey() 获取参数Key
 * @method void setKey(string $Key) 设置参数Key
 * @method integer getType() 获取参数类型 1用户输入 2预设参数 3表单参数
 * @method void setType(integer $Type) 设置参数类型 1用户输入 2预设参数 3表单参数
 * @method array getValues() 获取参数值
 * @method void setValues(array $Values) 设置参数值
 * @method string getName() 获取参数描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置参数描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScfParam extends AbstractModel
{
    /**
     * @var string 参数Key
     */
    public $Key;

    /**
     * @var integer 参数类型 1用户输入 2预设参数 3表单参数
     */
    public $Type;

    /**
     * @var array 参数值
     */
    public $Values;

    /**
     * @var string 参数描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param string $Key 参数Key
     * @param integer $Type 参数类型 1用户输入 2预设参数 3表单参数
     * @param array $Values 参数值
     * @param string $Name 参数描述
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
