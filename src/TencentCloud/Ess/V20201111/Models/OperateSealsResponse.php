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
 * OperateSeals返回参数结构体
 *
 * @method string getSealOperatorVerifyPath() 获取人脸验证操作人链接，用法可以参考"[跳转电子签小程序配置](https://qian.tencent.com/developers/company/openwxminiprogram/)"，默认为空。
 * @method void setSealOperatorVerifyPath(string $SealOperatorVerifyPath) 设置人脸验证操作人链接，用法可以参考"[跳转电子签小程序配置](https://qian.tencent.com/developers/company/openwxminiprogram/)"，默认为空。
 * @method string getSealOperatorVerifyQrcodeUrl() 获取人脸验证操作人二维码链接，扫码后会跳转到腾讯电子签小程序进行人脸验证，默认为空。
 * @method void setSealOperatorVerifyQrcodeUrl(string $SealOperatorVerifyQrcodeUrl) 设置人脸验证操作人二维码链接，扫码后会跳转到腾讯电子签小程序进行人脸验证，默认为空。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class OperateSealsResponse extends AbstractModel
{
    /**
     * @var string 人脸验证操作人链接，用法可以参考"[跳转电子签小程序配置](https://qian.tencent.com/developers/company/openwxminiprogram/)"，默认为空。
     */
    public $SealOperatorVerifyPath;

    /**
     * @var string 人脸验证操作人二维码链接，扫码后会跳转到腾讯电子签小程序进行人脸验证，默认为空。
     */
    public $SealOperatorVerifyQrcodeUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SealOperatorVerifyPath 人脸验证操作人链接，用法可以参考"[跳转电子签小程序配置](https://qian.tencent.com/developers/company/openwxminiprogram/)"，默认为空。
     * @param string $SealOperatorVerifyQrcodeUrl 人脸验证操作人二维码链接，扫码后会跳转到腾讯电子签小程序进行人脸验证，默认为空。
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
        if (array_key_exists("SealOperatorVerifyPath",$param) and $param["SealOperatorVerifyPath"] !== null) {
            $this->SealOperatorVerifyPath = $param["SealOperatorVerifyPath"];
        }

        if (array_key_exists("SealOperatorVerifyQrcodeUrl",$param) and $param["SealOperatorVerifyQrcodeUrl"] !== null) {
            $this->SealOperatorVerifyQrcodeUrl = $param["SealOperatorVerifyQrcodeUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
