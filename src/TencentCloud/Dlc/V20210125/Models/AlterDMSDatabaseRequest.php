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
 * AlterDMSDatabase请求参数结构体
 *
 * @method string getCurrentName() 获取当前名称
 * @method void setCurrentName(string $CurrentName) 设置当前名称
 * @method string getSchemaName() 获取schema名称
 * @method void setSchemaName(string $SchemaName) 设置schema名称
 * @method string getLocation() 获取路径
 * @method void setLocation(string $Location) 设置路径
 * @method Asset getAsset() 获取基础对象
 * @method void setAsset(Asset $Asset) 设置基础对象
 */
class AlterDMSDatabaseRequest extends AbstractModel
{
    /**
     * @var string 当前名称
     */
    public $CurrentName;

    /**
     * @var string schema名称
     */
    public $SchemaName;

    /**
     * @var string 路径
     */
    public $Location;

    /**
     * @var Asset 基础对象
     */
    public $Asset;

    /**
     * @param string $CurrentName 当前名称
     * @param string $SchemaName schema名称
     * @param string $Location 路径
     * @param Asset $Asset 基础对象
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
        if (array_key_exists("CurrentName",$param) and $param["CurrentName"] !== null) {
            $this->CurrentName = $param["CurrentName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = new Asset();
            $this->Asset->deserialize($param["Asset"]);
        }
    }
}
