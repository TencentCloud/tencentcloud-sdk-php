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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanIp返回参数结构体
 *
 * @method array getIpList() 获取ip列表,当入参Ip为all时，返回所有已知ip列表
 * @method void setIpList(array $IpList) 设置ip列表,当入参Ip为all时，返回所有已知ip列表
 * @method string getBussiness() 获取所属业务
 * @method void setBussiness(string $Bussiness) 设置所属业务
 * @method string getCharacteristic() 获取业务特征
 * @method void setCharacteristic(string $Characteristic) 设置业务特征
 * @method string getDescibe() 获取扫描说明
 * @method void setDescibe(string $Descibe) 设置扫描说明
 * @method string getReferer() 获取官方公告
 * @method void setReferer(string $Referer) 设置官方公告
 * @method string getDemo() 获取扫描示例
 * @method void setDemo(string $Demo) 设置扫描示例
 * @method string getTarget() 获取扫描对象
 * @method void setTarget(string $Target) 设置扫描对象
 * @method string getPurpose() 获取扫描目的
 * @method void setPurpose(string $Purpose) 设置扫描目的
 * @method string getAnnouncement() 获取产品文案
 * @method void setAnnouncement(string $Announcement) 设置产品文案
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method string getIpOwner() 获取ipowner
 * @method void setIpOwner(string $IpOwner) 设置ipowner
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeScanIpResponse extends AbstractModel
{
    /**
     * @var array ip列表,当入参Ip为all时，返回所有已知ip列表
     */
    public $IpList;

    /**
     * @var string 所属业务
     */
    public $Bussiness;

    /**
     * @var string 业务特征
     */
    public $Characteristic;

    /**
     * @var string 扫描说明
     */
    public $Descibe;

    /**
     * @var string 官方公告
     */
    public $Referer;

    /**
     * @var string 扫描示例
     */
    public $Demo;

    /**
     * @var string 扫描对象
     */
    public $Target;

    /**
     * @var string 扫描目的
     */
    public $Purpose;

    /**
     * @var string 产品文案
     */
    public $Announcement;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var string ipowner
     */
    public $IpOwner;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $IpList ip列表,当入参Ip为all时，返回所有已知ip列表
     * @param string $Bussiness 所属业务
     * @param string $Characteristic 业务特征
     * @param string $Descibe 扫描说明
     * @param string $Referer 官方公告
     * @param string $Demo 扫描示例
     * @param string $Target 扫描对象
     * @param string $Purpose 扫描目的
     * @param string $Announcement 产品文案
     * @param integer $UpdateTime 更新时间
     * @param string $IpOwner ipowner
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
        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = [];
            foreach ($param["IpList"] as $key => $value){
                $obj = new ScanIpInfo();
                $obj->deserialize($value);
                array_push($this->IpList, $obj);
            }
        }

        if (array_key_exists("Bussiness",$param) and $param["Bussiness"] !== null) {
            $this->Bussiness = $param["Bussiness"];
        }

        if (array_key_exists("Characteristic",$param) and $param["Characteristic"] !== null) {
            $this->Characteristic = $param["Characteristic"];
        }

        if (array_key_exists("Descibe",$param) and $param["Descibe"] !== null) {
            $this->Descibe = $param["Descibe"];
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IpOwner",$param) and $param["IpOwner"] !== null) {
            $this->IpOwner = $param["IpOwner"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
