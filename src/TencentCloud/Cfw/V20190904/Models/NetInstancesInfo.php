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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络实例信息
 *
 * @method string getInstanceId() 获取网络实例ID
 * @method void setInstanceId(string $InstanceId) 设置网络实例ID
 * @method string getInstanceName() 获取网络实例名称
 * @method void setInstanceName(string $InstanceName) 设置网络实例名称
 * @method string getInstanceCidr() 获取网络cidr (多段以逗号分隔)
 * @method void setInstanceCidr(string $InstanceCidr) 设置网络cidr (多段以逗号分隔)
 * @method string getRegion() 获取网络实例所在地域
 * @method void setRegion(string $Region) 设置网络实例所在地域
 */
class NetInstancesInfo extends AbstractModel
{
    /**
     * @var string 网络实例ID
     */
    public $InstanceId;

    /**
     * @var string 网络实例名称
     */
    public $InstanceName;

    /**
     * @var string 网络cidr (多段以逗号分隔)
     */
    public $InstanceCidr;

    /**
     * @var string 网络实例所在地域
     */
    public $Region;

    /**
     * @param string $InstanceId 网络实例ID
     * @param string $InstanceName 网络实例名称
     * @param string $InstanceCidr 网络cidr (多段以逗号分隔)
     * @param string $Region 网络实例所在地域
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceCidr",$param) and $param["InstanceCidr"] !== null) {
            $this->InstanceCidr = $param["InstanceCidr"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
