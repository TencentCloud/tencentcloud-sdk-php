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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLoadBalancing请求参数结构体
 *
 * @method string getZoneId() 获取站点ID
 * @method void setZoneId(string $ZoneId) 设置站点ID
 * @method string getHost() 获取子域名
 * @method void setHost(string $Host) 设置子域名
 * @method string getType() 获取代理模式：
dns_only: 仅DNS
proxied: 开启代理
 * @method void setType(string $Type) 设置代理模式：
dns_only: 仅DNS
proxied: 开启代理
 * @method array getOriginId() 获取使用的源站组ID
 * @method void setOriginId(array $OriginId) 设置使用的源站组ID
 * @method integer getTTL() 获取当Type=dns_only表示DNS的TTL时间
 * @method void setTTL(integer $TTL) 设置当Type=dns_only表示DNS的TTL时间
 */
class CreateLoadBalancingRequest extends AbstractModel
{
    /**
     * @var string 站点ID
     */
    public $ZoneId;

    /**
     * @var string 子域名
     */
    public $Host;

    /**
     * @var string 代理模式：
dns_only: 仅DNS
proxied: 开启代理
     */
    public $Type;

    /**
     * @var array 使用的源站组ID
     */
    public $OriginId;

    /**
     * @var integer 当Type=dns_only表示DNS的TTL时间
     */
    public $TTL;

    /**
     * @param string $ZoneId 站点ID
     * @param string $Host 子域名
     * @param string $Type 代理模式：
dns_only: 仅DNS
proxied: 开启代理
     * @param array $OriginId 使用的源站组ID
     * @param integer $TTL 当Type=dns_only表示DNS的TTL时间
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }
    }
}
