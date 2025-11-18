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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImages请求参数结构体
 *
 * @method array getImageIds() 获取镜像ID列表 。镜像ID如：`img-gvbnzy6f`。array型参数的格式可以参考[API简介](https://cloud.tencent.com/document/api/213/15688)。镜像ID可以通过如下方式获取：<br><li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取。</li><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。</li>
 * @method void setImageIds(array $ImageIds) 设置镜像ID列表 。镜像ID如：`img-gvbnzy6f`。array型参数的格式可以参考[API简介](https://cloud.tencent.com/document/api/213/15688)。镜像ID可以通过如下方式获取：<br><li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取。</li><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。</li>
 * @method array getFilters() 获取过滤条件，每次请求的`Filters`的上限为10，`Filters.Values`的上限为5。参数不可以同时指定`ImageIds`和`Filters`。详细的过滤条件如下：<li><strong>image-id</strong></li><p style="padding-left: 30px;">按照【<strong>镜像ID</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>image-type</strong></li><p style="padding-left: 30px;">按照【<strong>镜像类型</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：</p><p style="padding-left: 30px;">PRIVATE_IMAGE: 自定义镜像 (本账户创建的镜像)</p><p style="padding-left: 30px;">PUBLIC_IMAGE: 公共镜像 (腾讯云官方镜像)</p><p style="padding-left: 30px;">SHARED_IMAGE: 共享镜像(其他账户共享给本账户的镜像)</p><li><strong>image-name</strong></li><p style="padding-left: 30px;">按照【<strong>镜像名称</strong>】进行过滤。支持模糊查询。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>platform</strong></li><p style="padding-left: 30px;">按照【<strong>镜像平台</strong>】进行过滤，如 CentOS，支持模糊匹配。可通过 <a href="https://cloud.tencent.com/document/api/213/15715" target="_blank">DescribeImages</a> 接口返回的<code> Platform </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>tag-key</strong></li><p style="padding-left: 30px;">按照【<strong>标签键</strong>】进行过滤。可通过 <a href="https://cloud.tencent.com/document/product/651/72275" target="_blank"> GetTags </a> 接口返回的<code> TagKey </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>tag-value</strong></li><p style="padding-left: 30px;">按照【<strong>标签值</strong>】进行过滤。可通过 <a href="https://cloud.tencent.com/document/product/651/72275" target="_blank"> GetTags </a> 接口返回的<code> TagValue </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>tag:tag-key</strong></li><p style="padding-left: 30px;">按照【<strong>标签键值对</strong>】进行过滤。tag-key使用具体的标签键进行替换。可通过 <a href="https://cloud.tencent.com/document/product/651/72275" target="_blank"> GetTags </a> 接口返回的<code> TagKey 和 TagValue </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>dedicated-cluster-id</strong></li><p style="padding-left: 30px;">按照【<strong>本地专用集群CDC ID</strong>】进行过滤。可通过 <a href="https://cloud.tencent.com/document/api/1346/73758" target="_blank"> DescribeDedicatedClusters </a> 接口返回的<code> DedicatedClusterSet </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>cdc-cache-status</strong></li><p style="padding-left: 30px;">按照【<strong>CDC镜像缓存状态</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：</p><p style="padding-left: 30px;">CACHED_ALL: 全部缓存状态</p><p style="padding-left: 30px;">CACHING: 缓存中</p><p style="padding-left: 30px;">CACHED: 已缓存</p><p style="padding-left: 30px;">CACHE_INVALID: 缓存失效</p><p style="padding-left: 30px;">CACHE_FAILED: 缓存失败</p>
 * @method void setFilters(array $Filters) 设置过滤条件，每次请求的`Filters`的上限为10，`Filters.Values`的上限为5。参数不可以同时指定`ImageIds`和`Filters`。详细的过滤条件如下：<li><strong>image-id</strong></li><p style="padding-left: 30px;">按照【<strong>镜像ID</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>image-type</strong></li><p style="padding-left: 30px;">按照【<strong>镜像类型</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：</p><p style="padding-left: 30px;">PRIVATE_IMAGE: 自定义镜像 (本账户创建的镜像)</p><p style="padding-left: 30px;">PUBLIC_IMAGE: 公共镜像 (腾讯云官方镜像)</p><p style="padding-left: 30px;">SHARED_IMAGE: 共享镜像(其他账户共享给本账户的镜像)</p><li><strong>image-name</strong></li><p style="padding-left: 30px;">按照【<strong>镜像名称</strong>】进行过滤。支持模糊查询。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>platform</strong></li><p style="padding-left: 30px;">按照【<strong>镜像平台</strong>】进行过滤，如 CentOS，支持模糊匹配。可通过 <a href="https://cloud.tencent.com/document/api/213/15715" target="_blank">DescribeImages</a> 接口返回的<code> Platform </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>tag-key</strong></li><p style="padding-left: 30px;">按照【<strong>标签键</strong>】进行过滤。可通过 <a href="https://cloud.tencent.com/document/product/651/72275" target="_blank"> GetTags </a> 接口返回的<code> TagKey </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>tag-value</strong></li><p style="padding-left: 30px;">按照【<strong>标签值</strong>】进行过滤。可通过 <a href="https://cloud.tencent.com/document/product/651/72275" target="_blank"> GetTags </a> 接口返回的<code> TagValue </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>tag:tag-key</strong></li><p style="padding-left: 30px;">按照【<strong>标签键值对</strong>】进行过滤。tag-key使用具体的标签键进行替换。可通过 <a href="https://cloud.tencent.com/document/product/651/72275" target="_blank"> GetTags </a> 接口返回的<code> TagKey 和 TagValue </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>dedicated-cluster-id</strong></li><p style="padding-left: 30px;">按照【<strong>本地专用集群CDC ID</strong>】进行过滤。可通过 <a href="https://cloud.tencent.com/document/api/1346/73758" target="_blank"> DescribeDedicatedClusters </a> 接口返回的<code> DedicatedClusterSet </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>cdc-cache-status</strong></li><p style="padding-left: 30px;">按照【<strong>CDC镜像缓存状态</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：</p><p style="padding-left: 30px;">CACHED_ALL: 全部缓存状态</p><p style="padding-left: 30px;">CACHING: 缓存中</p><p style="padding-left: 30px;">CACHED: 已缓存</p><p style="padding-left: 30px;">CACHE_INVALID: 缓存失效</p><p style="padding-left: 30px;">CACHE_FAILED: 缓存失败</p>
 * @method integer getOffset() 获取偏移量，默认为0。关于Offset详见[API简介](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于Offset详见[API简介](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)。
 * @method integer getLimit() 获取数量限制，默认为20，最大值为100。关于Limit详见[API简介](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)。
 * @method void setLimit(integer $Limit) 设置数量限制，默认为20，最大值为100。关于Limit详见[API简介](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)。
 * @method string getInstanceType() 获取实例类型，如 `SA5.MEDIUM2`。可通过 [DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/product/213/15749) 接口返回的 `InstanceType` 获取。
 * @method void setInstanceType(string $InstanceType) 设置实例类型，如 `SA5.MEDIUM2`。可通过 [DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/product/213/15749) 接口返回的 `InstanceType` 获取。
 */
class DescribeImagesRequest extends AbstractModel
{
    /**
     * @var array 镜像ID列表 。镜像ID如：`img-gvbnzy6f`。array型参数的格式可以参考[API简介](https://cloud.tencent.com/document/api/213/15688)。镜像ID可以通过如下方式获取：<br><li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取。</li><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。</li>
     */
    public $ImageIds;

    /**
     * @var array 过滤条件，每次请求的`Filters`的上限为10，`Filters.Values`的上限为5。参数不可以同时指定`ImageIds`和`Filters`。详细的过滤条件如下：<li><strong>image-id</strong></li><p style="padding-left: 30px;">按照【<strong>镜像ID</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>image-type</strong></li><p style="padding-left: 30px;">按照【<strong>镜像类型</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：</p><p style="padding-left: 30px;">PRIVATE_IMAGE: 自定义镜像 (本账户创建的镜像)</p><p style="padding-left: 30px;">PUBLIC_IMAGE: 公共镜像 (腾讯云官方镜像)</p><p style="padding-left: 30px;">SHARED_IMAGE: 共享镜像(其他账户共享给本账户的镜像)</p><li><strong>image-name</strong></li><p style="padding-left: 30px;">按照【<strong>镜像名称</strong>】进行过滤。支持模糊查询。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>platform</strong></li><p style="padding-left: 30px;">按照【<strong>镜像平台</strong>】进行过滤，如 CentOS，支持模糊匹配。可通过 <a href="https://cloud.tencent.com/document/api/213/15715" target="_blank">DescribeImages</a> 接口返回的<code> Platform </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>tag-key</strong></li><p style="padding-left: 30px;">按照【<strong>标签键</strong>】进行过滤。可通过 <a href="https://cloud.tencent.com/document/product/651/72275" target="_blank"> GetTags </a> 接口返回的<code> TagKey </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>tag-value</strong></li><p style="padding-left: 30px;">按照【<strong>标签值</strong>】进行过滤。可通过 <a href="https://cloud.tencent.com/document/product/651/72275" target="_blank"> GetTags </a> 接口返回的<code> TagValue </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>tag:tag-key</strong></li><p style="padding-left: 30px;">按照【<strong>标签键值对</strong>】进行过滤。tag-key使用具体的标签键进行替换。可通过 <a href="https://cloud.tencent.com/document/product/651/72275" target="_blank"> GetTags </a> 接口返回的<code> TagKey 和 TagValue </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>dedicated-cluster-id</strong></li><p style="padding-left: 30px;">按照【<strong>本地专用集群CDC ID</strong>】进行过滤。可通过 <a href="https://cloud.tencent.com/document/api/1346/73758" target="_blank"> DescribeDedicatedClusters </a> 接口返回的<code> DedicatedClusterSet </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>cdc-cache-status</strong></li><p style="padding-left: 30px;">按照【<strong>CDC镜像缓存状态</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：</p><p style="padding-left: 30px;">CACHED_ALL: 全部缓存状态</p><p style="padding-left: 30px;">CACHING: 缓存中</p><p style="padding-left: 30px;">CACHED: 已缓存</p><p style="padding-left: 30px;">CACHE_INVALID: 缓存失效</p><p style="padding-left: 30px;">CACHE_FAILED: 缓存失败</p>
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。关于Offset详见[API简介](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)。
     */
    public $Offset;

    /**
     * @var integer 数量限制，默认为20，最大值为100。关于Limit详见[API简介](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)。
     */
    public $Limit;

    /**
     * @var string 实例类型，如 `SA5.MEDIUM2`。可通过 [DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/product/213/15749) 接口返回的 `InstanceType` 获取。
     */
    public $InstanceType;

    /**
     * @param array $ImageIds 镜像ID列表 。镜像ID如：`img-gvbnzy6f`。array型参数的格式可以参考[API简介](https://cloud.tencent.com/document/api/213/15688)。镜像ID可以通过如下方式获取：<br><li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取。</li><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。</li>
     * @param array $Filters 过滤条件，每次请求的`Filters`的上限为10，`Filters.Values`的上限为5。参数不可以同时指定`ImageIds`和`Filters`。详细的过滤条件如下：<li><strong>image-id</strong></li><p style="padding-left: 30px;">按照【<strong>镜像ID</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>image-type</strong></li><p style="padding-left: 30px;">按照【<strong>镜像类型</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：</p><p style="padding-left: 30px;">PRIVATE_IMAGE: 自定义镜像 (本账户创建的镜像)</p><p style="padding-left: 30px;">PUBLIC_IMAGE: 公共镜像 (腾讯云官方镜像)</p><p style="padding-left: 30px;">SHARED_IMAGE: 共享镜像(其他账户共享给本账户的镜像)</p><li><strong>image-name</strong></li><p style="padding-left: 30px;">按照【<strong>镜像名称</strong>】进行过滤。支持模糊查询。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>platform</strong></li><p style="padding-left: 30px;">按照【<strong>镜像平台</strong>】进行过滤，如 CentOS，支持模糊匹配。可通过 <a href="https://cloud.tencent.com/document/api/213/15715" target="_blank">DescribeImages</a> 接口返回的<code> Platform </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>tag-key</strong></li><p style="padding-left: 30px;">按照【<strong>标签键</strong>】进行过滤。可通过 <a href="https://cloud.tencent.com/document/product/651/72275" target="_blank"> GetTags </a> 接口返回的<code> TagKey </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>tag-value</strong></li><p style="padding-left: 30px;">按照【<strong>标签值</strong>】进行过滤。可通过 <a href="https://cloud.tencent.com/document/product/651/72275" target="_blank"> GetTags </a> 接口返回的<code> TagValue </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>tag:tag-key</strong></li><p style="padding-left: 30px;">按照【<strong>标签键值对</strong>】进行过滤。tag-key使用具体的标签键进行替换。可通过 <a href="https://cloud.tencent.com/document/product/651/72275" target="_blank"> GetTags </a> 接口返回的<code> TagKey 和 TagValue </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>dedicated-cluster-id</strong></li><p style="padding-left: 30px;">按照【<strong>本地专用集群CDC ID</strong>】进行过滤。可通过 <a href="https://cloud.tencent.com/document/api/1346/73758" target="_blank"> DescribeDedicatedClusters </a> 接口返回的<code> DedicatedClusterSet </code>获取。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><li><strong>cdc-cache-status</strong></li><p style="padding-left: 30px;">按照【<strong>CDC镜像缓存状态</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：</p><p style="padding-left: 30px;">CACHED_ALL: 全部缓存状态</p><p style="padding-left: 30px;">CACHING: 缓存中</p><p style="padding-left: 30px;">CACHED: 已缓存</p><p style="padding-left: 30px;">CACHE_INVALID: 缓存失效</p><p style="padding-left: 30px;">CACHE_FAILED: 缓存失败</p>
     * @param integer $Offset 偏移量，默认为0。关于Offset详见[API简介](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)。
     * @param integer $Limit 数量限制，默认为20，最大值为100。关于Limit详见[API简介](/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)。
     * @param string $InstanceType 实例类型，如 `SA5.MEDIUM2`。可通过 [DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/product/213/15749) 接口返回的 `InstanceType` 获取。
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
        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
