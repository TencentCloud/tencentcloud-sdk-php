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
 * BatchDeleteTRTCVoicePrint请求参数结构体
 *
 * @method array getVoicePrintIds() 获取待批量删除的声纹 ID 列表，最多 50 个；请求内自动去重；按 (AppId, SdkAppId, VoicePrintId) 做数据隔离
 * @method void setVoicePrintIds(array $VoicePrintIds) 设置待批量删除的声纹 ID 列表，最多 50 个；请求内自动去重；按 (AppId, SdkAppId, VoicePrintId) 做数据隔离
 * @method string getSdkAppId() 获取SdkappId
 * @method void setSdkAppId(string $SdkAppId) 设置SdkappId
 */
class BatchDeleteTRTCVoicePrintRequest extends AbstractModel
{
    /**
     * @var array 待批量删除的声纹 ID 列表，最多 50 个；请求内自动去重；按 (AppId, SdkAppId, VoicePrintId) 做数据隔离
     */
    public $VoicePrintIds;

    /**
     * @var string SdkappId
     */
    public $SdkAppId;

    /**
     * @param array $VoicePrintIds 待批量删除的声纹 ID 列表，最多 50 个；请求内自动去重；按 (AppId, SdkAppId, VoicePrintId) 做数据隔离
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
        if (array_key_exists("VoicePrintIds",$param) and $param["VoicePrintIds"] !== null) {
            $this->VoicePrintIds = $param["VoicePrintIds"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
