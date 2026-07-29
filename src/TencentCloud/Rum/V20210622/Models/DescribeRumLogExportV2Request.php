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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRumLogExportV2请求参数结构体
 *
 * @method string getName() 获取<p>Name（string，必填）：导出任务名称标识，需要在使用API创建导出任务时填写。此字段为后续能力扩展预留，不在查询结果中返回。</p>
 * @method void setName(string $Name) 设置<p>Name（string，必填）：导出任务名称标识，需要在使用API创建导出任务时填写。此字段为后续能力扩展预留，不在查询结果中返回。</p>
 * @method integer getStartTime() 获取<p>查询日志开始时间(必填)</p>
 * @method void setStartTime(integer $StartTime) 设置<p>查询日志开始时间(必填)</p>
 * @method string getFilter() 获取<p>过滤条件，其中key与运算符(Operator)对应可选字段枚举值与示例查看文档：<a href="https://cloud.tencent.com/document/product/248/87223">日志查询相关</a></p>
 * @method void setFilter(string $Filter) 设置<p>过滤条件，其中key与运算符(Operator)对应可选字段枚举值与示例查看文档：<a href="https://cloud.tencent.com/document/product/248/87223">日志查询相关</a></p>
 * @method integer getEndTime() 获取<p>查询日志结束时间(必填)</p>
 * @method void setEndTime(integer $EndTime) 设置<p>查询日志结束时间(必填)</p>
 * @method integer getID() 获取<p>项目ID</p>
 * @method void setID(integer $ID) 设置<p>项目ID</p>
 * @method array getFields() 获取<p>注意：这个字段必选，不能为空！选择要导出哪些字段的参数，对应日志的列，可查看文档：<a href="https://cloud.tencent.com/document/product/248/87223">日志查询相关</a></p><p>枚举值：</p><ul><li>level： 日志类型</li><li>url： URL</li><li>ip： 用户终端IP</li><li>version： 版本</li></ul>
 * @method void setFields(array $Fields) 设置<p>注意：这个字段必选，不能为空！选择要导出哪些字段的参数，对应日志的列，可查看文档：<a href="https://cloud.tencent.com/document/product/248/87223">日志查询相关</a></p><p>枚举值：</p><ul><li>level： 日志类型</li><li>url： URL</li><li>ip： 用户终端IP</li><li>version： 版本</li></ul>
 */
class DescribeRumLogExportV2Request extends AbstractModel
{
    /**
     * @var string <p>Name（string，必填）：导出任务名称标识，需要在使用API创建导出任务时填写。此字段为后续能力扩展预留，不在查询结果中返回。</p>
     */
    public $Name;

    /**
     * @var integer <p>查询日志开始时间(必填)</p>
     */
    public $StartTime;

    /**
     * @var string <p>过滤条件，其中key与运算符(Operator)对应可选字段枚举值与示例查看文档：<a href="https://cloud.tencent.com/document/product/248/87223">日志查询相关</a></p>
     */
    public $Filter;

    /**
     * @var integer <p>查询日志结束时间(必填)</p>
     */
    public $EndTime;

    /**
     * @var integer <p>项目ID</p>
     */
    public $ID;

    /**
     * @var array <p>注意：这个字段必选，不能为空！选择要导出哪些字段的参数，对应日志的列，可查看文档：<a href="https://cloud.tencent.com/document/product/248/87223">日志查询相关</a></p><p>枚举值：</p><ul><li>level： 日志类型</li><li>url： URL</li><li>ip： 用户终端IP</li><li>version： 版本</li></ul>
     */
    public $Fields;

    /**
     * @param string $Name <p>Name（string，必填）：导出任务名称标识，需要在使用API创建导出任务时填写。此字段为后续能力扩展预留，不在查询结果中返回。</p>
     * @param integer $StartTime <p>查询日志开始时间(必填)</p>
     * @param string $Filter <p>过滤条件，其中key与运算符(Operator)对应可选字段枚举值与示例查看文档：<a href="https://cloud.tencent.com/document/product/248/87223">日志查询相关</a></p>
     * @param integer $EndTime <p>查询日志结束时间(必填)</p>
     * @param integer $ID <p>项目ID</p>
     * @param array $Fields <p>注意：这个字段必选，不能为空！选择要导出哪些字段的参数，对应日志的列，可查看文档：<a href="https://cloud.tencent.com/document/product/248/87223">日志查询相关</a></p><p>枚举值：</p><ul><li>level： 日志类型</li><li>url： URL</li><li>ip： 用户终端IP</li><li>version： 版本</li></ul>
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = $param["Fields"];
        }
    }
}
