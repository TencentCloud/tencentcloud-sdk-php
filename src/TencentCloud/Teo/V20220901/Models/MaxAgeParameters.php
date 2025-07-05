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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 浏览器缓存 TTL 配置参数。
 *
 * @method string getFollowOrigin() 获取遵循源站 Cache-Control 开关，取值有：
<li>on：遵循源站，忽略 CacheTime 时间设置；</li>
<li>off：不遵循源站，使用 CacheTime 时间设置。</li>
 * @method void setFollowOrigin(string $FollowOrigin) 设置遵循源站 Cache-Control 开关，取值有：
<li>on：遵循源站，忽略 CacheTime 时间设置；</li>
<li>off：不遵循源站，使用 CacheTime 时间设置。</li>
 * @method integer getCacheTime() 获取自定义缓存时间数值，单位为秒，取值：0～315360000。<br>注意：当 FollowOrigin 为 off 时，表示不遵循源站，使用 CacheTime 设置缓存时间，否则此字段不生效。
 * @method void setCacheTime(integer $CacheTime) 设置自定义缓存时间数值，单位为秒，取值：0～315360000。<br>注意：当 FollowOrigin 为 off 时，表示不遵循源站，使用 CacheTime 设置缓存时间，否则此字段不生效。
 */
class MaxAgeParameters extends AbstractModel
{
    /**
     * @var string 遵循源站 Cache-Control 开关，取值有：
<li>on：遵循源站，忽略 CacheTime 时间设置；</li>
<li>off：不遵循源站，使用 CacheTime 时间设置。</li>
     */
    public $FollowOrigin;

    /**
     * @var integer 自定义缓存时间数值，单位为秒，取值：0～315360000。<br>注意：当 FollowOrigin 为 off 时，表示不遵循源站，使用 CacheTime 设置缓存时间，否则此字段不生效。
     */
    public $CacheTime;

    /**
     * @param string $FollowOrigin 遵循源站 Cache-Control 开关，取值有：
<li>on：遵循源站，忽略 CacheTime 时间设置；</li>
<li>off：不遵循源站，使用 CacheTime 时间设置。</li>
     * @param integer $CacheTime 自定义缓存时间数值，单位为秒，取值：0～315360000。<br>注意：当 FollowOrigin 为 off 时，表示不遵循源站，使用 CacheTime 设置缓存时间，否则此字段不生效。
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

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }
    }
}
