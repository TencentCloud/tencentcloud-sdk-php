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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePulsarProInstances请求参数结构体
 *
 * @method array getFilters() 获取<p>查询条件过滤器</p>
 * @method void setFilters(array $Filters) 设置<p>查询条件过滤器</p>
 * @method integer getLimit() 获取<p>查询数目上限，默认20</p>
 * @method void setLimit(integer $Limit) 设置<p>查询数目上限，默认20</p>
 * @method integer getOffset() 获取<p>查询起始位置</p>
 * @method void setOffset(integer $Offset) 设置<p>查询起始位置</p>
 */
class DescribePulsarProInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>查询条件过滤器</p>
     */
    public $Filters;

    /**
     * @var integer <p>查询数目上限，默认20</p>
     */
    public $Limit;

    /**
     * @var integer <p>查询起始位置</p>
     */
    public $Offset;

    /**
     * @param array $Filters <p>查询条件过滤器</p>
     * @param integer $Limit <p>查询数目上限，默认20</p>
     * @param integer $Offset <p>查询起始位置</p>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
