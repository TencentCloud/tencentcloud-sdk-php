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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费增值包用量信息
 *
 * @method float getAddOnTotal() 获取<p>增值包总量</p>
 * @method void setAddOnTotal(float $AddOnTotal) 设置<p>增值包总量</p>
 * @method float getAddOnUsage() 获取<p>增值包用量</p>
 * @method void setAddOnUsage(float $AddOnUsage) 设置<p>增值包用量</p>
 * @method integer getExclusiveConcurrency() 获取<p>专属并发总数</p>
 * @method void setExclusiveConcurrency(integer $ExclusiveConcurrency) 设置<p>专属并发总数</p>
 * @method integer getResourceStatus() 获取<p>资源包状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>2： 已用完</li><li>3： 已过期</li></ul>
 * @method void setResourceStatus(integer $ResourceStatus) 设置<p>资源包状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>2： 已用完</li><li>3： 已过期</li></ul>
 * @method integer getConcurrencyStatus() 获取<p>专属并发状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>3： 已过期</li></ul>
 * @method void setConcurrencyStatus(integer $ConcurrencyStatus) 设置<p>专属并发状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>3： 已过期</li></ul>
 * @method integer getExclusiveTpm() 获取<p>专属tpm</p>
 * @method void setExclusiveTpm(integer $ExclusiveTpm) 设置<p>专属tpm</p>
 * @method integer getExclusiveTpmStatus() 获取<p>专属tpm状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>3： 已过期</li></ul>
 * @method void setExclusiveTpmStatus(integer $ExclusiveTpmStatus) 设置<p>专属tpm状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>3： 已过期</li></ul>
 * @method integer getExclusiveComputeUnit() 获取<p>专属计算单元</p>
 * @method void setExclusiveComputeUnit(integer $ExclusiveComputeUnit) 设置<p>专属计算单元</p>
 * @method integer getExclusiveComputeUnitStatus() 获取<p>专属计算单元状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>3： 已过期</li><li>4： 已销毁</li><li>5： 已隔离</li><li>6： 未生效</li><li>7： 暂不可用（套餐包过期时）</li></ul>
 * @method void setExclusiveComputeUnitStatus(integer $ExclusiveComputeUnitStatus) 设置<p>专属计算单元状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>3： 已过期</li><li>4： 已销毁</li><li>5： 已隔离</li><li>6： 未生效</li><li>7： 暂不可用（套餐包过期时）</li></ul>
 */
class AddOnPackageInfo extends AbstractModel
{
    /**
     * @var float <p>增值包总量</p>
     */
    public $AddOnTotal;

    /**
     * @var float <p>增值包用量</p>
     */
    public $AddOnUsage;

    /**
     * @var integer <p>专属并发总数</p>
     */
    public $ExclusiveConcurrency;

    /**
     * @var integer <p>资源包状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>2： 已用完</li><li>3： 已过期</li></ul>
     */
    public $ResourceStatus;

    /**
     * @var integer <p>专属并发状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>3： 已过期</li></ul>
     */
    public $ConcurrencyStatus;

    /**
     * @var integer <p>专属tpm</p>
     */
    public $ExclusiveTpm;

    /**
     * @var integer <p>专属tpm状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>3： 已过期</li></ul>
     */
    public $ExclusiveTpmStatus;

    /**
     * @var integer <p>专属计算单元</p>
     */
    public $ExclusiveComputeUnit;

    /**
     * @var integer <p>专属计算单元状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>3： 已过期</li><li>4： 已销毁</li><li>5： 已隔离</li><li>6： 未生效</li><li>7： 暂不可用（套餐包过期时）</li></ul>
     */
    public $ExclusiveComputeUnitStatus;

    /**
     * @param float $AddOnTotal <p>增值包总量</p>
     * @param float $AddOnUsage <p>增值包用量</p>
     * @param integer $ExclusiveConcurrency <p>专属并发总数</p>
     * @param integer $ResourceStatus <p>资源包状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>2： 已用完</li><li>3： 已过期</li></ul>
     * @param integer $ConcurrencyStatus <p>专属并发状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>3： 已过期</li></ul>
     * @param integer $ExclusiveTpm <p>专属tpm</p>
     * @param integer $ExclusiveTpmStatus <p>专属tpm状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>3： 已过期</li></ul>
     * @param integer $ExclusiveComputeUnit <p>专属计算单元</p>
     * @param integer $ExclusiveComputeUnitStatus <p>专属计算单元状态</p><p>枚举值：</p><ul><li>1： 可使</li><li>3： 已过期</li><li>4： 已销毁</li><li>5： 已隔离</li><li>6： 未生效</li><li>7： 暂不可用（套餐包过期时）</li></ul>
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
        if (array_key_exists("AddOnTotal",$param) and $param["AddOnTotal"] !== null) {
            $this->AddOnTotal = $param["AddOnTotal"];
        }

        if (array_key_exists("AddOnUsage",$param) and $param["AddOnUsage"] !== null) {
            $this->AddOnUsage = $param["AddOnUsage"];
        }

        if (array_key_exists("ExclusiveConcurrency",$param) and $param["ExclusiveConcurrency"] !== null) {
            $this->ExclusiveConcurrency = $param["ExclusiveConcurrency"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("ConcurrencyStatus",$param) and $param["ConcurrencyStatus"] !== null) {
            $this->ConcurrencyStatus = $param["ConcurrencyStatus"];
        }

        if (array_key_exists("ExclusiveTpm",$param) and $param["ExclusiveTpm"] !== null) {
            $this->ExclusiveTpm = $param["ExclusiveTpm"];
        }

        if (array_key_exists("ExclusiveTpmStatus",$param) and $param["ExclusiveTpmStatus"] !== null) {
            $this->ExclusiveTpmStatus = $param["ExclusiveTpmStatus"];
        }

        if (array_key_exists("ExclusiveComputeUnit",$param) and $param["ExclusiveComputeUnit"] !== null) {
            $this->ExclusiveComputeUnit = $param["ExclusiveComputeUnit"];
        }

        if (array_key_exists("ExclusiveComputeUnitStatus",$param) and $param["ExclusiveComputeUnitStatus"] !== null) {
            $this->ExclusiveComputeUnitStatus = $param["ExclusiveComputeUnitStatus"];
        }
    }
}
