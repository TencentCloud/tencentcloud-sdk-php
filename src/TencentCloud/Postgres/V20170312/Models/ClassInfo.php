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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库实例规格
 *
 * @method string getSpecCode() 获取规格ID
 * @method void setSpecCode(string $SpecCode) 设置规格ID
 * @method integer getCPU() 获取CPU核数
 * @method void setCPU(integer $CPU) 设置CPU核数
 * @method integer getMemory() 获取内存大小，单位：MB
 * @method void setMemory(integer $Memory) 设置内存大小，单位：MB
 * @method integer getMaxStorage() 获取该规格所支持最大存储容量，单位：GB
 * @method void setMaxStorage(integer $MaxStorage) 设置该规格所支持最大存储容量，单位：GB
 * @method integer getMinStorage() 获取该规格所支持最小存储容量，单位：GB
 * @method void setMinStorage(integer $MinStorage) 设置该规格所支持最小存储容量，单位：GB
 * @method integer getQPS() 获取该规格的预估QPS
 * @method void setQPS(integer $QPS) 设置该规格的预估QPS
 */
class ClassInfo extends AbstractModel
{
    /**
     * @var string 规格ID
     */
    public $SpecCode;

    /**
     * @var integer CPU核数
     */
    public $CPU;

    /**
     * @var integer 内存大小，单位：MB
     */
    public $Memory;

    /**
     * @var integer 该规格所支持最大存储容量，单位：GB
     */
    public $MaxStorage;

    /**
     * @var integer 该规格所支持最小存储容量，单位：GB
     */
    public $MinStorage;

    /**
     * @var integer 该规格的预估QPS
     */
    public $QPS;

    /**
     * @param string $SpecCode 规格ID
     * @param integer $CPU CPU核数
     * @param integer $Memory 内存大小，单位：MB
     * @param integer $MaxStorage 该规格所支持最大存储容量，单位：GB
     * @param integer $MinStorage 该规格所支持最小存储容量，单位：GB
     * @param integer $QPS 该规格的预估QPS
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
        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("MinStorage",$param) and $param["MinStorage"] !== null) {
            $this->MinStorage = $param["MinStorage"];
        }

        if (array_key_exists("QPS",$param) and $param["QPS"] !== null) {
            $this->QPS = $param["QPS"];
        }
    }
}
