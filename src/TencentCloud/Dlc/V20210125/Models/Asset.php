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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 元数据基本对象
 *
 * @method integer getId() 获取主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGuid() 获取对象GUID值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGuid(string $Guid) 设置对象GUID值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalog() 获取数据目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalog(string $Catalog) 设置数据目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 * @method string getOwner() 获取对象owner
 * @method void setOwner(string $Owner) 设置对象owner
 * @method string getOwnerAccount() 获取对象owner账户
 * @method void setOwnerAccount(string $OwnerAccount) 设置对象owner账户
 * @method array getPermValues() 获取权限
 * @method void setPermValues(array $PermValues) 设置权限
 * @method array getParams() 获取附加属性
 * @method void setParams(array $Params) 设置附加属性
 * @method array getBizParams() 获取附加业务属性
 * @method void setBizParams(array $BizParams) 设置附加业务属性
 * @method integer getDataVersion() 获取数据版本
 * @method void setDataVersion(integer $DataVersion) 设置数据版本
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifiedTime() 获取修改时间
 * @method void setModifiedTime(string $ModifiedTime) 设置修改时间
 * @method integer getDatasourceId() 获取数据源主键
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源主键
 */
class Asset extends AbstractModel
{
    /**
     * @var integer 主键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 对象GUID值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Guid;

    /**
     * @var string 数据目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Catalog;

    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @var string 对象owner
     */
    public $Owner;

    /**
     * @var string 对象owner账户
     */
    public $OwnerAccount;

    /**
     * @var array 权限
     */
    public $PermValues;

    /**
     * @var array 附加属性
     */
    public $Params;

    /**
     * @var array 附加业务属性
     */
    public $BizParams;

    /**
     * @var integer 数据版本
     */
    public $DataVersion;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifiedTime;

    /**
     * @var integer 数据源主键
     */
    public $DatasourceId;

    /**
     * @param integer $Id 主键
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Guid 对象GUID值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Catalog 数据目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述信息
     * @param string $Owner 对象owner
     * @param string $OwnerAccount 对象owner账户
     * @param array $PermValues 权限
     * @param array $Params 附加属性
     * @param array $BizParams 附加业务属性
     * @param integer $DataVersion 数据版本
     * @param string $CreateTime 创建时间
     * @param string $ModifiedTime 修改时间
     * @param integer $DatasourceId 数据源主键
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Guid",$param) and $param["Guid"] !== null) {
            $this->Guid = $param["Guid"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
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

        if (array_key_exists("PermValues",$param) and $param["PermValues"] !== null) {
            $this->PermValues = [];
            foreach ($param["PermValues"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->PermValues, $obj);
            }
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("BizParams",$param) and $param["BizParams"] !== null) {
            $this->BizParams = [];
            foreach ($param["BizParams"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->BizParams, $obj);
            }
        }

        if (array_key_exists("DataVersion",$param) and $param["DataVersion"] !== null) {
            $this->DataVersion = $param["DataVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }
    }
}
