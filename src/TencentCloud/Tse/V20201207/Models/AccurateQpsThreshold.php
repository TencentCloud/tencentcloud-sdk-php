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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关限流插件参数限流的精确Qps阈值
 *
 * @method string getUnit() 获取qps阈值控制维度,包含:second、minute、hour、day、month、year
 * @method void setUnit(string $Unit) 设置qps阈值控制维度,包含:second、minute、hour、day、month、year
 * @method string getGlobalConfigId() 获取全局配置ID
 * @method void setGlobalConfigId(string $GlobalConfigId) 设置全局配置ID
 */
class AccurateQpsThreshold extends AbstractModel
{
    /**
     * @var string qps阈值控制维度,包含:second、minute、hour、day、month、year
     */
    public $Unit;

    /**
     * @var string 全局配置ID
     */
    public $GlobalConfigId;

    /**
     * @param string $Unit qps阈值控制维度,包含:second、minute、hour、day、month、year
     * @param string $GlobalConfigId 全局配置ID
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
        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("GlobalConfigId",$param) and $param["GlobalConfigId"] !== null) {
            $this->GlobalConfigId = $param["GlobalConfigId"];
        }
    }
}
