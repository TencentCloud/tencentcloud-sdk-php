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
 * ModifyDSPADiscoveryRule请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method string getName() 获取规则名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
 * @method void setName(string $Name) 设置规则名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method string getDescription() 获取规则描述，最大长度为1024个字符
 * @method void setDescription(string $Description) 设置规则描述，最大长度为1024个字符
 * @method ScanTaskRDBRules getRDBRules() 获取RDB类敏感数据识别规则
 * @method void setRDBRules(ScanTaskRDBRules $RDBRules) 设置RDB类敏感数据识别规则
 * @method ScanTaskCOSRules getCOSRules() 获取COS类敏感数据识别规则
 * @method void setCOSRules(ScanTaskCOSRules $COSRules) 设置COS类敏感数据识别规则
 */
class ModifyDSPADiscoveryRuleRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var string 规则名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
     */
    public $Name;

    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var string 规则描述，最大长度为1024个字符
     */
    public $Description;

    /**
     * @var ScanTaskRDBRules RDB类敏感数据识别规则
     */
    public $RDBRules;

    /**
     * @var ScanTaskCOSRules COS类敏感数据识别规则
     */
    public $COSRules;

    /**
     * @param string $DspaId DSPA实例ID
     * @param string $Name 规则名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
     * @param integer $RuleId 规则ID
     * @param string $Description 规则描述，最大长度为1024个字符
     * @param ScanTaskRDBRules $RDBRules RDB类敏感数据识别规则
     * @param ScanTaskCOSRules $COSRules COS类敏感数据识别规则
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RDBRules",$param) and $param["RDBRules"] !== null) {
            $this->RDBRules = new ScanTaskRDBRules();
            $this->RDBRules->deserialize($param["RDBRules"]);
        }

        if (array_key_exists("COSRules",$param) and $param["COSRules"] !== null) {
            $this->COSRules = new ScanTaskCOSRules();
            $this->COSRules->deserialize($param["COSRules"]);
        }
    }
}
