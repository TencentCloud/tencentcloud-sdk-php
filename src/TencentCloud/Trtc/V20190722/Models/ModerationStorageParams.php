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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审核存储参数
 *
 * @method CloudModerationStorage getCloudModerationStorage() 获取腾讯云对象存储COS以及第三方云存储的账号信息
 * @method void setCloudModerationStorage(CloudModerationStorage $CloudModerationStorage) 设置腾讯云对象存储COS以及第三方云存储的账号信息
 */
class ModerationStorageParams extends AbstractModel
{
    /**
     * @var CloudModerationStorage 腾讯云对象存储COS以及第三方云存储的账号信息
     */
    public $CloudModerationStorage;

    /**
     * @param CloudModerationStorage $CloudModerationStorage 腾讯云对象存储COS以及第三方云存储的账号信息
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
        if (array_key_exists("CloudModerationStorage",$param) and $param["CloudModerationStorage"] !== null) {
            $this->CloudModerationStorage = new CloudModerationStorage();
            $this->CloudModerationStorage->deserialize($param["CloudModerationStorage"]);
        }
    }
}
