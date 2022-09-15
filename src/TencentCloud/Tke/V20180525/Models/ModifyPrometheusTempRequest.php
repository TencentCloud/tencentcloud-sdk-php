<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPrometheusTemp请求参数结构体
 *
 * @method string getTemplateId() 获取模板ID
 * @method void setTemplateId(string $TemplateId) 设置模板ID
 * @method PrometheusTempModify getTemplate() 获取修改内容
 * @method void setTemplate(PrometheusTempModify $Template) 设置修改内容
 */
class ModifyPrometheusTempRequest extends AbstractModel
{
    /**
     * @var string 模板ID
     */
    public $TemplateId;

    /**
     * @var PrometheusTempModify 修改内容
     */
    public $Template;

    /**
     * @param string $TemplateId 模板ID
     * @param PrometheusTempModify $Template 修改内容
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

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new PrometheusTempModify();
            $this->Template->deserialize($param["Template"]);
        }
    }
}
