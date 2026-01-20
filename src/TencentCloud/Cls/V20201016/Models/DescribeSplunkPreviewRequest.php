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
 * DescribeSplunkPreview请求参数结构体
 *
 * @method string getTopicId() 获取<p>日志主题id。- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题id。- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
 * @method MetadataInfo getMetadataInfo() 获取<p>splunk投递任务-元信息</p>
 * @method void setMetadataInfo(MetadataInfo $MetadataInfo) 设置<p>splunk投递任务-元信息</p>
 * @method string getDSLFilter() 获取<p>splunk投递任务-投递 splunk过滤原始日志语句</p>
 * @method void setDSLFilter(string $DSLFilter) 设置<p>splunk投递任务-投递 splunk过滤原始日志语句</p>
 */
class DescribeSplunkPreviewRequest extends AbstractModel
{
    /**
     * @var string <p>日志主题id。- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
     */
    public $TopicId;

    /**
     * @var MetadataInfo <p>splunk投递任务-元信息</p>
     */
    public $MetadataInfo;

    /**
     * @var string <p>splunk投递任务-投递 splunk过滤原始日志语句</p>
     */
    public $DSLFilter;

    /**
     * @param string $TopicId <p>日志主题id。- 通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</p>
     * @param MetadataInfo $MetadataInfo <p>splunk投递任务-元信息</p>
     * @param string $DSLFilter <p>splunk投递任务-投递 splunk过滤原始日志语句</p>
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

        if (array_key_exists("MetadataInfo",$param) and $param["MetadataInfo"] !== null) {
            $this->MetadataInfo = new MetadataInfo();
            $this->MetadataInfo->deserialize($param["MetadataInfo"]);
        }

        if (array_key_exists("DSLFilter",$param) and $param["DSLFilter"] !== null) {
            $this->DSLFilter = $param["DSLFilter"];
        }
    }
}
