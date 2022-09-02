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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceCreate请求参数结构体
 *
 * @method string getZone() 获取可用区,每个地域提供最佳实践
 * @method void setZone(string $Zone) 设置可用区,每个地域提供最佳实践
 * @method integer getGoodsNum() 获取购买计算节点个数
 * @method void setGoodsNum(integer $GoodsNum) 设置购买计算节点个数
 * @method string getInstancePayMode() 获取实例购买类型，可选值为：PREPAID, POSTPAID, SERVERLESS
 * @method void setInstancePayMode(string $InstancePayMode) 设置实例购买类型，可选值为：PREPAID, POSTPAID, SERVERLESS
 * @method string getStoragePayMode() 获取存储购买类型，可选值为：PREPAID, POSTPAID
 * @method void setStoragePayMode(string $StoragePayMode) 设置存储购买类型，可选值为：PREPAID, POSTPAID
 * @method integer getCpu() 获取CPU核数，PREPAID与POSTPAID实例类型必传
 * @method void setCpu(integer $Cpu) 设置CPU核数，PREPAID与POSTPAID实例类型必传
 * @method integer getMemory() 获取内存大小，单位G，PREPAID与POSTPAID实例类型必传
 * @method void setMemory(integer $Memory) 设置内存大小，单位G，PREPAID与POSTPAID实例类型必传
 * @method float getCcu() 获取Ccu大小，serverless类型必传
 * @method void setCcu(float $Ccu) 设置Ccu大小，serverless类型必传
 * @method integer getStorageLimit() 获取存储大小，PREPAID存储类型必传
 * @method void setStorageLimit(integer $StorageLimit) 设置存储大小，PREPAID存储类型必传
 * @method integer getTimeSpan() 获取购买时长，PREPAID购买类型必传
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长，PREPAID购买类型必传
 * @method string getTimeUnit() 获取时长单位，可选值为：m,d。PREPAID购买类型必传
 * @method void setTimeUnit(string $TimeUnit) 设置时长单位，可选值为：m,d。PREPAID购买类型必传
 */
class InquirePriceCreateRequest extends AbstractModel
{
    /**
     * @var string 可用区,每个地域提供最佳实践
     */
    public $Zone;

    /**
     * @var integer 购买计算节点个数
     */
    public $GoodsNum;

    /**
     * @var string 实例购买类型，可选值为：PREPAID, POSTPAID, SERVERLESS
     */
    public $InstancePayMode;

    /**
     * @var string 存储购买类型，可选值为：PREPAID, POSTPAID
     */
    public $StoragePayMode;

    /**
     * @var integer CPU核数，PREPAID与POSTPAID实例类型必传
     */
    public $Cpu;

    /**
     * @var integer 内存大小，单位G，PREPAID与POSTPAID实例类型必传
     */
    public $Memory;

    /**
     * @var float Ccu大小，serverless类型必传
     */
    public $Ccu;

    /**
     * @var integer 存储大小，PREPAID存储类型必传
     */
    public $StorageLimit;

    /**
     * @var integer 购买时长，PREPAID购买类型必传
     */
    public $TimeSpan;

    /**
     * @var string 时长单位，可选值为：m,d。PREPAID购买类型必传
     */
    public $TimeUnit;

    /**
     * @param string $Zone 可用区,每个地域提供最佳实践
     * @param integer $GoodsNum 购买计算节点个数
     * @param string $InstancePayMode 实例购买类型，可选值为：PREPAID, POSTPAID, SERVERLESS
     * @param string $StoragePayMode 存储购买类型，可选值为：PREPAID, POSTPAID
     * @param integer $Cpu CPU核数，PREPAID与POSTPAID实例类型必传
     * @param integer $Memory 内存大小，单位G，PREPAID与POSTPAID实例类型必传
     * @param float $Ccu Ccu大小，serverless类型必传
     * @param integer $StorageLimit 存储大小，PREPAID存储类型必传
     * @param integer $TimeSpan 购买时长，PREPAID购买类型必传
     * @param string $TimeUnit 时长单位，可选值为：m,d。PREPAID购买类型必传
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
    }
}
