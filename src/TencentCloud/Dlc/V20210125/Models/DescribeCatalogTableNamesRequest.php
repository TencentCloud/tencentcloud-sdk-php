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
 * DescribeCatalogTableNames请求参数结构体
 *
 * @method string getCatalogName() 获取<p>Catalog名称</p>
 * @method void setCatalogName(string $CatalogName) 设置<p>Catalog名称</p>
 * @method string getSchemaName() 获取<p>Schema名称</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>Schema名称</p>
 */
class DescribeCatalogTableNamesRequest extends AbstractModel
{
    /**
     * @var string <p>Catalog名称</p>
     */
    public $CatalogName;

    /**
     * @var string <p>Schema名称</p>
     */
    public $SchemaName;

    /**
     * @param string $CatalogName <p>Catalog名称</p>
     * @param string $SchemaName <p>Schema名称</p>
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
        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }
    }
}
