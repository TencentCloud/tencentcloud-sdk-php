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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒资绑定资源信息，包含媒资绑定模板 ID 和文件信息。
 *
 * @method string getMediaKey() 获取目前仅支持绑定 COS 桶的媒体，请填写存储对象 Key 值，例如：`example-folder/example.mp4`。
 * @method void setMediaKey(string $MediaKey) 设置目前仅支持绑定 COS 桶的媒体，请填写存储对象 Key 值，例如：`example-folder/example.mp4`。
 * @method integer getDefinition() 获取该字段废弃，请勿使用。
 * @method void setDefinition(integer $Definition) 设置该字段废弃，请勿使用。
 * @method string getStorageId() 获取媒资挂载的存储 Id。
 * @method void setStorageId(string $StorageId) 设置媒资挂载的存储 Id。
 */
class ExternalMediaInfo extends AbstractModel
{
    /**
     * @var string 目前仅支持绑定 COS 桶的媒体，请填写存储对象 Key 值，例如：`example-folder/example.mp4`。
     */
    public $MediaKey;

    /**
     * @var integer 该字段废弃，请勿使用。
     */
    public $Definition;

    /**
     * @var string 媒资挂载的存储 Id。
     */
    public $StorageId;

    /**
     * @param string $MediaKey 目前仅支持绑定 COS 桶的媒体，请填写存储对象 Key 值，例如：`example-folder/example.mp4`。
     * @param integer $Definition 该字段废弃，请勿使用。
     * @param string $StorageId 媒资挂载的存储 Id。
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
        if (array_key_exists("MediaKey",$param) and $param["MediaKey"] !== null) {
            $this->MediaKey = $param["MediaKey"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }
    }
}
