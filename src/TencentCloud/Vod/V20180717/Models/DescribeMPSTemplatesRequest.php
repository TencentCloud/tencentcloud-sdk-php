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
 * DescribeMPSTemplates请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method string getTemplateType() 获取MPS 模板类型。根据需要查询的 MPS 模板的类型对结果进行过滤。取值：
<li>Transcode: 查询转码模板列表。</li>
 * @method void setTemplateType(string $TemplateType) 设置MPS 模板类型。根据需要查询的 MPS 模板的类型对结果进行过滤。取值：
<li>Transcode: 查询转码模板列表。</li>
 * @method string getMPSDescribeTemplateParams() 获取MPS 查询模板参数。该参数用于透传至媒体处理服务（MPS），从云点播侧查询 MPS 任务模板列表。目前仅支持通过此方式查询以下任务类型的模板：
1. 音视频增强：仅支持填写“[获取转码模板列表](https://cloud.tencent.com/document/product/862/37593)”接口中的 Definitions、Offset 和 Limit 几个参数的内容。目前仅支持在模板中配置以上参数，其他参数无需填写，若包含其它参数，系统将自动忽略。
 * @method void setMPSDescribeTemplateParams(string $MPSDescribeTemplateParams) 设置MPS 查询模板参数。该参数用于透传至媒体处理服务（MPS），从云点播侧查询 MPS 任务模板列表。目前仅支持通过此方式查询以下任务类型的模板：
1. 音视频增强：仅支持填写“[获取转码模板列表](https://cloud.tencent.com/document/product/862/37593)”接口中的 Definitions、Offset 和 Limit 几个参数的内容。目前仅支持在模板中配置以上参数，其他参数无需填写，若包含其它参数，系统将自动忽略。
 */
class DescribeMPSTemplatesRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。</b>
     */
    public $SubAppId;

    /**
     * @var string MPS 模板类型。根据需要查询的 MPS 模板的类型对结果进行过滤。取值：
<li>Transcode: 查询转码模板列表。</li>
     */
    public $TemplateType;

    /**
     * @var string MPS 查询模板参数。该参数用于透传至媒体处理服务（MPS），从云点播侧查询 MPS 任务模板列表。目前仅支持通过此方式查询以下任务类型的模板：
1. 音视频增强：仅支持填写“[获取转码模板列表](https://cloud.tencent.com/document/product/862/37593)”接口中的 Definitions、Offset 和 Limit 几个参数的内容。目前仅支持在模板中配置以上参数，其他参数无需填写，若包含其它参数，系统将自动忽略。
     */
    public $MPSDescribeTemplateParams;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。</b>
     * @param string $TemplateType MPS 模板类型。根据需要查询的 MPS 模板的类型对结果进行过滤。取值：
<li>Transcode: 查询转码模板列表。</li>
     * @param string $MPSDescribeTemplateParams MPS 查询模板参数。该参数用于透传至媒体处理服务（MPS），从云点播侧查询 MPS 任务模板列表。目前仅支持通过此方式查询以下任务类型的模板：
1. 音视频增强：仅支持填写“[获取转码模板列表](https://cloud.tencent.com/document/product/862/37593)”接口中的 Definitions、Offset 和 Limit 几个参数的内容。目前仅支持在模板中配置以上参数，其他参数无需填写，若包含其它参数，系统将自动忽略。
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

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("MPSDescribeTemplateParams",$param) and $param["MPSDescribeTemplateParams"] !== null) {
            $this->MPSDescribeTemplateParams = $param["MPSDescribeTemplateParams"];
        }
    }
}
