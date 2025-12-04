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
 * 模板信息
 *
 * @method string getTemplateFaceID() 获取角色ID。需要与MergeInfos中的TemplateFaceID依次对应。需要填数字，建议填"0"、"1"，依次累加。
 * @method void setTemplateFaceID(string $TemplateFaceID) 设置角色ID。需要与MergeInfos中的TemplateFaceID依次对应。需要填数字，建议填"0"、"1"，依次累加。
 * @method Image getTemplateFaceImage() 获取视频模板中要替换的人脸图片
 * @method void setTemplateFaceImage(Image $TemplateFaceImage) 设置视频模板中要替换的人脸图片
 * @method FaceRect getTemplateFaceRect() 获取视频模板中要替换的人脸图片的人脸框。不填默认取要替换的人脸图片中最大人脸。
 * @method void setTemplateFaceRect(FaceRect $TemplateFaceRect) 设置视频模板中要替换的人脸图片的人脸框。不填默认取要替换的人脸图片中最大人脸。
 */
class FaceTemplateInfo extends AbstractModel
{
    /**
     * @var string 角色ID。需要与MergeInfos中的TemplateFaceID依次对应。需要填数字，建议填"0"、"1"，依次累加。
     */
    public $TemplateFaceID;

    /**
     * @var Image 视频模板中要替换的人脸图片
     */
    public $TemplateFaceImage;

    /**
     * @var FaceRect 视频模板中要替换的人脸图片的人脸框。不填默认取要替换的人脸图片中最大人脸。
     */
    public $TemplateFaceRect;

    /**
     * @param string $TemplateFaceID 角色ID。需要与MergeInfos中的TemplateFaceID依次对应。需要填数字，建议填"0"、"1"，依次累加。
     * @param Image $TemplateFaceImage 视频模板中要替换的人脸图片
     * @param FaceRect $TemplateFaceRect 视频模板中要替换的人脸图片的人脸框。不填默认取要替换的人脸图片中最大人脸。
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
        if (array_key_exists("TemplateFaceID",$param) and $param["TemplateFaceID"] !== null) {
            $this->TemplateFaceID = $param["TemplateFaceID"];
        }

        if (array_key_exists("TemplateFaceImage",$param) and $param["TemplateFaceImage"] !== null) {
            $this->TemplateFaceImage = new Image();
            $this->TemplateFaceImage->deserialize($param["TemplateFaceImage"]);
        }

        if (array_key_exists("TemplateFaceRect",$param) and $param["TemplateFaceRect"] !== null) {
            $this->TemplateFaceRect = new FaceRect();
            $this->TemplateFaceRect->deserialize($param["TemplateFaceRect"]);
        }
    }
}
