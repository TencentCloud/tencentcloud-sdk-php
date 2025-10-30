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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos导入配置信息
 *
 * @method string getId() 获取COS导入配置ID
 * @method void setId(string $Id) 设置COS导入配置ID
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getName() 获取COS导入任务名称
 * @method void setName(string $Name) 设置COS导入任务名称
 * @method string getBucket() 获取COS存储桶
 * @method void setBucket(string $Bucket) 设置COS存储桶
 * @method string getBucketRegion() 获取COS存储桶所在地域。

- 通过[地域和访问域名](https://cloud.tencent.com/document/product/436/6224)获取地域信息。
 * @method void setBucketRegion(string $BucketRegion) 设置COS存储桶所在地域。

- 通过[地域和访问域名](https://cloud.tencent.com/document/product/436/6224)获取地域信息。
 * @method string getPrefix() 获取COS文件所在文件夹的前缀
 * @method void setPrefix(string $Prefix) 设置COS文件所在文件夹的前缀
 * @method string getLogType() 获取采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
 * @method void setLogType(string $LogType) 设置采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
 * @method integer getStatus() 获取状态   status 0: 已创建, 1: 运行中, 2: 已停止, 3: 已完成, 4: 运行失败。
 * @method void setStatus(integer $Status) 设置状态   status 0: 已创建, 1: 运行中, 2: 已停止, 3: 已完成, 4: 运行失败。
 * @method integer getEnable() 获取是否启用:   0： 未启用  ， 1：启用
 * @method void setEnable(integer $Enable) 设置是否启用:   0： 未启用  ， 1：启用
 * @method string getCreateTime() 获取创建时间。时间格式：YYYY-MM-DD HH:mm:ss
 * @method void setCreateTime(string $CreateTime) 设置创建时间。时间格式：YYYY-MM-DD HH:mm:ss
 * @method string getUpdateTime() 获取更新时间。时间格式：YYYY-MM-DD HH:mm:ss
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。时间格式：YYYY-MM-DD HH:mm:ss
 * @method integer getProgress() 获取进度条百分值
 * @method void setProgress(integer $Progress) 设置进度条百分值
 * @method string getCompress() 获取压缩方式supported: "", "gzip", "lzop", "snappy”;  默认空不压缩
 * @method void setCompress(string $Compress) 设置压缩方式supported: "", "gzip", "lzop", "snappy”;  默认空不压缩
 * @method ExtractRuleInfo getExtractRuleInfo() 获取见： ExtractRuleInfo 结构描述
 * @method void setExtractRuleInfo(ExtractRuleInfo $ExtractRuleInfo) 设置见： ExtractRuleInfo 结构描述
 * @method integer getTaskType() 获取COS导入任务类型。1：一次性导入任务；2：持续性导入任务。
 * @method void setTaskType(integer $TaskType) 设置COS导入任务类型。1：一次性导入任务；2：持续性导入任务。
 * @method array getMetadata() 获取元数据。支持 bucket，object。
 * @method void setMetadata(array $Metadata) 设置元数据。支持 bucket，object。
 */
class CosRechargeInfo extends AbstractModel
{
    /**
     * @var string COS导入配置ID
     */
    public $Id;

    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var string 日志集ID
     */
    public $LogsetId;

    /**
     * @var string COS导入任务名称
     */
    public $Name;

    /**
     * @var string COS存储桶
     */
    public $Bucket;

    /**
     * @var string COS存储桶所在地域。

- 通过[地域和访问域名](https://cloud.tencent.com/document/product/436/6224)获取地域信息。
     */
    public $BucketRegion;

    /**
     * @var string COS文件所在文件夹的前缀
     */
    public $Prefix;

    /**
     * @var string 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
     */
    public $LogType;

    /**
     * @var integer 状态   status 0: 已创建, 1: 运行中, 2: 已停止, 3: 已完成, 4: 运行失败。
     */
    public $Status;

    /**
     * @var integer 是否启用:   0： 未启用  ， 1：启用
     */
    public $Enable;

    /**
     * @var string 创建时间。时间格式：YYYY-MM-DD HH:mm:ss
     */
    public $CreateTime;

    /**
     * @var string 更新时间。时间格式：YYYY-MM-DD HH:mm:ss
     */
    public $UpdateTime;

    /**
     * @var integer 进度条百分值
     */
    public $Progress;

    /**
     * @var string 压缩方式supported: "", "gzip", "lzop", "snappy”;  默认空不压缩
     */
    public $Compress;

    /**
     * @var ExtractRuleInfo 见： ExtractRuleInfo 结构描述
     */
    public $ExtractRuleInfo;

    /**
     * @var integer COS导入任务类型。1：一次性导入任务；2：持续性导入任务。
     */
    public $TaskType;

    /**
     * @var array 元数据。支持 bucket，object。
     */
    public $Metadata;

    /**
     * @param string $Id COS导入配置ID
     * @param string $TopicId 日志主题ID
     * @param string $LogsetId 日志集ID
     * @param string $Name COS导入任务名称
     * @param string $Bucket COS存储桶
     * @param string $BucketRegion COS存储桶所在地域。

- 通过[地域和访问域名](https://cloud.tencent.com/document/product/436/6224)获取地域信息。
     * @param string $Prefix COS文件所在文件夹的前缀
     * @param string $LogType 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
     * @param integer $Status 状态   status 0: 已创建, 1: 运行中, 2: 已停止, 3: 已完成, 4: 运行失败。
     * @param integer $Enable 是否启用:   0： 未启用  ， 1：启用
     * @param string $CreateTime 创建时间。时间格式：YYYY-MM-DD HH:mm:ss
     * @param string $UpdateTime 更新时间。时间格式：YYYY-MM-DD HH:mm:ss
     * @param integer $Progress 进度条百分值
     * @param string $Compress 压缩方式supported: "", "gzip", "lzop", "snappy”;  默认空不压缩
     * @param ExtractRuleInfo $ExtractRuleInfo 见： ExtractRuleInfo 结构描述
     * @param integer $TaskType COS导入任务类型。1：一次性导入任务；2：持续性导入任务。
     * @param array $Metadata 元数据。支持 bucket，object。
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

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }

        if (array_key_exists("ExtractRuleInfo",$param) and $param["ExtractRuleInfo"] !== null) {
            $this->ExtractRuleInfo = new ExtractRuleInfo();
            $this->ExtractRuleInfo->deserialize($param["ExtractRuleInfo"]);
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }
    }
}
