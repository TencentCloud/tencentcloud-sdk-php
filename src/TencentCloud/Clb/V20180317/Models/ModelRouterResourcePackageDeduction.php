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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型路由资源包抵扣信息
 *
 * @method string getActualDosage() 获取<p>实际抵扣量</p>
 * @method void setActualDosage(string $ActualDosage) 设置<p>实际抵扣量</p>
 * @method string getAfterDeductionRemain() 获取<p>抵扣后包剩余量</p>
 * @method void setAfterDeductionRemain(string $AfterDeductionRemain) 设置<p>抵扣后包剩余量</p>
 * @method string getBeforeDeductionRemain() 获取<p>抵扣前包剩余量</p>
 * @method void setBeforeDeductionRemain(string $BeforeDeductionRemain) 设置<p>抵扣前包剩余量</p>
 * @method string getDeductionTime() 获取<p>抵扣时间</p>
 * @method void setDeductionTime(string $DeductionTime) 设置<p>抵扣时间</p>
 * @method string getDosage() 获取<p>原始用量</p>
 * @method void setDosage(string $Dosage) 设置<p>原始用量</p>
 * @method string getEndTime() 获取<p>用量结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>用量结束时间</p>
 * @method string getModelRouterId() 获取<p>产生用量的模型路由实例Id</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>产生用量的模型路由实例Id</p>
 * @method string getModelRouterResourcePackageId() 获取<p>模型路由资源包Id</p>
 * @method void setModelRouterResourcePackageId(string $ModelRouterResourcePackageId) 设置<p>模型路由资源包Id</p>
 * @method string getStartTime() 获取<p>用量开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>用量开始时间</p>
 */
class ModelRouterResourcePackageDeduction extends AbstractModel
{
    /**
     * @var string <p>实际抵扣量</p>
     */
    public $ActualDosage;

    /**
     * @var string <p>抵扣后包剩余量</p>
     */
    public $AfterDeductionRemain;

    /**
     * @var string <p>抵扣前包剩余量</p>
     */
    public $BeforeDeductionRemain;

    /**
     * @var string <p>抵扣时间</p>
     */
    public $DeductionTime;

    /**
     * @var string <p>原始用量</p>
     */
    public $Dosage;

    /**
     * @var string <p>用量结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>产生用量的模型路由实例Id</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>模型路由资源包Id</p>
     */
    public $ModelRouterResourcePackageId;

    /**
     * @var string <p>用量开始时间</p>
     */
    public $StartTime;

    /**
     * @param string $ActualDosage <p>实际抵扣量</p>
     * @param string $AfterDeductionRemain <p>抵扣后包剩余量</p>
     * @param string $BeforeDeductionRemain <p>抵扣前包剩余量</p>
     * @param string $DeductionTime <p>抵扣时间</p>
     * @param string $Dosage <p>原始用量</p>
     * @param string $EndTime <p>用量结束时间</p>
     * @param string $ModelRouterId <p>产生用量的模型路由实例Id</p>
     * @param string $ModelRouterResourcePackageId <p>模型路由资源包Id</p>
     * @param string $StartTime <p>用量开始时间</p>
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
        if (array_key_exists("ActualDosage",$param) and $param["ActualDosage"] !== null) {
            $this->ActualDosage = $param["ActualDosage"];
        }

        if (array_key_exists("AfterDeductionRemain",$param) and $param["AfterDeductionRemain"] !== null) {
            $this->AfterDeductionRemain = $param["AfterDeductionRemain"];
        }

        if (array_key_exists("BeforeDeductionRemain",$param) and $param["BeforeDeductionRemain"] !== null) {
            $this->BeforeDeductionRemain = $param["BeforeDeductionRemain"];
        }

        if (array_key_exists("DeductionTime",$param) and $param["DeductionTime"] !== null) {
            $this->DeductionTime = $param["DeductionTime"];
        }

        if (array_key_exists("Dosage",$param) and $param["Dosage"] !== null) {
            $this->Dosage = $param["Dosage"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("ModelRouterResourcePackageId",$param) and $param["ModelRouterResourcePackageId"] !== null) {
            $this->ModelRouterResourcePackageId = $param["ModelRouterResourcePackageId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
