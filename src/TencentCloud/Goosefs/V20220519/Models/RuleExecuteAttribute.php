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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扫描规则执行信息
 *
 * @method string getRecordId() 获取<p>执行id</p>
 * @method void setRecordId(string $RecordId) 设置<p>执行id</p>
 * @method string getStartTime() 获取<p>开始执行时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始执行时间</p>
 * @method string getEndTime() 获取<p>执行结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>执行结束时间</p>
 * @method integer getStatus() 获取<p>执行状态</p><p>枚举值：</p><ul><li>0： 等待中</li><li>1： 执行中</li><li>2： 已完成</li><li>3： 已跳过</li></ul><p>默认值：0</p><p>已跳过是指任务排队超过了任务的等待时间会自动跳过</p>
 * @method void setStatus(integer $Status) 设置<p>执行状态</p><p>枚举值：</p><ul><li>0： 等待中</li><li>1： 执行中</li><li>2： 已完成</li><li>3： 已跳过</li></ul><p>默认值：0</p><p>已跳过是指任务排队超过了任务的等待时间会自动跳过</p>
 * @method integer getCapacity() 获取<p>存储量</p><p>单位：GB</p><p>默认值：0</p><p>不足1G按照1G 统计</p>
 * @method void setCapacity(integer $Capacity) 设置<p>存储量</p><p>单位：GB</p><p>默认值：0</p><p>不足1G按照1G 统计</p>
 * @method integer getFileCount() 获取<p>文件数</p>
 * @method void setFileCount(integer $FileCount) 设置<p>文件数</p>
 * @method string getManifestUrl() 获取<p>文件清单路径</p><p>参数格式：http://xxx/xxx/xx</p>
 * @method void setManifestUrl(string $ManifestUrl) 设置<p>文件清单路径</p><p>参数格式：http://xxx/xxx/xx</p>
 */
class RuleExecuteAttribute extends AbstractModel
{
    /**
     * @var string <p>执行id</p>
     */
    public $RecordId;

    /**
     * @var string <p>开始执行时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>执行结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>执行状态</p><p>枚举值：</p><ul><li>0： 等待中</li><li>1： 执行中</li><li>2： 已完成</li><li>3： 已跳过</li></ul><p>默认值：0</p><p>已跳过是指任务排队超过了任务的等待时间会自动跳过</p>
     */
    public $Status;

    /**
     * @var integer <p>存储量</p><p>单位：GB</p><p>默认值：0</p><p>不足1G按照1G 统计</p>
     */
    public $Capacity;

    /**
     * @var integer <p>文件数</p>
     */
    public $FileCount;

    /**
     * @var string <p>文件清单路径</p><p>参数格式：http://xxx/xxx/xx</p>
     */
    public $ManifestUrl;

    /**
     * @param string $RecordId <p>执行id</p>
     * @param string $StartTime <p>开始执行时间</p>
     * @param string $EndTime <p>执行结束时间</p>
     * @param integer $Status <p>执行状态</p><p>枚举值：</p><ul><li>0： 等待中</li><li>1： 执行中</li><li>2： 已完成</li><li>3： 已跳过</li></ul><p>默认值：0</p><p>已跳过是指任务排队超过了任务的等待时间会自动跳过</p>
     * @param integer $Capacity <p>存储量</p><p>单位：GB</p><p>默认值：0</p><p>不足1G按照1G 统计</p>
     * @param integer $FileCount <p>文件数</p>
     * @param string $ManifestUrl <p>文件清单路径</p><p>参数格式：http://xxx/xxx/xx</p>
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("FileCount",$param) and $param["FileCount"] !== null) {
            $this->FileCount = $param["FileCount"];
        }

        if (array_key_exists("ManifestUrl",$param) and $param["ManifestUrl"] !== null) {
            $this->ManifestUrl = $param["ManifestUrl"];
        }
    }
}
