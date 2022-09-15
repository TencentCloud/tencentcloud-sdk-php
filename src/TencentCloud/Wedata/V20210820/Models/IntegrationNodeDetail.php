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
 * 集成节点详情
 *
 * @method string getName() 获取集成节点名称
 * @method void setName(string $Name) 设置集成节点名称
 * @method string getNodeType() 获取集成节点类型
 * @method void setNodeType(string $NodeType) 设置集成节点类型
 * @method string getDataSourceType() 获取节点数据源类型
 * @method void setDataSourceType(string $DataSourceType) 设置节点数据源类型
 * @method string getDescription() 获取节点描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置节点描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfig() 获取节点配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(array $Config) 设置节点配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtConfig() 获取节点扩展配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtConfig(array $ExtConfig) 设置节点扩展配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSchema() 获取节点schema
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchema(array $Schema) 设置节点schema
注意：此字段可能返回 null，表示取不到有效值。
 * @method IntegrationNodeMapping getNodeMapping() 获取节点映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeMapping(IntegrationNodeMapping $NodeMapping) 设置节点映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取owner uin
 * @method void setOwnerUin(string $OwnerUin) 设置owner uin
 */
class IntegrationNodeDetail extends AbstractModel
{
    /**
     * @var string 集成节点名称
     */
    public $Name;

    /**
     * @var string 集成节点类型
     */
    public $NodeType;

    /**
     * @var string 节点数据源类型
     */
    public $DataSourceType;

    /**
     * @var string 节点描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var array 节点配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var array 节点扩展配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtConfig;

    /**
     * @var array 节点schema
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Schema;

    /**
     * @var IntegrationNodeMapping 节点映射
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeMapping;

    /**
     * @var string owner uin
     */
    public $OwnerUin;

    /**
     * @param string $Name 集成节点名称
     * @param string $NodeType 集成节点类型
     * @param string $DataSourceType 节点数据源类型
     * @param string $Description 节点描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Config 节点配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtConfig 节点扩展配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Schema 节点schema
注意：此字段可能返回 null，表示取不到有效值。
     * @param IntegrationNodeMapping $NodeMapping 节点映射
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin owner uin
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

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
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

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = [];
            foreach ($param["Schema"] as $key => $value){
                $obj = new IntegrationNodeSchema();
                $obj->deserialize($value);
                array_push($this->Schema, $obj);
            }
        }

        if (array_key_exists("NodeMapping",$param) and $param["NodeMapping"] !== null) {
            $this->NodeMapping = new IntegrationNodeMapping();
            $this->NodeMapping->deserialize($param["NodeMapping"]);
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
