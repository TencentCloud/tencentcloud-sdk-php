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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDSPAAssessmentTask请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例Id，格式“dspa-xxxxxxxx”
 * @method void setDspaId(string $DspaId) 设置DSPA实例Id，格式“dspa-xxxxxxxx”
 * @method string getName() 获取评估任务名称。1-20个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
 * @method void setName(string $Name) 设置评估任务名称。1-20个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
 * @method string getTemplateId() 获取评估模版Id，格式“template-xxxxxxxx”
 * @method void setTemplateId(string $TemplateId) 设置评估模版Id，格式“template-xxxxxxxx”
 * @method string getBusinessName() 获取评估业务名称。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
 * @method void setBusinessName(string $BusinessName) 设置评估业务名称。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
 * @method string getBusinessDept() 获取业务所属部门。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
 * @method void setBusinessDept(string $BusinessDept) 设置业务所属部门。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
 * @method string getBusinessOwner() 获取业务负责人。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
 * @method void setBusinessOwner(string $BusinessOwner) 设置业务负责人。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
 * @method integer getComplianceId() 获取分类分级模版Id
 * @method void setComplianceId(integer $ComplianceId) 设置分类分级模版Id
 * @method DiscoveryCondition getDiscoveryCondition() 获取敏感数据扫描数据源条件。
 * @method void setDiscoveryCondition(DiscoveryCondition $DiscoveryCondition) 设置敏感数据扫描数据源条件。
 * @method string getDescription() 获取说明
 * @method void setDescription(string $Description) 设置说明
 */
class CreateDSPAAssessmentTaskRequest extends AbstractModel
{
    /**
     * @var string DSPA实例Id，格式“dspa-xxxxxxxx”
     */
    public $DspaId;

    /**
     * @var string 评估任务名称。1-20个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
     */
    public $Name;

    /**
     * @var string 评估模版Id，格式“template-xxxxxxxx”
     */
    public $TemplateId;

    /**
     * @var string 评估业务名称。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
     * @deprecated
     */
    public $BusinessName;

    /**
     * @var string 业务所属部门。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
     * @deprecated
     */
    public $BusinessDept;

    /**
     * @var string 业务负责人。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
     * @deprecated
     */
    public $BusinessOwner;

    /**
     * @var integer 分类分级模版Id
     */
    public $ComplianceId;

    /**
     * @var DiscoveryCondition 敏感数据扫描数据源条件。
     */
    public $DiscoveryCondition;

    /**
     * @var string 说明
     */
    public $Description;

    /**
     * @param string $DspaId DSPA实例Id，格式“dspa-xxxxxxxx”
     * @param string $Name 评估任务名称。1-20个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
     * @param string $TemplateId 评估模版Id，格式“template-xxxxxxxx”
     * @param string $BusinessName 评估业务名称。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
     * @param string $BusinessDept 业务所属部门。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
     * @param string $BusinessOwner 业务负责人。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字
     * @param integer $ComplianceId 分类分级模版Id
     * @param DiscoveryCondition $DiscoveryCondition 敏感数据扫描数据源条件。
     * @param string $Description 说明
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("BusinessName",$param) and $param["BusinessName"] !== null) {
            $this->BusinessName = $param["BusinessName"];
        }

        if (array_key_exists("BusinessDept",$param) and $param["BusinessDept"] !== null) {
            $this->BusinessDept = $param["BusinessDept"];
        }

        if (array_key_exists("BusinessOwner",$param) and $param["BusinessOwner"] !== null) {
            $this->BusinessOwner = $param["BusinessOwner"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("DiscoveryCondition",$param) and $param["DiscoveryCondition"] !== null) {
            $this->DiscoveryCondition = new DiscoveryCondition();
            $this->DiscoveryCondition->deserialize($param["DiscoveryCondition"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
