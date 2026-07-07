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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dspm分类分级数据项列表项
 *
 * @method integer getId() 获取<p>数据项id</p>
 * @method void setId(integer $Id) 设置<p>数据项id</p>
 * @method string getName() 获取<p>数据项名称</p>
 * @method void setName(string $Name) 设置<p>数据项名称</p>
 * @method string getDescription() 获取<p>数据项描述</p>
 * @method void setDescription(string $Description) 设置<p>数据项描述</p>
 * @method integer getStatus() 获取<p>数据项是否启用</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
 * @method void setStatus(integer $Status) 设置<p>数据项是否启用</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
 * @method integer getType() 获取<p>数据项类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
 * @method void setType(integer $Type) 设置<p>数据项类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method boolean getStructuredStatus() 获取<p>结构化规则配置状态</p>
 * @method void setStructuredStatus(boolean $StructuredStatus) 设置<p>结构化规则配置状态</p>
 * @method boolean getUnStructuredStatus() 获取<p>非结构化规则配置状态</p>
 * @method void setUnStructuredStatus(boolean $UnStructuredStatus) 设置<p>非结构化规则配置状态</p>
 * @method array getComplianceRelations() 获取<p>无</p>
 * @method void setComplianceRelations(array $ComplianceRelations) 设置<p>无</p>
 */
class DspmIdentifyRuleItem extends AbstractModel
{
    /**
     * @var integer <p>数据项id</p>
     */
    public $Id;

    /**
     * @var string <p>数据项名称</p>
     */
    public $Name;

    /**
     * @var string <p>数据项描述</p>
     */
    public $Description;

    /**
     * @var integer <p>数据项是否启用</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>数据项类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
     */
    public $Type;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>结构化规则配置状态</p>
     */
    public $StructuredStatus;

    /**
     * @var boolean <p>非结构化规则配置状态</p>
     */
    public $UnStructuredStatus;

    /**
     * @var array <p>无</p>
     */
    public $ComplianceRelations;

    /**
     * @param integer $Id <p>数据项id</p>
     * @param string $Name <p>数据项名称</p>
     * @param string $Description <p>数据项描述</p>
     * @param integer $Status <p>数据项是否启用</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
     * @param integer $Type <p>数据项类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
     * @param string $UpdateTime <p>更新时间</p>
     * @param boolean $StructuredStatus <p>结构化规则配置状态</p>
     * @param boolean $UnStructuredStatus <p>非结构化规则配置状态</p>
     * @param array $ComplianceRelations <p>无</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StructuredStatus",$param) and $param["StructuredStatus"] !== null) {
            $this->StructuredStatus = $param["StructuredStatus"];
        }

        if (array_key_exists("UnStructuredStatus",$param) and $param["UnStructuredStatus"] !== null) {
            $this->UnStructuredStatus = $param["UnStructuredStatus"];
        }

        if (array_key_exists("ComplianceRelations",$param) and $param["ComplianceRelations"] !== null) {
            $this->ComplianceRelations = [];
            foreach ($param["ComplianceRelations"] as $key => $value){
                $obj = new DspmIdentifyRefComplianceInfo();
                $obj->deserialize($value);
                array_push($this->ComplianceRelations, $obj);
            }
        }
    }
}
