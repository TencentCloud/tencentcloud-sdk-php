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
 * TWeSee 视频语义浓缩配置
 *
 * @method boolean getDisableHighlight() 获取是否禁用视频浓缩
 * @method void setDisableHighlight(boolean $DisableHighlight) 设置是否禁用视频浓缩
 * @method array getDetectTypes() 获取包含在浓缩结果中的目标类别。可选值：

- `person`：人
- `pet`：宠物
- `vehicle`：车辆
 * @method void setDetectTypes(array $DetectTypes) 设置包含在浓缩结果中的目标类别。可选值：

- `person`：人
- `pet`：宠物
- `vehicle`：车辆
 * @method boolean getEnableSummary() 获取指定是否返回浓缩视频的摘要文本
 * @method void setEnableSummary(boolean $EnableSummary) 设置指定是否返回浓缩视频的摘要文本
 * @method integer getKeyFramesNum() 获取指定返回的关键帧图像数量
 * @method void setKeyFramesNum(integer $KeyFramesNum) 设置指定返回的关键帧图像数量
 */
class SeeCompHighlightConfig extends AbstractModel
{
    /**
     * @var boolean 是否禁用视频浓缩
     */
    public $DisableHighlight;

    /**
     * @var array 包含在浓缩结果中的目标类别。可选值：

- `person`：人
- `pet`：宠物
- `vehicle`：车辆
     */
    public $DetectTypes;

    /**
     * @var boolean 指定是否返回浓缩视频的摘要文本
     */
    public $EnableSummary;

    /**
     * @var integer 指定返回的关键帧图像数量
     */
    public $KeyFramesNum;

    /**
     * @param boolean $DisableHighlight 是否禁用视频浓缩
     * @param array $DetectTypes 包含在浓缩结果中的目标类别。可选值：

- `person`：人
- `pet`：宠物
- `vehicle`：车辆
     * @param boolean $EnableSummary 指定是否返回浓缩视频的摘要文本
     * @param integer $KeyFramesNum 指定返回的关键帧图像数量
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
        if (array_key_exists("DisableHighlight",$param) and $param["DisableHighlight"] !== null) {
            $this->DisableHighlight = $param["DisableHighlight"];
        }

        if (array_key_exists("DetectTypes",$param) and $param["DetectTypes"] !== null) {
            $this->DetectTypes = $param["DetectTypes"];
        }

        if (array_key_exists("EnableSummary",$param) and $param["EnableSummary"] !== null) {
            $this->EnableSummary = $param["EnableSummary"];
        }

        if (array_key_exists("KeyFramesNum",$param) and $param["KeyFramesNum"] !== null) {
            $this->KeyFramesNum = $param["KeyFramesNum"];
        }
    }
}
