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
 * CreateSceneAigcImageTask请求参数结构体
 *
 * @method integer getSubAppId() 获取**点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。**
 * @method void setSubAppId(integer $SubAppId) 设置**点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。**
 * @method AigcImageSceneInfo getSceneInfo() 获取场景化生图参数配置。
 * @method void setSceneInfo(AigcImageSceneInfo $SceneInfo) 设置场景化生图参数配置。
 * @method array getFileInfos() 获取输入图片列表，支持的图片格式：jpg、jpeg、png、webp。不同的场景需要不同的输入数据：

- AI换衣场景：只能输入 1 张**模特**图片。
- AI生商品图场景：需输入 1～10 张**同一产品**的不同角度的图片
 * @method void setFileInfos(array $FileInfos) 设置输入图片列表，支持的图片格式：jpg、jpeg、png、webp。不同的场景需要不同的输入数据：

- AI换衣场景：只能输入 1 张**模特**图片。
- AI生商品图场景：需输入 1～10 张**同一产品**的不同角度的图片
 * @method SceneAigcImageOutputConfig getOutputConfig() 获取场景化生图任务的输出媒体文件配置。
 * @method void setOutputConfig(SceneAigcImageOutputConfig $OutputConfig) 设置场景化生图任务的输出媒体文件配置。
 * @method string getSessionId() 获取用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。
 * @method integer getTasksPriority() 获取任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method string getExtInfo() 获取保留字段，特殊用途时使用。
 * @method void setExtInfo(string $ExtInfo) 设置保留字段，特殊用途时使用。
 */
class CreateSceneAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var integer **点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。**
     */
    public $SubAppId;

    /**
     * @var AigcImageSceneInfo 场景化生图参数配置。
     */
    public $SceneInfo;

    /**
     * @var array 输入图片列表，支持的图片格式：jpg、jpeg、png、webp。不同的场景需要不同的输入数据：

- AI换衣场景：只能输入 1 张**模特**图片。
- AI生商品图场景：需输入 1～10 张**同一产品**的不同角度的图片
     */
    public $FileInfos;

    /**
     * @var SceneAigcImageOutputConfig 场景化生图任务的输出媒体文件配置。
     */
    public $OutputConfig;

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
     * @param integer $SubAppId **点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。**
     * @param AigcImageSceneInfo $SceneInfo 场景化生图参数配置。
     * @param array $FileInfos 输入图片列表，支持的图片格式：jpg、jpeg、png、webp。不同的场景需要不同的输入数据：

- AI换衣场景：只能输入 1 张**模特**图片。
- AI生商品图场景：需输入 1～10 张**同一产品**的不同角度的图片
     * @param SceneAigcImageOutputConfig $OutputConfig 场景化生图任务的输出媒体文件配置。
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

        if (array_key_exists("SceneInfo",$param) and $param["SceneInfo"] !== null) {
            $this->SceneInfo = new AigcImageSceneInfo();
            $this->SceneInfo->deserialize($param["SceneInfo"]);
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new SceneAigcImageTaskInputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new SceneAigcImageOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
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
