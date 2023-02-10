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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Apollo 环境配置参数
 *
 * @method string getName() 获取环境名称
 * @method void setName(string $Name) 设置环境名称
 * @method string getEngineResourceSpec() 获取环境内引擎的节点规格 ID
-1C2G
-2C4G
兼容原spec-xxxxxx形式的规格ID
 * @method void setEngineResourceSpec(string $EngineResourceSpec) 设置环境内引擎的节点规格 ID
-1C2G
-2C4G
兼容原spec-xxxxxx形式的规格ID
 * @method integer getEngineNodeNum() 获取环境内引擎的节点数量
 * @method void setEngineNodeNum(integer $EngineNodeNum) 设置环境内引擎的节点数量
 * @method integer getStorageCapacity() 获取配置存储空间大小，以GB为单位
 * @method void setStorageCapacity(integer $StorageCapacity) 设置配置存储空间大小，以GB为单位
 * @method string getVpcId() 获取VPC ID。在 VPC 的子网内分配一个 IP 作为 ConfigServer 的访问地址
 * @method void setVpcId(string $VpcId) 设置VPC ID。在 VPC 的子网内分配一个 IP 作为 ConfigServer 的访问地址
 * @method string getSubnetId() 获取子网 ID。在 VPC 的子网内分配一个 IP 作为 ConfigServer 的访问地址
 * @method void setSubnetId(string $SubnetId) 设置子网 ID。在 VPC 的子网内分配一个 IP 作为 ConfigServer 的访问地址
 * @method string getEnvDesc() 获取环境描述
 * @method void setEnvDesc(string $EnvDesc) 设置环境描述
 */
class ApolloEnvParam extends AbstractModel
{
    /**
     * @var string 环境名称
     */
    public $Name;

    /**
     * @var string 环境内引擎的节点规格 ID
-1C2G
-2C4G
兼容原spec-xxxxxx形式的规格ID
     */
    public $EngineResourceSpec;

    /**
     * @var integer 环境内引擎的节点数量
     */
    public $EngineNodeNum;

    /**
     * @var integer 配置存储空间大小，以GB为单位
     */
    public $StorageCapacity;

    /**
     * @var string VPC ID。在 VPC 的子网内分配一个 IP 作为 ConfigServer 的访问地址
     */
    public $VpcId;

    /**
     * @var string 子网 ID。在 VPC 的子网内分配一个 IP 作为 ConfigServer 的访问地址
     */
    public $SubnetId;

    /**
     * @var string 环境描述
     */
    public $EnvDesc;

    /**
     * @param string $Name 环境名称
     * @param string $EngineResourceSpec 环境内引擎的节点规格 ID
-1C2G
-2C4G
兼容原spec-xxxxxx形式的规格ID
     * @param integer $EngineNodeNum 环境内引擎的节点数量
     * @param integer $StorageCapacity 配置存储空间大小，以GB为单位
     * @param string $VpcId VPC ID。在 VPC 的子网内分配一个 IP 作为 ConfigServer 的访问地址
     * @param string $SubnetId 子网 ID。在 VPC 的子网内分配一个 IP 作为 ConfigServer 的访问地址
     * @param string $EnvDesc 环境描述
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

        if (array_key_exists("EngineResourceSpec",$param) and $param["EngineResourceSpec"] !== null) {
            $this->EngineResourceSpec = $param["EngineResourceSpec"];
        }

        if (array_key_exists("EngineNodeNum",$param) and $param["EngineNodeNum"] !== null) {
            $this->EngineNodeNum = $param["EngineNodeNum"];
        }

        if (array_key_exists("StorageCapacity",$param) and $param["StorageCapacity"] !== null) {
            $this->StorageCapacity = $param["StorageCapacity"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("EnvDesc",$param) and $param["EnvDesc"] !== null) {
            $this->EnvDesc = $param["EnvDesc"];
        }
    }
}
