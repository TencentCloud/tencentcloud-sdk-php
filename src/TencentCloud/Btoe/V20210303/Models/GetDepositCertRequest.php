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
namespace TencentCloud\Btoe\V20210303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDepositCert请求参数结构体
 *
 * @method string getEvidenceId() 获取存证编码
 * @method void setEvidenceId(string $EvidenceId) 设置存证编码
 */
class GetDepositCertRequest extends AbstractModel
{
    /**
     * @var string 存证编码
     */
    public $EvidenceId;

    /**
     * @param string $EvidenceId 存证编码
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
        if (array_key_exists("EvidenceId",$param) and $param["EvidenceId"] !== null) {
            $this->EvidenceId = $param["EvidenceId"];
        }
    }
}
