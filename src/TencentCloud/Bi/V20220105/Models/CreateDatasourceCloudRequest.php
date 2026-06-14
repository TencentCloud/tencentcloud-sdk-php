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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDatasourceCloud请求参数结构体
 *
 * @method string getServiceType() 获取<p>后端提供字典：域类型，1、腾讯云，2、本地</p>
 * @method void setServiceType(string $ServiceType) 设置<p>后端提供字典：域类型，1、腾讯云，2、本地</p>
 * @method string getDbType() 获取<p>驱动</p><p>枚举值：</p><ul><li>MYSQL： MySQL数据库</li><li>PRESTO： PRESTO数据库</li><li>POSTGRE： PostgreSQL数据库</li><li>DLC： DLC数据库</li><li>MSSQL： 微软SQL Server数据库</li></ul>
 * @method void setDbType(string $DbType) 设置<p>驱动</p><p>枚举值：</p><ul><li>MYSQL： MySQL数据库</li><li>PRESTO： PRESTO数据库</li><li>POSTGRE： PostgreSQL数据库</li><li>DLC： DLC数据库</li><li>MSSQL： 微软SQL Server数据库</li></ul>
 * @method string getCharset() 获取<p>数据库编码</p>
 * @method void setCharset(string $Charset) 设置<p>数据库编码</p>
 * @method string getDbUser() 获取<p>用户名</p>
 * @method void setDbUser(string $DbUser) 设置<p>用户名</p>
 * @method string getDbPwd() 获取<p>密码</p>
 * @method void setDbPwd(string $DbPwd) 设置<p>密码</p>
 * @method string getDbName() 获取<p>数据库名称</p>
 * @method void setDbName(string $DbName) 设置<p>数据库名称</p>
 * @method string getSourceName() 获取<p>数据库别名</p>
 * @method void setSourceName(string $SourceName) 设置<p>数据库别名</p>
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getVip() 获取<p>公有云内网ip</p>
 * @method void setVip(string $Vip) 设置<p>公有云内网ip</p>
 * @method string getVport() 获取<p>公有云内网端口</p>
 * @method void setVport(string $Vport) 设置<p>公有云内网端口</p>
 * @method string getVpcId() 获取<p>vpc标识</p>
 * @method void setVpcId(string $VpcId) 设置<p>vpc标识</p>
 * @method string getUniqVpcId() 获取<p>统一vpc标识</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>统一vpc标识</p>
 * @method string getRegionId() 获取<p>区域标识（gz,bj)</p>
 * @method void setRegionId(string $RegionId) 设置<p>区域标识（gz,bj)</p>
 * @method string getExtraParam() 获取<p>扩展参数</p>
 * @method void setExtraParam(string $ExtraParam) 设置<p>扩展参数</p>
 * @method string getInstanceId() 获取<p>实例Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例Id</p>
 * @method string getProdDbName() 获取<p>数据源产品名</p>
 * @method void setProdDbName(string $ProdDbName) 设置<p>数据源产品名</p>
 * @method string getDataOrigin() 获取<p>第三方数据源标识</p>
 * @method void setDataOrigin(string $DataOrigin) 设置<p>第三方数据源标识</p>
 * @method string getDataOriginProjectId() 获取<p>第三方项目id</p>
 * @method void setDataOriginProjectId(string $DataOriginProjectId) 设置<p>第三方项目id</p>
 * @method string getDataOriginDatasourceId() 获取<p>第三方数据源id</p>
 * @method void setDataOriginDatasourceId(string $DataOriginDatasourceId) 设置<p>第三方数据源id</p>
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method string getSchema() 获取<p>数据库schema</p>
 * @method void setSchema(string $Schema) 设置<p>数据库schema</p>
 * @method string getDbVersion() 获取<p>数据库版本</p>
 * @method void setDbVersion(string $DbVersion) 设置<p>数据库版本</p>
 */
class CreateDatasourceCloudRequest extends AbstractModel
{
    /**
     * @var string <p>后端提供字典：域类型，1、腾讯云，2、本地</p>
     */
    public $ServiceType;

    /**
     * @var string <p>驱动</p><p>枚举值：</p><ul><li>MYSQL： MySQL数据库</li><li>PRESTO： PRESTO数据库</li><li>POSTGRE： PostgreSQL数据库</li><li>DLC： DLC数据库</li><li>MSSQL： 微软SQL Server数据库</li></ul>
     */
    public $DbType;

    /**
     * @var string <p>数据库编码</p>
     */
    public $Charset;

    /**
     * @var string <p>用户名</p>
     */
    public $DbUser;

    /**
     * @var string <p>密码</p>
     */
    public $DbPwd;

    /**
     * @var string <p>数据库名称</p>
     */
    public $DbName;

    /**
     * @var string <p>数据库别名</p>
     */
    public $SourceName;

    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>公有云内网ip</p>
     */
    public $Vip;

    /**
     * @var string <p>公有云内网端口</p>
     */
    public $Vport;

    /**
     * @var string <p>vpc标识</p>
     */
    public $VpcId;

    /**
     * @var string <p>统一vpc标识</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>区域标识（gz,bj)</p>
     */
    public $RegionId;

    /**
     * @var string <p>扩展参数</p>
     */
    public $ExtraParam;

    /**
     * @var string <p>实例Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>数据源产品名</p>
     */
    public $ProdDbName;

    /**
     * @var string <p>第三方数据源标识</p>
     */
    public $DataOrigin;

    /**
     * @var string <p>第三方项目id</p>
     */
    public $DataOriginProjectId;

    /**
     * @var string <p>第三方数据源id</p>
     */
    public $DataOriginDatasourceId;

    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>数据库schema</p>
     */
    public $Schema;

    /**
     * @var string <p>数据库版本</p>
     */
    public $DbVersion;

    /**
     * @param string $ServiceType <p>后端提供字典：域类型，1、腾讯云，2、本地</p>
     * @param string $DbType <p>驱动</p><p>枚举值：</p><ul><li>MYSQL： MySQL数据库</li><li>PRESTO： PRESTO数据库</li><li>POSTGRE： PostgreSQL数据库</li><li>DLC： DLC数据库</li><li>MSSQL： 微软SQL Server数据库</li></ul>
     * @param string $Charset <p>数据库编码</p>
     * @param string $DbUser <p>用户名</p>
     * @param string $DbPwd <p>密码</p>
     * @param string $DbName <p>数据库名称</p>
     * @param string $SourceName <p>数据库别名</p>
     * @param string $ProjectId <p>项目ID</p>
     * @param string $Vip <p>公有云内网ip</p>
     * @param string $Vport <p>公有云内网端口</p>
     * @param string $VpcId <p>vpc标识</p>
     * @param string $UniqVpcId <p>统一vpc标识</p>
     * @param string $RegionId <p>区域标识（gz,bj)</p>
     * @param string $ExtraParam <p>扩展参数</p>
     * @param string $InstanceId <p>实例Id</p>
     * @param string $ProdDbName <p>数据源产品名</p>
     * @param string $DataOrigin <p>第三方数据源标识</p>
     * @param string $DataOriginProjectId <p>第三方项目id</p>
     * @param string $DataOriginDatasourceId <p>第三方数据源id</p>
     * @param string $ClusterId <p>集群id</p>
     * @param string $Schema <p>数据库schema</p>
     * @param string $DbVersion <p>数据库版本</p>
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }
    }
}
