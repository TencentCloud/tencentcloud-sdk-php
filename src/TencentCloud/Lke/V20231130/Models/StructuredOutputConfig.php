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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 结构化输出的配置项
 *
 * @method array getStructuredOutputParams() 获取参数列表
 * @method void setStructuredOutputParams(array $StructuredOutputParams) 设置参数列表
 */
class StructuredOutputConfig extends AbstractModel
{
    /**
     * @var array 参数列表
     */
    public $StructuredOutputParams;

    /**
     * @param array $StructuredOutputParams 参数列表
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
        if (array_key_exists("StructuredOutputParams",$param) and $param["StructuredOutputParams"] !== null) {
            $this->StructuredOutputParams = [];
            foreach ($param["StructuredOutputParams"] as $key => $value){
                $obj = new ParameterConfig();
                $obj->deserialize($value);
                array_push($this->StructuredOutputParams, $obj);
            }
        }
    }
}
