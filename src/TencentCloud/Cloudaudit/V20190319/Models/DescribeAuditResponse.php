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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAuditName() 获取跟踪集名称。
 * @method void setAuditName(string $AuditName) 设置跟踪集名称。
 * @method integer getAuditStatus() 获取跟踪集状态，1：开启，0：停止。
 * @method void setAuditStatus(integer $AuditStatus) 设置跟踪集状态，1：开启，0：停止。
 * @method string getCmqQueueName() 获取队列名称。
 * @method void setCmqQueueName(string $CmqQueueName) 设置队列名称。
 * @method string getCmqRegion() 获取队列所在地域。
 * @method void setCmqRegion(string $CmqRegion) 设置队列所在地域。
 * @method string getCosBucketName() 获取cos存储桶名称。
 * @method void setCosBucketName(string $CosBucketName) 设置cos存储桶名称。
 * @method string getCosRegion() 获取cos存储桶所在地域。
 * @method void setCosRegion(string $CosRegion) 设置cos存储桶所在地域。
 * @method integer getIsEnableCmqNotify() 获取是否开启cmq消息通知。1：是，0：否。
 * @method void setIsEnableCmqNotify(integer $IsEnableCmqNotify) 设置是否开启cmq消息通知。1：是，0：否。
 * @method string getLogFilePrefix() 获取日志前缀。
 * @method void setLogFilePrefix(string $LogFilePrefix) 设置日志前缀。
 * @method integer getReadWriteAttribute() 获取管理事件读写属性，1：只读，2：只写，3：全部
 * @method void setReadWriteAttribute(integer $ReadWriteAttribute) 设置管理事件读写属性，1：只读，2：只写，3：全部
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DescribeAudit返回参数结构体
 */
class DescribeAuditResponse extends AbstractModel
{
    /**
     * @var string 跟踪集名称。
     */
    public $AuditName;

    /**
     * @var integer 跟踪集状态，1：开启，0：停止。
     */
    public $AuditStatus;

    /**
     * @var string 队列名称。
     */
    public $CmqQueueName;

    /**
     * @var string 队列所在地域。
     */
    public $CmqRegion;

    /**
     * @var string cos存储桶名称。
     */
    public $CosBucketName;

    /**
     * @var string cos存储桶所在地域。
     */
    public $CosRegion;

    /**
     * @var integer 是否开启cmq消息通知。1：是，0：否。
     */
    public $IsEnableCmqNotify;

    /**
     * @var string 日志前缀。
     */
    public $LogFilePrefix;

    /**
     * @var integer 管理事件读写属性，1：只读，2：只写，3：全部
     */
    public $ReadWriteAttribute;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $AuditName 跟踪集名称。
     * @param integer $AuditStatus 跟踪集状态，1：开启，0：停止。
     * @param string $CmqQueueName 队列名称。
     * @param string $CmqRegion 队列所在地域。
     * @param string $CosBucketName cos存储桶名称。
     * @param string $CosRegion cos存储桶所在地域。
     * @param integer $IsEnableCmqNotify 是否开启cmq消息通知。1：是，0：否。
     * @param string $LogFilePrefix 日志前缀。
     * @param integer $ReadWriteAttribute 管理事件读写属性，1：只读，2：只写，3：全部
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AuditName",$param) and $param["AuditName"] !== null) {
            $this->AuditName = $param["AuditName"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("CmqQueueName",$param) and $param["CmqQueueName"] !== null) {
            $this->CmqQueueName = $param["CmqQueueName"];
        }

        if (array_key_exists("CmqRegion",$param) and $param["CmqRegion"] !== null) {
            $this->CmqRegion = $param["CmqRegion"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("IsEnableCmqNotify",$param) and $param["IsEnableCmqNotify"] !== null) {
            $this->IsEnableCmqNotify = $param["IsEnableCmqNotify"];
        }

        if (array_key_exists("LogFilePrefix",$param) and $param["LogFilePrefix"] !== null) {
            $this->LogFilePrefix = $param["LogFilePrefix"];
        }

        if (array_key_exists("ReadWriteAttribute",$param) and $param["ReadWriteAttribute"] !== null) {
            $this->ReadWriteAttribute = $param["ReadWriteAttribute"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
