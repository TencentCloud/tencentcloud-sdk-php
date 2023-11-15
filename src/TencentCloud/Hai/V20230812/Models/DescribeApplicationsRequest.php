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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplications请求参数结构体
 *
 * @method array getApplicationIds() 获取应用id列表
 * @method void setApplicationIds(array $ApplicationIds) 设置应用id列表
 * @method array getFilters() 获取过滤器，跟ApplicationIds不能共用，支持的filter主要有：
application-id，精确匹配
scene-id，精确匹配
application-name，模糊匹配
 * @method void setFilters(array $Filters) 设置过滤器，跟ApplicationIds不能共用，支持的filter主要有：
application-id，精确匹配
scene-id，精确匹配
application-name，模糊匹配
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回量，默认为20
MC：1000
用户：100

 * @method void setLimit(integer $Limit) 设置返回量，默认为20
MC：1000
用户：100
 */
class DescribeApplicationsRequest extends AbstractModel
{
    /**
     * @var array 应用id列表
     */
    public $ApplicationIds;

    /**
     * @var array 过滤器，跟ApplicationIds不能共用，支持的filter主要有：
application-id，精确匹配
scene-id，精确匹配
application-name，模糊匹配
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回量，默认为20
MC：1000
用户：100

     */
    public $Limit;

    /**
     * @param array $ApplicationIds 应用id列表
     * @param array $Filters 过滤器，跟ApplicationIds不能共用，支持的filter主要有：
application-id，精确匹配
scene-id，精确匹配
application-name，模糊匹配
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回量，默认为20
MC：1000
用户：100
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
        if (array_key_exists("ApplicationIds",$param) and $param["ApplicationIds"] !== null) {
            $this->ApplicationIds = $param["ApplicationIds"];
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
    }
}
