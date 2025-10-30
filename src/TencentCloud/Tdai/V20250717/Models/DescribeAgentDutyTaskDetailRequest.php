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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentDutyTaskDetail请求参数结构体
 *
 * @method array getParameters() 获取业务参数列表
 * @method void setParameters(array $Parameters) 设置业务参数列表
 */
class DescribeAgentDutyTaskDetailRequest extends AbstractModel
{
    /**
     * @var array 业务参数列表
     */
    public $Parameters;

    /**
     * @param array $Parameters 业务参数列表
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
        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new Parameter();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }
    }
}
