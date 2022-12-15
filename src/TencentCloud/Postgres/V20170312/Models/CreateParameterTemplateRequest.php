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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateParameterTemplate请求参数结构体
 *
 * @method string getTemplateName() 获取模板名称，长度为1～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@
 * @method void setTemplateName(string $TemplateName) 设置模板名称，长度为1～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@
 * @method string getDBMajorVersion() 获取数据库大版本号，例如：11，12，13
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置数据库大版本号，例如：11，12，13
 * @method string getDBEngine() 获取数据库引擎，例如：postgresql，mssql_compatible
 * @method void setDBEngine(string $DBEngine) 设置数据库引擎，例如：postgresql，mssql_compatible
 * @method string getTemplateDescription() 获取参数模板描述，长度为0～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@
 * @method void setTemplateDescription(string $TemplateDescription) 设置参数模板描述，长度为0～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@
 */
class CreateParameterTemplateRequest extends AbstractModel
{
    /**
     * @var string 模板名称，长度为1～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@
     */
    public $TemplateName;

    /**
     * @var string 数据库大版本号，例如：11，12，13
     */
    public $DBMajorVersion;

    /**
     * @var string 数据库引擎，例如：postgresql，mssql_compatible
     */
    public $DBEngine;

    /**
     * @var string 参数模板描述，长度为0～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@
     */
    public $TemplateDescription;

    /**
     * @param string $TemplateName 模板名称，长度为1～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@
     * @param string $DBMajorVersion 数据库大版本号，例如：11，12，13
     * @param string $DBEngine 数据库引擎，例如：postgresql，mssql_compatible
     * @param string $TemplateDescription 参数模板描述，长度为0～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }

        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }
    }
}
