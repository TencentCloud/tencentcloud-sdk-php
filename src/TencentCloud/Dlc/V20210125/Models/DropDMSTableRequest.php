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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DropDMSTable请求参数结构体
 *
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method string getName() 获取表名称
 * @method void setName(string $Name) 设置表名称
 * @method boolean getDeleteData() 获取是否删除数据
 * @method void setDeleteData(boolean $DeleteData) 设置是否删除数据
 * @method KVPair getEnvProps() 获取环境属性
 * @method void setEnvProps(KVPair $EnvProps) 设置环境属性
 */
class DropDMSTableRequest extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var string 表名称
     */
    public $Name;

    /**
     * @var boolean 是否删除数据
     */
    public $DeleteData;

    /**
     * @var KVPair 环境属性
     */
    public $EnvProps;

    /**
     * @param string $DbName 数据库名称
     * @param string $Name 表名称
     * @param boolean $DeleteData 是否删除数据
     * @param KVPair $EnvProps 环境属性
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DeleteData",$param) and $param["DeleteData"] !== null) {
            $this->DeleteData = $param["DeleteData"];
        }

        if (array_key_exists("EnvProps",$param) and $param["EnvProps"] !== null) {
            $this->EnvProps = new KVPair();
            $this->EnvProps->deserialize($param["EnvProps"]);
        }
    }
}
