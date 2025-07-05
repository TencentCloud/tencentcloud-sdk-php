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
 * 智能运维集群配置详情
 *
 * @method string getKey() 获取配置key
 * @method void setKey(string $Key) 设置配置key
 * @method string getValue() 获取配置当前值
 * @method void setValue(string $Value) 设置配置当前值
 * @method string getAdvise() 获取配置处理建议
 * @method void setAdvise(string $Advise) 设置配置处理建议
 */
class SettingDetail extends AbstractModel
{
    /**
     * @var string 配置key
     */
    public $Key;

    /**
     * @var string 配置当前值
     */
    public $Value;

    /**
     * @var string 配置处理建议
     */
    public $Advise;

    /**
     * @param string $Key 配置key
     * @param string $Value 配置当前值
     * @param string $Advise 配置处理建议
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Advise",$param) and $param["Advise"] !== null) {
            $this->Advise = $param["Advise"];
        }
    }
}
