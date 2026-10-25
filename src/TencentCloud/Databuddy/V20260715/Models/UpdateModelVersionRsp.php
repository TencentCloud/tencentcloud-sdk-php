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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改模型版本信息响应
 *
 * @method ModelVersionInfo getModelVersion() 获取更新后的模型版本信息
 * @method void setModelVersion(ModelVersionInfo $ModelVersion) 设置更新后的模型版本信息
 */
class UpdateModelVersionRsp extends AbstractModel
{
    /**
     * @var ModelVersionInfo 更新后的模型版本信息
     */
    public $ModelVersion;

    /**
     * @param ModelVersionInfo $ModelVersion 更新后的模型版本信息
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
        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = new ModelVersionInfo();
            $this->ModelVersion->deserialize($param["ModelVersion"]);
        }
    }
}
