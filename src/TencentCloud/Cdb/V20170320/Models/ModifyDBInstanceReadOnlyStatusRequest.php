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
 * ModifyDBInstanceReadOnlyStatus请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同，可使用<a href="https://cloud.tencent.com/document/api/236/15872">查询实例列表</a> 接口获取，其值为输出参数中字段 InstanceId 的值。此接口不支持设置云盘版实例为只读。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同，可使用<a href="https://cloud.tencent.com/document/api/236/15872">查询实例列表</a> 接口获取，其值为输出参数中字段 InstanceId 的值。此接口不支持设置云盘版实例为只读。</p>
 * @method integer getReadOnly() 获取<p>是否设置为只读。其中：1表示设置实例为只读，0表示解除只读状态</p>
 * @method void setReadOnly(integer $ReadOnly) 设置<p>是否设置为只读。其中：1表示设置实例为只读，0表示解除只读状态</p>
 */
class ModifyDBInstanceReadOnlyStatusRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同，可使用<a href="https://cloud.tencent.com/document/api/236/15872">查询实例列表</a> 接口获取，其值为输出参数中字段 InstanceId 的值。此接口不支持设置云盘版实例为只读。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>是否设置为只读。其中：1表示设置实例为只读，0表示解除只读状态</p>
     */
    public $ReadOnly;

    /**
     * @param string $InstanceId <p>实例ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同，可使用<a href="https://cloud.tencent.com/document/api/236/15872">查询实例列表</a> 接口获取，其值为输出参数中字段 InstanceId 的值。此接口不支持设置云盘版实例为只读。</p>
     * @param integer $ReadOnly <p>是否设置为只读。其中：1表示设置实例为只读，0表示解除只读状态</p>
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

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }
    }
}
