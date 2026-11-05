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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建 RayServe 推理服务时一并挂载的 LoRA 模型版本
 *
 * @method string getModelVersionUid() 获取<p>LoRA 模型版本 UID（ListModelVersions 返回的 VersionUid；该模型须以部署基座为 BaseModelUid）</p>
 * @method void setModelVersionUid(string $ModelVersionUid) 设置<p>LoRA 模型版本 UID（ListModelVersions 返回的 VersionUid；该模型须以部署基座为 BaseModelUid）</p>
 */
class LoraAdapterBinding extends AbstractModel
{
    /**
     * @var string <p>LoRA 模型版本 UID（ListModelVersions 返回的 VersionUid；该模型须以部署基座为 BaseModelUid）</p>
     */
    public $ModelVersionUid;

    /**
     * @param string $ModelVersionUid <p>LoRA 模型版本 UID（ListModelVersions 返回的 VersionUid；该模型须以部署基座为 BaseModelUid）</p>
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
        if (array_key_exists("ModelVersionUid",$param) and $param["ModelVersionUid"] !== null) {
            $this->ModelVersionUid = $param["ModelVersionUid"];
        }
    }
}
