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
 * AIGC 混元 3D 的多视角图信息。
 *
 * @method string getType() 获取<p>输入的文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li></p>
 * @method void setType(string $Type) 设置<p>输入的文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li></p>
 * @method string getFileId() 获取<p>文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。说明：图片格式的取值为：支持 jpg、jpeg、png、bmp、webp。</p>
 * @method void setFileId(string $FileId) 设置<p>文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。说明：图片格式的取值为：支持 jpg、jpeg、png、bmp、webp。</p>
 * @method string getUrl() 获取<p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。说明：图片格式的取值为：支持 jpg、jpeg、png、bmp、webp。</p>
 * @method void setUrl(string $Url) 设置<p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。说明：图片格式的取值为：支持 jpg、jpeg、png、bmp、webp。</p>
 * @method string getViewType() 获取<p>视角图片类型。</p><p>枚举值：</p><ul><li><p>front： 正视图 （必填）</p></li><li><p>back： 背视图</p></li><li><p>left： 左视图</p></li><li><p>right： 右视图</p></li><li><p>top： 顶视图</p></li><li><p>bottom： 底视图</p></li><li><p>left_front： 左前 45°</p></li><li><p>right_front： 右前 45°</p></li><li><p>必须包含 front 视角；</p></li><li><p>同一 ViewType 不允许重复。</p></li></ul>
 * @method void setViewType(string $ViewType) 设置<p>视角图片类型。</p><p>枚举值：</p><ul><li><p>front： 正视图 （必填）</p></li><li><p>back： 背视图</p></li><li><p>left： 左视图</p></li><li><p>right： 右视图</p></li><li><p>top： 顶视图</p></li><li><p>bottom： 底视图</p></li><li><p>left_front： 左前 45°</p></li><li><p>right_front： 右前 45°</p></li><li><p>必须包含 front 视角；</p></li><li><p>同一 ViewType 不允许重复。</p></li></ul>
 */
class AigcHunyuan3DMultiViewImageInfo extends AbstractModel
{
    /**
     * @var string <p>输入的文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li></p>
     */
    public $Type;

    /**
     * @var string <p>文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。说明：图片格式的取值为：支持 jpg、jpeg、png、bmp、webp。</p>
     */
    public $FileId;

    /**
     * @var string <p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。说明：图片格式的取值为：支持 jpg、jpeg、png、bmp、webp。</p>
     */
    public $Url;

    /**
     * @var string <p>视角图片类型。</p><p>枚举值：</p><ul><li><p>front： 正视图 （必填）</p></li><li><p>back： 背视图</p></li><li><p>left： 左视图</p></li><li><p>right： 右视图</p></li><li><p>top： 顶视图</p></li><li><p>bottom： 底视图</p></li><li><p>left_front： 左前 45°</p></li><li><p>right_front： 右前 45°</p></li><li><p>必须包含 front 视角；</p></li><li><p>同一 ViewType 不允许重复。</p></li></ul>
     */
    public $ViewType;

    /**
     * @param string $Type <p>输入的文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li></p>
     * @param string $FileId <p>文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。说明：图片格式的取值为：支持 jpg、jpeg、png、bmp、webp。</p>
     * @param string $Url <p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。说明：图片格式的取值为：支持 jpg、jpeg、png、bmp、webp。</p>
     * @param string $ViewType <p>视角图片类型。</p><p>枚举值：</p><ul><li><p>front： 正视图 （必填）</p></li><li><p>back： 背视图</p></li><li><p>left： 左视图</p></li><li><p>right： 右视图</p></li><li><p>top： 顶视图</p></li><li><p>bottom： 底视图</p></li><li><p>left_front： 左前 45°</p></li><li><p>right_front： 右前 45°</p></li><li><p>必须包含 front 视角；</p></li><li><p>同一 ViewType 不允许重复。</p></li></ul>
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

        if (array_key_exists("ViewType",$param) and $param["ViewType"] !== null) {
            $this->ViewType = $param["ViewType"];
        }
    }
}
