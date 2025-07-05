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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单资源
 *
 * @method integer getId() 获取资源主键ID
 * @method void setId(integer $Id) 设置资源主键ID
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getBeginTime() 获取开始时间
 * @method void setBeginTime(string $BeginTime) 设置开始时间
 * @method string getEndTime() 获取到期时间
 * @method void setEndTime(string $EndTime) 设置到期时间
 * @method integer getLicenseType() 获取授权类型
 * @method void setLicenseType(integer $LicenseType) 设置授权类型
 */
class OrderResource extends AbstractModel
{
    /**
     * @var integer 资源主键ID
     */
    public $Id;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 开始时间
     */
    public $BeginTime;

    /**
     * @var string 到期时间
     */
    public $EndTime;

    /**
     * @var integer 授权类型
     */
    public $LicenseType;

    /**
     * @param integer $Id 资源主键ID
     * @param string $ResourceId 资源ID
     * @param string $BeginTime 开始时间
     * @param string $EndTime 到期时间
     * @param integer $LicenseType 授权类型
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }
    }
}
