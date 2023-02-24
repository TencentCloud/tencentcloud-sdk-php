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
 * 通用的列表检索过滤选项
 *
 * @method string getName() 获取检索的键值
 * @method void setName(string $Name) 设置检索的键值
 * @method array getValues() 获取检索的值
 * @method void setValues(array $Values) 设置检索的值
 * @method integer getOperatorType() 获取枚举类型，代表name与values之间的匹配关系
enum FilterOperatorType {
    //INVALID
    FILTER_OPERATOR_TYPE_INVALID = 0;
    //等于
    FILTER_OPERATOR_TYPE_EQUAL = 1;
    //大于
    FILTER_OPERATOR_TYPE_GREATER = 2;
    //小于
    FILTER_OPERATOR_TYPE_LESS = 3;
    //大于等于
    FILTER_OPERATOR_TYPE_GREATER_EQ = 4;
    //小于等于
    FILTER_OPERATOR_TYPE_LESS_EQ = 5;
    //不等于
    FILTER_OPERATOR_TYPE_NO_EQ = 6;
    //in，数组中包含
    FILTER_OPERATOR_TYPE_IN = 7;
    //not in
    FILTER_OPERATOR_TYPE_NOT_IN = 8;
    //模糊匹配
    FILTER_OPERATOR_TYPE_FUZZINESS = 9;
    //存在
    FILTER_OPERATOR_TYPE_EXIST = 10;
    //不存在
    FILTER_OPERATOR_TYPE_NOT_EXIST = 11;
    //正则
    FILTER_OPERATOR_TYPE_REGULAR = 12;
}
 * @method void setOperatorType(integer $OperatorType) 设置枚举类型，代表name与values之间的匹配关系
enum FilterOperatorType {
    //INVALID
    FILTER_OPERATOR_TYPE_INVALID = 0;
    //等于
    FILTER_OPERATOR_TYPE_EQUAL = 1;
    //大于
    FILTER_OPERATOR_TYPE_GREATER = 2;
    //小于
    FILTER_OPERATOR_TYPE_LESS = 3;
    //大于等于
    FILTER_OPERATOR_TYPE_GREATER_EQ = 4;
    //小于等于
    FILTER_OPERATOR_TYPE_LESS_EQ = 5;
    //不等于
    FILTER_OPERATOR_TYPE_NO_EQ = 6;
    //in，数组中包含
    FILTER_OPERATOR_TYPE_IN = 7;
    //not in
    FILTER_OPERATOR_TYPE_NOT_IN = 8;
    //模糊匹配
    FILTER_OPERATOR_TYPE_FUZZINESS = 9;
    //存在
    FILTER_OPERATOR_TYPE_EXIST = 10;
    //不存在
    FILTER_OPERATOR_TYPE_NOT_EXIST = 11;
    //正则
    FILTER_OPERATOR_TYPE_REGULAR = 12;
}
 */
class CommonFilter extends AbstractModel
{
    /**
     * @var string 检索的键值
     */
    public $Name;

    /**
     * @var array 检索的值
     */
    public $Values;

    /**
     * @var integer 枚举类型，代表name与values之间的匹配关系
enum FilterOperatorType {
    //INVALID
    FILTER_OPERATOR_TYPE_INVALID = 0;
    //等于
    FILTER_OPERATOR_TYPE_EQUAL = 1;
    //大于
    FILTER_OPERATOR_TYPE_GREATER = 2;
    //小于
    FILTER_OPERATOR_TYPE_LESS = 3;
    //大于等于
    FILTER_OPERATOR_TYPE_GREATER_EQ = 4;
    //小于等于
    FILTER_OPERATOR_TYPE_LESS_EQ = 5;
    //不等于
    FILTER_OPERATOR_TYPE_NO_EQ = 6;
    //in，数组中包含
    FILTER_OPERATOR_TYPE_IN = 7;
    //not in
    FILTER_OPERATOR_TYPE_NOT_IN = 8;
    //模糊匹配
    FILTER_OPERATOR_TYPE_FUZZINESS = 9;
    //存在
    FILTER_OPERATOR_TYPE_EXIST = 10;
    //不存在
    FILTER_OPERATOR_TYPE_NOT_EXIST = 11;
    //正则
    FILTER_OPERATOR_TYPE_REGULAR = 12;
}
     */
    public $OperatorType;

    /**
     * @param string $Name 检索的键值
     * @param array $Values 检索的值
     * @param integer $OperatorType 枚举类型，代表name与values之间的匹配关系
enum FilterOperatorType {
    //INVALID
    FILTER_OPERATOR_TYPE_INVALID = 0;
    //等于
    FILTER_OPERATOR_TYPE_EQUAL = 1;
    //大于
    FILTER_OPERATOR_TYPE_GREATER = 2;
    //小于
    FILTER_OPERATOR_TYPE_LESS = 3;
    //大于等于
    FILTER_OPERATOR_TYPE_GREATER_EQ = 4;
    //小于等于
    FILTER_OPERATOR_TYPE_LESS_EQ = 5;
    //不等于
    FILTER_OPERATOR_TYPE_NO_EQ = 6;
    //in，数组中包含
    FILTER_OPERATOR_TYPE_IN = 7;
    //not in
    FILTER_OPERATOR_TYPE_NOT_IN = 8;
    //模糊匹配
    FILTER_OPERATOR_TYPE_FUZZINESS = 9;
    //存在
    FILTER_OPERATOR_TYPE_EXIST = 10;
    //不存在
    FILTER_OPERATOR_TYPE_NOT_EXIST = 11;
    //正则
    FILTER_OPERATOR_TYPE_REGULAR = 12;
}
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
