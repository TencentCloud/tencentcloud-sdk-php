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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模板对应的合同类型
 *
 * @method string getUserFlowTypeId() 获取<p>合同类型id</p>
 * @method void setUserFlowTypeId(string $UserFlowTypeId) 设置<p>合同类型id</p>
 * @method string getName() 获取<p>合同类型名称</p>
 * @method void setName(string $Name) 设置<p>合同类型名称</p>
 * @method string getDescription() 获取<p>合同类型的具体描述</p>
 * @method void setDescription(string $Description) 设置<p>合同类型的具体描述</p>
 * @method integer getTemplateNum() 获取<p>每个合同类型绑定的模板数量</p>
 * @method void setTemplateNum(integer $TemplateNum) 设置<p>每个合同类型绑定的模板数量</p>
 * @method integer getStatus() 获取<p>自定义合同类型状态</p><p>枚举值：</p><ul><li>0： 未启用</li><li>1： 启用</li></ul>
 * @method void setStatus(integer $Status) 设置<p>自定义合同类型状态</p><p>枚举值：</p><ul><li>0： 未启用</li><li>1： 启用</li></ul>
 */
class TemplateUserFlowType extends AbstractModel
{
    /**
     * @var string <p>合同类型id</p>
     */
    public $UserFlowTypeId;

    /**
     * @var string <p>合同类型名称</p>
     */
    public $Name;

    /**
     * @var string <p>合同类型的具体描述</p>
     */
    public $Description;

    /**
     * @var integer <p>每个合同类型绑定的模板数量</p>
     */
    public $TemplateNum;

    /**
     * @var integer <p>自定义合同类型状态</p><p>枚举值：</p><ul><li>0： 未启用</li><li>1： 启用</li></ul>
     */
    public $Status;

    /**
     * @param string $UserFlowTypeId <p>合同类型id</p>
     * @param string $Name <p>合同类型名称</p>
     * @param string $Description <p>合同类型的具体描述</p>
     * @param integer $TemplateNum <p>每个合同类型绑定的模板数量</p>
     * @param integer $Status <p>自定义合同类型状态</p><p>枚举值：</p><ul><li>0： 未启用</li><li>1： 启用</li></ul>
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
        if (array_key_exists("UserFlowTypeId",$param) and $param["UserFlowTypeId"] !== null) {
            $this->UserFlowTypeId = $param["UserFlowTypeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TemplateNum",$param) and $param["TemplateNum"] !== null) {
            $this->TemplateNum = $param["TemplateNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
