<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTemplateId() 获取模板Id
 * @method void setTemplateId(integer $templateId) 设置模板Id
 * @method string getName() 获取模板名称
 * @method void setName(string $name) 设置模板名称
 * @method string getDescription() 获取模板描述
 * @method void setDescription(string $description) 设置模板描述
 * @method array getParamList() 获取参数列表
 * @method void setParamList(array $paramList) 设置参数列表
 */

/**
 *ModifyParamTemplate请求参数结构体
 */
class ModifyParamTemplateRequest extends AbstractModel
{
    /**
     * @var integer 模板Id
     */
    public $templateId;

    /**
     * @var string 模板名称
     */
    public $name;

    /**
     * @var string 模板描述
     */
    public $description;

    /**
     * @var array 参数列表
     */
    public $paramList;
    /**
     * @param integer $templateId 模板Id
     * @param string $name 模板名称
     * @param string $description 模板描述
     * @param array $paramList 参数列表
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->templateId = $param["TemplateId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->description = $param["Description"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->paramList = $param["ParamList"];
        }
    }
}
