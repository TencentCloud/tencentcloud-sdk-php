<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceNetwork请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getVpcId() 获取希望转到的VPC网络的VpcId
 * @method void setVpcId(string $VpcId) 设置希望转到的VPC网络的VpcId
 * @method string getSubnetId() 获取希望转到的VPC网络的子网ID
 * @method void setSubnetId(string $SubnetId) 设置希望转到的VPC网络的子网ID
 * @method integer getVipReleaseDelay() 获取VIP保留时长，单位小时，取值范围（0~168），0表示立即释放，有一分钟释放延迟。不传此参数，默认24小时释放VIP。
 * @method void setVipReleaseDelay(integer $VipReleaseDelay) 设置VIP保留时长，单位小时，取值范围（0~168），0表示立即释放，有一分钟释放延迟。不传此参数，默认24小时释放VIP。
 * @method string getVip() 获取指定vip变更，不填表示随机vip
 * @method void setVip(string $Vip) 设置指定vip变更，不填表示随机vip
 */
class ModifyInstanceNetworkRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 希望转到的VPC网络的VpcId
     */
    public $VpcId;

    /**
     * @var string 希望转到的VPC网络的子网ID
     */
    public $SubnetId;

    /**
     * @var integer VIP保留时长，单位小时，取值范围（0~168），0表示立即释放，有一分钟释放延迟。不传此参数，默认24小时释放VIP。
     */
    public $VipReleaseDelay;

    /**
     * @var string 指定vip变更，不填表示随机vip
     */
    public $Vip;

    /**
     * @param string $InstanceId 实例ID
     * @param string $VpcId 希望转到的VPC网络的VpcId
     * @param string $SubnetId 希望转到的VPC网络的子网ID
     * @param integer $VipReleaseDelay VIP保留时长，单位小时，取值范围（0~168），0表示立即释放，有一分钟释放延迟。不传此参数，默认24小时释放VIP。
     * @param string $Vip 指定vip变更，不填表示随机vip
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VipReleaseDelay",$param) and $param["VipReleaseDelay"] !== null) {
            $this->VipReleaseDelay = $param["VipReleaseDelay"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
