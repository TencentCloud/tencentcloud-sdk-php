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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CropEnhanceImageOCR返回参数结构体
 *
 * @method integer getCroppedWidth() 获取<p>处理后图的宽</p>
 * @method void setCroppedWidth(integer $CroppedWidth) 设置<p>处理后图的宽</p>
 * @method integer getCroppedHeight() 获取<p>处理后图的高</p>
 * @method void setCroppedHeight(integer $CroppedHeight) 设置<p>处理后图的高</p>
 * @method string getCroppedImage() 获取<p>图像处理后的jpg图片，base64格式</p>
 * @method void setCroppedImage(string $CroppedImage) 设置<p>图像处理后的jpg图片，base64格式</p>
 * @method array getPosition() 获取<p>切图区域的4个角点坐标, 是个长度为8的数组<br>[0,1,2,3,4,5,6,7]</p><p>(0,1) 左上角坐标<br>(2,3) 右上角坐标<br>(4,5) 右下角坐标<br>(6,7) 左下角坐标</p>
 * @method void setPosition(array $Position) 设置<p>切图区域的4个角点坐标, 是个长度为8的数组<br>[0,1,2,3,4,5,6,7]</p><p>(0,1) 左上角坐标<br>(2,3) 右上角坐标<br>(4,5) 右下角坐标<br>(6,7) 左下角坐标</p>
 * @method integer getAngle() 获取<p>图像角度，AdjustOrientation =1时生效, 返回值如下  -1: 失败  0、90、180、270</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAngle(integer $Angle) 设置<p>图像角度，AdjustOrientation =1时生效, 返回值如下  -1: 失败  0、90、180、270</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CropEnhanceImageOCRResponse extends AbstractModel
{
    /**
     * @var integer <p>处理后图的宽</p>
     */
    public $CroppedWidth;

    /**
     * @var integer <p>处理后图的高</p>
     */
    public $CroppedHeight;

    /**
     * @var string <p>图像处理后的jpg图片，base64格式</p>
     */
    public $CroppedImage;

    /**
     * @var array <p>切图区域的4个角点坐标, 是个长度为8的数组<br>[0,1,2,3,4,5,6,7]</p><p>(0,1) 左上角坐标<br>(2,3) 右上角坐标<br>(4,5) 右下角坐标<br>(6,7) 左下角坐标</p>
     */
    public $Position;

    /**
     * @var integer <p>图像角度，AdjustOrientation =1时生效, 返回值如下  -1: 失败  0、90、180、270</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Angle;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $CroppedWidth <p>处理后图的宽</p>
     * @param integer $CroppedHeight <p>处理后图的高</p>
     * @param string $CroppedImage <p>图像处理后的jpg图片，base64格式</p>
     * @param array $Position <p>切图区域的4个角点坐标, 是个长度为8的数组<br>[0,1,2,3,4,5,6,7]</p><p>(0,1) 左上角坐标<br>(2,3) 右上角坐标<br>(4,5) 右下角坐标<br>(6,7) 左下角坐标</p>
     * @param integer $Angle <p>图像角度，AdjustOrientation =1时生效, 返回值如下  -1: 失败  0、90、180、270</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CroppedWidth",$param) and $param["CroppedWidth"] !== null) {
            $this->CroppedWidth = $param["CroppedWidth"];
        }

        if (array_key_exists("CroppedHeight",$param) and $param["CroppedHeight"] !== null) {
            $this->CroppedHeight = $param["CroppedHeight"];
        }

        if (array_key_exists("CroppedImage",$param) and $param["CroppedImage"] !== null) {
            $this->CroppedImage = $param["CroppedImage"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
