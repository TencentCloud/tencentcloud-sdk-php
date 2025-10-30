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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUDFPolicy请求参数结构体
 *
 * @method string getName() 获取UDF名称
 * @method void setName(string $Name) 设置UDF名称
 * @method string getDatabaseName() 获取数据库名
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名
 * @method string getCatalogName() 获取数据目录名
 * @method void setCatalogName(string $CatalogName) 设置数据目录名
 * @method array getUDFPolicyInfos() 获取UDF权限信息
 * @method void setUDFPolicyInfos(array $UDFPolicyInfos) 设置UDF权限信息
 */
class UpdateUDFPolicyRequest extends AbstractModel
{
    /**
     * @var string UDF名称
     */
    public $Name;

    /**
     * @var string 数据库名
     */
    public $DatabaseName;

    /**
     * @var string 数据目录名
     */
    public $CatalogName;

    /**
     * @var array UDF权限信息
     */
    public $UDFPolicyInfos;

    /**
     * @param string $Name UDF名称
     * @param string $DatabaseName 数据库名
     * @param string $CatalogName 数据目录名
     * @param array $UDFPolicyInfos UDF权限信息
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("UDFPolicyInfos",$param) and $param["UDFPolicyInfos"] !== null) {
            $this->UDFPolicyInfos = [];
            foreach ($param["UDFPolicyInfos"] as $key => $value){
                $obj = new UDFPolicyInfo();
                $obj->deserialize($value);
                array_push($this->UDFPolicyInfos, $obj);
            }
        }
    }
}
