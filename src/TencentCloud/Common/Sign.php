<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Common;

use TencentCloud\Common\Exception\TencentCloudSDKException;
/**
 * 签名类，禁止client引用
 * @package TencentCloud\Common
 * @throws TencentCloudSDKException
 */
class Sign
{
    /**
     * @throws TencentCloudSDKException
     */
    public static function sign($secretKey, $signStr, $signMethod)
    {
        $signMethodMap = ["HmacSHA1" => "SHA1", "HmacSHA256" => "SHA256"];
        if (!array_key_exists($signMethod, $signMethodMap)) {
            throw new TencentCloudSDKException("signMethod invalid", "signMethod only support (HmacSHA1, HmacSHA256)");
        }
        $signature = base64_encode(hash_hmac($signMethodMap[$signMethod], $signStr, $secretKey, true));
        return $signature;
    }
}
