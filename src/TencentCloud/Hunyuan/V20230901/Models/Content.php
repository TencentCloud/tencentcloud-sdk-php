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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可以传入多种类型的内容，目前支持文本、图片、视频。
 *
 * @method string getType() 获取内容类型
注意：
需包含至少一个 Type 为"text"的参数。
参数值可选范围：["text", "image_url","video_url","video_frames"]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置内容类型
注意：
需包含至少一个 Type 为"text"的参数。
参数值可选范围：["text", "image_url","video_url","video_frames"]
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取当 Type 为 text 时使用，表示具体的文本内容。当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置当 Type 为 text 时使用，表示具体的文本内容。当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageUrl getImageUrl() 获取图片的url，当 Type 为 image_url 时使用，表示具体的图片内容
如"https://example.com/1.png" 或 图片的base64（注意 "data:image/jpeg;base64," 为必要部分）："data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAA......"。当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageUrl(ImageUrl $ImageUrl) 设置图片的url，当 Type 为 image_url 时使用，表示具体的图片内容
如"https://example.com/1.png" 或 图片的base64（注意 "data:image/jpeg;base64," 为必要部分）："data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAA......"。当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VideoUrl getVideoUrl() 获取当 Type 为 video_url 时使用，标识具体的视频链接内容，如"https://your-video-path.mp4"。当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoUrl(VideoUrl $VideoUrl) 设置当 Type 为 video_url 时使用，标识具体的视频链接内容，如"https://your-video-path.mp4"。当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VideoFrames getVideoFrames() 获取当 Type 为 video_frames 时使用，标识具体的视频内图像帧内容，当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoFrames(VideoFrames $VideoFrames) 设置当 Type 为 video_frames 时使用，标识具体的视频内图像帧内容，当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Content extends AbstractModel
{
    /**
     * @var string 内容类型
注意：
需包含至少一个 Type 为"text"的参数。
参数值可选范围：["text", "image_url","video_url","video_frames"]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 当 Type 为 text 时使用，表示具体的文本内容。当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var ImageUrl 图片的url，当 Type 为 image_url 时使用，表示具体的图片内容
如"https://example.com/1.png" 或 图片的base64（注意 "data:image/jpeg;base64," 为必要部分）："data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAA......"。当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageUrl;

    /**
     * @var VideoUrl 当 Type 为 video_url 时使用，标识具体的视频链接内容，如"https://your-video-path.mp4"。当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoUrl;

    /**
     * @var VideoFrames 当 Type 为 video_frames 时使用，标识具体的视频内图像帧内容，当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoFrames;

    /**
     * @param string $Type 内容类型
注意：
需包含至少一个 Type 为"text"的参数。
参数值可选范围：["text", "image_url","video_url","video_frames"]
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 当 Type 为 text 时使用，表示具体的文本内容。当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageUrl $ImageUrl 图片的url，当 Type 为 image_url 时使用，表示具体的图片内容
如"https://example.com/1.png" 或 图片的base64（注意 "data:image/jpeg;base64," 为必要部分）："data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAA......"。当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VideoUrl $VideoUrl 当 Type 为 video_url 时使用，标识具体的视频链接内容，如"https://your-video-path.mp4"。当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VideoFrames $VideoFrames 当 Type 为 video_frames 时使用，标识具体的视频内图像帧内容，当 Type 为 其他类型 时，当前字段内容需保持为空，传递内容不生效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = new ImageUrl();
            $this->ImageUrl->deserialize($param["ImageUrl"]);
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = new VideoUrl();
            $this->VideoUrl->deserialize($param["VideoUrl"]);
        }

        if (array_key_exists("VideoFrames",$param) and $param["VideoFrames"] !== null) {
            $this->VideoFrames = new VideoFrames();
            $this->VideoFrames->deserialize($param["VideoFrames"]);
        }
    }
}
