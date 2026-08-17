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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接入点信息
 *
 * @method string getVendor() 获取<p>接入点运营商。</p>
 * @method void setVendor(string $Vendor) 设置<p>接入点运营商。</p>
 * @method string getPublicAddr() 获取<p>接入点地址。</p>
 * @method void setPublicAddr(string $PublicAddr) 设置<p>接入点地址。</p>
 * @method string getRegion() 获取<p>接入点地域。</p>
 * @method void setRegion(string $Region) 设置<p>接入点地域。</p>
 * @method string getBigArea() 获取<p>接入点大区。</p>
 * @method void setBigArea(string $BigArea) 设置<p>接入点大区。</p>
 * @method boolean getAvailable() 获取<p>接入点是否可用。</p><p>枚举值：</p><ul><li>true： 接入点可用</li><li>false： 接入点不可用</li></ul>
 * @method void setAvailable(boolean $Available) 设置<p>接入点是否可用。</p><p>枚举值：</p><ul><li>true： 接入点可用</li><li>false： 接入点不可用</li></ul>
 * @method string getGwGroupId() 获取<p>集群ID</p>
 * @method void setGwGroupId(string $GwGroupId) 设置<p>集群ID</p>
 */
class AccessPointInfo extends AbstractModel
{
    /**
     * @var string <p>接入点运营商。</p>
     */
    public $Vendor;

    /**
     * @var string <p>接入点地址。</p>
     */
    public $PublicAddr;

    /**
     * @var string <p>接入点地域。</p>
     */
    public $Region;

    /**
     * @var string <p>接入点大区。</p>
     */
    public $BigArea;

    /**
     * @var boolean <p>接入点是否可用。</p><p>枚举值：</p><ul><li>true： 接入点可用</li><li>false： 接入点不可用</li></ul>
     */
    public $Available;

    /**
     * @var string <p>集群ID</p>
     */
    public $GwGroupId;

    /**
     * @param string $Vendor <p>接入点运营商。</p>
     * @param string $PublicAddr <p>接入点地址。</p>
     * @param string $Region <p>接入点地域。</p>
     * @param string $BigArea <p>接入点大区。</p>
     * @param boolean $Available <p>接入点是否可用。</p><p>枚举值：</p><ul><li>true： 接入点可用</li><li>false： 接入点不可用</li></ul>
     * @param string $GwGroupId <p>集群ID</p>
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("PublicAddr",$param) and $param["PublicAddr"] !== null) {
            $this->PublicAddr = $param["PublicAddr"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BigArea",$param) and $param["BigArea"] !== null) {
            $this->BigArea = $param["BigArea"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("GwGroupId",$param) and $param["GwGroupId"] !== null) {
            $this->GwGroupId = $param["GwGroupId"];
        }
    }
}
