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
 * DeleteTRTCVoicePrint请求参数结构体
 *
 * @method string getVoicePrintId() 获取待删除的声纹 ID（由 RegisterTRTCVoicePrint返回）。删除为软删，按 (AppId, SdkAppId, VoicePrintId) 做数据隔离。
 * @method void setVoicePrintId(string $VoicePrintId) 设置待删除的声纹 ID（由 RegisterTRTCVoicePrint返回）。删除为软删，按 (AppId, SdkAppId, VoicePrintId) 做数据隔离。
 * @method string getSdkAppId() 获取SdkappId
 * @method void setSdkAppId(string $SdkAppId) 设置SdkappId
 */
class DeleteTRTCVoicePrintRequest extends AbstractModel
{
    /**
     * @var string 待删除的声纹 ID（由 RegisterTRTCVoicePrint返回）。删除为软删，按 (AppId, SdkAppId, VoicePrintId) 做数据隔离。
     */
    public $VoicePrintId;

    /**
     * @var string SdkappId
     */
    public $SdkAppId;

    /**
     * @param string $VoicePrintId 待删除的声纹 ID（由 RegisterTRTCVoicePrint返回）。删除为软删，按 (AppId, SdkAppId, VoicePrintId) 做数据隔离。
     * @param string $SdkAppId SdkappId
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

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
