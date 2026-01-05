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
 * AuthorizeDataSource请求参数结构体
 *
 * @method string getDataSourceId() 获取数据源ID
 * @method void setDataSourceId(string $DataSourceId) 设置数据源ID
 * @method string getAuthProjectId() 获取授权给的目标项目id
 * @method void setAuthProjectId(string $AuthProjectId) 设置授权给的目标项目id
 * @method array getAuthUsers() 获取授权项目下用户列表，格式为：项目id_用户id
与AuthProjectId参数只能选填一个
当授权给多个对象时，项目id必须一致
 * @method void setAuthUsers(array $AuthUsers) 设置授权项目下用户列表，格式为：项目id_用户id
与AuthProjectId参数只能选填一个
当授权给多个对象时，项目id必须一致
 */
class AuthorizeDataSourceRequest extends AbstractModel
{
    /**
     * @var string 数据源ID
     */
    public $DataSourceId;

    /**
     * @var string 授权给的目标项目id
     */
    public $AuthProjectId;

    /**
     * @var array 授权项目下用户列表，格式为：项目id_用户id
与AuthProjectId参数只能选填一个
当授权给多个对象时，项目id必须一致
     */
    public $AuthUsers;

    /**
     * @param string $DataSourceId 数据源ID
     * @param string $AuthProjectId 授权给的目标项目id
     * @param array $AuthUsers 授权项目下用户列表，格式为：项目id_用户id
与AuthProjectId参数只能选填一个
当授权给多个对象时，项目id必须一致
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

        if (array_key_exists("AuthProjectId",$param) and $param["AuthProjectId"] !== null) {
            $this->AuthProjectId = $param["AuthProjectId"];
        }

        if (array_key_exists("AuthUsers",$param) and $param["AuthUsers"] !== null) {
            $this->AuthUsers = $param["AuthUsers"];
        }
    }
}
