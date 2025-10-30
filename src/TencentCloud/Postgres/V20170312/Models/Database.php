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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述数据库详细信息，包括所有者、字符编码等
 *
 * @method string getDatabaseName() 获取数据库名
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名
 * @method string getDatabaseOwner() 获取数据库所有者
 * @method void setDatabaseOwner(string $DatabaseOwner) 设置数据库所有者
 * @method string getEncoding() 获取数据库字符编码
 * @method void setEncoding(string $Encoding) 设置数据库字符编码
 * @method string getCollate() 获取数据库排序规则
 * @method void setCollate(string $Collate) 设置数据库排序规则
 * @method string getCtype() 获取数据库字符分类
 * @method void setCtype(string $Ctype) 设置数据库字符分类
 * @method boolean getAllowConn() 获取数据库是否允许连接
 * @method void setAllowConn(boolean $AllowConn) 设置数据库是否允许连接
 * @method integer getConnLimit() 获取数据库最大连接数，-1表示无限制
 * @method void setConnLimit(integer $ConnLimit) 设置数据库最大连接数，-1表示无限制
 * @method string getPrivileges() 获取数据库权限列表
 * @method void setPrivileges(string $Privileges) 设置数据库权限列表
 */
class Database extends AbstractModel
{
    /**
     * @var string 数据库名
     */
    public $DatabaseName;

    /**
     * @var string 数据库所有者
     */
    public $DatabaseOwner;

    /**
     * @var string 数据库字符编码
     */
    public $Encoding;

    /**
     * @var string 数据库排序规则
     */
    public $Collate;

    /**
     * @var string 数据库字符分类
     */
    public $Ctype;

    /**
     * @var boolean 数据库是否允许连接
     */
    public $AllowConn;

    /**
     * @var integer 数据库最大连接数，-1表示无限制
     */
    public $ConnLimit;

    /**
     * @var string 数据库权限列表
     */
    public $Privileges;

    /**
     * @param string $DatabaseName 数据库名
     * @param string $DatabaseOwner 数据库所有者
     * @param string $Encoding 数据库字符编码
     * @param string $Collate 数据库排序规则
     * @param string $Ctype 数据库字符分类
     * @param boolean $AllowConn 数据库是否允许连接
     * @param integer $ConnLimit 数据库最大连接数，-1表示无限制
     * @param string $Privileges 数据库权限列表
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatabaseOwner",$param) and $param["DatabaseOwner"] !== null) {
            $this->DatabaseOwner = $param["DatabaseOwner"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("Collate",$param) and $param["Collate"] !== null) {
            $this->Collate = $param["Collate"];
        }

        if (array_key_exists("Ctype",$param) and $param["Ctype"] !== null) {
            $this->Ctype = $param["Ctype"];
        }

        if (array_key_exists("AllowConn",$param) and $param["AllowConn"] !== null) {
            $this->AllowConn = $param["AllowConn"];
        }

        if (array_key_exists("ConnLimit",$param) and $param["ConnLimit"] !== null) {
            $this->ConnLimit = $param["ConnLimit"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }
    }
}
