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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyPresentation请求参数结构体
 *
 * @method string getDid() 获取VP持有人的did标识
 * @method void setDid(string $Did) 设置VP持有人的did标识
 * @method string getPresentationData() 获取可验证表达内容
 * @method void setPresentationData(string $PresentationData) 设置可验证表达内容
 * @method integer getDAPId() 获取DID应用id
 * @method void setDAPId(integer $DAPId) 设置DID应用id
 * @method string getVerifyCode() 获取随机验证码
 * @method void setVerifyCode(string $VerifyCode) 设置随机验证码
 */
class VerifyPresentationRequest extends AbstractModel
{
    /**
     * @var string VP持有人的did标识
     */
    public $Did;

    /**
     * @var string 可验证表达内容
     */
    public $PresentationData;

    /**
     * @var integer DID应用id
     */
    public $DAPId;

    /**
     * @var string 随机验证码
     */
    public $VerifyCode;

    /**
     * @param string $Did VP持有人的did标识
     * @param string $PresentationData 可验证表达内容
     * @param integer $DAPId DID应用id
     * @param string $VerifyCode 随机验证码
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
        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("PresentationData",$param) and $param["PresentationData"] !== null) {
            $this->PresentationData = $param["PresentationData"];
        }

        if (array_key_exists("DAPId",$param) and $param["DAPId"] !== null) {
            $this->DAPId = $param["DAPId"];
        }

        if (array_key_exists("VerifyCode",$param) and $param["VerifyCode"] !== null) {
            $this->VerifyCode = $param["VerifyCode"];
        }
    }
}
