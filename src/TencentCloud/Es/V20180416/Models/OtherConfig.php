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
 * updateInstance使用的额外的EsConfig和JvmHeapConfig
 *
 * @method string getEsConfig() 获取es的yml额外配置
 * @method void setEsConfig(string $EsConfig) 设置es的yml额外配置
 * @method string getJvmHeapConfig() 获取es的jvm heap config
 * @method void setJvmHeapConfig(string $JvmHeapConfig) 设置es的jvm heap config
 */
class OtherConfig extends AbstractModel
{
    /**
     * @var string es的yml额外配置
     */
    public $EsConfig;

    /**
     * @var string es的jvm heap config
     */
    public $JvmHeapConfig;

    /**
     * @param string $EsConfig es的yml额外配置
     * @param string $JvmHeapConfig es的jvm heap config
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
        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = $param["EsConfig"];
        }

        if (array_key_exists("JvmHeapConfig",$param) and $param["JvmHeapConfig"] !== null) {
            $this->JvmHeapConfig = $param["JvmHeapConfig"];
        }
    }
}
