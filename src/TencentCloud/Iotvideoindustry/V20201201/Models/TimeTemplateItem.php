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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时间模板详情
 *
 * @method string getTemplateId() 获取时间模板ID
 * @method void setTemplateId(string $TemplateId) 设置时间模板ID
 * @method string getName() 获取模板名称
 * @method void setName(string $Name) 设置模板名称
 * @method integer getIsAllWeek() 获取是否全时录制，即7*24小时录制 0-否 1-是
 * @method void setIsAllWeek(integer $IsAllWeek) 设置是否全时录制，即7*24小时录制 0-否 1-是
 * @method integer getType() 获取是否为自定义模板 0-否 1-是
 * @method void setType(integer $Type) 设置是否为自定义模板 0-否 1-是
 * @method array getTimeTemplateSpecs() 获取时间片段详情
 * @method void setTimeTemplateSpecs(array $TimeTemplateSpecs) 设置时间片段详情
 */
class TimeTemplateItem extends AbstractModel
{
    /**
     * @var string 时间模板ID
     */
    public $TemplateId;

    /**
     * @var string 模板名称
     */
    public $Name;

    /**
     * @var integer 是否全时录制，即7*24小时录制 0-否 1-是
     */
    public $IsAllWeek;

    /**
     * @var integer 是否为自定义模板 0-否 1-是
     */
    public $Type;

    /**
     * @var array 时间片段详情
     */
    public $TimeTemplateSpecs;

    /**
     * @param string $TemplateId 时间模板ID
     * @param string $Name 模板名称
     * @param integer $IsAllWeek 是否全时录制，即7*24小时录制 0-否 1-是
     * @param integer $Type 是否为自定义模板 0-否 1-是
     * @param array $TimeTemplateSpecs 时间片段详情
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

        if (array_key_exists("IsAllWeek",$param) and $param["IsAllWeek"] !== null) {
            $this->IsAllWeek = $param["IsAllWeek"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TimeTemplateSpecs",$param) and $param["TimeTemplateSpecs"] !== null) {
            $this->TimeTemplateSpecs = [];
            foreach ($param["TimeTemplateSpecs"] as $key => $value){
                $obj = new TimeTemplateSpec();
                $obj->deserialize($value);
                array_push($this->TimeTemplateSpecs, $obj);
            }
        }
    }
}
