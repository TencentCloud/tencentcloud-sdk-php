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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTPService 缓存配置（域名维度）
 *
 * @method array getRules() 获取<p>HTTPService 缓存配置列表。Rules 按数组顺序为优先级顺序，Rules[n-1] 优先级最高</p>
 * @method void setRules(array $Rules) 设置<p>HTTPService 缓存配置列表。Rules 按数组顺序为优先级顺序，Rules[n-1] 优先级最高</p>
 */
class HTTPServiceCacheSet extends AbstractModel
{
    /**
     * @var array <p>HTTPService 缓存配置列表。Rules 按数组顺序为优先级顺序，Rules[n-1] 优先级最高</p>
     */
    public $Rules;

    /**
     * @param array $Rules <p>HTTPService 缓存配置列表。Rules 按数组顺序为优先级顺序，Rules[n-1] 优先级最高</p>
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new HTTPServiceCacheRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
