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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLLMKeywordLibrary请求参数结构体
 *
 * @method string getType() 获取词库类型筛选
枚举值：
custom：自定义黑库
builtin：内置词库
all：全部词库
white：自定义白库
 * @method void setType(string $Type) 设置词库类型筛选
枚举值：
custom：自定义黑库
builtin：内置词库
all：全部词库
white：自定义白库
 * @method integer getOffset() 获取分页偏移量
取值范围：[0, +∞)
默认值：0
 * @method void setOffset(integer $Offset) 设置分页偏移量
取值范围：[0, +∞)
默认值：0
 * @method integer getLimit() 获取每页返回数量
取值范围：[1, 1000]
默认值：10
 * @method void setLimit(integer $Limit) 设置每页返回数量
取值范围：[1, 1000]
默认值：10
 * @method string getBy() 获取排序字段
枚举值：
UpdateTime：按更新时间排序
CreateTime：按创建时间排序
Name：按名称排序
默认值：UpdateTime
 * @method void setBy(string $By) 设置排序字段
枚举值：
UpdateTime：按更新时间排序
CreateTime：按创建时间排序
Name：按名称排序
默认值：UpdateTime
 * @method string getOrder() 获取排序方向
枚举值：
ASC：升序
DESC：降序
默认值：DESC
 * @method void setOrder(string $Order) 设置排序方向
枚举值：
ASC：升序
DESC：降序
默认值：DESC
 */
class DescribeLLMKeywordLibraryRequest extends AbstractModel
{
    /**
     * @var string 词库类型筛选
枚举值：
custom：自定义黑库
builtin：内置词库
all：全部词库
white：自定义白库
     */
    public $Type;

    /**
     * @var integer 分页偏移量
取值范围：[0, +∞)
默认值：0
     */
    public $Offset;

    /**
     * @var integer 每页返回数量
取值范围：[1, 1000]
默认值：10
     */
    public $Limit;

    /**
     * @var string 排序字段
枚举值：
UpdateTime：按更新时间排序
CreateTime：按创建时间排序
Name：按名称排序
默认值：UpdateTime
     */
    public $By;

    /**
     * @var string 排序方向
枚举值：
ASC：升序
DESC：降序
默认值：DESC
     */
    public $Order;

    /**
     * @param string $Type 词库类型筛选
枚举值：
custom：自定义黑库
builtin：内置词库
all：全部词库
white：自定义白库
     * @param integer $Offset 分页偏移量
取值范围：[0, +∞)
默认值：0
     * @param integer $Limit 每页返回数量
取值范围：[1, 1000]
默认值：10
     * @param string $By 排序字段
枚举值：
UpdateTime：按更新时间排序
CreateTime：按创建时间排序
Name：按名称排序
默认值：UpdateTime
     * @param string $Order 排序方向
枚举值：
ASC：升序
DESC：降序
默认值：DESC
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
