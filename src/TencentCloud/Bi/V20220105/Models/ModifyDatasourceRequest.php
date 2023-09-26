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
 * ModifyDatasource请求参数结构体
 *
 * @method string getDbHost() 获取HOST
 * @method void setDbHost(string $DbHost) 设置HOST
 * @method integer getDbPort() 获取端口
 * @method void setDbPort(integer $DbPort) 设置端口
 * @method string getServiceType() 获取后端提供字典：域类型，1、腾讯云，2、本地
 * @method void setServiceType(string $ServiceType) 设置后端提供字典：域类型，1、腾讯云，2、本地
 * @method string getDbType() 获取驱动
 * @method void setDbType(string $DbType) 设置驱动
 * @method string getCharset() 获取数据库编码
 * @method void setCharset(string $Charset) 设置数据库编码
 * @method string getDbUser() 获取用户名
 * @method void setDbUser(string $DbUser) 设置用户名
 * @method string getDbPwd() 获取密码
 * @method void setDbPwd(string $DbPwd) 设置密码
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method string getSourceName() 获取数据库别名
 * @method void setSourceName(string $SourceName) 设置数据库别名
 * @method integer getId() 获取数据源id
 * @method void setId(integer $Id) 设置数据源id
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getCatalog() 获取catalog值
 * @method void setCatalog(string $Catalog) 设置catalog值
 * @method string getDataOrigin() 获取第三方数据源标识
 * @method void setDataOrigin(string $DataOrigin) 设置第三方数据源标识
 * @method string getDataOriginProjectId() 获取第三方项目id
 * @method void setDataOriginProjectId(string $DataOriginProjectId) 设置第三方项目id
 * @method string getDataOriginDatasourceId() 获取第三方数据源id
 * @method void setDataOriginDatasourceId(string $DataOriginDatasourceId) 设置第三方数据源id
 * @method string getExtraParam() 获取扩展参数
 * @method void setExtraParam(string $ExtraParam) 设置扩展参数
 * @method string getUniqVpcId() 获取腾讯云私有网络统一标识
 * @method void setUniqVpcId(string $UniqVpcId) 设置腾讯云私有网络统一标识
 * @method string getVip() 获取私有网络ip
 * @method void setVip(string $Vip) 设置私有网络ip
 * @method string getVport() 获取私有网络端口
 * @method void setVport(string $Vport) 设置私有网络端口
 * @method string getVpcId() 获取腾讯云私有网络标识
 * @method void setVpcId(string $VpcId) 设置腾讯云私有网络标识
 */
class ModifyDatasourceRequest extends AbstractModel
{
    /**
     * @var string HOST
     */
    public $DbHost;

    /**
     * @var integer 端口
     */
    public $DbPort;

    /**
     * @var string 后端提供字典：域类型，1、腾讯云，2、本地
     */
    public $ServiceType;

    /**
     * @var string 驱动
     */
    public $DbType;

    /**
     * @var string 数据库编码
     */
    public $Charset;

    /**
     * @var string 用户名
     */
    public $DbUser;

    /**
     * @var string 密码
     */
    public $DbPwd;

    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var string 数据库别名
     */
    public $SourceName;

    /**
     * @var integer 数据源id
     */
    public $Id;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var string catalog值
     */
    public $Catalog;

    /**
     * @var string 第三方数据源标识
     */
    public $DataOrigin;

    /**
     * @var string 第三方项目id
     */
    public $DataOriginProjectId;

    /**
     * @var string 第三方数据源id
     */
    public $DataOriginDatasourceId;

    /**
     * @var string 扩展参数
     */
    public $ExtraParam;

    /**
     * @var string 腾讯云私有网络统一标识
     */
    public $UniqVpcId;

    /**
     * @var string 私有网络ip
     */
    public $Vip;

    /**
     * @var string 私有网络端口
     */
    public $Vport;

    /**
     * @var string 腾讯云私有网络标识
     */
    public $VpcId;

    /**
     * @param string $DbHost HOST
     * @param integer $DbPort 端口
     * @param string $ServiceType 后端提供字典：域类型，1、腾讯云，2、本地
     * @param string $DbType 驱动
     * @param string $Charset 数据库编码
     * @param string $DbUser 用户名
     * @param string $DbPwd 密码
     * @param string $DbName 数据库名称
     * @param string $SourceName 数据库别名
     * @param integer $Id 数据源id
     * @param integer $ProjectId 项目ID
     * @param string $Catalog catalog值
     * @param string $DataOrigin 第三方数据源标识
     * @param string $DataOriginProjectId 第三方项目id
     * @param string $DataOriginDatasourceId 第三方数据源id
     * @param string $ExtraParam 扩展参数
     * @param string $UniqVpcId 腾讯云私有网络统一标识
     * @param string $Vip 私有网络ip
     * @param string $Vport 私有网络端口
     * @param string $VpcId 腾讯云私有网络标识
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
        if (array_key_exists("DbHost",$param) and $param["DbHost"] !== null) {
            $this->DbHost = $param["DbHost"];
        }

        if (array_key_exists("DbPort",$param) and $param["DbPort"] !== null) {
            $this->DbPort = $param["DbPort"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("DbUser",$param) and $param["DbUser"] !== null) {
            $this->DbUser = $param["DbUser"];
        }

        if (array_key_exists("DbPwd",$param) and $param["DbPwd"] !== null) {
            $this->DbPwd = $param["DbPwd"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
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

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
