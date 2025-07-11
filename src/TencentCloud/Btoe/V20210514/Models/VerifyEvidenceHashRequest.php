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
namespace TencentCloud\Btoe\V20210514\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyEvidenceHash请求参数结构体
 *
 * @method string getEvidenceHash() 获取存证内容hash，hash类型即为用户在存证时所用或所选的hash类型
 * @method void setEvidenceHash(string $EvidenceHash) 设置存证内容hash，hash类型即为用户在存证时所用或所选的hash类型
 */
class VerifyEvidenceHashRequest extends AbstractModel
{
    /**
     * @var string 存证内容hash，hash类型即为用户在存证时所用或所选的hash类型
     */
    public $EvidenceHash;

    /**
     * @param string $EvidenceHash 存证内容hash，hash类型即为用户在存证时所用或所选的hash类型
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
        if (array_key_exists("EvidenceHash",$param) and $param["EvidenceHash"] !== null) {
            $this->EvidenceHash = $param["EvidenceHash"];
        }
    }
}
