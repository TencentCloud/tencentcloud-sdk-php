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
 * DeleteMPSTemplate请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method string getTemplateType() 获取需要删除的 MPS 模板的类型。取值：
<li>Transcode: 删除转码模板。</li>
 * @method void setTemplateType(string $TemplateType) 设置需要删除的 MPS 模板的类型。取值：
<li>Transcode: 删除转码模板。</li>
 * @method integer getDefinition() 获取MPS 任务模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置MPS 任务模板唯一标识。
 */
class DeleteMPSTemplateRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 需要删除的 MPS 模板的类型。取值：
<li>Transcode: 删除转码模板。</li>
     */
    public $TemplateType;

    /**
     * @var integer MPS 任务模板唯一标识。
     */
    public $Definition;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。</b>
     * @param string $TemplateType 需要删除的 MPS 模板的类型。取值：
<li>Transcode: 删除转码模板。</li>
     * @param integer $Definition MPS 任务模板唯一标识。
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

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }
    }
}
