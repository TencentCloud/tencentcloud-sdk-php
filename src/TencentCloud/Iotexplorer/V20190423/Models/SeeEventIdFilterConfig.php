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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 处理云存事件的触发条件配置
 *
 * @method array getIncludeOnly() 获取<p>包含的云存事件 ID 集合</p>
 * @method void setIncludeOnly(array $IncludeOnly) 设置<p>包含的云存事件 ID 集合</p>
 * @method array getExclude() 获取<p>排除的云存事件 ID 集合</p>
 * @method void setExclude(array $Exclude) 设置<p>排除的云存事件 ID 集合</p>
 * @method string getTriggerAt() 获取<p>触发分析的时机</p><p>枚举值：</p><ul><li>end： 在云存事件结束时触发视频理解</li><li>start： 在云存事件开始时触发视频理解</li><li>image_and_video： 上传云存事件缩略图后触发图片理解，并且在云存事件结束时触发视频理解</li></ul><p>默认值：end</p>
 * @method void setTriggerAt(string $TriggerAt) 设置<p>触发分析的时机</p><p>枚举值：</p><ul><li>end： 在云存事件结束时触发视频理解</li><li>start： 在云存事件开始时触发视频理解</li><li>image_and_video： 上传云存事件缩略图后触发图片理解，并且在云存事件结束时触发视频理解</li></ul><p>默认值：end</p>
 */
class SeeEventIdFilterConfig extends AbstractModel
{
    /**
     * @var array <p>包含的云存事件 ID 集合</p>
     */
    public $IncludeOnly;

    /**
     * @var array <p>排除的云存事件 ID 集合</p>
     */
    public $Exclude;

    /**
     * @var string <p>触发分析的时机</p><p>枚举值：</p><ul><li>end： 在云存事件结束时触发视频理解</li><li>start： 在云存事件开始时触发视频理解</li><li>image_and_video： 上传云存事件缩略图后触发图片理解，并且在云存事件结束时触发视频理解</li></ul><p>默认值：end</p>
     */
    public $TriggerAt;

    /**
     * @param array $IncludeOnly <p>包含的云存事件 ID 集合</p>
     * @param array $Exclude <p>排除的云存事件 ID 集合</p>
     * @param string $TriggerAt <p>触发分析的时机</p><p>枚举值：</p><ul><li>end： 在云存事件结束时触发视频理解</li><li>start： 在云存事件开始时触发视频理解</li><li>image_and_video： 上传云存事件缩略图后触发图片理解，并且在云存事件结束时触发视频理解</li></ul><p>默认值：end</p>
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
        if (array_key_exists("IncludeOnly",$param) and $param["IncludeOnly"] !== null) {
            $this->IncludeOnly = $param["IncludeOnly"];
        }

        if (array_key_exists("Exclude",$param) and $param["Exclude"] !== null) {
            $this->Exclude = $param["Exclude"];
        }

        if (array_key_exists("TriggerAt",$param) and $param["TriggerAt"] !== null) {
            $this->TriggerAt = $param["TriggerAt"];
        }
    }
}
