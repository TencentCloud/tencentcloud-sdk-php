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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ProcessImage请求参数结构体
 *
 * @method string getFileId() 获取媒体文件 ID，即该文件在云点播上的全局唯一标识符。本接口要求媒体文件必须是图片格式。
 * @method void setFileId(string $FileId) 设置媒体文件 ID，即该文件在云点播上的全局唯一标识符。本接口要求媒体文件必须是图片格式。
 * @method string getOperation() 获取操作类型。现在仅支持填 ContentReview，表示内容智能识别。
 * @method void setOperation(string $Operation) 设置操作类型。现在仅支持填 ContentReview，表示内容智能识别。
 * @method ImageContentReviewInput getContentReviewInput() 获取图片内容智能识别参数，当 Operation 为 ContentReview 时该字段有效。
 * @method void setContentReviewInput(ImageContentReviewInput $ContentReviewInput) 设置图片内容智能识别参数，当 Operation 为 ContentReview 时该字段有效。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 */
class ProcessImageRequest extends AbstractModel
{
    /**
     * @var string 媒体文件 ID，即该文件在云点播上的全局唯一标识符。本接口要求媒体文件必须是图片格式。
     */
    public $FileId;

    /**
     * @var string 操作类型。现在仅支持填 ContentReview，表示内容智能识别。
     */
    public $Operation;

    /**
     * @var ImageContentReviewInput 图片内容智能识别参数，当 Operation 为 ContentReview 时该字段有效。
     */
    public $ContentReviewInput;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @param string $FileId 媒体文件 ID，即该文件在云点播上的全局唯一标识符。本接口要求媒体文件必须是图片格式。
     * @param string $Operation 操作类型。现在仅支持填 ContentReview，表示内容智能识别。
     * @param ImageContentReviewInput $ContentReviewInput 图片内容智能识别参数，当 Operation 为 ContentReview 时该字段有效。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ContentReviewInput",$param) and $param["ContentReviewInput"] !== null) {
            $this->ContentReviewInput = new ImageContentReviewInput();
            $this->ContentReviewInput->deserialize($param["ContentReviewInput"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
