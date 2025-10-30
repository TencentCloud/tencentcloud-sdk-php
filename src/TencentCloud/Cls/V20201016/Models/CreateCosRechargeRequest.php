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
 * CreateCosRecharge请求参数结构体
 *
 * @method string getTopicId() 获取日志主题Id。

- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method void setTopicId(string $TopicId) 设置日志主题Id。

- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method string getLogsetId() 获取日志集Id。

- 通过[获取日志集列表](https://cloud.tencent.com/document/product/614/58624)获取日志集Id。
 * @method void setLogsetId(string $LogsetId) 设置日志集Id。

- 通过[获取日志集列表](https://cloud.tencent.com/document/product/614/58624)获取日志集Id。
 * @method string getName() 获取COS导入任务名称,最大支持128个字节。
 * @method void setName(string $Name) 设置COS导入任务名称,最大支持128个字节。
 * @method string getBucket() 获取COS存储桶，详见产品支持的[存储桶命名规范](https://cloud.tencent.com/document/product/436/13312)。	

- 通过[GET Service（List Buckets）](https://cloud.tencent.com/document/product/436/8291)获取COS存储桶。
 * @method void setBucket(string $Bucket) 设置COS存储桶，详见产品支持的[存储桶命名规范](https://cloud.tencent.com/document/product/436/13312)。	

- 通过[GET Service（List Buckets）](https://cloud.tencent.com/document/product/436/8291)获取COS存储桶。
 * @method string getBucketRegion() 获取COS存储桶所在地域，详见产品支持的[地域列表](https://cloud.tencent.com/document/product/436/6224)。
 * @method void setBucketRegion(string $BucketRegion) 设置COS存储桶所在地域，详见产品支持的[地域列表](https://cloud.tencent.com/document/product/436/6224)。
 * @method string getLogType() 获取采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
 * @method void setLogType(string $LogType) 设置采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
 * @method string getPrefix() 获取COS文件所在文件夹的前缀。默认为空，投递存储桶下所有的文件。
 * @method void setPrefix(string $Prefix) 设置COS文件所在文件夹的前缀。默认为空，投递存储桶下所有的文件。
 * @method string getCompress() 获取supported: "", "gzip", "lzop", "snappy"。默认空，不压缩。
 * @method void setCompress(string $Compress) 设置supported: "", "gzip", "lzop", "snappy"。默认空，不压缩。
 * @method ExtractRuleInfo getExtractRuleInfo() 获取提取规则，如果设置了ExtractRule，则必须设置LogType
 * @method void setExtractRuleInfo(ExtractRuleInfo $ExtractRuleInfo) 设置提取规则，如果设置了ExtractRule，则必须设置LogType
 * @method integer getTaskType() 获取COS导入任务类型。1：一次性导入任务；2：持续性导入任务。默认为1：一次性导入任务
 * @method void setTaskType(integer $TaskType) 设置COS导入任务类型。1：一次性导入任务；2：持续性导入任务。默认为1：一次性导入任务
 * @method array getMetadata() 获取元数据。
 * @method void setMetadata(array $Metadata) 设置元数据。
 */
class CreateCosRechargeRequest extends AbstractModel
{
    /**
     * @var string 日志主题Id。

- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     */
    public $TopicId;

    /**
     * @var string 日志集Id。

- 通过[获取日志集列表](https://cloud.tencent.com/document/product/614/58624)获取日志集Id。
     */
    public $LogsetId;

    /**
     * @var string COS导入任务名称,最大支持128个字节。
     */
    public $Name;

    /**
     * @var string COS存储桶，详见产品支持的[存储桶命名规范](https://cloud.tencent.com/document/product/436/13312)。	

- 通过[GET Service（List Buckets）](https://cloud.tencent.com/document/product/436/8291)获取COS存储桶。
     */
    public $Bucket;

    /**
     * @var string COS存储桶所在地域，详见产品支持的[地域列表](https://cloud.tencent.com/document/product/436/6224)。
     */
    public $BucketRegion;

    /**
     * @var string 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
     */
    public $LogType;

    /**
     * @var string COS文件所在文件夹的前缀。默认为空，投递存储桶下所有的文件。
     */
    public $Prefix;

    /**
     * @var string supported: "", "gzip", "lzop", "snappy"。默认空，不压缩。
     */
    public $Compress;

    /**
     * @var ExtractRuleInfo 提取规则，如果设置了ExtractRule，则必须设置LogType
     */
    public $ExtractRuleInfo;

    /**
     * @var integer COS导入任务类型。1：一次性导入任务；2：持续性导入任务。默认为1：一次性导入任务
     */
    public $TaskType;

    /**
     * @var array 元数据。
     */
    public $Metadata;

    /**
     * @param string $TopicId 日志主题Id。

- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     * @param string $LogsetId 日志集Id。

- 通过[获取日志集列表](https://cloud.tencent.com/document/product/614/58624)获取日志集Id。
     * @param string $Name COS导入任务名称,最大支持128个字节。
     * @param string $Bucket COS存储桶，详见产品支持的[存储桶命名规范](https://cloud.tencent.com/document/product/436/13312)。	

- 通过[GET Service（List Buckets）](https://cloud.tencent.com/document/product/436/8291)获取COS存储桶。
     * @param string $BucketRegion COS存储桶所在地域，详见产品支持的[地域列表](https://cloud.tencent.com/document/product/436/6224)。
     * @param string $LogType 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
     * @param string $Prefix COS文件所在文件夹的前缀。默认为空，投递存储桶下所有的文件。
     * @param string $Compress supported: "", "gzip", "lzop", "snappy"。默认空，不压缩。
     * @param ExtractRuleInfo $ExtractRuleInfo 提取规则，如果设置了ExtractRule，则必须设置LogType
     * @param integer $TaskType COS导入任务类型。1：一次性导入任务；2：持续性导入任务。默认为1：一次性导入任务
     * @param array $Metadata 元数据。
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
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
