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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Setats Warehouse结构
 *
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocation() 获取location
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(string $Location) 设置location
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogType() 获取catalogtype
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogType(string $CatalogType) 设置catalogtype
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUri() 获取uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUri(string $Uri) 设置uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWarehouseUrl() 获取warehouse url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarehouseUrl(string $WarehouseUrl) 设置warehouse url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthentication() 获取认证方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthentication(string $Authentication) 设置认证方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceRefs() 获取资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceRefs(array $ResourceRefs) 设置资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHiveUri() 获取hive warehouse uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHiveUri(string $HiveUri) 设置hive warehouse uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProperties() 获取高级参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置高级参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Warehouse extends AbstractModel
{
    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string location
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var string catalogtype
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogType;

    /**
     * @var string uri
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uri;

    /**
     * @var string warehouse url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarehouseUrl;

    /**
     * @var string 认证方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Authentication;

    /**
     * @var array 资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceRefs;

    /**
     * @var string hive warehouse uri
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HiveUri;

    /**
     * @var array 高级参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Location location
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogType catalogtype
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uri uri
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WarehouseUrl warehouse url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Authentication 认证方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceRefs 资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HiveUri hive warehouse uri
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Properties 高级参数
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("CatalogType",$param) and $param["CatalogType"] !== null) {
            $this->CatalogType = $param["CatalogType"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("WarehouseUrl",$param) and $param["WarehouseUrl"] !== null) {
            $this->WarehouseUrl = $param["WarehouseUrl"];
        }

        if (array_key_exists("Authentication",$param) and $param["Authentication"] !== null) {
            $this->Authentication = $param["Authentication"];
        }

        if (array_key_exists("ResourceRefs",$param) and $param["ResourceRefs"] !== null) {
            $this->ResourceRefs = [];
            foreach ($param["ResourceRefs"] as $key => $value){
                $obj = new ResourceRefLatest();
                $obj->deserialize($value);
                array_push($this->ResourceRefs, $obj);
            }
        }

        if (array_key_exists("HiveUri",$param) and $param["HiveUri"] !== null) {
            $this->HiveUri = $param["HiveUri"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }
    }
}
