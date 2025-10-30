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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssignProject请求参数结构体
 *
 * @method array getInstanceIds() 获取实例 ID 列表，请登录[MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID 列表，请登录[MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method integer getProjectId() 获取项目ID，用户已创建项目的唯一ID。请在控制台账号中心的[项目管理](https://console.cloud.tencent.com/project)中复制项目 ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID，用户已创建项目的唯一ID。请在控制台账号中心的[项目管理](https://console.cloud.tencent.com/project)中复制项目 ID。
 */
class AssignProjectRequest extends AbstractModel
{
    /**
     * @var array 实例 ID 列表，请登录[MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     */
    public $InstanceIds;

    /**
     * @var integer 项目ID，用户已创建项目的唯一ID。请在控制台账号中心的[项目管理](https://console.cloud.tencent.com/project)中复制项目 ID。
     */
    public $ProjectId;

    /**
     * @param array $InstanceIds 实例 ID 列表，请登录[MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     * @param integer $ProjectId 项目ID，用户已创建项目的唯一ID。请在控制台账号中心的[项目管理](https://console.cloud.tencent.com/project)中复制项目 ID。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
