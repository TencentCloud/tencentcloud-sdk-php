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
 * ModifyDSPACOSTaskResult请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method integer getComplianceId() 获取合规组ID
 * @method void setComplianceId(integer $ComplianceId) 设置合规组ID
 * @method integer getFileResultId() 获取文件扫描结果ID
 * @method void setFileResultId(integer $FileResultId) 设置文件扫描结果ID
 * @method boolean getIsSetNonSensitiveFile() 获取是否设置为非敏感文件
 * @method void setIsSetNonSensitiveFile(boolean $IsSetNonSensitiveFile) 设置是否设置为非敏感文件
 */
class ModifyDSPACOSTaskResultRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var integer 合规组ID
     */
    public $ComplianceId;

    /**
     * @var integer 文件扫描结果ID
     */
    public $FileResultId;

    /**
     * @var boolean 是否设置为非敏感文件
     */
    public $IsSetNonSensitiveFile;

    /**
     * @param string $DspaId DSPA实例ID
     * @param integer $ComplianceId 合规组ID
     * @param integer $FileResultId 文件扫描结果ID
     * @param boolean $IsSetNonSensitiveFile 是否设置为非敏感文件
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

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("FileResultId",$param) and $param["FileResultId"] !== null) {
            $this->FileResultId = $param["FileResultId"];
        }

        if (array_key_exists("IsSetNonSensitiveFile",$param) and $param["IsSetNonSensitiveFile"] !== null) {
            $this->IsSetNonSensitiveFile = $param["IsSetNonSensitiveFile"];
        }
    }
}
