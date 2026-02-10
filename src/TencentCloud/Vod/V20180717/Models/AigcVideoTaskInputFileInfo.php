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
 * @method string getType() 获取输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li> 
 * @method void setType(string $Type) 设置输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li> 
 * @method string getCategory() 获取文件分类。取值为：
<li>Image: 图片；</li>
<li>Video: 视频。</li>
 * @method void setCategory(string $Category) 设置文件分类。取值为：
<li>Image: 图片；</li>
<li>Video: 视频。</li>
 * @method string getFileId() 获取媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。当 Type 取值为 File 时，本参数有效。说明：
1. 推荐使用小于10M的图片；
2. 图片格式的取值为：jpeg，jpg, png。
 * @method void setFileId(string $FileId) 设置媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。当 Type 取值为 File 时，本参数有效。说明：
1. 推荐使用小于10M的图片；
2. 图片格式的取值为：jpeg，jpg, png。
 * @method string getUrl() 获取可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。
说明：
1. 推荐使用小于10M的图片；
2. 图片格式的取值为：jpeg，jpg, png。
 * @method void setUrl(string $Url) 设置可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。
说明：
1. 推荐使用小于10M的图片；
2. 图片格式的取值为：jpeg，jpg, png。
 * @method string getReferenceType() 获取参考类型，GV模型适用。
注意：
当使用 GV 模型时，可作为参考方式，可选值：asset 表示素材、style 表示风格；
当使用 Kling 模型以及 Category 为 Video 时，可区分参考视频类型，feature 表示特征参考视频，base 表示待编辑视频。
 * @method void setReferenceType(string $ReferenceType) 设置参考类型，GV模型适用。
注意：
当使用 GV 模型时，可作为参考方式，可选值：asset 表示素材、style 表示风格；
当使用 Kling 模型以及 Category 为 Video 时，可区分参考视频类型，feature 表示特征参考视频，base 表示待编辑视频。
 * @method string getObjectId() 获取主体 Id。
适用模型：Vidu-q2.
当需要对图片标识主体时，需要每个图片都带主体 Id，后续生成时可以通过@主体 Id 的方式使用。当 Category 为 Image 时有效。
 * @method void setObjectId(string $ObjectId) 设置主体 Id。
适用模型：Vidu-q2.
当需要对图片标识主体时，需要每个图片都带主体 Id，后续生成时可以通过@主体 Id 的方式使用。当 Category 为 Image 时有效。
 * @method string getVoiceId() 获取适用于 Vidu-q2 模型。
当全部图片携带主体 Id 时，可针对主体设置音色 Id。 当 Category 为 Image 时有效。音色列表：https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg
 * @method void setVoiceId(string $VoiceId) 设置适用于 Vidu-q2 模型。
当全部图片携带主体 Id 时，可针对主体设置音色 Id。 当 Category 为 Image 时有效。音色列表：https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg
 * @method string getKeepOriginalSound() 获取是否保留视频原声。当 Category 为 Video 时有效。取值如下：
<li>Enabled：保留</li>
<li>Disabled：不保留</li>
 * @method void setKeepOriginalSound(string $KeepOriginalSound) 设置是否保留视频原声。当 Category 为 Video 时有效。取值如下：
<li>Enabled：保留</li>
<li>Disabled：不保留</li>
 */
class AigcVideoTaskInputFileInfo extends AbstractModel
{
    /**
     * @var string 输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li> 
     */
    public $Type;

    /**
     * @var string 文件分类。取值为：
<li>Image: 图片；</li>
<li>Video: 视频。</li>
     */
    public $Category;

    /**
     * @var string 媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。当 Type 取值为 File 时，本参数有效。说明：
1. 推荐使用小于10M的图片；
2. 图片格式的取值为：jpeg，jpg, png。
     */
    public $FileId;

    /**
     * @var string 可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。
说明：
1. 推荐使用小于10M的图片；
2. 图片格式的取值为：jpeg，jpg, png。
     */
    public $Url;

    /**
     * @var string 参考类型，GV模型适用。
注意：
当使用 GV 模型时，可作为参考方式，可选值：asset 表示素材、style 表示风格；
当使用 Kling 模型以及 Category 为 Video 时，可区分参考视频类型，feature 表示特征参考视频，base 表示待编辑视频。
     */
    public $ReferenceType;

    /**
     * @var string 主体 Id。
适用模型：Vidu-q2.
当需要对图片标识主体时，需要每个图片都带主体 Id，后续生成时可以通过@主体 Id 的方式使用。当 Category 为 Image 时有效。
     */
    public $ObjectId;

    /**
     * @var string 适用于 Vidu-q2 模型。
当全部图片携带主体 Id 时，可针对主体设置音色 Id。 当 Category 为 Image 时有效。音色列表：https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg
     */
    public $VoiceId;

    /**
     * @var string 是否保留视频原声。当 Category 为 Video 时有效。取值如下：
<li>Enabled：保留</li>
<li>Disabled：不保留</li>
     */
    public $KeepOriginalSound;

    /**
     * @param string $Type 输入的视频文件类型。取值有： <li>File：点播媒体文件；</li> <li>Url：可访问的 Url；</li> 
     * @param string $Category 文件分类。取值为：
<li>Image: 图片；</li>
<li>Video: 视频。</li>
     * @param string $FileId 媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。当 Type 取值为 File 时，本参数有效。说明：
1. 推荐使用小于10M的图片；
2. 图片格式的取值为：jpeg，jpg, png。
     * @param string $Url 可访问的文件 URL。当 Type 取值为 Url 时，本参数有效。
说明：
1. 推荐使用小于10M的图片；
2. 图片格式的取值为：jpeg，jpg, png。
     * @param string $ReferenceType 参考类型，GV模型适用。
注意：
当使用 GV 模型时，可作为参考方式，可选值：asset 表示素材、style 表示风格；
当使用 Kling 模型以及 Category 为 Video 时，可区分参考视频类型，feature 表示特征参考视频，base 表示待编辑视频。
     * @param string $ObjectId 主体 Id。
适用模型：Vidu-q2.
当需要对图片标识主体时，需要每个图片都带主体 Id，后续生成时可以通过@主体 Id 的方式使用。当 Category 为 Image 时有效。
     * @param string $VoiceId 适用于 Vidu-q2 模型。
当全部图片携带主体 Id 时，可针对主体设置音色 Id。 当 Category 为 Image 时有效。音色列表：https://shengshu.feishu.cn/sheets/EgFvs6DShhiEBStmjzccr5gonOg
     * @param string $KeepOriginalSound 是否保留视频原声。当 Category 为 Video 时有效。取值如下：
<li>Enabled：保留</li>
<li>Disabled：不保留</li>
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
    }
}
