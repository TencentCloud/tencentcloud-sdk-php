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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询过滤条件
 *
 * @method string getName() 获取过滤字段
 * @method void setName(string $Name) 设置过滤字段
 * @method array getValues() 获取匹配的值
 * @method void setValues(array $Values) 设置匹配的值
 * @method integer getOperatorType() 获取操作类型：
1：等于 field = value
2：大于 field > value
3：小于 field < value
4：大于等于 field >= value
5：小于等于 field <= value
6：不等于 field <> value
7：IN field IN (value1, value2...)
8：NOT IN field NOT IN (value1, value2...)
9：模糊匹配 field LIKE value
13：非模糊匹配 field NOT LIKE value
14：按位与 field & value = value
15：between and field between value1 and value2
 * @method void setOperatorType(integer $OperatorType) 设置操作类型：
1：等于 field = value
2：大于 field > value
3：小于 field < value
4：大于等于 field >= value
5：小于等于 field <= value
6：不等于 field <> value
7：IN field IN (value1, value2...)
8：NOT IN field NOT IN (value1, value2...)
9：模糊匹配 field LIKE value
13：非模糊匹配 field NOT LIKE value
14：按位与 field & value = value
15：between and field between value1 and value2
 */
class OperatorFilter extends AbstractModel
{
    /**
     * @var string 过滤字段
     */
    public $Name;

    /**
     * @var array 匹配的值
     */
    public $Values;

    /**
     * @var integer 操作类型：
1：等于 field = value
2：大于 field > value
3：小于 field < value
4：大于等于 field >= value
5：小于等于 field <= value
6：不等于 field <> value
7：IN field IN (value1, value2...)
8：NOT IN field NOT IN (value1, value2...)
9：模糊匹配 field LIKE value
13：非模糊匹配 field NOT LIKE value
14：按位与 field & value = value
15：between and field between value1 and value2
     */
    public $OperatorType;

    /**
     * @param string $Name 过滤字段
     * @param array $Values 匹配的值
     * @param integer $OperatorType 操作类型：
1：等于 field = value
2：大于 field > value
3：小于 field < value
4：大于等于 field >= value
5：小于等于 field <= value
6：不等于 field <> value
7：IN field IN (value1, value2...)
8：NOT IN field NOT IN (value1, value2...)
9：模糊匹配 field LIKE value
13：非模糊匹配 field NOT LIKE value
14：按位与 field & value = value
15：between and field between value1 and value2
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("OperatorType",$param) and $param["OperatorType"] !== null) {
            $this->OperatorType = $param["OperatorType"];
        }
    }
}
