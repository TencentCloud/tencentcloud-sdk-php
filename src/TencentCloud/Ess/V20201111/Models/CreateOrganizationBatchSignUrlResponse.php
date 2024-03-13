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
 * CreateOrganizationBatchSignUrl返回参数结构体
 *
 * @method string getSignUrl() 获取批量签署入口链接，用户可使用这个链接跳转到控制台页面对合同进行签署操作。
 * @method void setSignUrl(string $SignUrl) 设置批量签署入口链接，用户可使用这个链接跳转到控制台页面对合同进行签署操作。
 * @method integer getExpiredTime() 获取链接过期截止时间，格式为Unix标准时间戳（秒），默认为7天后截止。
 * @method void setExpiredTime(integer $ExpiredTime) 设置链接过期截止时间，格式为Unix标准时间戳（秒），默认为7天后截止。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateOrganizationBatchSignUrlResponse extends AbstractModel
{
    /**
     * @var string 批量签署入口链接，用户可使用这个链接跳转到控制台页面对合同进行签署操作。
     */
    public $SignUrl;

    /**
     * @var integer 链接过期截止时间，格式为Unix标准时间戳（秒），默认为7天后截止。
     */
    public $ExpiredTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SignUrl 批量签署入口链接，用户可使用这个链接跳转到控制台页面对合同进行签署操作。
     * @param integer $ExpiredTime 链接过期截止时间，格式为Unix标准时间戳（秒），默认为7天后截止。
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
        if (array_key_exists("SignUrl",$param) and $param["SignUrl"] !== null) {
            $this->SignUrl = $param["SignUrl"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
