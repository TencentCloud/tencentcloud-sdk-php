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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 打款验证响应结果结构体
 *
 * @method string getVerifyState() 获取打款验证状态。
 INIT("打款中"),
PENDING("打款成功待验证"),
VERIFIED("验证成功"),
FAILED("打款失败"),
VERIFY_FAILED("验证失败")
 * @method void setVerifyState(string $VerifyState) 设置打款验证状态。
 INIT("打款中"),
PENDING("打款成功待验证"),
VERIFIED("验证成功"),
FAILED("打款失败"),
VERIFY_FAILED("验证失败")
 * @method OpenBankRedirectInfo getRedirectInfo() 获取重定向参数，用于客户端跳转，收款商户未完成打款验证时返回该参数
 * @method void setRedirectInfo(OpenBankRedirectInfo $RedirectInfo) 设置重定向参数，用于客户端跳转，收款商户未完成打款验证时返回该参数
 */
class VerifyOpenBankAccountResult extends AbstractModel
{
    /**
     * @var string 打款验证状态。
 INIT("打款中"),
PENDING("打款成功待验证"),
VERIFIED("验证成功"),
FAILED("打款失败"),
VERIFY_FAILED("验证失败")
     */
    public $VerifyState;

    /**
     * @var OpenBankRedirectInfo 重定向参数，用于客户端跳转，收款商户未完成打款验证时返回该参数
     */
    public $RedirectInfo;

    /**
     * @param string $VerifyState 打款验证状态。
 INIT("打款中"),
PENDING("打款成功待验证"),
VERIFIED("验证成功"),
FAILED("打款失败"),
VERIFY_FAILED("验证失败")
     * @param OpenBankRedirectInfo $RedirectInfo 重定向参数，用于客户端跳转，收款商户未完成打款验证时返回该参数
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
        if (array_key_exists("VerifyState",$param) and $param["VerifyState"] !== null) {
            $this->VerifyState = $param["VerifyState"];
        }

        if (array_key_exists("RedirectInfo",$param) and $param["RedirectInfo"] !== null) {
            $this->RedirectInfo = new OpenBankRedirectInfo();
            $this->RedirectInfo->deserialize($param["RedirectInfo"]);
        }
    }
}
