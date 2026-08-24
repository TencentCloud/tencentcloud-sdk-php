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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 保护组操作掩码
 *
 * @method string getProtectGroupId() 获取保护组ID
 * @method void setProtectGroupId(string $ProtectGroupId) 设置保护组ID
 * @method array getDeniedActions() 获取被禁止的操作列表（Action名称数组）
 * @method void setDeniedActions(array $DeniedActions) 设置被禁止的操作列表（Action名称数组）
 */
class ProtectGroupDeniedAction extends AbstractModel
{
    /**
     * @var string 保护组ID
     */
    public $ProtectGroupId;

    /**
     * @var array 被禁止的操作列表（Action名称数组）
     */
    public $DeniedActions;

    /**
     * @param string $ProtectGroupId 保护组ID
     * @param array $DeniedActions 被禁止的操作列表（Action名称数组）
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
        if (array_key_exists("ProtectGroupId",$param) and $param["ProtectGroupId"] !== null) {
            $this->ProtectGroupId = $param["ProtectGroupId"];
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
