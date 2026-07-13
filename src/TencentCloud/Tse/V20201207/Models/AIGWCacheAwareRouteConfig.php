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
 * 缓存感知路由
 *
 * @method array getCandidates() 获取<p>前缀缓存感知路由模型服务候选列表</p>
 * @method void setCandidates(array $Candidates) 设置<p>前缀缓存感知路由模型服务候选列表</p>
 */
class AIGWCacheAwareRouteConfig extends AbstractModel
{
    /**
     * @var array <p>前缀缓存感知路由模型服务候选列表</p>
     */
    public $Candidates;

    /**
     * @param array $Candidates <p>前缀缓存感知路由模型服务候选列表</p>
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
        if (array_key_exists("Candidates",$param) and $param["Candidates"] !== null) {
            $this->Candidates = [];
            foreach ($param["Candidates"] as $key => $value){
                $obj = new AIGWCacheAwareRouteCandidate();
                $obj->deserialize($value);
                array_push($this->Candidates, $obj);
            }
        }
    }
}
