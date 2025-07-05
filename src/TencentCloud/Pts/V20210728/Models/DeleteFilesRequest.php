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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteFiles请求参数结构体
 *
 * @method string getProjectId() 获取项目 ID
 * @method void setProjectId(string $ProjectId) 设置项目 ID
 * @method array getFileIds() 获取待删除的文件的 ID（所有文件 ID 可从接口 DescribeFiles 获取）
 * @method void setFileIds(array $FileIds) 设置待删除的文件的 ID（所有文件 ID 可从接口 DescribeFiles 获取）
 */
class DeleteFilesRequest extends AbstractModel
{
    /**
     * @var string 项目 ID
     */
    public $ProjectId;

    /**
     * @var array 待删除的文件的 ID（所有文件 ID 可从接口 DescribeFiles 获取）
     */
    public $FileIds;

    /**
     * @param string $ProjectId 项目 ID
     * @param array $FileIds 待删除的文件的 ID（所有文件 ID 可从接口 DescribeFiles 获取）
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

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }
    }
}
