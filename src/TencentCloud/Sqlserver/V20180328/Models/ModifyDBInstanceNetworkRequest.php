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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceNetwork请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getNewVpcId() 获取新VPC网络Id
 * @method void setNewVpcId(string $NewVpcId) 设置新VPC网络Id
 * @method string getNewSubnetId() 获取新子网Id
 * @method void setNewSubnetId(string $NewSubnetId) 设置新子网Id
 * @method integer getOldIpRetainTime() 获取原vip保留时长，单位小时，默认为0，代表立即回收，最大为168小时
 * @method void setOldIpRetainTime(integer $OldIpRetainTime) 设置原vip保留时长，单位小时，默认为0，代表立即回收，最大为168小时
 * @method string getVip() 获取指定VIP地址
 * @method void setVip(string $Vip) 设置指定VIP地址
 * @method integer getDRNetwork() 获取目标节点，0-修改主节点网络，1-修改备节点网络，默认取值0

 * @method void setDRNetwork(integer $DRNetwork) 设置目标节点，0-修改主节点网络，1-修改备节点网络，默认取值0

 * @method string getDrInstanceId() 获取备机资源ID。当DRNetwork = 1时必填
 * @method void setDrInstanceId(string $DrInstanceId) 设置备机资源ID。当DRNetwork = 1时必填
 */
class ModifyDBInstanceNetworkRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 新VPC网络Id
     */
    public $NewVpcId;

    /**
     * @var string 新子网Id
     */
    public $NewSubnetId;

    /**
     * @var integer 原vip保留时长，单位小时，默认为0，代表立即回收，最大为168小时
     */
    public $OldIpRetainTime;

    /**
     * @var string 指定VIP地址
     */
    public $Vip;

    /**
     * @var integer 目标节点，0-修改主节点网络，1-修改备节点网络，默认取值0

     */
    public $DRNetwork;

    /**
     * @var string 备机资源ID。当DRNetwork = 1时必填
     */
    public $DrInstanceId;

    /**
     * @param string $InstanceId 实例id
     * @param string $NewVpcId 新VPC网络Id
     * @param string $NewSubnetId 新子网Id
     * @param integer $OldIpRetainTime 原vip保留时长，单位小时，默认为0，代表立即回收，最大为168小时
     * @param string $Vip 指定VIP地址
     * @param integer $DRNetwork 目标节点，0-修改主节点网络，1-修改备节点网络，默认取值0

     * @param string $DrInstanceId 备机资源ID。当DRNetwork = 1时必填
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

        if (array_key_exists("NewVpcId",$param) and $param["NewVpcId"] !== null) {
            $this->NewVpcId = $param["NewVpcId"];
        }

        if (array_key_exists("NewSubnetId",$param) and $param["NewSubnetId"] !== null) {
            $this->NewSubnetId = $param["NewSubnetId"];
        }

        if (array_key_exists("OldIpRetainTime",$param) and $param["OldIpRetainTime"] !== null) {
            $this->OldIpRetainTime = $param["OldIpRetainTime"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("DRNetwork",$param) and $param["DRNetwork"] !== null) {
            $this->DRNetwork = $param["DRNetwork"];
        }

        if (array_key_exists("DrInstanceId",$param) and $param["DrInstanceId"] !== null) {
            $this->DrInstanceId = $param["DrInstanceId"];
        }
    }
}
