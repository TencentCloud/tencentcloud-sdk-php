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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateSandboxInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>沙箱实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>沙箱实例ID</p>
 * @method string getTimeout() 获取手动设置实例还需运行多久，如 5m、300s、1h。未传入时保持原设置；传入后从本次设置开始重新计时。仅正在运行、且未设置为永久运行的实例可修改。修改时不会缩短已获得的自动续期时间。
 * @method void setTimeout(string $Timeout) 设置手动设置实例还需运行多久，如 5m、300s、1h。未传入时保持原设置；传入后从本次设置开始重新计时。仅正在运行、且未设置为永久运行的实例可修改。修改时不会缩短已获得的自动续期时间。
 * @method array getMetadata() 获取实例元数据。
 * @method void setMetadata(array $Metadata) 设置实例元数据。
 */
class UpdateSandboxInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>沙箱实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string 手动设置实例还需运行多久，如 5m、300s、1h。未传入时保持原设置；传入后从本次设置开始重新计时。仅正在运行、且未设置为永久运行的实例可修改。修改时不会缩短已获得的自动续期时间。
     */
    public $Timeout;

    /**
     * @var array 实例元数据。
     */
    public $Metadata;

    /**
     * @param string $InstanceId <p>沙箱实例ID</p>
     * @param string $Timeout 手动设置实例还需运行多久，如 5m、300s、1h。未传入时保持原设置；传入后从本次设置开始重新计时。仅正在运行、且未设置为永久运行的实例可修改。修改时不会缩短已获得的自动续期时间。
     * @param array $Metadata 实例元数据。
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

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = [];
            foreach ($param["Metadata"] as $key => $value){
                $obj = new MetadataVar();
                $obj->deserialize($value);
                array_push($this->Metadata, $obj);
            }
        }
    }
}
