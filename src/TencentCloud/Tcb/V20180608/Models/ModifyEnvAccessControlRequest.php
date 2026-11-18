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
 * ModifyEnvAccessControl请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境id</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境id</p>
 * @method array getSources() 获取<p>本次要设置的来源集合</p><p>入参限制：SourceType = PUBLIC 时，标识操作公网开关<br>SourceType = VPC 时，通过配置 VPCWhiteList，开启/关闭 VPC 白名单<br>SourceType = WOA 时，通过配置 WOAAuth，开启/关闭鉴权校验，开启鉴权时，AuthToken 字段为填</p>
 * @method void setSources(array $Sources) 设置<p>本次要设置的来源集合</p><p>入参限制：SourceType = PUBLIC 时，标识操作公网开关<br>SourceType = VPC 时，通过配置 VPCWhiteList，开启/关闭 VPC 白名单<br>SourceType = WOA 时，通过配置 WOAAuth，开启/关闭鉴权校验，开启鉴权时，AuthToken 字段为填</p>
 */
class ModifyEnvAccessControlRequest extends AbstractModel
{
    /**
     * @var string <p>环境id</p>
     */
    public $EnvId;

    /**
     * @var array <p>本次要设置的来源集合</p><p>入参限制：SourceType = PUBLIC 时，标识操作公网开关<br>SourceType = VPC 时，通过配置 VPCWhiteList，开启/关闭 VPC 白名单<br>SourceType = WOA 时，通过配置 WOAAuth，开启/关闭鉴权校验，开启鉴权时，AuthToken 字段为填</p>
     */
    public $Sources;

    /**
     * @param string $EnvId <p>环境id</p>
     * @param array $Sources <p>本次要设置的来源集合</p><p>入参限制：SourceType = PUBLIC 时，标识操作公网开关<br>SourceType = VPC 时，通过配置 VPCWhiteList，开启/关闭 VPC 白名单<br>SourceType = WOA 时，通过配置 WOAAuth，开启/关闭鉴权校验，开启鉴权时，AuthToken 字段为填</p>
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

        if (array_key_exists("Sources",$param) and $param["Sources"] !== null) {
            $this->Sources = [];
            foreach ($param["Sources"] as $key => $value){
                $obj = new AccessSourceSetting();
                $obj->deserialize($value);
                array_push($this->Sources, $obj);
            }
        }
    }
}
