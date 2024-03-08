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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllocationBillConditions返回参数结构体
 *
 * @method array getBusiness() 获取产品筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusiness(array $Business) 设置产品筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProduct() 获取子产品筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProduct(array $Product) 设置子产品筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItem() 获取组件名称筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItem(array $Item) 设置组件名称筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRegion() 获取地域筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(array $Region) 设置地域筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceType() 获取实例类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(array $InstanceType) 设置实例类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPayMode() 获取计费模式筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(array $PayMode) 设置计费模式筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProject() 获取项目筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProject(array $Project) 设置项目筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTag() 获取标签筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(array $Tag) 设置标签筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOwnerUin() 获取使用者 UIN 筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(array $OwnerUin) 设置使用者 UIN 筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOperateUin() 获取操作者 UIN 筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperateUin(array $OperateUin) 设置操作者 UIN 筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBillDay() 获取日期筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillDay(array $BillDay) 设置日期筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getActionType() 获取交易类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionType(array $ActionType) 设置交易类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getComponent() 获取组件类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponent(array $Component) 设置组件类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZone() 获取可用区筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(array $Zone) 设置可用区筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllocationTreeNode() 获取分账单元筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllocationTreeNode(array $AllocationTreeNode) 设置分账单元筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAllocationBillConditionsResponse extends AbstractModel
{
    /**
     * @var array 产品筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Business;

    /**
     * @var array 子产品筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Product;

    /**
     * @var array 组件名称筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Item;

    /**
     * @var array 地域筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var array 实例类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var array 计费模式筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var array 项目筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Project;

    /**
     * @var array 标签筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var array 使用者 UIN 筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var array 操作者 UIN 筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperateUin;

    /**
     * @var array 日期筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillDay;

    /**
     * @var array 交易类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionType;

    /**
     * @var array 组件类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Component;

    /**
     * @var array 可用区筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var array 分账单元筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllocationTreeNode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Business 产品筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Product 子产品筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Item 组件名称筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Region 地域筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceType 实例类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PayMode 计费模式筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Project 项目筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tag 标签筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OwnerUin 使用者 UIN 筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OperateUin 操作者 UIN 筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BillDay 日期筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ActionType 交易类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Component 组件类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Zone 可用区筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllocationTreeNode 分账单元筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = [];
            foreach ($param["Business"] as $key => $value){
                $obj = new BillBusiness();
                $obj->deserialize($value);
                array_push($this->Business, $obj);
            }
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = [];
            foreach ($param["Product"] as $key => $value){
                $obj = new BillProduct();
                $obj->deserialize($value);
                array_push($this->Product, $obj);
            }
        }

        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = [];
            foreach ($param["Item"] as $key => $value){
                $obj = new BillItem();
                $obj->deserialize($value);
                array_push($this->Item, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = [];
            foreach ($param["Region"] as $key => $value){
                $obj = new BillRegion();
                $obj->deserialize($value);
                array_push($this->Region, $obj);
            }
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = [];
            foreach ($param["InstanceType"] as $key => $value){
                $obj = new BillInstanceType();
                $obj->deserialize($value);
                array_push($this->InstanceType, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = [];
            foreach ($param["PayMode"] as $key => $value){
                $obj = new BillPayMode();
                $obj->deserialize($value);
                array_push($this->PayMode, $obj);
            }
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = [];
            foreach ($param["Project"] as $key => $value){
                $obj = new BillProject();
                $obj->deserialize($value);
                array_push($this->Project, $obj);
            }
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new BillTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = [];
            foreach ($param["OwnerUin"] as $key => $value){
                $obj = new BillOwnerUin();
                $obj->deserialize($value);
                array_push($this->OwnerUin, $obj);
            }
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = [];
            foreach ($param["OperateUin"] as $key => $value){
                $obj = new BillOperateUin();
                $obj->deserialize($value);
                array_push($this->OperateUin, $obj);
            }
        }

        if (array_key_exists("BillDay",$param) and $param["BillDay"] !== null) {
            $this->BillDay = [];
            foreach ($param["BillDay"] as $key => $value){
                $obj = new BillDays();
                $obj->deserialize($value);
                array_push($this->BillDay, $obj);
            }
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = [];
            foreach ($param["ActionType"] as $key => $value){
                $obj = new BillActionType();
                $obj->deserialize($value);
                array_push($this->ActionType, $obj);
            }
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = [];
            foreach ($param["Component"] as $key => $value){
                $obj = new BillComponent();
                $obj->deserialize($value);
                array_push($this->Component, $obj);
            }
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = [];
            foreach ($param["Zone"] as $key => $value){
                $obj = new BillZoneId();
                $obj->deserialize($value);
                array_push($this->Zone, $obj);
            }
        }

        if (array_key_exists("AllocationTreeNode",$param) and $param["AllocationTreeNode"] !== null) {
            $this->AllocationTreeNode = [];
            foreach ($param["AllocationTreeNode"] as $key => $value){
                $obj = new AllocationTreeNode();
                $obj->deserialize($value);
                array_push($this->AllocationTreeNode, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
