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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetworkConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，如：kee-6ubh****。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，如：kee-6ubh****。
 * @method string getOperation() 获取操作类型。<ul><li>changeVip：修改实例私有网络。</li><li>changeVpc：修改实例私有网络所属子网。</li><li>changeBaseToVpc：基础网络转为私有网络。</li></ul>
 * @method void setOperation(string $Operation) 设置操作类型。<ul><li>changeVip：修改实例私有网络。</li><li>changeVpc：修改实例私有网络所属子网。</li><li>changeBaseToVpc：基础网络转为私有网络。</li></ul>
 * @method string getVip() 获取修改后的 VIP 地址。
当参数<b>Operation</b>为<b>changeVip</b>时，需设置实例修改后的 VIP 地址。该参数不配置，则自动分配。
 * @method void setVip(string $Vip) 设置修改后的 VIP 地址。
当参数<b>Operation</b>为<b>changeVip</b>时，需设置实例修改后的 VIP 地址。该参数不配置，则自动分配。
 * @method string getVpcId() 获取修改后的私有网络 ID。
当参数<b>Operation</b>为<b>changeVip</b>或者为<b>changeBaseToVpc</b>时，务必设置实例修改后的私有网络 ID。
 * @method void setVpcId(string $VpcId) 设置修改后的私有网络 ID。
当参数<b>Operation</b>为<b>changeVip</b>或者为<b>changeBaseToVpc</b>时，务必设置实例修改后的私有网络 ID。
 * @method string getSubnetId() 获取修改后的所属子网 ID。
当参数<b>Operation</b>为<b>changeVpc</b>或者为<b>changeBaseToVpc</b>时，务必设置实例修改后的子网 ID。
 * @method void setSubnetId(string $SubnetId) 设置修改后的所属子网 ID。
当参数<b>Operation</b>为<b>changeVpc</b>或者为<b>changeBaseToVpc</b>时，务必设置实例修改后的子网 ID。
 * @method integer getRecycle() 获取原 VIP 保留时长。
单位：天。取值范围：0、1、2、3、7、15。
 * @method void setRecycle(integer $Recycle) 设置原 VIP 保留时长。
单位：天。取值范围：0、1、2、3、7、15。
 */
class ModifyNetworkConfigRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，如：kee-6ubh****。
     */
    public $InstanceId;

    /**
     * @var string 操作类型。<ul><li>changeVip：修改实例私有网络。</li><li>changeVpc：修改实例私有网络所属子网。</li><li>changeBaseToVpc：基础网络转为私有网络。</li></ul>
     */
    public $Operation;

    /**
     * @var string 修改后的 VIP 地址。
当参数<b>Operation</b>为<b>changeVip</b>时，需设置实例修改后的 VIP 地址。该参数不配置，则自动分配。
     */
    public $Vip;

    /**
     * @var string 修改后的私有网络 ID。
当参数<b>Operation</b>为<b>changeVip</b>或者为<b>changeBaseToVpc</b>时，务必设置实例修改后的私有网络 ID。
     */
    public $VpcId;

    /**
     * @var string 修改后的所属子网 ID。
当参数<b>Operation</b>为<b>changeVpc</b>或者为<b>changeBaseToVpc</b>时，务必设置实例修改后的子网 ID。
     */
    public $SubnetId;

    /**
     * @var integer 原 VIP 保留时长。
单位：天。取值范围：0、1、2、3、7、15。
     */
    public $Recycle;

    /**
     * @param string $InstanceId 实例 ID，如：kee-6ubh****。
     * @param string $Operation 操作类型。<ul><li>changeVip：修改实例私有网络。</li><li>changeVpc：修改实例私有网络所属子网。</li><li>changeBaseToVpc：基础网络转为私有网络。</li></ul>
     * @param string $Vip 修改后的 VIP 地址。
当参数<b>Operation</b>为<b>changeVip</b>时，需设置实例修改后的 VIP 地址。该参数不配置，则自动分配。
     * @param string $VpcId 修改后的私有网络 ID。
当参数<b>Operation</b>为<b>changeVip</b>或者为<b>changeBaseToVpc</b>时，务必设置实例修改后的私有网络 ID。
     * @param string $SubnetId 修改后的所属子网 ID。
当参数<b>Operation</b>为<b>changeVpc</b>或者为<b>changeBaseToVpc</b>时，务必设置实例修改后的子网 ID。
     * @param integer $Recycle 原 VIP 保留时长。
单位：天。取值范围：0、1、2、3、7、15。
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Recycle",$param) and $param["Recycle"] !== null) {
            $this->Recycle = $param["Recycle"];
        }
    }
}
