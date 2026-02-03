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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGCJob请求参数结构体
 *
 * @method string getRegistryId() 获取实例 Id
 * @method void setRegistryId(string $RegistryId) 设置实例 Id
 * @method GCParameters getGCParameters() 获取GC 参数
 * @method void setGCParameters(GCParameters $GCParameters) 设置GC 参数
 */
class CreateGCJobRequest extends AbstractModel
{
    /**
     * @var string 实例 Id
     */
    public $RegistryId;

    /**
     * @var GCParameters GC 参数
     */
    public $GCParameters;

    /**
     * @param string $RegistryId 实例 Id
     * @param GCParameters $GCParameters GC 参数
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("GCParameters",$param) and $param["GCParameters"] !== null) {
            $this->GCParameters = new GCParameters();
            $this->GCParameters->deserialize($param["GCParameters"]);
        }
    }
}
