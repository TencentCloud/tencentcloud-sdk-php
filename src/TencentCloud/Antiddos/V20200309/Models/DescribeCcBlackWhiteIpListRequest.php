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
 * DescribeCcBlackWhiteIpList请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgp-multip：表示高防包；bgpip：表示高防IP）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgp-multip：表示高防包；bgpip：表示高防IP）
 * @method string getInstanceId() 获取指定特定实例Id
 * @method void setInstanceId(string $InstanceId) 设置指定特定实例Id
 * @method integer getOffset() 获取页起始偏移，取值为(页码-1)*一页条数
 * @method void setOffset(integer $Offset) 设置页起始偏移，取值为(页码-1)*一页条数
 * @method integer getLimit() 获取一页条数
 * @method void setLimit(integer $Limit) 设置一页条数
 * @method string getIp() 获取IP地址，普通高防IP要传该字段
 * @method void setIp(string $Ip) 设置IP地址，普通高防IP要传该字段
 * @method string getDomain() 获取域名，普通高防IP要传该字段
 * @method void setDomain(string $Domain) 设置域名，普通高防IP要传该字段
 * @method string getProtocol() 获取协议，普通高防IP要传该字段
 * @method void setProtocol(string $Protocol) 设置协议，普通高防IP要传该字段
 * @method string getFilterIp() 获取筛选IP，需要筛选黑白名单IP时传该字段
 * @method void setFilterIp(string $FilterIp) 设置筛选IP，需要筛选黑白名单IP时传该字段
 * @method string getFilterType() 获取黑白名单筛选字段，需要筛选黑白名单列表时传该字段
 * @method void setFilterType(string $FilterType) 设置黑白名单筛选字段，需要筛选黑白名单列表时传该字段
 */
class DescribeCcBlackWhiteIpListRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgp-multip：表示高防包；bgpip：表示高防IP）
     */
    public $Business;

    /**
     * @var string 指定特定实例Id
     */
    public $InstanceId;

    /**
     * @var integer 页起始偏移，取值为(页码-1)*一页条数
     */
    public $Offset;

    /**
     * @var integer 一页条数
     */
    public $Limit;

    /**
     * @var string IP地址，普通高防IP要传该字段
     */
    public $Ip;

    /**
     * @var string 域名，普通高防IP要传该字段
     */
    public $Domain;

    /**
     * @var string 协议，普通高防IP要传该字段
     */
    public $Protocol;

    /**
     * @var string 筛选IP，需要筛选黑白名单IP时传该字段
     */
    public $FilterIp;

    /**
     * @var string 黑白名单筛选字段，需要筛选黑白名单列表时传该字段
     */
    public $FilterType;

    /**
     * @param string $Business 大禹子产品代号（bgp-multip：表示高防包；bgpip：表示高防IP）
     * @param string $InstanceId 指定特定实例Id
     * @param integer $Offset 页起始偏移，取值为(页码-1)*一页条数
     * @param integer $Limit 一页条数
     * @param string $Ip IP地址，普通高防IP要传该字段
     * @param string $Domain 域名，普通高防IP要传该字段
     * @param string $Protocol 协议，普通高防IP要传该字段
     * @param string $FilterIp 筛选IP，需要筛选黑白名单IP时传该字段
     * @param string $FilterType 黑白名单筛选字段，需要筛选黑白名单列表时传该字段
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("FilterIp",$param) and $param["FilterIp"] !== null) {
            $this->FilterIp = $param["FilterIp"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }
    }
}
