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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBuildInImages请求参数结构体
 *
 * @method array getImageFilters() 获取镜像过滤器
 * @method void setImageFilters(array $ImageFilters) 设置镜像过滤器
 */
class DescribeBuildInImagesRequest extends AbstractModel
{
    /**
     * @var array 镜像过滤器
     */
    public $ImageFilters;

    /**
     * @param array $ImageFilters 镜像过滤器
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
        if (array_key_exists("ImageFilters",$param) and $param["ImageFilters"] !== null) {
            $this->ImageFilters = [];
            foreach ($param["ImageFilters"] as $key => $value){
                $obj = new ImageFIlter();
                $obj->deserialize($value);
                array_push($this->ImageFilters, $obj);
            }
        }
    }
}
