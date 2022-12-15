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
 * 参数模板的基本信息
 *
 * @method string getTemplateId() 获取参数模板ID
 * @method void setTemplateId(string $TemplateId) 设置参数模板ID
 * @method string getTemplateName() 获取参数模板名称
 * @method void setTemplateName(string $TemplateName) 设置参数模板名称
 * @method string getDBMajorVersion() 获取参数模板适用的数据库版本
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置参数模板适用的数据库版本
 * @method string getDBEngine() 获取参数模板适用的数据库引擎
 * @method void setDBEngine(string $DBEngine) 设置参数模板适用的数据库引擎
 * @method string getTemplateDescription() 获取参数模板描述
 * @method void setTemplateDescription(string $TemplateDescription) 设置参数模板描述
 */
class ParameterTemplate extends AbstractModel
{
    /**
     * @var string 参数模板ID
     */
    public $TemplateId;

    /**
     * @var string 参数模板名称
     */
    public $TemplateName;

    /**
     * @var string 参数模板适用的数据库版本
     */
    public $DBMajorVersion;

    /**
     * @var string 参数模板适用的数据库引擎
     */
    public $DBEngine;

    /**
     * @var string 参数模板描述
     */
    public $TemplateDescription;

    /**
     * @param string $TemplateId 参数模板ID
     * @param string $TemplateName 参数模板名称
     * @param string $DBMajorVersion 参数模板适用的数据库版本
     * @param string $DBEngine 参数模板适用的数据库引擎
     * @param string $TemplateDescription 参数模板描述
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
