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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 意愿核身点头确认模式结果详细数据
 *
 * @method string getVideo() 获取视频base64编码（其中包含全程提示文本和点头音频，mp4格式）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideo(string $Video) 设置视频base64编码（其中包含全程提示文本和点头音频，mp4格式）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getScreenShot() 获取屏幕截图base64编码列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScreenShot(array $ScreenShot) 设置屏幕截图base64编码列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntentionActionResultDetail extends AbstractModel
{
    /**
     * @var string 视频base64编码（其中包含全程提示文本和点头音频，mp4格式）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Video;

    /**
     * @var array 屏幕截图base64编码列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScreenShot;

    /**
     * @param string $Video 视频base64编码（其中包含全程提示文本和点头音频，mp4格式）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ScreenShot 屏幕截图base64编码列表
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
        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = $param["Video"];
        }

        if (array_key_exists("ScreenShot",$param) and $param["ScreenShot"] !== null) {
            $this->ScreenShot = $param["ScreenShot"];
        }
    }
}
