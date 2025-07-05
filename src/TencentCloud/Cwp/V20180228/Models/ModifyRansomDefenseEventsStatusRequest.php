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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRansomDefenseEventsStatus请求参数结构体
 *
 * @method array getIds() 获取需要修改的事件id 数组，支持批量
 * @method void setIds(array $Ids) 设置需要修改的事件id 数组，支持批量
 * @method integer getStatus() 获取操作 0待处理，1已处理,2信任,9:删除记录
 * @method void setStatus(integer $Status) 设置操作 0待处理，1已处理,2信任,9:删除记录
 * @method boolean getAll() 获取是否更新所有同路径事件
 * @method void setAll(boolean $All) 设置是否更新所有同路径事件
 */
class ModifyRansomDefenseEventsStatusRequest extends AbstractModel
{
    /**
     * @var array 需要修改的事件id 数组，支持批量
     */
    public $Ids;

    /**
     * @var integer 操作 0待处理，1已处理,2信任,9:删除记录
     */
    public $Status;

    /**
     * @var boolean 是否更新所有同路径事件
     */
    public $All;

    /**
     * @param array $Ids 需要修改的事件id 数组，支持批量
     * @param integer $Status 操作 0待处理，1已处理,2信任,9:删除记录
     * @param boolean $All 是否更新所有同路径事件
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }
    }
}
