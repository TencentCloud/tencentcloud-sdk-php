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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBaseBackupExpireTime请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。
 * @method string getBaseBackupId() 获取基础备份ID。
 * @method void setBaseBackupId(string $BaseBackupId) 设置基础备份ID。
 * @method string getNewExpireTime() 获取新过期时间。
 * @method void setNewExpireTime(string $NewExpireTime) 设置新过期时间。
 */
class ModifyBaseBackupExpireTimeRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $DBInstanceId;

    /**
     * @var string 基础备份ID。
     */
    public $BaseBackupId;

    /**
     * @var string 新过期时间。
     */
    public $NewExpireTime;

    /**
     * @param string $DBInstanceId 实例ID。
     * @param string $BaseBackupId 基础备份ID。
     * @param string $NewExpireTime 新过期时间。
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("BaseBackupId",$param) and $param["BaseBackupId"] !== null) {
            $this->BaseBackupId = $param["BaseBackupId"];
        }

        if (array_key_exists("NewExpireTime",$param) and $param["NewExpireTime"] !== null) {
            $this->NewExpireTime = $param["NewExpireTime"];
        }
    }
}
