<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转动图任务类型
 *
 * @method integer getDefinition() 获取视频转动图模板 ID
 * @method void setDefinition(integer $Definition) 设置视频转动图模板 ID
 * @method float getStartTimeOffset() 获取动图在视频中的开始时间，单位为秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置动图在视频中的开始时间，单位为秒。
 * @method float getEndTimeOffset() 获取动图在视频中的结束时间，单位为秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置动图在视频中的结束时间，单位为秒。
 */
class AnimatedGraphicTaskInput extends AbstractModel
{
    /**
     * @var integer 视频转动图模板 ID
     */
    public $Definition;

    /**
     * @var float 动图在视频中的开始时间，单位为秒。
     */
    public $StartTimeOffset;

    /**
     * @var float 动图在视频中的结束时间，单位为秒。
     */
    public $EndTimeOffset;

    /**
     * @param integer $Definition 视频转动图模板 ID
     * @param float $StartTimeOffset 动图在视频中的开始时间，单位为秒。
     * @param float $EndTimeOffset 动图在视频中的结束时间，单位为秒。
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
        if (array_key_exists('Definition',$param) and $param['Definition'] !== null) {
            $this->Definition = $param['Definition'];
        }

        if (array_key_exists('StartTimeOffset',$param) and $param['StartTimeOffset'] !== null) {
            $this->StartTimeOffset = $param['StartTimeOffset'];
        }

        if (array_key_exists('EndTimeOffset',$param) and $param['EndTimeOffset'] !== null) {
            $this->EndTimeOffset = $param['EndTimeOffset'];
        }
    }
}
