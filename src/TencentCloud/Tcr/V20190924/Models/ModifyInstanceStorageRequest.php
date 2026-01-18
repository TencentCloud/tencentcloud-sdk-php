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
 * ModifyInstanceStorage请求参数结构体
 *
 * @method string getRegistryId() 获取<p>实例ID</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>实例ID</p>
 * @method string getTargetRegion() 获取<p>目标存储资源地域</p>
 * @method void setTargetRegion(string $TargetRegion) 设置<p>目标存储资源地域</p>
 * @method string getTargetStorageName() 获取<p>目标存储资源名称</p>
 * @method void setTargetStorageName(string $TargetStorageName) 设置<p>目标存储资源名称</p>
 */
class ModifyInstanceStorageRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $RegistryId;

    /**
     * @var string <p>目标存储资源地域</p>
     */
    public $TargetRegion;

    /**
     * @var string <p>目标存储资源名称</p>
     */
    public $TargetStorageName;

    /**
     * @param string $RegistryId <p>实例ID</p>
     * @param string $TargetRegion <p>目标存储资源地域</p>
     * @param string $TargetStorageName <p>目标存储资源名称</p>
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

        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            $this->TargetRegion = $param["TargetRegion"];
        }

        if (array_key_exists("TargetStorageName",$param) and $param["TargetStorageName"] !== null) {
            $this->TargetStorageName = $param["TargetStorageName"];
        }
    }
}
