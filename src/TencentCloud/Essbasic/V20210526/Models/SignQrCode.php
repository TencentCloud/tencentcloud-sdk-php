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
 * 一码多扫签署二维码对象
 *
 * @method string getQrCodeId() 获取二维码id
 * @method void setQrCodeId(string $QrCodeId) 设置二维码id
 * @method string getQrCodeUrl() 获取二维码url
 * @method void setQrCodeUrl(string $QrCodeUrl) 设置二维码url
 * @method integer getExpiredTime() 获取二维码过期时间
 * @method void setExpiredTime(integer $ExpiredTime) 设置二维码过期时间
 */
class SignQrCode extends AbstractModel
{
    /**
     * @var string 二维码id
     */
    public $QrCodeId;

    /**
     * @var string 二维码url
     */
    public $QrCodeUrl;

    /**
     * @var integer 二维码过期时间
     */
    public $ExpiredTime;

    /**
     * @param string $QrCodeId 二维码id
     * @param string $QrCodeUrl 二维码url
     * @param integer $ExpiredTime 二维码过期时间
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
        if (array_key_exists("QrCodeId",$param) and $param["QrCodeId"] !== null) {
            $this->QrCodeId = $param["QrCodeId"];
        }

        if (array_key_exists("QrCodeUrl",$param) and $param["QrCodeUrl"] !== null) {
            $this->QrCodeUrl = $param["QrCodeUrl"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
