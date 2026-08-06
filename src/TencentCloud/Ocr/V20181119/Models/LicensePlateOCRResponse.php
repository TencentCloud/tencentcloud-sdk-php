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
 * LicensePlateOCR返回参数结构体
 *
 * @method string getNumber() 获取<p>识别出的车牌号码。</p>
 * @method void setNumber(string $Number) 设置<p>识别出的车牌号码。</p>
 * @method integer getConfidence() 获取<p>置信度，0 - 100 之间。</p>
 * @method void setConfidence(integer $Confidence) 设置<p>置信度，0 - 100 之间。</p>
 * @method Rect getRect() 获取<p>文本行在原图片中的像素坐标框。</p>
 * @method void setRect(Rect $Rect) 设置<p>文本行在原图片中的像素坐标框。</p>
 * @method string getColor() 获取<p>识别出的车牌颜色，目前支持颜色包括 “白”、“黑”、“蓝”、“绿”、“黄”、“黄绿”、“临牌”、“喷漆”、“其它”。</p>
 * @method void setColor(string $Color) 设置<p>识别出的车牌颜色，目前支持颜色包括 “白”、“黑”、“蓝”、“绿”、“黄”、“黄绿”、“临牌”、“喷漆”、“其它”。</p>
 * @method array getLicensePlateInfos() 获取<p>全部车牌信息。</p>
 * @method void setLicensePlateInfos(array $LicensePlateInfos) 设置<p>全部车牌信息。</p>
 * @method string getLicensePlateCategory() 获取<p>车牌类别， 如： 标准实体车牌、非标准实体车牌、临牌，喷漆车牌  示例值：实体车牌</p>
 * @method void setLicensePlateCategory(string $LicensePlateCategory) 设置<p>车牌类别， 如： 标准实体车牌、非标准实体车牌、临牌，喷漆车牌  示例值：实体车牌</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class LicensePlateOCRResponse extends AbstractModel
{
    /**
     * @var string <p>识别出的车牌号码。</p>
     */
    public $Number;

    /**
     * @var integer <p>置信度，0 - 100 之间。</p>
     */
    public $Confidence;

    /**
     * @var Rect <p>文本行在原图片中的像素坐标框。</p>
     */
    public $Rect;

    /**
     * @var string <p>识别出的车牌颜色，目前支持颜色包括 “白”、“黑”、“蓝”、“绿”、“黄”、“黄绿”、“临牌”、“喷漆”、“其它”。</p>
     */
    public $Color;

    /**
     * @var array <p>全部车牌信息。</p>
     */
    public $LicensePlateInfos;

    /**
     * @var string <p>车牌类别， 如： 标准实体车牌、非标准实体车牌、临牌，喷漆车牌  示例值：实体车牌</p>
     */
    public $LicensePlateCategory;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Number <p>识别出的车牌号码。</p>
     * @param integer $Confidence <p>置信度，0 - 100 之间。</p>
     * @param Rect $Rect <p>文本行在原图片中的像素坐标框。</p>
     * @param string $Color <p>识别出的车牌颜色，目前支持颜色包括 “白”、“黑”、“蓝”、“绿”、“黄”、“黄绿”、“临牌”、“喷漆”、“其它”。</p>
     * @param array $LicensePlateInfos <p>全部车牌信息。</p>
     * @param string $LicensePlateCategory <p>车牌类别， 如： 标准实体车牌、非标准实体车牌、临牌，喷漆车牌  示例值：实体车牌</p>
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
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Rect",$param) and $param["Rect"] !== null) {
            $this->Rect = new Rect();
            $this->Rect->deserialize($param["Rect"]);
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("LicensePlateInfos",$param) and $param["LicensePlateInfos"] !== null) {
            $this->LicensePlateInfos = [];
            foreach ($param["LicensePlateInfos"] as $key => $value){
                $obj = new LicensePlateInfo();
                $obj->deserialize($value);
                array_push($this->LicensePlateInfos, $obj);
            }
        }

        if (array_key_exists("LicensePlateCategory",$param) and $param["LicensePlateCategory"] !== null) {
            $this->LicensePlateCategory = $param["LicensePlateCategory"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
