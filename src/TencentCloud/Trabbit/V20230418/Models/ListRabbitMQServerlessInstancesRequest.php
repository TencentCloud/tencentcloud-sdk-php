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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRabbitMQServerlessInstances请求参数结构体
 *
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 * @method integer getLimit() 获取翻页大小
 * @method void setLimit(integer $Limit) 设置翻页大小
 * @method integer getOffset() 获取翻页的起始索引值
 * @method void setOffset(integer $Offset) 设置翻页的起始索引值
 */
class ListRabbitMQServerlessInstancesRequest extends AbstractModel
{
    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @var integer 翻页大小
     */
    public $Limit;

    /**
     * @var integer 翻页的起始索引值
     */
    public $Offset;

    /**
     * @param array $Filters 过滤条件
     * @param integer $Limit 翻页大小
     * @param integer $Offset 翻页的起始索引值
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
