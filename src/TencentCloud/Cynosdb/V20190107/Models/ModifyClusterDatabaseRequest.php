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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterDatabase请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getDbName() 获取数据库名
 * @method void setDbName(string $DbName) 设置数据库名
 * @method array getNewUserHostPrivileges() 获取新授权用户主机权限
 * @method void setNewUserHostPrivileges(array $NewUserHostPrivileges) 设置新授权用户主机权限
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 * @method array getOldUserHostPrivileges() 获取历史授权用户主机权限
 * @method void setOldUserHostPrivileges(array $OldUserHostPrivileges) 设置历史授权用户主机权限
 */
class ModifyClusterDatabaseRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 数据库名
     */
    public $DbName;

    /**
     * @var array 新授权用户主机权限
     */
    public $NewUserHostPrivileges;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @var array 历史授权用户主机权限
     */
    public $OldUserHostPrivileges;

    /**
     * @param string $ClusterId 集群ID
     * @param string $DbName 数据库名
     * @param array $NewUserHostPrivileges 新授权用户主机权限
     * @param string $Description 备注
     * @param array $OldUserHostPrivileges 历史授权用户主机权限
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("NewUserHostPrivileges",$param) and $param["NewUserHostPrivileges"] !== null) {
            $this->NewUserHostPrivileges = [];
            foreach ($param["NewUserHostPrivileges"] as $key => $value){
                $obj = new UserHostPrivilege();
                $obj->deserialize($value);
                array_push($this->NewUserHostPrivileges, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OldUserHostPrivileges",$param) and $param["OldUserHostPrivileges"] !== null) {
            $this->OldUserHostPrivileges = [];
            foreach ($param["OldUserHostPrivileges"] as $key => $value){
                $obj = new UserHostPrivilege();
                $obj->deserialize($value);
                array_push($this->OldUserHostPrivileges, $obj);
            }
        }
    }
}
