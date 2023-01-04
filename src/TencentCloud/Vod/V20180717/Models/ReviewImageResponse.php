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
 * ReviewImage返回参数结构体
 *
 * @method array getReviewResultSet() 获取图片审核任务结果。
<font color=red>注意：该字段已废弃，建议使用 MediaReviewResult。</font> 
 * @method void setReviewResultSet(array $ReviewResultSet) 设置图片审核任务结果。
<font color=red>注意：该字段已废弃，建议使用 MediaReviewResult。</font> 
 * @method ReviewImageResult getMediaReviewResult() 获取图片审核任务结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaReviewResult(ReviewImageResult $MediaReviewResult) 设置图片审核任务结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ReviewImageResponse extends AbstractModel
{
    /**
     * @var array 图片审核任务结果。
<font color=red>注意：该字段已废弃，建议使用 MediaReviewResult。</font> 
     */
    public $ReviewResultSet;

    /**
     * @var ReviewImageResult 图片审核任务结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaReviewResult;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ReviewResultSet 图片审核任务结果。
<font color=red>注意：该字段已废弃，建议使用 MediaReviewResult。</font> 
     * @param ReviewImageResult $MediaReviewResult 图片审核任务结果。
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
        if (array_key_exists("ReviewResultSet",$param) and $param["ReviewResultSet"] !== null) {
            $this->ReviewResultSet = [];
            foreach ($param["ReviewResultSet"] as $key => $value){
                $obj = new ContentReviewResult();
                $obj->deserialize($value);
                array_push($this->ReviewResultSet, $obj);
            }
        }

        if (array_key_exists("MediaReviewResult",$param) and $param["MediaReviewResult"] !== null) {
            $this->MediaReviewResult = new ReviewImageResult();
            $this->MediaReviewResult->deserialize($param["MediaReviewResult"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
