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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModels请求参数结构体
 *
 * @method array getModelIds() 获取模型id
 * @method void setModelIds(array $ModelIds) 设置模型id
 * @method array getFilters() 获取过滤器。Name的可选值有scene-id
 * @method void setFilters(array $Filters) 设置过滤器。Name的可选值有scene-id
 * @method integer getOffset() 获取偏移量，不得小于0，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，不得小于0，默认为0
 * @method integer getLimit() 获取返回量，不得大于100，默认为20
 * @method void setLimit(integer $Limit) 设置返回量，不得大于100，默认为20
 */
class DescribeModelsRequest extends AbstractModel
{
    /**
     * @var array 模型id
     */
    public $ModelIds;

    /**
     * @var array 过滤器。Name的可选值有scene-id
     */
    public $Filters;

    /**
     * @var integer 偏移量，不得小于0，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回量，不得大于100，默认为20
     */
    public $Limit;

    /**
     * @param array $ModelIds 模型id
     * @param array $Filters 过滤器。Name的可选值有scene-id
     * @param integer $Offset 偏移量，不得小于0，默认为0
     * @param integer $Limit 返回量，不得大于100，默认为20
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
        if (array_key_exists("ModelIds",$param) and $param["ModelIds"] !== null) {
            $this->ModelIds = $param["ModelIds"];
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
