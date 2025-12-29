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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GPU 机型
 *
 * @method string getBillingItem() 获取计费项
 * @method void setBillingItem(string $BillingItem) 设置计费项
 * @method string getModel() 获取机型
 * @method void setModel(string $Model) 设置机型
 * @method integer getCU() 获取cu
 * @method void setCU(integer $CU) 设置cu
 * @method string getType() 获取gpu 机型
 * @method void setType(string $Type) 设置gpu 机型
 * @method integer getNum() 获取数量
 * @method void setNum(integer $Num) 设置数量
 * @method integer getGPUMemory() 获取显存
 * @method void setGPUMemory(integer $GPUMemory) 设置显存
 * @method string getInstanceType() 获取机型
 * @method void setInstanceType(string $InstanceType) 设置机型
 * @method integer getSaleStatus() 获取售卖情况（1-缺货，2-低库存，3-充足）
 * @method void setSaleStatus(integer $SaleStatus) 设置售卖情况（1-缺货，2-低库存，3-充足）
 */
class GPUInfo extends AbstractModel
{
    /**
     * @var string 计费项
     */
    public $BillingItem;

    /**
     * @var string 机型
     */
    public $Model;

    /**
     * @var integer cu
     */
    public $CU;

    /**
     * @var string gpu 机型
     */
    public $Type;

    /**
     * @var integer 数量
     */
    public $Num;

    /**
     * @var integer 显存
     */
    public $GPUMemory;

    /**
     * @var string 机型
     */
    public $InstanceType;

    /**
     * @var integer 售卖情况（1-缺货，2-低库存，3-充足）
     */
    public $SaleStatus;

    /**
     * @param string $BillingItem 计费项
     * @param string $Model 机型
     * @param integer $CU cu
     * @param string $Type gpu 机型
     * @param integer $Num 数量
     * @param integer $GPUMemory 显存
     * @param string $InstanceType 机型
     * @param integer $SaleStatus 售卖情况（1-缺货，2-低库存，3-充足）
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
        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("CU",$param) and $param["CU"] !== null) {
            $this->CU = $param["CU"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("GPUMemory",$param) and $param["GPUMemory"] !== null) {
            $this->GPUMemory = $param["GPUMemory"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SaleStatus",$param) and $param["SaleStatus"] !== null) {
            $this->SaleStatus = $param["SaleStatus"];
        }
    }
}
