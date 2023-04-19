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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlertRecordHistory请求参数结构体
 *
 * @method integer getFrom() 获取查询时间范围启始时间，毫秒级unix时间戳
 * @method void setFrom(integer $From) 设置查询时间范围启始时间，毫秒级unix时间戳
 * @method integer getTo() 获取查询时间范围结束时间，毫秒级unix时间戳
 * @method void setTo(integer $To) 设置查询时间范围结束时间，毫秒级unix时间戳
 * @method integer getOffset() 获取分页的偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为0。
 * @method integer getLimit() 获取分页单页限制数目，最大值100。
 * @method void setLimit(integer $Limit) 设置分页单页限制数目，最大值100。
 * @method array getFilters() 获取- alertId：按照告警策略ID进行过滤。类型：String 必选：否
- topicId：按照监控对象ID进行过滤。类型：String 必选：否
- status：按照告警状态进行过滤。类型：String 必选：否，0代表未恢复，1代表已恢复，2代表已失效
- alarmLevel：按照告警等级进行过滤。类型：String 必选：否，0代表警告，1代表提醒，2代表紧急

每次请求的Filters的上限为10，Filter.Values的上限为100。
 * @method void setFilters(array $Filters) 设置- alertId：按照告警策略ID进行过滤。类型：String 必选：否
- topicId：按照监控对象ID进行过滤。类型：String 必选：否
- status：按照告警状态进行过滤。类型：String 必选：否，0代表未恢复，1代表已恢复，2代表已失效
- alarmLevel：按照告警等级进行过滤。类型：String 必选：否，0代表警告，1代表提醒，2代表紧急

每次请求的Filters的上限为10，Filter.Values的上限为100。
 */
class DescribeAlertRecordHistoryRequest extends AbstractModel
{
    /**
     * @var integer 查询时间范围启始时间，毫秒级unix时间戳
     */
    public $From;

    /**
     * @var integer 查询时间范围结束时间，毫秒级unix时间戳
     */
    public $To;

    /**
     * @var integer 分页的偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 分页单页限制数目，最大值100。
     */
    public $Limit;

    /**
     * @var array - alertId：按照告警策略ID进行过滤。类型：String 必选：否
- topicId：按照监控对象ID进行过滤。类型：String 必选：否
- status：按照告警状态进行过滤。类型：String 必选：否，0代表未恢复，1代表已恢复，2代表已失效
- alarmLevel：按照告警等级进行过滤。类型：String 必选：否，0代表警告，1代表提醒，2代表紧急

每次请求的Filters的上限为10，Filter.Values的上限为100。
     */
    public $Filters;

    /**
     * @param integer $From 查询时间范围启始时间，毫秒级unix时间戳
     * @param integer $To 查询时间范围结束时间，毫秒级unix时间戳
     * @param integer $Offset 分页的偏移量，默认值为0。
     * @param integer $Limit 分页单页限制数目，最大值100。
     * @param array $Filters - alertId：按照告警策略ID进行过滤。类型：String 必选：否
- topicId：按照监控对象ID进行过滤。类型：String 必选：否
- status：按照告警状态进行过滤。类型：String 必选：否，0代表未恢复，1代表已恢复，2代表已失效
- alarmLevel：按照告警等级进行过滤。类型：String 必选：否，0代表警告，1代表提醒，2代表紧急

每次请求的Filters的上限为10，Filter.Values的上限为100。
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
        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
