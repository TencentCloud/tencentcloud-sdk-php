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
 * CreateUserAutoSignEnableUrl返回参数结构体
 *
 * @method string getUrl() 获取跳转短链
 * @method void setUrl(string $Url) 设置跳转短链
 * @method string getAppId() 获取小程序AppId
 * @method void setAppId(string $AppId) 设置小程序AppId
 * @method string getAppOriginalId() 获取小程序 原始 Id
 * @method void setAppOriginalId(string $AppOriginalId) 设置小程序 原始 Id
 * @method string getPath() 获取跳转路径
 * @method void setPath(string $Path) 设置跳转路径
 * @method string getQrCode() 获取base64格式跳转二维码
 * @method void setQrCode(string $QrCode) 设置base64格式跳转二维码
 * @method string getUrlType() 获取链接类型，空-默认小程序端链接，H5SIGN-h5端链接
 * @method void setUrlType(string $UrlType) 设置链接类型，空-默认小程序端链接，H5SIGN-h5端链接
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateUserAutoSignEnableUrlResponse extends AbstractModel
{
    /**
     * @var string 跳转短链
     */
    public $Url;

    /**
     * @var string 小程序AppId
     */
    public $AppId;

    /**
     * @var string 小程序 原始 Id
     */
    public $AppOriginalId;

    /**
     * @var string 跳转路径
     */
    public $Path;

    /**
     * @var string base64格式跳转二维码
     */
    public $QrCode;

    /**
     * @var string 链接类型，空-默认小程序端链接，H5SIGN-h5端链接
     */
    public $UrlType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Url 跳转短链
     * @param string $AppId 小程序AppId
     * @param string $AppOriginalId 小程序 原始 Id
     * @param string $Path 跳转路径
     * @param string $QrCode base64格式跳转二维码
     * @param string $UrlType 链接类型，空-默认小程序端链接，H5SIGN-h5端链接
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppOriginalId",$param) and $param["AppOriginalId"] !== null) {
            $this->AppOriginalId = $param["AppOriginalId"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("QrCode",$param) and $param["QrCode"] !== null) {
            $this->QrCode = $param["QrCode"];
        }

        if (array_key_exists("UrlType",$param) and $param["UrlType"] !== null) {
            $this->UrlType = $param["UrlType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
