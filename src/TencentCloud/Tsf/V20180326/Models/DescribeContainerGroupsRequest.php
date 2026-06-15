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
 * DescribeContainerGroups请求参数结构体
 *
 * @method string getApplicationId() 获取<p>分组所属【应用ID】，可通过调用<a href="https://cloud.tencent.com/document/product/649/36090">DescribeApplications</a>查询已创建的应用列表或登录<a href="https://console.cloud.tencent.com/tsf/app?rid=1">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36094">CreateApplication</a>创建新的应用。</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>分组所属【应用ID】，可通过调用<a href="https://cloud.tencent.com/document/product/649/36090">DescribeApplications</a>查询已创建的应用列表或登录<a href="https://console.cloud.tencent.com/tsf/app?rid=1">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36094">CreateApplication</a>创建新的应用。</p>
 * @method string getSearchWord() 获取<p>搜索字段，模糊搜索groupName字段</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>搜索字段，模糊搜索groupName字段</p>
 * @method string getOrderBy() 获取<p>排序字段，默认为 createTime字段，支持id， name， createTime</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序字段，默认为 createTime字段，支持id， name， createTime</p>
 * @method integer getOrderType() 获取<p>排序方式，默认为1：倒序排序，0：正序，1：倒序</p>
 * @method void setOrderType(integer $OrderType) 设置<p>排序方式，默认为1：倒序排序，0：正序，1：倒序</p>
 * @method integer getOffset() 获取<p>偏移量，取值从0开始</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，取值从0开始</p>
 * @method integer getLimit() 获取<p>分页个数，默认为20， 取值应为1~50</p>
 * @method void setLimit(integer $Limit) 设置<p>分页个数，默认为20， 取值应为1~50</p>
 * @method string getClusterId() 获取<p>分组所属【集群ID】，可通过调用<a href="https://cloud.tencent.com/document/product/649/85857">DescribeClusters</a>查询已创建的集群列表或登录<a href="https://console.cloud.tencent.com/tsf/resource?rid=1&amp;tab=docker">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36049">CreateCluster</a>创建新的集群。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>分组所属【集群ID】，可通过调用<a href="https://cloud.tencent.com/document/product/649/85857">DescribeClusters</a>查询已创建的集群列表或登录<a href="https://console.cloud.tencent.com/tsf/resource?rid=1&amp;tab=docker">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36049">CreateCluster</a>创建新的集群。</p>
 * @method string getNamespaceId() 获取<p>分组所属【命名空间 ID】，可通过调用<a href="https://cloud.tencent.com/document/product/649/36096">DescribeSimpleNamespaces</a>查询已创建的命名空间列表或登录<a href="https://console.cloud.tencent.com/tsf/resource?rid=1&amp;tab=namespace">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36098">CreateNamespace</a>创建新的命名空间。</p>
 * @method void setNamespaceId(string $NamespaceId) 设置<p>分组所属【命名空间 ID】，可通过调用<a href="https://cloud.tencent.com/document/product/649/36096">DescribeSimpleNamespaces</a>查询已创建的命名空间列表或登录<a href="https://console.cloud.tencent.com/tsf/resource?rid=1&amp;tab=namespace">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36098">CreateNamespace</a>创建新的命名空间。</p>
 * @method array getGroupIdList() 获取<p>部署组ID列表</p>
 * @method void setGroupIdList(array $GroupIdList) 设置<p>部署组ID列表</p>
 */
class DescribeContainerGroupsRequest extends AbstractModel
{
    /**
     * @var string <p>分组所属【应用ID】，可通过调用<a href="https://cloud.tencent.com/document/product/649/36090">DescribeApplications</a>查询已创建的应用列表或登录<a href="https://console.cloud.tencent.com/tsf/app?rid=1">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36094">CreateApplication</a>创建新的应用。</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>搜索字段，模糊搜索groupName字段</p>
     */
    public $SearchWord;

    /**
     * @var string <p>排序字段，默认为 createTime字段，支持id， name， createTime</p>
     */
    public $OrderBy;

    /**
     * @var integer <p>排序方式，默认为1：倒序排序，0：正序，1：倒序</p>
     */
    public $OrderType;

    /**
     * @var integer <p>偏移量，取值从0开始</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页个数，默认为20， 取值应为1~50</p>
     */
    public $Limit;

    /**
     * @var string <p>分组所属【集群ID】，可通过调用<a href="https://cloud.tencent.com/document/product/649/85857">DescribeClusters</a>查询已创建的集群列表或登录<a href="https://console.cloud.tencent.com/tsf/resource?rid=1&amp;tab=docker">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36049">CreateCluster</a>创建新的集群。</p>
     */
    public $ClusterId;

    /**
     * @var string <p>分组所属【命名空间 ID】，可通过调用<a href="https://cloud.tencent.com/document/product/649/36096">DescribeSimpleNamespaces</a>查询已创建的命名空间列表或登录<a href="https://console.cloud.tencent.com/tsf/resource?rid=1&amp;tab=namespace">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36098">CreateNamespace</a>创建新的命名空间。</p>
     */
    public $NamespaceId;

    /**
     * @var array <p>部署组ID列表</p>
     */
    public $GroupIdList;

    /**
     * @param string $ApplicationId <p>分组所属【应用ID】，可通过调用<a href="https://cloud.tencent.com/document/product/649/36090">DescribeApplications</a>查询已创建的应用列表或登录<a href="https://console.cloud.tencent.com/tsf/app?rid=1">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36094">CreateApplication</a>创建新的应用。</p>
     * @param string $SearchWord <p>搜索字段，模糊搜索groupName字段</p>
     * @param string $OrderBy <p>排序字段，默认为 createTime字段，支持id， name， createTime</p>
     * @param integer $OrderType <p>排序方式，默认为1：倒序排序，0：正序，1：倒序</p>
     * @param integer $Offset <p>偏移量，取值从0开始</p>
     * @param integer $Limit <p>分页个数，默认为20， 取值应为1~50</p>
     * @param string $ClusterId <p>分组所属【集群ID】，可通过调用<a href="https://cloud.tencent.com/document/product/649/85857">DescribeClusters</a>查询已创建的集群列表或登录<a href="https://console.cloud.tencent.com/tsf/resource?rid=1&amp;tab=docker">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36049">CreateCluster</a>创建新的集群。</p>
     * @param string $NamespaceId <p>分组所属【命名空间 ID】，可通过调用<a href="https://cloud.tencent.com/document/product/649/36096">DescribeSimpleNamespaces</a>查询已创建的命名空间列表或登录<a href="https://console.cloud.tencent.com/tsf/resource?rid=1&amp;tab=namespace">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36098">CreateNamespace</a>创建新的命名空间。</p>
     * @param array $GroupIdList <p>部署组ID列表</p>
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("GroupIdList",$param) and $param["GroupIdList"] !== null) {
            $this->GroupIdList = $param["GroupIdList"];
        }
    }
}
