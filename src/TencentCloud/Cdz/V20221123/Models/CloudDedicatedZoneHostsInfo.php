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
namespace TencentCloud\Cdz\V20221123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDZ的母机和子机的对应关系
 *
 * @method string getHostUuid() 获取Host的唯一标识uuid
 * @method void setHostUuid(string $HostUuid) 设置Host的唯一标识uuid
 * @method array getInstancesInfo() 获取实例名称数组
 * @method void setInstancesInfo(array $InstancesInfo) 设置实例名称数组
 */
class CloudDedicatedZoneHostsInfo extends AbstractModel
{
    /**
     * @var string Host的唯一标识uuid
     */
    public $HostUuid;

    /**
     * @var array 实例名称数组
     */
    public $InstancesInfo;

    /**
     * @param string $HostUuid Host的唯一标识uuid
     * @param array $InstancesInfo 实例名称数组
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
        if (array_key_exists("HostUuid",$param) and $param["HostUuid"] !== null) {
            $this->HostUuid = $param["HostUuid"];
        }

        if (array_key_exists("InstancesInfo",$param) and $param["InstancesInfo"] !== null) {
            $this->InstancesInfo = $param["InstancesInfo"];
        }
    }
}
