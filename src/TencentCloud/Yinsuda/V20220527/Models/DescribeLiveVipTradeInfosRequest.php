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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveVipTradeInfos请求参数结构体
 *
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getStartTime() 获取直播会员充值下单起始时间，格式为 ISO。默认为当前时间前一天。
 * @method void setStartTime(string $StartTime) 设置直播会员充值下单起始时间，格式为 ISO。默认为当前时间前一天。
 * @method string getEndTime() 获取直播会员充值下单截止时间，格式为 ISO。默认为当前时间。 EndTime不能小于StartTime
 * @method void setEndTime(string $EndTime) 设置直播会员充值下单截止时间，格式为 ISO。默认为当前时间。 EndTime不能小于StartTime
 * @method array getTradeSerialNos() 获取交易流水号集合，匹配集合指定所有流水号 。
<li>数组长度限制：10。</li>
 * @method void setTradeSerialNos(array $TradeSerialNos) 设置交易流水号集合，匹配集合指定所有流水号 。
<li>数组长度限制：10。</li>
 * @method array getUserIds() 获取用户标识集合，匹配集合指定所有用户标识 。
<li>数组长度限制：10。</li>
 * @method void setUserIds(array $UserIds) 设置用户标识集合，匹配集合指定所有用户标识 。
<li>数组长度限制：10。</li>
 * @method integer getOffset() 获取分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
 * @method void setOffset(integer $Offset) 设置分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
 * @method integer getLimit() 获取分页返回的记录条数，默认值：20，最大值：50。
 * @method void setLimit(integer $Limit) 设置分页返回的记录条数，默认值：20，最大值：50。
 */
class DescribeLiveVipTradeInfosRequest extends AbstractModel
{
    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 直播会员充值下单起始时间，格式为 ISO。默认为当前时间前一天。
     */
    public $StartTime;

    /**
     * @var string 直播会员充值下单截止时间，格式为 ISO。默认为当前时间。 EndTime不能小于StartTime
     */
    public $EndTime;

    /**
     * @var array 交易流水号集合，匹配集合指定所有流水号 。
<li>数组长度限制：10。</li>
     */
    public $TradeSerialNos;

    /**
     * @var array 用户标识集合，匹配集合指定所有用户标识 。
<li>数组长度限制：10。</li>
     */
    public $UserIds;

    /**
     * @var integer 分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
     */
    public $Offset;

    /**
     * @var integer 分页返回的记录条数，默认值：20，最大值：50。
     */
    public $Limit;

    /**
     * @param string $AppName 应用名称。
     * @param string $StartTime 直播会员充值下单起始时间，格式为 ISO。默认为当前时间前一天。
     * @param string $EndTime 直播会员充值下单截止时间，格式为 ISO。默认为当前时间。 EndTime不能小于StartTime
     * @param array $TradeSerialNos 交易流水号集合，匹配集合指定所有流水号 。
<li>数组长度限制：10。</li>
     * @param array $UserIds 用户标识集合，匹配集合指定所有用户标识 。
<li>数组长度限制：10。</li>
     * @param integer $Offset 分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
     * @param integer $Limit 分页返回的记录条数，默认值：20，最大值：50。
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TradeSerialNos",$param) and $param["TradeSerialNos"] !== null) {
            $this->TradeSerialNos = $param["TradeSerialNos"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
