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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸图片和待被融合的素材模板图的人脸位置信息。
 *
 * @method Image getMergeFaceImage() 获取融合图片
 * @method void setMergeFaceImage(Image $MergeFaceImage) 设置融合图片
 * @method FaceRect getMergeFaceRect() 获取上传的图片人脸位置信息（人脸框）
Width、Height >= 30。
 * @method void setMergeFaceRect(FaceRect $MergeFaceRect) 设置上传的图片人脸位置信息（人脸框）
Width、Height >= 30。
 * @method string getTemplateFaceID() 获取素材人脸ID，不填默认取上传图片中最大人脸。
 * @method void setTemplateFaceID(string $TemplateFaceID) 设置素材人脸ID，不填默认取上传图片中最大人脸。
 */
class FaceMergeInfo extends AbstractModel
{
    /**
     * @var Image 融合图片
     */
    public $MergeFaceImage;

    /**
     * @var FaceRect 上传的图片人脸位置信息（人脸框）
Width、Height >= 30。
     */
    public $MergeFaceRect;

    /**
     * @var string 素材人脸ID，不填默认取上传图片中最大人脸。
     */
    public $TemplateFaceID;

    /**
     * @param Image $MergeFaceImage 融合图片
     * @param FaceRect $MergeFaceRect 上传的图片人脸位置信息（人脸框）
Width、Height >= 30。
     * @param string $TemplateFaceID 素材人脸ID，不填默认取上传图片中最大人脸。
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
        if (array_key_exists("MergeFaceImage",$param) and $param["MergeFaceImage"] !== null) {
            $this->MergeFaceImage = new Image();
            $this->MergeFaceImage->deserialize($param["MergeFaceImage"]);
        }

        if (array_key_exists("MergeFaceRect",$param) and $param["MergeFaceRect"] !== null) {
            $this->MergeFaceRect = new FaceRect();
            $this->MergeFaceRect->deserialize($param["MergeFaceRect"]);
        }

        if (array_key_exists("TemplateFaceID",$param) and $param["TemplateFaceID"] !== null) {
            $this->TemplateFaceID = $param["TemplateFaceID"];
        }
    }
}
