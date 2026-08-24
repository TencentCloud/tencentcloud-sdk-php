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
 * 负载均衡配置，仅服务来源（ServiceSource，SourceId 非空）场景生效。
 *
 * @method string getAlgorithm() 获取<p>负载均衡算法</p>
 * @method void setAlgorithm(string $Algorithm) 设置<p>负载均衡算法</p>
 */
class AIGWLoadBalanceConfig extends AbstractModel
{
    /**
     * @var string <p>负载均衡算法</p>
     */
    public $Algorithm;

    /**
     * @param string $Algorithm <p>负载均衡算法</p>
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
        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }
    }
}
