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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditKeywords请求参数结构体
 *
 * @method integer getOffset() 获取获取偏移量。
 * @method void setOffset(integer $Offset) 设置获取偏移量。
 * @method integer getLimit() 获取单页条数，最大为100条，超过则按100条返回。
 * @method void setLimit(integer $Limit) 设置单页条数，最大为100条，超过则按100条返回。
 * @method string getLibId() 获取关键词库 Id。
 * @method void setLibId(string $LibId) 设置关键词库 Id。
 * @method string getContent() 获取关键词搜索字段。
为空字符串时忽略。
 * @method void setContent(string $Content) 设置关键词搜索字段。
为空字符串时忽略。
 * @method array getLabels() 获取标签类别搜索。
 * @method void setLabels(array $Labels) 设置标签类别搜索。
 */
class DescribeAuditKeywordsRequest extends AbstractModel
{
    /**
     * @var integer 获取偏移量。
     */
    public $Offset;

    /**
     * @var integer 单页条数，最大为100条，超过则按100条返回。
     */
    public $Limit;

    /**
     * @var string 关键词库 Id。
     */
    public $LibId;

    /**
     * @var string 关键词搜索字段。
为空字符串时忽略。
     */
    public $Content;

    /**
     * @var array 标签类别搜索。
     */
    public $Labels;

    /**
     * @param integer $Offset 获取偏移量。
     * @param integer $Limit 单页条数，最大为100条，超过则按100条返回。
     * @param string $LibId 关键词库 Id。
     * @param string $Content 关键词搜索字段。
为空字符串时忽略。
     * @param array $Labels 标签类别搜索。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }
    }
}
