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
 * ModifyDReadable请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getType() 获取操作类型。enable-开启备机只读，disable-关闭备机只读
 * @method void setType(string $Type) 设置操作类型。enable-开启备机只读，disable-关闭备机只读
 * @method string getVpcId() 获取备机网络ID，不填默认和主实例保持一致
 * @method void setVpcId(string $VpcId) 设置备机网络ID，不填默认和主实例保持一致
 * @method string getSubnetId() 获取备机网络子网ID，不填默认和主实例保持一致
 * @method void setSubnetId(string $SubnetId) 设置备机网络子网ID，不填默认和主实例保持一致
 * @method string getVip() 获取指定的备机只读vip，不填自动分配。多节点SingleReadOnly模式不支持指定vip。
 * @method void setVip(string $Vip) 设置指定的备机只读vip，不填自动分配。多节点SingleReadOnly模式不支持指定vip。
 * @method string getReadMode() 获取备机只读模式，多节点架构默认取值BalancedReadOnly。SingleReadOnly-每个备机各对应一个只读地址（多节点架构），BalancedReadOnly-所有备机共用一个只读地址。当实例是双节点架构时，固定取值SingleReadOnly。
 * @method void setReadMode(string $ReadMode) 设置备机只读模式，多节点架构默认取值BalancedReadOnly。SingleReadOnly-每个备机各对应一个只读地址（多节点架构），BalancedReadOnly-所有备机共用一个只读地址。当实例是双节点架构时，固定取值SingleReadOnly。
 */
class ModifyDReadableRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 操作类型。enable-开启备机只读，disable-关闭备机只读
     */
    public $Type;

    /**
     * @var string 备机网络ID，不填默认和主实例保持一致
     */
    public $VpcId;

    /**
     * @var string 备机网络子网ID，不填默认和主实例保持一致
     */
    public $SubnetId;

    /**
     * @var string 指定的备机只读vip，不填自动分配。多节点SingleReadOnly模式不支持指定vip。
     */
    public $Vip;

    /**
     * @var string 备机只读模式，多节点架构默认取值BalancedReadOnly。SingleReadOnly-每个备机各对应一个只读地址（多节点架构），BalancedReadOnly-所有备机共用一个只读地址。当实例是双节点架构时，固定取值SingleReadOnly。
     */
    public $ReadMode;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Type 操作类型。enable-开启备机只读，disable-关闭备机只读
     * @param string $VpcId 备机网络ID，不填默认和主实例保持一致
     * @param string $SubnetId 备机网络子网ID，不填默认和主实例保持一致
     * @param string $Vip 指定的备机只读vip，不填自动分配。多节点SingleReadOnly模式不支持指定vip。
     * @param string $ReadMode 备机只读模式，多节点架构默认取值BalancedReadOnly。SingleReadOnly-每个备机各对应一个只读地址（多节点架构），BalancedReadOnly-所有备机共用一个只读地址。当实例是双节点架构时，固定取值SingleReadOnly。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("ReadMode",$param) and $param["ReadMode"] !== null) {
            $this->ReadMode = $param["ReadMode"];
        }
    }
}
