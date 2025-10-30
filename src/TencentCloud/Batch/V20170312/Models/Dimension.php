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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Job资源监控查询维度
 *
 * @method string getName() 获取查询指标的维度名称
 * @method void setName(string $Name) 设置查询指标的维度名称
 * @method string getValue() 获取查询指标的维度值
 * @method void setValue(string $Value) 设置查询指标的维度值
 */
class Dimension extends AbstractModel
{
    /**
     * @var string 查询指标的维度名称
     */
    public $Name;

    /**
     * @var string 查询指标的维度值
     */
    public $Value;

    /**
     * @param string $Name 查询指标的维度名称
     * @param string $Value 查询指标的维度值
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
