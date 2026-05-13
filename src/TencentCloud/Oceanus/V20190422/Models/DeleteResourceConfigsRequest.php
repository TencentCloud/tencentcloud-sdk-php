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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteResourceConfigs请求参数结构体
 *
 * @method string getResourceId() 获取<p>资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID</p>
 * @method array getResourceConfigVersions() 获取<p>资源版本数组</p>
 * @method void setResourceConfigVersions(array $ResourceConfigVersions) 设置<p>资源版本数组</p>
 * @method string getWorkSpaceId() 获取<p>工作空间 SerialId</p>
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置<p>工作空间 SerialId</p>
 */
class DeleteResourceConfigsRequest extends AbstractModel
{
    /**
     * @var string <p>资源ID</p>
     */
    public $ResourceId;

    /**
     * @var array <p>资源版本数组</p>
     */
    public $ResourceConfigVersions;

    /**
     * @var string <p>工作空间 SerialId</p>
     */
    public $WorkSpaceId;

    /**
     * @param string $ResourceId <p>资源ID</p>
     * @param array $ResourceConfigVersions <p>资源版本数组</p>
     * @param string $WorkSpaceId <p>工作空间 SerialId</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceConfigVersions",$param) and $param["ResourceConfigVersions"] !== null) {
            $this->ResourceConfigVersions = $param["ResourceConfigVersions"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
