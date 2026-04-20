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
 * AIGC 视频转绘任务输入文件信息。
 *
 * @method string getType() 获取<p>输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li></p>
 * @method void setType(string $Type) 设置<p>输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li></p>
 * @method string getFileId() 获取<p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。说明：1. 推荐使用小于10M的图片；2. 图片格式的取值为：jpeg，jpg, png。</p>
 * @method void setFileId(string $FileId) 设置<p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。说明：1. 推荐使用小于10M的图片；2. 图片格式的取值为：jpeg，jpg, png。</p>
 * @method string getUrl() 获取<p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。说明：1. 推荐使用小于10M的图片；2. 图片格式的取值为：jpeg，jpg, png。</p>
 * @method void setUrl(string $Url) 设置<p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。说明：1. 推荐使用小于10M的图片；2. 图片格式的取值为：jpeg，jpg, png。</p>
 */
class AigcVideoRedrawTaskInputFileInfo extends AbstractModel
{
    /**
     * @var string <p>输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li></p>
     */
    public $Type;

    /**
     * @var string <p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。说明：1. 推荐使用小于10M的图片；2. 图片格式的取值为：jpeg，jpg, png。</p>
     */
    public $FileId;

    /**
     * @var string <p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。说明：1. 推荐使用小于10M的图片；2. 图片格式的取值为：jpeg，jpg, png。</p>
     */
    public $Url;

    /**
     * @param string $Type <p>输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li></p>
     * @param string $FileId <p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。说明：1. 推荐使用小于10M的图片；2. 图片格式的取值为：jpeg，jpg, png。</p>
     * @param string $Url <p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。说明：1. 推荐使用小于10M的图片；2. 图片格式的取值为：jpeg，jpg, png。</p>
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
