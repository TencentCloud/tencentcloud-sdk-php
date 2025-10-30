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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImagesToShare请求参数结构体
 *
 * @method array getImageIds() 获取CVM镜像 ID 列表。可通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回值中的ImageId获取。
 * @method void setImageIds(array $ImageIds) 设置CVM镜像 ID 列表。可通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回值中的ImageId获取。
 * @method integer getOffset() 获取偏移量，默认为 0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
 * @method array getFilters() 获取过滤器列表。
<li>image-id</li>按照【CVM镜像ID】进行过滤。
类型：String
必选：否

<li>image-name</li>按照【CVM镜像名称】进行过滤。
类型：String
必选：否

<li>image-type</li>按照【CVM镜像类型】进行过滤。
类型：String
必选：否
取值范围：
PRIVATE_IMAGE: 私有镜像 (本账户创建的镜像)
PUBLIC_IMAGE: 公共镜像 (腾讯云官方镜像)
SHARED_IMAGE: 共享镜像(其他账户共享给本账户的镜像) 。

每次请求的 Filters 的上限为 10，Filter.Values 的上限为 5。
参数不可以同时指定ImageIds和Filters。
 * @method void setFilters(array $Filters) 设置过滤器列表。
<li>image-id</li>按照【CVM镜像ID】进行过滤。
类型：String
必选：否

<li>image-name</li>按照【CVM镜像名称】进行过滤。
类型：String
必选：否

<li>image-type</li>按照【CVM镜像类型】进行过滤。
类型：String
必选：否
取值范围：
PRIVATE_IMAGE: 私有镜像 (本账户创建的镜像)
PUBLIC_IMAGE: 公共镜像 (腾讯云官方镜像)
SHARED_IMAGE: 共享镜像(其他账户共享给本账户的镜像) 。

每次请求的 Filters 的上限为 10，Filter.Values 的上限为 5。
参数不可以同时指定ImageIds和Filters。
 */
class DescribeImagesToShareRequest extends AbstractModel
{
    /**
     * @var array CVM镜像 ID 列表。可通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回值中的ImageId获取。
     */
    public $ImageIds;

    /**
     * @var integer 偏移量，默认为 0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
     */
    public $Limit;

    /**
     * @var array 过滤器列表。
<li>image-id</li>按照【CVM镜像ID】进行过滤。
类型：String
必选：否

<li>image-name</li>按照【CVM镜像名称】进行过滤。
类型：String
必选：否

<li>image-type</li>按照【CVM镜像类型】进行过滤。
类型：String
必选：否
取值范围：
PRIVATE_IMAGE: 私有镜像 (本账户创建的镜像)
PUBLIC_IMAGE: 公共镜像 (腾讯云官方镜像)
SHARED_IMAGE: 共享镜像(其他账户共享给本账户的镜像) 。

每次请求的 Filters 的上限为 10，Filter.Values 的上限为 5。
参数不可以同时指定ImageIds和Filters。
     */
    public $Filters;

    /**
     * @param array $ImageIds CVM镜像 ID 列表。可通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回值中的ImageId获取。
     * @param integer $Offset 偏移量，默认为 0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
     * @param array $Filters 过滤器列表。
<li>image-id</li>按照【CVM镜像ID】进行过滤。
类型：String
必选：否

<li>image-name</li>按照【CVM镜像名称】进行过滤。
类型：String
必选：否

<li>image-type</li>按照【CVM镜像类型】进行过滤。
类型：String
必选：否
取值范围：
PRIVATE_IMAGE: 私有镜像 (本账户创建的镜像)
PUBLIC_IMAGE: 公共镜像 (腾讯云官方镜像)
SHARED_IMAGE: 共享镜像(其他账户共享给本账户的镜像) 。

每次请求的 Filters 的上限为 10，Filter.Values 的上限为 5。
参数不可以同时指定ImageIds和Filters。
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
