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
 * 导入请求相关信息
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getFileCos() 获取zip包上传cos地址
 * @method void setFileCos(string $FileCos) 设置zip包上传cos地址
 * @method string getBucketName() 获取cos桶名
 * @method void setBucketName(string $BucketName) 设置cos桶名
 * @method string getRegion() 获取cos地域
 * @method void setRegion(string $Region) 设置cos地域
 * @method string getFilePath() 获取文件导入路径（不包含文件名）
 * @method void setFilePath(string $FilePath) 设置文件导入路径（不包含文件名）
 */
class ImportRequestInfo extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string zip包上传cos地址
     */
    public $FileCos;

    /**
     * @var string cos桶名
     */
    public $BucketName;

    /**
     * @var string cos地域
     */
    public $Region;

    /**
     * @var string 文件导入路径（不包含文件名）
     */
    public $FilePath;

    /**
     * @param string $ProjectId 项目id
     * @param string $FileCos zip包上传cos地址
     * @param string $BucketName cos桶名
     * @param string $Region cos地域
     * @param string $FilePath 文件导入路径（不包含文件名）
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("FileCos",$param) and $param["FileCos"] !== null) {
            $this->FileCos = $param["FileCos"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }
    }
}
