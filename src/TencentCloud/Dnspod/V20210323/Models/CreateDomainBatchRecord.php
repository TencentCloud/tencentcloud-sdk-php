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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量添加域名任务中的记录信息
 *
 * @method string getSubDomain() 获取子域名(主机记录)。
 * @method void setSubDomain(string $SubDomain) 设置子域名(主机记录)。
 * @method string getRecordType() 获取记录类型, 详见 DescribeRecordType 接口
 * @method void setRecordType(string $RecordType) 设置记录类型, 详见 DescribeRecordType 接口
 * @method string getRecordLine() 获取解析记录的线路，详见 DescribeRecordLineList 接口
 * @method void setRecordLine(string $RecordLine) 设置解析记录的线路，详见 DescribeRecordLineList 接口
 * @method string getValue() 获取记录值
 * @method void setValue(string $Value) 设置记录值
 * @method integer getTTL() 获取记录的 TTL 值
 * @method void setTTL(integer $TTL) 设置记录的 TTL 值
 * @method string getStatus() 获取记录添加状态
 * @method void setStatus(string $Status) 设置记录添加状态
 * @method string getOperation() 获取操作类型
 * @method void setOperation(string $Operation) 设置操作类型
 * @method string getErrMsg() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取此条记录在列表中的ID
 * @method void setId(integer $Id) 设置此条记录在列表中的ID
 */
class CreateDomainBatchRecord extends AbstractModel
{
    /**
     * @var string 子域名(主机记录)。
     */
    public $SubDomain;

    /**
     * @var string 记录类型, 详见 DescribeRecordType 接口
     */
    public $RecordType;

    /**
     * @var string 解析记录的线路，详见 DescribeRecordLineList 接口
     */
    public $RecordLine;

    /**
     * @var string 记录值
     */
    public $Value;

    /**
     * @var integer 记录的 TTL 值
     */
    public $TTL;

    /**
     * @var string 记录添加状态
     */
    public $Status;

    /**
     * @var string 操作类型
     */
    public $Operation;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @var integer 此条记录在列表中的ID
     */
    public $Id;

    /**
     * @param string $SubDomain 子域名(主机记录)。
     * @param string $RecordType 记录类型, 详见 DescribeRecordType 接口
     * @param string $RecordLine 解析记录的线路，详见 DescribeRecordLineList 接口
     * @param string $Value 记录值
     * @param integer $TTL 记录的 TTL 值
     * @param string $Status 记录添加状态
     * @param string $Operation 操作类型
     * @param string $ErrMsg 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 此条记录在列表中的ID
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
        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
