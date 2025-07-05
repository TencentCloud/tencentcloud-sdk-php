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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建serverless索引时创建数据接入
 *
 * @method string getDiSourceType() 获取数据链路采集源类型，如cvm_collector、tke_collector
 * @method void setDiSourceType(string $DiSourceType) 设置数据链路采集源类型，如cvm_collector、tke_collector
 * @method DiSourceCvm getDiSourceCvm() 获取cvm数据源
 * @method void setDiSourceCvm(DiSourceCvm $DiSourceCvm) 设置cvm数据源
 * @method DiSourceTke getDiSourceTke() 获取tke数据源
 * @method void setDiSourceTke(DiSourceTke $DiSourceTke) 设置tke数据源
 */
class ServerlessDi extends AbstractModel
{
    /**
     * @var string 数据链路采集源类型，如cvm_collector、tke_collector
     */
    public $DiSourceType;

    /**
     * @var DiSourceCvm cvm数据源
     */
    public $DiSourceCvm;

    /**
     * @var DiSourceTke tke数据源
     */
    public $DiSourceTke;

    /**
     * @param string $DiSourceType 数据链路采集源类型，如cvm_collector、tke_collector
     * @param DiSourceCvm $DiSourceCvm cvm数据源
     * @param DiSourceTke $DiSourceTke tke数据源
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
        if (array_key_exists("DiSourceType",$param) and $param["DiSourceType"] !== null) {
            $this->DiSourceType = $param["DiSourceType"];
        }

        if (array_key_exists("DiSourceCvm",$param) and $param["DiSourceCvm"] !== null) {
            $this->DiSourceCvm = new DiSourceCvm();
            $this->DiSourceCvm->deserialize($param["DiSourceCvm"]);
        }

        if (array_key_exists("DiSourceTke",$param) and $param["DiSourceTke"] !== null) {
            $this->DiSourceTke = new DiSourceTke();
            $this->DiSourceTke->deserialize($param["DiSourceTke"]);
        }
    }
}
