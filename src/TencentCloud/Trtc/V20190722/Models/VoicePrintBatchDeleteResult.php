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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量删除逐项结果（VoicePrintBatchDelete 出参 Results 元素）
 *
 * @method string getVoicePrintId() 获取<p>本项对应的声纹 ID。成功项与失败项均会返回。<br>示例值：59d83c76-8f4e-4a1b-9c2d-0e7f8a6b5c4d</p>
 * @method void setVoicePrintId(string $VoicePrintId) 设置<p>本项对应的声纹 ID。成功项与失败项均会返回。<br>示例值：59d83c76-8f4e-4a1b-9c2d-0e7f8a6b5c4d</p>
 * @method string getErrorCode() 获取<p>本项失败时的错误码，成功项为空。常见值：FailedOperation.VoicePrintNotFound（声纹不存在或已删除）、InvalidParameterValue.InvalidVoicePrintId（ID 格式非法）。<br>示例值：FailedOperation.VoicePrintNotFound</p>
 * @method void setErrorCode(string $ErrorCode) 设置<p>本项失败时的错误码，成功项为空。常见值：FailedOperation.VoicePrintNotFound（声纹不存在或已删除）、InvalidParameterValue.InvalidVoicePrintId（ID 格式非法）。<br>示例值：FailedOperation.VoicePrintNotFound</p>
 * @method string getErrorMessage() 获取<p>本项失败时的错误描述，成功项为空。<br>示例值：voiceprint not found</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>本项失败时的错误描述，成功项为空。<br>示例值：voiceprint not found</p>
 */
class VoicePrintBatchDeleteResult extends AbstractModel
{
    /**
     * @var string <p>本项对应的声纹 ID。成功项与失败项均会返回。<br>示例值：59d83c76-8f4e-4a1b-9c2d-0e7f8a6b5c4d</p>
     */
    public $VoicePrintId;

    /**
     * @var string <p>本项失败时的错误码，成功项为空。常见值：FailedOperation.VoicePrintNotFound（声纹不存在或已删除）、InvalidParameterValue.InvalidVoicePrintId（ID 格式非法）。<br>示例值：FailedOperation.VoicePrintNotFound</p>
     */
    public $ErrorCode;

    /**
     * @var string <p>本项失败时的错误描述，成功项为空。<br>示例值：voiceprint not found</p>
     */
    public $ErrorMessage;

    /**
     * @param string $VoicePrintId <p>本项对应的声纹 ID。成功项与失败项均会返回。<br>示例值：59d83c76-8f4e-4a1b-9c2d-0e7f8a6b5c4d</p>
     * @param string $ErrorCode <p>本项失败时的错误码，成功项为空。常见值：FailedOperation.VoicePrintNotFound（声纹不存在或已删除）、InvalidParameterValue.InvalidVoicePrintId（ID 格式非法）。<br>示例值：FailedOperation.VoicePrintNotFound</p>
     * @param string $ErrorMessage <p>本项失败时的错误描述，成功项为空。<br>示例值：voiceprint not found</p>
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
        if (array_key_exists("VoicePrintId",$param) and $param["VoicePrintId"] !== null) {
            $this->VoicePrintId = $param["VoicePrintId"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
