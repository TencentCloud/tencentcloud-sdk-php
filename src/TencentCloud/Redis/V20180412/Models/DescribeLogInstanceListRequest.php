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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogInstanceList请求参数结构体
 *
 * @method string getLogType() 获取<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
 * @method void setLogType(string $LogType) 设置<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
 * @method integer getLimit() 获取<p>每页输出的任务列表大小。</p><ul><li>取值范围：[1,100]。</li><li>默认值：20。</li></ul>
 * @method void setLimit(integer $Limit) 设置<p>每页输出的任务列表大小。</p><ul><li>取值范围：[1,100]。</li><li>默认值：20。</li></ul>
 * @method integer getOffset() 获取<p>分页偏移量。默认为0。取值为 Limit 整数倍。计算公式：offset=limit*(页码-1)。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量。默认为0。取值为 Limit 整数倍。计算公式：offset=limit*(页码-1)。</p>
 * @method array getFilters() 获取<p>设置日志筛选字段，过滤并返回符合条件的日志。</p>
 * @method void setFilters(array $Filters) 设置<p>设置日志筛选字段，过滤并返回符合条件的日志。</p>
 * @method string getLogSubType() 获取<p>日志子类型。</p><p>枚举值：</p><ul><li>write： 写日志。</li><li>read： 读日志。</li><li>all： 读写日志。</li></ul>
 * @method void setLogSubType(string $LogSubType) 设置<p>日志子类型。</p><p>枚举值：</p><ul><li>write： 写日志。</li><li>read： 读日志。</li><li>all： 读写日志。</li></ul>
 * @method string getLogSwitch() 获取<p>日志开关。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul><p>默认值：off</p>
 * @method void setLogSwitch(string $LogSwitch) 设置<p>日志开关。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul><p>默认值：off</p>
 */
class DescribeLogInstanceListRequest extends AbstractModel
{
    /**
     * @var string <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
     */
    public $LogType;

    /**
     * @var integer <p>每页输出的任务列表大小。</p><ul><li>取值范围：[1,100]。</li><li>默认值：20。</li></ul>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量。默认为0。取值为 Limit 整数倍。计算公式：offset=limit*(页码-1)。</p>
     */
    public $Offset;

    /**
     * @var array <p>设置日志筛选字段，过滤并返回符合条件的日志。</p>
     */
    public $Filters;

    /**
     * @var string <p>日志子类型。</p><p>枚举值：</p><ul><li>write： 写日志。</li><li>read： 读日志。</li><li>all： 读写日志。</li></ul>
     */
    public $LogSubType;

    /**
     * @var string <p>日志开关。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul><p>默认值：off</p>
     */
    public $LogSwitch;

    /**
     * @param string $LogType <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
     * @param integer $Limit <p>每页输出的任务列表大小。</p><ul><li>取值范围：[1,100]。</li><li>默认值：20。</li></ul>
     * @param integer $Offset <p>分页偏移量。默认为0。取值为 Limit 整数倍。计算公式：offset=limit*(页码-1)。</p>
     * @param array $Filters <p>设置日志筛选字段，过滤并返回符合条件的日志。</p>
     * @param string $LogSubType <p>日志子类型。</p><p>枚举值：</p><ul><li>write： 写日志。</li><li>read： 读日志。</li><li>all： 读写日志。</li></ul>
     * @param string $LogSwitch <p>日志开关。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul><p>默认值：off</p>
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("LogSubType",$param) and $param["LogSubType"] !== null) {
            $this->LogSubType = $param["LogSubType"];
        }

        if (array_key_exists("LogSwitch",$param) and $param["LogSwitch"] !== null) {
            $this->LogSwitch = $param["LogSwitch"];
        }
    }
}
