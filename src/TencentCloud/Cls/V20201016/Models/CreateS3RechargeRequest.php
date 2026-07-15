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
 * CreateS3Recharge请求参数结构体
 *
 * @method string getTopicId() 获取<p>日志主题Id。</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题Id。</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
 * @method string getName() 获取<p>s3导入任务名称,最大支持128个字节。</p><p>同一个TopicId下的s3任务Name必须唯一</p>
 * @method void setName(string $Name) 设置<p>s3导入任务名称,最大支持128个字节。</p><p>同一个TopicId下的s3任务Name必须唯一</p>
 * @method string getBucket() 获取<p>s3存储桶</p>
 * @method void setBucket(string $Bucket) 设置<p>s3存储桶</p>
 * @method string getS3Region() 获取<p>地域</p>
 * @method void setS3Region(string $S3Region) 设置<p>地域</p>
 * @method string getAccessKeyId() 获取<p>访问密钥 ID（Access Key ID）</p>
 * @method void setAccessKeyId(string $AccessKeyId) 设置<p>访问密钥 ID（Access Key ID）</p>
 * @method string getSecretAccessKey() 获取<p>访问密钥Key（Secret Access Key）</p>
 * @method void setSecretAccessKey(string $SecretAccessKey) 设置<p>访问密钥Key（Secret Access Key）</p>
 * @method string getLogType() 获取<p>采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；<br>默认为minimalist_log</p>
 * @method void setLogType(string $LogType) 设置<p>采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；<br>默认为minimalist_log</p>
 * @method string getEndpoint() 获取<p>自定义端点</p>
 * @method void setEndpoint(string $Endpoint) 设置<p>自定义端点</p>
 * @method string getPrefix() 获取<p>s3文件所在文件夹的前缀。默认为空，投递存储桶下所有的文件。</p>
 * @method void setPrefix(string $Prefix) 设置<p>s3文件所在文件夹的前缀。默认为空，投递存储桶下所有的文件。</p>
 * @method string getCompress() 获取<p>压缩模式。支持: &quot;&quot;, &quot;gzip&quot;, &quot;lzop&quot;, &quot;snappy&quot;。</p><p>默认值：不压缩</p>
 * @method void setCompress(string $Compress) 设置<p>压缩模式。支持: &quot;&quot;, &quot;gzip&quot;, &quot;lzop&quot;, &quot;snappy&quot;。</p><p>默认值：不压缩</p>
 * @method ExtractRuleInfo getExtractRuleInfo() 获取<p>提取规则，如果设置了ExtractRule，则必须设置LogType</p>
 * @method void setExtractRuleInfo(ExtractRuleInfo $ExtractRuleInfo) 设置<p>提取规则，如果设置了ExtractRule，则必须设置LogType</p>
 * @method integer getTaskType() 获取<p>s3导入任务类型.</p><p>枚举值：</p><ul><li>1： 一次性导入任务</li><li>2： 持续性导入任务</li></ul><p>默认值：1</p>
 * @method void setTaskType(integer $TaskType) 设置<p>s3导入任务类型.</p><p>枚举值：</p><ul><li>1： 一次性导入任务</li><li>2： 持续性导入任务</li></ul><p>默认值：1</p>
 */
class CreateS3RechargeRequest extends AbstractModel
{
    /**
     * @var string <p>日志主题Id。</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
     */
    public $TopicId;

    /**
     * @var string <p>s3导入任务名称,最大支持128个字节。</p><p>同一个TopicId下的s3任务Name必须唯一</p>
     */
    public $Name;

    /**
     * @var string <p>s3存储桶</p>
     */
    public $Bucket;

    /**
     * @var string <p>地域</p>
     */
    public $S3Region;

    /**
     * @var string <p>访问密钥 ID（Access Key ID）</p>
     */
    public $AccessKeyId;

    /**
     * @var string <p>访问密钥Key（Secret Access Key）</p>
     */
    public $SecretAccessKey;

    /**
     * @var string <p>采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；<br>默认为minimalist_log</p>
     */
    public $LogType;

    /**
     * @var string <p>自定义端点</p>
     */
    public $Endpoint;

    /**
     * @var string <p>s3文件所在文件夹的前缀。默认为空，投递存储桶下所有的文件。</p>
     */
    public $Prefix;

    /**
     * @var string <p>压缩模式。支持: &quot;&quot;, &quot;gzip&quot;, &quot;lzop&quot;, &quot;snappy&quot;。</p><p>默认值：不压缩</p>
     */
    public $Compress;

    /**
     * @var ExtractRuleInfo <p>提取规则，如果设置了ExtractRule，则必须设置LogType</p>
     */
    public $ExtractRuleInfo;

    /**
     * @var integer <p>s3导入任务类型.</p><p>枚举值：</p><ul><li>1： 一次性导入任务</li><li>2： 持续性导入任务</li></ul><p>默认值：1</p>
     */
    public $TaskType;

    /**
     * @param string $TopicId <p>日志主题Id。</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
     * @param string $Name <p>s3导入任务名称,最大支持128个字节。</p><p>同一个TopicId下的s3任务Name必须唯一</p>
     * @param string $Bucket <p>s3存储桶</p>
     * @param string $S3Region <p>地域</p>
     * @param string $AccessKeyId <p>访问密钥 ID（Access Key ID）</p>
     * @param string $SecretAccessKey <p>访问密钥Key（Secret Access Key）</p>
     * @param string $LogType <p>采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；<br>默认为minimalist_log</p>
     * @param string $Endpoint <p>自定义端点</p>
     * @param string $Prefix <p>s3文件所在文件夹的前缀。默认为空，投递存储桶下所有的文件。</p>
     * @param string $Compress <p>压缩模式。支持: &quot;&quot;, &quot;gzip&quot;, &quot;lzop&quot;, &quot;snappy&quot;。</p><p>默认值：不压缩</p>
     * @param ExtractRuleInfo $ExtractRuleInfo <p>提取规则，如果设置了ExtractRule，则必须设置LogType</p>
     * @param integer $TaskType <p>s3导入任务类型.</p><p>枚举值：</p><ul><li>1： 一次性导入任务</li><li>2： 持续性导入任务</li></ul><p>默认值：1</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("S3Region",$param) and $param["S3Region"] !== null) {
            $this->S3Region = $param["S3Region"];
        }

        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("SecretAccessKey",$param) and $param["SecretAccessKey"] !== null) {
            $this->SecretAccessKey = $param["SecretAccessKey"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
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
    }
}
