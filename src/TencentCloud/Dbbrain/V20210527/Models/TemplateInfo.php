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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知模板
 *
 * @method string getTemplateId() 获取模板id,通过接口[通知模板查询](https://cloud.tencent.com/document/product/1130/97726)获得。
 * @method void setTemplateId(string $TemplateId) 设置模板id,通过接口[通知模板查询](https://cloud.tencent.com/document/product/1130/97726)获得。
 * @method string getTemplateName() 获取模板名,通过接口[通知模板查询](https://cloud.tencent.com/document/product/1130/97726)获得。
 * @method void setTemplateName(string $TemplateName) 设置模板名,通过接口[通知模板查询](https://cloud.tencent.com/document/product/1130/97726)获得。
 */
class TemplateInfo extends AbstractModel
{
    /**
     * @var string 模板id,通过接口[通知模板查询](https://cloud.tencent.com/document/product/1130/97726)获得。
     */
    public $TemplateId;

    /**
     * @var string 模板名,通过接口[通知模板查询](https://cloud.tencent.com/document/product/1130/97726)获得。
     */
    public $TemplateName;

    /**
     * @param string $TemplateId 模板id,通过接口[通知模板查询](https://cloud.tencent.com/document/product/1130/97726)获得。
     * @param string $TemplateName 模板名,通过接口[通知模板查询](https://cloud.tencent.com/document/product/1130/97726)获得。
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }
    }
}
