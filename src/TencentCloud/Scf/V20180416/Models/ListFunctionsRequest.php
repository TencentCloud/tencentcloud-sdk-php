<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getOrder() 获取以升序还是降序的方式返回结果，可选值 ASC 和 DESC
 * @method void setOrder(string $Order) 设置以升序还是降序的方式返回结果，可选值 ASC 和 DESC
 * @method string getOrderby() 获取根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime, FunctionName
 * @method void setOrderby(string $Orderby) 设置根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime, FunctionName
 * @method integer getOffset() 获取数据偏移量，默认值为 0
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认值为 0
 * @method integer getLimit() 获取返回数据长度，默认值为 20
 * @method void setLimit(integer $Limit) 设置返回数据长度，默认值为 20
 * @method string getSearchKey() 获取支持FunctionName模糊匹配
 * @method void setSearchKey(string $SearchKey) 设置支持FunctionName模糊匹配
 */

/**
 *ListFunctions请求参数结构体
 */
class ListFunctionsRequest extends AbstractModel
{
    /**
     * @var string 以升序还是降序的方式返回结果，可选值 ASC 和 DESC
     */
    public $Order;

    /**
     * @var string 根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime, FunctionName
     */
    public $Orderby;

    /**
     * @var integer 数据偏移量，默认值为 0
     */
    public $Offset;

    /**
     * @var integer 返回数据长度，默认值为 20
     */
    public $Limit;

    /**
     * @var string 支持FunctionName模糊匹配
     */
    public $SearchKey;
    /**
     * @param string $Order 以升序还是降序的方式返回结果，可选值 ASC 和 DESC
     * @param string $Orderby 根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime, FunctionName
     * @param integer $Offset 数据偏移量，默认值为 0
     * @param integer $Limit 返回数据长度，默认值为 20
     * @param string $SearchKey 支持FunctionName模糊匹配
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Orderby",$param) and $param["Orderby"] !== null) {
            $this->Orderby = $param["Orderby"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
