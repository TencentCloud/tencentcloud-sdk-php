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
namespace TencentCloud\Ba\V20200720\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGetAuthInfo返回参数结构体
 *
 * @method string getIsTenPayMasked() 获取实名认证状态：0未实名，1已实名
 * @method void setIsTenPayMasked(string $IsTenPayMasked) 设置实名认证状态：0未实名，1已实名
 * @method string getIsAuthenticated() 获取实名认证类型：0个人，1企业
 * @method void setIsAuthenticated(string $IsAuthenticated) 设置实名认证类型：0个人，1企业
 * @method string getType() 获取认证类型，个人0，企业1
 * @method void setType(string $Type) 设置认证类型，个人0，企业1
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeGetAuthInfoResponse extends AbstractModel
{
    /**
     * @var string 实名认证状态：0未实名，1已实名
     */
    public $IsTenPayMasked;

    /**
     * @var string 实名认证类型：0个人，1企业
     */
    public $IsAuthenticated;

    /**
     * @var string 认证类型，个人0，企业1
     */
    public $Type;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $IsTenPayMasked 实名认证状态：0未实名，1已实名
     * @param string $IsAuthenticated 实名认证类型：0个人，1企业
     * @param string $Type 认证类型，个人0，企业1
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
        if (array_key_exists("IsTenPayMasked",$param) and $param["IsTenPayMasked"] !== null) {
            $this->IsTenPayMasked = $param["IsTenPayMasked"];
        }

        if (array_key_exists("IsAuthenticated",$param) and $param["IsAuthenticated"] !== null) {
            $this->IsAuthenticated = $param["IsAuthenticated"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
