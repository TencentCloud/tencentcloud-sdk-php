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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 第三方存储参数。
 *
 * @method CloudStorage getCloudStorage() 获取第三方云存储的账号信息（暂不支持）。
 * @method void setCloudStorage(CloudStorage $CloudStorage) 设置第三方云存储的账号信息（暂不支持）。
 * @method CloudVod getCloudVod() 获取第三方云点播的账号信息。
 * @method void setCloudVod(CloudVod $CloudVod) 设置第三方云点播的账号信息。
 */
class StorageParams extends AbstractModel
{
    /**
     * @var CloudStorage 第三方云存储的账号信息（暂不支持）。
     */
    public $CloudStorage;

    /**
     * @var CloudVod 第三方云点播的账号信息。
     */
    public $CloudVod;

    /**
     * @param CloudStorage $CloudStorage 第三方云存储的账号信息（暂不支持）。
     * @param CloudVod $CloudVod 第三方云点播的账号信息。
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
        if (array_key_exists("CloudStorage",$param) and $param["CloudStorage"] !== null) {
            $this->CloudStorage = new CloudStorage();
            $this->CloudStorage->deserialize($param["CloudStorage"]);
        }

        if (array_key_exists("CloudVod",$param) and $param["CloudVod"] !== null) {
            $this->CloudVod = new CloudVod();
            $this->CloudVod->deserialize($param["CloudVod"]);
        }
    }
}
