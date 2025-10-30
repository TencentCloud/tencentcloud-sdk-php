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
 * Tcc数据目录信息集合
 *
 * @method string getId() 获取数据目录唯一id
 * @method void setId(string $Id) 设置数据目录唯一id
 * @method string getName() 获取数据目录名字
 * @method void setName(string $Name) 设置数据目录名字
 * @method string getType() 获取数据目录类型,当前支持：TCC-HIVE
 * @method void setType(string $Type) 设置数据目录类型,当前支持：TCC-HIVE
 * @method integer getStatus() 获取状态信息：注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5
 * @method void setStatus(integer $Status) 设置状态信息：注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5
 * @method string getOperator() 获取操作人uin
 * @method void setOperator(string $Operator) 设置操作人uin
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class TccCatalogSet extends AbstractModel
{
    /**
     * @var string 数据目录唯一id
     */
    public $Id;

    /**
     * @var string 数据目录名字
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
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $Id 数据目录唯一id
     * @param string $Name 数据目录名字
     * @param string $Type 数据目录类型,当前支持：TCC-HIVE
     * @param integer $Status 状态信息：注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5
     * @param string $Operator 操作人uin
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
