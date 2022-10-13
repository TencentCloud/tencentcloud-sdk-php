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
 * DescribeCaptchaResult返回参数结构体
 *
 * @method integer getCaptchaCode() 获取1 OK 验证通过
7 captcha no match 传入的Randstr不合法，请检查Randstr是否与前端返回的Randstr一致
8 ticket expired 传入的Ticket已过期（Ticket有效期5分钟），请重新生成Ticket、Randstr进行校验
9 ticket reused 传入的Ticket被重复使用，请重新生成Ticket、Randstr进行校验
15 decrypt fail 传入的Ticket不合法，请检查Ticket是否与前端返回的Ticket一致
16 appid-ticket mismatch 传入的CaptchaAppId错误，请检查CaptchaAppId是否与前端传入的CaptchaAppId一致，并且保障CaptchaAppId是从验证码控制台【验证管理】->【基础配置】中获取
21 diff 票据校验异常，可能的原因是（1）若Ticket包含terror前缀，一般是由于用户网络较差，导致前端自动容灾，而生成了容灾票据，业务侧可根据需要进行跳过或二次处理。（2）若Ticket不包含terror前缀，则是由于验证码风控系统发现请求有安全风险，业务侧可根据需要进行拦截。
100 appid-secretkey-ticket mismatch 参数校验错误，（1）请检查CaptchaAppId与AppSecretKey是否正确，CaptchaAppId、AppSecretKey需要在验证码控制台【验证管理】>【基础配置】中获取（2）请检查传入的Ticket是否由传入的CaptchaAppId生成
 * @method void setCaptchaCode(integer $CaptchaCode) 设置1 OK 验证通过
7 captcha no match 传入的Randstr不合法，请检查Randstr是否与前端返回的Randstr一致
8 ticket expired 传入的Ticket已过期（Ticket有效期5分钟），请重新生成Ticket、Randstr进行校验
9 ticket reused 传入的Ticket被重复使用，请重新生成Ticket、Randstr进行校验
15 decrypt fail 传入的Ticket不合法，请检查Ticket是否与前端返回的Ticket一致
16 appid-ticket mismatch 传入的CaptchaAppId错误，请检查CaptchaAppId是否与前端传入的CaptchaAppId一致，并且保障CaptchaAppId是从验证码控制台【验证管理】->【基础配置】中获取
21 diff 票据校验异常，可能的原因是（1）若Ticket包含terror前缀，一般是由于用户网络较差，导致前端自动容灾，而生成了容灾票据，业务侧可根据需要进行跳过或二次处理。（2）若Ticket不包含terror前缀，则是由于验证码风控系统发现请求有安全风险，业务侧可根据需要进行拦截。
100 appid-secretkey-ticket mismatch 参数校验错误，（1）请检查CaptchaAppId与AppSecretKey是否正确，CaptchaAppId、AppSecretKey需要在验证码控制台【验证管理】>【基础配置】中获取（2）请检查传入的Ticket是否由传入的CaptchaAppId生成
 * @method string getCaptchaMsg() 获取状态描述及验证错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCaptchaMsg(string $CaptchaMsg) 设置状态描述及验证错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEvilLevel() 获取无感验证模式下，该参数返回验证结果：
EvilLevel=0 请求无恶意
EvilLevel=100 请求有恶意
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvilLevel(integer $EvilLevel) 设置无感验证模式下，该参数返回验证结果：
EvilLevel=0 请求无恶意
EvilLevel=100 请求有恶意
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGetCaptchaTime() 获取前端获取验证码时间，时间戳格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGetCaptchaTime(integer $GetCaptchaTime) 设置前端获取验证码时间，时间戳格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCaptchaResultResponse extends AbstractModel
{
    /**
     * @var integer 1 OK 验证通过
7 captcha no match 传入的Randstr不合法，请检查Randstr是否与前端返回的Randstr一致
8 ticket expired 传入的Ticket已过期（Ticket有效期5分钟），请重新生成Ticket、Randstr进行校验
9 ticket reused 传入的Ticket被重复使用，请重新生成Ticket、Randstr进行校验
15 decrypt fail 传入的Ticket不合法，请检查Ticket是否与前端返回的Ticket一致
16 appid-ticket mismatch 传入的CaptchaAppId错误，请检查CaptchaAppId是否与前端传入的CaptchaAppId一致，并且保障CaptchaAppId是从验证码控制台【验证管理】->【基础配置】中获取
21 diff 票据校验异常，可能的原因是（1）若Ticket包含terror前缀，一般是由于用户网络较差，导致前端自动容灾，而生成了容灾票据，业务侧可根据需要进行跳过或二次处理。（2）若Ticket不包含terror前缀，则是由于验证码风控系统发现请求有安全风险，业务侧可根据需要进行拦截。
100 appid-secretkey-ticket mismatch 参数校验错误，（1）请检查CaptchaAppId与AppSecretKey是否正确，CaptchaAppId、AppSecretKey需要在验证码控制台【验证管理】>【基础配置】中获取（2）请检查传入的Ticket是否由传入的CaptchaAppId生成
     */
    public $CaptchaCode;

    /**
     * @var string 状态描述及验证错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CaptchaMsg;

    /**
     * @var integer 无感验证模式下，该参数返回验证结果：
EvilLevel=0 请求无恶意
EvilLevel=100 请求有恶意
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvilLevel;

    /**
     * @var integer 前端获取验证码时间，时间戳格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GetCaptchaTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $CaptchaCode 1 OK 验证通过
7 captcha no match 传入的Randstr不合法，请检查Randstr是否与前端返回的Randstr一致
8 ticket expired 传入的Ticket已过期（Ticket有效期5分钟），请重新生成Ticket、Randstr进行校验
9 ticket reused 传入的Ticket被重复使用，请重新生成Ticket、Randstr进行校验
15 decrypt fail 传入的Ticket不合法，请检查Ticket是否与前端返回的Ticket一致
16 appid-ticket mismatch 传入的CaptchaAppId错误，请检查CaptchaAppId是否与前端传入的CaptchaAppId一致，并且保障CaptchaAppId是从验证码控制台【验证管理】->【基础配置】中获取
21 diff 票据校验异常，可能的原因是（1）若Ticket包含terror前缀，一般是由于用户网络较差，导致前端自动容灾，而生成了容灾票据，业务侧可根据需要进行跳过或二次处理。（2）若Ticket不包含terror前缀，则是由于验证码风控系统发现请求有安全风险，业务侧可根据需要进行拦截。
100 appid-secretkey-ticket mismatch 参数校验错误，（1）请检查CaptchaAppId与AppSecretKey是否正确，CaptchaAppId、AppSecretKey需要在验证码控制台【验证管理】>【基础配置】中获取（2）请检查传入的Ticket是否由传入的CaptchaAppId生成
     * @param string $CaptchaMsg 状态描述及验证错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EvilLevel 无感验证模式下，该参数返回验证结果：
EvilLevel=0 请求无恶意
EvilLevel=100 请求有恶意
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GetCaptchaTime 前端获取验证码时间，时间戳格式
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CaptchaCode",$param) and $param["CaptchaCode"] !== null) {
            $this->CaptchaCode = $param["CaptchaCode"];
        }

        if (array_key_exists("CaptchaMsg",$param) and $param["CaptchaMsg"] !== null) {
            $this->CaptchaMsg = $param["CaptchaMsg"];
        }

        if (array_key_exists("EvilLevel",$param) and $param["EvilLevel"] !== null) {
            $this->EvilLevel = $param["EvilLevel"];
        }

        if (array_key_exists("GetCaptchaTime",$param) and $param["GetCaptchaTime"] !== null) {
            $this->GetCaptchaTime = $param["GetCaptchaTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
