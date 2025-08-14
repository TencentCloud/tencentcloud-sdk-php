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
 * DeleteNamespace请求参数结构体
 *
 * @method string getNamespaceId() 获取命名空间ID，按照【命名空间ID】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新命名空间。
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID，按照【命名空间ID】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新命名空间。
 * @method string getClusterId() 获取集群ID，按照【集群ID】进行过滤，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录控制台进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。仅在集群下无部署组、命名空间、云主机时可以删除。
 * @method void setClusterId(string $ClusterId) 设置集群ID，按照【集群ID】进行过滤，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录控制台进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。仅在集群下无部署组、命名空间、云主机时可以删除。
 */
class DeleteNamespaceRequest extends AbstractModel
{
    /**
     * @var string 命名空间ID，按照【命名空间ID】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新命名空间。
     */
    public $NamespaceId;

    /**
     * @var string 集群ID，按照【集群ID】进行过滤，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录控制台进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。仅在集群下无部署组、命名空间、云主机时可以删除。
     */
    public $ClusterId;

    /**
     * @param string $NamespaceId 命名空间ID，按照【命名空间ID】进行过滤，可通过调用[DescribeNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录控制台进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新命名空间。
     * @param string $ClusterId 集群ID，按照【集群ID】进行过滤，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录控制台进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。仅在集群下无部署组、命名空间、云主机时可以删除。
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
