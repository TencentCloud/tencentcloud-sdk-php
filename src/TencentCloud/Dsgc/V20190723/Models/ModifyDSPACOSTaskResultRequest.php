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
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getBucketName() 获取桶名
 * @method void setBucketName(string $BucketName) 设置桶名
 * @method string getDataSourceId() 获取数据源id
 * @method void setDataSourceId(string $DataSourceId) 设置数据源id
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
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string 桶名
     */
    public $BucketName;

    /**
     * @var string 数据源id
     */
    public $DataSourceId;

    /**
     * @param string $DspaId DSPA实例ID
     * @param integer $ComplianceId 合规组ID
     * @param integer $FileResultId 文件扫描结果ID
     * @param boolean $IsSetNonSensitiveFile 是否设置为非敏感文件
     * @param string $FileName 文件名
     * @param string $BucketName 桶名
     * @param string $DataSourceId 数据源id
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }
    }
}
