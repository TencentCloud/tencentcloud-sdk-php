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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmNotices请求参数结构体
 *
 * @method array getFilters() 获取name
按照【通知渠道组名称】进行过滤。
类型：String
示例："Filters":[{"Key":"name","Values":["test-notice"]}]
必选：否
alarmNoticeId
按照【通知渠道组ID】进行过滤。
类型：String
示例："Filters": [{Key: "alarmNoticeId", Values: ["notice-5281f1d2-6275-4e56-9ec3-a1eb19d8bc2f"]}]
必选：否
uid
按照【接收用户ID】进行过滤。
类型：String
示例："Filters": [{Key: "uid", Values: ["1137546"]}]
必选：否
groupId
按照【接收用户组ID】进行过滤。
类型：String
示例："Filters": [{Key: "groupId", Values: ["344098"]}]
必选：否

deliverFlag
按照【投递状态】进行过滤。
类型：String
必选：否
可选值： "1":未启用,  "2": 已启用, "3":投递异常
示例："Filters":[{"Key":"deliverFlag","Values":["2"]}]
每次请求的Filters的上限为10，Filter.Values的上限为5。
 * @method void setFilters(array $Filters) 设置name
按照【通知渠道组名称】进行过滤。
类型：String
示例："Filters":[{"Key":"name","Values":["test-notice"]}]
必选：否
alarmNoticeId
按照【通知渠道组ID】进行过滤。
类型：String
示例："Filters": [{Key: "alarmNoticeId", Values: ["notice-5281f1d2-6275-4e56-9ec3-a1eb19d8bc2f"]}]
必选：否
uid
按照【接收用户ID】进行过滤。
类型：String
示例："Filters": [{Key: "uid", Values: ["1137546"]}]
必选：否
groupId
按照【接收用户组ID】进行过滤。
类型：String
示例："Filters": [{Key: "groupId", Values: ["344098"]}]
必选：否

deliverFlag
按照【投递状态】进行过滤。
类型：String
必选：否
可选值： "1":未启用,  "2": 已启用, "3":投递异常
示例："Filters":[{"Key":"deliverFlag","Values":["2"]}]
每次请求的Filters的上限为10，Filter.Values的上限为5。
 * @method integer getOffset() 获取分页的偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为0。
 * @method integer getLimit() 获取分页单页限制数目，默认值为20，最大值100。
 * @method void setLimit(integer $Limit) 设置分页单页限制数目，默认值为20，最大值100。
 * @method boolean getHasAlarmShieldCount() 获取是否需要返回通知渠道组配置的告警屏蔽统计状态数量信息。
- true：需要返回；
- false：不返回（默认false）。
 * @method void setHasAlarmShieldCount(boolean $HasAlarmShieldCount) 设置是否需要返回通知渠道组配置的告警屏蔽统计状态数量信息。
- true：需要返回；
- false：不返回（默认false）。
 */
class DescribeAlarmNoticesRequest extends AbstractModel
{
    /**
     * @var array name
按照【通知渠道组名称】进行过滤。
类型：String
示例："Filters":[{"Key":"name","Values":["test-notice"]}]
必选：否
alarmNoticeId
按照【通知渠道组ID】进行过滤。
类型：String
示例："Filters": [{Key: "alarmNoticeId", Values: ["notice-5281f1d2-6275-4e56-9ec3-a1eb19d8bc2f"]}]
必选：否
uid
按照【接收用户ID】进行过滤。
类型：String
示例："Filters": [{Key: "uid", Values: ["1137546"]}]
必选：否
groupId
按照【接收用户组ID】进行过滤。
类型：String
示例："Filters": [{Key: "groupId", Values: ["344098"]}]
必选：否

deliverFlag
按照【投递状态】进行过滤。
类型：String
必选：否
可选值： "1":未启用,  "2": 已启用, "3":投递异常
示例："Filters":[{"Key":"deliverFlag","Values":["2"]}]
每次请求的Filters的上限为10，Filter.Values的上限为5。
     */
    public $Filters;

    /**
     * @var integer 分页的偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 分页单页限制数目，默认值为20，最大值100。
     */
    public $Limit;

    /**
     * @var boolean 是否需要返回通知渠道组配置的告警屏蔽统计状态数量信息。
- true：需要返回；
- false：不返回（默认false）。
     */
    public $HasAlarmShieldCount;

    /**
     * @param array $Filters name
按照【通知渠道组名称】进行过滤。
类型：String
示例："Filters":[{"Key":"name","Values":["test-notice"]}]
必选：否
alarmNoticeId
按照【通知渠道组ID】进行过滤。
类型：String
示例："Filters": [{Key: "alarmNoticeId", Values: ["notice-5281f1d2-6275-4e56-9ec3-a1eb19d8bc2f"]}]
必选：否
uid
按照【接收用户ID】进行过滤。
类型：String
示例："Filters": [{Key: "uid", Values: ["1137546"]}]
必选：否
groupId
按照【接收用户组ID】进行过滤。
类型：String
示例："Filters": [{Key: "groupId", Values: ["344098"]}]
必选：否

deliverFlag
按照【投递状态】进行过滤。
类型：String
必选：否
可选值： "1":未启用,  "2": 已启用, "3":投递异常
示例："Filters":[{"Key":"deliverFlag","Values":["2"]}]
每次请求的Filters的上限为10，Filter.Values的上限为5。
     * @param integer $Offset 分页的偏移量，默认值为0。
     * @param integer $Limit 分页单页限制数目，默认值为20，最大值100。
     * @param boolean $HasAlarmShieldCount 是否需要返回通知渠道组配置的告警屏蔽统计状态数量信息。
- true：需要返回；
- false：不返回（默认false）。
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("HasAlarmShieldCount",$param) and $param["HasAlarmShieldCount"] !== null) {
            $this->HasAlarmShieldCount = $param["HasAlarmShieldCount"];
        }
    }
}
