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
 * DescribeSimpleNamespaces请求参数结构体
 *
 * @method array getNamespaceIdList() 获取命名空间ID列表，按照【命名空间ID列表】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
 * @method void setNamespaceIdList(array $NamespaceIdList) 设置命名空间ID列表，按照【命名空间ID列表】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
 * @method string getClusterId() 获取集群ID，按照【集群ID】进行过滤，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录控制台进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。仅在集群下无部署组、命名空间、云主机时可以删除。
 * @method void setClusterId(string $ClusterId) 设置集群ID，按照【集群ID】进行过滤，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录控制台进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。仅在集群下无部署组、命名空间、云主机时可以删除。
 * @method integer getLimit() 获取数量限制，默认为20，最大值为100。关于Limit详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
 * @method void setLimit(integer $Limit) 设置数量限制，默认为20，最大值为100。关于Limit详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
 * @method integer getOffset() 获取偏移量，默认为0。关于Offset详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于Offset详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
 * @method string getNamespaceId() 获取命名空间ID，按照【命名空间ID】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新命名空间。
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID，按照【命名空间ID】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新命名空间。
 * @method array getNamespaceResourceTypeList() 获取查询资源类型列表；DEF 表示默认资源类型；GW 表示网关资源类型
 * @method void setNamespaceResourceTypeList(array $NamespaceResourceTypeList) 设置查询资源类型列表；DEF 表示默认资源类型；GW 表示网关资源类型
 * @method string getSearchWord() 获取通过id和name进行过滤
 * @method void setSearchWord(string $SearchWord) 设置通过id和name进行过滤
 * @method array getNamespaceTypeList() 获取查询的命名空间类型列表。DEF：默认普通命名空间。GLOBAL：全局命名空间。
 * @method void setNamespaceTypeList(array $NamespaceTypeList) 设置查询的命名空间类型列表。DEF：默认普通命名空间。GLOBAL：全局命名空间。
 * @method string getNamespaceName() 获取通过命名空间名精确过滤
 * @method void setNamespaceName(string $NamespaceName) 设置通过命名空间名精确过滤
 * @method string getIsDefault() 获取通过是否是默认命名空间过滤，不传表示拉取全部命名空间。0：默认命名空间。1：非默认命名空间。
 * @method void setIsDefault(string $IsDefault) 设置通过是否是默认命名空间过滤，不传表示拉取全部命名空间。0：默认命名空间。1：非默认命名空间。
 * @method boolean getDisableProgramAuthCheck() 获取是否关闭鉴权查询
 * @method void setDisableProgramAuthCheck(boolean $DisableProgramAuthCheck) 设置是否关闭鉴权查询
 */
class DescribeSimpleNamespacesRequest extends AbstractModel
{
    /**
     * @var array 命名空间ID列表，按照【命名空间ID列表】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
     */
    public $NamespaceIdList;

    /**
     * @var string 集群ID，按照【集群ID】进行过滤，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录控制台进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。仅在集群下无部署组、命名空间、云主机时可以删除。
     */
    public $ClusterId;

    /**
     * @var integer 数量限制，默认为20，最大值为100。关于Limit详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。关于Offset详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
     */
    public $Offset;

    /**
     * @var string 命名空间ID，按照【命名空间ID】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新命名空间。
     */
    public $NamespaceId;

    /**
     * @var array 查询资源类型列表；DEF 表示默认资源类型；GW 表示网关资源类型
     */
    public $NamespaceResourceTypeList;

    /**
     * @var string 通过id和name进行过滤
     */
    public $SearchWord;

    /**
     * @var array 查询的命名空间类型列表。DEF：默认普通命名空间。GLOBAL：全局命名空间。
     */
    public $NamespaceTypeList;

    /**
     * @var string 通过命名空间名精确过滤
     */
    public $NamespaceName;

    /**
     * @var string 通过是否是默认命名空间过滤，不传表示拉取全部命名空间。0：默认命名空间。1：非默认命名空间。
     */
    public $IsDefault;

    /**
     * @var boolean 是否关闭鉴权查询
     */
    public $DisableProgramAuthCheck;

    /**
     * @param array $NamespaceIdList 命名空间ID列表，按照【命名空间ID列表】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
     * @param string $ClusterId 集群ID，按照【集群ID】进行过滤，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录控制台进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。仅在集群下无部署组、命名空间、云主机时可以删除。
     * @param integer $Limit 数量限制，默认为20，最大值为100。关于Limit详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
     * @param integer $Offset 偏移量，默认为0。关于Offset详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
     * @param string $NamespaceId 命名空间ID，按照【命名空间ID】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新命名空间。
     * @param array $NamespaceResourceTypeList 查询资源类型列表；DEF 表示默认资源类型；GW 表示网关资源类型
     * @param string $SearchWord 通过id和name进行过滤
     * @param array $NamespaceTypeList 查询的命名空间类型列表。DEF：默认普通命名空间。GLOBAL：全局命名空间。
     * @param string $NamespaceName 通过命名空间名精确过滤
     * @param string $IsDefault 通过是否是默认命名空间过滤，不传表示拉取全部命名空间。0：默认命名空间。1：非默认命名空间。
     * @param boolean $DisableProgramAuthCheck 是否关闭鉴权查询
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
        if (array_key_exists("NamespaceIdList",$param) and $param["NamespaceIdList"] !== null) {
            $this->NamespaceIdList = $param["NamespaceIdList"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceResourceTypeList",$param) and $param["NamespaceResourceTypeList"] !== null) {
            $this->NamespaceResourceTypeList = $param["NamespaceResourceTypeList"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("NamespaceTypeList",$param) and $param["NamespaceTypeList"] !== null) {
            $this->NamespaceTypeList = $param["NamespaceTypeList"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("DisableProgramAuthCheck",$param) and $param["DisableProgramAuthCheck"] !== null) {
            $this->DisableProgramAuthCheck = $param["DisableProgramAuthCheck"];
        }
    }
}
