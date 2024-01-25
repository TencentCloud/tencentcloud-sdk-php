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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 开发空间-上传脚本请求
 *
 * @method string getFilePath() 获取脚本路径
项目区1470575647377821696项目，f1目录下：
/datastudio/project/1470575647377821696/f1/sql1234.sql
个人区：
/datastudio/personal/sqlTTT.sql
 * @method void setFilePath(string $FilePath) 设置脚本路径
项目区1470575647377821696项目，f1目录下：
/datastudio/project/1470575647377821696/f1/sql1234.sql
个人区：
/datastudio/personal/sqlTTT.sql
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getVersion() 获取脚本版本
 * @method void setVersion(string $Version) 设置脚本版本
 * @method string getOperation() 获取操作类型
 * @method void setOperation(string $Operation) 设置操作类型
 * @method string getExtraInfo() 获取额外信息
 * @method void setExtraInfo(string $ExtraInfo) 设置额外信息
 * @method string getBucketName() 获取桶名称
 * @method void setBucketName(string $BucketName) 设置桶名称
 * @method string getRegion() 获取所属地区
 * @method void setRegion(string $Region) 设置所属地区
 * @method string getFileExtensionType() 获取文件扩展类型
 * @method void setFileExtensionType(string $FileExtensionType) 设置文件扩展类型
 */
class ScriptRequestInfo extends AbstractModel
{
    /**
     * @var string 脚本路径
项目区1470575647377821696项目，f1目录下：
/datastudio/project/1470575647377821696/f1/sql1234.sql
个人区：
/datastudio/personal/sqlTTT.sql
     */
    public $FilePath;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 脚本版本
     */
    public $Version;

    /**
     * @var string 操作类型
     */
    public $Operation;

    /**
     * @var string 额外信息
     */
    public $ExtraInfo;

    /**
     * @var string 桶名称
     */
    public $BucketName;

    /**
     * @var string 所属地区
     */
    public $Region;

    /**
     * @var string 文件扩展类型
     */
    public $FileExtensionType;

    /**
     * @param string $FilePath 脚本路径
项目区1470575647377821696项目，f1目录下：
/datastudio/project/1470575647377821696/f1/sql1234.sql
个人区：
/datastudio/personal/sqlTTT.sql
     * @param string $ProjectId 项目id
     * @param string $Version 脚本版本
     * @param string $Operation 操作类型
     * @param string $ExtraInfo 额外信息
     * @param string $BucketName 桶名称
     * @param string $Region 所属地区
     * @param string $FileExtensionType 文件扩展类型
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
        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("FileExtensionType",$param) and $param["FileExtensionType"] !== null) {
            $this->FileExtensionType = $param["FileExtensionType"];
        }
    }
}
