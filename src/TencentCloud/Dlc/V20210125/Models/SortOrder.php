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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合并策略sort类型的规则定义
 *
 * @method string getColumn() 获取sort的数据表列名称
 * @method void setColumn(string $Column) 设置sort的数据表列名称
 * @method string getSortDirection() 获取按照升序或者降序进行排序
 * @method void setSortDirection(string $SortDirection) 设置按照升序或者降序进行排序
 * @method string getNullOrder() 获取null值放在开头或者末尾
 * @method void setNullOrder(string $NullOrder) 设置null值放在开头或者末尾
 */
class SortOrder extends AbstractModel
{
    /**
     * @var string sort的数据表列名称
     */
    public $Column;

    /**
     * @var string 按照升序或者降序进行排序
     */
    public $SortDirection;

    /**
     * @var string null值放在开头或者末尾
     */
    public $NullOrder;

    /**
     * @param string $Column sort的数据表列名称
     * @param string $SortDirection 按照升序或者降序进行排序
     * @param string $NullOrder null值放在开头或者末尾
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
        if (array_key_exists("Column",$param) and $param["Column"] !== null) {
            $this->Column = $param["Column"];
        }

        if (array_key_exists("SortDirection",$param) and $param["SortDirection"] !== null) {
            $this->SortDirection = $param["SortDirection"];
        }

        if (array_key_exists("NullOrder",$param) and $param["NullOrder"] !== null) {
            $this->NullOrder = $param["NullOrder"];
        }
    }
}
