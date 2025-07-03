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
 * DescribeCaptchaRceResult返回参数结构体
 *
 * @method integer getCaptchaCode() 获取1 OK 验证通过
7 captcha no match 传入的Randstr不合法，请检查Randstr是否与前端返回的Randstr一致
8 ticket expired 传入的Ticket已过期（Ticket有效期5分钟），请重新生成Ticket、Randstr进行校验
9 ticket reused 传入的Ticket被重复使用，请重新生成Ticket、Randstr进行校验
15 decrypt fail 传入的Ticket不合法，请检查Ticket是否与前端返回的Ticket一致
16 appid-ticket mismatch 传入的CaptchaAppId错误，请检查CaptchaAppId是否与前端传入的CaptchaAppId一致，并且保障CaptchaAppId是从验证码控制台【验证管理】->【基础配置】中获取
21 diff 票据校验异常，可能的原因是（1）若Ticket包含trerror前缀，一般是由于用户网络较差，导致前端自动容灾，而生成了容灾票据，业务侧可根据需要进行跳过或二次处理。（2）若Ticket不包含trerror前缀，则是由于验证码风控系统发现请求有安全风险，业务侧可根据需要进行拦截。
100 appid-secretkey-ticket mismatch 参数校验错误，（1）请检查CaptchaAppId与AppSecretKey是否正确，CaptchaAppId、AppSecretKey需要在验证码控制台【验证管理】>【基础配置】中获取（2）请检查传入的Ticket是否由传入的CaptchaAppId生成
 * @method void setCaptchaCode(integer $CaptchaCode) 设置1 OK 验证通过
7 captcha no match 传入的Randstr不合法，请检查Randstr是否与前端返回的Randstr一致
8 ticket expired 传入的Ticket已过期（Ticket有效期5分钟），请重新生成Ticket、Randstr进行校验
9 ticket reused 传入的Ticket被重复使用，请重新生成Ticket、Randstr进行校验
15 decrypt fail 传入的Ticket不合法，请检查Ticket是否与前端返回的Ticket一致
16 appid-ticket mismatch 传入的CaptchaAppId错误，请检查CaptchaAppId是否与前端传入的CaptchaAppId一致，并且保障CaptchaAppId是从验证码控制台【验证管理】->【基础配置】中获取
21 diff 票据校验异常，可能的原因是（1）若Ticket包含trerror前缀，一般是由于用户网络较差，导致前端自动容灾，而生成了容灾票据，业务侧可根据需要进行跳过或二次处理。（2）若Ticket不包含trerror前缀，则是由于验证码风控系统发现请求有安全风险，业务侧可根据需要进行拦截。
100 appid-secretkey-ticket mismatch 参数校验错误，（1）请检查CaptchaAppId与AppSecretKey是否正确，CaptchaAppId、AppSecretKey需要在验证码控制台【验证管理】>【基础配置】中获取（2）请检查传入的Ticket是否由传入的CaptchaAppId生成
 * @method string getCaptchaMsg() 获取状态描述及验证错误信息
 * @method void setCaptchaMsg(string $CaptchaMsg) 设置状态描述及验证错误信息
 * @method integer getEvilLevel() 获取无感验证模式下，该参数返回验证结果：
EvilLevel=0 请求无恶意
EvilLevel=100 请求有恶意
 * @method void setEvilLevel(integer $EvilLevel) 设置无感验证模式下，该参数返回验证结果：
EvilLevel=0 请求无恶意
EvilLevel=100 请求有恶意
 * @method integer getGetCaptchaTime() 获取前端获取验证码时间，时间戳格式
 * @method void setGetCaptchaTime(integer $GetCaptchaTime) 设置前端获取验证码时间，时间戳格式
 * @method integer getEvilBitmap() 获取拦截类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvilBitmap(integer $EvilBitmap) 设置拦截类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubmitCaptchaTime() 获取提交验证码时间
 * @method void setSubmitCaptchaTime(integer $SubmitCaptchaTime) 设置提交验证码时间
 * @method RceResult getRceResult() 获取rce检测结果
 * @method void setRceResult(RceResult $RceResult) 设置rce检测结果
 * @method string getDeviceRiskCategory() 获取设备风险大类
 * @method void setDeviceRiskCategory(string $DeviceRiskCategory) 设置设备风险大类
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCaptchaRceResultResponse extends AbstractModel
{
    /**
     * @var integer 1 OK 验证通过
7 captcha no match 传入的Randstr不合法，请检查Randstr是否与前端返回的Randstr一致
8 ticket expired 传入的Ticket已过期（Ticket有效期5分钟），请重新生成Ticket、Randstr进行校验
9 ticket reused 传入的Ticket被重复使用，请重新生成Ticket、Randstr进行校验
15 decrypt fail 传入的Ticket不合法，请检查Ticket是否与前端返回的Ticket一致
16 appid-ticket mismatch 传入的CaptchaAppId错误，请检查CaptchaAppId是否与前端传入的CaptchaAppId一致，并且保障CaptchaAppId是从验证码控制台【验证管理】->【基础配置】中获取
21 diff 票据校验异常，可能的原因是（1）若Ticket包含trerror前缀，一般是由于用户网络较差，导致前端自动容灾，而生成了容灾票据，业务侧可根据需要进行跳过或二次处理。（2）若Ticket不包含trerror前缀，则是由于验证码风控系统发现请求有安全风险，业务侧可根据需要进行拦截。
100 appid-secretkey-ticket mismatch 参数校验错误，（1）请检查CaptchaAppId与AppSecretKey是否正确，CaptchaAppId、AppSecretKey需要在验证码控制台【验证管理】>【基础配置】中获取（2）请检查传入的Ticket是否由传入的CaptchaAppId生成
     */
    public $CaptchaCode;

    /**
     * @var string 状态描述及验证错误信息
     */
    public $CaptchaMsg;

    /**
     * @var integer 无感验证模式下，该参数返回验证结果：
EvilLevel=0 请求无恶意
EvilLevel=100 请求有恶意
     */
    public $EvilLevel;

    /**
     * @var integer 前端获取验证码时间，时间戳格式
     */
    public $GetCaptchaTime;

    /**
     * @var integer 拦截类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvilBitmap;

    /**
     * @var integer 提交验证码时间
     */
    public $SubmitCaptchaTime;

    /**
     * @var RceResult rce检测结果
     */
    public $RceResult;

    /**
     * @var string 设备风险大类
     */
    public $DeviceRiskCategory;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $CaptchaCode 1 OK 验证通过
7 captcha no match 传入的Randstr不合法，请检查Randstr是否与前端返回的Randstr一致
8 ticket expired 传入的Ticket已过期（Ticket有效期5分钟），请重新生成Ticket、Randstr进行校验
9 ticket reused 传入的Ticket被重复使用，请重新生成Ticket、Randstr进行校验
15 decrypt fail 传入的Ticket不合法，请检查Ticket是否与前端返回的Ticket一致
16 appid-ticket mismatch 传入的CaptchaAppId错误，请检查CaptchaAppId是否与前端传入的CaptchaAppId一致，并且保障CaptchaAppId是从验证码控制台【验证管理】->【基础配置】中获取
21 diff 票据校验异常，可能的原因是（1）若Ticket包含trerror前缀，一般是由于用户网络较差，导致前端自动容灾，而生成了容灾票据，业务侧可根据需要进行跳过或二次处理。（2）若Ticket不包含trerror前缀，则是由于验证码风控系统发现请求有安全风险，业务侧可根据需要进行拦截。
100 appid-secretkey-ticket mismatch 参数校验错误，（1）请检查CaptchaAppId与AppSecretKey是否正确，CaptchaAppId、AppSecretKey需要在验证码控制台【验证管理】>【基础配置】中获取（2）请检查传入的Ticket是否由传入的CaptchaAppId生成
     * @param string $CaptchaMsg 状态描述及验证错误信息
     * @param integer $EvilLevel 无感验证模式下，该参数返回验证结果：
EvilLevel=0 请求无恶意
EvilLevel=100 请求有恶意
     * @param integer $GetCaptchaTime 前端获取验证码时间，时间戳格式
     * @param integer $EvilBitmap 拦截类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubmitCaptchaTime 提交验证码时间
     * @param RceResult $RceResult rce检测结果
     * @param string $DeviceRiskCategory 设备风险大类
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

        if (array_key_exists("EvilLevel",$param) and $param["EvilLevel"] !== null) {
            $this->EvilLevel = $param["EvilLevel"];
        }

        if (array_key_exists("GetCaptchaTime",$param) and $param["GetCaptchaTime"] !== null) {
            $this->GetCaptchaTime = $param["GetCaptchaTime"];
        }

        if (array_key_exists("EvilBitmap",$param) and $param["EvilBitmap"] !== null) {
            $this->EvilBitmap = $param["EvilBitmap"];
        }

        if (array_key_exists("SubmitCaptchaTime",$param) and $param["SubmitCaptchaTime"] !== null) {
            $this->SubmitCaptchaTime = $param["SubmitCaptchaTime"];
        }

        if (array_key_exists("RceResult",$param) and $param["RceResult"] !== null) {
            $this->RceResult = new RceResult();
            $this->RceResult->deserialize($param["RceResult"]);
        }

        if (array_key_exists("DeviceRiskCategory",$param) and $param["DeviceRiskCategory"] !== null) {
            $this->DeviceRiskCategory = $param["DeviceRiskCategory"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
