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
 * @method string getTimeout() 获取<p>新的超时时间（从设置时开始重新计算超时），支持格式：5m、300s、1h等。最小30s，最大24h。如果不指定则保持原有超时设置</p>
 * @method void setTimeout(string $Timeout) 设置<p>新的超时时间（从设置时开始重新计算超时），支持格式：5m、300s、1h等。最小30s，最大24h。如果不指定则保持原有超时设置</p>
 * @method array getMetadata() 获取<p>沙箱实例元数据</p>
 * @method void setMetadata(array $Metadata) 设置<p>沙箱实例元数据</p>
 */
class UpdateSandboxInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>沙箱实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>新的超时时间（从设置时开始重新计算超时），支持格式：5m、300s、1h等。最小30s，最大24h。如果不指定则保持原有超时设置</p>
     */
    public $Timeout;

    /**
     * @var array <p>沙箱实例元数据</p>
     */
    public $Metadata;

    /**
     * @param string $InstanceId <p>沙箱实例ID</p>
     * @param string $Timeout <p>新的超时时间（从设置时开始重新计算超时），支持格式：5m、300s、1h等。最小30s，最大24h。如果不指定则保持原有超时设置</p>
     * @param array $Metadata <p>沙箱实例元数据</p>
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
