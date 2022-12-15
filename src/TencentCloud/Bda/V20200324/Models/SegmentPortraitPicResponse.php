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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SegmentPortraitPic返回参数结构体
 *
 * @method string getResultImage() 获取处理后的图片 base64 数据，透明背景图。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultImage(string $ResultImage) 设置处理后的图片 base64 数据，透明背景图。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultMask() 获取一个通过 base64 编码的文件，解码后文件由 Float 型浮点数组成。这些浮点数代表原图从左上角开始的每一行的每一个像素点，每一个浮点数的值是原图相应像素点位于人体轮廓内的置信度（0-1）转化的灰度值（0-255）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultMask(string $ResultMask) 设置一个通过 base64 编码的文件，解码后文件由 Float 型浮点数组成。这些浮点数代表原图从左上角开始的每一行的每一个像素点，每一个浮点数的值是原图相应像素点位于人体轮廓内的置信度（0-1）转化的灰度值（0-255）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasForeground() 获取图片是否存在前景。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasForeground(boolean $HasForeground) 设置图片是否存在前景。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultImageUrl() 获取支持将处理过的图片 base64 数据，透明背景图以Url的形式返回值，Url有效期为30分钟。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultImageUrl(string $ResultImageUrl) 设置支持将处理过的图片 base64 数据，透明背景图以Url的形式返回值，Url有效期为30分钟。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultMaskUrl() 获取一个通过 base64 编码的文件，解码后文件由 Float 型浮点数组成。支持以Url形式的返回值；Url有效期为30分钟。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultMaskUrl(string $ResultMaskUrl) 设置一个通过 base64 编码的文件，解码后文件由 Float 型浮点数组成。支持以Url形式的返回值；Url有效期为30分钟。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class SegmentPortraitPicResponse extends AbstractModel
{
    /**
     * @var string 处理后的图片 base64 数据，透明背景图。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultImage;

    /**
     * @var string 一个通过 base64 编码的文件，解码后文件由 Float 型浮点数组成。这些浮点数代表原图从左上角开始的每一行的每一个像素点，每一个浮点数的值是原图相应像素点位于人体轮廓内的置信度（0-1）转化的灰度值（0-255）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultMask;

    /**
     * @var boolean 图片是否存在前景。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasForeground;

    /**
     * @var string 支持将处理过的图片 base64 数据，透明背景图以Url的形式返回值，Url有效期为30分钟。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultImageUrl;

    /**
     * @var string 一个通过 base64 编码的文件，解码后文件由 Float 型浮点数组成。支持以Url形式的返回值；Url有效期为30分钟。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultMaskUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResultImage 处理后的图片 base64 数据，透明背景图。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultMask 一个通过 base64 编码的文件，解码后文件由 Float 型浮点数组成。这些浮点数代表原图从左上角开始的每一行的每一个像素点，每一个浮点数的值是原图相应像素点位于人体轮廓内的置信度（0-1）转化的灰度值（0-255）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasForeground 图片是否存在前景。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultImageUrl 支持将处理过的图片 base64 数据，透明背景图以Url的形式返回值，Url有效期为30分钟。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultMaskUrl 一个通过 base64 编码的文件，解码后文件由 Float 型浮点数组成。支持以Url形式的返回值；Url有效期为30分钟。
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
        if (array_key_exists("ResultImage",$param) and $param["ResultImage"] !== null) {
            $this->ResultImage = $param["ResultImage"];
        }

        if (array_key_exists("ResultMask",$param) and $param["ResultMask"] !== null) {
            $this->ResultMask = $param["ResultMask"];
        }

        if (array_key_exists("HasForeground",$param) and $param["HasForeground"] !== null) {
            $this->HasForeground = $param["HasForeground"];
        }

        if (array_key_exists("ResultImageUrl",$param) and $param["ResultImageUrl"] !== null) {
            $this->ResultImageUrl = $param["ResultImageUrl"];
        }

        if (array_key_exists("ResultMaskUrl",$param) and $param["ResultMaskUrl"] !== null) {
            $this->ResultMaskUrl = $param["ResultMaskUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
