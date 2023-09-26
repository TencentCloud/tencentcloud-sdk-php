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
 * CreateDatasourceCloud请求参数结构体
 *
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
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getVip() 获取公有云内网ip
 * @method void setVip(string $Vip) 设置公有云内网ip
 * @method string getVport() 获取公有云内网端口
 * @method void setVport(string $Vport) 设置公有云内网端口
 * @method string getVpcId() 获取vpc标识
 * @method void setVpcId(string $VpcId) 设置vpc标识
 * @method string getUniqVpcId() 获取统一vpc标识
 * @method void setUniqVpcId(string $UniqVpcId) 设置统一vpc标识
 * @method string getRegionId() 获取区域标识（gz,bj)
 * @method void setRegionId(string $RegionId) 设置区域标识（gz,bj)
 * @method string getExtraParam() 获取扩展参数
 * @method void setExtraParam(string $ExtraParam) 设置扩展参数
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getProdDbName() 获取数据源产品名
 * @method void setProdDbName(string $ProdDbName) 设置数据源产品名
 * @method string getDataOrigin() 获取第三方数据源标识
 * @method void setDataOrigin(string $DataOrigin) 设置第三方数据源标识
 * @method string getDataOriginProjectId() 获取第三方项目id
 * @method void setDataOriginProjectId(string $DataOriginProjectId) 设置第三方项目id
 * @method string getDataOriginDatasourceId() 获取第三方数据源id
 * @method void setDataOriginDatasourceId(string $DataOriginDatasourceId) 设置第三方数据源id
 */
class CreateDatasourceCloudRequest extends AbstractModel
{
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
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 公有云内网ip
     */
    public $Vip;

    /**
     * @var string 公有云内网端口
     */
    public $Vport;

    /**
     * @var string vpc标识
     */
    public $VpcId;

    /**
     * @var string 统一vpc标识
     */
    public $UniqVpcId;

    /**
     * @var string 区域标识（gz,bj)
     */
    public $RegionId;

    /**
     * @var string 扩展参数
     */
    public $ExtraParam;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 数据源产品名
     */
    public $ProdDbName;

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
     * @param string $ServiceType 后端提供字典：域类型，1、腾讯云，2、本地
     * @param string $DbType 驱动
     * @param string $Charset 数据库编码
     * @param string $DbUser 用户名
     * @param string $DbPwd 密码
     * @param string $DbName 数据库名称
     * @param string $SourceName 数据库别名
     * @param string $ProjectId 项目ID
     * @param string $Vip 公有云内网ip
     * @param string $Vport 公有云内网端口
     * @param string $VpcId vpc标识
     * @param string $UniqVpcId 统一vpc标识
     * @param string $RegionId 区域标识（gz,bj)
     * @param string $ExtraParam 扩展参数
     * @param string $InstanceId 实例Id
     * @param string $ProdDbName 数据源产品名
     * @param string $DataOrigin 第三方数据源标识
     * @param string $DataOriginProjectId 第三方项目id
     * @param string $DataOriginDatasourceId 第三方数据源id
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProdDbName",$param) and $param["ProdDbName"] !== null) {
            $this->ProdDbName = $param["ProdDbName"];
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
