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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChannelCreateMultiFlowSignQRCode返回参数结构体
 *
 * @method SignQrCode getQrCode() 获取签署二维码对象
 * @method void setQrCode(SignQrCode $QrCode) 设置签署二维码对象
 * @method SignUrl getSignUrls() 获取签署链接对象
 * @method void setSignUrls(SignUrl $SignUrls) 设置签署链接对象
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ChannelCreateMultiFlowSignQRCodeResponse extends AbstractModel
{
    /**
     * @var SignQrCode 签署二维码对象
     */
    public $QrCode;

    /**
     * @var SignUrl 签署链接对象
     */
    public $SignUrls;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param SignQrCode $QrCode 签署二维码对象
     * @param SignUrl $SignUrls 签署链接对象
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
        if (array_key_exists("QrCode",$param) and $param["QrCode"] !== null) {
            $this->QrCode = new SignQrCode();
            $this->QrCode->deserialize($param["QrCode"]);
        }

        if (array_key_exists("SignUrls",$param) and $param["SignUrls"] !== null) {
            $this->SignUrls = new SignUrl();
            $this->SignUrls->deserialize($param["SignUrls"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
