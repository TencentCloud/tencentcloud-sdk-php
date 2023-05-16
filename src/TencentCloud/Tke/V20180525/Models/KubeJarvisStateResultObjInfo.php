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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群巡检诊断对象信息
 *
 * @method string getPropertyName() 获取对象属性名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropertyName(string $PropertyName) 设置对象属性名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPropertyValue() 获取对象属性值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropertyValue(string $PropertyValue) 设置对象属性值
注意：此字段可能返回 null，表示取不到有效值。
 */
class KubeJarvisStateResultObjInfo extends AbstractModel
{
    /**
     * @var string 对象属性名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropertyName;

    /**
     * @var string 对象属性值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropertyValue;

    /**
     * @param string $PropertyName 对象属性名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PropertyValue 对象属性值
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
        if (array_key_exists("PropertyName",$param) and $param["PropertyName"] !== null) {
            $this->PropertyName = $param["PropertyName"];
        }

        if (array_key_exists("PropertyValue",$param) and $param["PropertyValue"] !== null) {
            $this->PropertyValue = $param["PropertyValue"];
        }
    }
}
