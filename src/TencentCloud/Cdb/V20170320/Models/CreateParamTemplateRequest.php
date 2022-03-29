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
 * CreateParamTemplate请求参数结构体
 *
 * @method string getName() 获取参数模板名称。
 * @method void setName(string $Name) 设置参数模板名称。
 * @method string getDescription() 获取参数模板描述。
 * @method void setDescription(string $Description) 设置参数模板描述。
 * @method string getEngineVersion() 获取MySQL 版本号。
 * @method void setEngineVersion(string $EngineVersion) 设置MySQL 版本号。
 * @method integer getTemplateId() 获取源参数模板 ID。
 * @method void setTemplateId(integer $TemplateId) 设置源参数模板 ID。
 * @method array getParamList() 获取参数列表。
 * @method void setParamList(array $ParamList) 设置参数列表。
 * @method string getTemplateType() 获取默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板。
 * @method void setTemplateType(string $TemplateType) 设置默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板。
 */
class CreateParamTemplateRequest extends AbstractModel
{
    /**
     * @var string 参数模板名称。
     */
    public $Name;

    /**
     * @var string 参数模板描述。
     */
    public $Description;

    /**
     * @var string MySQL 版本号。
     */
    public $EngineVersion;

    /**
     * @var integer 源参数模板 ID。
     */
    public $TemplateId;

    /**
     * @var array 参数列表。
     */
    public $ParamList;

    /**
     * @var string 默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板。
     */
    public $TemplateType;

    /**
     * @param string $Name 参数模板名称。
     * @param string $Description 参数模板描述。
     * @param string $EngineVersion MySQL 版本号。
     * @param integer $TemplateId 源参数模板 ID。
     * @param array $ParamList 参数列表。
     * @param string $TemplateType 默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new Parameter();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }
    }
}
