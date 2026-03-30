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
 * ModifyLog请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID，例如：mssql-xjhsdj****。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID，例如：mssql-xjhsdj****。</p>
 * @method string getLogType() 获取<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
 * @method void setLogType(string $LogType) 设置<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
 * @method integer getLogExpireDay() 获取<p>日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7： 7天</li><li>30： 30天</li><li>90： 90天</li><li>180： 180天</li><li>365： 365天</li><li>1095： 1095天</li><li>1825： 1825天</li></ul>
 * @method void setLogExpireDay(integer $LogExpireDay) 设置<p>日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7： 7天</li><li>30： 30天</li><li>90： 90天</li><li>180： 180天</li><li>365： 365天</li><li>1095： 1095天</li><li>1825： 1825天</li></ul>
 * @method integer getHighLogExpireDay() 获取<p>高频日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7： 7天</li></ul>
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) 设置<p>高频日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7： 7天</li></ul>
 */
class ModifyLogRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID，例如：mssql-xjhsdj****。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
     */
    public $LogType;

    /**
     * @var integer <p>日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7： 7天</li><li>30： 30天</li><li>90： 90天</li><li>180： 180天</li><li>365： 365天</li><li>1095： 1095天</li><li>1825： 1825天</li></ul>
     */
    public $LogExpireDay;

    /**
     * @var integer <p>高频日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7： 7天</li></ul>
     */
    public $HighLogExpireDay;

    /**
     * @param string $InstanceId <p>实例ID，例如：mssql-xjhsdj****。</p>
     * @param string $LogType <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
     * @param integer $LogExpireDay <p>日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7： 7天</li><li>30： 30天</li><li>90： 90天</li><li>180： 180天</li><li>365： 365天</li><li>1095： 1095天</li><li>1825： 1825天</li></ul>
     * @param integer $HighLogExpireDay <p>高频日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7： 7天</li></ul>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HighLogExpireDay",$param) and $param["HighLogExpireDay"] !== null) {
            $this->HighLogExpireDay = $param["HighLogExpireDay"];
        }
    }
}
