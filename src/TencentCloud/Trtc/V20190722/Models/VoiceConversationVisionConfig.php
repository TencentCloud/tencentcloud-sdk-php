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
 * AI对话视觉理解相关的参数配置。
 *
 * @method boolean getEnable() 获取<p>是否启用视觉理解。</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否启用视觉理解。</p>
 * @method integer getStorageType() 获取<p>存储类型。</p><p>枚举值：</p><ul><li>0： 不存储。</li><li>1： 指定云存储，这种情况下CloudStorage参数必填。</li></ul><p>默认值：0</p>
 * @method void setStorageType(integer $StorageType) 设置<p>存储类型。</p><p>枚举值：</p><ul><li>0： 不存储。</li><li>1： 指定云存储，这种情况下CloudStorage参数必填。</li></ul><p>默认值：0</p>
 * @method CloudStorage getCloudStorage() 获取<p>第三方云存储归档配置。配置后，后台将从 SDK 收到的 I 帧自动上传至指定云存储桶进行持久化保存。</p>
 * @method void setCloudStorage(CloudStorage $CloudStorage) 设置<p>第三方云存储归档配置。配置后，后台将从 SDK 收到的 I 帧自动上传至指定云存储桶进行持久化保存。</p>
 */
class VoiceConversationVisionConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否启用视觉理解。</p>
     */
    public $Enable;

    /**
     * @var integer <p>存储类型。</p><p>枚举值：</p><ul><li>0： 不存储。</li><li>1： 指定云存储，这种情况下CloudStorage参数必填。</li></ul><p>默认值：0</p>
     */
    public $StorageType;

    /**
     * @var CloudStorage <p>第三方云存储归档配置。配置后，后台将从 SDK 收到的 I 帧自动上传至指定云存储桶进行持久化保存。</p>
     */
    public $CloudStorage;

    /**
     * @param boolean $Enable <p>是否启用视觉理解。</p>
     * @param integer $StorageType <p>存储类型。</p><p>枚举值：</p><ul><li>0： 不存储。</li><li>1： 指定云存储，这种情况下CloudStorage参数必填。</li></ul><p>默认值：0</p>
     * @param CloudStorage $CloudStorage <p>第三方云存储归档配置。配置后，后台将从 SDK 收到的 I 帧自动上传至指定云存储桶进行持久化保存。</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("CloudStorage",$param) and $param["CloudStorage"] !== null) {
            $this->CloudStorage = new CloudStorage();
            $this->CloudStorage->deserialize($param["CloudStorage"]);
        }
    }
}
