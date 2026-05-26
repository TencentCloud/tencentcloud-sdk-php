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
 * ModifyBackupExpireTime请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getExpireTime() 获取<p>过期时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>过期时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method array getBackupIds() 获取<p>备份ID</p>
 * @method void setBackupIds(array $BackupIds) 设置<p>备份ID</p>
 */
class ModifyBackupExpireTimeRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>过期时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $ExpireTime;

    /**
     * @var array <p>备份ID</p>
     */
    public $BackupIds;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $ExpireTime <p>过期时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param array $BackupIds <p>备份ID</p>
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

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("BackupIds",$param) and $param["BackupIds"] !== null) {
            $this->BackupIds = $param["BackupIds"];
        }
    }
}
