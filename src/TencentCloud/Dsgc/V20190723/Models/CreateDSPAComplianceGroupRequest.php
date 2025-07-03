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
 * CreateDSPAComplianceGroup请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method string getName() 获取合规组名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
 * @method void setName(string $Name) 设置合规组名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
 * @method string getDescription() 获取合规组描述，最大长度为1024个字符
 * @method void setDescription(string $Description) 设置合规组描述，最大长度为1024个字符
 * @method array getComplianceGroupRules() 获取合规组规则配置（参数已废弃，请传空数组）
 * @method void setComplianceGroupRules(array $ComplianceGroupRules) 设置合规组规则配置（参数已废弃，请传空数组）
 * @method integer getLevelGroupId() 获取分级组ID，默认值为1，新增参数，可选
 * @method void setLevelGroupId(integer $LevelGroupId) 设置分级组ID，默认值为1，新增参数，可选
 * @method integer getStatus() 获取1代表模版开启，0代表模版关闭
 * @method void setStatus(integer $Status) 设置1代表模版开启，0代表模版关闭
 * @method integer getCloseComplianceId() 获取该complianceId的开启状态将被关闭
 * @method void setCloseComplianceId(integer $CloseComplianceId) 设置该complianceId的开启状态将被关闭
 */
class CreateDSPAComplianceGroupRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var string 合规组名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
     */
    public $Name;

    /**
     * @var string 合规组描述，最大长度为1024个字符
     */
    public $Description;

    /**
     * @var array 合规组规则配置（参数已废弃，请传空数组）
     */
    public $ComplianceGroupRules;

    /**
     * @var integer 分级组ID，默认值为1，新增参数，可选
     */
    public $LevelGroupId;

    /**
     * @var integer 1代表模版开启，0代表模版关闭
     */
    public $Status;

    /**
     * @var integer 该complianceId的开启状态将被关闭
     */
    public $CloseComplianceId;

    /**
     * @param string $DspaId DSPA实例ID
     * @param string $Name 合规组名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
     * @param string $Description 合规组描述，最大长度为1024个字符
     * @param array $ComplianceGroupRules 合规组规则配置（参数已废弃，请传空数组）
     * @param integer $LevelGroupId 分级组ID，默认值为1，新增参数，可选
     * @param integer $Status 1代表模版开启，0代表模版关闭
     * @param integer $CloseComplianceId 该complianceId的开启状态将被关闭
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

        if (array_key_exists("ComplianceGroupRules",$param) and $param["ComplianceGroupRules"] !== null) {
            $this->ComplianceGroupRules = [];
            foreach ($param["ComplianceGroupRules"] as $key => $value){
                $obj = new ComplianceGroupRuleIdInfo();
                $obj->deserialize($value);
                array_push($this->ComplianceGroupRules, $obj);
            }
        }

        if (array_key_exists("LevelGroupId",$param) and $param["LevelGroupId"] !== null) {
            $this->LevelGroupId = $param["LevelGroupId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CloseComplianceId",$param) and $param["CloseComplianceId"] !== null) {
            $this->CloseComplianceId = $param["CloseComplianceId"];
        }
    }
}
