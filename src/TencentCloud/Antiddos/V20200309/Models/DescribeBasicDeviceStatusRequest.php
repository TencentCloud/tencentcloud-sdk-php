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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBasicDeviceStatus请求参数结构体
 *
 * @method array getIpList() 获取IP 资源列表
 * @method void setIpList(array $IpList) 设置IP 资源列表
 * @method array getIdList() 获取域名化资源传id
 * @method void setIdList(array $IdList) 设置域名化资源传id
 * @method integer getFilterRegion() 获取地域名称
 * @method void setFilterRegion(integer $FilterRegion) 设置地域名称
 */
class DescribeBasicDeviceStatusRequest extends AbstractModel
{
    /**
     * @var array IP 资源列表
     */
    public $IpList;

    /**
     * @var array 域名化资源传id
     */
    public $IdList;

    /**
     * @var integer 地域名称
     */
    public $FilterRegion;

    /**
     * @param array $IpList IP 资源列表
     * @param array $IdList 域名化资源传id
     * @param integer $FilterRegion 地域名称
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
        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }

        if (array_key_exists("FilterRegion",$param) and $param["FilterRegion"] !== null) {
            $this->FilterRegion = $param["FilterRegion"];
        }
    }
}
