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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogInstanceList请求参数结构体
 *
 * @method string getLogType() 获取<p>日志类型：auditLog,slowLog,errorLog</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型：auditLog,slowLog,errorLog</p>
 * @method integer getLimit() 获取<p>单页条数限制，取值[0, 100)</p>
 * @method void setLimit(integer $Limit) 设置<p>单页条数限制，取值[0, 100)</p>
 * @method integer getOffset() 获取<p>偏移量，大于0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，大于0</p>
 * @method array getFilters() 获取<p>业务侧实例过滤参数</p>
 * @method void setFilters(array $Filters) 设置<p>业务侧实例过滤参数</p>
 * @method string getLogSwitch() 获取<p>日志开关,不传查询所有日志实例： on-开启，off-未开启。</p>
 * @method void setLogSwitch(string $LogSwitch) 设置<p>日志开关,不传查询所有日志实例： on-开启，off-未开启。</p>
 */
class DescribeLogInstanceListRequest extends AbstractModel
{
    /**
     * @var string <p>日志类型：auditLog,slowLog,errorLog</p>
     */
    public $LogType;

    /**
     * @var integer <p>单页条数限制，取值[0, 100)</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，大于0</p>
     */
    public $Offset;

    /**
     * @var array <p>业务侧实例过滤参数</p>
     */
    public $Filters;

    /**
     * @var string <p>日志开关,不传查询所有日志实例： on-开启，off-未开启。</p>
     */
    public $LogSwitch;

    /**
     * @param string $LogType <p>日志类型：auditLog,slowLog,errorLog</p>
     * @param integer $Limit <p>单页条数限制，取值[0, 100)</p>
     * @param integer $Offset <p>偏移量，大于0</p>
     * @param array $Filters <p>业务侧实例过滤参数</p>
     * @param string $LogSwitch <p>日志开关,不传查询所有日志实例： on-开启，off-未开启。</p>
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

        if (array_key_exists("LogSwitch",$param) and $param["LogSwitch"] !== null) {
            $this->LogSwitch = $param["LogSwitch"];
        }
    }
}
