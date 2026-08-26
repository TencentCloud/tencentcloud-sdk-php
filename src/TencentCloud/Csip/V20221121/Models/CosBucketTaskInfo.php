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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos存储桶任务信息
 *
 * @method integer getAppId() 获取<p>appid</p>
 * @method void setAppId(integer $AppId) 设置<p>appid</p>
 * @method string getBucketName() 获取<p>存储桶名</p>
 * @method void setBucketName(string $BucketName) 设置<p>存储桶名</p>
 * @method string getTaskId() 获取<p>任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务id</p>
 * @method integer getLastScanTime() 获取<p>最后一次扫描时间</p>
 * @method void setLastScanTime(integer $LastScanTime) 设置<p>最后一次扫描时间</p>
 * @method integer getIdentifyFileCount() 获取<p>识别文件数量</p>
 * @method void setIdentifyFileCount(integer $IdentifyFileCount) 设置<p>识别文件数量</p>
 * @method integer getSensitiveFileCount() 获取<p>敏感文件数量</p>
 * @method void setSensitiveFileCount(integer $SensitiveFileCount) 设置<p>敏感文件数量</p>
 */
class CosBucketTaskInfo extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>存储桶名</p>
     */
    public $BucketName;

    /**
     * @var string <p>任务id</p>
     */
    public $TaskId;

    /**
     * @var integer <p>最后一次扫描时间</p>
     */
    public $LastScanTime;

    /**
     * @var integer <p>识别文件数量</p>
     */
    public $IdentifyFileCount;

    /**
     * @var integer <p>敏感文件数量</p>
     */
    public $SensitiveFileCount;

    /**
     * @param integer $AppId <p>appid</p>
     * @param string $BucketName <p>存储桶名</p>
     * @param string $TaskId <p>任务id</p>
     * @param integer $LastScanTime <p>最后一次扫描时间</p>
     * @param integer $IdentifyFileCount <p>识别文件数量</p>
     * @param integer $SensitiveFileCount <p>敏感文件数量</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("IdentifyFileCount",$param) and $param["IdentifyFileCount"] !== null) {
            $this->IdentifyFileCount = $param["IdentifyFileCount"];
        }

        if (array_key_exists("SensitiveFileCount",$param) and $param["SensitiveFileCount"] !== null) {
            $this->SensitiveFileCount = $param["SensitiveFileCount"];
        }
    }
}
