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
 * Dspm Ip信息
 *
 * @method string getIp() 获取ip地址
 * @method void setIp(string $Ip) 设置ip地址
 * @method string getIpType() 获取ip类型。public-公网 private-内网
 * @method void setIpType(string $IpType) 设置ip类型。public-公网 private-内网
 * @method string getRemark() 获取ip标记信息
 * @method void setRemark(string $Remark) 设置ip标记信息
 * @method integer getIsRemarked() 获取是否已经标记信息
 * @method void setIsRemarked(integer $IsRemarked) 设置是否已经标记信息
 * @method string getResourceInstanceId() 获取ip归属实例id
 * @method void setResourceInstanceId(string $ResourceInstanceId) 设置ip归属实例id
 * @method string getResourceType() 获取ip所属产品
 * @method void setResourceType(string $ResourceType) 设置ip所属产品
 * @method DspmArea getArea() 获取ip所属地域
 * @method void setArea(DspmArea $Area) 设置ip所属地域
 * @method integer getIsNewIp() 获取是否新ip地址
 * @method void setIsNewIp(integer $IsNewIp) 设置是否新ip地址
 */
class DspmIp extends AbstractModel
{
    /**
     * @var string ip地址
     */
    public $Ip;

    /**
     * @var string ip类型。public-公网 private-内网
     */
    public $IpType;

    /**
     * @var string ip标记信息
     */
    public $Remark;

    /**
     * @var integer 是否已经标记信息
     */
    public $IsRemarked;

    /**
     * @var string ip归属实例id
     */
    public $ResourceInstanceId;

    /**
     * @var string ip所属产品
     */
    public $ResourceType;

    /**
     * @var DspmArea ip所属地域
     */
    public $Area;

    /**
     * @var integer 是否新ip地址
     */
    public $IsNewIp;

    /**
     * @param string $Ip ip地址
     * @param string $IpType ip类型。public-公网 private-内网
     * @param string $Remark ip标记信息
     * @param integer $IsRemarked 是否已经标记信息
     * @param string $ResourceInstanceId ip归属实例id
     * @param string $ResourceType ip所属产品
     * @param DspmArea $Area ip所属地域
     * @param integer $IsNewIp 是否新ip地址
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("IpType",$param) and $param["IpType"] !== null) {
            $this->IpType = $param["IpType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IsRemarked",$param) and $param["IsRemarked"] !== null) {
            $this->IsRemarked = $param["IsRemarked"];
        }

        if (array_key_exists("ResourceInstanceId",$param) and $param["ResourceInstanceId"] !== null) {
            $this->ResourceInstanceId = $param["ResourceInstanceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = new DspmArea();
            $this->Area->deserialize($param["Area"]);
        }

        if (array_key_exists("IsNewIp",$param) and $param["IsNewIp"] !== null) {
            $this->IsNewIp = $param["IsNewIp"];
        }
    }
}
