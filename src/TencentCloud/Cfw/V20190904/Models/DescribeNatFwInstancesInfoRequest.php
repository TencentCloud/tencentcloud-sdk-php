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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatFwInstancesInfo请求参数结构体
 *
 * @method array getFilter() 获取获取实例列表过滤字段
 * @method void setFilter(array $Filter) 设置获取实例列表过滤字段
 * @method integer getOffset() 获取第几页
 * @method void setOffset(integer $Offset) 设置第几页
 * @method integer getLimit() 获取每页长度
 * @method void setLimit(integer $Limit) 设置每页长度
 */
class DescribeNatFwInstancesInfoRequest extends AbstractModel
{
    /**
     * @var array 获取实例列表过滤字段
     */
    public $Filter;

    /**
     * @var integer 第几页
     */
    public $Offset;

    /**
     * @var integer 每页长度
     */
    public $Limit;

    /**
     * @param array $Filter 获取实例列表过滤字段
     * @param integer $Offset 第几页
     * @param integer $Limit 每页长度
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new NatFwFilter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
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
