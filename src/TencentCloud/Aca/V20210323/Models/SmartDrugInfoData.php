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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能用药请求数据
 *
 * @method string getDrugName() 获取药品名称
 * @method void setDrugName(string $DrugName) 设置药品名称
 * @method string getSpecifications() 获取规格
 * @method void setSpecifications(string $Specifications) 设置规格
 * @method string getApprovalNumber() 获取批准文号
 * @method void setApprovalNumber(string $ApprovalNumber) 设置批准文号
 * @method string getManufacturer() 获取生产厂家
 * @method void setManufacturer(string $Manufacturer) 设置生产厂家
 * @method string getDrugId() 获取药品ID
 * @method void setDrugId(string $DrugId) 设置药品ID
 * @method string getDiagnosis() 获取诊断
 * @method void setDiagnosis(string $Diagnosis) 设置诊断
 * @method float getAge() 获取年龄
 * @method void setAge(float $Age) 设置年龄
 */
class SmartDrugInfoData extends AbstractModel
{
    /**
     * @var string 药品名称
     */
    public $DrugName;

    /**
     * @var string 规格
     */
    public $Specifications;

    /**
     * @var string 批准文号
     */
    public $ApprovalNumber;

    /**
     * @var string 生产厂家
     */
    public $Manufacturer;

    /**
     * @var string 药品ID
     */
    public $DrugId;

    /**
     * @var string 诊断
     */
    public $Diagnosis;

    /**
     * @var float 年龄
     */
    public $Age;

    /**
     * @param string $DrugName 药品名称
     * @param string $Specifications 规格
     * @param string $ApprovalNumber 批准文号
     * @param string $Manufacturer 生产厂家
     * @param string $DrugId 药品ID
     * @param string $Diagnosis 诊断
     * @param float $Age 年龄
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
        if (array_key_exists("DrugName",$param) and $param["DrugName"] !== null) {
            $this->DrugName = $param["DrugName"];
        }

        if (array_key_exists("Specifications",$param) and $param["Specifications"] !== null) {
            $this->Specifications = $param["Specifications"];
        }

        if (array_key_exists("ApprovalNumber",$param) and $param["ApprovalNumber"] !== null) {
            $this->ApprovalNumber = $param["ApprovalNumber"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("DrugId",$param) and $param["DrugId"] !== null) {
            $this->DrugId = $param["DrugId"];
        }

        if (array_key_exists("Diagnosis",$param) and $param["Diagnosis"] !== null) {
            $this->Diagnosis = $param["Diagnosis"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }
    }
}
