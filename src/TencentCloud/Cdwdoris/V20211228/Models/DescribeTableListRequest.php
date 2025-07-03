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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTableList请求参数结构体
 *
 * @method string getInstanceId() 获取资源ID，建表所用的TCHouse-D资源ID。
 * @method void setInstanceId(string $InstanceId) 设置资源ID，建表所用的TCHouse-D资源ID。
 * @method string getDbName() 获取需要获取表列表的库
 * @method void setDbName(string $DbName) 设置需要获取表列表的库
 * @method string getUserName() 获取使用该用户进行操作，该用户需要有对应的权限。如果该TCHouse-D集群使用CAM用户注册内核账户，则不需要填写
 * @method void setUserName(string $UserName) 设置使用该用户进行操作，该用户需要有对应的权限。如果该TCHouse-D集群使用CAM用户注册内核账户，则不需要填写
 * @method string getPassWord() 获取用户对应的密码。如果该TCHouse-D集群使用CAM用户注册内核账户，则不需要填写
 * @method void setPassWord(string $PassWord) 设置用户对应的密码。如果该TCHouse-D集群使用CAM用户注册内核账户，则不需要填写
 * @method string getCatalogName() 获取查询库所在的数据源，不填则默认为内部数据源（internal）。
 * @method void setCatalogName(string $CatalogName) 设置查询库所在的数据源，不填则默认为内部数据源（internal）。
 */
class DescribeTableListRequest extends AbstractModel
{
    /**
     * @var string 资源ID，建表所用的TCHouse-D资源ID。
     */
    public $InstanceId;

    /**
     * @var string 需要获取表列表的库
     */
    public $DbName;

    /**
     * @var string 使用该用户进行操作，该用户需要有对应的权限。如果该TCHouse-D集群使用CAM用户注册内核账户，则不需要填写
     */
    public $UserName;

    /**
     * @var string 用户对应的密码。如果该TCHouse-D集群使用CAM用户注册内核账户，则不需要填写
     */
    public $PassWord;

    /**
     * @var string 查询库所在的数据源，不填则默认为内部数据源（internal）。
     */
    public $CatalogName;

    /**
     * @param string $InstanceId 资源ID，建表所用的TCHouse-D资源ID。
     * @param string $DbName 需要获取表列表的库
     * @param string $UserName 使用该用户进行操作，该用户需要有对应的权限。如果该TCHouse-D集群使用CAM用户注册内核账户，则不需要填写
     * @param string $PassWord 用户对应的密码。如果该TCHouse-D集群使用CAM用户注册内核账户，则不需要填写
     * @param string $CatalogName 查询库所在的数据源，不填则默认为内部数据源（internal）。
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

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }
    }
}
