<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method array getDatabaseNames() 获取<p>若数据源列表为绑定数据库，则为db名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseNames(array $DatabaseNames) 设置<p>若数据源列表为绑定数据库，则为db名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>数据源描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>数据源描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getID() 获取<p>数据源ID</p>
 * @method void setID(integer $ID) 设置<p>数据源ID</p>
 * @method string getInstance() 获取<p>数据源引擎的实例ID，如CDB实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstance(string $Instance) 设置<p>数据源引擎的实例ID，如CDB实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>数据源名称，在相同SpaceName下，数据源名称不能为空</p>
 * @method void setName(string $Name) 设置<p>数据源名称，在相同SpaceName下，数据源名称不能为空</p>
 * @method string getRegion() 获取<p>数据源引擎所属区域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>数据源引擎所属区域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>数据源类型:枚举值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>数据源类型:枚举值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取<p>数据源所属的集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>数据源所属的集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取<p>数据源版本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置<p>数据源版本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamsString() 获取<p>数据源附带参数信息Params json字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamsString(string $ParamsString) 设置<p>数据源附带参数信息Params json字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategory() 获取<p>区分数据源类型自定义源还是系统源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategory(string $Category) 设置<p>区分数据源类型自定义源还是系统源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取<p>数据实例ip</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置<p>数据实例ip</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取<p>数据实例port</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置<p>数据实例port</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatasourceBaseInfo extends AbstractModel
{
    /**
     * @var array <p>若数据源列表为绑定数据库，则为db名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseNames;

    /**
     * @var string <p>数据源描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>数据源ID</p>
     */
    public $ID;

    /**
     * @var string <p>数据源引擎的实例ID，如CDB实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Instance;

    /**
     * @var string <p>数据源名称，在相同SpaceName下，数据源名称不能为空</p>
     */
    public $Name;

    /**
     * @var string <p>数据源引擎所属区域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string <p>数据源类型:枚举值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>数据源所属的集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string <p>数据源版本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string <p>数据源附带参数信息Params json字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamsString;

    /**
     * @var string <p>区分数据源类型自定义源还是系统源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Category;

    /**
     * @var string <p>数据实例ip</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string <p>数据实例port</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @param array $DatabaseNames <p>若数据源列表为绑定数据库，则为db名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>数据源描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ID <p>数据源ID</p>
     * @param string $Instance <p>数据源引擎的实例ID，如CDB实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>数据源名称，在相同SpaceName下，数据源名称不能为空</p>
     * @param string $Region <p>数据源引擎所属区域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>数据源类型:枚举值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId <p>数据源所属的集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version <p>数据源版本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamsString <p>数据源附带参数信息Params json字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Category <p>区分数据源类型自定义源还是系统源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip <p>数据实例ip</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port <p>数据实例port</p>
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

        if (array_key_exists("ParamsString",$param) and $param["ParamsString"] !== null) {
            $this->ParamsString = $param["ParamsString"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
