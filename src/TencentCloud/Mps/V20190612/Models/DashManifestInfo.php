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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Type为DASH时manifest配置使用的字段。
 *
 * @method integer getWindows() 获取每个清单的总持续时间（以秒为单位）。[30, 3600]，类型：整数，默认值60。
 * @method void setWindows(integer $Windows) 设置每个清单的总持续时间（以秒为单位）。[30, 3600]，类型：整数，默认值60。
 * @method integer getMinBufferTime() 获取播放器在缓冲区中保持的最小缓存时间（以秒为单位）。[2, 60]，类型：整数，默认值30。
 * @method void setMinBufferTime(integer $MinBufferTime) 设置播放器在缓冲区中保持的最小缓存时间（以秒为单位）。[2, 60]，类型：整数，默认值30。
 * @method integer getMinUpdatePeriod() 获取播放器在请求更新清单之前应等待的最短时间（以秒为单位）。[2, 60]，类型：整数，默认值2。
 * @method void setMinUpdatePeriod(integer $MinUpdatePeriod) 设置播放器在请求更新清单之前应等待的最短时间（以秒为单位）。[2, 60]，类型：整数，默认值2。
 * @method integer getSuggestedPresentationDelay() 获取播放器启播时距离最新直播时间点的时间，是一个回退量（以秒为单位）。[2, 60]，类型：整数，默认值10。
 * @method void setSuggestedPresentationDelay(integer $SuggestedPresentationDelay) 设置播放器启播时距离最新直播时间点的时间，是一个回退量（以秒为单位）。[2, 60]，类型：整数，默认值10。
 */
class DashManifestInfo extends AbstractModel
{
    /**
     * @var integer 每个清单的总持续时间（以秒为单位）。[30, 3600]，类型：整数，默认值60。
     */
    public $Windows;

    /**
     * @var integer 播放器在缓冲区中保持的最小缓存时间（以秒为单位）。[2, 60]，类型：整数，默认值30。
     */
    public $MinBufferTime;

    /**
     * @var integer 播放器在请求更新清单之前应等待的最短时间（以秒为单位）。[2, 60]，类型：整数，默认值2。
     */
    public $MinUpdatePeriod;

    /**
     * @var integer 播放器启播时距离最新直播时间点的时间，是一个回退量（以秒为单位）。[2, 60]，类型：整数，默认值10。
     */
    public $SuggestedPresentationDelay;

    /**
     * @param integer $Windows 每个清单的总持续时间（以秒为单位）。[30, 3600]，类型：整数，默认值60。
     * @param integer $MinBufferTime 播放器在缓冲区中保持的最小缓存时间（以秒为单位）。[2, 60]，类型：整数，默认值30。
     * @param integer $MinUpdatePeriod 播放器在请求更新清单之前应等待的最短时间（以秒为单位）。[2, 60]，类型：整数，默认值2。
     * @param integer $SuggestedPresentationDelay 播放器启播时距离最新直播时间点的时间，是一个回退量（以秒为单位）。[2, 60]，类型：整数，默认值10。
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
        if (array_key_exists("Windows",$param) and $param["Windows"] !== null) {
            $this->Windows = $param["Windows"];
        }

        if (array_key_exists("MinBufferTime",$param) and $param["MinBufferTime"] !== null) {
            $this->MinBufferTime = $param["MinBufferTime"];
        }

        if (array_key_exists("MinUpdatePeriod",$param) and $param["MinUpdatePeriod"] !== null) {
            $this->MinUpdatePeriod = $param["MinUpdatePeriod"];
        }

        if (array_key_exists("SuggestedPresentationDelay",$param) and $param["SuggestedPresentationDelay"] !== null) {
            $this->SuggestedPresentationDelay = $param["SuggestedPresentationDelay"];
        }
    }
}
