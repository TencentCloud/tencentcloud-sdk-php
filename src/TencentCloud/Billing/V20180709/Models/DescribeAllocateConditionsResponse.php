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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllocateConditions返回参数结构体
 *
 * @method array getBusiness() 获取<p>产品筛选列表</p>
 * @method void setBusiness(array $Business) 设置<p>产品筛选列表</p>
 * @method array getProduct() 获取<p>子产品筛选列表</p>
 * @method void setProduct(array $Product) 设置<p>子产品筛选列表</p>
 * @method array getItem() 获取<p>组件名称筛选列表</p>
 * @method void setItem(array $Item) 设置<p>组件名称筛选列表</p>
 * @method array getRegion() 获取<p>地域筛选列表</p>
 * @method void setRegion(array $Region) 设置<p>地域筛选列表</p>
 * @method array getInstanceType() 获取<p>实例类型筛选列表</p>
 * @method void setInstanceType(array $InstanceType) 设置<p>实例类型筛选列表</p>
 * @method array getPayMode() 获取<p>计费模式筛选列表</p>
 * @method void setPayMode(array $PayMode) 设置<p>计费模式筛选列表</p>
 * @method array getProject() 获取<p>项目筛选列表</p>
 * @method void setProject(array $Project) 设置<p>项目筛选列表</p>
 * @method array getTag() 获取<p>标签筛选列表</p>
 * @method void setTag(array $Tag) 设置<p>标签筛选列表</p>
 * @method array getOwnerUin() 获取<p>使用者 UIN 筛选列表</p>
 * @method void setOwnerUin(array $OwnerUin) 设置<p>使用者 UIN 筛选列表</p>
 * @method array getOperateUin() 获取<p>操作者 UIN 筛选列表</p>
 * @method void setOperateUin(array $OperateUin) 设置<p>操作者 UIN 筛选列表</p>
 * @method array getActionType() 获取<p>交易类型筛选列表</p>
 * @method void setActionType(array $ActionType) 设置<p>交易类型筛选列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAllocateConditionsResponse extends AbstractModel
{
    /**
     * @var array <p>产品筛选列表</p>
     */
    public $Business;

    /**
     * @var array <p>子产品筛选列表</p>
     */
    public $Product;

    /**
     * @var array <p>组件名称筛选列表</p>
     */
    public $Item;

    /**
     * @var array <p>地域筛选列表</p>
     */
    public $Region;

    /**
     * @var array <p>实例类型筛选列表</p>
     */
    public $InstanceType;

    /**
     * @var array <p>计费模式筛选列表</p>
     */
    public $PayMode;

    /**
     * @var array <p>项目筛选列表</p>
     */
    public $Project;

    /**
     * @var array <p>标签筛选列表</p>
     */
    public $Tag;

    /**
     * @var array <p>使用者 UIN 筛选列表</p>
     */
    public $OwnerUin;

    /**
     * @var array <p>操作者 UIN 筛选列表</p>
     */
    public $OperateUin;

    /**
     * @var array <p>交易类型筛选列表</p>
     */
    public $ActionType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Business <p>产品筛选列表</p>
     * @param array $Product <p>子产品筛选列表</p>
     * @param array $Item <p>组件名称筛选列表</p>
     * @param array $Region <p>地域筛选列表</p>
     * @param array $InstanceType <p>实例类型筛选列表</p>
     * @param array $PayMode <p>计费模式筛选列表</p>
     * @param array $Project <p>项目筛选列表</p>
     * @param array $Tag <p>标签筛选列表</p>
     * @param array $OwnerUin <p>使用者 UIN 筛选列表</p>
     * @param array $OperateUin <p>操作者 UIN 筛选列表</p>
     * @param array $ActionType <p>交易类型筛选列表</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
                $obj = new BillBusinessLink();
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

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = [];
            foreach ($param["ActionType"] as $key => $value){
                $obj = new BillActionType();
                $obj->deserialize($value);
                array_push($this->ActionType, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
