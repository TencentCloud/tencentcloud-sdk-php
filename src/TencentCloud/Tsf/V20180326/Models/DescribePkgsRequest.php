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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePkgs请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID，通过调用DescribeApplications接口[获取应用列表](https://cloud.tencent.com/document/api/649/36090)从而获取应用ID，或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看，调用CreateApplication接口[创建应用](https://cloud.tencent.com/document/product/649/36094)时的返回值
 * @method void setApplicationId(string $ApplicationId) 设置应用ID，通过调用DescribeApplications接口[获取应用列表](https://cloud.tencent.com/document/api/649/36090)从而获取应用ID，或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看，调用CreateApplication接口[创建应用](https://cloud.tencent.com/document/product/649/36094)时的返回值
 * @method string getSearchWord() 获取查询关键字（支持根据包ID，包名，包版本号搜索）
 * @method void setSearchWord(string $SearchWord) 设置查询关键字（支持根据包ID，包名，包版本号搜索）
 * @method string getOrderBy() 获取排序关键字（默认值"UploadTime"），允许值："UploadTime"上传时间, "name"程序包名, "size"应用大小, "id"程序包ID
 * @method void setOrderBy(string $OrderBy) 设置排序关键字（默认值"UploadTime"），允许值："UploadTime"上传时间, "name"程序包名, "size"应用大小, "id"程序包ID
 * @method integer getOrderType() 获取升序：0/降序：1（默认降序）
 * @method void setOrderType(integer $OrderType) 设置升序：0/降序：1（默认降序）
 * @method integer getOffset() 获取查询起始偏移，大于等于0，默认值为0
 * @method void setOffset(integer $Offset) 设置查询起始偏移，大于等于0，默认值为0
 * @method integer getLimit() 获取返回数量限制
 * @method void setLimit(integer $Limit) 设置返回数量限制
 * @method string getRepositoryType() 获取程序包仓库类型，允许值："public-demo"TSF公共demo仓库, "private"自定义仓库, "default"TSF公共仓库
 * @method void setRepositoryType(string $RepositoryType) 设置程序包仓库类型，允许值："public-demo"TSF公共demo仓库, "private"自定义仓库, "default"TSF公共仓库
 * @method string getRepositoryId() 获取仓库ID，可通过调用[仓库信息查询类](https://cloud.tencent.com/document/api/649/45925)接口时出参中的RepositoryId，或登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
 * @method void setRepositoryId(string $RepositoryId) 设置仓库ID，可通过调用[仓库信息查询类](https://cloud.tencent.com/document/api/649/45925)接口时出参中的RepositoryId，或登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
 * @method array getPackageTypeList() 获取程序包类型数组支持（fatjar jar war tar.gz zip）
 * @method void setPackageTypeList(array $PackageTypeList) 设置程序包类型数组支持（fatjar jar war tar.gz zip）
 */
class DescribePkgsRequest extends AbstractModel
{
    /**
     * @var string 应用ID，通过调用DescribeApplications接口[获取应用列表](https://cloud.tencent.com/document/api/649/36090)从而获取应用ID，或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看，调用CreateApplication接口[创建应用](https://cloud.tencent.com/document/product/649/36094)时的返回值
     */
    public $ApplicationId;

    /**
     * @var string 查询关键字（支持根据包ID，包名，包版本号搜索）
     */
    public $SearchWord;

    /**
     * @var string 排序关键字（默认值"UploadTime"），允许值："UploadTime"上传时间, "name"程序包名, "size"应用大小, "id"程序包ID
     */
    public $OrderBy;

    /**
     * @var integer 升序：0/降序：1（默认降序）
     */
    public $OrderType;

    /**
     * @var integer 查询起始偏移，大于等于0，默认值为0
     */
    public $Offset;

    /**
     * @var integer 返回数量限制
     */
    public $Limit;

    /**
     * @var string 程序包仓库类型，允许值："public-demo"TSF公共demo仓库, "private"自定义仓库, "default"TSF公共仓库
     */
    public $RepositoryType;

    /**
     * @var string 仓库ID，可通过调用[仓库信息查询类](https://cloud.tencent.com/document/api/649/45925)接口时出参中的RepositoryId，或登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
     */
    public $RepositoryId;

    /**
     * @var array 程序包类型数组支持（fatjar jar war tar.gz zip）
     */
    public $PackageTypeList;

    /**
     * @param string $ApplicationId 应用ID，通过调用DescribeApplications接口[获取应用列表](https://cloud.tencent.com/document/api/649/36090)从而获取应用ID，或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看，调用CreateApplication接口[创建应用](https://cloud.tencent.com/document/product/649/36094)时的返回值
     * @param string $SearchWord 查询关键字（支持根据包ID，包名，包版本号搜索）
     * @param string $OrderBy 排序关键字（默认值"UploadTime"），允许值："UploadTime"上传时间, "name"程序包名, "size"应用大小, "id"程序包ID
     * @param integer $OrderType 升序：0/降序：1（默认降序）
     * @param integer $Offset 查询起始偏移，大于等于0，默认值为0
     * @param integer $Limit 返回数量限制
     * @param string $RepositoryType 程序包仓库类型，允许值："public-demo"TSF公共demo仓库, "private"自定义仓库, "default"TSF公共仓库
     * @param string $RepositoryId 仓库ID，可通过调用[仓库信息查询类](https://cloud.tencent.com/document/api/649/45925)接口时出参中的RepositoryId，或登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
     * @param array $PackageTypeList 程序包类型数组支持（fatjar jar war tar.gz zip）
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RepositoryType",$param) and $param["RepositoryType"] !== null) {
            $this->RepositoryType = $param["RepositoryType"];
        }

        if (array_key_exists("RepositoryId",$param) and $param["RepositoryId"] !== null) {
            $this->RepositoryId = $param["RepositoryId"];
        }

        if (array_key_exists("PackageTypeList",$param) and $param["PackageTypeList"] !== null) {
            $this->PackageTypeList = $param["PackageTypeList"];
        }
    }
}
