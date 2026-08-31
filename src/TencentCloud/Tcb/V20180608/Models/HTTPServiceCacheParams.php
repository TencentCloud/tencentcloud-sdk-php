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
 * HTTPService 缓存参数（节点缓存 + 浏览器缓存共用行为模式）。
FollowOrigin / NoCache / (CacheTime||MaxAgeTime) 三者互斥，必须开启其一：
- FollowOrigin=true：节点与浏览器缓存均遵循源站；
- NoCache=true：节点与浏览器缓存均不缓存（Cache-Control: no-cache）；
- CacheTime>0 或 MaxAgeTime>0：至少设置其一，分别控制节点、浏览器缓存秒数，可独立设置。
 *
 * @method boolean getFollowOrigin() 获取<p>遵循源站</p>
 * @method void setFollowOrigin(boolean $FollowOrigin) 设置<p>遵循源站</p>
 * @method boolean getNoCache() 获取<p>不缓存</p>
 * @method void setNoCache(boolean $NoCache) 设置<p>不缓存</p>
 * @method integer getCacheTime() 获取<p>自定义缓存时间（秒）</p><p>取值范围：[0, 31536000]</p><p>单位：秒</p>
 * @method void setCacheTime(integer $CacheTime) 设置<p>自定义缓存时间（秒）</p><p>取值范围：[0, 31536000]</p><p>单位：秒</p>
 * @method integer getMaxAgeTime() 获取<p>浏览器缓存秒数（对应 max-age）</p><p>取值范围：[0, 31536000]</p><p>单位：秒</p>
 * @method void setMaxAgeTime(integer $MaxAgeTime) 设置<p>浏览器缓存秒数（对应 max-age）</p><p>取值范围：[0, 31536000]</p><p>单位：秒</p>
 */
class HTTPServiceCacheParams extends AbstractModel
{
    /**
     * @var boolean <p>遵循源站</p>
     */
    public $FollowOrigin;

    /**
     * @var boolean <p>不缓存</p>
     */
    public $NoCache;

    /**
     * @var integer <p>自定义缓存时间（秒）</p><p>取值范围：[0, 31536000]</p><p>单位：秒</p>
     */
    public $CacheTime;

    /**
     * @var integer <p>浏览器缓存秒数（对应 max-age）</p><p>取值范围：[0, 31536000]</p><p>单位：秒</p>
     */
    public $MaxAgeTime;

    /**
     * @param boolean $FollowOrigin <p>遵循源站</p>
     * @param boolean $NoCache <p>不缓存</p>
     * @param integer $CacheTime <p>自定义缓存时间（秒）</p><p>取值范围：[0, 31536000]</p><p>单位：秒</p>
     * @param integer $MaxAgeTime <p>浏览器缓存秒数（对应 max-age）</p><p>取值范围：[0, 31536000]</p><p>单位：秒</p>
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
        if (array_key_exists("FollowOrigin",$param) and $param["FollowOrigin"] !== null) {
            $this->FollowOrigin = $param["FollowOrigin"];
        }

        if (array_key_exists("NoCache",$param) and $param["NoCache"] !== null) {
            $this->NoCache = $param["NoCache"];
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }

        if (array_key_exists("MaxAgeTime",$param) and $param["MaxAgeTime"] !== null) {
            $this->MaxAgeTime = $param["MaxAgeTime"];
        }
    }
}
