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
 * 选择指定的音轨或者视频输出
 *
 * @method string getSelectorType() 获取选择类型: PID | TRACK
 * @method void setSelectorType(string $SelectorType) 设置选择类型: PID | TRACK
 * @method PidSelector getPidSelector() 获取根据 PID 配置选择器
 * @method void setPidSelector(PidSelector $PidSelector) 设置根据 PID 配置选择器
 * @method TrackSelector getTrackSelector() 获取根据 Track 配置选择器
 * @method void setTrackSelector(TrackSelector $TrackSelector) 设置根据 Track 配置选择器
 */
class StreamSelector extends AbstractModel
{
    /**
     * @var string 选择类型: PID | TRACK
     */
    public $SelectorType;

    /**
     * @var PidSelector 根据 PID 配置选择器
     */
    public $PidSelector;

    /**
     * @var TrackSelector 根据 Track 配置选择器
     */
    public $TrackSelector;

    /**
     * @param string $SelectorType 选择类型: PID | TRACK
     * @param PidSelector $PidSelector 根据 PID 配置选择器
     * @param TrackSelector $TrackSelector 根据 Track 配置选择器
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
        if (array_key_exists("SelectorType",$param) and $param["SelectorType"] !== null) {
            $this->SelectorType = $param["SelectorType"];
        }

        if (array_key_exists("PidSelector",$param) and $param["PidSelector"] !== null) {
            $this->PidSelector = new PidSelector();
            $this->PidSelector->deserialize($param["PidSelector"]);
        }

        if (array_key_exists("TrackSelector",$param) and $param["TrackSelector"] !== null) {
            $this->TrackSelector = new TrackSelector();
            $this->TrackSelector->deserialize($param["TrackSelector"]);
        }
    }
}
