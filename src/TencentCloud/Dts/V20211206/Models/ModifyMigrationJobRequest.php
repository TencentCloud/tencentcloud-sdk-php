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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMigrationJob请求参数结构体
 *
 * @method string getJobId() 获取<p>任务id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
 * @method void setJobId(string $JobId) 设置<p>任务id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
 * @method string getRunMode() 获取<p>运行模式，取值如：immediate(表示立即运行)、timed(表示定时运行)</p>
 * @method void setRunMode(string $RunMode) 设置<p>运行模式，取值如：immediate(表示立即运行)、timed(表示定时运行)</p>
 * @method MigrateOption getMigrateOption() 获取<p>迁移任务配置选项，描述任务如何执行迁移等一系列配置信息；字段下的RateLimitOption不可配置、如果需要修改任务的限速信息、请在任务运行后通过ModifyMigrateRateLimit接口修改</p>
 * @method void setMigrateOption(MigrateOption $MigrateOption) 设置<p>迁移任务配置选项，描述任务如何执行迁移等一系列配置信息；字段下的RateLimitOption不可配置、如果需要修改任务的限速信息、请在任务运行后通过ModifyMigrateRateLimit接口修改</p>
 * @method DBEndpointInfo getSrcInfo() 获取<p>源实例信息</p>
 * @method void setSrcInfo(DBEndpointInfo $SrcInfo) 设置<p>源实例信息</p>
 * @method DBEndpointInfo getDstInfo() 获取<p>目标实例信息</p>
 * @method void setDstInfo(DBEndpointInfo $DstInfo) 设置<p>目标实例信息</p>
 * @method string getJobName() 获取<p>迁移任务名称，最大长度128</p>
 * @method void setJobName(string $JobName) 设置<p>迁移任务名称，最大长度128</p>
 * @method string getExpectRunTime() 获取<p>期待启动时间，当RunMode取值为timed时，此值必填，形如：&quot;2006-01-02 15:04:05&quot;</p>
 * @method void setExpectRunTime(string $ExpectRunTime) 设置<p>期待启动时间，当RunMode取值为timed时，此值必填，形如：&quot;2006-01-02 15:04:05&quot;</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 * @method integer getAutoRetryTimeRangeMinutes() 获取<p>自动重试的时间段、可设置5至720分钟、0表示不重试</p>
 * @method void setAutoRetryTimeRangeMinutes(integer $AutoRetryTimeRangeMinutes) 设置<p>自动重试的时间段、可设置5至720分钟、0表示不重试</p>
 */
class ModifyMigrationJobRequest extends AbstractModel
{
    /**
     * @var string <p>任务id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
     */
    public $JobId;

    /**
     * @var string <p>运行模式，取值如：immediate(表示立即运行)、timed(表示定时运行)</p>
     */
    public $RunMode;

    /**
     * @var MigrateOption <p>迁移任务配置选项，描述任务如何执行迁移等一系列配置信息；字段下的RateLimitOption不可配置、如果需要修改任务的限速信息、请在任务运行后通过ModifyMigrateRateLimit接口修改</p>
     */
    public $MigrateOption;

    /**
     * @var DBEndpointInfo <p>源实例信息</p>
     */
    public $SrcInfo;

    /**
     * @var DBEndpointInfo <p>目标实例信息</p>
     */
    public $DstInfo;

    /**
     * @var string <p>迁移任务名称，最大长度128</p>
     */
    public $JobName;

    /**
     * @var string <p>期待启动时间，当RunMode取值为timed时，此值必填，形如：&quot;2006-01-02 15:04:05&quot;</p>
     */
    public $ExpectRunTime;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @var integer <p>自动重试的时间段、可设置5至720分钟、0表示不重试</p>
     */
    public $AutoRetryTimeRangeMinutes;

    /**
     * @param string $JobId <p>任务id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
     * @param string $RunMode <p>运行模式，取值如：immediate(表示立即运行)、timed(表示定时运行)</p>
     * @param MigrateOption $MigrateOption <p>迁移任务配置选项，描述任务如何执行迁移等一系列配置信息；字段下的RateLimitOption不可配置、如果需要修改任务的限速信息、请在任务运行后通过ModifyMigrateRateLimit接口修改</p>
     * @param DBEndpointInfo $SrcInfo <p>源实例信息</p>
     * @param DBEndpointInfo $DstInfo <p>目标实例信息</p>
     * @param string $JobName <p>迁移任务名称，最大长度128</p>
     * @param string $ExpectRunTime <p>期待启动时间，当RunMode取值为timed时，此值必填，形如：&quot;2006-01-02 15:04:05&quot;</p>
     * @param array $Tags <p>标签信息</p>
     * @param integer $AutoRetryTimeRangeMinutes <p>自动重试的时间段、可设置5至720分钟、0表示不重试</p>
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
