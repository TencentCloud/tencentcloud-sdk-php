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
 * DescribeChildrenPathTrees请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getLocalPath() 获取目录路径
 * @method void setLocalPath(string $LocalPath) 设置目录路径
 * @method string getIncludeFile() 获取true
 * @method void setIncludeFile(string $IncludeFile) 设置true
 * @method integer getQueryDepth() 获取2
 * @method void setQueryDepth(integer $QueryDepth) 设置2
 */
class DescribeChildrenPathTreesRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 目录路径
     */
    public $LocalPath;

    /**
     * @var string true
     */
    public $IncludeFile;

    /**
     * @var integer 2
     */
    public $QueryDepth;

    /**
     * @param string $ProjectId 项目ID
     * @param string $LocalPath 目录路径
     * @param string $IncludeFile true
     * @param integer $QueryDepth 2
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

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }

        if (array_key_exists("IncludeFile",$param) and $param["IncludeFile"] !== null) {
            $this->IncludeFile = $param["IncludeFile"];
        }

        if (array_key_exists("QueryDepth",$param) and $param["QueryDepth"] !== null) {
            $this->QueryDepth = $param["QueryDepth"];
        }
    }
}
