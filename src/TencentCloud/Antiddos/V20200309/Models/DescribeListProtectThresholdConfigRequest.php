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
 * DescribeListProtectThresholdConfig请求参数结构体
 *
 * @method integer getOffset() 获取页起始偏移，取值为(页码-1)*一页条数
 * @method void setOffset(integer $Offset) 设置页起始偏移，取值为(页码-1)*一页条数
 * @method integer getLimit() 获取一页条数，当Limit=0时，默认一页条数为100;最大取值为100
 * @method void setLimit(integer $Limit) 设置一页条数，当Limit=0时，默认一页条数为100;最大取值为100
 * @method string getFilterInstanceId() 获取资源实例ID搜索, 支持资源实例前缀通配搜索，例如bgp-*表示获取高防包类型的资源实例
 * @method void setFilterInstanceId(string $FilterInstanceId) 设置资源实例ID搜索, 支持资源实例前缀通配搜索，例如bgp-*表示获取高防包类型的资源实例
 * @method string getFilterIp() 获取IP搜索
 * @method void setFilterIp(string $FilterIp) 设置IP搜索
 * @method string getFilterDomain() 获取域名搜索(查询域名与协议的CC防护阈值时使用）
 * @method void setFilterDomain(string $FilterDomain) 设置域名搜索(查询域名与协议的CC防护阈值时使用）
 * @method string getFilterProtocol() 获取协议搜索(查询域名与协议的CC防护阈值时使用）
 * @method void setFilterProtocol(string $FilterProtocol) 设置协议搜索(查询域名与协议的CC防护阈值时使用）
 */
class DescribeListProtectThresholdConfigRequest extends AbstractModel
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
     * @var string IP搜索
     */
    public $FilterIp;

    /**
     * @var string 域名搜索(查询域名与协议的CC防护阈值时使用）
     */
    public $FilterDomain;

    /**
     * @var string 协议搜索(查询域名与协议的CC防护阈值时使用）
     */
    public $FilterProtocol;

    /**
     * @param integer $Offset 页起始偏移，取值为(页码-1)*一页条数
     * @param integer $Limit 一页条数，当Limit=0时，默认一页条数为100;最大取值为100
     * @param string $FilterInstanceId 资源实例ID搜索, 支持资源实例前缀通配搜索，例如bgp-*表示获取高防包类型的资源实例
     * @param string $FilterIp IP搜索
     * @param string $FilterDomain 域名搜索(查询域名与协议的CC防护阈值时使用）
     * @param string $FilterProtocol 协议搜索(查询域名与协议的CC防护阈值时使用）
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

        if (array_key_exists("FilterIp",$param) and $param["FilterIp"] !== null) {
            $this->FilterIp = $param["FilterIp"];
        }

        if (array_key_exists("FilterDomain",$param) and $param["FilterDomain"] !== null) {
            $this->FilterDomain = $param["FilterDomain"];
        }

        if (array_key_exists("FilterProtocol",$param) and $param["FilterProtocol"] !== null) {
            $this->FilterProtocol = $param["FilterProtocol"];
        }
    }
}
