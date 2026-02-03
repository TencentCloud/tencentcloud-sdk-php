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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudBaseGWService请求参数结构体
 *
 * @method string getServiceId() 获取服务ID
 * @method void setServiceId(string $ServiceId) 设置服务ID
 * @method string getDomain() 获取服务域名
 * @method void setDomain(string $Domain) 设置服务域名
 * @method boolean getEnableRegion() 获取是否启用多地域
 * @method void setEnableRegion(boolean $EnableRegion) 设置是否启用多地域
 * @method boolean getEnableUnion() 获取是否启用统一域名
 * @method void setEnableUnion(boolean $EnableUnion) 设置是否启用统一域名
 */
class DescribeCloudBaseGWServiceRequest extends AbstractModel
{
    /**
     * @var string 服务ID
     */
    public $ServiceId;

    /**
     * @var string 服务域名
     */
    public $Domain;

    /**
     * @var boolean 是否启用多地域
     */
    public $EnableRegion;

    /**
     * @var boolean 是否启用统一域名
     */
    public $EnableUnion;

    /**
     * @param string $ServiceId 服务ID
     * @param string $Domain 服务域名
     * @param boolean $EnableRegion 是否启用多地域
     * @param boolean $EnableUnion 是否启用统一域名
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("EnableRegion",$param) and $param["EnableRegion"] !== null) {
            $this->EnableRegion = $param["EnableRegion"];
        }

        if (array_key_exists("EnableUnion",$param) and $param["EnableUnion"] !== null) {
            $this->EnableUnion = $param["EnableUnion"];
        }
    }
}
