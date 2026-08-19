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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCWPScanIpInfo返回参数结构体
 *
 * @method string getBussiness() 获取<p>所属业务</p>
 * @method void setBussiness(string $Bussiness) 设置<p>所属业务</p>
 * @method string getCharacteristic() 获取<p>业务特征</p>
 * @method void setCharacteristic(string $Characteristic) 设置<p>业务特征</p>
 * @method string getDescribe() 获取<p>描述</p>
 * @method void setDescribe(string $Describe) 设置<p>描述</p>
 * @method string getReferer() 获取<p>官方公告</p>
 * @method void setReferer(string $Referer) 设置<p>官方公告</p>
 * @method string getDemo() 获取<p>扫描示例</p>
 * @method void setDemo(string $Demo) 设置<p>扫描示例</p>
 * @method string getTarget() 获取<p>扫描对象</p>
 * @method void setTarget(string $Target) 设置<p>扫描对象</p>
 * @method string getPurpose() 获取<p>扫描目的</p>
 * @method void setPurpose(string $Purpose) 设置<p>扫描目的</p>
 * @method string getAnnouncement() 获取<p>产品文案</p>
 * @method void setAnnouncement(string $Announcement) 设置<p>产品文案</p>
 * @method string getLocation() 获取<p>地理位置</p>
 * @method void setLocation(string $Location) 设置<p>地理位置</p>
 * @method string getISP() 获取<p>所属运营商</p>
 * @method void setISP(string $ISP) 设置<p>所属运营商</p>
 * @method boolean getIsBelongTencent() 获取<p>是否归属于腾讯</p>
 * @method void setIsBelongTencent(boolean $IsBelongTencent) 设置<p>是否归属于腾讯</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCWPScanIpInfoResponse extends AbstractModel
{
    /**
     * @var string <p>所属业务</p>
     */
    public $Bussiness;

    /**
     * @var string <p>业务特征</p>
     */
    public $Characteristic;

    /**
     * @var string <p>描述</p>
     */
    public $Describe;

    /**
     * @var string <p>官方公告</p>
     */
    public $Referer;

    /**
     * @var string <p>扫描示例</p>
     */
    public $Demo;

    /**
     * @var string <p>扫描对象</p>
     */
    public $Target;

    /**
     * @var string <p>扫描目的</p>
     */
    public $Purpose;

    /**
     * @var string <p>产品文案</p>
     */
    public $Announcement;

    /**
     * @var string <p>地理位置</p>
     */
    public $Location;

    /**
     * @var string <p>所属运营商</p>
     */
    public $ISP;

    /**
     * @var boolean <p>是否归属于腾讯</p>
     */
    public $IsBelongTencent;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Bussiness <p>所属业务</p>
     * @param string $Characteristic <p>业务特征</p>
     * @param string $Describe <p>描述</p>
     * @param string $Referer <p>官方公告</p>
     * @param string $Demo <p>扫描示例</p>
     * @param string $Target <p>扫描对象</p>
     * @param string $Purpose <p>扫描目的</p>
     * @param string $Announcement <p>产品文案</p>
     * @param string $Location <p>地理位置</p>
     * @param string $ISP <p>所属运营商</p>
     * @param boolean $IsBelongTencent <p>是否归属于腾讯</p>
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
        if (array_key_exists("Bussiness",$param) and $param["Bussiness"] !== null) {
            $this->Bussiness = $param["Bussiness"];
        }

        if (array_key_exists("Characteristic",$param) and $param["Characteristic"] !== null) {
            $this->Characteristic = $param["Characteristic"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = $param["Referer"];
        }

        if (array_key_exists("Demo",$param) and $param["Demo"] !== null) {
            $this->Demo = $param["Demo"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Purpose",$param) and $param["Purpose"] !== null) {
            $this->Purpose = $param["Purpose"];
        }

        if (array_key_exists("Announcement",$param) and $param["Announcement"] !== null) {
            $this->Announcement = $param["Announcement"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("IsBelongTencent",$param) and $param["IsBelongTencent"] !== null) {
            $this->IsBelongTencent = $param["IsBelongTencent"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
