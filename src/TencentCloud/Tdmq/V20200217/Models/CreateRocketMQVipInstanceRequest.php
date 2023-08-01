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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQVipInstance请求参数结构体
 *
 * @method string getName() 获取实例名称
 * @method void setName(string $Name) 设置实例名称
 * @method string getSpec() 获取实例规格：
基础型，rocket-vip-basic-1
标准型，rocket-vip-basic-2
高阶Ⅰ型，rocket-vip-basic-3
高阶Ⅱ型，rocket-vip-basic-4
 * @method void setSpec(string $Spec) 设置实例规格：
基础型，rocket-vip-basic-1
标准型，rocket-vip-basic-2
高阶Ⅰ型，rocket-vip-basic-3
高阶Ⅱ型，rocket-vip-basic-4
 * @method integer getNodeCount() 获取节点数量，最小2，最大20
 * @method void setNodeCount(integer $NodeCount) 设置节点数量，最小2，最大20
 * @method integer getStorageSize() 获取单节点存储空间，GB为单位，最低200GB
 * @method void setStorageSize(integer $StorageSize) 设置单节点存储空间，GB为单位，最低200GB
 * @method array getZoneIds() 获取节点部署的区域ID列表，如广州一区，则是100001，具体可查询腾讯云官网
 * @method void setZoneIds(array $ZoneIds) 设置节点部署的区域ID列表，如广州一区，则是100001，具体可查询腾讯云官网
 * @method VpcInfo getVpcInfo() 获取VPC信息
 * @method void setVpcInfo(VpcInfo $VpcInfo) 设置VPC信息
 * @method integer getTimeSpan() 获取购买时长，月为单位
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长，月为单位
 */
class CreateRocketMQVipInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $Name;

    /**
     * @var string 实例规格：
基础型，rocket-vip-basic-1
标准型，rocket-vip-basic-2
高阶Ⅰ型，rocket-vip-basic-3
高阶Ⅱ型，rocket-vip-basic-4
     */
    public $Spec;

    /**
     * @var integer 节点数量，最小2，最大20
     */
    public $NodeCount;

    /**
     * @var integer 单节点存储空间，GB为单位，最低200GB
     */
    public $StorageSize;

    /**
     * @var array 节点部署的区域ID列表，如广州一区，则是100001，具体可查询腾讯云官网
     */
    public $ZoneIds;

    /**
     * @var VpcInfo VPC信息
     */
    public $VpcInfo;

    /**
     * @var integer 购买时长，月为单位
     */
    public $TimeSpan;

    /**
     * @param string $Name 实例名称
     * @param string $Spec 实例规格：
基础型，rocket-vip-basic-1
标准型，rocket-vip-basic-2
高阶Ⅰ型，rocket-vip-basic-3
高阶Ⅱ型，rocket-vip-basic-4
     * @param integer $NodeCount 节点数量，最小2，最大20
     * @param integer $StorageSize 单节点存储空间，GB为单位，最低200GB
     * @param array $ZoneIds 节点部署的区域ID列表，如广州一区，则是100001，具体可查询腾讯云官网
     * @param VpcInfo $VpcInfo VPC信息
     * @param integer $TimeSpan 购买时长，月为单位
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = new VpcInfo();
            $this->VpcInfo->deserialize($param["VpcInfo"]);
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }
    }
}
