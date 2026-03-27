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
 * AIGC 生视频任务输入的图片文件信息。
 *
 * @method string getType() 获取<p>输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li></p>
 * @method void setType(string $Type) 设置<p>输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li></p>
 * @method string getCategory() 获取<p>文件分类。取值为：</p><li>Image: 图片；</li><li>Video: 视频。</li>
 * @method void setCategory(string $Category) 设置<p>文件分类。取值为：</p><li>Image: 图片；</li><li>Video: 视频。</li>
 * @method string getFileId() 获取<p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。说明：</p><ol><li>推荐使用小于10M的图片；</li><li>图片格式的取值为：jpeg，jpg, png。</li></ol>
 * @method void setFileId(string $FileId) 设置<p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。说明：</p><ol><li>推荐使用小于10M的图片；</li><li>图片格式的取值为：jpeg，jpg, png。</li></ol>
 * @method string getUrl() 获取<p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。<br>说明：</p><ol><li>推荐使用小于10M的图片；</li><li>图片格式的取值为：jpeg，jpg, png。</li></ol>
 * @method void setUrl(string $Url) 设置<p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。<br>说明：</p><ol><li>推荐使用小于10M的图片；</li><li>图片格式的取值为：jpeg，jpg, png。</li></ol>
 * @method string getReferenceType() 获取<p>参考类型，GV模型适用。<br>注意：<br>当使用 GV 模型时，可作为参考方式，可选值：asset 表示素材、style 表示风格；<br>当使用 Kling 模型以及 Category 为 Video 时，可区分参考视频类型，feature 表示特征参考视频，base 表示待编辑视频。</p>
 * @method void setReferenceType(string $ReferenceType) 设置<p>参考类型，GV模型适用。<br>注意：<br>当使用 GV 模型时，可作为参考方式，可选值：asset 表示素材、style 表示风格；<br>当使用 Kling 模型以及 Category 为 Video 时，可区分参考视频类型，feature 表示特征参考视频，base 表示待编辑视频。</p>
 * @method string getObjectId() 获取<p>用法：Vidu主体Id、参考图模式。<br>参考图模式：只有一张图时候，ObjectId必须不为空（一张图、ObjectId为空，为首帧模式）。<br>Vidu主体Id：prompt可以通过 @主体Id 的方式使用。当 Category 为 Image 时有效。</p>
 * @method void setObjectId(string $ObjectId) 设置<p>用法：Vidu主体Id、参考图模式。<br>参考图模式：只有一张图时候，ObjectId必须不为空（一张图、ObjectId为空，为首帧模式）。<br>Vidu主体Id：prompt可以通过 @主体Id 的方式使用。当 Category 为 Image 时有效。</p>
 * @method string getVoiceId() 获取<p>适用于 Vidu-q2 模型。<br>当全部图片携带主体 Id 时，可针对主体设置音色 Id。 当 Category 为 Image 时有效。音色列表：https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>适用于 Vidu-q2 模型。<br>当全部图片携带主体 Id 时，可针对主体设置音色 Id。 当 Category 为 Image 时有效。音色列表：https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg</p>
 * @method string getKeepOriginalSound() 获取<p>是否保留视频原声。当 Category 为 Video 时有效。取值如下：</p><li>Enabled：保留</li><li>Disabled：不保留</li>
 * @method void setKeepOriginalSound(string $KeepOriginalSound) 设置<p>是否保留视频原声。当 Category 为 Video 时有效。取值如下：</p><li>Enabled：保留</li><li>Disabled：不保留</li>
 * @method string getUsage() 获取<p>用于区分输入是首帧或参考帧。可选值：</p><ul><li>FirstFrame：首帧；</li><li>Reference：参考帧；</li></ul>
 * @method void setUsage(string $Usage) 设置<p>用于区分输入是首帧或参考帧。可选值：</p><ul><li>FirstFrame：首帧；</li><li>Reference：参考帧；</li></ul>
 */
class AigcVideoTaskInputFileInfo extends AbstractModel
{
    /**
     * @var string <p>输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li></p>
     */
    public $Type;

    /**
     * @var string <p>文件分类。取值为：</p><li>Image: 图片；</li><li>Video: 视频。</li>
     */
    public $Category;

    /**
     * @var string <p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。说明：</p><ol><li>推荐使用小于10M的图片；</li><li>图片格式的取值为：jpeg，jpg, png。</li></ol>
     */
    public $FileId;

    /**
     * @var string <p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。<br>说明：</p><ol><li>推荐使用小于10M的图片；</li><li>图片格式的取值为：jpeg，jpg, png。</li></ol>
     */
    public $Url;

    /**
     * @var string <p>参考类型，GV模型适用。<br>注意：<br>当使用 GV 模型时，可作为参考方式，可选值：asset 表示素材、style 表示风格；<br>当使用 Kling 模型以及 Category 为 Video 时，可区分参考视频类型，feature 表示特征参考视频，base 表示待编辑视频。</p>
     */
    public $ReferenceType;

    /**
     * @var string <p>用法：Vidu主体Id、参考图模式。<br>参考图模式：只有一张图时候，ObjectId必须不为空（一张图、ObjectId为空，为首帧模式）。<br>Vidu主体Id：prompt可以通过 @主体Id 的方式使用。当 Category 为 Image 时有效。</p>
     */
    public $ObjectId;

    /**
     * @var string <p>适用于 Vidu-q2 模型。<br>当全部图片携带主体 Id 时，可针对主体设置音色 Id。 当 Category 为 Image 时有效。音色列表：https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg</p>
     */
    public $VoiceId;

    /**
     * @var string <p>是否保留视频原声。当 Category 为 Video 时有效。取值如下：</p><li>Enabled：保留</li><li>Disabled：不保留</li>
     */
    public $KeepOriginalSound;

    /**
     * @var string <p>用于区分输入是首帧或参考帧。可选值：</p><ul><li>FirstFrame：首帧；</li><li>Reference：参考帧；</li></ul>
     */
    public $Usage;

    /**
     * @param string $Type <p>输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li></p>
     * @param string $Category <p>文件分类。取值为：</p><li>Image: 图片；</li><li>Video: 视频。</li>
     * @param string $FileId <p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。当 Type 取值为 File 时，本参数有效。说明：</p><ol><li>推荐使用小于10M的图片；</li><li>图片格式的取值为：jpeg，jpg, png。</li></ol>
     * @param string $Url <p>可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。<br>说明：</p><ol><li>推荐使用小于10M的图片；</li><li>图片格式的取值为：jpeg，jpg, png。</li></ol>
     * @param string $ReferenceType <p>参考类型，GV模型适用。<br>注意：<br>当使用 GV 模型时，可作为参考方式，可选值：asset 表示素材、style 表示风格；<br>当使用 Kling 模型以及 Category 为 Video 时，可区分参考视频类型，feature 表示特征参考视频，base 表示待编辑视频。</p>
     * @param string $ObjectId <p>用法：Vidu主体Id、参考图模式。<br>参考图模式：只有一张图时候，ObjectId必须不为空（一张图、ObjectId为空，为首帧模式）。<br>Vidu主体Id：prompt可以通过 @主体Id 的方式使用。当 Category 为 Image 时有效。</p>
     * @param string $VoiceId <p>适用于 Vidu-q2 模型。<br>当全部图片携带主体 Id 时，可针对主体设置音色 Id。 当 Category 为 Image 时有效。音色列表：https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg</p>
     * @param string $KeepOriginalSound <p>是否保留视频原声。当 Category 为 Video 时有效。取值如下：</p><li>Enabled：保留</li><li>Disabled：不保留</li>
     * @param string $Usage <p>用于区分输入是首帧或参考帧。可选值：</p><ul><li>FirstFrame：首帧；</li><li>Reference：参考帧；</li></ul>
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

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("KeepOriginalSound",$param) and $param["KeepOriginalSound"] !== null) {
            $this->KeepOriginalSound = $param["KeepOriginalSound"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }
    }
}
