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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageCaches请求参数结构体
 *
 * @method array getImageCacheIds() 获取镜像缓存Id数组
 * @method void setImageCacheIds(array $ImageCacheIds) 设置镜像缓存Id数组
 * @method array getImageCacheNames() 获取镜像缓存名称数组
 * @method void setImageCacheNames(array $ImageCacheNames) 设置镜像缓存名称数组
 * @method integer getLimit() 获取限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过50
 * @method void setLimit(integer $Limit) 设置限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过50
 * @method integer getOffset() 获取偏移量,默认0
 * @method void setOffset(integer $Offset) 设置偏移量,默认0
 * @method array getFilters() 获取过滤条件，可选条件：
(1)实例名称
KeyName: image-cache-name
类型：String
 * @method void setFilters(array $Filters) 设置过滤条件，可选条件：
(1)实例名称
KeyName: image-cache-name
类型：String
 */
class DescribeImageCachesRequest extends AbstractModel
{
    /**
     * @var array 镜像缓存Id数组
     */
    public $ImageCacheIds;

    /**
     * @var array 镜像缓存名称数组
     */
    public $ImageCacheNames;

    /**
     * @var integer 限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过50
     */
    public $Limit;

    /**
     * @var integer 偏移量,默认0
     */
    public $Offset;

    /**
     * @var array 过滤条件，可选条件：
(1)实例名称
KeyName: image-cache-name
类型：String
     */
    public $Filters;

    /**
     * @param array $ImageCacheIds 镜像缓存Id数组
     * @param array $ImageCacheNames 镜像缓存名称数组
     * @param integer $Limit 限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过50
     * @param integer $Offset 偏移量,默认0
     * @param array $Filters 过滤条件，可选条件：
(1)实例名称
KeyName: image-cache-name
类型：String
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
        if (array_key_exists("ImageCacheIds",$param) and $param["ImageCacheIds"] !== null) {
            $this->ImageCacheIds = $param["ImageCacheIds"];
        }

        if (array_key_exists("ImageCacheNames",$param) and $param["ImageCacheNames"] !== null) {
            $this->ImageCacheNames = $param["ImageCacheNames"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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
