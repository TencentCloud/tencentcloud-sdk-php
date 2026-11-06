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
 * DescribeTRTCVoicePrint请求参数结构体
 *
 * @method string getSdkAppId() 获取SdkappId
 * @method void setSdkAppId(string $SdkAppId) 设置SdkappId
 * @method integer getOffset() 获取分页起始偏移，0 或不传表示从第一条开始
 * @method void setOffset(integer $Offset) 设置分页起始偏移，0 或不传表示从第一条开始
 * @method integer getLimit() 获取每页返回数量，默认 20，最大 100；超过最大值会被截断到 100
 * @method void setLimit(integer $Limit) 设置每页返回数量，默认 20，最大 100；超过最大值会被截断到 100
 */
class DescribeTRTCVoicePrintRequest extends AbstractModel
{
    /**
     * @var string SdkappId
     */
    public $SdkAppId;

    /**
     * @var integer 分页起始偏移，0 或不传表示从第一条开始
     */
    public $Offset;

    /**
     * @var integer 每页返回数量，默认 20，最大 100；超过最大值会被截断到 100
     */
    public $Limit;

    /**
     * @param string $SdkAppId SdkappId
     * @param integer $Offset 分页起始偏移，0 或不传表示从第一条开始
     * @param integer $Limit 每页返回数量，默认 20，最大 100；超过最大值会被截断到 100
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
