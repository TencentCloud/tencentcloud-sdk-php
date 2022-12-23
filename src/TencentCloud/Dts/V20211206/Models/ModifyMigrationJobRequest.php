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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMigrationJob请求参数结构体
 *
 * @method string getJobId() 获取任务id
 * @method void setJobId(string $JobId) 设置任务id
 * @method string getRunMode() 获取运行模式，取值如：immediate(表示立即运行)、timed(表示定时运行)
 * @method void setRunMode(string $RunMode) 设置运行模式，取值如：immediate(表示立即运行)、timed(表示定时运行)
 * @method MigrateOption getMigrateOption() 获取迁移任务配置选项，描述任务如何执行迁移等一系列配置信息
 * @method void setMigrateOption(MigrateOption $MigrateOption) 设置迁移任务配置选项，描述任务如何执行迁移等一系列配置信息
 * @method DBEndpointInfo getSrcInfo() 获取源实例信息
 * @method void setSrcInfo(DBEndpointInfo $SrcInfo) 设置源实例信息
 * @method DBEndpointInfo getDstInfo() 获取目标实例信息
 * @method void setDstInfo(DBEndpointInfo $DstInfo) 设置目标实例信息
 * @method string getJobName() 获取迁移任务名称，最大长度128
 * @method void setJobName(string $JobName) 设置迁移任务名称，最大长度128
 * @method string getExpectRunTime() 获取期待启动时间，当RunMode取值为timed时，此值必填，形如："2006-01-02 15:04:05"
 * @method void setExpectRunTime(string $ExpectRunTime) 设置期待启动时间，当RunMode取值为timed时，此值必填，形如："2006-01-02 15:04:05"
 * @method array getTags() 获取标签信息
 * @method void setTags(array $Tags) 设置标签信息
 * @method integer getAutoRetryTimeRangeMinutes() 获取自动重试的时间段、可设置5至720分钟、0表示不重试
 * @method void setAutoRetryTimeRangeMinutes(integer $AutoRetryTimeRangeMinutes) 设置自动重试的时间段、可设置5至720分钟、0表示不重试
 */
class ModifyMigrationJobRequest extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $JobId;

    /**
     * @var string 运行模式，取值如：immediate(表示立即运行)、timed(表示定时运行)
     */
    public $RunMode;

    /**
     * @var MigrateOption 迁移任务配置选项，描述任务如何执行迁移等一系列配置信息
     */
    public $MigrateOption;

    /**
     * @var DBEndpointInfo 源实例信息
     */
    public $SrcInfo;

    /**
     * @var DBEndpointInfo 目标实例信息
     */
    public $DstInfo;

    /**
     * @var string 迁移任务名称，最大长度128
     */
    public $JobName;

    /**
     * @var string 期待启动时间，当RunMode取值为timed时，此值必填，形如："2006-01-02 15:04:05"
     */
    public $ExpectRunTime;

    /**
     * @var array 标签信息
     */
    public $Tags;

    /**
     * @var integer 自动重试的时间段、可设置5至720分钟、0表示不重试
     */
    public $AutoRetryTimeRangeMinutes;

    /**
     * @param string $JobId 任务id
     * @param string $RunMode 运行模式，取值如：immediate(表示立即运行)、timed(表示定时运行)
     * @param MigrateOption $MigrateOption 迁移任务配置选项，描述任务如何执行迁移等一系列配置信息
     * @param DBEndpointInfo $SrcInfo 源实例信息
     * @param DBEndpointInfo $DstInfo 目标实例信息
     * @param string $JobName 迁移任务名称，最大长度128
     * @param string $ExpectRunTime 期待启动时间，当RunMode取值为timed时，此值必填，形如："2006-01-02 15:04:05"
     * @param array $Tags 标签信息
     * @param integer $AutoRetryTimeRangeMinutes 自动重试的时间段、可设置5至720分钟、0表示不重试
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

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("MigrateOption",$param) and $param["MigrateOption"] !== null) {
            $this->MigrateOption = new MigrateOption();
            $this->MigrateOption->deserialize($param["MigrateOption"]);
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new DBEndpointInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DBEndpointInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("ExpectRunTime",$param) and $param["ExpectRunTime"] !== null) {
            $this->ExpectRunTime = $param["ExpectRunTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoRetryTimeRangeMinutes",$param) and $param["AutoRetryTimeRangeMinutes"] !== null) {
            $this->AutoRetryTimeRangeMinutes = $param["AutoRetryTimeRangeMinutes"];
        }
    }
}
