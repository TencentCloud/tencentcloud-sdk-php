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
 * DescribeEsRechargePreview请求参数结构体
 *
 * @method string getName() 获取名称：长度不超过64字符。
 * @method void setName(string $Name) 设置名称：长度不超过64字符。
 * @method string getTopicId() 获取日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
 * @method void setTopicId(string $TopicId) 设置日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
 * @method string getIndex() 获取索引信息。不同索引可以通过英文逗号分隔，支持*通配符
 * @method void setIndex(string $Index) 设置索引信息。不同索引可以通过英文逗号分隔，支持*通配符
 * @method string getQuery() 获取es查询语句。
 * @method void setQuery(string $Query) 设置es查询语句。
 * @method EsInfo getEsInfo() 获取es集群配置信息。
 * @method void setEsInfo(EsInfo $EsInfo) 设置es集群配置信息。
 * @method EsImportInfo getImportInfo() 获取es导入信息。
 * @method void setImportInfo(EsImportInfo $ImportInfo) 设置es导入信息。
 * @method EsTimeInfo getTimeInfo() 获取es导入时间字段信息。
 * @method void setTimeInfo(EsTimeInfo $TimeInfo) 设置es导入时间字段信息。
 */
class DescribeEsRechargePreviewRequest extends AbstractModel
{
    /**
     * @var string 名称：长度不超过64字符。
     */
    public $Name;

    /**
     * @var string 日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
     */
    public $TopicId;

    /**
     * @var string 索引信息。不同索引可以通过英文逗号分隔，支持*通配符
     */
    public $Index;

    /**
     * @var string es查询语句。
     */
    public $Query;

    /**
     * @var EsInfo es集群配置信息。
     */
    public $EsInfo;

    /**
     * @var EsImportInfo es导入信息。
     */
    public $ImportInfo;

    /**
     * @var EsTimeInfo es导入时间字段信息。
     */
    public $TimeInfo;

    /**
     * @param string $Name 名称：长度不超过64字符。
     * @param string $TopicId 日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
     * @param string $Index 索引信息。不同索引可以通过英文逗号分隔，支持*通配符
     * @param string $Query es查询语句。
     * @param EsInfo $EsInfo es集群配置信息。
     * @param EsImportInfo $ImportInfo es导入信息。
     * @param EsTimeInfo $TimeInfo es导入时间字段信息。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("EsInfo",$param) and $param["EsInfo"] !== null) {
            $this->EsInfo = new EsInfo();
            $this->EsInfo->deserialize($param["EsInfo"]);
        }

        if (array_key_exists("ImportInfo",$param) and $param["ImportInfo"] !== null) {
            $this->ImportInfo = new EsImportInfo();
            $this->ImportInfo->deserialize($param["ImportInfo"]);
        }

        if (array_key_exists("TimeInfo",$param) and $param["TimeInfo"] !== null) {
            $this->TimeInfo = new EsTimeInfo();
            $this->TimeInfo->deserialize($param["TimeInfo"]);
        }
    }
}
