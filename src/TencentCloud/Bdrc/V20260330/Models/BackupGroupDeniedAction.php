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
 * 备份组的操作掩码
 *
 * @method string getBackupGroupId() 获取备份组ID
 * @method void setBackupGroupId(string $BackupGroupId) 设置备份组ID
 * @method array getDeniedActions() 获取拒绝的操作
 * @method void setDeniedActions(array $DeniedActions) 设置拒绝的操作
 */
class BackupGroupDeniedAction extends AbstractModel
{
    /**
     * @var string 备份组ID
     */
    public $BackupGroupId;

    /**
     * @var array 拒绝的操作
     */
    public $DeniedActions;

    /**
     * @param string $BackupGroupId 备份组ID
     * @param array $DeniedActions 拒绝的操作
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
        if (array_key_exists("BackupGroupId",$param) and $param["BackupGroupId"] !== null) {
            $this->BackupGroupId = $param["BackupGroupId"];
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
