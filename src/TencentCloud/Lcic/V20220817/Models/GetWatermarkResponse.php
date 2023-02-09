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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetWatermark返回参数结构体
 *
 * @method WatermarkConfig getTeacherLogo() 获取老师视频区域的水印参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTeacherLogo(WatermarkConfig $TeacherLogo) 设置老师视频区域的水印参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method WatermarkConfig getBoardLogo() 获取白板区域的水印参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBoardLogo(WatermarkConfig $BoardLogo) 设置白板区域的水印参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method BackgroundPictureConfig getBackgroundPicture() 获取背景图片配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackgroundPicture(BackgroundPictureConfig $BackgroundPicture) 设置背景图片配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method TextMarkConfig getText() 获取文字水印配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(TextMarkConfig $Text) 设置文字水印配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetWatermarkResponse extends AbstractModel
{
    /**
     * @var WatermarkConfig 老师视频区域的水印参数配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TeacherLogo;

    /**
     * @var WatermarkConfig 白板区域的水印参数配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BoardLogo;

    /**
     * @var BackgroundPictureConfig 背景图片配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackgroundPicture;

    /**
     * @var TextMarkConfig 文字水印配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param WatermarkConfig $TeacherLogo 老师视频区域的水印参数配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param WatermarkConfig $BoardLogo 白板区域的水印参数配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param BackgroundPictureConfig $BackgroundPicture 背景图片配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param TextMarkConfig $Text 文字水印配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TeacherLogo",$param) and $param["TeacherLogo"] !== null) {
            $this->TeacherLogo = new WatermarkConfig();
            $this->TeacherLogo->deserialize($param["TeacherLogo"]);
        }

        if (array_key_exists("BoardLogo",$param) and $param["BoardLogo"] !== null) {
            $this->BoardLogo = new WatermarkConfig();
            $this->BoardLogo->deserialize($param["BoardLogo"]);
        }

        if (array_key_exists("BackgroundPicture",$param) and $param["BackgroundPicture"] !== null) {
            $this->BackgroundPicture = new BackgroundPictureConfig();
            $this->BackgroundPicture->deserialize($param["BackgroundPicture"]);
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = new TextMarkConfig();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
