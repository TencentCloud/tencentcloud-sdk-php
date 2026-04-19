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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RevokeDataSourceAuthorization请求参数结构体
 *
 * @method string getDataSourceId() 获取数据源id
 * @method void setDataSourceId(string $DataSourceId) 设置数据源id
 * @method string getRevokeProjectId() 获取回收的项目id，与RevokeUser参数只能选填一个，或者都不传当RevokeProjectId与RevokeUser都不传时，表示回收当前数据源所有权限（数据源为项目共享时，不回收当前数据源创建项目下所有用户对该数据源的权限，当数据源为个人和项目管理员共享时，不回收当前数据源创建项目下数据源创建用户和管理员的权限）
 * @method void setRevokeProjectId(string $RevokeProjectId) 设置回收的项目id，与RevokeUser参数只能选填一个，或者都不传当RevokeProjectId与RevokeUser都不传时，表示回收当前数据源所有权限（数据源为项目共享时，不回收当前数据源创建项目下所有用户对该数据源的权限，当数据源为个人和项目管理员共享时，不回收当前数据源创建项目下数据源创建用户和管理员的权限）
 * @method string getRevokeUser() 获取回收项目下用户列表，格式为：项目id_用户id
与RevokeProjectId参数只能选填一个，或者都不传
当RevokeProjectId与RevokeUser都不传时，表示回收当前数据源所有权限（
数据源为项目共享时，不回收当前数据源创建项目下所有用户对该数据源的权限，当数据源为个人和项目管理员共享时，不回收当前数据源创建项目下数据源创建用户和管理员的权限）


 * @method void setRevokeUser(string $RevokeUser) 设置回收项目下用户列表，格式为：项目id_用户id
与RevokeProjectId参数只能选填一个，或者都不传
当RevokeProjectId与RevokeUser都不传时，表示回收当前数据源所有权限（
数据源为项目共享时，不回收当前数据源创建项目下所有用户对该数据源的权限，当数据源为个人和项目管理员共享时，不回收当前数据源创建项目下数据源创建用户和管理员的权限）
 */
class RevokeDataSourceAuthorizationRequest extends AbstractModel
{
    /**
     * @var string 数据源id
     */
    public $DataSourceId;

    /**
     * @var string 回收的项目id，与RevokeUser参数只能选填一个，或者都不传当RevokeProjectId与RevokeUser都不传时，表示回收当前数据源所有权限（数据源为项目共享时，不回收当前数据源创建项目下所有用户对该数据源的权限，当数据源为个人和项目管理员共享时，不回收当前数据源创建项目下数据源创建用户和管理员的权限）
     */
    public $RevokeProjectId;

    /**
     * @var string 回收项目下用户列表，格式为：项目id_用户id
与RevokeProjectId参数只能选填一个，或者都不传
当RevokeProjectId与RevokeUser都不传时，表示回收当前数据源所有权限（
数据源为项目共享时，不回收当前数据源创建项目下所有用户对该数据源的权限，当数据源为个人和项目管理员共享时，不回收当前数据源创建项目下数据源创建用户和管理员的权限）


     */
    public $RevokeUser;

    /**
     * @param string $DataSourceId 数据源id
     * @param string $RevokeProjectId 回收的项目id，与RevokeUser参数只能选填一个，或者都不传当RevokeProjectId与RevokeUser都不传时，表示回收当前数据源所有权限（数据源为项目共享时，不回收当前数据源创建项目下所有用户对该数据源的权限，当数据源为个人和项目管理员共享时，不回收当前数据源创建项目下数据源创建用户和管理员的权限）
     * @param string $RevokeUser 回收项目下用户列表，格式为：项目id_用户id
与RevokeProjectId参数只能选填一个，或者都不传
当RevokeProjectId与RevokeUser都不传时，表示回收当前数据源所有权限（
数据源为项目共享时，不回收当前数据源创建项目下所有用户对该数据源的权限，当数据源为个人和项目管理员共享时，不回收当前数据源创建项目下数据源创建用户和管理员的权限）
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
        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("RevokeProjectId",$param) and $param["RevokeProjectId"] !== null) {
            $this->RevokeProjectId = $param["RevokeProjectId"];
        }

        if (array_key_exists("RevokeUser",$param) and $param["RevokeUser"] !== null) {
            $this->RevokeUser = $param["RevokeUser"];
        }
    }
}
