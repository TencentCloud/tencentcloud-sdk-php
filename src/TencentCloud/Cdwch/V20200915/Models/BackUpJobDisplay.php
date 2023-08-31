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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份任务详情
 *
 * @method integer getJobId() 获取备份任务id
 * @method void setJobId(integer $JobId) 设置备份任务id
 * @method string getSnapshot() 获取备份任务名
 * @method void setSnapshot(string $Snapshot) 设置备份任务名
 * @method string getBackUpType() 获取任务类型(元数据),(数据)
 * @method void setBackUpType(string $BackUpType) 设置任务类型(元数据),(数据)
 * @method integer getBackUpSize() 获取备份数据量
 * @method void setBackUpSize(integer $BackUpSize) 设置备份数据量
 * @method string getBackUpTime() 获取任务创建时间
 * @method void setBackUpTime(string $BackUpTime) 设置任务创建时间
 * @method string getExpireTime() 获取任务过期时间
 * @method void setExpireTime(string $ExpireTime) 设置任务过期时间
 * @method string getJobStatus() 获取任务状态
 * @method void setJobStatus(string $JobStatus) 设置任务状态
 */
class BackUpJobDisplay extends AbstractModel
{
    /**
     * @var integer 备份任务id
     */
    public $JobId;

    /**
     * @var string 备份任务名
     */
    public $Snapshot;

    /**
     * @var string 任务类型(元数据),(数据)
     */
    public $BackUpType;

    /**
     * @var integer 备份数据量
     */
    public $BackUpSize;

    /**
     * @var string 任务创建时间
     */
    public $BackUpTime;

    /**
     * @var string 任务过期时间
     */
    public $ExpireTime;

    /**
     * @var string 任务状态
     */
    public $JobStatus;

    /**
     * @param integer $JobId 备份任务id
     * @param string $Snapshot 备份任务名
     * @param string $BackUpType 任务类型(元数据),(数据)
     * @param integer $BackUpSize 备份数据量
     * @param string $BackUpTime 任务创建时间
     * @param string $ExpireTime 任务过期时间
     * @param string $JobStatus 任务状态
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Snapshot",$param) and $param["Snapshot"] !== null) {
            $this->Snapshot = $param["Snapshot"];
        }

        if (array_key_exists("BackUpType",$param) and $param["BackUpType"] !== null) {
            $this->BackUpType = $param["BackUpType"];
        }

        if (array_key_exists("BackUpSize",$param) and $param["BackUpSize"] !== null) {
            $this->BackUpSize = $param["BackUpSize"];
        }

        if (array_key_exists("BackUpTime",$param) and $param["BackUpTime"] !== null) {
            $this->BackUpTime = $param["BackUpTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }
    }
}
