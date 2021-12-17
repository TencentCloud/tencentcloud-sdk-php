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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 磁盘操作限制列表详细信息
 *
 * @method string getDiskId() 获取云硬盘ID。
 * @method void setDiskId(string $DiskId) 设置云硬盘ID。
 * @method array getDeniedActions() 获取操作限制列表。
 * @method void setDeniedActions(array $DeniedActions) 设置操作限制列表。
 */
class DiskDeniedActions extends AbstractModel
{
    /**
     * @var string 云硬盘ID。
     */
    public $DiskId;

    /**
     * @var array 操作限制列表。
     */
    public $DeniedActions;

    /**
     * @param string $DiskId 云硬盘ID。
     * @param array $DeniedActions 操作限制列表。
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DeniedActions",$param) and $param["DeniedActions"] !== null) {
            $this->DeniedActions = [];
            foreach ($param["DeniedActions"] as $key => $value){
                $obj = new DeniedAction();
                $obj->deserialize($value);
                array_push($this->DeniedActions, $obj);
            }
        }
    }
}
