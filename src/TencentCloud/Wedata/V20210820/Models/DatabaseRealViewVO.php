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
 * 实时获取数据库列表信息
 *
 * @method string getCatalogName() 获取CatalogName: 如dlc数据默认为DataLakeCatalog
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogName(string $CatalogName) 设置CatalogName: 如dlc数据默认为DataLakeCatalog
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataSourceId() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceId(integer $DataSourceId) 设置数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceName(string $DataSourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceInstance() 获取数据源实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceInstance(string $DataSourceInstance) 设置数据源实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceType(string $DataSourceType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOwnerAccount() 获取责任人账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerAccount(integer $OwnerAccount) 设置责任人账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getModifiedTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(integer $ModifiedTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocation() 获取数据库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(string $Location) 设置数据库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method BizParams getBizParams() 获取业务额外属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizParams(BizParams $BizParams) 设置业务额外属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextLevel() 获取下一级元数据:CATALOG,DATABASE,SCHEMA,TABLE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextLevel(string $NextLevel) 设置下一级元数据:CATALOG,DATABASE,SCHEMA,TABLE
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatabaseRealViewVO extends AbstractModel
{
    /**
     * @var string CatalogName: 如dlc数据默认为DataLakeCatalog
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogName;

    /**
     * @var integer 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceId;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceName;

    /**
     * @var string 数据源实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceInstance;

    /**
     * @var string 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceType;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var integer 责任人账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerAccount;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var string 数据库地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var BizParams 业务额外属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizParams;

    /**
     * @var string 下一级元数据:CATALOG,DATABASE,SCHEMA,TABLE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextLevel;

    /**
     * @param string $CatalogName CatalogName: 如dlc数据默认为DataLakeCatalog
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataSourceId 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceInstance 数据源实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceType 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OwnerAccount 责任人账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ModifiedTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Location 数据库地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param BizParams $BizParams 业务额外属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextLevel 下一级元数据:CATALOG,DATABASE,SCHEMA,TABLE
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
        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("DataSourceName",$param) and $param["DataSourceName"] !== null) {
            $this->DataSourceName = $param["DataSourceName"];
        }

        if (array_key_exists("DataSourceInstance",$param) and $param["DataSourceInstance"] !== null) {
            $this->DataSourceInstance = $param["DataSourceInstance"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerAccount",$param) and $param["OwnerAccount"] !== null) {
            $this->OwnerAccount = $param["OwnerAccount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("BizParams",$param) and $param["BizParams"] !== null) {
            $this->BizParams = new BizParams();
            $this->BizParams->deserialize($param["BizParams"]);
        }

        if (array_key_exists("NextLevel",$param) and $param["NextLevel"] !== null) {
            $this->NextLevel = $param["NextLevel"];
        }
    }
}
