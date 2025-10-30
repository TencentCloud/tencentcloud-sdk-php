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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点规格类型
 *
 * @method string getInstanceType() 获取规格
 * @method void setInstanceType(string $InstanceType) 设置规格
 * @method integer getCpu() 获取4
 * @method void setCpu(integer $Cpu) 设置4
 * @method integer getMemory() 获取8，单位G
 * @method void setMemory(integer $Memory) 设置8，单位G
 * @method integer getOrder() 获取排序，越小排的越前
 * @method void setOrder(integer $Order) 设置排序，越小排的越前
 * @method integer getNum() 获取数量
 * @method void setNum(integer $Num) 设置数量
 * @method string getSellOutReason() 获取售罄原因
 * @method void setSellOutReason(string $SellOutReason) 设置售罄原因
 * @method array getSystemDisk() 获取系统盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemDisk(array $SystemDisk) 设置系统盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataDisk() 获取数据盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDisk(array $DataDisk) 设置数据盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLocalDataDisk() 获取本地数据盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalDataDisk(array $LocalDataDisk) 设置本地数据盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSoldOutReason() 获取售罄原因
 * @method void setSoldOutReason(string $SoldOutReason) 设置售罄原因
 * @method string getInstanceFamily() 获取机型类别
 * @method void setInstanceFamily(string $InstanceFamily) 设置机型类别
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getNodeType() 获取节点类型
 * @method void setNodeType(string $NodeType) 设置节点类型
 * @method string getType() 获取类别
 * @method void setType(string $Type) 设置类别
 * @method string getTypeName() 获取类别名称
 * @method void setTypeName(string $TypeName) 设置类别名称
 * @method string getFamilyName() 获取类别分类
 * @method void setFamilyName(string $FamilyName) 设置类别分类
 * @method string getCpuType() 获取cpu类型
 * @method void setCpuType(string $CpuType) 设置cpu类型
 * @method string getRemark() 获取售罄 RunOut、库存少 Less、充足 Enough
 * @method void setRemark(string $Remark) 设置售罄 RunOut、库存少 Less、充足 Enough
 * @method float getOriginPrice() 获取原价
 * @method void setOriginPrice(float $OriginPrice) 设置原价
 * @method array getPrepaidUnderwritePeriods() 获取包销计费机型支持的购买时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrepaidUnderwritePeriods(array $PrepaidUnderwritePeriods) 设置包销计费机型支持的购买时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGpuDesc() 获取GPU信息
 * @method void setGpuDesc(string $GpuDesc) 设置GPU信息
 */
class NodeSpecInstanceType extends AbstractModel
{
    /**
     * @var string 规格
     */
    public $InstanceType;

    /**
     * @var integer 4
     */
    public $Cpu;

    /**
     * @var integer 8，单位G
     */
    public $Memory;

    /**
     * @var integer 排序，越小排的越前
     */
    public $Order;

    /**
     * @var integer 数量
     */
    public $Num;

    /**
     * @var string 售罄原因
     */
    public $SellOutReason;

    /**
     * @var array 系统盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemDisk;

    /**
     * @var array 数据盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDisk;

    /**
     * @var array 本地数据盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalDataDisk;

    /**
     * @var string 售罄原因
     */
    public $SoldOutReason;

    /**
     * @var string 机型类别
     */
    public $InstanceFamily;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string 节点类型
     */
    public $NodeType;

    /**
     * @var string 类别
     */
    public $Type;

    /**
     * @var string 类别名称
     */
    public $TypeName;

    /**
     * @var string 类别分类
     */
    public $FamilyName;

    /**
     * @var string cpu类型
     */
    public $CpuType;

    /**
     * @var string 售罄 RunOut、库存少 Less、充足 Enough
     */
    public $Remark;

    /**
     * @var float 原价
     */
    public $OriginPrice;

    /**
     * @var array 包销计费机型支持的购买时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrepaidUnderwritePeriods;

    /**
     * @var string GPU信息
     */
    public $GpuDesc;

    /**
     * @param string $InstanceType 规格
     * @param integer $Cpu 4
     * @param integer $Memory 8，单位G
     * @param integer $Order 排序，越小排的越前
     * @param integer $Num 数量
     * @param string $SellOutReason 售罄原因
     * @param array $SystemDisk 系统盘
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataDisk 数据盘
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LocalDataDisk 本地数据盘
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SoldOutReason 售罄原因
     * @param string $InstanceFamily 机型类别
     * @param string $NodeName 节点名称
     * @param string $NodeType 节点类型
     * @param string $Type 类别
     * @param string $TypeName 类别名称
     * @param string $FamilyName 类别分类
     * @param string $CpuType cpu类型
     * @param string $Remark 售罄 RunOut、库存少 Less、充足 Enough
     * @param float $OriginPrice 原价
     * @param array $PrepaidUnderwritePeriods 包销计费机型支持的购买时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GpuDesc GPU信息
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("SellOutReason",$param) and $param["SellOutReason"] !== null) {
            $this->SellOutReason = $param["SellOutReason"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = [];
            foreach ($param["SystemDisk"] as $key => $value){
                $obj = new NodeSpecDisk();
                $obj->deserialize($value);
                array_push($this->SystemDisk, $obj);
            }
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = [];
            foreach ($param["DataDisk"] as $key => $value){
                $obj = new NodeSpecDisk();
                $obj->deserialize($value);
                array_push($this->DataDisk, $obj);
            }
        }

        if (array_key_exists("LocalDataDisk",$param) and $param["LocalDataDisk"] !== null) {
            $this->LocalDataDisk = [];
            foreach ($param["LocalDataDisk"] as $key => $value){
                $obj = new NodeSpecDisk();
                $obj->deserialize($value);
                array_push($this->LocalDataDisk, $obj);
            }
        }

        if (array_key_exists("SoldOutReason",$param) and $param["SoldOutReason"] !== null) {
            $this->SoldOutReason = $param["SoldOutReason"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("FamilyName",$param) and $param["FamilyName"] !== null) {
            $this->FamilyName = $param["FamilyName"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("OriginPrice",$param) and $param["OriginPrice"] !== null) {
            $this->OriginPrice = $param["OriginPrice"];
        }

        if (array_key_exists("PrepaidUnderwritePeriods",$param) and $param["PrepaidUnderwritePeriods"] !== null) {
            $this->PrepaidUnderwritePeriods = $param["PrepaidUnderwritePeriods"];
        }

        if (array_key_exists("GpuDesc",$param) and $param["GpuDesc"] !== null) {
            $this->GpuDesc = $param["GpuDesc"];
        }
    }
}
