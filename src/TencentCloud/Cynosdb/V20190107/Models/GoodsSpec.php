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
 * 商品规格
 *
 * @method integer getGoodsNum() 获取商品数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGoodsNum(integer $GoodsNum) 设置商品数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取CPU核数，PREPAID与POSTPAID实例类型必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置CPU核数，PREPAID与POSTPAID实例类型必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取内存大小，单位G，PREPAID与POSTPAID实例类型必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置内存大小，单位G，PREPAID与POSTPAID实例类型必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCcu() 获取Ccu大小，serverless类型必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCcu(float $Ccu) 设置Ccu大小，serverless类型必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageLimit() 获取存储大小，PREPAID存储类型必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageLimit(integer $StorageLimit) 设置存储大小，PREPAID存储类型必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeSpan() 获取购买时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeUnit() 获取时长单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeUnit(string $TimeUnit) 设置时长单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceType() 获取实例机器类型
1. common，通用型。
2. exclusive，独享型。
 * @method void setDeviceType(string $DeviceType) 设置实例机器类型
1. common，通用型。
2. exclusive，独享型。
 */
class GoodsSpec extends AbstractModel
{
    /**
     * @var integer 商品数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GoodsNum;

    /**
     * @var integer CPU核数，PREPAID与POSTPAID实例类型必传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer 内存大小，单位G，PREPAID与POSTPAID实例类型必传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var float Ccu大小，serverless类型必传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ccu;

    /**
     * @var integer 存储大小，PREPAID存储类型必传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageLimit;

    /**
     * @var integer 购买时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeSpan;

    /**
     * @var string 时长单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeUnit;

    /**
     * @var string 实例机器类型
1. common，通用型。
2. exclusive，独享型。
     */
    public $DeviceType;

    /**
     * @param integer $GoodsNum 商品数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu CPU核数，PREPAID与POSTPAID实例类型必传
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory 内存大小，单位G，PREPAID与POSTPAID实例类型必传
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Ccu Ccu大小，serverless类型必传
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageLimit 存储大小，PREPAID存储类型必传
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeSpan 购买时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeUnit 时长单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceType 实例机器类型
1. common，通用型。
2. exclusive，独享型。
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
        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
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

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}
