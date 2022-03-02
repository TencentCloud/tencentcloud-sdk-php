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
 * CreateCcBlackWhiteIpList请求参数结构体
 *
 * @method string getInstanceId() 获取资源实例ID
 * @method void setInstanceId(string $InstanceId) 设置资源实例ID
 * @method array getIpList() 获取IP列表
 * @method void setIpList(array $IpList) 设置IP列表
 * @method string getType() 获取IP类型，取值[black(黑名单IP), white(白名单IP)]
 * @method void setType(string $Type) 设置IP类型，取值[black(黑名单IP), white(白名单IP)]
 * @method string getIp() 获取Ip地址
 * @method void setIp(string $Ip) 设置Ip地址
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 */
class CreateCcBlackWhiteIpListRequest extends AbstractModel
{
    /**
     * @var string 资源实例ID
     */
    public $InstanceId;

    /**
     * @var array IP列表
     */
    public $IpList;

    /**
     * @var string IP类型，取值[black(黑名单IP), white(白名单IP)]
     */
    public $Type;

    /**
     * @var string Ip地址
     */
    public $Ip;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @param string $InstanceId 资源实例ID
     * @param array $IpList IP列表
     * @param string $Type IP类型，取值[black(黑名单IP), white(白名单IP)]
     * @param string $Ip Ip地址
     * @param string $Domain 域名
     * @param string $Protocol 协议
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = [];
            foreach ($param["IpList"] as $key => $value){
                $obj = new IpSegment();
                $obj->deserialize($value);
                array_push($this->IpList, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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
    }
}
