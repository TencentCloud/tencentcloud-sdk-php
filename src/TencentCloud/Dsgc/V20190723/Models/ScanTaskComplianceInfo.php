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
 * 扫描任务选择的合规组信息
 *
 * @method integer getComplianceGroupId() 获取合规组ID
 * @method void setComplianceGroupId(integer $ComplianceGroupId) 设置合规组ID
 * @method string getComplianceGroupName() 获取合规组名称
 * @method void setComplianceGroupName(string $ComplianceGroupName) 设置合规组名称
 */
class ScanTaskComplianceInfo extends AbstractModel
{
    /**
     * @var integer 合规组ID
     */
    public $ComplianceGroupId;

    /**
     * @var string 合规组名称
     */
    public $ComplianceGroupName;

    /**
     * @param integer $ComplianceGroupId 合规组ID
     * @param string $ComplianceGroupName 合规组名称
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
        if (array_key_exists("ComplianceGroupId",$param) and $param["ComplianceGroupId"] !== null) {
            $this->ComplianceGroupId = $param["ComplianceGroupId"];
        }

        if (array_key_exists("ComplianceGroupName",$param) and $param["ComplianceGroupName"] !== null) {
            $this->ComplianceGroupName = $param["ComplianceGroupName"];
        }
    }
}
