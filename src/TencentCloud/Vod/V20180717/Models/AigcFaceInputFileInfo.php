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
 * AIGC 人脸输入文件信息
 *
 * @method string getType() 获取输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li> 
 * @method void setType(string $Type) 设置输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li> 
 * @method string getFileId() 获取媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。当 Type 取值为 File 时，本参数有效。
 * @method void setFileId(string $FileId) 设置媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。当 Type 取值为 File 时，本参数有效。
 * @method string getUrl() 获取可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。
 * @method void setUrl(string $Url) 设置可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。
 */
class AigcFaceInputFileInfo extends AbstractModel
{
    /**
     * @var string 输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li> 
     */
    public $Type;

    /**
     * @var string 媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。当 Type 取值为 File 时，本参数有效。
     */
    public $FileId;

    /**
     * @var string 可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。
     */
    public $Url;

    /**
     * @param string $Type 输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li> 
     * @param string $FileId 媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。当 Type 取值为 File 时，本参数有效。
     * @param string $Url 可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
