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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBasicDeviceStatus请求参数结构体
 *
 * @method array getIpList() 获取<p>IP 资源列表</p>
 * @method void setIpList(array $IpList) 设置<p>IP 资源列表</p>
 * @method array getIdList() 获取<p>域名化资源传id</p>
 * @method void setIdList(array $IdList) 设置<p>域名化资源传id</p>
 * @method integer getFilterRegion() 获取<p>地域名称</p>
 * @method void setFilterRegion(integer $FilterRegion) 设置<p>地域名称</p>
 * @method array getCnameWafIdList() 获取<p>cnameWaf资源</p>
 * @method void setCnameWafIdList(array $CnameWafIdList) 设置<p>cnameWaf资源</p>
 */
class DescribeBasicDeviceStatusRequest extends AbstractModel
{
    /**
     * @var array <p>IP 资源列表</p>
     */
    public $IpList;

    /**
     * @var array <p>域名化资源传id</p>
     */
    public $IdList;

    /**
     * @var integer <p>地域名称</p>
     */
    public $FilterRegion;

    /**
     * @var array <p>cnameWaf资源</p>
     */
    public $CnameWafIdList;

    /**
     * @param array $IpList <p>IP 资源列表</p>
     * @param array $IdList <p>域名化资源传id</p>
     * @param integer $FilterRegion <p>地域名称</p>
     * @param array $CnameWafIdList <p>cnameWaf资源</p>
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

        if (array_key_exists("CnameWafIdList",$param) and $param["CnameWafIdList"] !== null) {
            $this->CnameWafIdList = $param["CnameWafIdList"];
        }
    }
}
