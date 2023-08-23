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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防火墙模板信息。
 *
 * @method string getTemplateId() 获取模板Id。
 * @method void setTemplateId(string $TemplateId) 设置模板Id。
 * @method string getTemplateName() 获取模板名称。
 * @method void setTemplateName(string $TemplateName) 设置模板名称。
 * @method string getTemplateType() 获取模板类型。
 * @method void setTemplateType(string $TemplateType) 设置模板类型。
 * @method string getTemplateState() 获取模板状态。
 * @method void setTemplateState(string $TemplateState) 设置模板状态。
 * @method string getCreatedTime() 获取模板创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置模板创建时间。
 */
class FirewallTemplate extends AbstractModel
{
    /**
     * @var string 模板Id。
     */
    public $TemplateId;

    /**
     * @var string 模板名称。
     */
    public $TemplateName;

    /**
     * @var string 模板类型。
     */
    public $TemplateType;

    /**
     * @var string 模板状态。
     */
    public $TemplateState;

    /**
     * @var string 模板创建时间。
     */
    public $CreatedTime;

    /**
     * @param string $TemplateId 模板Id。
     * @param string $TemplateName 模板名称。
     * @param string $TemplateType 模板类型。
     * @param string $TemplateState 模板状态。
     * @param string $CreatedTime 模板创建时间。
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

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("TemplateState",$param) and $param["TemplateState"] !== null) {
            $this->TemplateState = $param["TemplateState"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
