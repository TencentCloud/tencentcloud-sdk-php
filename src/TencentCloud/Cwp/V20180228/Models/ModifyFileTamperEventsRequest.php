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
 * ModifyFileTamperEvents请求参数结构体
 *
 * @method integer getStatus() 获取Status 1 -- 加白 2 -- 删除 3 - 忽略
 * @method void setStatus(integer $Status) 设置Status 1 -- 加白 2 -- 删除 3 - 忽略
 * @method array getIds() 获取对应事件id
 * @method void setIds(array $Ids) 设置对应事件id
 */
class ModifyFileTamperEventsRequest extends AbstractModel
{
    /**
     * @var integer Status 1 -- 加白 2 -- 删除 3 - 忽略
     */
    public $Status;

    /**
     * @var array 对应事件id
     */
    public $Ids;

    /**
     * @param integer $Status Status 1 -- 加白 2 -- 删除 3 - 忽略
     * @param array $Ids 对应事件id
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
    }
}
