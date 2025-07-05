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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectSecurityGroups请求参数结构体
 *
 * @method integer getProjectId() 获取项目 ID。可通过 [DescribeProjects](https://cloud.tencent.com/document/api/651/78725) 接口获取。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID。可通过 [DescribeProjects](https://cloud.tencent.com/document/api/651/78725) 接口获取。
 */
class DescribeProjectSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var integer 项目 ID。可通过 [DescribeProjects](https://cloud.tencent.com/document/api/651/78725) 接口获取。
     */
    public $ProjectId;

    /**
     * @param integer $ProjectId 项目 ID。可通过 [DescribeProjects](https://cloud.tencent.com/document/api/651/78725) 接口获取。
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
    }
}
