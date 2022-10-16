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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateReflectSequence返回参数结构体
 *
 * @method string getReflectSequenceUrl() 获取光线序列的资源链接，下载后透传给SDK即可开始核身。
 * @method void setReflectSequenceUrl(string $ReflectSequenceUrl) 设置光线序列的资源链接，下载后透传给SDK即可开始核身。
 * @method string getReflectSequenceMd5() 获取光线序列的资源MD5值，用于校验改序列是否被篡改。
 * @method void setReflectSequenceMd5(string $ReflectSequenceMd5) 设置光线序列的资源MD5值，用于校验改序列是否被篡改。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GenerateReflectSequenceResponse extends AbstractModel
{
    /**
     * @var string 光线序列的资源链接，下载后透传给SDK即可开始核身。
     */
    public $ReflectSequenceUrl;

    /**
     * @var string 光线序列的资源MD5值，用于校验改序列是否被篡改。
     */
    public $ReflectSequenceMd5;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ReflectSequenceUrl 光线序列的资源链接，下载后透传给SDK即可开始核身。
     * @param string $ReflectSequenceMd5 光线序列的资源MD5值，用于校验改序列是否被篡改。
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
        if (array_key_exists("ReflectSequenceUrl",$param) and $param["ReflectSequenceUrl"] !== null) {
            $this->ReflectSequenceUrl = $param["ReflectSequenceUrl"];
        }

        if (array_key_exists("ReflectSequenceMd5",$param) and $param["ReflectSequenceMd5"] !== null) {
            $this->ReflectSequenceMd5 = $param["ReflectSequenceMd5"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
