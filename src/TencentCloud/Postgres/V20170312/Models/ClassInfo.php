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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库实例规格
 *
 * @method string getSpecCode() 获取<p>规格ID</p>
 * @method void setSpecCode(string $SpecCode) 设置<p>规格ID</p>
 * @method integer getCPU() 获取<p>CPU核数</p>
 * @method void setCPU(integer $CPU) 设置<p>CPU核数</p>
 * @method integer getMemory() 获取<p>内存大小，单位：MB</p>
 * @method void setMemory(integer $Memory) 设置<p>内存大小，单位：MB</p>
 * @method integer getMaxStorage() 获取<p>该规格所支持最大存储容量，单位：GB</p>
 * @method void setMaxStorage(integer $MaxStorage) 设置<p>该规格所支持最大存储容量，单位：GB</p>
 * @method integer getMinStorage() 获取<p>该规格所支持最小存储容量，单位：GB</p>
 * @method void setMinStorage(integer $MinStorage) 设置<p>该规格所支持最小存储容量，单位：GB</p>
 * @method integer getQPS() 获取<p>该规格的预估QPS</p>
 * @method void setQPS(integer $QPS) 设置<p>该规格的预估QPS</p>
 */
class ClassInfo extends AbstractModel
{
    /**
     * @var string <p>规格ID</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>CPU核数</p>
     */
    public $CPU;

    /**
     * @var integer <p>内存大小，单位：MB</p>
     */
    public $Memory;

    /**
     * @var integer <p>该规格所支持最大存储容量，单位：GB</p>
     */
    public $MaxStorage;

    /**
     * @var integer <p>该规格所支持最小存储容量，单位：GB</p>
     */
    public $MinStorage;

    /**
     * @var integer <p>该规格的预估QPS</p>
     */
    public $QPS;

    /**
     * @param string $SpecCode <p>规格ID</p>
     * @param integer $CPU <p>CPU核数</p>
     * @param integer $Memory <p>内存大小，单位：MB</p>
     * @param integer $MaxStorage <p>该规格所支持最大存储容量，单位：GB</p>
     * @param integer $MinStorage <p>该规格所支持最小存储容量，单位：GB</p>
     * @param integer $QPS <p>该规格的预估QPS</p>
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
