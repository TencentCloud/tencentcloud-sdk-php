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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConfigTemplateWithDetailResp请求参数结构体
 *
 * @method string getConfigTemplateName() 获取配置模板名称
 * @method void setConfigTemplateName(string $ConfigTemplateName) 设置配置模板名称
 * @method string getConfigTemplateType() 获取配置模板对应的微服务框架
 * @method void setConfigTemplateType(string $ConfigTemplateType) 设置配置模板对应的微服务框架
 * @method string getConfigTemplateValue() 获取配置模板数据
 * @method void setConfigTemplateValue(string $ConfigTemplateValue) 设置配置模板数据
 * @method string getConfigTemplateDesc() 获取配置模板描述
 * @method void setConfigTemplateDesc(string $ConfigTemplateDesc) 设置配置模板描述
 * @method array getProgramIdList() 获取无
 * @method void setProgramIdList(array $ProgramIdList) 设置无
 */
class CreateConfigTemplateWithDetailRespRequest extends AbstractModel
{
    /**
     * @var string 配置模板名称
     */
    public $ConfigTemplateName;

    /**
     * @var string 配置模板对应的微服务框架
     */
    public $ConfigTemplateType;

    /**
     * @var string 配置模板数据
     */
    public $ConfigTemplateValue;

    /**
     * @var string 配置模板描述
     */
    public $ConfigTemplateDesc;

    /**
     * @var array 无
     */
    public $ProgramIdList;

    /**
     * @param string $ConfigTemplateName 配置模板名称
     * @param string $ConfigTemplateType 配置模板对应的微服务框架
     * @param string $ConfigTemplateValue 配置模板数据
     * @param string $ConfigTemplateDesc 配置模板描述
     * @param array $ProgramIdList 无
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
        if (array_key_exists("ConfigTemplateName",$param) and $param["ConfigTemplateName"] !== null) {
            $this->ConfigTemplateName = $param["ConfigTemplateName"];
        }

        if (array_key_exists("ConfigTemplateType",$param) and $param["ConfigTemplateType"] !== null) {
            $this->ConfigTemplateType = $param["ConfigTemplateType"];
        }

        if (array_key_exists("ConfigTemplateValue",$param) and $param["ConfigTemplateValue"] !== null) {
            $this->ConfigTemplateValue = $param["ConfigTemplateValue"];
        }

        if (array_key_exists("ConfigTemplateDesc",$param) and $param["ConfigTemplateDesc"] !== null) {
            $this->ConfigTemplateDesc = $param["ConfigTemplateDesc"];
        }

        if (array_key_exists("ProgramIdList",$param) and $param["ProgramIdList"] !== null) {
            $this->ProgramIdList = $param["ProgramIdList"];
        }
    }
}
