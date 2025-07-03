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
 * ModifyPartnerAutoSignAuthUrl返回参数结构体
 *
 * @method string getUrl() 获取授权链接，以短链形式返回，短链的有效期参考回参中的 ExpiredTime。
 * @method void setUrl(string $Url) 设置授权链接，以短链形式返回，短链的有效期参考回参中的 ExpiredTime。
 * @method string getMiniAppPath() 获取从客户小程序或者客户APP跳转至腾讯电子签小程序进行批量签署的跳转路径
 * @method void setMiniAppPath(string $MiniAppPath) 设置从客户小程序或者客户APP跳转至腾讯电子签小程序进行批量签署的跳转路径
 * @method integer getExpireTime() 获取链接过期时间以 Unix 时间戳格式表示，从生成链接时间起，往后7天有效期。过期后短链将失效，无法打开。
 * @method void setExpireTime(integer $ExpireTime) 设置链接过期时间以 Unix 时间戳格式表示，从生成链接时间起，往后7天有效期。过期后短链将失效，无法打开。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyPartnerAutoSignAuthUrlResponse extends AbstractModel
{
    /**
     * @var string 授权链接，以短链形式返回，短链的有效期参考回参中的 ExpiredTime。
     */
    public $Url;

    /**
     * @var string 从客户小程序或者客户APP跳转至腾讯电子签小程序进行批量签署的跳转路径
     */
    public $MiniAppPath;

    /**
     * @var integer 链接过期时间以 Unix 时间戳格式表示，从生成链接时间起，往后7天有效期。过期后短链将失效，无法打开。
     */
    public $ExpireTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Url 授权链接，以短链形式返回，短链的有效期参考回参中的 ExpiredTime。
     * @param string $MiniAppPath 从客户小程序或者客户APP跳转至腾讯电子签小程序进行批量签署的跳转路径
     * @param integer $ExpireTime 链接过期时间以 Unix 时间戳格式表示，从生成链接时间起，往后7天有效期。过期后短链将失效，无法打开。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("MiniAppPath",$param) and $param["MiniAppPath"] !== null) {
            $this->MiniAppPath = $param["MiniAppPath"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
