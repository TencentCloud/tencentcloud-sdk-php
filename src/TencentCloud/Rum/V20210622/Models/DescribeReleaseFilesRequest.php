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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReleaseFiles请求参数结构体
 *
 * @method integer getProjectID() 获取项目 id
 * @method void setProjectID(integer $ProjectID) 设置项目 id
 * @method string getFileVersion() 获取文件版本
 * @method void setFileVersion(string $FileVersion) 设置文件版本
 * @method string getFileName() 获取查询过滤条件（根据sourcemap的文件名模糊匹配）
 * @method void setFileName(string $FileName) 设置查询过滤条件（根据sourcemap的文件名模糊匹配）
 */
class DescribeReleaseFilesRequest extends AbstractModel
{
    /**
     * @var integer 项目 id
     */
    public $ProjectID;

    /**
     * @var string 文件版本
     */
    public $FileVersion;

    /**
     * @var string 查询过滤条件（根据sourcemap的文件名模糊匹配）
     */
    public $FileName;

    /**
     * @param integer $ProjectID 项目 id
     * @param string $FileVersion 文件版本
     * @param string $FileName 查询过滤条件（根据sourcemap的文件名模糊匹配）
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
        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("FileVersion",$param) and $param["FileVersion"] !== null) {
            $this->FileVersion = $param["FileVersion"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
