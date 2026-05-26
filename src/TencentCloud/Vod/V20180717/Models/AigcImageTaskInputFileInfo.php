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
 * AIGC生图任务输入文件信息
 *
 * @method string getType() 获取<p>输入的文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li>  <li>Base64：图片或视频转换的Base64字符串；</li></p>
 * @method void setType(string $Type) 设置<p>输入的文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li>  <li>Base64：图片或视频转换的Base64字符串；</li></p>
 * @method string getFileId() 获取<p>图片文件的媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。<br>说明：</p><ol><li>推荐使用小于7M的图片；</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
 * @method void setFileId(string $FileId) 设置<p>图片文件的媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。<br>说明：</p><ol><li>推荐使用小于7M的图片；</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
 * @method string getUrl() 获取<p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。<br>说明：</p><ol><li>推荐使用小于7M的图片；</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
 * @method void setUrl(string $Url) 设置<p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。<br>说明：</p><ol><li>推荐使用小于7M的图片；</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
 * @method string getBase64() 获取<p>可访问的文件 Base64。当 Type 取值为 Base64 时，本参数有效。说明：</p><ol><li>所有文件的文件大小总和不能超过 7 MB，避免转为 Base64 后超出云 API 的 10 MB包大小上限；</li><li>图片格式应为：jpeg，jpg, png, webp；</li><li>不要有data:image/jpeg;base64,之类的前缀。</li></ol>
 * @method void setBase64(string $Base64) 设置<p>可访问的文件 Base64。当 Type 取值为 Base64 时，本参数有效。说明：</p><ol><li>所有文件的文件大小总和不能超过 7 MB，避免转为 Base64 后超出云 API 的 10 MB包大小上限；</li><li>图片格式应为：jpeg，jpg, png, webp；</li><li>不要有data:image/jpeg;base64,之类的前缀。</li></ol>
 * @method string getText() 获取<p>输入图片的描述信息，用于帮助模型理解图片。仅GEM 2.5、GEM 3.0 有效。</p>
 * @method void setText(string $Text) 设置<p>输入图片的描述信息，用于帮助模型理解图片。仅GEM 2.5、GEM 3.0 有效。</p>
 * @method string getReferenceType() 获取<p><strong>仅当 ModelName 为 OG 时有效</strong>。图片类型。</p><p>枚举值：</p><ul><li>mask： 图片蒙版。</li></ul>
 * @method void setReferenceType(string $ReferenceType) 设置<p><strong>仅当 ModelName 为 OG 时有效</strong>。图片类型。</p><p>枚举值：</p><ul><li>mask： 图片蒙版。</li></ul>
 */
class AigcImageTaskInputFileInfo extends AbstractModel
{
    /**
     * @var string <p>输入的文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li>  <li>Base64：图片或视频转换的Base64字符串；</li></p>
     */
    public $Type;

    /**
     * @var string <p>图片文件的媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。<br>说明：</p><ol><li>推荐使用小于7M的图片；</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
     */
    public $FileId;

    /**
     * @var string <p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。<br>说明：</p><ol><li>推荐使用小于7M的图片；</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
     */
    public $Url;

    /**
     * @var string <p>可访问的文件 Base64。当 Type 取值为 Base64 时，本参数有效。说明：</p><ol><li>所有文件的文件大小总和不能超过 7 MB，避免转为 Base64 后超出云 API 的 10 MB包大小上限；</li><li>图片格式应为：jpeg，jpg, png, webp；</li><li>不要有data:image/jpeg;base64,之类的前缀。</li></ol>
     */
    public $Base64;

    /**
     * @var string <p>输入图片的描述信息，用于帮助模型理解图片。仅GEM 2.5、GEM 3.0 有效。</p>
     */
    public $Text;

    /**
     * @var string <p><strong>仅当 ModelName 为 OG 时有效</strong>。图片类型。</p><p>枚举值：</p><ul><li>mask： 图片蒙版。</li></ul>
     */
    public $ReferenceType;

    /**
     * @param string $Type <p>输入的文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li>  <li>Base64：图片或视频转换的Base64字符串；</li></p>
     * @param string $FileId <p>图片文件的媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。<br>说明：</p><ol><li>推荐使用小于7M的图片；</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
     * @param string $Url <p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。<br>说明：</p><ol><li>推荐使用小于7M的图片；</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
     * @param string $Base64 <p>可访问的文件 Base64。当 Type 取值为 Base64 时，本参数有效。说明：</p><ol><li>所有文件的文件大小总和不能超过 7 MB，避免转为 Base64 后超出云 API 的 10 MB包大小上限；</li><li>图片格式应为：jpeg，jpg, png, webp；</li><li>不要有data:image/jpeg;base64,之类的前缀。</li></ol>
     * @param string $Text <p>输入图片的描述信息，用于帮助模型理解图片。仅GEM 2.5、GEM 3.0 有效。</p>
     * @param string $ReferenceType <p><strong>仅当 ModelName 为 OG 时有效</strong>。图片类型。</p><p>枚举值：</p><ul><li>mask： 图片蒙版。</li></ul>
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

        if (array_key_exists("Base64",$param) and $param["Base64"] !== null) {
            $this->Base64 = $param["Base64"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }
    }
}
