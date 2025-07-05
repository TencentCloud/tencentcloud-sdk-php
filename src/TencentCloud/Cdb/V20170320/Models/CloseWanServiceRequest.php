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
 * CloseWanService请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。可传入只读组 ID 关闭只读组外网访问。 
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。可传入只读组 ID 关闭只读组外网访问。 
 * @method string getOpResourceId() 获取变更云盘版实例只读组时，InstanceId 传实例 ID，需要额外指定该参数表示操作只读组。如果操作读写节点则不需指定该参数。
 * @method void setOpResourceId(string $OpResourceId) 设置变更云盘版实例只读组时，InstanceId 传实例 ID，需要额外指定该参数表示操作只读组。如果操作读写节点则不需指定该参数。
 */
class CloseWanServiceRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。可传入只读组 ID 关闭只读组外网访问。 
     */
    public $InstanceId;

    /**
     * @var string 变更云盘版实例只读组时，InstanceId 传实例 ID，需要额外指定该参数表示操作只读组。如果操作读写节点则不需指定该参数。
     */
    public $OpResourceId;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。可传入只读组 ID 关闭只读组外网访问。 
     * @param string $OpResourceId 变更云盘版实例只读组时，InstanceId 传实例 ID，需要额外指定该参数表示操作只读组。如果操作读写节点则不需指定该参数。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OpResourceId",$param) and $param["OpResourceId"] !== null) {
            $this->OpResourceId = $param["OpResourceId"];
        }
    }
}
