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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCDBProxyVipVPort请求参数结构体
 *
 * @method string getProxyGroupId() 获取代理组ID
 * @method void setProxyGroupId(string $ProxyGroupId) 设置代理组ID
 * @method string getUniqVpcId() 获取私有网络ID
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络ID
 * @method string getUniqSubnetId() 获取私有网络子网ID
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置私有网络子网ID
 * @method string getDstIp() 获取目标IP
 * @method void setDstIp(string $DstIp) 设置目标IP
 * @method integer getDstPort() 获取目标端口
 * @method void setDstPort(integer $DstPort) 设置目标端口
 * @method integer getReleaseDuration() 获取旧IP回收时间 单位小时
 * @method void setReleaseDuration(integer $ReleaseDuration) 设置旧IP回收时间 单位小时
 */
class ModifyCDBProxyVipVPortRequest extends AbstractModel
{
    /**
     * @var string 代理组ID
     */
    public $ProxyGroupId;

    /**
     * @var string 私有网络ID
     */
    public $UniqVpcId;

    /**
     * @var string 私有网络子网ID
     */
    public $UniqSubnetId;

    /**
     * @var string 目标IP
     */
    public $DstIp;

    /**
     * @var integer 目标端口
     */
    public $DstPort;

    /**
     * @var integer 旧IP回收时间 单位小时
     */
    public $ReleaseDuration;

    /**
     * @param string $ProxyGroupId 代理组ID
     * @param string $UniqVpcId 私有网络ID
     * @param string $UniqSubnetId 私有网络子网ID
     * @param string $DstIp 目标IP
     * @param integer $DstPort 目标端口
     * @param integer $ReleaseDuration 旧IP回收时间 单位小时
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("ReleaseDuration",$param) and $param["ReleaseDuration"] !== null) {
            $this->ReleaseDuration = $param["ReleaseDuration"];
        }
    }
}
