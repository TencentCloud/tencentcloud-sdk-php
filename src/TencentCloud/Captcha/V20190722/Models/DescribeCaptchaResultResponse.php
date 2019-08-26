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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getCaptchaCode() 获取1:验证成功，0:验证失败，100:AppSecretKey参数校验错误
 * @method void setCaptchaCode(integer $CaptchaCode) 设置1:验证成功，0:验证失败，100:AppSecretKey参数校验错误
 * @method string getCaptchaMsg() 获取状态描述及验证错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCaptchaMsg(string $CaptchaMsg) 设置状态描述及验证错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEvilLevel() 获取[0,100]，恶意等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvilLevel(integer $EvilLevel) 设置[0,100]，恶意等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DescribeCaptchaResult返回参数结构体
 */
class DescribeCaptchaResultResponse extends AbstractModel
{
    /**
     * @var integer 1:验证成功，0:验证失败，100:AppSecretKey参数校验错误
     */
    public $CaptchaCode;

    /**
     * @var string 状态描述及验证错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CaptchaMsg;

    /**
     * @var integer [0,100]，恶意等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvilLevel;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param integer $CaptchaCode 1:验证成功，0:验证失败，100:AppSecretKey参数校验错误
     * @param string $CaptchaMsg 状态描述及验证错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EvilLevel [0,100]，恶意等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CaptchaCode",$param) and $param["CaptchaCode"] !== null) {
            $this->CaptchaCode = $param["CaptchaCode"];
        }

        if (array_key_exists("CaptchaMsg",$param) and $param["CaptchaMsg"] !== null) {
            $this->CaptchaMsg = $param["CaptchaMsg"];
        }

        if (array_key_exists("EvilLevel",$param) and $param["EvilLevel"] !== null) {
            $this->EvilLevel = $param["EvilLevel"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
