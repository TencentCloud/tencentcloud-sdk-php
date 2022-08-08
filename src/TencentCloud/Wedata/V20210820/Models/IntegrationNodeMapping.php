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
 * 集成节点映射
 *
 * @method string getSourceId() 获取源节点id
 * @method void setSourceId(string $SourceId) 设置源节点id
 * @method string getSinkId() 获取目标节点id
 * @method void setSinkId(string $SinkId) 设置目标节点id
 * @method array getSourceSchema() 获取源节点schema
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceSchema(array $SourceSchema) 设置源节点schema
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSchemaMappings() 获取节点schema映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaMappings(array $SchemaMappings) 设置节点schema映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtConfig() 获取节点映射扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtConfig(array $ExtConfig) 设置节点映射扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntegrationNodeMapping extends AbstractModel
{
    /**
     * @var string 源节点id
     */
    public $SourceId;

    /**
     * @var string 目标节点id
     */
    public $SinkId;

    /**
     * @var array 源节点schema
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceSchema;

    /**
     * @var array 节点schema映射
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaMappings;

    /**
     * @var array 节点映射扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtConfig;

    /**
     * @param string $SourceId 源节点id
     * @param string $SinkId 目标节点id
     * @param array $SourceSchema 源节点schema
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SchemaMappings 节点schema映射
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtConfig 节点映射扩展信息
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
        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SinkId",$param) and $param["SinkId"] !== null) {
            $this->SinkId = $param["SinkId"];
        }

        if (array_key_exists("SourceSchema",$param) and $param["SourceSchema"] !== null) {
            $this->SourceSchema = [];
            foreach ($param["SourceSchema"] as $key => $value){
                $obj = new IntegrationNodeSchema();
                $obj->deserialize($value);
                array_push($this->SourceSchema, $obj);
            }
        }

        if (array_key_exists("SchemaMappings",$param) and $param["SchemaMappings"] !== null) {
            $this->SchemaMappings = [];
            foreach ($param["SchemaMappings"] as $key => $value){
                $obj = new IntegrationNodeSchemaMapping();
                $obj->deserialize($value);
                array_push($this->SchemaMappings, $obj);
            }
        }

        if (array_key_exists("ExtConfig",$param) and $param["ExtConfig"] !== null) {
            $this->ExtConfig = [];
            foreach ($param["ExtConfig"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtConfig, $obj);
            }
        }
    }
}
