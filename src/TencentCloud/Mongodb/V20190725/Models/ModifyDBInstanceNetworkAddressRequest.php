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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceNetworkAddress请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getOldIpExpiredTime() 获取原IP保留时长，单位为分钟；原IP会在约定时间后释放，在释放前原IP和新IP均可访问；0表示立即回收原IP
 * @method void setOldIpExpiredTime(integer $OldIpExpiredTime) 设置原IP保留时长，单位为分钟；原IP会在约定时间后释放，在释放前原IP和新IP均可访问；0表示立即回收原IP
 * @method string getNewUniqVpcId() 获取切换后IP地址的归属私有网络统一ID，若为基础网络，该字段为空
 * @method void setNewUniqVpcId(string $NewUniqVpcId) 设置切换后IP地址的归属私有网络统一ID，若为基础网络，该字段为空
 * @method string getNewUniqSubnetId() 获取切换后IP地址的归属子网统一ID，若为基础网络，该字段为空
 * @method void setNewUniqSubnetId(string $NewUniqSubnetId) 设置切换后IP地址的归属子网统一ID，若为基础网络，该字段为空
 * @method array getNetworkAddresses() 获取待修改IP信息
 * @method void setNetworkAddresses(array $NetworkAddresses) 设置待修改IP信息
 */
class ModifyDBInstanceNetworkAddressRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 原IP保留时长，单位为分钟；原IP会在约定时间后释放，在释放前原IP和新IP均可访问；0表示立即回收原IP
     */
    public $OldIpExpiredTime;

    /**
     * @var string 切换后IP地址的归属私有网络统一ID，若为基础网络，该字段为空
     */
    public $NewUniqVpcId;

    /**
     * @var string 切换后IP地址的归属子网统一ID，若为基础网络，该字段为空
     */
    public $NewUniqSubnetId;

    /**
     * @var array 待修改IP信息
     */
    public $NetworkAddresses;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $OldIpExpiredTime 原IP保留时长，单位为分钟；原IP会在约定时间后释放，在释放前原IP和新IP均可访问；0表示立即回收原IP
     * @param string $NewUniqVpcId 切换后IP地址的归属私有网络统一ID，若为基础网络，该字段为空
     * @param string $NewUniqSubnetId 切换后IP地址的归属子网统一ID，若为基础网络，该字段为空
     * @param array $NetworkAddresses 待修改IP信息
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

        if (array_key_exists("OldIpExpiredTime",$param) and $param["OldIpExpiredTime"] !== null) {
            $this->OldIpExpiredTime = $param["OldIpExpiredTime"];
        }

        if (array_key_exists("NewUniqVpcId",$param) and $param["NewUniqVpcId"] !== null) {
            $this->NewUniqVpcId = $param["NewUniqVpcId"];
        }

        if (array_key_exists("NewUniqSubnetId",$param) and $param["NewUniqSubnetId"] !== null) {
            $this->NewUniqSubnetId = $param["NewUniqSubnetId"];
        }

        if (array_key_exists("NetworkAddresses",$param) and $param["NetworkAddresses"] !== null) {
            $this->NetworkAddresses = [];
            foreach ($param["NetworkAddresses"] as $key => $value){
                $obj = new ModifyNetworkAddress();
                $obj->deserialize($value);
                array_push($this->NetworkAddresses, $obj);
            }
        }
    }
}
