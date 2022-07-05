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
 * CreateDMSDatabase请求参数结构体
 *
 * @method Asset getAsset() 获取基础元数据对象
 * @method void setAsset(Asset $Asset) 设置基础元数据对象
 * @method string getSchemaName() 获取Schema目录
 * @method void setSchemaName(string $SchemaName) 设置Schema目录
 * @method string getLocation() 获取Db存储路径
 * @method void setLocation(string $Location) 设置Db存储路径
 * @method string getName() 获取数据库名称
 * @method void setName(string $Name) 设置数据库名称
 */
class CreateDMSDatabaseRequest extends AbstractModel
{
    /**
     * @var Asset 基础元数据对象
     */
    public $Asset;

    /**
     * @var string Schema目录
     */
    public $SchemaName;

    /**
     * @var string Db存储路径
     */
    public $Location;

    /**
     * @var string 数据库名称
     */
    public $Name;

    /**
     * @param Asset $Asset 基础元数据对象
     * @param string $SchemaName Schema目录
     * @param string $Location Db存储路径
     * @param string $Name 数据库名称
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
        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = new Asset();
            $this->Asset->deserialize($param["Asset"]);
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
