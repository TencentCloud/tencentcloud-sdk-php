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
 * Mcu转推录制，第三方存储参数。
 *
 * @method CloudStorage getCloudStorage() 获取第三方云存储的账号信息（特别说明：若您选择存储至对象存储COS将会收取录制文件投递至COS的费用，详见云端录制收费说明，存储至VOD将不收取此项费用。）。
 * @method void setCloudStorage(CloudStorage $CloudStorage) 设置第三方云存储的账号信息（特别说明：若您选择存储至对象存储COS将会收取录制文件投递至COS的费用，详见云端录制收费说明，存储至VOD将不收取此项费用。）。
 * @method McuCloudVod getMcuCloudVod() 获取腾讯云云点播的账号信息。
 * @method void setMcuCloudVod(McuCloudVod $McuCloudVod) 设置腾讯云云点播的账号信息。
 */
class McuStorageParams extends AbstractModel
{
    /**
     * @var CloudStorage 第三方云存储的账号信息（特别说明：若您选择存储至对象存储COS将会收取录制文件投递至COS的费用，详见云端录制收费说明，存储至VOD将不收取此项费用。）。
     */
    public $CloudStorage;

    /**
     * @var McuCloudVod 腾讯云云点播的账号信息。
     */
    public $McuCloudVod;

    /**
     * @param CloudStorage $CloudStorage 第三方云存储的账号信息（特别说明：若您选择存储至对象存储COS将会收取录制文件投递至COS的费用，详见云端录制收费说明，存储至VOD将不收取此项费用。）。
     * @param McuCloudVod $McuCloudVod 腾讯云云点播的账号信息。
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

        if (array_key_exists("McuCloudVod",$param) and $param["McuCloudVod"] !== null) {
            $this->McuCloudVod = new McuCloudVod();
            $this->McuCloudVod->deserialize($param["McuCloudVod"]);
        }
    }
}
