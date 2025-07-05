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
 * CreateEmployeeChangeUrl返回参数结构体
 *
 * @method string getMiniAppPath() 获取修改员工信息的小程序链接<br>跳转到腾讯电子签小程序的实现可以参考微信的官方文档:<a href="https://developers.weixin.qq.com/miniprogram/dev/framework/open-ability/launchApp.html" target="_blank">开放能力/打开 App</a> 
 * @method void setMiniAppPath(string $MiniAppPath) 设置修改员工信息的小程序链接<br>跳转到腾讯电子签小程序的实现可以参考微信的官方文档:<a href="https://developers.weixin.qq.com/miniprogram/dev/framework/open-ability/launchApp.html" target="_blank">开放能力/打开 App</a> 
 * @method integer getExpireTime() 获取链接过期时间以 Unix 时间戳格式表示，从生成链接时间起，往后7天有效期。过期后短链将失效，无法打开。


 * @method void setExpireTime(integer $ExpireTime) 设置链接过期时间以 Unix 时间戳格式表示，从生成链接时间起，往后7天有效期。过期后短链将失效，无法打开。


 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateEmployeeChangeUrlResponse extends AbstractModel
{
    /**
     * @var string 修改员工信息的小程序链接<br>跳转到腾讯电子签小程序的实现可以参考微信的官方文档:<a href="https://developers.weixin.qq.com/miniprogram/dev/framework/open-ability/launchApp.html" target="_blank">开放能力/打开 App</a> 
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
     * @param string $MiniAppPath 修改员工信息的小程序链接<br>跳转到腾讯电子签小程序的实现可以参考微信的官方文档:<a href="https://developers.weixin.qq.com/miniprogram/dev/framework/open-ability/launchApp.html" target="_blank">开放能力/打开 App</a> 
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
