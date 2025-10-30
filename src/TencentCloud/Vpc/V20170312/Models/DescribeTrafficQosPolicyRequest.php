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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrafficQosPolicy请求参数结构体
 *
 * @method string getCcnId() 获取CCN实例ID。形如：ccn-f49l6u0z。
 * @method void setCcnId(string $CcnId) 设置CCN实例ID。形如：ccn-f49l6u0z。
 * @method string getLocalRegion() 获取本端地域。
 * @method void setLocalRegion(string $LocalRegion) 设置本端地域。
 * @method string getRemoteRegion() 获取远端地域。
 * @method void setRemoteRegion(string $RemoteRegion) 设置远端地域。
 */
class DescribeTrafficQosPolicyRequest extends AbstractModel
{
    /**
     * @var string CCN实例ID。形如：ccn-f49l6u0z。
     */
    public $CcnId;

    /**
     * @var string 本端地域。
     */
    public $LocalRegion;

    /**
     * @var string 远端地域。
     */
    public $RemoteRegion;

    /**
     * @param string $CcnId CCN实例ID。形如：ccn-f49l6u0z。
     * @param string $LocalRegion 本端地域。
     * @param string $RemoteRegion 远端地域。
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("LocalRegion",$param) and $param["LocalRegion"] !== null) {
            $this->LocalRegion = $param["LocalRegion"];
        }

        if (array_key_exists("RemoteRegion",$param) and $param["RemoteRegion"] !== null) {
            $this->RemoteRegion = $param["RemoteRegion"];
        }
    }
}
