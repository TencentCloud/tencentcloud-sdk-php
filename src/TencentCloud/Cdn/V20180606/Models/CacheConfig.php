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
 * 启发式自定义时间缓存配置
 *
 * @method string getHeuristicCacheTimeSwitch() 获取启发式自定义时间缓存配置开关，取值有：
on：开启
off：关闭
 * @method void setHeuristicCacheTimeSwitch(string $HeuristicCacheTimeSwitch) 设置启发式自定义时间缓存配置开关，取值有：
on：开启
off：关闭
 * @method integer getHeuristicCacheTime() 获取单位 秒.
 * @method void setHeuristicCacheTime(integer $HeuristicCacheTime) 设置单位 秒.
 */
class CacheConfig extends AbstractModel
{
    /**
     * @var string 启发式自定义时间缓存配置开关，取值有：
on：开启
off：关闭
     */
    public $HeuristicCacheTimeSwitch;

    /**
     * @var integer 单位 秒.
     */
    public $HeuristicCacheTime;

    /**
     * @param string $HeuristicCacheTimeSwitch 启发式自定义时间缓存配置开关，取值有：
on：开启
off：关闭
     * @param integer $HeuristicCacheTime 单位 秒.
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
        if (array_key_exists("HeuristicCacheTimeSwitch",$param) and $param["HeuristicCacheTimeSwitch"] !== null) {
            $this->HeuristicCacheTimeSwitch = $param["HeuristicCacheTimeSwitch"];
        }

        if (array_key_exists("HeuristicCacheTime",$param) and $param["HeuristicCacheTime"] !== null) {
            $this->HeuristicCacheTime = $param["HeuristicCacheTime"];
        }
    }
}
