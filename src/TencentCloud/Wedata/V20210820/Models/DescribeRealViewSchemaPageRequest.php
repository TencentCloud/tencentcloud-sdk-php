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
 * DescribeRealViewSchemaPage请求参数结构体
 *
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取每页记录数
 * @method void setPageSize(integer $PageSize) 设置每页记录数
 * @method string getDatabaseName() 获取数据库名称
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
 * @method string getDatasourceId() 获取数据源id
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
 * @method string getDataSourceType() 获取数据type
 * @method void setDataSourceType(string $DataSourceType) 设置数据type
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getEnv() 获取环境信息
 * @method void setEnv(string $Env) 设置环境信息
 * @method string getModel() 获取项目model
 * @method void setModel(string $Model) 设置项目model
 * @method string getDevDatasourceId() 获取dev的数据源Id
 * @method void setDevDatasourceId(string $DevDatasourceId) 设置dev的数据源Id
 * @method string getKeyword() 获取过滤字段
 * @method void setKeyword(string $Keyword) 设置过滤字段
 */
class DescribeRealViewSchemaPageRequest extends AbstractModel
{
    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 每页记录数
     */
    public $PageSize;

    /**
     * @var string 数据库名称
     */
    public $DatabaseName;

    /**
     * @var string 数据源id
     */
    public $DatasourceId;

    /**
     * @var string 数据type
     */
    public $DataSourceType;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 环境信息
     */
    public $Env;

    /**
     * @var string 项目model
     */
    public $Model;

    /**
     * @var string dev的数据源Id
     */
    public $DevDatasourceId;

    /**
     * @var string 过滤字段
     */
    public $Keyword;

    /**
     * @param integer $PageNumber 页码
     * @param integer $PageSize 每页记录数
     * @param string $DatabaseName 数据库名称
     * @param string $DatasourceId 数据源id
     * @param string $DataSourceType 数据type
     * @param string $ProjectId 项目id
     * @param string $Env 环境信息
     * @param string $Model 项目model
     * @param string $DevDatasourceId dev的数据源Id
     * @param string $Keyword 过滤字段
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("DevDatasourceId",$param) and $param["DevDatasourceId"] !== null) {
            $this->DevDatasourceId = $param["DevDatasourceId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
