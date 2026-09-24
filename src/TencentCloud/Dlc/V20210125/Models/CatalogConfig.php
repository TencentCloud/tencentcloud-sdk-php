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
 * 数据目录配置
 *
 * @method string getId() 获取<p>数据目录唯一 ID</p>
 * @method void setId(string $Id) 设置<p>数据目录唯一 ID</p>
 * @method string getName() 获取<p>数据目录名字</p>
 * @method void setName(string $Name) 设置<p>数据目录名字</p>
 * @method string getType() 获取<p>数据目录类型</p><p>枚举值：</p><ul><li>LAKEHOUSE： LAKEHOUSE类型</li></ul>
 * @method void setType(string $Type) 设置<p>数据目录类型</p><p>枚举值：</p><ul><li>LAKEHOUSE： LAKEHOUSE类型</li></ul>
 * @method string getComment() 获取<p>数据目录描述信息</p>
 * @method void setComment(string $Comment) 设置<p>数据目录描述信息</p>
 * @method integer getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>2： 连接成功</li></ul>
 * @method void setStatus(integer $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>2： 连接成功</li></ul>
 * @method array getProperties() 获取<p>数据目录属性</p>
 * @method void setProperties(array $Properties) 设置<p>数据目录属性</p>
 * @method ConnectionConfig getConnection() 获取<p>连接信息</p>
 * @method void setConnection(ConnectionConfig $Connection) 设置<p>连接信息</p>
 * @method string getOperator() 获取<p>操作人 uin</p>
 * @method void setOperator(string $Operator) 设置<p>操作人 uin</p>
 * @method string getMessage() 获取<p>连接日志</p>
 * @method void setMessage(string $Message) 设置<p>连接日志</p>
 * @method Audit getAudit() 获取<p>审计信息</p>
 * @method void setAudit(Audit $Audit) 设置<p>审计信息</p>
 * @method string getCreateTime() 获取<p>创建时间（已废弃）</p><p>参数格式：2024-01-01 12:00:00</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间（已废弃）</p><p>参数格式：2024-01-01 12:00:00</p>
 * @method string getUpdateTime() 获取<p>更新时间（已废弃）</p><p>参数格式：2024-01-01 12:00:00</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间（已废弃）</p><p>参数格式：2024-01-01 12:00:00</p>
 */
class CatalogConfig extends AbstractModel
{
    /**
     * @var string <p>数据目录唯一 ID</p>
     */
    public $Id;

    /**
     * @var string <p>数据目录名字</p>
     */
    public $Name;

    /**
     * @var string <p>数据目录类型</p><p>枚举值：</p><ul><li>LAKEHOUSE： LAKEHOUSE类型</li></ul>
     */
    public $Type;

    /**
     * @var string <p>数据目录描述信息</p>
     */
    public $Comment;

    /**
     * @var integer <p>状态</p><p>枚举值：</p><ul><li>2： 连接成功</li></ul>
     */
    public $Status;

    /**
     * @var array <p>数据目录属性</p>
     */
    public $Properties;

    /**
     * @var ConnectionConfig <p>连接信息</p>
     */
    public $Connection;

    /**
     * @var string <p>操作人 uin</p>
     */
    public $Operator;

    /**
     * @var string <p>连接日志</p>
     */
    public $Message;

    /**
     * @var Audit <p>审计信息</p>
     */
    public $Audit;

    /**
     * @var string <p>创建时间（已废弃）</p><p>参数格式：2024-01-01 12:00:00</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间（已废弃）</p><p>参数格式：2024-01-01 12:00:00</p>
     */
    public $UpdateTime;

    /**
     * @param string $Id <p>数据目录唯一 ID</p>
     * @param string $Name <p>数据目录名字</p>
     * @param string $Type <p>数据目录类型</p><p>枚举值：</p><ul><li>LAKEHOUSE： LAKEHOUSE类型</li></ul>
     * @param string $Comment <p>数据目录描述信息</p>
     * @param integer $Status <p>状态</p><p>枚举值：</p><ul><li>2： 连接成功</li></ul>
     * @param array $Properties <p>数据目录属性</p>
     * @param ConnectionConfig $Connection <p>连接信息</p>
     * @param string $Operator <p>操作人 uin</p>
     * @param string $Message <p>连接日志</p>
     * @param Audit $Audit <p>审计信息</p>
     * @param string $CreateTime <p>创建时间（已废弃）</p><p>参数格式：2024-01-01 12:00:00</p>
     * @param string $UpdateTime <p>更新时间（已废弃）</p><p>参数格式：2024-01-01 12:00:00</p>
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("Connection",$param) and $param["Connection"] !== null) {
            $this->Connection = new ConnectionConfig();
            $this->Connection->deserialize($param["Connection"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Audit",$param) and $param["Audit"] !== null) {
            $this->Audit = new Audit();
            $this->Audit->deserialize($param["Audit"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
