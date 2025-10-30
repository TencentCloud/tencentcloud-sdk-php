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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePersonAuthCertificateImage返回参数结构体
 *
 * @method string getAuthCertUrl() 获取个人用户认证证书图片下载URL，`有效期为5分钟`，超过有效期后将无法再下载。
 * @method void setAuthCertUrl(string $AuthCertUrl) 设置个人用户认证证书图片下载URL，`有效期为5分钟`，超过有效期后将无法再下载。
 * @method string getImageCertId() 获取个人用户认证证书的编号, 为20位数字组成的字符串,  由腾讯电子签下发此编号 。
该编号会合成到个人用户证书证明图片。

注: `个人用户认证证书的编号和证明图片绑定, 获取新的证明图片编号会变动`
 * @method void setImageCertId(string $ImageCertId) 设置个人用户认证证书的编号, 为20位数字组成的字符串,  由腾讯电子签下发此编号 。
该编号会合成到个人用户证书证明图片。

注: `个人用户认证证书的编号和证明图片绑定, 获取新的证明图片编号会变动`
 * @method string getSerialNumber() 获取在数字证书申请过程中，系统会自动生成一个独一无二的序列号。请注意，当证书到期并自动续期时，该序列号将会发生变化。值得注意的是，此序列号不会被合成至个人用户证书的证明图片中。
 * @method void setSerialNumber(string $SerialNumber) 设置在数字证书申请过程中，系统会自动生成一个独一无二的序列号。请注意，当证书到期并自动续期时，该序列号将会发生变化。值得注意的是，此序列号不会被合成至个人用户证书的证明图片中。
 * @method integer getValidFrom() 获取CA证书颁发时间，格式为Unix标准时间戳（秒）   
该时间格式化后会合成到个人用户证书证明图片
 * @method void setValidFrom(integer $ValidFrom) 设置CA证书颁发时间，格式为Unix标准时间戳（秒）   
该时间格式化后会合成到个人用户证书证明图片
 * @method integer getValidTo() 获取CA证书有效截止时间，格式为Unix标准时间戳（秒）
该时间格式化后会合成到个人用户证书证明图片
 * @method void setValidTo(integer $ValidTo) 设置CA证书有效截止时间，格式为Unix标准时间戳（秒）
该时间格式化后会合成到个人用户证书证明图片
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreatePersonAuthCertificateImageResponse extends AbstractModel
{
    /**
     * @var string 个人用户认证证书图片下载URL，`有效期为5分钟`，超过有效期后将无法再下载。
     */
    public $AuthCertUrl;

    /**
     * @var string 个人用户认证证书的编号, 为20位数字组成的字符串,  由腾讯电子签下发此编号 。
该编号会合成到个人用户证书证明图片。

注: `个人用户认证证书的编号和证明图片绑定, 获取新的证明图片编号会变动`
     */
    public $ImageCertId;

    /**
     * @var string 在数字证书申请过程中，系统会自动生成一个独一无二的序列号。请注意，当证书到期并自动续期时，该序列号将会发生变化。值得注意的是，此序列号不会被合成至个人用户证书的证明图片中。
     */
    public $SerialNumber;

    /**
     * @var integer CA证书颁发时间，格式为Unix标准时间戳（秒）   
该时间格式化后会合成到个人用户证书证明图片
     */
    public $ValidFrom;

    /**
     * @var integer CA证书有效截止时间，格式为Unix标准时间戳（秒）
该时间格式化后会合成到个人用户证书证明图片
     */
    public $ValidTo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AuthCertUrl 个人用户认证证书图片下载URL，`有效期为5分钟`，超过有效期后将无法再下载。
     * @param string $ImageCertId 个人用户认证证书的编号, 为20位数字组成的字符串,  由腾讯电子签下发此编号 。
该编号会合成到个人用户证书证明图片。

注: `个人用户认证证书的编号和证明图片绑定, 获取新的证明图片编号会变动`
     * @param string $SerialNumber 在数字证书申请过程中，系统会自动生成一个独一无二的序列号。请注意，当证书到期并自动续期时，该序列号将会发生变化。值得注意的是，此序列号不会被合成至个人用户证书的证明图片中。
     * @param integer $ValidFrom CA证书颁发时间，格式为Unix标准时间戳（秒）   
该时间格式化后会合成到个人用户证书证明图片
     * @param integer $ValidTo CA证书有效截止时间，格式为Unix标准时间戳（秒）
该时间格式化后会合成到个人用户证书证明图片
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
        if (array_key_exists("AuthCertUrl",$param) and $param["AuthCertUrl"] !== null) {
            $this->AuthCertUrl = $param["AuthCertUrl"];
        }

        if (array_key_exists("ImageCertId",$param) and $param["ImageCertId"] !== null) {
            $this->ImageCertId = $param["ImageCertId"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("ValidFrom",$param) and $param["ValidFrom"] !== null) {
            $this->ValidFrom = $param["ValidFrom"];
        }

        if (array_key_exists("ValidTo",$param) and $param["ValidTo"] !== null) {
            $this->ValidTo = $param["ValidTo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
