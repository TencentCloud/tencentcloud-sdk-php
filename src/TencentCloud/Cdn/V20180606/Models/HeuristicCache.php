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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 启发式缓存配置
 *
 * @method string getSwitch() 获取on 代表开启启发式缓存
off 代表关闭启发式缓存
 * @method void setSwitch(string $Switch) 设置on 代表开启启发式缓存
off 代表关闭启发式缓存
 * @method CacheConfig getCacheConfig() 获取自定义启发式缓存时间配置
 * @method void setCacheConfig(CacheConfig $CacheConfig) 设置自定义启发式缓存时间配置
 */
class HeuristicCache extends AbstractModel
{
    /**
     * @var string on 代表开启启发式缓存
off 代表关闭启发式缓存
     */
    public $Switch;

    /**
     * @var CacheConfig 自定义启发式缓存时间配置
     */
    public $CacheConfig;

    /**
     * @param string $Switch on 代表开启启发式缓存
off 代表关闭启发式缓存
     * @param CacheConfig $CacheConfig 自定义启发式缓存时间配置
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("CacheConfig",$param) and $param["CacheConfig"] !== null) {
            $this->CacheConfig = new CacheConfig();
            $this->CacheConfig->deserialize($param["CacheConfig"]);
        }
    }
}
