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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParamTemplates请求参数结构体
 *
 * @method array getEngineVersions() 获取引擎版本，缺省则查询所有
 * @method void setEngineVersions(array $EngineVersions) 设置引擎版本，缺省则查询所有
 * @method array getEngineTypes() 获取引擎类型，缺省则查询所有
 * @method void setEngineTypes(array $EngineTypes) 设置引擎类型，缺省则查询所有
 * @method array getTemplateNames() 获取模板名称，缺省则查询所有
 * @method void setTemplateNames(array $TemplateNames) 设置模板名称，缺省则查询所有
 * @method array getTemplateIds() 获取模板id，缺省则查询所有
 * @method void setTemplateIds(array $TemplateIds) 设置模板id，缺省则查询所有
 */
class DescribeParamTemplatesRequest extends AbstractModel
{
    /**
     * @var array 引擎版本，缺省则查询所有
     */
    public $EngineVersions;

    /**
     * @var array 引擎类型，缺省则查询所有
     */
    public $EngineTypes;

    /**
     * @var array 模板名称，缺省则查询所有
     */
    public $TemplateNames;

    /**
     * @var array 模板id，缺省则查询所有
     */
    public $TemplateIds;

    /**
     * @param array $EngineVersions 引擎版本，缺省则查询所有
     * @param array $EngineTypes 引擎类型，缺省则查询所有
     * @param array $TemplateNames 模板名称，缺省则查询所有
     * @param array $TemplateIds 模板id，缺省则查询所有
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
        if (array_key_exists("EngineVersions",$param) and $param["EngineVersions"] !== null) {
            $this->EngineVersions = $param["EngineVersions"];
        }

        if (array_key_exists("EngineTypes",$param) and $param["EngineTypes"] !== null) {
            $this->EngineTypes = $param["EngineTypes"];
        }

        if (array_key_exists("TemplateNames",$param) and $param["TemplateNames"] !== null) {
            $this->TemplateNames = $param["TemplateNames"];
        }

        if (array_key_exists("TemplateIds",$param) and $param["TemplateIds"] !== null) {
            $this->TemplateIds = $param["TemplateIds"];
        }
    }
}
