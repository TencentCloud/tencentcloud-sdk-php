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
 * CreatePrometheusTemp请求参数结构体
 *
 * @method PrometheusTemp getTemplate() 获取模板设置
 * @method void setTemplate(PrometheusTemp $Template) 设置模板设置
 */
class CreatePrometheusTempRequest extends AbstractModel
{
    /**
     * @var PrometheusTemp 模板设置
     */
    public $Template;

    /**
     * @param PrometheusTemp $Template 模板设置
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
        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new PrometheusTemp();
            $this->Template->deserialize($param["Template"]);
        }
    }
}
