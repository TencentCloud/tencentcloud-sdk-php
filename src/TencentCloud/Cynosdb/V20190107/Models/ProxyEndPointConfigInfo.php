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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集成集群proxy地址配置
 *
 * @method string getUniqueVpcId() 获取所属VPC网络ID
 * @method void setUniqueVpcId(string $UniqueVpcId) 设置所属VPC网络ID
 * @method string getUniqueSubnetId() 获取所属子网ID
 * @method void setUniqueSubnetId(string $UniqueSubnetId) 设置所属子网ID
 * @method array getSecurityGroupIds() 获取安全组id数组
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组id数组
 * @method string getWeightMode() 获取权重模式： system-系统分配，custom-自定义
 * @method void setWeightMode(string $WeightMode) 设置权重模式： system-系统分配，custom-自定义
 * @method string getAutoAddRo() 获取是否自动添加只读实例，yes-是，no-不自动添加
 * @method void setAutoAddRo(string $AutoAddRo) 设置是否自动添加只读实例，yes-是，no-不自动添加
 * @method string getRwType() 获取读写属性： READWRITE,READONLY
 * @method void setRwType(string $RwType) 设置读写属性： READWRITE,READONLY
 * @method array getInstanceNameWeights() 获取权重信息
 * @method void setInstanceNameWeights(array $InstanceNameWeights) 设置权重信息
 */
class ProxyEndPointConfigInfo extends AbstractModel
{
    /**
     * @var string 所属VPC网络ID
     */
    public $UniqueVpcId;

    /**
     * @var string 所属子网ID
     */
    public $UniqueSubnetId;

    /**
     * @var array 安全组id数组
     */
    public $SecurityGroupIds;

    /**
     * @var string 权重模式： system-系统分配，custom-自定义
     */
    public $WeightMode;

    /**
     * @var string 是否自动添加只读实例，yes-是，no-不自动添加
     */
    public $AutoAddRo;

    /**
     * @var string 读写属性： READWRITE,READONLY
     */
    public $RwType;

    /**
     * @var array 权重信息
     */
    public $InstanceNameWeights;

    /**
     * @param string $UniqueVpcId 所属VPC网络ID
     * @param string $UniqueSubnetId 所属子网ID
     * @param array $SecurityGroupIds 安全组id数组
     * @param string $WeightMode 权重模式： system-系统分配，custom-自定义
     * @param string $AutoAddRo 是否自动添加只读实例，yes-是，no-不自动添加
     * @param string $RwType 读写属性： READWRITE,READONLY
     * @param array $InstanceNameWeights 权重信息
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
        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("RwType",$param) and $param["RwType"] !== null) {
            $this->RwType = $param["RwType"];
        }

        if (array_key_exists("InstanceNameWeights",$param) and $param["InstanceNameWeights"] !== null) {
            $this->InstanceNameWeights = [];
            foreach ($param["InstanceNameWeights"] as $key => $value){
                $obj = new InstanceNameWeight();
                $obj->deserialize($value);
                array_push($this->InstanceNameWeights, $obj);
            }
        }
    }
}
