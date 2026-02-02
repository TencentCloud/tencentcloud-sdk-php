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
 * CreateAigcVideoTask请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getModelName() 获取模型名称。取值：<li>Hailuo：海螺；</li><li>Kling：可灵；</li><li> Jimeng：即梦；</li><li>Vidu；</li><li>Hunyuan：混元；</li><li>Mingmou：明眸；</li>
 * @method void setModelName(string $ModelName) 设置模型名称。取值：<li>Hailuo：海螺；</li><li>Kling：可灵；</li><li> Jimeng：即梦；</li><li>Vidu；</li><li>Hunyuan：混元；</li><li>Mingmou：明眸；</li>
 * @method string getModelVersion() 获取模型版本。取值：<li>当 ModelName 是 Hailuo，可选值为 02、2.3、2.3-fast；</li><li>当 ModelName 是 Kling，可选值为 1.6、2.0、2.1、2.5、O1；</li><li>当 ModelName 是 Jimeng，可选值为 3.0pro；</li><li>当 ModelName 是 Vidu，可选值为 q2、q2-pro、q2-turbo；</li><li>当 ModelName 是 GV，可选值为 3.1、3.1-fast；</li><li>当 ModelName 是 OS，可选值为 2.0；</li><li>当 ModelName 是 Hunyuan，可选值为 1.5；</li><li>当 ModelName 是 Mingmou，可选值为 1.0；</li>
 * @method void setModelVersion(string $ModelVersion) 设置模型版本。取值：<li>当 ModelName 是 Hailuo，可选值为 02、2.3、2.3-fast；</li><li>当 ModelName 是 Kling，可选值为 1.6、2.0、2.1、2.5、O1；</li><li>当 ModelName 是 Jimeng，可选值为 3.0pro；</li><li>当 ModelName 是 Vidu，可选值为 q2、q2-pro、q2-turbo；</li><li>当 ModelName 是 GV，可选值为 3.1、3.1-fast；</li><li>当 ModelName 是 OS，可选值为 2.0；</li><li>当 ModelName 是 Hunyuan，可选值为 1.5；</li><li>当 ModelName 是 Mingmou，可选值为 1.0；</li>
 * @method array getFileInfos() 获取最多包含三张素材资源文件的列表，用于描述模型在生成视频时要使用的资源文件。

首尾帧视频生成：用 FileInfos 第一张表示首帧（此时 FileInfos 最多包含一张图片），LastFrameFileId 或者 LastFrameUrl 表示尾帧。

支持多图输入的模型：
1. GV，使用多图输入时，不可使用 LastFrameFileId 和 LastFrameUrl。
2. Vidu，支持多图参考生视频。q2 模型1-7张图片，可通过 FileInfos 里面的 ObjectId 作为主体 id 来传入。

注意：
1. 图片大小不超过10M。
2. 支持的图片格式：jpeg、png。
 * @method void setFileInfos(array $FileInfos) 设置最多包含三张素材资源文件的列表，用于描述模型在生成视频时要使用的资源文件。

首尾帧视频生成：用 FileInfos 第一张表示首帧（此时 FileInfos 最多包含一张图片），LastFrameFileId 或者 LastFrameUrl 表示尾帧。

支持多图输入的模型：
1. GV，使用多图输入时，不可使用 LastFrameFileId 和 LastFrameUrl。
2. Vidu，支持多图参考生视频。q2 模型1-7张图片，可通过 FileInfos 里面的 ObjectId 作为主体 id 来传入。

注意：
1. 图片大小不超过10M。
2. 支持的图片格式：jpeg、png。
 * @method string getLastFrameFileId() 获取用于作为尾帧画面来生成视频的媒体文件 ID。该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。说明：
1. 只支持模型 GV 、Kling、Vidu，其他模型暂不支持。当 ModelName 为 GV 时，如果指定该参数，则需同时指定 FileInfos 作为待生成视频的首帧。当 ModelName 为 Kling 、ModelVersion 为 2.1 并且指定输出分辨率 Resolution 为 1080P 时，才能指定该参数。当 ModelName 为 Vidu、ModelVersion 为 q2-pro、q2-turbo 时，才能指定该参数。
2. 图片大小需小于5M。
3. 图片格式的取值为：jpeg，jpg, png, webp。
 * @method void setLastFrameFileId(string $LastFrameFileId) 设置用于作为尾帧画面来生成视频的媒体文件 ID。该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。说明：
1. 只支持模型 GV 、Kling、Vidu，其他模型暂不支持。当 ModelName 为 GV 时，如果指定该参数，则需同时指定 FileInfos 作为待生成视频的首帧。当 ModelName 为 Kling 、ModelVersion 为 2.1 并且指定输出分辨率 Resolution 为 1080P 时，才能指定该参数。当 ModelName 为 Vidu、ModelVersion 为 q2-pro、q2-turbo 时，才能指定该参数。
2. 图片大小需小于5M。
3. 图片格式的取值为：jpeg，jpg, png, webp。
 * @method string getLastFrameUrl() 获取用于作为尾帧画面来生成视频的媒体文件 URL。说明：
1. 只支持模型 GV 、Kling、Vidu，其他模型暂不支持。当 ModelName 为 GV 时，如果指定该参数，则需同时指定 FileInfos 作为待生成视频的首帧。当 ModelName 为 Kling 、ModelVersion 为 2.1 并且指定输出分辨率 Resolution 为 1080P 时，才能指定该参数。当 ModelName 为 Vidu、ModelVersion 为 q2-pro、q2-turbo 时，才能指定该参数。
2. 图片大小需小于5M。
3. 3. 图片格式的取值为：jpeg，jpg, png, webp。
 * @method void setLastFrameUrl(string $LastFrameUrl) 设置用于作为尾帧画面来生成视频的媒体文件 URL。说明：
1. 只支持模型 GV 、Kling、Vidu，其他模型暂不支持。当 ModelName 为 GV 时，如果指定该参数，则需同时指定 FileInfos 作为待生成视频的首帧。当 ModelName 为 Kling 、ModelVersion 为 2.1 并且指定输出分辨率 Resolution 为 1080P 时，才能指定该参数。当 ModelName 为 Vidu、ModelVersion 为 q2-pro、q2-turbo 时，才能指定该参数。
2. 图片大小需小于5M。
3. 3. 图片格式的取值为：jpeg，jpg, png, webp。
 * @method string getPrompt() 获取生成视频的提示词。当 FileInfos 为空时，此参数必填。
示例值：move the picture
 * @method void setPrompt(string $Prompt) 设置生成视频的提示词。当 FileInfos 为空时，此参数必填。
示例值：move the picture
 * @method string getNegativePrompt() 获取要阻止模型生成视频的提示词。
 * @method void setNegativePrompt(string $NegativePrompt) 设置要阻止模型生成视频的提示词。
 * @method string getEnhancePrompt() 获取是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
 * @method void setEnhancePrompt(string $EnhancePrompt) 设置是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
 * @method AigcVideoOutputConfig getOutputConfig() 获取生视频任务的输出媒体文件配置。
 * @method void setOutputConfig(AigcVideoOutputConfig $OutputConfig) 设置生视频任务的输出媒体文件配置。
 * @method string getInputRegion() 获取输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。
 * @method void setInputRegion(string $InputRegion) 设置输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。
 * @method string getSceneType() 获取场景类型。取值如下：
<li>当 ModelName 为 Kling 时：
    motion_control 表示动作控制；
    avatar_i2v 表示数字人；
    lip_sync 表示对口型；</li>
<li>其他 ModelName 暂不支持。</li>
 * @method void setSceneType(string $SceneType) 设置场景类型。取值如下：
<li>当 ModelName 为 Kling 时：
    motion_control 表示动作控制；
    avatar_i2v 表示数字人；
    lip_sync 表示对口型；</li>
<li>其他 ModelName 暂不支持。</li>
 * @method string getSessionId() 获取用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。
 * @method integer getTasksPriority() 获取任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method string getExtInfo() 获取保留字段，特殊用途时使用。
 * @method void setExtInfo(string $ExtInfo) 设置保留字段，特殊用途时使用。
 */
class CreateAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 模型名称。取值：<li>Hailuo：海螺；</li><li>Kling：可灵；</li><li> Jimeng：即梦；</li><li>Vidu；</li><li>Hunyuan：混元；</li><li>Mingmou：明眸；</li>
     */
    public $ModelName;

    /**
     * @var string 模型版本。取值：<li>当 ModelName 是 Hailuo，可选值为 02、2.3、2.3-fast；</li><li>当 ModelName 是 Kling，可选值为 1.6、2.0、2.1、2.5、O1；</li><li>当 ModelName 是 Jimeng，可选值为 3.0pro；</li><li>当 ModelName 是 Vidu，可选值为 q2、q2-pro、q2-turbo；</li><li>当 ModelName 是 GV，可选值为 3.1、3.1-fast；</li><li>当 ModelName 是 OS，可选值为 2.0；</li><li>当 ModelName 是 Hunyuan，可选值为 1.5；</li><li>当 ModelName 是 Mingmou，可选值为 1.0；</li>
     */
    public $ModelVersion;

    /**
     * @var array 最多包含三张素材资源文件的列表，用于描述模型在生成视频时要使用的资源文件。

首尾帧视频生成：用 FileInfos 第一张表示首帧（此时 FileInfos 最多包含一张图片），LastFrameFileId 或者 LastFrameUrl 表示尾帧。

支持多图输入的模型：
1. GV，使用多图输入时，不可使用 LastFrameFileId 和 LastFrameUrl。
2. Vidu，支持多图参考生视频。q2 模型1-7张图片，可通过 FileInfos 里面的 ObjectId 作为主体 id 来传入。

注意：
1. 图片大小不超过10M。
2. 支持的图片格式：jpeg、png。
     */
    public $FileInfos;

    /**
     * @var string 用于作为尾帧画面来生成视频的媒体文件 ID。该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。说明：
1. 只支持模型 GV 、Kling、Vidu，其他模型暂不支持。当 ModelName 为 GV 时，如果指定该参数，则需同时指定 FileInfos 作为待生成视频的首帧。当 ModelName 为 Kling 、ModelVersion 为 2.1 并且指定输出分辨率 Resolution 为 1080P 时，才能指定该参数。当 ModelName 为 Vidu、ModelVersion 为 q2-pro、q2-turbo 时，才能指定该参数。
2. 图片大小需小于5M。
3. 图片格式的取值为：jpeg，jpg, png, webp。
     */
    public $LastFrameFileId;

    /**
     * @var string 用于作为尾帧画面来生成视频的媒体文件 URL。说明：
1. 只支持模型 GV 、Kling、Vidu，其他模型暂不支持。当 ModelName 为 GV 时，如果指定该参数，则需同时指定 FileInfos 作为待生成视频的首帧。当 ModelName 为 Kling 、ModelVersion 为 2.1 并且指定输出分辨率 Resolution 为 1080P 时，才能指定该参数。当 ModelName 为 Vidu、ModelVersion 为 q2-pro、q2-turbo 时，才能指定该参数。
2. 图片大小需小于5M。
3. 3. 图片格式的取值为：jpeg，jpg, png, webp。
     */
    public $LastFrameUrl;

    /**
     * @var string 生成视频的提示词。当 FileInfos 为空时，此参数必填。
示例值：move the picture
     */
    public $Prompt;

    /**
     * @var string 要阻止模型生成视频的提示词。
     */
    public $NegativePrompt;

    /**
     * @var string 是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
     */
    public $EnhancePrompt;

    /**
     * @var AigcVideoOutputConfig 生视频任务的输出媒体文件配置。
     */
    public $OutputConfig;

    /**
     * @var string 输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。
     */
    public $InputRegion;

    /**
     * @var string 场景类型。取值如下：
<li>当 ModelName 为 Kling 时：
    motion_control 表示动作控制；
    avatar_i2v 表示数字人；
    lip_sync 表示对口型；</li>
<li>其他 ModelName 暂不支持。</li>
     */
    public $SceneType;

    /**
     * @var string 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @var integer 任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     */
    public $TasksPriority;

    /**
     * @var string 保留字段，特殊用途时使用。
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $ModelName 模型名称。取值：<li>Hailuo：海螺；</li><li>Kling：可灵；</li><li> Jimeng：即梦；</li><li>Vidu；</li><li>Hunyuan：混元；</li><li>Mingmou：明眸；</li>
     * @param string $ModelVersion 模型版本。取值：<li>当 ModelName 是 Hailuo，可选值为 02、2.3、2.3-fast；</li><li>当 ModelName 是 Kling，可选值为 1.6、2.0、2.1、2.5、O1；</li><li>当 ModelName 是 Jimeng，可选值为 3.0pro；</li><li>当 ModelName 是 Vidu，可选值为 q2、q2-pro、q2-turbo；</li><li>当 ModelName 是 GV，可选值为 3.1、3.1-fast；</li><li>当 ModelName 是 OS，可选值为 2.0；</li><li>当 ModelName 是 Hunyuan，可选值为 1.5；</li><li>当 ModelName 是 Mingmou，可选值为 1.0；</li>
     * @param array $FileInfos 最多包含三张素材资源文件的列表，用于描述模型在生成视频时要使用的资源文件。

首尾帧视频生成：用 FileInfos 第一张表示首帧（此时 FileInfos 最多包含一张图片），LastFrameFileId 或者 LastFrameUrl 表示尾帧。

支持多图输入的模型：
1. GV，使用多图输入时，不可使用 LastFrameFileId 和 LastFrameUrl。
2. Vidu，支持多图参考生视频。q2 模型1-7张图片，可通过 FileInfos 里面的 ObjectId 作为主体 id 来传入。

注意：
1. 图片大小不超过10M。
2. 支持的图片格式：jpeg、png。
     * @param string $LastFrameFileId 用于作为尾帧画面来生成视频的媒体文件 ID。该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。说明：
1. 只支持模型 GV 、Kling、Vidu，其他模型暂不支持。当 ModelName 为 GV 时，如果指定该参数，则需同时指定 FileInfos 作为待生成视频的首帧。当 ModelName 为 Kling 、ModelVersion 为 2.1 并且指定输出分辨率 Resolution 为 1080P 时，才能指定该参数。当 ModelName 为 Vidu、ModelVersion 为 q2-pro、q2-turbo 时，才能指定该参数。
2. 图片大小需小于5M。
3. 图片格式的取值为：jpeg，jpg, png, webp。
     * @param string $LastFrameUrl 用于作为尾帧画面来生成视频的媒体文件 URL。说明：
1. 只支持模型 GV 、Kling、Vidu，其他模型暂不支持。当 ModelName 为 GV 时，如果指定该参数，则需同时指定 FileInfos 作为待生成视频的首帧。当 ModelName 为 Kling 、ModelVersion 为 2.1 并且指定输出分辨率 Resolution 为 1080P 时，才能指定该参数。当 ModelName 为 Vidu、ModelVersion 为 q2-pro、q2-turbo 时，才能指定该参数。
2. 图片大小需小于5M。
3. 3. 图片格式的取值为：jpeg，jpg, png, webp。
     * @param string $Prompt 生成视频的提示词。当 FileInfos 为空时，此参数必填。
示例值：move the picture
     * @param string $NegativePrompt 要阻止模型生成视频的提示词。
     * @param string $EnhancePrompt 是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
     * @param AigcVideoOutputConfig $OutputConfig 生视频任务的输出媒体文件配置。
     * @param string $InputRegion 输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。
     * @param string $SceneType 场景类型。取值如下：
<li>当 ModelName 为 Kling 时：
    motion_control 表示动作控制；
    avatar_i2v 表示数字人；
    lip_sync 表示对口型；</li>
<li>其他 ModelName 暂不支持。</li>
     * @param string $SessionId 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。
     * @param integer $TasksPriority 任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     * @param string $ExtInfo 保留字段，特殊用途时使用。
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new AigcVideoTaskInputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("LastFrameFileId",$param) and $param["LastFrameFileId"] !== null) {
            $this->LastFrameFileId = $param["LastFrameFileId"];
        }

        if (array_key_exists("LastFrameUrl",$param) and $param["LastFrameUrl"] !== null) {
            $this->LastFrameUrl = $param["LastFrameUrl"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("EnhancePrompt",$param) and $param["EnhancePrompt"] !== null) {
            $this->EnhancePrompt = $param["EnhancePrompt"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcVideoOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("InputRegion",$param) and $param["InputRegion"] !== null) {
            $this->InputRegion = $param["InputRegion"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
