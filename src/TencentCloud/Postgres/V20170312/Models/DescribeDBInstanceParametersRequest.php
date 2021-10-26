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
 * DescribeDBInstanceParameters请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID
 * @method string getParamName() 获取查询指定参数详情。ParamName为空或不传，默认返回全部参数列表
 * @method void setParamName(string $ParamName) 设置查询指定参数详情。ParamName为空或不传，默认返回全部参数列表
 */
class DescribeDBInstanceParametersRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $DBInstanceId;

    /**
     * @var string 查询指定参数详情。ParamName为空或不传，默认返回全部参数列表
     */
    public $ParamName;

    /**
     * @param string $DBInstanceId 实例ID
     * @param string $ParamName 查询指定参数详情。ParamName为空或不传，默认返回全部参数列表
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

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }
    }
}
