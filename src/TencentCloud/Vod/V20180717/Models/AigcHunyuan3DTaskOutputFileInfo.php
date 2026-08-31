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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC 混元 3D 任务的输出文件信息。
 *
 * @method string getStorageMode() 获取<p>存储模式。取值有： <li>Permanent：永久存储；</li> <li>Temporary：临时存储；</li> 默认值：Temporary</p>
 * @method void setStorageMode(string $StorageMode) 设置<p>存储模式。取值有： <li>Permanent：永久存储；</li> <li>Temporary：临时存储；</li> 默认值：Temporary</p>
 * @method string getExpireTime() 获取<p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method string getFileType() 获取<p>文件类型，例如 OBJ、GLB、FBX 等。</p>
 * @method void setFileType(string $FileType) 设置<p>文件类型，例如 OBJ、GLB、FBX 等。</p>
 * @method string getFileUrl() 获取<p>输出文件地址。</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>输出文件地址。</p>
 * @method string getPreviewFileUrl() 获取<p>输出文件预览地址。</p><p>无文件预览地址时为空。</p>
 * @method void setPreviewFileUrl(string $PreviewFileUrl) 设置<p>输出文件预览地址。</p><p>无文件预览地址时为空。</p>
 */
class AigcHunyuan3DTaskOutputFileInfo extends AbstractModel
{
    /**
     * @var string <p>存储模式。取值有： <li>Permanent：永久存储；</li> <li>Temporary：临时存储；</li> 默认值：Temporary</p>
     */
    public $StorageMode;

    /**
     * @var string <p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>文件类型，例如 OBJ、GLB、FBX 等。</p>
     */
    public $FileType;

    /**
     * @var string <p>输出文件地址。</p>
     */
    public $FileUrl;

    /**
     * @var string <p>输出文件预览地址。</p><p>无文件预览地址时为空。</p>
     */
    public $PreviewFileUrl;

    /**
     * @param string $StorageMode <p>存储模式。取值有： <li>Permanent：永久存储；</li> <li>Temporary：临时存储；</li> 默认值：Temporary</p>
     * @param string $ExpireTime <p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     * @param string $FileType <p>文件类型，例如 OBJ、GLB、FBX 等。</p>
     * @param string $FileUrl <p>输出文件地址。</p>
     * @param string $PreviewFileUrl <p>输出文件预览地址。</p><p>无文件预览地址时为空。</p>
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
        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("PreviewFileUrl",$param) and $param["PreviewFileUrl"] !== null) {
            $this->PreviewFileUrl = $param["PreviewFileUrl"];
        }
    }
}
