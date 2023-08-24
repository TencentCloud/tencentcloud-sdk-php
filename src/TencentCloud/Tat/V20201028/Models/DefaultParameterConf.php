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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义参数。
 *
 * @method string getParameterName() 获取参数名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParameterName(string $ParameterName) 设置参数名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParameterValue() 获取参数默认值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParameterValue(string $ParameterValue) 设置参数默认值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParameterDescription() 获取参数描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParameterDescription(string $ParameterDescription) 设置参数描述。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DefaultParameterConf extends AbstractModel
{
    /**
     * @var string 参数名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParameterName;

    /**
     * @var string 参数默认值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParameterValue;

    /**
     * @var string 参数描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParameterDescription;

    /**
     * @param string $ParameterName 参数名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParameterValue 参数默认值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParameterDescription 参数描述。
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
        if (array_key_exists("ParameterName",$param) and $param["ParameterName"] !== null) {
            $this->ParameterName = $param["ParameterName"];
        }

        if (array_key_exists("ParameterValue",$param) and $param["ParameterValue"] !== null) {
            $this->ParameterValue = $param["ParameterValue"];
        }

        if (array_key_exists("ParameterDescription",$param) and $param["ParameterDescription"] !== null) {
            $this->ParameterDescription = $param["ParameterDescription"];
        }
    }
}
