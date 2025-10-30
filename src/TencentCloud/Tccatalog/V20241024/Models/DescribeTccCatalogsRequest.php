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
namespace TencentCloud\Tccatalog\V20241024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTccCatalogs请求参数结构体
 *
 * @method string getCatalogId() 获取数据目录Id
 * @method void setCatalogId(string $CatalogId) 设置数据目录Id
 * @method string getName() 获取数据目录名称
 * @method void setName(string $Name) 设置数据目录名称
 * @method string getType() 获取数据目录类型,当前支持：TCC-HIVE
 * @method void setType(string $Type) 设置数据目录类型,当前支持：TCC-HIVE
 * @method integer getStatus() 获取状态信息：注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5
 * @method void setStatus(integer $Status) 设置状态信息：注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5
 * @method string getOperator() 获取操作人uin
 * @method void setOperator(string $Operator) 设置操作人uin
 */
class DescribeTccCatalogsRequest extends AbstractModel
{
    /**
     * @var string 数据目录Id
     */
    public $CatalogId;

    /**
     * @var string 数据目录名称
     */
    public $Name;

    /**
     * @var string 数据目录类型,当前支持：TCC-HIVE
     */
    public $Type;

    /**
     * @var integer 状态信息：注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5
     */
    public $Status;

    /**
     * @var string 操作人uin
     */
    public $Operator;

    /**
     * @param string $CatalogId 数据目录Id
     * @param string $Name 数据目录名称
     * @param string $Type 数据目录类型,当前支持：TCC-HIVE
     * @param integer $Status 状态信息：注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5
     * @param string $Operator 操作人uin
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
        if (array_key_exists("CatalogId",$param) and $param["CatalogId"] !== null) {
            $this->CatalogId = $param["CatalogId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
