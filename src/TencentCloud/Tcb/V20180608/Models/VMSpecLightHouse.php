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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * vm规格
 *
 * @method string getBundleId() 获取LH主机的BundleId
 * @method void setBundleId(string $BundleId) 设置LH主机的BundleId
 * @method string getBundleConfig() 获取主机配置详情json
 * @method void setBundleConfig(string $BundleConfig) 设置主机配置详情json
 */
class VMSpecLightHouse extends AbstractModel
{
    /**
     * @var string LH主机的BundleId
     */
    public $BundleId;

    /**
     * @var string 主机配置详情json
     */
    public $BundleConfig;

    /**
     * @param string $BundleId LH主机的BundleId
     * @param string $BundleConfig 主机配置详情json
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
        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleConfig",$param) and $param["BundleConfig"] !== null) {
            $this->BundleConfig = $param["BundleConfig"];
        }
    }
}
