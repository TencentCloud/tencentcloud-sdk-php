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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeBrokerVersion请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id
 * @method integer getType() 获取1.平滑升配.2.垂直升配
 * @method void setType(integer $Type) 设置1.平滑升配.2.垂直升配
 * @method string getSourceVersion() 获取版本号
 * @method void setSourceVersion(string $SourceVersion) 设置版本号
 * @method string getTargetVersion() 获取版本号
 * @method void setTargetVersion(string $TargetVersion) 设置版本号
 * @method string getDelayTimeStamp() 获取延迟时间
 * @method void setDelayTimeStamp(string $DelayTimeStamp) 设置延迟时间
 */
class UpgradeBrokerVersionRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id
     */
    public $InstanceId;

    /**
     * @var integer 1.平滑升配.2.垂直升配
     */
    public $Type;

    /**
     * @var string 版本号
     */
    public $SourceVersion;

    /**
     * @var string 版本号
     */
    public $TargetVersion;

    /**
     * @var string 延迟时间
     */
    public $DelayTimeStamp;

    /**
     * @param string $InstanceId ckafka集群实例Id
     * @param integer $Type 1.平滑升配.2.垂直升配
     * @param string $SourceVersion 版本号
     * @param string $TargetVersion 版本号
     * @param string $DelayTimeStamp 延迟时间
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SourceVersion",$param) and $param["SourceVersion"] !== null) {
            $this->SourceVersion = $param["SourceVersion"];
        }

        if (array_key_exists("TargetVersion",$param) and $param["TargetVersion"] !== null) {
            $this->TargetVersion = $param["TargetVersion"];
        }

        if (array_key_exists("DelayTimeStamp",$param) and $param["DelayTimeStamp"] !== null) {
            $this->DelayTimeStamp = $param["DelayTimeStamp"];
        }
    }
}
