<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method integer getDataRetentionTime() 获取存储时长（取值为 15、30、45。此参数不适用于包年包月实例）
 * @method void setDataRetentionTime(integer $DataRetentionTime) 设置存储时长（取值为 15、30、45。此参数不适用于包年包月实例）
 */
class ModifyPrometheusInstanceAttributesRequest extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var integer 存储时长（取值为 15、30、45。此参数不适用于包年包月实例）
     */
    public $DataRetentionTime;

    /**
     * @param string $InstanceName 实例名称
     * @param string $InstanceId 实例 ID
     * @param integer $DataRetentionTime 存储时长（取值为 15、30、45。此参数不适用于包年包月实例）
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DataRetentionTime",$param) and $param["DataRetentionTime"] !== null) {
            $this->DataRetentionTime = $param["DataRetentionTime"];
        }
    }
}
