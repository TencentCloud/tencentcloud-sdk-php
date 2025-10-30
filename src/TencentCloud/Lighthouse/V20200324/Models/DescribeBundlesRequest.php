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
 * DescribeBundles请求参数结构体
 *
 * @method array getBundleIds() 获取套餐 ID 列表。每次请求批量套餐的上限为 100。可通过[DescribeBundles](https://cloud.tencent.com/document/product/1207/47575)接口返回值中的BundleId获取。
 * @method void setBundleIds(array $BundleIds) 设置套餐 ID 列表。每次请求批量套餐的上限为 100。可通过[DescribeBundles](https://cloud.tencent.com/document/product/1207/47575)接口返回值中的BundleId获取。
 * @method integer getOffset() 获取偏移量，默认为 0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
 * @method array getFilters() 获取过滤器列表。
<li>bundle-id</li>按照【套餐 ID】进行过滤。
类型：String
必选：否
<li>support-platform-type</li>按照【系统类型】进行过滤。
取值： LINUX_UNIX(Linux/Unix系统) ;WINDOWS(Windows 系统)
类型：String
必选：否
<li>bundle-type</li>按照 【套餐类型进行过滤】。
取值：GENERAL_BUNDLE (通用型套餐); STORAGE_BUNDLE(存储型套餐);ENTERPRISE_BUNDLE( 企业型套餐);EXCLUSIVE_BUNDLE(专属型套餐);BEFAST_BUNDLE(蜂驰型套餐);STARTER_BUNDLE(入门型套餐);CAREFREE_BUNDLE(无忧型套餐);RAZOR_SPEED_BUNDLE(锐驰型套餐)
类型：String
必选：否
<li>bundle-state</li>按照【套餐状态】进行过滤。
取值: ONLINE(在线); OFFLINE(下线);
类型：String
必选：否
每次请求的 Filters 的上限为 10，Filter.Values 的上限为 5。参数不支持同时指定 BundleIds 和 Filters。
 * @method void setFilters(array $Filters) 设置过滤器列表。
<li>bundle-id</li>按照【套餐 ID】进行过滤。
类型：String
必选：否
<li>support-platform-type</li>按照【系统类型】进行过滤。
取值： LINUX_UNIX(Linux/Unix系统) ;WINDOWS(Windows 系统)
类型：String
必选：否
<li>bundle-type</li>按照 【套餐类型进行过滤】。
取值：GENERAL_BUNDLE (通用型套餐); STORAGE_BUNDLE(存储型套餐);ENTERPRISE_BUNDLE( 企业型套餐);EXCLUSIVE_BUNDLE(专属型套餐);BEFAST_BUNDLE(蜂驰型套餐);STARTER_BUNDLE(入门型套餐);CAREFREE_BUNDLE(无忧型套餐);RAZOR_SPEED_BUNDLE(锐驰型套餐)
类型：String
必选：否
<li>bundle-state</li>按照【套餐状态】进行过滤。
取值: ONLINE(在线); OFFLINE(下线);
类型：String
必选：否
每次请求的 Filters 的上限为 10，Filter.Values 的上限为 5。参数不支持同时指定 BundleIds 和 Filters。
 * @method array getZones() 获取可用区列表。默认为全部可用区。
<li>可用区可通过接口 [DescribeZones](https://cloud.tencent.com/document/product/1207/57513) 查询</li>
 * @method void setZones(array $Zones) 设置可用区列表。默认为全部可用区。
<li>可用区可通过接口 [DescribeZones](https://cloud.tencent.com/document/product/1207/57513) 查询</li>
 */
class DescribeBundlesRequest extends AbstractModel
{
    /**
     * @var array 套餐 ID 列表。每次请求批量套餐的上限为 100。可通过[DescribeBundles](https://cloud.tencent.com/document/product/1207/47575)接口返回值中的BundleId获取。
     */
    public $BundleIds;

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
<li>bundle-id</li>按照【套餐 ID】进行过滤。
类型：String
必选：否
<li>support-platform-type</li>按照【系统类型】进行过滤。
取值： LINUX_UNIX(Linux/Unix系统) ;WINDOWS(Windows 系统)
类型：String
必选：否
<li>bundle-type</li>按照 【套餐类型进行过滤】。
取值：GENERAL_BUNDLE (通用型套餐); STORAGE_BUNDLE(存储型套餐);ENTERPRISE_BUNDLE( 企业型套餐);EXCLUSIVE_BUNDLE(专属型套餐);BEFAST_BUNDLE(蜂驰型套餐);STARTER_BUNDLE(入门型套餐);CAREFREE_BUNDLE(无忧型套餐);RAZOR_SPEED_BUNDLE(锐驰型套餐)
类型：String
必选：否
<li>bundle-state</li>按照【套餐状态】进行过滤。
取值: ONLINE(在线); OFFLINE(下线);
类型：String
必选：否
每次请求的 Filters 的上限为 10，Filter.Values 的上限为 5。参数不支持同时指定 BundleIds 和 Filters。
     */
    public $Filters;

    /**
     * @var array 可用区列表。默认为全部可用区。
<li>可用区可通过接口 [DescribeZones](https://cloud.tencent.com/document/product/1207/57513) 查询</li>
     */
    public $Zones;

    /**
     * @param array $BundleIds 套餐 ID 列表。每次请求批量套餐的上限为 100。可通过[DescribeBundles](https://cloud.tencent.com/document/product/1207/47575)接口返回值中的BundleId获取。
     * @param integer $Offset 偏移量，默认为 0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
     * @param array $Filters 过滤器列表。
<li>bundle-id</li>按照【套餐 ID】进行过滤。
类型：String
必选：否
<li>support-platform-type</li>按照【系统类型】进行过滤。
取值： LINUX_UNIX(Linux/Unix系统) ;WINDOWS(Windows 系统)
类型：String
必选：否
<li>bundle-type</li>按照 【套餐类型进行过滤】。
取值：GENERAL_BUNDLE (通用型套餐); STORAGE_BUNDLE(存储型套餐);ENTERPRISE_BUNDLE( 企业型套餐);EXCLUSIVE_BUNDLE(专属型套餐);BEFAST_BUNDLE(蜂驰型套餐);STARTER_BUNDLE(入门型套餐);CAREFREE_BUNDLE(无忧型套餐);RAZOR_SPEED_BUNDLE(锐驰型套餐)
类型：String
必选：否
<li>bundle-state</li>按照【套餐状态】进行过滤。
取值: ONLINE(在线); OFFLINE(下线);
类型：String
必选：否
每次请求的 Filters 的上限为 10，Filter.Values 的上限为 5。参数不支持同时指定 BundleIds 和 Filters。
     * @param array $Zones 可用区列表。默认为全部可用区。
<li>可用区可通过接口 [DescribeZones](https://cloud.tencent.com/document/product/1207/57513) 查询</li>
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
        if (array_key_exists("BundleIds",$param) and $param["BundleIds"] !== null) {
            $this->BundleIds = $param["BundleIds"];
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

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }
    }
}
