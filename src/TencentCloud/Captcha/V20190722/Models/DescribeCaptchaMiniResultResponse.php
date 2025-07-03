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
 * DescribeCaptchaMiniResult返回参数结构体
 *
 * @method integer getCaptchaCode() 获取1     ticket verification succeeded     票据验证成功
7     CaptchaAppId does not match     票据与验证码应用APPID不匹配
8     ticket expired     票据超时
10    ticket format error     票据格式不正确
15    ticket decryption failed     票据解密失败
16    CaptchaAppId wrong format     检查验证码应用APPID错误
21    (1)ticket error     票据验证错误 (2)diff 一般是由于用户网络较差，导致前端自动容灾，而生成了容灾票据，业务侧可根据需要进行跳过或二次处理
25    invalid ticket     无效票据
26    system internal error     系统内部错误
31    UnauthorizedOperation.Unauthorized   无有效套餐包/账户已欠费
100   param err     参数校验错误
 * @method void setCaptchaCode(integer $CaptchaCode) 设置1     ticket verification succeeded     票据验证成功
7     CaptchaAppId does not match     票据与验证码应用APPID不匹配
8     ticket expired     票据超时
10    ticket format error     票据格式不正确
15    ticket decryption failed     票据解密失败
16    CaptchaAppId wrong format     检查验证码应用APPID错误
21    (1)ticket error     票据验证错误 (2)diff 一般是由于用户网络较差，导致前端自动容灾，而生成了容灾票据，业务侧可根据需要进行跳过或二次处理
25    invalid ticket     无效票据
26    system internal error     系统内部错误
31    UnauthorizedOperation.Unauthorized   无有效套餐包/账户已欠费
100   param err     参数校验错误
 * @method string getCaptchaMsg() 获取状态描述及验证错误信息
 * @method void setCaptchaMsg(string $CaptchaMsg) 设置状态描述及验证错误信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCaptchaMiniResultResponse extends AbstractModel
{
    /**
     * @var integer 1     ticket verification succeeded     票据验证成功
7     CaptchaAppId does not match     票据与验证码应用APPID不匹配
8     ticket expired     票据超时
10    ticket format error     票据格式不正确
15    ticket decryption failed     票据解密失败
16    CaptchaAppId wrong format     检查验证码应用APPID错误
21    (1)ticket error     票据验证错误 (2)diff 一般是由于用户网络较差，导致前端自动容灾，而生成了容灾票据，业务侧可根据需要进行跳过或二次处理
25    invalid ticket     无效票据
26    system internal error     系统内部错误
31    UnauthorizedOperation.Unauthorized   无有效套餐包/账户已欠费
100   param err     参数校验错误
     */
    public $CaptchaCode;

    /**
     * @var string 状态描述及验证错误信息
     */
    public $CaptchaMsg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $CaptchaCode 1     ticket verification succeeded     票据验证成功
7     CaptchaAppId does not match     票据与验证码应用APPID不匹配
8     ticket expired     票据超时
10    ticket format error     票据格式不正确
15    ticket decryption failed     票据解密失败
16    CaptchaAppId wrong format     检查验证码应用APPID错误
21    (1)ticket error     票据验证错误 (2)diff 一般是由于用户网络较差，导致前端自动容灾，而生成了容灾票据，业务侧可根据需要进行跳过或二次处理
25    invalid ticket     无效票据
26    system internal error     系统内部错误
31    UnauthorizedOperation.Unauthorized   无有效套餐包/账户已欠费
100   param err     参数校验错误
     * @param string $CaptchaMsg 状态描述及验证错误信息
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CaptchaCode",$param) and $param["CaptchaCode"] !== null) {
            $this->CaptchaCode = $param["CaptchaCode"];
        }

        if (array_key_exists("CaptchaMsg",$param) and $param["CaptchaMsg"] !== null) {
            $this->CaptchaMsg = $param["CaptchaMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
