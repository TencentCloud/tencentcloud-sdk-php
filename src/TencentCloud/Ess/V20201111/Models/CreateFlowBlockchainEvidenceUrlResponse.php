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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFlowBlockchainEvidenceUrl返回参数结构体
 *
 * @method string getQrCode() 获取二维码图片下载链接，下载链接有效时间5分钟，请尽快下载保存。
 * @method void setQrCode(string $QrCode) 设置二维码图片下载链接，下载链接有效时间5分钟，请尽快下载保存。
 * @method string getUrl() 获取查看短链，可直接点击短链查看报告。
 * @method void setUrl(string $Url) 设置查看短链，可直接点击短链查看报告。
 * @method integer getExpiredOn() 获取二维码和短链的过期时间戳，过期时间默认为生成链接后7天。
 * @method void setExpiredOn(integer $ExpiredOn) 设置二维码和短链的过期时间戳，过期时间默认为生成链接后7天。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateFlowBlockchainEvidenceUrlResponse extends AbstractModel
{
    /**
     * @var string 二维码图片下载链接，下载链接有效时间5分钟，请尽快下载保存。
     */
    public $QrCode;

    /**
     * @var string 查看短链，可直接点击短链查看报告。
     */
    public $Url;

    /**
     * @var integer 二维码和短链的过期时间戳，过期时间默认为生成链接后7天。
     */
    public $ExpiredOn;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $QrCode 二维码图片下载链接，下载链接有效时间5分钟，请尽快下载保存。
     * @param string $Url 查看短链，可直接点击短链查看报告。
     * @param integer $ExpiredOn 二维码和短链的过期时间戳，过期时间默认为生成链接后7天。
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
        if (array_key_exists("QrCode",$param) and $param["QrCode"] !== null) {
            $this->QrCode = $param["QrCode"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ExpiredOn",$param) and $param["ExpiredOn"] !== null) {
            $this->ExpiredOn = $param["ExpiredOn"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
