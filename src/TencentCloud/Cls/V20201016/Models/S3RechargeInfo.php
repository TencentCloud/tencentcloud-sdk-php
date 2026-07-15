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
 * aws 导入信息
 *
 * @method string getTaskId() 获取<p>导入任务Id</p>
 * @method void setTaskId(string $TaskId) 设置<p>导入任务Id</p>
 * @method string getTopicId() 获取<p>日志主题Id。- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题Id。- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
 * @method string getLogsetId() 获取<p>日志集Id。通过 <a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集Id。通过 <a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</p>
 * @method string getName() 获取<p>任务名称</p>
 * @method void setName(string $Name) 设置<p>任务名称</p>
 * @method string getBucket() 获取<p>s3存储桶</p>
 * @method void setBucket(string $Bucket) 设置<p>s3存储桶</p>
 * @method string getS3Region() 获取<p>地域</p>
 * @method void setS3Region(string $S3Region) 设置<p>地域</p>
 * @method string getAccessKeyId() 获取<p>访问密钥 ID（Access Key ID）</p>
 * @method void setAccessKeyId(string $AccessKeyId) 设置<p>访问密钥 ID（Access Key ID）</p>
 * @method string getEndpoint() 获取<p>自定义端点</p>
 * @method void setEndpoint(string $Endpoint) 设置<p>自定义端点</p>
 * @method string getLogType() 获取<p>采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；默认为minimalist_log</p>
 * @method void setLogType(string $LogType) 设置<p>采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；默认为minimalist_log</p>
 * @method string getPrefix() 获取<p>s3文件所在文件夹的前缀。默认为空，投递存储桶下所有的文件。</p>
 * @method void setPrefix(string $Prefix) 设置<p>s3文件所在文件夹的前缀。默认为空，投递存储桶下所有的文件。</p>
 * @method string getCompress() 获取<p>压缩模式。支持: &quot;&quot;, &quot;gzip&quot;, &quot;lzop&quot;, &quot;snappy&quot;。</p><p>默认值：不压缩</p>
 * @method void setCompress(string $Compress) 设置<p>压缩模式。支持: &quot;&quot;, &quot;gzip&quot;, &quot;lzop&quot;, &quot;snappy&quot;。</p><p>默认值：不压缩</p>
 * @method ExtractRuleInfo getExtractRule() 获取<p>提取规则，如果设置了ExtractRule，则必须设置LogType</p>
 * @method void setExtractRule(ExtractRuleInfo $ExtractRule) 设置<p>提取规则，如果设置了ExtractRule，则必须设置LogType</p>
 * @method integer getTaskType() 获取<p>s3导入任务类型.</p><p>枚举值：</p><ul><li>1： 一次性导入任务</li><li>2： 持续性导入任务</li></ul>
 * @method void setTaskType(integer $TaskType) 设置<p>s3导入任务类型.</p><p>枚举值：</p><ul><li>1： 一次性导入任务</li><li>2： 持续性导入任务</li></ul>
 * @method array getMetadata() 获取<p>元数据。</p><p>枚举值：</p><ul><li>bucket： 桶</li><li>object： 对象</li></ul><p>选中元数据将以 <strong>TAG</strong>.{元数据}:xxx 的形式与日志一起导入。如：<strong>TAG</strong>.object: csv/object.gz</p>
 * @method void setMetadata(array $Metadata) 设置<p>元数据。</p><p>枚举值：</p><ul><li>bucket： 桶</li><li>object： 对象</li></ul><p>选中元数据将以 <strong>TAG</strong>.{元数据}:xxx 的形式与日志一起导入。如：<strong>TAG</strong>.object: csv/object.gz</p>
 * @method integer getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>0： 已创建</li><li>1： 运行中</li><li>2： 已停止</li><li>3： 已完成</li><li>4： 运行失败</li></ul>
 * @method void setStatus(integer $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>0： 已创建</li><li>1： 运行中</li><li>2： 已停止</li><li>3： 已完成</li><li>4： 运行失败</li></ul>
 * @method integer getEnable() 获取<p>是否启用</p><p>枚举值：</p><ul><li>0： 暂停</li><li>1： 启用</li></ul>
 * @method void setEnable(integer $Enable) 设置<p>是否启用</p><p>枚举值：</p><ul><li>0： 暂停</li><li>1： 启用</li></ul>
 * @method integer getProgress() 获取<p>进度条百分值</p>
 * @method void setProgress(integer $Progress) 设置<p>进度条百分值</p>
 * @method integer getCreateTime() 获取<p>创建时间</p><p>单位：秒</p><p>秒级时间戳</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p><p>单位：秒</p><p>秒级时间戳</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p><p>单位：秒</p><p>秒级时间戳</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p><p>单位：秒</p><p>秒级时间戳</p>
 */
class S3RechargeInfo extends AbstractModel
{
    /**
     * @var string <p>导入任务Id</p>
     */
    public $TaskId;

    /**
     * @var string <p>日志主题Id。- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
     */
    public $TopicId;

    /**
     * @var string <p>日志集Id。通过 <a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</p>
     */
    public $LogsetId;

    /**
     * @var string <p>任务名称</p>
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
     * @var string <p>自定义端点</p>
     */
    public $Endpoint;

    /**
     * @var string <p>采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；默认为minimalist_log</p>
     */
    public $LogType;

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
    public $ExtractRule;

    /**
     * @var integer <p>s3导入任务类型.</p><p>枚举值：</p><ul><li>1： 一次性导入任务</li><li>2： 持续性导入任务</li></ul>
     */
    public $TaskType;

    /**
     * @var array <p>元数据。</p><p>枚举值：</p><ul><li>bucket： 桶</li><li>object： 对象</li></ul><p>选中元数据将以 <strong>TAG</strong>.{元数据}:xxx 的形式与日志一起导入。如：<strong>TAG</strong>.object: csv/object.gz</p>
     */
    public $Metadata;

    /**
     * @var integer <p>任务状态</p><p>枚举值：</p><ul><li>0： 已创建</li><li>1： 运行中</li><li>2： 已停止</li><li>3： 已完成</li><li>4： 运行失败</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>是否启用</p><p>枚举值：</p><ul><li>0： 暂停</li><li>1： 启用</li></ul>
     */
    public $Enable;

    /**
     * @var integer <p>进度条百分值</p>
     */
    public $Progress;

    /**
     * @var integer <p>创建时间</p><p>单位：秒</p><p>秒级时间戳</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p><p>单位：秒</p><p>秒级时间戳</p>
     */
    public $UpdateTime;

    /**
     * @param string $TaskId <p>导入任务Id</p>
     * @param string $TopicId <p>日志主题Id。- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
     * @param string $LogsetId <p>日志集Id。通过 <a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</p>
     * @param string $Name <p>任务名称</p>
     * @param string $Bucket <p>s3存储桶</p>
     * @param string $S3Region <p>地域</p>
     * @param string $AccessKeyId <p>访问密钥 ID（Access Key ID）</p>
     * @param string $Endpoint <p>自定义端点</p>
     * @param string $LogType <p>采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；默认为minimalist_log</p>
     * @param string $Prefix <p>s3文件所在文件夹的前缀。默认为空，投递存储桶下所有的文件。</p>
     * @param string $Compress <p>压缩模式。支持: &quot;&quot;, &quot;gzip&quot;, &quot;lzop&quot;, &quot;snappy&quot;。</p><p>默认值：不压缩</p>
     * @param ExtractRuleInfo $ExtractRule <p>提取规则，如果设置了ExtractRule，则必须设置LogType</p>
     * @param integer $TaskType <p>s3导入任务类型.</p><p>枚举值：</p><ul><li>1： 一次性导入任务</li><li>2： 持续性导入任务</li></ul>
     * @param array $Metadata <p>元数据。</p><p>枚举值：</p><ul><li>bucket： 桶</li><li>object： 对象</li></ul><p>选中元数据将以 <strong>TAG</strong>.{元数据}:xxx 的形式与日志一起导入。如：<strong>TAG</strong>.object: csv/object.gz</p>
     * @param integer $Status <p>任务状态</p><p>枚举值：</p><ul><li>0： 已创建</li><li>1： 运行中</li><li>2： 已停止</li><li>3： 已完成</li><li>4： 运行失败</li></ul>
     * @param integer $Enable <p>是否启用</p><p>枚举值：</p><ul><li>0： 暂停</li><li>1： 启用</li></ul>
     * @param integer $Progress <p>进度条百分值</p>
     * @param integer $CreateTime <p>创建时间</p><p>单位：秒</p><p>秒级时间戳</p>
     * @param integer $UpdateTime <p>更新时间</p><p>单位：秒</p><p>秒级时间戳</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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

        if (array_key_exists("S3Region",$param) and $param["S3Region"] !== null) {
            $this->S3Region = $param["S3Region"];
        }

        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
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

        if (array_key_exists("ExtractRule",$param) and $param["ExtractRule"] !== null) {
            $this->ExtractRule = new ExtractRuleInfo();
            $this->ExtractRule->deserialize($param["ExtractRule"]);
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
