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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件发布者信息
 *
 * @method string getKey() 获取关键字，一般为任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置关键字，一般为任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取REST_API、KAFKA
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置REST_API、KAFKA
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTs() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTs(string $CreationTs) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPropertiesList() 获取配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropertiesList(array $PropertiesList) 设置配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventPublisherDTO extends AbstractModel
{
    /**
     * @var string 关键字，一般为任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string REST_API、KAFKA
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTs;

    /**
     * @var array 配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropertiesList;

    /**
     * @var string 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $Key 关键字，一般为任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type REST_API、KAFKA
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTs 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PropertiesList 配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述信息
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

        if (array_key_exists("CreationTs",$param) and $param["CreationTs"] !== null) {
            $this->CreationTs = $param["CreationTs"];
        }

        if (array_key_exists("PropertiesList",$param) and $param["PropertiesList"] !== null) {
            $this->PropertiesList = [];
            foreach ($param["PropertiesList"] as $key => $value){
                $obj = new ParamInfoDs();
                $obj->deserialize($value);
                array_push($this->PropertiesList, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
