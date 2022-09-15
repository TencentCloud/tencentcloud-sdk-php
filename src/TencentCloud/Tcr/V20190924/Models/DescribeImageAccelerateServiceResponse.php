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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageAccelerateService返回参数结构体
 *
 * @method string getStatus() 获取镜像加速状态
 * @method void setStatus(string $Status) 设置镜像加速状态
 * @method string getCFSVIP() 获取CFS的VIP
 * @method void setCFSVIP(string $CFSVIP) 设置CFS的VIP
 * @method boolean getIsEnable() 获取是否开通
 * @method void setIsEnable(boolean $IsEnable) 设置是否开通
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageAccelerateServiceResponse extends AbstractModel
{
    /**
     * @var string 镜像加速状态
     */
    public $Status;

    /**
     * @var string CFS的VIP
     */
    public $CFSVIP;

    /**
     * @var boolean 是否开通
     */
    public $IsEnable;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 镜像加速状态
     * @param string $CFSVIP CFS的VIP
     * @param boolean $IsEnable 是否开通
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CFSVIP",$param) and $param["CFSVIP"] !== null) {
            $this->CFSVIP = $param["CFSVIP"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
