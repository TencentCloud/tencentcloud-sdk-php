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
 * 专用集群子订单
 *
 * @method string getDedicatedClusterTypeId() 获取专用集群类型id
 * @method void setDedicatedClusterTypeId(string $DedicatedClusterTypeId) 设置专用集群类型id
 * @method array getSupportedStorageType() 获取支持的存储类型列表
 * @method void setSupportedStorageType(array $SupportedStorageType) 设置支持的存储类型列表
 * @method array getSupportedUplinkSpeed() 获取支持的上连交换机的链路传输速率(GiB)
 * @method void setSupportedUplinkSpeed(array $SupportedUplinkSpeed) 设置支持的上连交换机的链路传输速率(GiB)
 * @method array getSupportedInstanceFamily() 获取支持的实例族列表
 * @method void setSupportedInstanceFamily(array $SupportedInstanceFamily) 设置支持的实例族列表
 * @method integer getWeight() 获取地板承重要求(KG)
 * @method void setWeight(integer $Weight) 设置地板承重要求(KG)
 * @method float getPowerDraw() 获取功率要求(KW)
 * @method void setPowerDraw(float $PowerDraw) 设置功率要求(KW)
 * @method string getSubOrderStatus() 获取订单状态
 * @method void setSubOrderStatus(string $SubOrderStatus) 设置订单状态
 * @method string getCreateTime() 获取订单创建的时间
 * @method void setCreateTime(string $CreateTime) 设置订单创建的时间
 * @method string getSubOrderId() 获取子订单ID
 * @method void setSubOrderId(string $SubOrderId) 设置子订单ID
 * @method integer getCount() 获取关联的集群规格数量
 * @method void setCount(integer $Count) 设置关联的集群规格数量
 * @method string getName() 获取规格简单描述
 * @method void setName(string $Name) 设置规格简单描述
 * @method string getDescription() 获取规格详细描述
 * @method void setDescription(string $Description) 设置规格详细描述
 * @method integer getTotalCpu() 获取CPU数
 * @method void setTotalCpu(integer $TotalCpu) 设置CPU数
 * @method integer getTotalMem() 获取内存数
 * @method void setTotalMem(integer $TotalMem) 设置内存数
 * @method integer getTotalGpu() 获取GPU数
 * @method void setTotalGpu(integer $TotalGpu) 设置GPU数
 * @method string getTypeName() 获取规格英文名
 * @method void setTypeName(string $TypeName) 设置规格英文名
 * @method string getComputeFormat() 获取规格展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputeFormat(string $ComputeFormat) 设置规格展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTypeFamily() 获取规格类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeFamily(string $TypeFamily) 设置规格类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubOrderPayStatus() 获取0未支付，1已支付
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubOrderPayStatus(integer $SubOrderPayStatus) 设置0未支付，1已支付
注意：此字段可能返回 null，表示取不到有效值。
 */
class DedicatedClusterOrderItem extends AbstractModel
{
    /**
     * @var string 专用集群类型id
     */
    public $DedicatedClusterTypeId;

    /**
     * @var array 支持的存储类型列表
     */
    public $SupportedStorageType;

    /**
     * @var array 支持的上连交换机的链路传输速率(GiB)
     */
    public $SupportedUplinkSpeed;

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
    public $PowerDraw;

    /**
     * @var string 订单状态
     */
    public $SubOrderStatus;

    /**
     * @var string 订单创建的时间
     */
    public $CreateTime;

    /**
     * @var string 子订单ID
     */
    public $SubOrderId;

    /**
     * @var integer 关联的集群规格数量
     */
    public $Count;

    /**
     * @var string 规格简单描述
     */
    public $Name;

    /**
     * @var string 规格详细描述
     */
    public $Description;

    /**
     * @var integer CPU数
     */
    public $TotalCpu;

    /**
     * @var integer 内存数
     */
    public $TotalMem;

    /**
     * @var integer GPU数
     */
    public $TotalGpu;

    /**
     * @var string 规格英文名
     */
    public $TypeName;

    /**
     * @var string 规格展示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComputeFormat;

    /**
     * @var string 规格类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeFamily;

    /**
     * @var integer 0未支付，1已支付
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubOrderPayStatus;

    /**
     * @param string $DedicatedClusterTypeId 专用集群类型id
     * @param array $SupportedStorageType 支持的存储类型列表
     * @param array $SupportedUplinkSpeed 支持的上连交换机的链路传输速率(GiB)
     * @param array $SupportedInstanceFamily 支持的实例族列表
     * @param integer $Weight 地板承重要求(KG)
     * @param float $PowerDraw 功率要求(KW)
     * @param string $SubOrderStatus 订单状态
     * @param string $CreateTime 订单创建的时间
     * @param string $SubOrderId 子订单ID
     * @param integer $Count 关联的集群规格数量
     * @param string $Name 规格简单描述
     * @param string $Description 规格详细描述
     * @param integer $TotalCpu CPU数
     * @param integer $TotalMem 内存数
     * @param integer $TotalGpu GPU数
     * @param string $TypeName 规格英文名
     * @param string $ComputeFormat 规格展示
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TypeFamily 规格类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubOrderPayStatus 0未支付，1已支付
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("SupportedStorageType",$param) and $param["SupportedStorageType"] !== null) {
            $this->SupportedStorageType = $param["SupportedStorageType"];
        }

        if (array_key_exists("SupportedUplinkSpeed",$param) and $param["SupportedUplinkSpeed"] !== null) {
            $this->SupportedUplinkSpeed = $param["SupportedUplinkSpeed"];
        }

        if (array_key_exists("SupportedInstanceFamily",$param) and $param["SupportedInstanceFamily"] !== null) {
            $this->SupportedInstanceFamily = $param["SupportedInstanceFamily"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("PowerDraw",$param) and $param["PowerDraw"] !== null) {
            $this->PowerDraw = $param["PowerDraw"];
        }

        if (array_key_exists("SubOrderStatus",$param) and $param["SubOrderStatus"] !== null) {
            $this->SubOrderStatus = $param["SubOrderStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SubOrderId",$param) and $param["SubOrderId"] !== null) {
            $this->SubOrderId = $param["SubOrderId"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TotalCpu",$param) and $param["TotalCpu"] !== null) {
            $this->TotalCpu = $param["TotalCpu"];
        }

        if (array_key_exists("TotalMem",$param) and $param["TotalMem"] !== null) {
            $this->TotalMem = $param["TotalMem"];
        }

        if (array_key_exists("TotalGpu",$param) and $param["TotalGpu"] !== null) {
            $this->TotalGpu = $param["TotalGpu"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("ComputeFormat",$param) and $param["ComputeFormat"] !== null) {
            $this->ComputeFormat = $param["ComputeFormat"];
        }

        if (array_key_exists("TypeFamily",$param) and $param["TypeFamily"] !== null) {
            $this->TypeFamily = $param["TypeFamily"];
        }

        if (array_key_exists("SubOrderPayStatus",$param) and $param["SubOrderPayStatus"] !== null) {
            $this->SubOrderPayStatus = $param["SubOrderPayStatus"];
        }
    }
}
