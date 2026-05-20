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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBDiagReportTask请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。TDSQL MySQL数据库类型，实例ID应填写为“实例ID&amp;分片ID”的格式。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。TDSQL MySQL数据库类型，实例ID应填写为“实例ID&amp;分片ID”的格式。</p>
 * @method string getStartTime() 获取<p>开始时间，如“2020-11-08T14:00:00+08:00”。</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间，如“2020-11-08T14:00:00+08:00”。</p>
 * @method string getEndTime() 获取<p>结束时间，如“2020-11-09T14:00:00+08:00”。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间，如“2020-11-09T14:00:00+08:00”。</p>
 * @method integer getSendMailFlag() 获取<p>是否发送邮件: 0 - 否，1 - 是。</p>
 * @method void setSendMailFlag(integer $SendMailFlag) 设置<p>是否发送邮件: 0 - 否，1 - 是。</p>
 * @method array getContactPerson() 获取<p>接收邮件的联系人ID数组。</p>
 * @method void setContactPerson(array $ContactPerson) 设置<p>接收邮件的联系人ID数组。</p>
 * @method array getContactGroup() 获取<p>接收邮件的联系组ID数组。</p>
 * @method void setContactGroup(array $ContactGroup) 设置<p>接收邮件的联系组ID数组。</p>
 * @method string getProduct() 获取<p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;mariadb&quot; - 云数据库 MariaDB，&quot;dcdb&quot; - 云数据库 TDSQL MySQL，默认为&quot;mysql&quot;。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;mariadb&quot; - 云数据库 MariaDB，&quot;dcdb&quot; - 云数据库 TDSQL MySQL，默认为&quot;mysql&quot;。</p>
 */
class CreateDBDiagReportTaskRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。TDSQL MySQL数据库类型，实例ID应填写为“实例ID&amp;分片ID”的格式。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>开始时间，如“2020-11-08T14:00:00+08:00”。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间，如“2020-11-09T14:00:00+08:00”。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>是否发送邮件: 0 - 否，1 - 是。</p>
     */
    public $SendMailFlag;

    /**
     * @var array <p>接收邮件的联系人ID数组。</p>
     */
    public $ContactPerson;

    /**
     * @var array <p>接收邮件的联系组ID数组。</p>
     */
    public $ContactGroup;

    /**
     * @var string <p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;mariadb&quot; - 云数据库 MariaDB，&quot;dcdb&quot; - 云数据库 TDSQL MySQL，默认为&quot;mysql&quot;。</p>
     */
    public $Product;

    /**
     * @param string $InstanceId <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。TDSQL MySQL数据库类型，实例ID应填写为“实例ID&amp;分片ID”的格式。</p>
     * @param string $StartTime <p>开始时间，如“2020-11-08T14:00:00+08:00”。</p>
     * @param string $EndTime <p>结束时间，如“2020-11-09T14:00:00+08:00”。</p>
     * @param integer $SendMailFlag <p>是否发送邮件: 0 - 否，1 - 是。</p>
     * @param array $ContactPerson <p>接收邮件的联系人ID数组。</p>
     * @param array $ContactGroup <p>接收邮件的联系组ID数组。</p>
     * @param string $Product <p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;mariadb&quot; - 云数据库 MariaDB，&quot;dcdb&quot; - 云数据库 TDSQL MySQL，默认为&quot;mysql&quot;。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SendMailFlag",$param) and $param["SendMailFlag"] !== null) {
            $this->SendMailFlag = $param["SendMailFlag"];
        }

        if (array_key_exists("ContactPerson",$param) and $param["ContactPerson"] !== null) {
            $this->ContactPerson = $param["ContactPerson"];
        }

        if (array_key_exists("ContactGroup",$param) and $param["ContactGroup"] !== null) {
            $this->ContactGroup = $param["ContactGroup"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
