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
 * @method string getInstanceType() 获取<p>规格</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>规格</p>
 * @method integer getCpu() 获取<p>4</p>
 * @method void setCpu(integer $Cpu) 设置<p>4</p>
 * @method integer getMemory() 获取<p>8，单位G</p>
 * @method void setMemory(integer $Memory) 设置<p>8，单位G</p>
 * @method integer getOrder() 获取<p>排序，越小排的越前</p>
 * @method void setOrder(integer $Order) 设置<p>排序，越小排的越前</p>
 * @method integer getNum() 获取<p>数量</p>
 * @method void setNum(integer $Num) 设置<p>数量</p>
 * @method string getSellOutReason() 获取<p>售罄原因</p>
 * @method void setSellOutReason(string $SellOutReason) 设置<p>售罄原因</p>
 * @method array getSystemDisk() 获取<p>系统盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemDisk(array $SystemDisk) 设置<p>系统盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataDisk() 获取<p>数据盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDisk(array $DataDisk) 设置<p>数据盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLocalDataDisk() 获取<p>本地数据盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalDataDisk(array $LocalDataDisk) 设置<p>本地数据盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSoldOutReason() 获取<p>售罄原因</p>
 * @method void setSoldOutReason(string $SoldOutReason) 设置<p>售罄原因</p>
 * @method string getInstanceFamily() 获取<p>机型类别</p>
 * @method void setInstanceFamily(string $InstanceFamily) 设置<p>机型类别</p>
 * @method string getNodeName() 获取<p>节点名称</p>
 * @method void setNodeName(string $NodeName) 设置<p>节点名称</p>
 * @method string getNodeType() 获取<p>节点类型</p>
 * @method void setNodeType(string $NodeType) 设置<p>节点类型</p>
 * @method string getType() 获取<p>类别</p>
 * @method void setType(string $Type) 设置<p>类别</p>
 * @method string getTypeName() 获取<p>类别名称</p>
 * @method void setTypeName(string $TypeName) 设置<p>类别名称</p>
 * @method string getFamilyName() 获取<p>类别分类</p>
 * @method void setFamilyName(string $FamilyName) 设置<p>类别分类</p>
 * @method string getCpuType() 获取<p>cpu类型</p>
 * @method void setCpuType(string $CpuType) 设置<p>cpu类型</p>
 * @method string getRemark() 获取<p>售罄 RunOut、库存少 Less、充足 Enough</p>
 * @method void setRemark(string $Remark) 设置<p>售罄 RunOut、库存少 Less、充足 Enough</p>
 * @method float getOriginPrice() 获取<p>原价</p>
 * @method void setOriginPrice(float $OriginPrice) 设置<p>原价</p>
 * @method array getPrepaidUnderwritePeriods() 获取<p>包销计费机型支持的购买时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrepaidUnderwritePeriods(array $PrepaidUnderwritePeriods) 设置<p>包销计费机型支持的购买时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGpuDesc() 获取<p>GPU信息</p>
 * @method void setGpuDesc(string $GpuDesc) 设置<p>GPU信息</p>
 * @method integer getQuotaNum() 获取<p>配额数量</p>
 * @method void setQuotaNum(integer $QuotaNum) 设置<p>配额数量</p>
 * @method string getQuotaUnit() 获取<p>配额单位</p>
 * @method void setQuotaUnit(string $QuotaUnit) 设置<p>配额单位</p>
 */
class NodeSpecInstanceType extends AbstractModel
{
    /**
     * @var string <p>规格</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>4</p>
     */
    public $Cpu;

    /**
     * @var integer <p>8，单位G</p>
     */
    public $Memory;

    /**
     * @var integer <p>排序，越小排的越前</p>
     */
    public $Order;

    /**
     * @var integer <p>数量</p>
     */
    public $Num;

    /**
     * @var string <p>售罄原因</p>
     */
    public $SellOutReason;

    /**
     * @var array <p>系统盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemDisk;

    /**
     * @var array <p>数据盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDisk;

    /**
     * @var array <p>本地数据盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalDataDisk;

    /**
     * @var string <p>售罄原因</p>
     */
    public $SoldOutReason;

    /**
     * @var string <p>机型类别</p>
     */
    public $InstanceFamily;

    /**
     * @var string <p>节点名称</p>
     */
    public $NodeName;

    /**
     * @var string <p>节点类型</p>
     */
    public $NodeType;

    /**
     * @var string <p>类别</p>
     */
    public $Type;

    /**
     * @var string <p>类别名称</p>
     */
    public $TypeName;

    /**
     * @var string <p>类别分类</p>
     */
    public $FamilyName;

    /**
     * @var string <p>cpu类型</p>
     */
    public $CpuType;

    /**
     * @var string <p>售罄 RunOut、库存少 Less、充足 Enough</p>
     */
    public $Remark;

    /**
     * @var float <p>原价</p>
     */
    public $OriginPrice;

    /**
     * @var array <p>包销计费机型支持的购买时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrepaidUnderwritePeriods;

    /**
     * @var string <p>GPU信息</p>
     */
    public $GpuDesc;

    /**
     * @var integer <p>配额数量</p>
     */
    public $QuotaNum;

    /**
     * @var string <p>配额单位</p>
     */
    public $QuotaUnit;

    /**
     * @param string $InstanceType <p>规格</p>
     * @param integer $Cpu <p>4</p>
     * @param integer $Memory <p>8，单位G</p>
     * @param integer $Order <p>排序，越小排的越前</p>
     * @param integer $Num <p>数量</p>
     * @param string $SellOutReason <p>售罄原因</p>
     * @param array $SystemDisk <p>系统盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataDisk <p>数据盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LocalDataDisk <p>本地数据盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SoldOutReason <p>售罄原因</p>
     * @param string $InstanceFamily <p>机型类别</p>
     * @param string $NodeName <p>节点名称</p>
     * @param string $NodeType <p>节点类型</p>
     * @param string $Type <p>类别</p>
     * @param string $TypeName <p>类别名称</p>
     * @param string $FamilyName <p>类别分类</p>
     * @param string $CpuType <p>cpu类型</p>
     * @param string $Remark <p>售罄 RunOut、库存少 Less、充足 Enough</p>
     * @param float $OriginPrice <p>原价</p>
     * @param array $PrepaidUnderwritePeriods <p>包销计费机型支持的购买时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GpuDesc <p>GPU信息</p>
     * @param integer $QuotaNum <p>配额数量</p>
     * @param string $QuotaUnit <p>配额单位</p>
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

        if (array_key_exists("QuotaNum",$param) and $param["QuotaNum"] !== null) {
            $this->QuotaNum = $param["QuotaNum"];
        }

        if (array_key_exists("QuotaUnit",$param) and $param["QuotaUnit"] !== null) {
            $this->QuotaUnit = $param["QuotaUnit"];
        }
    }
}
