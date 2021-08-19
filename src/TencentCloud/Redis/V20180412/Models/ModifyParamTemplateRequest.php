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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyParamTemplate请求参数结构体
 *
 * @method string getTemplateId() 获取源参数模板 ID。
 * @method void setTemplateId(string $TemplateId) 设置源参数模板 ID。
 * @method string getName() 获取参数模板修改后的新名称。
 * @method void setName(string $Name) 设置参数模板修改后的新名称。
 * @method string getDescription() 获取参数模板修改后的新描述。
 * @method void setDescription(string $Description) 设置参数模板修改后的新描述。
 * @method array getParamList() 获取修改后的新参数列表。
 * @method void setParamList(array $ParamList) 设置修改后的新参数列表。
 */
class ModifyParamTemplateRequest extends AbstractModel
{
    /**
     * @var string 源参数模板 ID。
     */
    public $TemplateId;

    /**
     * @var string 参数模板修改后的新名称。
     */
    public $Name;

    /**
     * @var string 参数模板修改后的新描述。
     */
    public $Description;

    /**
     * @var array 修改后的新参数列表。
     */
    public $ParamList;

    /**
     * @param string $TemplateId 源参数模板 ID。
     * @param string $Name 参数模板修改后的新名称。
     * @param string $Description 参数模板修改后的新描述。
     * @param array $ParamList 修改后的新参数列表。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new InstanceParam();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
