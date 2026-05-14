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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackUpSchedules返回参数结构体
 *
 * @method boolean getBackUpOpened() 获取<p>备份是否开启</p>
 * @method void setBackUpOpened(boolean $BackUpOpened) 设置<p>备份是否开启</p>
 * @method string getCosBucketName() 获取<p>备份桶</p>
 * @method void setCosBucketName(string $CosBucketName) 设置<p>备份桶</p>
 * @method integer getBackUpStatus() 获取<p>备份的状态</p>
 * @method void setBackUpStatus(integer $BackUpStatus) 设置<p>备份的状态</p>
 * @method array getBackupScheduleInfos() 获取<p>备份、迁移任务信息</p>
 * @method void setBackupScheduleInfos(array $BackupScheduleInfos) 设置<p>备份、迁移任务信息</p>
 * @method string getCurrentTime() 获取<p>当前系统时间</p>
 * @method void setCurrentTime(string $CurrentTime) 设置<p>当前系统时间</p>
 * @method BucketEncryptionInfo getBucketEncryption() 获取<p>桶加密状态信息</p>
 * @method void setBucketEncryption(BucketEncryptionInfo $BucketEncryption) 设置<p>桶加密状态信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackUpSchedulesResponse extends AbstractModel
{
    /**
     * @var boolean <p>备份是否开启</p>
     */
    public $BackUpOpened;

    /**
     * @var string <p>备份桶</p>
     */
    public $CosBucketName;

    /**
     * @var integer <p>备份的状态</p>
     */
    public $BackUpStatus;

    /**
     * @var array <p>备份、迁移任务信息</p>
     */
    public $BackupScheduleInfos;

    /**
     * @var string <p>当前系统时间</p>
     */
    public $CurrentTime;

    /**
     * @var BucketEncryptionInfo <p>桶加密状态信息</p>
     */
    public $BucketEncryption;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $BackUpOpened <p>备份是否开启</p>
     * @param string $CosBucketName <p>备份桶</p>
     * @param integer $BackUpStatus <p>备份的状态</p>
     * @param array $BackupScheduleInfos <p>备份、迁移任务信息</p>
     * @param string $CurrentTime <p>当前系统时间</p>
     * @param BucketEncryptionInfo $BucketEncryption <p>桶加密状态信息</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BackUpOpened",$param) and $param["BackUpOpened"] !== null) {
            $this->BackUpOpened = $param["BackUpOpened"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("BackUpStatus",$param) and $param["BackUpStatus"] !== null) {
            $this->BackUpStatus = $param["BackUpStatus"];
        }

        if (array_key_exists("BackupScheduleInfos",$param) and $param["BackupScheduleInfos"] !== null) {
            $this->BackupScheduleInfos = [];
            foreach ($param["BackupScheduleInfos"] as $key => $value){
                $obj = new BackupScheduleInfo();
                $obj->deserialize($value);
                array_push($this->BackupScheduleInfos, $obj);
            }
        }

        if (array_key_exists("CurrentTime",$param) and $param["CurrentTime"] !== null) {
            $this->CurrentTime = $param["CurrentTime"];
        }

        if (array_key_exists("BucketEncryption",$param) and $param["BucketEncryption"] !== null) {
            $this->BucketEncryption = new BucketEncryptionInfo();
            $this->BucketEncryption->deserialize($param["BucketEncryption"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
