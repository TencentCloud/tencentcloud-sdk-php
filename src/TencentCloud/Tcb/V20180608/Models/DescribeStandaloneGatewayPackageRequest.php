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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStandaloneGatewayPackage请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getPackageVersion() 获取套餐版本，包含starter、basic、advanced、enterprise
 * @method void setPackageVersion(string $PackageVersion) 设置套餐版本，包含starter、basic、advanced、enterprise
 */
class DescribeStandaloneGatewayPackageRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 套餐版本，包含starter、basic、advanced、enterprise
     */
    public $PackageVersion;

    /**
     * @param string $EnvId 环境ID
     * @param string $PackageVersion 套餐版本，包含starter、basic、advanced、enterprise
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }
    }
}
