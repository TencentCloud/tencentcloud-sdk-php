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
 * 负载均衡信息
 *
 * @method string getLoadBalancingId() 获取负载均衡ID
 * @method void setLoadBalancingId(string $LoadBalancingId) 设置负载均衡ID
 * @method string getZoneId() 获取站点ID
 * @method void setZoneId(string $ZoneId) 设置站点ID
 * @method string getHost() 获取子域名，填写@表示根域
 * @method void setHost(string $Host) 设置子域名，填写@表示根域
 * @method string getType() 获取代理模式：
dns_only: 仅DNS
proxied: 开启代理
 * @method void setType(string $Type) 设置代理模式：
dns_only: 仅DNS
proxied: 开启代理
 * @method integer getTTL() 获取当Type=dns_only表示DNS的TTL时间
 * @method void setTTL(integer $TTL) 设置当Type=dns_only表示DNS的TTL时间
 * @method array getOriginId() 获取使用的源站组ID
 * @method void setOriginId(array $OriginId) 设置使用的源站组ID
 * @method array getOrigin() 获取使用的源站信息
 * @method void setOrigin(array $Origin) 设置使用的源站信息
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getCname() 获取调度域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCname(string $Cname) 设置调度域名
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoadBalancing extends AbstractModel
{
    /**
     * @var string 负载均衡ID
     */
    public $LoadBalancingId;

    /**
     * @var string 站点ID
     */
    public $ZoneId;

    /**
     * @var string 子域名，填写@表示根域
     */
    public $Host;

    /**
     * @var string 代理模式：
dns_only: 仅DNS
proxied: 开启代理
     */
    public $Type;

    /**
     * @var integer 当Type=dns_only表示DNS的TTL时间
     */
    public $TTL;

    /**
     * @var array 使用的源站组ID
     */
    public $OriginId;

    /**
     * @var array 使用的源站信息
     */
    public $Origin;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 调度域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cname;

    /**
     * @param string $LoadBalancingId 负载均衡ID
     * @param string $ZoneId 站点ID
     * @param string $Host 子域名，填写@表示根域
     * @param string $Type 代理模式：
dns_only: 仅DNS
proxied: 开启代理
     * @param integer $TTL 当Type=dns_only表示DNS的TTL时间
     * @param array $OriginId 使用的源站组ID
     * @param array $Origin 使用的源站信息
     * @param string $UpdateTime 更新时间
     * @param string $Status 状态
     * @param string $Cname 调度域名
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("LoadBalancingId",$param) and $param["LoadBalancingId"] !== null) {
            $this->LoadBalancingId = $param["LoadBalancingId"];
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

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = [];
            foreach ($param["Origin"] as $key => $value){
                $obj = new OriginGroup();
                $obj->deserialize($value);
                array_push($this->Origin, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }
    }
}
