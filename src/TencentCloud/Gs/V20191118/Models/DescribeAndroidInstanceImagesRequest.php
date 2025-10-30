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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAndroidInstanceImages请求参数结构体
 *
 * @method array getAndroidInstanceImageIds() 获取镜像 ID 列表
 * @method void setAndroidInstanceImageIds(array $AndroidInstanceImageIds) 设置镜像 ID 列表
 * @method array getAndroidInstanceImageZones() 获取镜像可用区列表
 * @method void setAndroidInstanceImageZones(array $AndroidInstanceImageZones) 设置镜像可用区列表
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取限制量，默认为20，最大值为100
 * @method void setLimit(integer $Limit) 设置限制量，默认为20，最大值为100
 * @method array getFilters() 获取字段过滤器。Filter 的 Name 有以下值：
ImageName：镜像名称
ImageState：镜像状态
AndroidVersion：安卓版本
 * @method void setFilters(array $Filters) 设置字段过滤器。Filter 的 Name 有以下值：
ImageName：镜像名称
ImageState：镜像状态
AndroidVersion：安卓版本
 */
class DescribeAndroidInstanceImagesRequest extends AbstractModel
{
    /**
     * @var array 镜像 ID 列表
     */
    public $AndroidInstanceImageIds;

    /**
     * @var array 镜像可用区列表
     */
    public $AndroidInstanceImageZones;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 限制量，默认为20，最大值为100
     */
    public $Limit;

    /**
     * @var array 字段过滤器。Filter 的 Name 有以下值：
ImageName：镜像名称
ImageState：镜像状态
AndroidVersion：安卓版本
     */
    public $Filters;

    /**
     * @param array $AndroidInstanceImageIds 镜像 ID 列表
     * @param array $AndroidInstanceImageZones 镜像可用区列表
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 限制量，默认为20，最大值为100
     * @param array $Filters 字段过滤器。Filter 的 Name 有以下值：
ImageName：镜像名称
ImageState：镜像状态
AndroidVersion：安卓版本
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
        if (array_key_exists("AndroidInstanceImageIds",$param) and $param["AndroidInstanceImageIds"] !== null) {
            $this->AndroidInstanceImageIds = $param["AndroidInstanceImageIds"];
        }

        if (array_key_exists("AndroidInstanceImageZones",$param) and $param["AndroidInstanceImageZones"] !== null) {
            $this->AndroidInstanceImageZones = $param["AndroidInstanceImageZones"];
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
