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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkOrderList请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。支持：service-type、order-type、order-status、order-id
 * @method void setFilters(array $Filters) 设置过滤条件。支持：service-type、order-type、order-status、order-id
 * @method array getSnList() 获取通过sn过滤工单，上限10个
 * @method void setSnList(array $SnList) 设置通过sn过滤工单，上限10个
 * @method integer getOffset() 获取起始
 * @method void setOffset(integer $Offset) 设置起始
 * @method integer getLimit() 获取长度
 * @method void setLimit(integer $Limit) 设置长度
 */
class DescribeWorkOrderListRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。支持：service-type、order-type、order-status、order-id
     */
    public $Filters;

    /**
     * @var array 通过sn过滤工单，上限10个
     */
    public $SnList;

    /**
     * @var integer 起始
     */
    public $Offset;

    /**
     * @var integer 长度
     */
    public $Limit;

    /**
     * @param array $Filters 过滤条件。支持：service-type、order-type、order-status、order-id
     * @param array $SnList 通过sn过滤工单，上限10个
     * @param integer $Offset 起始
     * @param integer $Limit 长度
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

        if (array_key_exists("SnList",$param) and $param["SnList"] !== null) {
            $this->SnList = $param["SnList"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
