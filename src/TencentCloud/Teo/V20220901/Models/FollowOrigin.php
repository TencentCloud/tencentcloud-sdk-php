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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 缓存遵循源站配置
 *
 * @method string getSwitch() 获取遵循源站配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置遵循源站配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method integer getDefaultCacheTime() 获取源站未返回 Cache-Control 头时, 设置默认的缓存时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultCacheTime(integer $DefaultCacheTime) 设置源站未返回 Cache-Control 头时, 设置默认的缓存时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultCache() 获取源站未返回 Cache-Control 头时, 设置缓存/不缓存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultCache(string $DefaultCache) 设置源站未返回 Cache-Control 头时, 设置缓存/不缓存
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultCacheStrategy() 获取源站未返回 Cache-Control 头时, 使用/不使用默认缓存策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultCacheStrategy(string $DefaultCacheStrategy) 设置源站未返回 Cache-Control 头时, 使用/不使用默认缓存策略
注意：此字段可能返回 null，表示取不到有效值。
 */
class FollowOrigin extends AbstractModel
{
    /**
     * @var string 遵循源站配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var integer 源站未返回 Cache-Control 头时, 设置默认的缓存时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultCacheTime;

    /**
     * @var string 源站未返回 Cache-Control 头时, 设置缓存/不缓存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultCache;

    /**
     * @var string 源站未返回 Cache-Control 头时, 使用/不使用默认缓存策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultCacheStrategy;

    /**
     * @param string $Switch 遵循源站配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param integer $DefaultCacheTime 源站未返回 Cache-Control 头时, 设置默认的缓存时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultCache 源站未返回 Cache-Control 头时, 设置缓存/不缓存
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultCacheStrategy 源站未返回 Cache-Control 头时, 使用/不使用默认缓存策略
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("DefaultCacheTime",$param) and $param["DefaultCacheTime"] !== null) {
            $this->DefaultCacheTime = $param["DefaultCacheTime"];
        }

        if (array_key_exists("DefaultCache",$param) and $param["DefaultCache"] !== null) {
            $this->DefaultCache = $param["DefaultCache"];
        }

        if (array_key_exists("DefaultCacheStrategy",$param) and $param["DefaultCacheStrategy"] !== null) {
            $this->DefaultCacheStrategy = $param["DefaultCacheStrategy"];
        }
    }
}
