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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListIPAlarmConfig请求参数结构体
 *
 * @method integer getOffset() 获取页起始偏移，取值为(页码-1)*一页条数
 * @method void setOffset(integer $Offset) 设置页起始偏移，取值为(页码-1)*一页条数
 * @method integer getLimit() 获取一页条数，当Limit=0时，默认一页条数为100;最大取值为100
 * @method void setLimit(integer $Limit) 设置一页条数，当Limit=0时，默认一页条数为100;最大取值为100
 * @method string getFilterInstanceId() 获取资源实例ID搜索, 支持资源实例前缀通配搜索，例如bgp-*表示获取高防包类型的资源实例
 * @method void setFilterInstanceId(string $FilterInstanceId) 设置资源实例ID搜索, 支持资源实例前缀通配搜索，例如bgp-*表示获取高防包类型的资源实例
 * @method integer getFilterAlarmType() 获取告警阈值类型搜索，取值[
1(入流量告警阈值)
2(攻击清洗流量告警阈值)
]
 * @method void setFilterAlarmType(integer $FilterAlarmType) 设置告警阈值类型搜索，取值[
1(入流量告警阈值)
2(攻击清洗流量告警阈值)
]
 * @method string getFilterIp() 获取IP搜索
 * @method void setFilterIp(string $FilterIp) 设置IP搜索
 * @method string getFilterCname() 获取高防IP实例资源的cname
 * @method void setFilterCname(string $FilterCname) 设置高防IP实例资源的cname
 */
class DescribeListIPAlarmConfigRequest extends AbstractModel
{
    /**
     * @var integer 页起始偏移，取值为(页码-1)*一页条数
     */
    public $Offset;

    /**
     * @var integer 一页条数，当Limit=0时，默认一页条数为100;最大取值为100
     */
    public $Limit;

    /**
     * @var string 资源实例ID搜索, 支持资源实例前缀通配搜索，例如bgp-*表示获取高防包类型的资源实例
     */
    public $FilterInstanceId;

    /**
     * @var integer 告警阈值类型搜索，取值[
1(入流量告警阈值)
2(攻击清洗流量告警阈值)
]
     */
    public $FilterAlarmType;

    /**
     * @var string IP搜索
     */
    public $FilterIp;

    /**
     * @var string 高防IP实例资源的cname
     */
    public $FilterCname;

    /**
     * @param integer $Offset 页起始偏移，取值为(页码-1)*一页条数
     * @param integer $Limit 一页条数，当Limit=0时，默认一页条数为100;最大取值为100
     * @param string $FilterInstanceId 资源实例ID搜索, 支持资源实例前缀通配搜索，例如bgp-*表示获取高防包类型的资源实例
     * @param integer $FilterAlarmType 告警阈值类型搜索，取值[
1(入流量告警阈值)
2(攻击清洗流量告警阈值)
]
     * @param string $FilterIp IP搜索
     * @param string $FilterCname 高防IP实例资源的cname
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FilterInstanceId",$param) and $param["FilterInstanceId"] !== null) {
            $this->FilterInstanceId = $param["FilterInstanceId"];
        }

        if (array_key_exists("FilterAlarmType",$param) and $param["FilterAlarmType"] !== null) {
            $this->FilterAlarmType = $param["FilterAlarmType"];
        }

        if (array_key_exists("FilterIp",$param) and $param["FilterIp"] !== null) {
            $this->FilterIp = $param["FilterIp"];
        }

        if (array_key_exists("FilterCname",$param) and $param["FilterCname"] !== null) {
            $this->FilterCname = $param["FilterCname"];
        }
    }
}
