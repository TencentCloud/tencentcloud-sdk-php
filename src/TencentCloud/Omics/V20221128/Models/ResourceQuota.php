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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源配额。
 *
 * @method string getCPULimit() 获取CPU Limit设置。
 * @method void setCPULimit(string $CPULimit) 设置CPU Limit设置。
 * @method string getMemoryLimit() 获取内存Limit设置（单位：Mi，Gi，Ti，M，G，T）
 * @method void setMemoryLimit(string $MemoryLimit) 设置内存Limit设置（单位：Mi，Gi，Ti，M，G，T）
 * @method string getPods() 获取Pods数量设置
 * @method void setPods(string $Pods) 设置Pods数量设置
 */
class ResourceQuota extends AbstractModel
{
    /**
     * @var string CPU Limit设置。
     */
    public $CPULimit;

    /**
     * @var string 内存Limit设置（单位：Mi，Gi，Ti，M，G，T）
     */
    public $MemoryLimit;

    /**
     * @var string Pods数量设置
     */
    public $Pods;

    /**
     * @param string $CPULimit CPU Limit设置。
     * @param string $MemoryLimit 内存Limit设置（单位：Mi，Gi，Ti，M，G，T）
     * @param string $Pods Pods数量设置
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
        if (array_key_exists("CPULimit",$param) and $param["CPULimit"] !== null) {
            $this->CPULimit = $param["CPULimit"];
        }

        if (array_key_exists("MemoryLimit",$param) and $param["MemoryLimit"] !== null) {
            $this->MemoryLimit = $param["MemoryLimit"];
        }

        if (array_key_exists("Pods",$param) and $param["Pods"] !== null) {
            $this->Pods = $param["Pods"];
        }
    }
}
