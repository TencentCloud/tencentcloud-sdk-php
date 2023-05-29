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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 保留的网络资源信息
 *
 * @method string getVpcId() 获取私有网络
 * @method void setVpcId(string $VpcId) 设置私有网络
 * @method string getSubnetId() 获取子网
 * @method void setSubnetId(string $SubnetId) 设置子网
 * @method string getVip() 获取VpcId,SubnetId下保留的内网ip
 * @method void setVip(string $Vip) 设置VpcId,SubnetId下保留的内网ip
 * @method array getVports() 获取Vip下的端口
 * @method void setVports(array $Vports) 设置Vip下的端口
 * @method string getRecycleTime() 获取Vip的回收时间	
 * @method void setRecycleTime(string $RecycleTime) 设置Vip的回收时间	
 */
class ReservedNetResource extends AbstractModel
{
    /**
     * @var string 私有网络
     */
    public $VpcId;

    /**
     * @var string 子网
     */
    public $SubnetId;

    /**
     * @var string VpcId,SubnetId下保留的内网ip
     */
    public $Vip;

    /**
     * @var array Vip下的端口
     */
    public $Vports;

    /**
     * @var string Vip的回收时间	
     */
    public $RecycleTime;

    /**
     * @param string $VpcId 私有网络
     * @param string $SubnetId 子网
     * @param string $Vip VpcId,SubnetId下保留的内网ip
     * @param array $Vports Vip下的端口
     * @param string $RecycleTime Vip的回收时间	
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vports",$param) and $param["Vports"] !== null) {
            $this->Vports = $param["Vports"];
        }

        if (array_key_exists("RecycleTime",$param) and $param["RecycleTime"] !== null) {
            $this->RecycleTime = $param["RecycleTime"];
        }
    }
}
