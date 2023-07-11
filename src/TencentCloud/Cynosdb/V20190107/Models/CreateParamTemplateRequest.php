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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateParamTemplate请求参数结构体
 *
 * @method string getTemplateName() 获取模板名称
 * @method void setTemplateName(string $TemplateName) 设置模板名称
 * @method string getEngineVersion() 获取mysql版本号
 * @method void setEngineVersion(string $EngineVersion) 设置mysql版本号
 * @method string getTemplateDescription() 获取模板描述
 * @method void setTemplateDescription(string $TemplateDescription) 设置模板描述
 * @method integer getTemplateId() 获取可选参数，需要复制的模板ID
 * @method void setTemplateId(integer $TemplateId) 设置可选参数，需要复制的模板ID
 * @method string getDbMode() 获取数据库类型，可选值：NORMAL（默认值），SERVERLESS
 * @method void setDbMode(string $DbMode) 设置数据库类型，可选值：NORMAL（默认值），SERVERLESS
 * @method array getParamList() 获取参数列表
 * @method void setParamList(array $ParamList) 设置参数列表
 */
class CreateParamTemplateRequest extends AbstractModel
{
    /**
     * @var string 模板名称
     */
    public $TemplateName;

    /**
     * @var string mysql版本号
     */
    public $EngineVersion;

    /**
     * @var string 模板描述
     */
    public $TemplateDescription;

    /**
     * @var integer 可选参数，需要复制的模板ID
     */
    public $TemplateId;

    /**
     * @var string 数据库类型，可选值：NORMAL（默认值），SERVERLESS
     */
    public $DbMode;

    /**
     * @var array 参数列表
     */
    public $ParamList;

    /**
     * @param string $TemplateName 模板名称
     * @param string $EngineVersion mysql版本号
     * @param string $TemplateDescription 模板描述
     * @param integer $TemplateId 可选参数，需要复制的模板ID
     * @param string $DbMode 数据库类型，可选值：NORMAL（默认值），SERVERLESS
     * @param array $ParamList 参数列表
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

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ParamItem();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
