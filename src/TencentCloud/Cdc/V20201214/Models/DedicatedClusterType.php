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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专用集群配置
 *
 * @method string getDedicatedClusterTypeId() 获取配置id
 * @method void setDedicatedClusterTypeId(string $DedicatedClusterTypeId) 设置配置id
 * @method string getDescription() 获取配置描述，对应描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置配置描述，对应描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取配置名称，对应计算资源类型
 * @method void setName(string $Name) 设置配置名称，对应计算资源类型
 * @method string getCreateTime() 获取创建配置的时间
 * @method void setCreateTime(string $CreateTime) 设置创建配置的时间
 * @method array getSupportedStorageType() 获取支持的存储类型列表
 * @method void setSupportedStorageType(array $SupportedStorageType) 设置支持的存储类型列表
 * @method array getSupportedUplinkGiB() 获取支持的上连交换机的链路传输速率
 * @method void setSupportedUplinkGiB(array $SupportedUplinkGiB) 设置支持的上连交换机的链路传输速率
 * @method array getSupportedInstanceFamily() 获取支持的实例族列表
 * @method void setSupportedInstanceFamily(array $SupportedInstanceFamily) 设置支持的实例族列表
 * @method integer getWeight() 获取地板承重要求(KG)
 * @method void setWeight(integer $Weight) 设置地板承重要求(KG)
 * @method float getPowerDrawKva() 获取功率要求(KW)
 * @method void setPowerDrawKva(float $PowerDrawKva) 设置功率要求(KW)
 * @method string getComputeFormatDesc() 获取显示计算资源规格详情，存储等资源不显示；对应规格
 * @method void setComputeFormatDesc(string $ComputeFormatDesc) 设置显示计算资源规格详情，存储等资源不显示；对应规格
 */
class DedicatedClusterType extends AbstractModel
{
    /**
     * @var string 配置id
     */
    public $DedicatedClusterTypeId;

    /**
     * @var string 配置描述，对应描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 配置名称，对应计算资源类型
     */
    public $Name;

    /**
     * @var string 创建配置的时间
     */
    public $CreateTime;

    /**
     * @var array 支持的存储类型列表
     */
    public $SupportedStorageType;

    /**
     * @var array 支持的上连交换机的链路传输速率
     */
    public $SupportedUplinkGiB;

    /**
     * @var array 支持的实例族列表
     */
    public $SupportedInstanceFamily;

    /**
     * @var integer 地板承重要求(KG)
     */
    public $Weight;

    /**
     * @var float 功率要求(KW)
     */
    public $PowerDrawKva;

    /**
     * @var string 显示计算资源规格详情，存储等资源不显示；对应规格
     */
    public $ComputeFormatDesc;

    /**
     * @param string $DedicatedClusterTypeId 配置id
     * @param string $Description 配置描述，对应描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 配置名称，对应计算资源类型
     * @param string $CreateTime 创建配置的时间
     * @param array $SupportedStorageType 支持的存储类型列表
     * @param array $SupportedUplinkGiB 支持的上连交换机的链路传输速率
     * @param array $SupportedInstanceFamily 支持的实例族列表
     * @param integer $Weight 地板承重要求(KG)
     * @param float $PowerDrawKva 功率要求(KW)
     * @param string $ComputeFormatDesc 显示计算资源规格详情，存储等资源不显示；对应规格
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
        if (array_key_exists("DedicatedClusterTypeId",$param) and $param["DedicatedClusterTypeId"] !== null) {
            $this->DedicatedClusterTypeId = $param["DedicatedClusterTypeId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SupportedStorageType",$param) and $param["SupportedStorageType"] !== null) {
            $this->SupportedStorageType = $param["SupportedStorageType"];
        }

        if (array_key_exists("SupportedUplinkGiB",$param) and $param["SupportedUplinkGiB"] !== null) {
            $this->SupportedUplinkGiB = $param["SupportedUplinkGiB"];
        }

        if (array_key_exists("SupportedInstanceFamily",$param) and $param["SupportedInstanceFamily"] !== null) {
            $this->SupportedInstanceFamily = $param["SupportedInstanceFamily"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("PowerDrawKva",$param) and $param["PowerDrawKva"] !== null) {
            $this->PowerDrawKva = $param["PowerDrawKva"];
        }

        if (array_key_exists("ComputeFormatDesc",$param) and $param["ComputeFormatDesc"] !== null) {
            $this->ComputeFormatDesc = $param["ComputeFormatDesc"];
        }
    }
}
