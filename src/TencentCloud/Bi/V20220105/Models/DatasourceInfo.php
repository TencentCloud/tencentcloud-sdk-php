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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源详情
 *
 * @method integer getId() 获取数据库ID
 * @method void setId(integer $Id) 设置数据库ID
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method string getServiceType() 获取域类型，1、腾讯云，2、本地
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceType(string $ServiceType) 设置域类型，1、腾讯云，2、本地
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceName() 获取数据库别名
 * @method void setSourceName(string $SourceName) 设置数据库别名
 * @method string getDbType() 获取数据库驱动
 * @method void setDbType(string $DbType) 设置数据库驱动
 * @method string getDbHost() 获取HOST
 * @method void setDbHost(string $DbHost) 设置HOST
 * @method integer getDbPort() 获取端口
 * @method void setDbPort(integer $DbPort) 设置端口
 * @method string getDbUser() 获取用户名
 * @method void setDbUser(string $DbUser) 设置用户名
 * @method string getCharset() 获取数据库编码
 * @method void setCharset(string $Charset) 设置数据库编码
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取修改时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置修改时间
 * @method string getCreatedUser() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedUser(string $CreatedUser) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalog() 获取catalog值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalog(string $Catalog) 设置catalog值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectType() 获取连接类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectType(string $ConnectType) 设置连接类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取数据源描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置数据源描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取数据源状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置数据源状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourcePlat() 获取来源平台
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourcePlat(string $SourcePlat) 设置来源平台
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraParam() 获取扩展参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraParam(string $ExtraParam) 设置扩展参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddInfo() 获取额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddInfo(string $AddInfo) 设置额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineType() 获取引擎类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineType(string $EngineType) 设置引擎类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManager() 获取数据源负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManager(string $Manager) 设置数据源负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorWhitelist() 获取特定操作人员白名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorWhitelist(string $OperatorWhitelist) 设置特定操作人员白名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取数据源的vpc信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置数据源的vpc信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取数据源的uniqVpc信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpcId(string $UniqVpcId) 设置数据源的uniqVpc信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionId() 获取数据源的地域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(string $RegionId) 设置数据源的地域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseStateAction getStateAction() 获取操作属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStateAction(BaseStateAction $StateAction) 设置操作属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedUser() 获取更新人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedUser(string $UpdatedUser) 设置更新人
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPermissionList() 获取权限列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermissionList(array $PermissionList) 设置权限列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAuthList() 获取权限值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthList(array $AuthList) 设置权限值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataOrigin() 获取第三方数据源标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataOrigin(string $DataOrigin) 设置第三方数据源标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataOriginProjectId() 获取第三方项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataOriginProjectId(string $DataOriginProjectId) 设置第三方项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataOriginDatasourceId() 获取第三方数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataOriginDatasourceId(string $DataOriginDatasourceId) 设置第三方数据源id
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatasourceInfo extends AbstractModel
{
    /**
     * @var integer 数据库ID
     */
    public $Id;

    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var string 域类型，1、腾讯云，2、本地
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceType;

    /**
     * @var string 数据库别名
     */
    public $SourceName;

    /**
     * @var string 数据库驱动
     */
    public $DbType;

    /**
     * @var string HOST
     */
    public $DbHost;

    /**
     * @var integer 端口
     */
    public $DbPort;

    /**
     * @var string 用户名
     */
    public $DbUser;

    /**
     * @var string 数据库编码
     */
    public $Charset;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 修改时间
     */
    public $UpdatedAt;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedUser;

    /**
     * @var string catalog值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Catalog;

    /**
     * @var string 连接类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectType;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 数据源描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var string 数据源状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 来源平台
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourcePlat;

    /**
     * @var string 扩展参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraParam;

    /**
     * @var string 额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddInfo;

    /**
     * @var string 项目名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 引擎类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineType;

    /**
     * @var string 数据源负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Manager;

    /**
     * @var string 特定操作人员白名单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorWhitelist;

    /**
     * @var string 数据源的vpc信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 数据源的uniqVpc信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpcId;

    /**
     * @var string 数据源的地域信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var BaseStateAction 操作属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StateAction;

    /**
     * @var string 更新人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedUser;

    /**
     * @var array 权限列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PermissionList;

    /**
     * @var array 权限值列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthList;

    /**
     * @var string 第三方数据源标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataOrigin;

    /**
     * @var string 第三方项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataOriginProjectId;

    /**
     * @var string 第三方数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataOriginDatasourceId;

    /**
     * @param integer $Id 数据库ID
     * @param string $DbName 数据库名称
     * @param string $ServiceType 域类型，1、腾讯云，2、本地
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceName 数据库别名
     * @param string $DbType 数据库驱动
     * @param string $DbHost HOST
     * @param integer $DbPort 端口
     * @param string $DbUser 用户名
     * @param string $Charset 数据库编码
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 修改时间
     * @param string $CreatedUser 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Catalog catalog值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectType 连接类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 数据源描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 数据源状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourcePlat 来源平台
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraParam 扩展参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddInfo 额外信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineType 引擎类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Manager 数据源负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorWhitelist 特定操作人员白名单
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 数据源的vpc信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId 数据源的uniqVpc信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionId 数据源的地域信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseStateAction $StateAction 操作属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedUser 更新人
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PermissionList 权限列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AuthList 权限值列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataOrigin 第三方数据源标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataOriginProjectId 第三方项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataOriginDatasourceId 第三方数据源id
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbHost",$param) and $param["DbHost"] !== null) {
            $this->DbHost = $param["DbHost"];
        }

        if (array_key_exists("DbPort",$param) and $param["DbPort"] !== null) {
            $this->DbPort = $param["DbPort"];
        }

        if (array_key_exists("DbUser",$param) and $param["DbUser"] !== null) {
            $this->DbUser = $param["DbUser"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("CreatedUser",$param) and $param["CreatedUser"] !== null) {
            $this->CreatedUser = $param["CreatedUser"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("ConnectType",$param) and $param["ConnectType"] !== null) {
            $this->ConnectType = $param["ConnectType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SourcePlat",$param) and $param["SourcePlat"] !== null) {
            $this->SourcePlat = $param["SourcePlat"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }

        if (array_key_exists("AddInfo",$param) and $param["AddInfo"] !== null) {
            $this->AddInfo = $param["AddInfo"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("Manager",$param) and $param["Manager"] !== null) {
            $this->Manager = $param["Manager"];
        }

        if (array_key_exists("OperatorWhitelist",$param) and $param["OperatorWhitelist"] !== null) {
            $this->OperatorWhitelist = $param["OperatorWhitelist"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("StateAction",$param) and $param["StateAction"] !== null) {
            $this->StateAction = new BaseStateAction();
            $this->StateAction->deserialize($param["StateAction"]);
        }

        if (array_key_exists("UpdatedUser",$param) and $param["UpdatedUser"] !== null) {
            $this->UpdatedUser = $param["UpdatedUser"];
        }

        if (array_key_exists("PermissionList",$param) and $param["PermissionList"] !== null) {
            $this->PermissionList = [];
            foreach ($param["PermissionList"] as $key => $value){
                $obj = new PermissionGroup();
                $obj->deserialize($value);
                array_push($this->PermissionList, $obj);
            }
        }

        if (array_key_exists("AuthList",$param) and $param["AuthList"] !== null) {
            $this->AuthList = $param["AuthList"];
        }

        if (array_key_exists("DataOrigin",$param) and $param["DataOrigin"] !== null) {
            $this->DataOrigin = $param["DataOrigin"];
        }

        if (array_key_exists("DataOriginProjectId",$param) and $param["DataOriginProjectId"] !== null) {
            $this->DataOriginProjectId = $param["DataOriginProjectId"];
        }

        if (array_key_exists("DataOriginDatasourceId",$param) and $param["DataOriginDatasourceId"] !== null) {
            $this->DataOriginDatasourceId = $param["DataOriginDatasourceId"];
        }
    }
}
