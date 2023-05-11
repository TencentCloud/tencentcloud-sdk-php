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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * JSON类型描述
 *
 * @method boolean getEnableTag() 获取启用标志
 * @method void setEnableTag(boolean $EnableTag) 设置启用标志
 * @method array getMetaFields() 获取元数据信息列表, 可选值为 __SOURCE__、__FILENAME__、__TIMESTAMP__、__HOSTNAME__。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaFields(array $MetaFields) 设置元数据信息列表, 可选值为 __SOURCE__、__FILENAME__、__TIMESTAMP__、__HOSTNAME__。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJsonType() 获取投递Json格式，0：字符串方式投递；1:以结构化方式投递
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJsonType(integer $JsonType) 设置投递Json格式，0：字符串方式投递；1:以结构化方式投递
注意：此字段可能返回 null，表示取不到有效值。
 */
class JsonInfo extends AbstractModel
{
    /**
     * @var boolean 启用标志
     */
    public $EnableTag;

    /**
     * @var array 元数据信息列表, 可选值为 __SOURCE__、__FILENAME__、__TIMESTAMP__、__HOSTNAME__。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaFields;

    /**
     * @var integer 投递Json格式，0：字符串方式投递；1:以结构化方式投递
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JsonType;

    /**
     * @param boolean $EnableTag 启用标志
     * @param array $MetaFields 元数据信息列表, 可选值为 __SOURCE__、__FILENAME__、__TIMESTAMP__、__HOSTNAME__。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JsonType 投递Json格式，0：字符串方式投递；1:以结构化方式投递
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
        if (array_key_exists("EnableTag",$param) and $param["EnableTag"] !== null) {
            $this->EnableTag = $param["EnableTag"];
        }

        if (array_key_exists("MetaFields",$param) and $param["MetaFields"] !== null) {
            $this->MetaFields = $param["MetaFields"];
        }

        if (array_key_exists("JsonType",$param) and $param["JsonType"] !== null) {
            $this->JsonType = $param["JsonType"];
        }
    }
}
