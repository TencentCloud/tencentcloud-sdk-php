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
namespace TencentCloud\Anicloud\V20220923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckAppidExist请求参数结构体
 *
 * @method string getSDKAppid() 获取业务的appid
 * @method void setSDKAppid(string $SDKAppid) 设置业务的appid
 * @method string getType() 获取sub product code
 * @method void setType(string $Type) 设置sub product code
 */
class CheckAppidExistRequest extends AbstractModel
{
    /**
     * @var string 业务的appid
     */
    public $SDKAppid;

    /**
     * @var string sub product code
     */
    public $Type;

    /**
     * @param string $SDKAppid 业务的appid
     * @param string $Type sub product code
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
        if (array_key_exists("SDKAppid",$param) and $param["SDKAppid"] !== null) {
            $this->SDKAppid = $param["SDKAppid"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
