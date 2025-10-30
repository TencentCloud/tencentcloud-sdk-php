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
 * ProcessMediaByMPS请求参数结构体
 *
 * @method string getFileId() 获取媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。
 * @method void setFileId(string $FileId) 设置媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method string getMPSProcessMediaParams() 获取该参数用于透传至媒体处理服务（MPS），以便从云点播侧发起 MPS 视频处理任务。
视频处理参数详情请参考：[MPS 发起媒体处理](https://cloud.tencent.com/document/api/862/37578)。
填写说明：
1. 目前仅需要配置 MPS “发起媒体处理”接口中任务配置相关的参数，如 AiAnalysisTask 与 MediaProcessTask，其他参数无需填写。若包含其它参数，系统将自动忽略；
2. 当前仅支持通过此方式发起智能擦除及音视频增强任务。若配置了其他任务类型的相关参数，系统将自动忽略这些参数；
3. 音视频增强任务目前不支持使用预置模板发起，可通过 [CreateMPSTemplate](https://cloud.tencent.com/document/product/266/122580) 接口创建自定义模板。
 * @method void setMPSProcessMediaParams(string $MPSProcessMediaParams) 设置该参数用于透传至媒体处理服务（MPS），以便从云点播侧发起 MPS 视频处理任务。
视频处理参数详情请参考：[MPS 发起媒体处理](https://cloud.tencent.com/document/api/862/37578)。
填写说明：
1. 目前仅需要配置 MPS “发起媒体处理”接口中任务配置相关的参数，如 AiAnalysisTask 与 MediaProcessTask，其他参数无需填写。若包含其它参数，系统将自动忽略；
2. 当前仅支持通过此方式发起智能擦除及音视频增强任务。若配置了其他任务类型的相关参数，系统将自动忽略这些参数；
3. 音视频增强任务目前不支持使用预置模板发起，可通过 [CreateMPSTemplate](https://cloud.tencent.com/document/product/266/122580) 接口创建自定义模板。
 * @method string getExtInfo() 获取保留字段，特殊用途时使用。
 * @method void setExtInfo(string $ExtInfo) 设置保留字段，特殊用途时使用。
 */
class ProcessMediaByMPSRequest extends AbstractModel
{
    /**
     * @var string 媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。
     */
    public $FileId;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 该参数用于透传至媒体处理服务（MPS），以便从云点播侧发起 MPS 视频处理任务。
视频处理参数详情请参考：[MPS 发起媒体处理](https://cloud.tencent.com/document/api/862/37578)。
填写说明：
1. 目前仅需要配置 MPS “发起媒体处理”接口中任务配置相关的参数，如 AiAnalysisTask 与 MediaProcessTask，其他参数无需填写。若包含其它参数，系统将自动忽略；
2. 当前仅支持通过此方式发起智能擦除及音视频增强任务。若配置了其他任务类型的相关参数，系统将自动忽略这些参数；
3. 音视频增强任务目前不支持使用预置模板发起，可通过 [CreateMPSTemplate](https://cloud.tencent.com/document/product/266/122580) 接口创建自定义模板。
     */
    public $MPSProcessMediaParams;

    /**
     * @var string 保留字段，特殊用途时使用。
     */
    public $ExtInfo;

    /**
     * @param string $FileId 媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 [视频上传完成事件通知](/document/product/266/7830) 或 [云点播控制台](https://console.cloud.tencent.com/vod/media) 获取该字段。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。</b>
     * @param string $MPSProcessMediaParams 该参数用于透传至媒体处理服务（MPS），以便从云点播侧发起 MPS 视频处理任务。
视频处理参数详情请参考：[MPS 发起媒体处理](https://cloud.tencent.com/document/api/862/37578)。
填写说明：
1. 目前仅需要配置 MPS “发起媒体处理”接口中任务配置相关的参数，如 AiAnalysisTask 与 MediaProcessTask，其他参数无需填写。若包含其它参数，系统将自动忽略；
2. 当前仅支持通过此方式发起智能擦除及音视频增强任务。若配置了其他任务类型的相关参数，系统将自动忽略这些参数；
3. 音视频增强任务目前不支持使用预置模板发起，可通过 [CreateMPSTemplate](https://cloud.tencent.com/document/product/266/122580) 接口创建自定义模板。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("MPSProcessMediaParams",$param) and $param["MPSProcessMediaParams"] !== null) {
            $this->MPSProcessMediaParams = $param["MPSProcessMediaParams"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
