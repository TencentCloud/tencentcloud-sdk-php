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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImageAccelerationService请求参数结构体
 *
 * @method string getRegistryId() 获取实例Id
 * @method void setRegistryId(string $RegistryId) 设置实例Id
 * @method string getVpcId() 获取创建CFS的归属的VPCID
 * @method void setVpcId(string $VpcId) 设置创建CFS的归属的VPCID
 * @method string getSubnetId() 获取创建CFS的归属的子网ID
 * @method void setSubnetId(string $SubnetId) 设置创建CFS的归属的子网ID
 * @method string getStorageType() 获取创建CFS的存储类型，其中 SD 为标准型存储， HP为性能存储。
 * @method void setStorageType(string $StorageType) 设置创建CFS的存储类型，其中 SD 为标准型存储， HP为性能存储。
 * @method string getPGroupId() 获取权限组 ID
 * @method void setPGroupId(string $PGroupId) 设置权限组 ID
 * @method string getZone() 获取可用区名称，例如ap-beijing-1，请参考 概览 文档中的地域与可用区列表
 * @method void setZone(string $Zone) 设置可用区名称，例如ap-beijing-1，请参考 概览 文档中的地域与可用区列表
 * @method TagSpecification getTagSpecification() 获取云标签描述
 * @method void setTagSpecification(TagSpecification $TagSpecification) 设置云标签描述
 */
class CreateImageAccelerationServiceRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $RegistryId;

    /**
     * @var string 创建CFS的归属的VPCID
     */
    public $VpcId;

    /**
     * @var string 创建CFS的归属的子网ID
     */
    public $SubnetId;

    /**
     * @var string 创建CFS的存储类型，其中 SD 为标准型存储， HP为性能存储。
     */
    public $StorageType;

    /**
     * @var string 权限组 ID
     */
    public $PGroupId;

    /**
     * @var string 可用区名称，例如ap-beijing-1，请参考 概览 文档中的地域与可用区列表
     */
    public $Zone;

    /**
     * @var TagSpecification 云标签描述
     */
    public $TagSpecification;

    /**
     * @param string $RegistryId 实例Id
     * @param string $VpcId 创建CFS的归属的VPCID
     * @param string $SubnetId 创建CFS的归属的子网ID
     * @param string $StorageType 创建CFS的存储类型，其中 SD 为标准型存储， HP为性能存储。
     * @param string $PGroupId 权限组 ID
     * @param string $Zone 可用区名称，例如ap-beijing-1，请参考 概览 文档中的地域与可用区列表
     * @param TagSpecification $TagSpecification 云标签描述
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = new TagSpecification();
            $this->TagSpecification->deserialize($param["TagSpecification"]);
        }
    }
}
