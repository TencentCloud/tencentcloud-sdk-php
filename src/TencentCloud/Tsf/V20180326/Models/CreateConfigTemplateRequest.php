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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConfigTemplate请求参数结构体
 *
 * @method string getConfigTemplateName() 获取配置模板名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”），且不能以分隔符开头或结尾。
 * @method void setConfigTemplateName(string $ConfigTemplateName) 设置配置模板名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”），且不能以分隔符开头或结尾。
 * @method string getConfigTemplateType() 获取配置模板对应的微服务框架。
- Ribbon：Ribbon类型配置模板
- Hystrix：Hystrix类型配置模板
- Zuul：Zuul类型配置模板
- customize：自定义类型配置模板
 * @method void setConfigTemplateType(string $ConfigTemplateType) 设置配置模板对应的微服务框架。
- Ribbon：Ribbon类型配置模板
- Hystrix：Hystrix类型配置模板
- Zuul：Zuul类型配置模板
- customize：自定义类型配置模板
 * @method string getConfigTemplateValue() 获取配置模板数据。
 * @method void setConfigTemplateValue(string $ConfigTemplateValue) 设置配置模板数据。
 * @method string getConfigTemplateDesc() 获取配置模板描述，最多支持200个字符。
 * @method void setConfigTemplateDesc(string $ConfigTemplateDesc) 设置配置模板描述，最多支持200个字符。
 * @method array getProgramIdList() 获取需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
 * @method void setProgramIdList(array $ProgramIdList) 设置需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
 */
class CreateConfigTemplateRequest extends AbstractModel
{
    /**
     * @var string 配置模板名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”），且不能以分隔符开头或结尾。
     */
    public $ConfigTemplateName;

    /**
     * @var string 配置模板对应的微服务框架。
- Ribbon：Ribbon类型配置模板
- Hystrix：Hystrix类型配置模板
- Zuul：Zuul类型配置模板
- customize：自定义类型配置模板
     */
    public $ConfigTemplateType;

    /**
     * @var string 配置模板数据。
     */
    public $ConfigTemplateValue;

    /**
     * @var string 配置模板描述，最多支持200个字符。
     */
    public $ConfigTemplateDesc;

    /**
     * @var array 需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
     */
    public $ProgramIdList;

    /**
     * @param string $ConfigTemplateName 配置模板名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”），且不能以分隔符开头或结尾。
     * @param string $ConfigTemplateType 配置模板对应的微服务框架。
- Ribbon：Ribbon类型配置模板
- Hystrix：Hystrix类型配置模板
- Zuul：Zuul类型配置模板
- customize：自定义类型配置模板
     * @param string $ConfigTemplateValue 配置模板数据。
     * @param string $ConfigTemplateDesc 配置模板描述，最多支持200个字符。
     * @param array $ProgramIdList 需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
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
