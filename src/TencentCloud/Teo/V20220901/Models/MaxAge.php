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
 * 浏览器缓存规则配置，用于设置 MaxAge 默认值，默认为关闭状态
 *
 * @method string getFollowOrigin() 获取是否遵循源站，取值有：
<li>on：遵循源站，忽略MaxAge 时间设置；</li>
<li>off：不遵循源站，使用MaxAge 时间设置。</li>
 * @method void setFollowOrigin(string $FollowOrigin) 设置是否遵循源站，取值有：
<li>on：遵循源站，忽略MaxAge 时间设置；</li>
<li>off：不遵循源站，使用MaxAge 时间设置。</li>
 * @method integer getMaxAgeTime() 获取MaxAge 时间设置，单位秒，最大365天。
注意：时间为0，即不缓存。
 * @method void setMaxAgeTime(integer $MaxAgeTime) 设置MaxAge 时间设置，单位秒，最大365天。
注意：时间为0，即不缓存。
 */
class MaxAge extends AbstractModel
{
    /**
     * @var string 是否遵循源站，取值有：
<li>on：遵循源站，忽略MaxAge 时间设置；</li>
<li>off：不遵循源站，使用MaxAge 时间设置。</li>
     */
    public $FollowOrigin;

    /**
     * @var integer MaxAge 时间设置，单位秒，最大365天。
注意：时间为0，即不缓存。
     */
    public $MaxAgeTime;

    /**
     * @param string $FollowOrigin 是否遵循源站，取值有：
<li>on：遵循源站，忽略MaxAge 时间设置；</li>
<li>off：不遵循源站，使用MaxAge 时间设置。</li>
     * @param integer $MaxAgeTime MaxAge 时间设置，单位秒，最大365天。
注意：时间为0，即不缓存。
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

        if (array_key_exists("MaxAgeTime",$param) and $param["MaxAgeTime"] !== null) {
            $this->MaxAgeTime = $param["MaxAgeTime"];
        }
    }
}
