<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 缓存配置简单版本，该版本不支持设置源站未返回max-age情况下的缓存规则。
 *
 * @method array getCacheRules() 获取缓存配置规则数组。
 * @method void setCacheRules(array $CacheRules) 设置缓存配置规则数组。
 */
class Cache extends AbstractModel
{
    /**
     * @var array 缓存配置规则数组。
     */
    public $CacheRules;

    /**
     * @param array $CacheRules 缓存配置规则数组。
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
        if (array_key_exists("CacheRules",$param) and $param["CacheRules"] !== null) {
            $this->CacheRules = [];
            foreach ($param["CacheRules"] as $key => $value){
                $obj = new CacheRule();
                $obj->deserialize($value);
                array_push($this->CacheRules, $obj);
            }
        }
    }
}
