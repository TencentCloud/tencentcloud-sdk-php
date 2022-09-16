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
 * CreateConsoleLoginUrl返回参数结构体
 *
 * @method string getConsoleUrl() 获取子客Web控制台url，此链接5分钟内有效，且只能访问一次
 * @method void setConsoleUrl(string $ConsoleUrl) 设置子客Web控制台url，此链接5分钟内有效，且只能访问一次
 * @method boolean getIsActivated() 获取渠道子客企业是否已开通腾讯电子签。
 * @method void setIsActivated(boolean $IsActivated) 设置渠道子客企业是否已开通腾讯电子签。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateConsoleLoginUrlResponse extends AbstractModel
{
    /**
     * @var string 子客Web控制台url，此链接5分钟内有效，且只能访问一次
     */
    public $ConsoleUrl;

    /**
     * @var boolean 渠道子客企业是否已开通腾讯电子签。
     */
    public $IsActivated;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ConsoleUrl 子客Web控制台url，此链接5分钟内有效，且只能访问一次
     * @param boolean $IsActivated 渠道子客企业是否已开通腾讯电子签。
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
        if (array_key_exists("ConsoleUrl",$param) and $param["ConsoleUrl"] !== null) {
            $this->ConsoleUrl = $param["ConsoleUrl"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
