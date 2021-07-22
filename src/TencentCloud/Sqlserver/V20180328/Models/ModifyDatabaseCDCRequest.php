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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDatabaseCDC请求参数结构体
 *
 * @method array getDBNames() 获取数据库名数组
 * @method void setDBNames(array $DBNames) 设置数据库名数组
 * @method string getModifyType() 获取开启、关闭数据库CDC功能 enable；开启，disable：关闭
 * @method void setModifyType(string $ModifyType) 设置开启、关闭数据库CDC功能 enable；开启，disable：关闭
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 */
class ModifyDatabaseCDCRequest extends AbstractModel
{
    /**
     * @var array 数据库名数组
     */
    public $DBNames;

    /**
     * @var string 开启、关闭数据库CDC功能 enable；开启，disable：关闭
     */
    public $ModifyType;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @param array $DBNames 数据库名数组
     * @param string $ModifyType 开启、关闭数据库CDC功能 enable；开启，disable：关闭
     * @param string $InstanceId 实例ID
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
        if (array_key_exists("DBNames",$param) and $param["DBNames"] !== null) {
            $this->DBNames = $param["DBNames"];
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
