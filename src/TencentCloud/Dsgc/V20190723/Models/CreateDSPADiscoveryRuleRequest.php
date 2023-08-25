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
 * CreateDSPADiscoveryRule请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method string getName() 获取规则名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
 * @method void setName(string $Name) 设置规则名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
 * @method string getDescription() 获取规则描述，最大长度为1024个字符
 * @method void setDescription(string $Description) 设置规则描述，最大长度为1024个字符
 * @method DspaDiscoveryRDBRules getRDBRules() 获取RDB类敏感数据识别规则
 * @method void setRDBRules(DspaDiscoveryRDBRules $RDBRules) 设置RDB类敏感数据识别规则
 * @method DspaDiscoveryCOSRules getCOSRules() 获取COS类敏感数据识别规则
 * @method void setCOSRules(DspaDiscoveryCOSRules $COSRules) 设置COS类敏感数据识别规则
 */
class CreateDSPADiscoveryRuleRequest extends AbstractModel
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
     * @var string 规则描述，最大长度为1024个字符
     */
    public $Description;

    /**
     * @var DspaDiscoveryRDBRules RDB类敏感数据识别规则
     */
    public $RDBRules;

    /**
     * @var DspaDiscoveryCOSRules COS类敏感数据识别规则
     */
    public $COSRules;

    /**
     * @param string $DspaId DSPA实例ID
     * @param string $Name 规则名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
     * @param string $Description 规则描述，最大长度为1024个字符
     * @param DspaDiscoveryRDBRules $RDBRules RDB类敏感数据识别规则
     * @param DspaDiscoveryCOSRules $COSRules COS类敏感数据识别规则
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RDBRules",$param) and $param["RDBRules"] !== null) {
            $this->RDBRules = new DspaDiscoveryRDBRules();
            $this->RDBRules->deserialize($param["RDBRules"]);
        }

        if (array_key_exists("COSRules",$param) and $param["COSRules"] !== null) {
            $this->COSRules = new DspaDiscoveryCOSRules();
            $this->COSRules->deserialize($param["COSRules"]);
        }
    }
}
