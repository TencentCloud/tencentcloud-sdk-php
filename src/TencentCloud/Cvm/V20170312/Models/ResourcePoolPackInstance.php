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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述实例资源池内已创建实例的信息
 *
 * @method string getDedicatedResourcePackId() 获取实例资源池ID。形如：rpp-fb7bzcyt。
 * @method void setDedicatedResourcePackId(string $DedicatedResourcePackId) 设置实例资源池ID。形如：rpp-fb7bzcyt。
 * @method array getInstanceIdSet() 获取实例资源池内的实例ID列表。形如：["ins-5u8lxsum"]。
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置实例资源池内的实例ID列表。形如：["ins-5u8lxsum"]。
 * @method string getInstanceFamily() 获取实例族。形如：SA9。
 * @method void setInstanceFamily(string $InstanceFamily) 设置实例族。形如：SA9。
 * @method string getInstanceType() 获取实例规格。形如：SA9.96XLARGE1152。
 * @method void setInstanceType(string $InstanceType) 设置实例规格。形如：SA9.96XLARGE1152。
 * @method string getZone() 获取可用区。形如：ap-guangzhou-6。
 * @method void setZone(string $Zone) 设置可用区。形如：ap-guangzhou-6。
 */
class ResourcePoolPackInstance extends AbstractModel
{
    /**
     * @var string 实例资源池ID。形如：rpp-fb7bzcyt。
     */
    public $DedicatedResourcePackId;

    /**
     * @var array 实例资源池内的实例ID列表。形如：["ins-5u8lxsum"]。
     */
    public $InstanceIdSet;

    /**
     * @var string 实例族。形如：SA9。
     */
    public $InstanceFamily;

    /**
     * @var string 实例规格。形如：SA9.96XLARGE1152。
     */
    public $InstanceType;

    /**
     * @var string 可用区。形如：ap-guangzhou-6。
     */
    public $Zone;

    /**
     * @param string $DedicatedResourcePackId 实例资源池ID。形如：rpp-fb7bzcyt。
     * @param array $InstanceIdSet 实例资源池内的实例ID列表。形如：["ins-5u8lxsum"]。
     * @param string $InstanceFamily 实例族。形如：SA9。
     * @param string $InstanceType 实例规格。形如：SA9.96XLARGE1152。
     * @param string $Zone 可用区。形如：ap-guangzhou-6。
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
        if (array_key_exists("DedicatedResourcePackId",$param) and $param["DedicatedResourcePackId"] !== null) {
            $this->DedicatedResourcePackId = $param["DedicatedResourcePackId"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
