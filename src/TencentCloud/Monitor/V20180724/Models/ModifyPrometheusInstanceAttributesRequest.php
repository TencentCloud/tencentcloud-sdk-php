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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPrometheusInstanceAttributes请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method integer getDataRetentionTime() 获取<p>数据存储时间（单位天），限制值为15, 30, 45, 90, 180, 365, 730之一</p>
 * @method void setDataRetentionTime(integer $DataRetentionTime) 设置<p>数据存储时间（单位天），限制值为15, 30, 45, 90, 180, 365, 730之一</p>
 * @method array getInstanceAttributes() 获取<p>标识prom实例特殊属性</p><p>归档存储时长(天):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p>
 * @method void setInstanceAttributes(array $InstanceAttributes) 设置<p>标识prom实例特殊属性</p><p>归档存储时长(天):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p>
 */
class ModifyPrometheusInstanceAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>数据存储时间（单位天），限制值为15, 30, 45, 90, 180, 365, 730之一</p>
     */
    public $DataRetentionTime;

    /**
     * @var array <p>标识prom实例特殊属性</p><p>归档存储时长(天):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p>
     */
    public $InstanceAttributes;

    /**
     * @param string $InstanceId <p>实例 ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param integer $DataRetentionTime <p>数据存储时间（单位天），限制值为15, 30, 45, 90, 180, 365, 730之一</p>
     * @param array $InstanceAttributes <p>标识prom实例特殊属性</p><p>归档存储时长(天):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p>
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("DataRetentionTime",$param) and $param["DataRetentionTime"] !== null) {
            $this->DataRetentionTime = $param["DataRetentionTime"];
        }

        if (array_key_exists("InstanceAttributes",$param) and $param["InstanceAttributes"] !== null) {
            $this->InstanceAttributes = [];
            foreach ($param["InstanceAttributes"] as $key => $value){
                $obj = new PrometheusRuleKV();
                $obj->deserialize($value);
                array_push($this->InstanceAttributes, $obj);
            }
        }
    }
}
