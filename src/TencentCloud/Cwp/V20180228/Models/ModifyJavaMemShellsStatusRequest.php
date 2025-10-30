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
 * ModifyJavaMemShellsStatus请求参数结构体
 *
 * @method integer getStatus() 获取目标处理状态： 0 - 待处理 1 - 已加白 2 - 已删除 3 - 已忽略 4 - 已手动处理
 * @method void setStatus(integer $Status) 设置目标处理状态： 0 - 待处理 1 - 已加白 2 - 已删除 3 - 已忽略 4 - 已手动处理
 * @method array getIds() 获取事件Id数组
 * @method void setIds(array $Ids) 设置事件Id数组
 * @method boolean getUpdateAll() 获取是否更新全部，只支持忽略、已处理、删除
 * @method void setUpdateAll(boolean $UpdateAll) 设置是否更新全部，只支持忽略、已处理、删除
 */
class ModifyJavaMemShellsStatusRequest extends AbstractModel
{
    /**
     * @var integer 目标处理状态： 0 - 待处理 1 - 已加白 2 - 已删除 3 - 已忽略 4 - 已手动处理
     */
    public $Status;

    /**
     * @var array 事件Id数组
     */
    public $Ids;

    /**
     * @var boolean 是否更新全部，只支持忽略、已处理、删除
     */
    public $UpdateAll;

    /**
     * @param integer $Status 目标处理状态： 0 - 待处理 1 - 已加白 2 - 已删除 3 - 已忽略 4 - 已手动处理
     * @param array $Ids 事件Id数组
     * @param boolean $UpdateAll 是否更新全部，只支持忽略、已处理、删除
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("UpdateAll",$param) and $param["UpdateAll"] !== null) {
            $this->UpdateAll = $param["UpdateAll"];
        }
    }
}
