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
 * 文件审核信息。
 *
 * @method ReviewInfo getMediaReviewInfo() 获取媒体审核信息\*。

\* 只展示通过 [音视频审核(ReviewAudioVideo)](https://cloud.tencent.com/document/api/266/80283) 或 [图片审核(ReviewImage)](https://cloud.tencent.com/document/api/266/73217) 发起的审核结果信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaReviewInfo(ReviewInfo $MediaReviewInfo) 设置媒体审核信息\*。

\* 只展示通过 [音视频审核(ReviewAudioVideo)](https://cloud.tencent.com/document/api/266/80283) 或 [图片审核(ReviewImage)](https://cloud.tencent.com/document/api/266/73217) 发起的审核结果信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ReviewInfo getCoverReviewInfo() 获取媒体封面审核信息\*。

\* 只展示通过 [音视频审核(ReviewAudioVideo)](https://cloud.tencent.com/document/api/266/80283) 或 [图片审核(ReviewImage)](https://cloud.tencent.com/document/api/266/73217) 发起的审核结果信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverReviewInfo(ReviewInfo $CoverReviewInfo) 设置媒体封面审核信息\*。

\* 只展示通过 [音视频审核(ReviewAudioVideo)](https://cloud.tencent.com/document/api/266/80283) 或 [图片审核(ReviewImage)](https://cloud.tencent.com/document/api/266/73217) 发起的审核结果信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileReviewInfo extends AbstractModel
{
    /**
     * @var ReviewInfo 媒体审核信息\*。

\* 只展示通过 [音视频审核(ReviewAudioVideo)](https://cloud.tencent.com/document/api/266/80283) 或 [图片审核(ReviewImage)](https://cloud.tencent.com/document/api/266/73217) 发起的审核结果信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaReviewInfo;

    /**
     * @var ReviewInfo 媒体封面审核信息\*。

\* 只展示通过 [音视频审核(ReviewAudioVideo)](https://cloud.tencent.com/document/api/266/80283) 或 [图片审核(ReviewImage)](https://cloud.tencent.com/document/api/266/73217) 发起的审核结果信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverReviewInfo;

    /**
     * @param ReviewInfo $MediaReviewInfo 媒体审核信息\*。

\* 只展示通过 [音视频审核(ReviewAudioVideo)](https://cloud.tencent.com/document/api/266/80283) 或 [图片审核(ReviewImage)](https://cloud.tencent.com/document/api/266/73217) 发起的审核结果信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ReviewInfo $CoverReviewInfo 媒体封面审核信息\*。

\* 只展示通过 [音视频审核(ReviewAudioVideo)](https://cloud.tencent.com/document/api/266/80283) 或 [图片审核(ReviewImage)](https://cloud.tencent.com/document/api/266/73217) 发起的审核结果信息。
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
        if (array_key_exists("MediaReviewInfo",$param) and $param["MediaReviewInfo"] !== null) {
            $this->MediaReviewInfo = new ReviewInfo();
            $this->MediaReviewInfo->deserialize($param["MediaReviewInfo"]);
        }

        if (array_key_exists("CoverReviewInfo",$param) and $param["CoverReviewInfo"] !== null) {
            $this->CoverReviewInfo = new ReviewInfo();
            $this->CoverReviewInfo->deserialize($param["CoverReviewInfo"]);
        }
    }
}
