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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyDSPADiscoveryRule返回参数结构体
 *
 * @method string getVerifyResult() 获取验证结果
Success 验证成功
Failed 验证失败
 * @method void setVerifyResult(string $VerifyResult) 设置验证结果
Success 验证成功
Failed 验证失败
 * @method string getDetailInfo() 获取验证结果详情
 * @method void setDetailInfo(string $DetailInfo) 设置验证结果详情
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyDSPADiscoveryRuleResponse extends AbstractModel
{
    /**
     * @var string 验证结果
Success 验证成功
Failed 验证失败
     */
    public $VerifyResult;

    /**
     * @var string 验证结果详情
     */
    public $DetailInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $VerifyResult 验证结果
Success 验证成功
Failed 验证失败
     * @param string $DetailInfo 验证结果详情
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
        if (array_key_exists("VerifyResult",$param) and $param["VerifyResult"] !== null) {
            $this->VerifyResult = $param["VerifyResult"];
        }

        if (array_key_exists("DetailInfo",$param) and $param["DetailInfo"] !== null) {
            $this->DetailInfo = $param["DetailInfo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
