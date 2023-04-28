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
 * @method string getDatabaseName() 获取若数据源列表为绑定数据库，则为db名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置若数据源列表为绑定数据库，则为db名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getID() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstance() 获取数据源引擎的实例ID，如CDB实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstance(string $Instance) 设置数据源引擎的实例ID，如CDB实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取数据源名称，在相同SpaceName下，数据源名称不能为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置数据源名称，在相同SpaceName下，数据源名称不能为空
注意：此字段可能返回 null，表示取不到有效值。
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
 * @method integer getAppId() 获取应用ID AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置应用ID AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizParams() 获取业务侧数据源的配置信息扩展
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizParams(string $BizParams) 设置业务侧数据源的配置信息扩展
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategory() 获取数据源类别：绑定引擎、绑定数据库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategory(string $Category) 设置数据源类别：绑定引擎、绑定数据库
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplay() 获取数据源展示名，为了可视化查看
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplay(string $Display) 设置数据源展示名，为了可视化查看
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerAccount() 获取数据源责任人账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerAccount(string $OwnerAccount) 设置数据源责任人账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParams() 获取数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取数据源数据源的可见性，1为可见、0为不可见。默认为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置数据源数据源的可见性，1为可见、0为不可见。默认为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerAccountName() 获取数据源责任人账号名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置数据源责任人账号名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerProjectId() 获取归属项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerProjectId(string $OwnerProjectId) 设置归属项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerProjectName() 获取归属项目Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerProjectName(string $OwnerProjectName) 设置归属项目Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerProjectIdent() 获取归属项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerProjectIdent(string $OwnerProjectIdent) 设置归属项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthorityProjectName() 获取授权项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorityProjectName(string $AuthorityProjectName) 设置授权项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthorityUserName() 获取授权用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorityUserName(string $AuthorityUserName) 设置授权用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEdit() 获取是否有编辑权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEdit(boolean $Edit) 设置是否有编辑权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAuthor() 获取是否有授权权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthor(boolean $Author) 设置是否有授权权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeliver() 获取是否有转交权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliver(boolean $Deliver) 设置是否有转交权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceStatus() 获取数据源状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceStatus(string $DataSourceStatus) 设置数据源状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamsString() 获取Params json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamsString(string $ParamsString) 设置Params json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizParamsString() 获取BizParams json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizParamsString(string $BizParamsString) 设置BizParams json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getModifiedTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(integer $ModifiedTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataSourceInfo extends AbstractModel
{
    /**
     * @var string 若数据源列表为绑定数据库，则为db名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 数据源引擎的实例ID，如CDB实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Instance;

    /**
     * @var string 数据源名称，在相同SpaceName下，数据源名称不能为空
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var integer 应用ID AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 业务侧数据源的配置信息扩展
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizParams;

    /**
     * @var string 数据源类别：绑定引擎、绑定数据库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Category;

    /**
     * @var string 数据源展示名，为了可视化查看
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Display;

    /**
     * @var string 数据源责任人账号ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerAccount;

    /**
     * @var string 数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var integer 数据源数据源的可见性，1为可见、0为不可见。默认为1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 数据源责任人账号名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerAccountName;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 归属项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerProjectId;

    /**
     * @var string 归属项目Name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerProjectName;

    /**
     * @var string 归属项目标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerProjectIdent;

    /**
     * @var string 授权项目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorityProjectName;

    /**
     * @var string 授权用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorityUserName;

    /**
     * @var boolean 是否有编辑权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Edit;

    /**
     * @var boolean 是否有授权权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Author;

    /**
     * @var boolean 是否有转交权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deliver;

    /**
     * @var string 数据源状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceStatus;

    /**
     * @var integer 时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string Params json字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamsString;

    /**
     * @var string BizParams json字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizParamsString;

    /**
     * @var integer 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @param string $DatabaseName 若数据源列表为绑定数据库，则为db名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ID 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Instance 数据源引擎的实例ID，如CDB实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 数据源名称，在相同SpaceName下，数据源名称不能为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 数据源引擎所属区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 数据源类型:枚举值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 数据源所属的集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 应用ID AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizParams 业务侧数据源的配置信息扩展
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Category 数据源类别：绑定引擎、绑定数据库
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Display 数据源展示名，为了可视化查看
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerAccount 数据源责任人账号ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Params 数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 数据源数据源的可见性，1为可见、0为不可见。默认为1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerAccountName 数据源责任人账号名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerProjectId 归属项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerProjectName 归属项目Name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerProjectIdent 归属项目标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthorityProjectName 授权项目
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthorityUserName 授权用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Edit 是否有编辑权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Author 是否有授权权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Deliver 是否有转交权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceStatus 数据源状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamsString Params json字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizParamsString BizParams json字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ModifiedTime 修改时间
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BizParams",$param) and $param["BizParams"] !== null) {
            $this->BizParams = $param["BizParams"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Display",$param) and $param["Display"] !== null) {
            $this->Display = $param["Display"];
        }

        if (array_key_exists("OwnerAccount",$param) and $param["OwnerAccount"] !== null) {
            $this->OwnerAccount = $param["OwnerAccount"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("OwnerProjectId",$param) and $param["OwnerProjectId"] !== null) {
            $this->OwnerProjectId = $param["OwnerProjectId"];
        }

        if (array_key_exists("OwnerProjectName",$param) and $param["OwnerProjectName"] !== null) {
            $this->OwnerProjectName = $param["OwnerProjectName"];
        }

        if (array_key_exists("OwnerProjectIdent",$param) and $param["OwnerProjectIdent"] !== null) {
            $this->OwnerProjectIdent = $param["OwnerProjectIdent"];
        }

        if (array_key_exists("AuthorityProjectName",$param) and $param["AuthorityProjectName"] !== null) {
            $this->AuthorityProjectName = $param["AuthorityProjectName"];
        }

        if (array_key_exists("AuthorityUserName",$param) and $param["AuthorityUserName"] !== null) {
            $this->AuthorityUserName = $param["AuthorityUserName"];
        }

        if (array_key_exists("Edit",$param) and $param["Edit"] !== null) {
            $this->Edit = $param["Edit"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("Deliver",$param) and $param["Deliver"] !== null) {
            $this->Deliver = $param["Deliver"];
        }

        if (array_key_exists("DataSourceStatus",$param) and $param["DataSourceStatus"] !== null) {
            $this->DataSourceStatus = $param["DataSourceStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ParamsString",$param) and $param["ParamsString"] !== null) {
            $this->ParamsString = $param["ParamsString"];
        }

        if (array_key_exists("BizParamsString",$param) and $param["BizParamsString"] !== null) {
            $this->BizParamsString = $param["BizParamsString"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}
