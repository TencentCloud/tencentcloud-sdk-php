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
 * DescribeRealViewDatabasePage请求参数结构体
 *
 * @method integer getDatasourceId() 获取数据源ID
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源ID
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method boolean getAsc() 获取排序字段类型：ASC/DESC
 * @method void setAsc(boolean $Asc) 设置排序字段类型：ASC/DESC
 * @method string getConnectionType() 获取指定数据源链接方式，如hive jdbc或者metastore client
 * @method void setConnectionType(string $ConnectionType) 设置指定数据源链接方式，如hive jdbc或者metastore client
 * @method string getKeyword() 获取Keyword过滤
 * @method void setKeyword(string $Keyword) 设置Keyword过滤
 * @method integer getPageNumber() 获取【分页参数】页码
 * @method void setPageNumber(integer $PageNumber) 设置【分页参数】页码
 * @method integer getPageSize() 获取【分页参数】分页大小
 * @method void setPageSize(integer $PageSize) 设置【分页参数】分页大小
 * @method string getResourceGroupId() 获取资源组ID
 * @method void setResourceGroupId(string $ResourceGroupId) 设置资源组ID
 * @method integer getResourceType() 获取资源组类型
 * @method void setResourceType(integer $ResourceType) 设置资源组类型
 * @method string getSort() 获取Sort
 * @method void setSort(string $Sort) 设置Sort
 * @method string getCatalogName() 获取catalog名称
 * @method void setCatalogName(string $CatalogName) 设置catalog名称
 */
class DescribeRealViewDatabasePageRequest extends AbstractModel
{
    /**
     * @var integer 数据源ID
     */
    public $DatasourceId;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var boolean 排序字段类型：ASC/DESC
     */
    public $Asc;

    /**
     * @var string 指定数据源链接方式，如hive jdbc或者metastore client
     */
    public $ConnectionType;

    /**
     * @var string Keyword过滤
     */
    public $Keyword;

    /**
     * @var integer 【分页参数】页码
     */
    public $PageNumber;

    /**
     * @var integer 【分页参数】分页大小
     */
    public $PageSize;

    /**
     * @var string 资源组ID
     */
    public $ResourceGroupId;

    /**
     * @var integer 资源组类型
     */
    public $ResourceType;

    /**
     * @var string Sort
     */
    public $Sort;

    /**
     * @var string catalog名称
     */
    public $CatalogName;

    /**
     * @param integer $DatasourceId 数据源ID
     * @param string $ProjectId 项目Id
     * @param boolean $Asc 排序字段类型：ASC/DESC
     * @param string $ConnectionType 指定数据源链接方式，如hive jdbc或者metastore client
     * @param string $Keyword Keyword过滤
     * @param integer $PageNumber 【分页参数】页码
     * @param integer $PageSize 【分页参数】分页大小
     * @param string $ResourceGroupId 资源组ID
     * @param integer $ResourceType 资源组类型
     * @param string $Sort Sort
     * @param string $CatalogName catalog名称
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
        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }

        if (array_key_exists("ConnectionType",$param) and $param["ConnectionType"] !== null) {
            $this->ConnectionType = $param["ConnectionType"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }
    }
}
