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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceCreate请求参数结构体
 *
 * @method string getZone() 获取<p>可用区,每个地域提供最佳实践</p>
 * @method void setZone(string $Zone) 设置<p>可用区,每个地域提供最佳实践</p>
 * @method integer getGoodsNum() 获取<p>购买计算节点个数</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>购买计算节点个数</p>
 * @method string getInstancePayMode() 获取<p>实例购买类型，可选值为：PREPAID, POSTPAID, SERVERLESS</p>
 * @method void setInstancePayMode(string $InstancePayMode) 设置<p>实例购买类型，可选值为：PREPAID, POSTPAID, SERVERLESS</p>
 * @method string getStoragePayMode() 获取<p>存储购买类型，可选值为：PREPAID, POSTPAID</p>
 * @method void setStoragePayMode(string $StoragePayMode) 设置<p>存储购买类型，可选值为：PREPAID, POSTPAID</p>
 * @method string getDeviceType() 获取<p>实例设备类型，支持值如下：</p><ul><li>common：表示通用型</li><li>exclusive：表示独享型</li></ul>
 * @method void setDeviceType(string $DeviceType) 设置<p>实例设备类型，支持值如下：</p><ul><li>common：表示通用型</li><li>exclusive：表示独享型</li></ul>
 * @method integer getCpu() 获取<p>CPU核数，PREPAID与POSTPAID实例类型必传</p>
 * @method void setCpu(integer $Cpu) 设置<p>CPU核数，PREPAID与POSTPAID实例类型必传</p>
 * @method integer getMemory() 获取<p>内存大小，单位G，PREPAID与POSTPAID实例类型必传</p>
 * @method void setMemory(integer $Memory) 设置<p>内存大小，单位G，PREPAID与POSTPAID实例类型必传</p>
 * @method float getCcu() 获取<p>Ccu大小，serverless类型必传</p>
 * @method void setCcu(float $Ccu) 设置<p>Ccu大小，serverless类型必传</p>
 * @method integer getStorageLimit() 获取<p>存储大小，PREPAID存储类型必传</p>
 * @method void setStorageLimit(integer $StorageLimit) 设置<p>存储大小，PREPAID存储类型必传</p>
 * @method integer getTimeSpan() 获取<p>购买时长，PREPAID购买类型必传</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>购买时长，PREPAID购买类型必传</p>
 * @method string getTimeUnit() 获取<p>时长单位，可选值为：m,d。PREPAID购买类型必传</p>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>时长单位，可选值为：m,d。PREPAID购买类型必传</p>
 * @method string getStorageVersion() 获取<p>存储架构类型。 枚举值：1.0/2.0 默认值：1.0</p>
 * @method void setStorageVersion(string $StorageVersion) 设置<p>存储架构类型。 枚举值：1.0/2.0 默认值：1.0</p>
 * @method boolean getIsMultiAz() 获取<p>存储是否跨AZ，2.0存储架构下有效</p>
 * @method void setIsMultiAz(boolean $IsMultiAz) 设置<p>存储是否跨AZ，2.0存储架构下有效</p>
 */
class InquirePriceCreateRequest extends AbstractModel
{
    /**
     * @var string <p>可用区,每个地域提供最佳实践</p>
     */
    public $Zone;

    /**
     * @var integer <p>购买计算节点个数</p>
     */
    public $GoodsNum;

    /**
     * @var string <p>实例购买类型，可选值为：PREPAID, POSTPAID, SERVERLESS</p>
     */
    public $InstancePayMode;

    /**
     * @var string <p>存储购买类型，可选值为：PREPAID, POSTPAID</p>
     */
    public $StoragePayMode;

    /**
     * @var string <p>实例设备类型，支持值如下：</p><ul><li>common：表示通用型</li><li>exclusive：表示独享型</li></ul>
     */
    public $DeviceType;

    /**
     * @var integer <p>CPU核数，PREPAID与POSTPAID实例类型必传</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存大小，单位G，PREPAID与POSTPAID实例类型必传</p>
     */
    public $Memory;

    /**
     * @var float <p>Ccu大小，serverless类型必传</p>
     */
    public $Ccu;

    /**
     * @var integer <p>存储大小，PREPAID存储类型必传</p>
     */
    public $StorageLimit;

    /**
     * @var integer <p>购买时长，PREPAID购买类型必传</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>时长单位，可选值为：m,d。PREPAID购买类型必传</p>
     */
    public $TimeUnit;

    /**
     * @var string <p>存储架构类型。 枚举值：1.0/2.0 默认值：1.0</p>
     */
    public $StorageVersion;

    /**
     * @var boolean <p>存储是否跨AZ，2.0存储架构下有效</p>
     */
    public $IsMultiAz;

    /**
     * @param string $Zone <p>可用区,每个地域提供最佳实践</p>
     * @param integer $GoodsNum <p>购买计算节点个数</p>
     * @param string $InstancePayMode <p>实例购买类型，可选值为：PREPAID, POSTPAID, SERVERLESS</p>
     * @param string $StoragePayMode <p>存储购买类型，可选值为：PREPAID, POSTPAID</p>
     * @param string $DeviceType <p>实例设备类型，支持值如下：</p><ul><li>common：表示通用型</li><li>exclusive：表示独享型</li></ul>
     * @param integer $Cpu <p>CPU核数，PREPAID与POSTPAID实例类型必传</p>
     * @param integer $Memory <p>内存大小，单位G，PREPAID与POSTPAID实例类型必传</p>
     * @param float $Ccu <p>Ccu大小，serverless类型必传</p>
     * @param integer $StorageLimit <p>存储大小，PREPAID存储类型必传</p>
     * @param integer $TimeSpan <p>购买时长，PREPAID购买类型必传</p>
     * @param string $TimeUnit <p>时长单位，可选值为：m,d。PREPAID购买类型必传</p>
     * @param string $StorageVersion <p>存储架构类型。 枚举值：1.0/2.0 默认值：1.0</p>
     * @param boolean $IsMultiAz <p>存储是否跨AZ，2.0存储架构下有效</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("InstancePayMode",$param) and $param["InstancePayMode"] !== null) {
            $this->InstancePayMode = $param["InstancePayMode"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Ccu",$param) and $param["Ccu"] !== null) {
            $this->Ccu = $param["Ccu"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("StorageVersion",$param) and $param["StorageVersion"] !== null) {
            $this->StorageVersion = $param["StorageVersion"];
        }

        if (array_key_exists("IsMultiAz",$param) and $param["IsMultiAz"] !== null) {
            $this->IsMultiAz = $param["IsMultiAz"];
        }
    }
}
