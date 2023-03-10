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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCosRecharge请求参数结构体
 *
 * @method string getTopicId() 获取日志主题 ID
 * @method void setTopicId(string $TopicId) 设置日志主题 ID
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getName() 获取投递任务名称
 * @method void setName(string $Name) 设置投递任务名称
 * @method string getBucket() 获取COS存储桶
 * @method void setBucket(string $Bucket) 设置COS存储桶
 * @method string getBucketRegion() 获取COS存储桶所在地域
 * @method void setBucketRegion(string $BucketRegion) 设置COS存储桶所在地域
 * @method string getPrefix() 获取COS文件所在文件夹的前缀
 * @method void setPrefix(string $Prefix) 设置COS文件所在文件夹的前缀
 * @method string getLogType() 获取采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
 * @method void setLogType(string $LogType) 设置采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
 * @method string getCompress() 获取supported: "", "gzip", "lzop", "snappy”; 默认空
 * @method void setCompress(string $Compress) 设置supported: "", "gzip", "lzop", "snappy”; 默认空
 * @method ExtractRuleInfo getExtractRuleInfo() 获取提取规则，如果设置了ExtractRule，则必须设置LogType
 * @method void setExtractRuleInfo(ExtractRuleInfo $ExtractRuleInfo) 设置提取规则，如果设置了ExtractRule，则必须设置LogType
 */
class CreateCosRechargeRequest extends AbstractModel
{
    /**
     * @var string 日志主题 ID
     */
    public $TopicId;

    /**
     * @var string 日志集ID
     */
    public $LogsetId;

    /**
     * @var string 投递任务名称
     */
    public $Name;

    /**
     * @var string COS存储桶
     */
    public $Bucket;

    /**
     * @var string COS存储桶所在地域
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
     * @var string supported: "", "gzip", "lzop", "snappy”; 默认空
     */
    public $Compress;

    /**
     * @var ExtractRuleInfo 提取规则，如果设置了ExtractRule，则必须设置LogType
     */
    public $ExtractRuleInfo;

    /**
     * @param string $TopicId 日志主题 ID
     * @param string $LogsetId 日志集ID
     * @param string $Name 投递任务名称
     * @param string $Bucket COS存储桶
     * @param string $BucketRegion COS存储桶所在地域
     * @param string $Prefix COS文件所在文件夹的前缀
     * @param string $LogType 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
     * @param string $Compress supported: "", "gzip", "lzop", "snappy”; 默认空
     * @param ExtractRuleInfo $ExtractRuleInfo 提取规则，如果设置了ExtractRule，则必须设置LogType
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

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }

        if (array_key_exists("ExtractRuleInfo",$param) and $param["ExtractRuleInfo"] !== null) {
            $this->ExtractRuleInfo = new ExtractRuleInfo();
            $this->ExtractRuleInfo->deserialize($param["ExtractRuleInfo"]);
        }
    }
}
