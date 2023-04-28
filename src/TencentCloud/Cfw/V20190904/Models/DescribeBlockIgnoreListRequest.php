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
 * DescribeBlockIgnoreList请求参数结构体
 *
 * @method integer getLimit() 获取单页数量
 * @method void setLimit(integer $Limit) 设置单页数量
 * @method integer getOffset() 获取页偏移量
 * @method void setOffset(integer $Offset) 设置页偏移量
 * @method string getDirection() 获取方向：1互联网入站，0互联网出站，3内网，空 全部方向
 * @method void setDirection(string $Direction) 设置方向：1互联网入站，0互联网出站，3内网，空 全部方向
 * @method integer getRuleType() 获取规则类型：1封禁，2放通
 * @method void setRuleType(integer $RuleType) 设置规则类型：1封禁，2放通
 * @method string getOrder() 获取排序类型：desc降序，asc正序
 * @method void setOrder(string $Order) 设置排序类型：desc降序，asc正序
 * @method string getBy() 获取排序列：EndTime结束时间，StartTime开始时间，MatchTimes命中次数
 * @method void setBy(string $By) 设置排序列：EndTime结束时间，StartTime开始时间，MatchTimes命中次数
 * @method string getSearchValue() 获取搜索参数，json格式字符串，空则传"{}"，域名：domain，危险等级：level，放通原因：ignore_reason，安全事件来源：rule_source，地理位置：address，模糊搜索：common
 * @method void setSearchValue(string $SearchValue) 设置搜索参数，json格式字符串，空则传"{}"，域名：domain，危险等级：level，放通原因：ignore_reason，安全事件来源：rule_source，地理位置：address，模糊搜索：common
 */
class DescribeBlockIgnoreListRequest extends AbstractModel
{
    /**
     * @var integer 单页数量
     */
    public $Limit;

    /**
     * @var integer 页偏移量
     */
    public $Offset;

    /**
     * @var string 方向：1互联网入站，0互联网出站，3内网，空 全部方向
     */
    public $Direction;

    /**
     * @var integer 规则类型：1封禁，2放通
     */
    public $RuleType;

    /**
     * @var string 排序类型：desc降序，asc正序
     */
    public $Order;

    /**
     * @var string 排序列：EndTime结束时间，StartTime开始时间，MatchTimes命中次数
     */
    public $By;

    /**
     * @var string 搜索参数，json格式字符串，空则传"{}"，域名：domain，危险等级：level，放通原因：ignore_reason，安全事件来源：rule_source，地理位置：address，模糊搜索：common
     */
    public $SearchValue;

    /**
     * @param integer $Limit 单页数量
     * @param integer $Offset 页偏移量
     * @param string $Direction 方向：1互联网入站，0互联网出站，3内网，空 全部方向
     * @param integer $RuleType 规则类型：1封禁，2放通
     * @param string $Order 排序类型：desc降序，asc正序
     * @param string $By 排序列：EndTime结束时间，StartTime开始时间，MatchTimes命中次数
     * @param string $SearchValue 搜索参数，json格式字符串，空则传"{}"，域名：domain，危险等级：level，放通原因：ignore_reason，安全事件来源：rule_source，地理位置：address，模糊搜索：common
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }
    }
}
