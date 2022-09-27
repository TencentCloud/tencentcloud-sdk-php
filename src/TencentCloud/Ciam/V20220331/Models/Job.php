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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务详情
 *
 * @method string getId() 获取任务ID
 * @method void setId(string $Id) 设置任务ID
 * @method string getStatus() 获取任务状态

<li> **PENDING** </li>  待执行
<li> **PROCESSING** </li>  执行中
<li> **COMPLETED** </li>  完成
<li> **FAILED** </li>  失败
 * @method void setStatus(string $Status) 设置任务状态

<li> **PENDING** </li>  待执行
<li> **PROCESSING** </li>  执行中
<li> **COMPLETED** </li>  完成
<li> **FAILED** </li>  失败
 * @method string getType() 获取任务类型

<li> **IMPORT_USER** </li>  用户导入
<li> **EXPORT_USER** </li>  用户导出
 * @method void setType(string $Type) 设置任务类型

<li> **IMPORT_USER** </li>  用户导入
<li> **EXPORT_USER** </li>  用户导出
 * @method integer getCreatedDate() 获取任务创建时间
 * @method void setCreatedDate(integer $CreatedDate) 设置任务创建时间
 * @method string getFormat() 获取任务的数据类型

<li> **NDJSON** </li>  New-line Delimited JSON
<li> **CSV** </li>  Comma-Separated Values
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormat(string $Format) 设置任务的数据类型

<li> **NDJSON** </li>  New-line Delimited JSON
<li> **CSV** </li>  Comma-Separated Values
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocation() 获取任务结果下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(string $Location) 设置任务结果下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getErrorDetails() 获取失败详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorDetails(array $ErrorDetails) 设置失败详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFailedUsers() 获取失败的用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedUsers(array $FailedUsers) 设置失败的用户
注意：此字段可能返回 null，表示取不到有效值。
 */
class Job extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $Id;

    /**
     * @var string 任务状态

<li> **PENDING** </li>  待执行
<li> **PROCESSING** </li>  执行中
<li> **COMPLETED** </li>  完成
<li> **FAILED** </li>  失败
     */
    public $Status;

    /**
     * @var string 任务类型

<li> **IMPORT_USER** </li>  用户导入
<li> **EXPORT_USER** </li>  用户导出
     */
    public $Type;

    /**
     * @var integer 任务创建时间
     */
    public $CreatedDate;

    /**
     * @var string 任务的数据类型

<li> **NDJSON** </li>  New-line Delimited JSON
<li> **CSV** </li>  Comma-Separated Values
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Format;

    /**
     * @var string 任务结果下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var array 失败详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorDetails;

    /**
     * @var array 失败的用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedUsers;

    /**
     * @param string $Id 任务ID
     * @param string $Status 任务状态

<li> **PENDING** </li>  待执行
<li> **PROCESSING** </li>  执行中
<li> **COMPLETED** </li>  完成
<li> **FAILED** </li>  失败
     * @param string $Type 任务类型

<li> **IMPORT_USER** </li>  用户导入
<li> **EXPORT_USER** </li>  用户导出
     * @param integer $CreatedDate 任务创建时间
     * @param string $Format 任务的数据类型

<li> **NDJSON** </li>  New-line Delimited JSON
<li> **CSV** </li>  Comma-Separated Values
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Location 任务结果下载地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ErrorDetails 失败详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FailedUsers 失败的用户
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("ErrorDetails",$param) and $param["ErrorDetails"] !== null) {
            $this->ErrorDetails = [];
            foreach ($param["ErrorDetails"] as $key => $value){
                $obj = new ErrorDetails();
                $obj->deserialize($value);
                array_push($this->ErrorDetails, $obj);
            }
        }

        if (array_key_exists("FailedUsers",$param) and $param["FailedUsers"] !== null) {
            $this->FailedUsers = [];
            foreach ($param["FailedUsers"] as $key => $value){
                $obj = new FailedUsers();
                $obj->deserialize($value);
                array_push($this->FailedUsers, $obj);
            }
        }
    }
}
