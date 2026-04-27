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
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getModelName() 获取<p>模型名称。取值：<br>Kling：可灵；<br>Vidu；<br>Hailuo：海螺；<br>Jimeng：即梦；<br>Hunyuan：混元；<br>Mingmou：明眸；<br>GV；<br>OS；<br>PixVerse;</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称。取值：<br>Kling：可灵；<br>Vidu；<br>Hailuo：海螺；<br>Jimeng：即梦；<br>Hunyuan：混元；<br>Mingmou：明眸；<br>GV；<br>OS；<br>PixVerse;</p>
 * @method string getModelVersion() 获取<p>模型版本。取值：<br>当 ModelName 是 Hailuo，可选值为 02、2.3、2.3-fast；<br>当 ModelName 是 Kling，可选值为 1.6、2.0、2.1、2.5、2.6、O1、3.0、3.0-Omni；<br>当 ModelName 是 Jimeng，可选值为 3.0pro；<br>当 ModelName 是 Vidu，可选值为 q2、q2-pro、q2-turbo、q3、q3-pro、q3-turbo；<br>当 ModelName 是 GV，可选值为 3.1、3.1-fast；<br>当 ModelName 是 OS，可选值为 2.0；<br>当 ModelName 是 Hunyuan，可选值为 1.5；<br>当 ModelName 是 Mingmou，可选值为 1.0；<br>当 ModelName 是 PixVerse，可选值为 v5.6、v6、c1；</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>模型版本。取值：<br>当 ModelName 是 Hailuo，可选值为 02、2.3、2.3-fast；<br>当 ModelName 是 Kling，可选值为 1.6、2.0、2.1、2.5、2.6、O1、3.0、3.0-Omni；<br>当 ModelName 是 Jimeng，可选值为 3.0pro；<br>当 ModelName 是 Vidu，可选值为 q2、q2-pro、q2-turbo、q3、q3-pro、q3-turbo；<br>当 ModelName 是 GV，可选值为 3.1、3.1-fast；<br>当 ModelName 是 OS，可选值为 2.0；<br>当 ModelName 是 Hunyuan，可选值为 1.5；<br>当 ModelName 是 Mingmou，可选值为 1.0；<br>当 ModelName 是 PixVerse，可选值为 v5.6、v6、c1；</p>
 * @method array getFileInfos() 获取<p>用于描述模型在生成视频时要使用的资源文件，分为<strong>首尾帧模式、参考图、视频参考、视频编辑等模式</strong>。</p><p><strong>首尾帧视频生成</strong>：首帧图片只支持<strong>一张</strong>图片，<strong>图片的Usage字段为FirstFrame</strong>，LastFrameFileId 或者 LastFrameUrl 表示尾帧。可以单独传首帧，不能单独传尾帧。<strong>首尾帧生成会参考图片比例</strong>。<br><strong>参考图片生成</strong>：可传入单张图片或者多张，<strong>图片的Usage字段为Reference</strong>；参考图片，可以调整生成视频的宽高比例。<br><strong>视频编辑、视频参考</strong>：Vidu、Kling可输入视频作为参考或者进行编辑。传入视频的同时也可以传入图片，<strong>图片的Usage字段为Reference</strong>。</p><p>注意：</p><ol><li>图片大小不超过10M。</li><li>支持的图片格式：jpeg、jpg、png。x0b</li><li>关于模型某个版本是否支持参考图、首尾帧、视频编辑等功能，可向我们索取文档或者参考原厂文档信息。</li></ol>
 * @method void setFileInfos(array $FileInfos) 设置<p>用于描述模型在生成视频时要使用的资源文件，分为<strong>首尾帧模式、参考图、视频参考、视频编辑等模式</strong>。</p><p><strong>首尾帧视频生成</strong>：首帧图片只支持<strong>一张</strong>图片，<strong>图片的Usage字段为FirstFrame</strong>，LastFrameFileId 或者 LastFrameUrl 表示尾帧。可以单独传首帧，不能单独传尾帧。<strong>首尾帧生成会参考图片比例</strong>。<br><strong>参考图片生成</strong>：可传入单张图片或者多张，<strong>图片的Usage字段为Reference</strong>；参考图片，可以调整生成视频的宽高比例。<br><strong>视频编辑、视频参考</strong>：Vidu、Kling可输入视频作为参考或者进行编辑。传入视频的同时也可以传入图片，<strong>图片的Usage字段为Reference</strong>。</p><p>注意：</p><ol><li>图片大小不超过10M。</li><li>支持的图片格式：jpeg、jpg、png。x0b</li><li>关于模型某个版本是否支持参考图、首尾帧、视频编辑等功能，可向我们索取文档或者参考原厂文档信息。</li></ol>
 * @method array getSubjectInfos() 获取<p>主体输入信息。</p>
 * @method void setSubjectInfos(array $SubjectInfos) 设置<p>主体输入信息。</p>
 * @method string getLastFrameFileId() 获取<p>用于作为尾帧画面来生成视频的媒体文件 ID。该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p><ol><li>指定该参数时，须同时通过 FileInfos 指定首帧画面。</li><li>图片大小需小于10M。</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
 * @method void setLastFrameFileId(string $LastFrameFileId) 设置<p>用于作为尾帧画面来生成视频的媒体文件 ID。该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p><ol><li>指定该参数时，须同时通过 FileInfos 指定首帧画面。</li><li>图片大小需小于10M。</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
 * @method string getLastFrameUrl() 获取<p>用于作为尾帧画面来生成视频的媒体文件 URL。说明：</p><ol><li>指定该参数时，须同时通过 FileInfos 指定首帧画面。</li><li>图片大小需小于5M。</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
 * @method void setLastFrameUrl(string $LastFrameUrl) 设置<p>用于作为尾帧画面来生成视频的媒体文件 URL。说明：</p><ol><li>指定该参数时，须同时通过 FileInfos 指定首帧画面。</li><li>图片大小需小于5M。</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
 * @method string getPrompt() 获取<p>生成视频的提示词。<br>当未传入参考文件，没有使用场景类型，ExtInfo不为空，Prompt 为必填。</p>
 * @method void setPrompt(string $Prompt) 设置<p>生成视频的提示词。<br>当未传入参考文件，没有使用场景类型，ExtInfo不为空，Prompt 为必填。</p>
 * @method string getNegativePrompt() 获取<p>要阻止模型生成视频的提示词。</p>
 * @method void setNegativePrompt(string $NegativePrompt) 设置<p>要阻止模型生成视频的提示词。</p>
 * @method string getEnhancePrompt() 获取<p>是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method void setEnhancePrompt(string $EnhancePrompt) 设置<p>是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method AigcVideoOutputConfig getOutputConfig() 获取<p>生视频任务的输出媒体文件配置。</p>
 * @method void setOutputConfig(AigcVideoOutputConfig $OutputConfig) 设置<p>生视频任务的输出媒体文件配置。</p>
 * @method string getInputRegion() 获取<p>输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。</p>
 * @method void setInputRegion(string $InputRegion) 设置<p>输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。</p>
 * @method string getSceneType() 获取<p>场景类型。取值如下：</p><li>当 ModelName 为 Kling 时：    motion_control 表示动作控制；    avatar_i2v 表示数字人；    lip_sync 表示对口型；</li><li>当 ModelName 为 Vidu 时：    template_effect 表示特效模板；</li><li>其他 ModelName 暂不支持。</li>
 * @method void setSceneType(string $SceneType) 设置<p>场景类型。取值如下：</p><li>当 ModelName 为 Kling 时：    motion_control 表示动作控制；    avatar_i2v 表示数字人；    lip_sync 表示对口型；</li><li>当 ModelName 为 Vidu 时：    template_effect 表示特效模板；</li><li>其他 ModelName 暂不支持。</li>
 * @method integer getSeed() 获取<p>模型随机种子。</p>
 * @method void setSeed(integer $Seed) 设置<p>模型随机种子。</p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method integer getTasksPriority() 获取<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method string getExtInfo() 获取<p>保留字段，特殊用途时使用。<br>可用于传入模型特殊参数、分镜prompt等</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>保留字段，特殊用途时使用。<br>可用于传入模型特殊参数、分镜prompt等</p>
 */
class CreateAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>模型名称。取值：<br>Kling：可灵；<br>Vidu；<br>Hailuo：海螺；<br>Jimeng：即梦；<br>Hunyuan：混元；<br>Mingmou：明眸；<br>GV；<br>OS；<br>PixVerse;</p>
     */
    public $ModelName;

    /**
     * @var string <p>模型版本。取值：<br>当 ModelName 是 Hailuo，可选值为 02、2.3、2.3-fast；<br>当 ModelName 是 Kling，可选值为 1.6、2.0、2.1、2.5、2.6、O1、3.0、3.0-Omni；<br>当 ModelName 是 Jimeng，可选值为 3.0pro；<br>当 ModelName 是 Vidu，可选值为 q2、q2-pro、q2-turbo、q3、q3-pro、q3-turbo；<br>当 ModelName 是 GV，可选值为 3.1、3.1-fast；<br>当 ModelName 是 OS，可选值为 2.0；<br>当 ModelName 是 Hunyuan，可选值为 1.5；<br>当 ModelName 是 Mingmou，可选值为 1.0；<br>当 ModelName 是 PixVerse，可选值为 v5.6、v6、c1；</p>
     */
    public $ModelVersion;

    /**
     * @var array <p>用于描述模型在生成视频时要使用的资源文件，分为<strong>首尾帧模式、参考图、视频参考、视频编辑等模式</strong>。</p><p><strong>首尾帧视频生成</strong>：首帧图片只支持<strong>一张</strong>图片，<strong>图片的Usage字段为FirstFrame</strong>，LastFrameFileId 或者 LastFrameUrl 表示尾帧。可以单独传首帧，不能单独传尾帧。<strong>首尾帧生成会参考图片比例</strong>。<br><strong>参考图片生成</strong>：可传入单张图片或者多张，<strong>图片的Usage字段为Reference</strong>；参考图片，可以调整生成视频的宽高比例。<br><strong>视频编辑、视频参考</strong>：Vidu、Kling可输入视频作为参考或者进行编辑。传入视频的同时也可以传入图片，<strong>图片的Usage字段为Reference</strong>。</p><p>注意：</p><ol><li>图片大小不超过10M。</li><li>支持的图片格式：jpeg、jpg、png。x0b</li><li>关于模型某个版本是否支持参考图、首尾帧、视频编辑等功能，可向我们索取文档或者参考原厂文档信息。</li></ol>
     */
    public $FileInfos;

    /**
     * @var array <p>主体输入信息。</p>
     */
    public $SubjectInfos;

    /**
     * @var string <p>用于作为尾帧画面来生成视频的媒体文件 ID。该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p><ol><li>指定该参数时，须同时通过 FileInfos 指定首帧画面。</li><li>图片大小需小于10M。</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
     */
    public $LastFrameFileId;

    /**
     * @var string <p>用于作为尾帧画面来生成视频的媒体文件 URL。说明：</p><ol><li>指定该参数时，须同时通过 FileInfos 指定首帧画面。</li><li>图片大小需小于5M。</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
     */
    public $LastFrameUrl;

    /**
     * @var string <p>生成视频的提示词。<br>当未传入参考文件，没有使用场景类型，ExtInfo不为空，Prompt 为必填。</p>
     */
    public $Prompt;

    /**
     * @var string <p>要阻止模型生成视频的提示词。</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var AigcVideoOutputConfig <p>生视频任务的输出媒体文件配置。</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。</p>
     */
    public $InputRegion;

    /**
     * @var string <p>场景类型。取值如下：</p><li>当 ModelName 为 Kling 时：    motion_control 表示动作控制；    avatar_i2v 表示数字人；    lip_sync 表示对口型；</li><li>当 ModelName 为 Vidu 时：    template_effect 表示特效模板；</li><li>其他 ModelName 暂不支持。</li>
     */
    public $SceneType;

    /**
     * @var integer <p>模型随机种子。</p>
     */
    public $Seed;

    /**
     * @var string <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>保留字段，特殊用途时使用。<br>可用于传入模型特殊参数、分镜prompt等</p>
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $ModelName <p>模型名称。取值：<br>Kling：可灵；<br>Vidu；<br>Hailuo：海螺；<br>Jimeng：即梦；<br>Hunyuan：混元；<br>Mingmou：明眸；<br>GV；<br>OS；<br>PixVerse;</p>
     * @param string $ModelVersion <p>模型版本。取值：<br>当 ModelName 是 Hailuo，可选值为 02、2.3、2.3-fast；<br>当 ModelName 是 Kling，可选值为 1.6、2.0、2.1、2.5、2.6、O1、3.0、3.0-Omni；<br>当 ModelName 是 Jimeng，可选值为 3.0pro；<br>当 ModelName 是 Vidu，可选值为 q2、q2-pro、q2-turbo、q3、q3-pro、q3-turbo；<br>当 ModelName 是 GV，可选值为 3.1、3.1-fast；<br>当 ModelName 是 OS，可选值为 2.0；<br>当 ModelName 是 Hunyuan，可选值为 1.5；<br>当 ModelName 是 Mingmou，可选值为 1.0；<br>当 ModelName 是 PixVerse，可选值为 v5.6、v6、c1；</p>
     * @param array $FileInfos <p>用于描述模型在生成视频时要使用的资源文件，分为<strong>首尾帧模式、参考图、视频参考、视频编辑等模式</strong>。</p><p><strong>首尾帧视频生成</strong>：首帧图片只支持<strong>一张</strong>图片，<strong>图片的Usage字段为FirstFrame</strong>，LastFrameFileId 或者 LastFrameUrl 表示尾帧。可以单独传首帧，不能单独传尾帧。<strong>首尾帧生成会参考图片比例</strong>。<br><strong>参考图片生成</strong>：可传入单张图片或者多张，<strong>图片的Usage字段为Reference</strong>；参考图片，可以调整生成视频的宽高比例。<br><strong>视频编辑、视频参考</strong>：Vidu、Kling可输入视频作为参考或者进行编辑。传入视频的同时也可以传入图片，<strong>图片的Usage字段为Reference</strong>。</p><p>注意：</p><ol><li>图片大小不超过10M。</li><li>支持的图片格式：jpeg、jpg、png。x0b</li><li>关于模型某个版本是否支持参考图、首尾帧、视频编辑等功能，可向我们索取文档或者参考原厂文档信息。</li></ol>
     * @param array $SubjectInfos <p>主体输入信息。</p>
     * @param string $LastFrameFileId <p>用于作为尾帧画面来生成视频的媒体文件 ID。该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p><ol><li>指定该参数时，须同时通过 FileInfos 指定首帧画面。</li><li>图片大小需小于10M。</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
     * @param string $LastFrameUrl <p>用于作为尾帧画面来生成视频的媒体文件 URL。说明：</p><ol><li>指定该参数时，须同时通过 FileInfos 指定首帧画面。</li><li>图片大小需小于5M。</li><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol>
     * @param string $Prompt <p>生成视频的提示词。<br>当未传入参考文件，没有使用场景类型，ExtInfo不为空，Prompt 为必填。</p>
     * @param string $NegativePrompt <p>要阻止模型生成视频的提示词。</p>
     * @param string $EnhancePrompt <p>是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     * @param AigcVideoOutputConfig $OutputConfig <p>生视频任务的输出媒体文件配置。</p>
     * @param string $InputRegion <p>输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。</p>
     * @param string $SceneType <p>场景类型。取值如下：</p><li>当 ModelName 为 Kling 时：    motion_control 表示动作控制；    avatar_i2v 表示数字人；    lip_sync 表示对口型；</li><li>当 ModelName 为 Vidu 时：    template_effect 表示特效模板；</li><li>其他 ModelName 暂不支持。</li>
     * @param integer $Seed <p>模型随机种子。</p>
     * @param string $SessionId <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
     * @param integer $TasksPriority <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     * @param string $ExtInfo <p>保留字段，特殊用途时使用。<br>可用于传入模型特殊参数、分镜prompt等</p>
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

        if (array_key_exists("SubjectInfos",$param) and $param["SubjectInfos"] !== null) {
            $this->SubjectInfos = [];
            foreach ($param["SubjectInfos"] as $key => $value){
                $obj = new AigcVideoTaskInputSubjectInfo();
                $obj->deserialize($value);
                array_push($this->SubjectInfos, $obj);
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

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
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
