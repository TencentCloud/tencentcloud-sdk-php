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
 * 数据源对象
 *
 * @method array getDatabaseNames() 获取若数据源列表为绑定数据库，则为db名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseNames(array $DatabaseNames) 设置若数据源列表为绑定数据库，则为db名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getID() 获取数据源ID
 * @method void setID(integer $ID) 设置数据源ID
 * @method string getInstance() 获取数据源引擎的实例ID，如CDB实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstance(string $Instance) 设置数据源引擎的实例ID，如CDB实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取数据源名称，在相同SpaceName下，数据源名称不能为空
 * @method void setName(string $Name) 设置数据源名称，在相同SpaceName下，数据源名称不能为空
 * @method string getRegion() 获取数据源引擎所属区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置数据源引擎所属区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取数据源类型:枚举值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置数据源类型:枚举值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取数据源所属的集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置数据源所属的集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取数据源版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置数据源版本信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatasourceBaseInfo extends AbstractModel
{
    /**
     * @var array 若数据源列表为绑定数据库，则为db名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseNames;

    /**
     * @var string 数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 数据源ID
     */
    public $ID;

    /**
     * @var string 数据源引擎的实例ID，如CDB实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Instance;

    /**
     * @var string 数据源名称，在相同SpaceName下，数据源名称不能为空
     */
    public $Name;

    /**
     * @var string 数据源引擎所属区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 数据源类型:枚举值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 数据源所属的集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 数据源版本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @param array $DatabaseNames 若数据源列表为绑定数据库，则为db名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ID 数据源ID
     * @param string $Instance 数据源引擎的实例ID，如CDB实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 数据源名称，在相同SpaceName下，数据源名称不能为空
     * @param string $Region 数据源引擎所属区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 数据源类型:枚举值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 数据源所属的集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 数据源版本信息
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
        if (array_key_exists("DatabaseNames",$param) and $param["DatabaseNames"] !== null) {
            $this->DatabaseNames = $param["DatabaseNames"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
