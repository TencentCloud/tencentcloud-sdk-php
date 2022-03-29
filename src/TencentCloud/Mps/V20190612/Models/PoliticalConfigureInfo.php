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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 涉敏任务控制参数
 *
 * @method PoliticalImgReviewTemplateInfo getImgReviewInfo() 获取画面涉敏控制参数。
 * @method void setImgReviewInfo(PoliticalImgReviewTemplateInfo $ImgReviewInfo) 设置画面涉敏控制参数。
 * @method PoliticalAsrReviewTemplateInfo getAsrReviewInfo() 获取语音涉敏控制参数。
 * @method void setAsrReviewInfo(PoliticalAsrReviewTemplateInfo $AsrReviewInfo) 设置语音涉敏控制参数。
 * @method PoliticalOcrReviewTemplateInfo getOcrReviewInfo() 获取文本涉敏控制参数。
 * @method void setOcrReviewInfo(PoliticalOcrReviewTemplateInfo $OcrReviewInfo) 设置文本涉敏控制参数。
 */
class PoliticalConfigureInfo extends AbstractModel
{
    /**
     * @var PoliticalImgReviewTemplateInfo 画面涉敏控制参数。
     */
    public $ImgReviewInfo;

    /**
     * @var PoliticalAsrReviewTemplateInfo 语音涉敏控制参数。
     */
    public $AsrReviewInfo;

    /**
     * @var PoliticalOcrReviewTemplateInfo 文本涉敏控制参数。
     */
    public $OcrReviewInfo;

    /**
     * @param PoliticalImgReviewTemplateInfo $ImgReviewInfo 画面涉敏控制参数。
     * @param PoliticalAsrReviewTemplateInfo $AsrReviewInfo 语音涉敏控制参数。
     * @param PoliticalOcrReviewTemplateInfo $OcrReviewInfo 文本涉敏控制参数。
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
        if (array_key_exists("ImgReviewInfo",$param) and $param["ImgReviewInfo"] !== null) {
            $this->ImgReviewInfo = new PoliticalImgReviewTemplateInfo();
            $this->ImgReviewInfo->deserialize($param["ImgReviewInfo"]);
        }

        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new PoliticalAsrReviewTemplateInfo();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new PoliticalOcrReviewTemplateInfo();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
