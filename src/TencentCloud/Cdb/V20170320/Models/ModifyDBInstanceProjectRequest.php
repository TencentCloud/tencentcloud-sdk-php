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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceProject请求参数结构体
 *
 * @method array getInstanceIds() 获取实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
说明：可输入多个实例 ID 进行修改，json 格式如下。
[
    "cdb-30z11v8s",
    "cdb-93h11efg"
  ]
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
说明：可输入多个实例 ID 进行修改，json 格式如下。
[
    "cdb-30z11v8s",
    "cdb-93h11efg"
  ]
 * @method integer getNewProjectId() 获取实例所属项目的 ID，可在账号中心下的项目管理页面查询。
说明：此项为必填。
 * @method void setNewProjectId(integer $NewProjectId) 设置实例所属项目的 ID，可在账号中心下的项目管理页面查询。
说明：此项为必填。
 */
class ModifyDBInstanceProjectRequest extends AbstractModel
{
    /**
     * @var array 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
说明：可输入多个实例 ID 进行修改，json 格式如下。
[
    "cdb-30z11v8s",
    "cdb-93h11efg"
  ]
     */
    public $InstanceIds;

    /**
     * @var integer 实例所属项目的 ID，可在账号中心下的项目管理页面查询。
说明：此项为必填。
     */
    public $NewProjectId;

    /**
     * @param array $InstanceIds 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
说明：可输入多个实例 ID 进行修改，json 格式如下。
[
    "cdb-30z11v8s",
    "cdb-93h11efg"
  ]
     * @param integer $NewProjectId 实例所属项目的 ID，可在账号中心下的项目管理页面查询。
说明：此项为必填。
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

        if (array_key_exists("NewProjectId",$param) and $param["NewProjectId"] !== null) {
            $this->NewProjectId = $param["NewProjectId"];
        }
    }
}
