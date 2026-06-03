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
 * @method string getInstanceId() 获取<p>ckafka集群实例Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id</p>
 * @method integer getType() 获取<p>版本升级类型</p><p>枚举值：</p><ul><li>1： 小版本迁移升级(推荐)</li></ul>
 * @method void setType(integer $Type) 设置<p>版本升级类型</p><p>枚举值：</p><ul><li>1： 小版本迁移升级(推荐)</li></ul>
 * @method string getSourceVersion() 获取<p>版本号</p>
 * @method void setSourceVersion(string $SourceVersion) 设置<p>版本号</p>
 * @method string getTargetVersion() 获取<p>版本号</p>
 * @method void setTargetVersion(string $TargetVersion) 设置<p>版本号</p>
 * @method string getDelayTimeStamp() 获取<p>延迟时间</p>
 * @method void setDelayTimeStamp(string $DelayTimeStamp) 设置<p>延迟时间</p>
 */
class UpgradeBrokerVersionRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>版本升级类型</p><p>枚举值：</p><ul><li>1： 小版本迁移升级(推荐)</li></ul>
     */
    public $Type;

    /**
     * @var string <p>版本号</p>
     */
    public $SourceVersion;

    /**
     * @var string <p>版本号</p>
     */
    public $TargetVersion;

    /**
     * @var string <p>延迟时间</p>
     */
    public $DelayTimeStamp;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id</p>
     * @param integer $Type <p>版本升级类型</p><p>枚举值：</p><ul><li>1： 小版本迁移升级(推荐)</li></ul>
     * @param string $SourceVersion <p>版本号</p>
     * @param string $TargetVersion <p>版本号</p>
     * @param string $DelayTimeStamp <p>延迟时间</p>
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
