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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecommendedParams请求参数结构体
 *
 * @method string getModelUid() 获取<p>模型业务唯一标识</p>
 * @method void setModelUid(string $ModelUid) 设置<p>模型业务唯一标识</p>
 * @method string getEngine() 获取<p>推理引擎 ID，如 vllm、xgboost（必填）</p>
 * @method void setEngine(string $Engine) 设置<p>推理引擎 ID，如 vllm、xgboost（必填）</p>
 */
class DescribeRecommendedParamsRequest extends AbstractModel
{
    /**
     * @var string <p>模型业务唯一标识</p>
     */
    public $ModelUid;

    /**
     * @var string <p>推理引擎 ID，如 vllm、xgboost（必填）</p>
     */
    public $Engine;

    /**
     * @param string $ModelUid <p>模型业务唯一标识</p>
     * @param string $Engine <p>推理引擎 ID，如 vllm、xgboost（必填）</p>
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
        if (array_key_exists("ModelUid",$param) and $param["ModelUid"] !== null) {
            $this->ModelUid = $param["ModelUid"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }
    }
}
