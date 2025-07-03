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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 独占实例
 *
 * @method string getCenterType() 获取配置中心类型[Registration、Configuration]
 * @method void setCenterType(string $CenterType) 设置配置中心类型[Registration、Configuration]
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceType() 获取实例类型[Polaris]
 * @method void setInstanceType(string $InstanceType) 设置实例类型[Polaris]
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getRegionId() 获取实例地域id
 * @method void setRegionId(string $RegionId) 设置实例地域id
 * @method string getInstanceNamespaceId() 获取实例命名空间ID
 * @method void setInstanceNamespaceId(string $InstanceNamespaceId) 设置实例命名空间ID
 */
class ExclusiveInstance extends AbstractModel
{
    /**
     * @var string 配置中心类型[Registration、Configuration]
     */
    public $CenterType;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例类型[Polaris]
     */
    public $InstanceType;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例地域id
     */
    public $RegionId;

    /**
     * @var string 实例命名空间ID
     */
    public $InstanceNamespaceId;

    /**
     * @param string $CenterType 配置中心类型[Registration、Configuration]
     * @param string $InstanceId 实例id
     * @param string $InstanceType 实例类型[Polaris]
     * @param string $InstanceName 实例名称
     * @param string $RegionId 实例地域id
     * @param string $InstanceNamespaceId 实例命名空间ID
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
        if (array_key_exists("CenterType",$param) and $param["CenterType"] !== null) {
            $this->CenterType = $param["CenterType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("InstanceNamespaceId",$param) and $param["InstanceNamespaceId"] !== null) {
            $this->InstanceNamespaceId = $param["InstanceNamespaceId"];
        }
    }
}
