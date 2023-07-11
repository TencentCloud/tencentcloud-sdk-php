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
 * ModifyParamTemplate请求参数结构体
 *
 * @method integer getTemplateId() 获取模板ID
 * @method void setTemplateId(integer $TemplateId) 设置模板ID
 * @method string getTemplateName() 获取模板名
 * @method void setTemplateName(string $TemplateName) 设置模板名
 * @method string getTemplateDescription() 获取模板描述
 * @method void setTemplateDescription(string $TemplateDescription) 设置模板描述
 * @method array getParamList() 获取参数列表
 * @method void setParamList(array $ParamList) 设置参数列表
 */
class ModifyParamTemplateRequest extends AbstractModel
{
    /**
     * @var integer 模板ID
     */
    public $TemplateId;

    /**
     * @var string 模板名
     */
    public $TemplateName;

    /**
     * @var string 模板描述
     */
    public $TemplateDescription;

    /**
     * @var array 参数列表
     */
    public $ParamList;

    /**
     * @param integer $TemplateId 模板ID
     * @param string $TemplateName 模板名
     * @param string $TemplateDescription 模板描述
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ModifyParamItem();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
