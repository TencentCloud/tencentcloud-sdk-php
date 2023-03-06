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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsage请求参数结构体
 *
 * @method Agent getAgent() 获取应用信息，此接口Agent.AppId必填
 * @method void setAgent(Agent $Agent) 设置应用信息，此接口Agent.AppId必填
 * @method string getStartDate() 获取开始时间，例如：2021-03-21
 * @method void setStartDate(string $StartDate) 设置开始时间，例如：2021-03-21
 * @method string getEndDate() 获取结束时间，例如：2021-06-21；
开始时间到结束时间的区间长度小于等于90天。
 * @method void setEndDate(string $EndDate) 设置结束时间，例如：2021-06-21；
开始时间到结束时间的区间长度小于等于90天。
 * @method boolean getNeedAggregate() 获取是否汇总数据，默认不汇总。
不汇总：返回在统计区间内第三方平台下所有企业的每日明细，即每个企业N条数据，N为统计天数；
汇总：返回在统计区间内第三方平台下所有企业的汇总后数据，即每个企业一条数据；
 * @method void setNeedAggregate(boolean $NeedAggregate) 设置是否汇总数据，默认不汇总。
不汇总：返回在统计区间内第三方平台下所有企业的每日明细，即每个企业N条数据，N为统计天数；
汇总：返回在统计区间内第三方平台下所有企业的汇总后数据，即每个企业一条数据；
 * @method integer getLimit() 获取单次返回的最多条目数量。默认为1000，且不能超过1000。
 * @method void setLimit(integer $Limit) 设置单次返回的最多条目数量。默认为1000，且不能超过1000。
 * @method integer getOffset() 获取偏移量，默认是0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认是0。
 * @method UserInfo getOperator() 获取暂未开放
 * @method void setOperator(UserInfo $Operator) 设置暂未开放
 */
class DescribeUsageRequest extends AbstractModel
{
    /**
     * @var Agent 应用信息，此接口Agent.AppId必填
     */
    public $Agent;

    /**
     * @var string 开始时间，例如：2021-03-21
     */
    public $StartDate;

    /**
     * @var string 结束时间，例如：2021-06-21；
开始时间到结束时间的区间长度小于等于90天。
     */
    public $EndDate;

    /**
     * @var boolean 是否汇总数据，默认不汇总。
不汇总：返回在统计区间内第三方平台下所有企业的每日明细，即每个企业N条数据，N为统计天数；
汇总：返回在统计区间内第三方平台下所有企业的汇总后数据，即每个企业一条数据；
     */
    public $NeedAggregate;

    /**
     * @var integer 单次返回的最多条目数量。默认为1000，且不能超过1000。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认是0。
     */
    public $Offset;

    /**
     * @var UserInfo 暂未开放
     */
    public $Operator;

    /**
     * @param Agent $Agent 应用信息，此接口Agent.AppId必填
     * @param string $StartDate 开始时间，例如：2021-03-21
     * @param string $EndDate 结束时间，例如：2021-06-21；
开始时间到结束时间的区间长度小于等于90天。
     * @param boolean $NeedAggregate 是否汇总数据，默认不汇总。
不汇总：返回在统计区间内第三方平台下所有企业的每日明细，即每个企业N条数据，N为统计天数；
汇总：返回在统计区间内第三方平台下所有企业的汇总后数据，即每个企业一条数据；
     * @param integer $Limit 单次返回的最多条目数量。默认为1000，且不能超过1000。
     * @param integer $Offset 偏移量，默认是0。
     * @param UserInfo $Operator 暂未开放
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("NeedAggregate",$param) and $param["NeedAggregate"] !== null) {
            $this->NeedAggregate = $param["NeedAggregate"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
