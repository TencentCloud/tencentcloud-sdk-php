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
 * 模型路由资源包
 *
 * @method string getCapacitySize() 获取<p>模型路由资源包总容量</p>
 * @method void setCapacitySize(string $CapacitySize) 设置<p>模型路由资源包总容量</p>
 * @method string getCapacityRemain() 获取<p>模型路由资源包总余量</p>
 * @method void setCapacityRemain(string $CapacityRemain) 设置<p>模型路由资源包总余量</p>
 * @method string getCapacitySizePrecise() 获取<p>模型路由资源包容量精确值</p>
 * @method void setCapacitySizePrecise(string $CapacitySizePrecise) 设置<p>模型路由资源包容量精确值</p>
 * @method string getCapacityRemainPrecise() 获取<p>模型路由资源包总余量精确值</p>
 * @method void setCapacityRemainPrecise(string $CapacityRemainPrecise) 设置<p>模型路由资源包总余量精确值</p>
 * @method integer getAutoPurchaseFlag() 获取<p>模型路由资源包设置用尽续购标志位 0:未设置 1:用尽到期新购</p><p>取值范围：[0, 1]</p>
 * @method void setAutoPurchaseFlag(integer $AutoPurchaseFlag) 设置<p>模型路由资源包设置用尽续购标志位 0:未设置 1:用尽到期新购</p><p>取值范围：[0, 1]</p>
 * @method string getModelRouterResourcePackageId() 获取<p>模型路由资源包Id</p>
 * @method void setModelRouterResourcePackageId(string $ModelRouterResourcePackageId) 设置<p>模型路由资源包Id</p>
 * @method string getCreateTime() 获取<p>模型路由资源包创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>模型路由资源包创建时间</p>
 * @method string getDeductionStartTime() 获取<p>模型路由资源包抵扣开始时间</p>
 * @method void setDeductionStartTime(string $DeductionStartTime) 设置<p>模型路由资源包抵扣开始时间</p>
 * @method string getDeductionEndTime() 获取<p>模型路由资源包抵扣截止时间</p>
 * @method void setDeductionEndTime(string $DeductionEndTime) 设置<p>模型路由资源包抵扣截止时间</p>
 * @method string getExpiredTime() 获取<p>模型路由资源包失效时间</p>
 * @method void setExpiredTime(string $ExpiredTime) 设置<p>模型路由资源包失效时间</p>
 * @method integer getStatus() 获取<p>模型路由资源包状态</p><p>枚举值：</p><ul><li>0： 有效</li><li>1： 已退款</li><li>2： 已过期</li><li>3： 已用完</li></ul>
 * @method void setStatus(integer $Status) 设置<p>模型路由资源包状态</p><p>枚举值：</p><ul><li>0： 有效</li><li>1： 已退款</li><li>2： 已过期</li><li>3： 已用完</li></ul>
 */
class ModelRouterPackage extends AbstractModel
{
    /**
     * @var string <p>模型路由资源包总容量</p>
     */
    public $CapacitySize;

    /**
     * @var string <p>模型路由资源包总余量</p>
     */
    public $CapacityRemain;

    /**
     * @var string <p>模型路由资源包容量精确值</p>
     */
    public $CapacitySizePrecise;

    /**
     * @var string <p>模型路由资源包总余量精确值</p>
     */
    public $CapacityRemainPrecise;

    /**
     * @var integer <p>模型路由资源包设置用尽续购标志位 0:未设置 1:用尽到期新购</p><p>取值范围：[0, 1]</p>
     */
    public $AutoPurchaseFlag;

    /**
     * @var string <p>模型路由资源包Id</p>
     */
    public $ModelRouterResourcePackageId;

    /**
     * @var string <p>模型路由资源包创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>模型路由资源包抵扣开始时间</p>
     */
    public $DeductionStartTime;

    /**
     * @var string <p>模型路由资源包抵扣截止时间</p>
     */
    public $DeductionEndTime;

    /**
     * @var string <p>模型路由资源包失效时间</p>
     */
    public $ExpiredTime;

    /**
     * @var integer <p>模型路由资源包状态</p><p>枚举值：</p><ul><li>0： 有效</li><li>1： 已退款</li><li>2： 已过期</li><li>3： 已用完</li></ul>
     */
    public $Status;

    /**
     * @param string $CapacitySize <p>模型路由资源包总容量</p>
     * @param string $CapacityRemain <p>模型路由资源包总余量</p>
     * @param string $CapacitySizePrecise <p>模型路由资源包容量精确值</p>
     * @param string $CapacityRemainPrecise <p>模型路由资源包总余量精确值</p>
     * @param integer $AutoPurchaseFlag <p>模型路由资源包设置用尽续购标志位 0:未设置 1:用尽到期新购</p><p>取值范围：[0, 1]</p>
     * @param string $ModelRouterResourcePackageId <p>模型路由资源包Id</p>
     * @param string $CreateTime <p>模型路由资源包创建时间</p>
     * @param string $DeductionStartTime <p>模型路由资源包抵扣开始时间</p>
     * @param string $DeductionEndTime <p>模型路由资源包抵扣截止时间</p>
     * @param string $ExpiredTime <p>模型路由资源包失效时间</p>
     * @param integer $Status <p>模型路由资源包状态</p><p>枚举值：</p><ul><li>0： 有效</li><li>1： 已退款</li><li>2： 已过期</li><li>3： 已用完</li></ul>
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
        if (array_key_exists("CapacitySize",$param) and $param["CapacitySize"] !== null) {
            $this->CapacitySize = $param["CapacitySize"];
        }

        if (array_key_exists("CapacityRemain",$param) and $param["CapacityRemain"] !== null) {
            $this->CapacityRemain = $param["CapacityRemain"];
        }

        if (array_key_exists("CapacitySizePrecise",$param) and $param["CapacitySizePrecise"] !== null) {
            $this->CapacitySizePrecise = $param["CapacitySizePrecise"];
        }

        if (array_key_exists("CapacityRemainPrecise",$param) and $param["CapacityRemainPrecise"] !== null) {
            $this->CapacityRemainPrecise = $param["CapacityRemainPrecise"];
        }

        if (array_key_exists("AutoPurchaseFlag",$param) and $param["AutoPurchaseFlag"] !== null) {
            $this->AutoPurchaseFlag = $param["AutoPurchaseFlag"];
        }

        if (array_key_exists("ModelRouterResourcePackageId",$param) and $param["ModelRouterResourcePackageId"] !== null) {
            $this->ModelRouterResourcePackageId = $param["ModelRouterResourcePackageId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeductionStartTime",$param) and $param["DeductionStartTime"] !== null) {
            $this->DeductionStartTime = $param["DeductionStartTime"];
        }

        if (array_key_exists("DeductionEndTime",$param) and $param["DeductionEndTime"] !== null) {
            $this->DeductionEndTime = $param["DeductionEndTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
