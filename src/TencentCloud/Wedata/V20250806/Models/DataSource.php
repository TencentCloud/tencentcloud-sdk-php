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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源对象
 *
 * @method string getProjectId() 获取归属项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置归属项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取数据源类型:枚举值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置数据源类型:枚举值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取数据源展示名，为了可视化查看
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置数据源展示名，为了可视化查看
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取归属项目Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置归属项目Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUser() 获取数据源创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUser(string $CreateUser) 设置数据源创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyUser() 获取更新人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyUser(string $ModifyUser) 设置更新人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProdConProperties() 获取数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProdConProperties(string $ProdConProperties) 设置数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDevConProperties() 获取同params 内容为开发数据源的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevConProperties(string $DevConProperties) 设置同params 内容为开发数据源的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategory() 获取数据源类别：

- DB ---自定义源
- CLUSTER --- 系统源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategory(string $Category) 设置数据源类别：

- DB ---自定义源
- CLUSTER --- 系统源
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataSource extends AbstractModel
{
    /**
     * @var string 归属项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 数据源类型:枚举值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 数据源展示名，为了可视化查看
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 归属项目Name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 数据源创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUser;

    /**
     * @var string 时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyUser;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProdConProperties;

    /**
     * @var string 同params 内容为开发数据源的数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DevConProperties;

    /**
     * @var string 数据源类别：

- DB ---自定义源
- CLUSTER --- 系统源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Category;

    /**
     * @param string $ProjectId 归属项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 数据源类型:枚举值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 数据源展示名，为了可视化查看
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 归属项目Name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUser 数据源创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyUser 更新人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProdConProperties 数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DevConProperties 同params 内容为开发数据源的数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Category 数据源类别：

- DB ---自定义源
- CLUSTER --- 系统源
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyUser",$param) and $param["ModifyUser"] !== null) {
            $this->ModifyUser = $param["ModifyUser"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ProdConProperties",$param) and $param["ProdConProperties"] !== null) {
            $this->ProdConProperties = $param["ProdConProperties"];
        }

        if (array_key_exists("DevConProperties",$param) and $param["DevConProperties"] !== null) {
            $this->DevConProperties = $param["DevConProperties"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
