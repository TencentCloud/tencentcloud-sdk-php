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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataSourceList请求参数结构体
 *
 * @method integer getPageSize() 获取每页条数
 * @method void setPageSize(integer $PageSize) 设置每页条数
 * @method integer getPageIndex() 获取页码
 * @method void setPageIndex(integer $PageIndex) 设置页码
 * @method string getEnvId() 获取环境 id
 * @method void setEnvId(string $EnvId) 设置环境 id
 * @method array getAppids() 获取应用id数组
 * @method void setAppids(array $Appids) 设置应用id数组
 * @method array getDataSourceIds() 获取数据源id数组
 * @method void setDataSourceIds(array $DataSourceIds) 设置数据源id数组
 * @method array getDataSourceNames() 获取数据源名称数组
 * @method void setDataSourceNames(array $DataSourceNames) 设置数据源名称数组
 * @method string getDataSourceType() 获取数据源类型 database-自建数据源；cloud-integration-自定义数据源
 * @method void setDataSourceType(string $DataSourceType) 设置数据源类型 database-自建数据源；cloud-integration-自定义数据源
 * @method DataSourceQueryOption getQueryOption() 获取数据源模糊查询参数
 * @method void setQueryOption(DataSourceQueryOption $QueryOption) 设置数据源模糊查询参数
 * @method array getViewIds() 获取数据源视图Id数组
 * @method void setViewIds(array $ViewIds) 设置数据源视图Id数组
 * @method integer getAppLinkStatus() 获取查询未关联应用的数据源，0:未关联，该参数配合 AppIds 参数一块使用
 * @method void setAppLinkStatus(integer $AppLinkStatus) 设置查询未关联应用的数据源，0:未关联，该参数配合 AppIds 参数一块使用
 * @method integer getQueryBindToApp() 获取查询应用绑定数据源: 0: 否,1: 是
 * @method void setQueryBindToApp(integer $QueryBindToApp) 设置查询应用绑定数据源: 0: 否,1: 是
 * @method integer getQueryConnector() 获取查询连接器 0 数据模型 1 连接器 2 自定义连接器
 * @method void setQueryConnector(integer $QueryConnector) 设置查询连接器 0 数据模型 1 连接器 2 自定义连接器
 * @method array getNotQuerySubTypeList() 获取查询数据源黑名单机制，比如不想要系统数据源["system"]
 * @method void setNotQuerySubTypeList(array $NotQuerySubTypeList) 设置查询数据源黑名单机制，比如不想要系统数据源["system"]
 */
class DescribeDataSourceListRequest extends AbstractModel
{
    /**
     * @var integer 每页条数
     */
    public $PageSize;

    /**
     * @var integer 页码
     */
    public $PageIndex;

    /**
     * @var string 环境 id
     */
    public $EnvId;

    /**
     * @var array 应用id数组
     */
    public $Appids;

    /**
     * @var array 数据源id数组
     */
    public $DataSourceIds;

    /**
     * @var array 数据源名称数组
     */
    public $DataSourceNames;

    /**
     * @var string 数据源类型 database-自建数据源；cloud-integration-自定义数据源
     */
    public $DataSourceType;

    /**
     * @var DataSourceQueryOption 数据源模糊查询参数
     */
    public $QueryOption;

    /**
     * @var array 数据源视图Id数组
     */
    public $ViewIds;

    /**
     * @var integer 查询未关联应用的数据源，0:未关联，该参数配合 AppIds 参数一块使用
     */
    public $AppLinkStatus;

    /**
     * @var integer 查询应用绑定数据源: 0: 否,1: 是
     */
    public $QueryBindToApp;

    /**
     * @var integer 查询连接器 0 数据模型 1 连接器 2 自定义连接器
     */
    public $QueryConnector;

    /**
     * @var array 查询数据源黑名单机制，比如不想要系统数据源["system"]
     */
    public $NotQuerySubTypeList;

    /**
     * @param integer $PageSize 每页条数
     * @param integer $PageIndex 页码
     * @param string $EnvId 环境 id
     * @param array $Appids 应用id数组
     * @param array $DataSourceIds 数据源id数组
     * @param array $DataSourceNames 数据源名称数组
     * @param string $DataSourceType 数据源类型 database-自建数据源；cloud-integration-自定义数据源
     * @param DataSourceQueryOption $QueryOption 数据源模糊查询参数
     * @param array $ViewIds 数据源视图Id数组
     * @param integer $AppLinkStatus 查询未关联应用的数据源，0:未关联，该参数配合 AppIds 参数一块使用
     * @param integer $QueryBindToApp 查询应用绑定数据源: 0: 否,1: 是
     * @param integer $QueryConnector 查询连接器 0 数据模型 1 连接器 2 自定义连接器
     * @param array $NotQuerySubTypeList 查询数据源黑名单机制，比如不想要系统数据源["system"]
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Appids",$param) and $param["Appids"] !== null) {
            $this->Appids = $param["Appids"];
        }

        if (array_key_exists("DataSourceIds",$param) and $param["DataSourceIds"] !== null) {
            $this->DataSourceIds = $param["DataSourceIds"];
        }

        if (array_key_exists("DataSourceNames",$param) and $param["DataSourceNames"] !== null) {
            $this->DataSourceNames = $param["DataSourceNames"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("QueryOption",$param) and $param["QueryOption"] !== null) {
            $this->QueryOption = new DataSourceQueryOption();
            $this->QueryOption->deserialize($param["QueryOption"]);
        }

        if (array_key_exists("ViewIds",$param) and $param["ViewIds"] !== null) {
            $this->ViewIds = $param["ViewIds"];
        }

        if (array_key_exists("AppLinkStatus",$param) and $param["AppLinkStatus"] !== null) {
            $this->AppLinkStatus = $param["AppLinkStatus"];
        }

        if (array_key_exists("QueryBindToApp",$param) and $param["QueryBindToApp"] !== null) {
            $this->QueryBindToApp = $param["QueryBindToApp"];
        }

        if (array_key_exists("QueryConnector",$param) and $param["QueryConnector"] !== null) {
            $this->QueryConnector = $param["QueryConnector"];
        }

        if (array_key_exists("NotQuerySubTypeList",$param) and $param["NotQuerySubTypeList"] !== null) {
            $this->NotQuerySubTypeList = $param["NotQuerySubTypeList"];
        }
    }
}
