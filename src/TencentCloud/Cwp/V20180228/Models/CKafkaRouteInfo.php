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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CKafka域名信息
 *
 * @method integer getRouteID() 获取路由ID
 * @method void setRouteID(integer $RouteID) 设置路由ID
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getDomainPort() 获取域名端口
 * @method void setDomainPort(integer $DomainPort) 设置域名端口
 * @method string getVip() 获取虚拟ip
 * @method void setVip(string $Vip) 设置虚拟ip
 * @method integer getVipType() 获取虚拟ip类型
 * @method void setVipType(integer $VipType) 设置虚拟ip类型
 * @method integer getAccessType() 获取接入类型
 * @method void setAccessType(integer $AccessType) 设置接入类型
 */
class CKafkaRouteInfo extends AbstractModel
{
    /**
     * @var integer 路由ID
     */
    public $RouteID;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 域名端口
     */
    public $DomainPort;

    /**
     * @var string 虚拟ip
     */
    public $Vip;

    /**
     * @var integer 虚拟ip类型
     */
    public $VipType;

    /**
     * @var integer 接入类型
     */
    public $AccessType;

    /**
     * @param integer $RouteID 路由ID
     * @param string $Domain 域名
     * @param integer $DomainPort 域名端口
     * @param string $Vip 虚拟ip
     * @param integer $VipType 虚拟ip类型
     * @param integer $AccessType 接入类型
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
        if (array_key_exists("RouteID",$param) and $param["RouteID"] !== null) {
            $this->RouteID = $param["RouteID"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainPort",$param) and $param["DomainPort"] !== null) {
            $this->DomainPort = $param["DomainPort"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }
    }
}
