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
 * UnlockAccount请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。	
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。	
 * @method string getUserName() 获取账号名称。
 * @method void setUserName(string $UserName) 设置账号名称。
 */
class UnlockAccountRequest extends AbstractModel
{
    /**
     * @var string 实例ID。	
     */
    public $DBInstanceId;

    /**
     * @var string 账号名称。
     */
    public $UserName;

    /**
     * @param string $DBInstanceId 实例ID。	
     * @param string $UserName 账号名称。
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
