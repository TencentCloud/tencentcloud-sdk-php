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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceLogDelivery请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method string getLogType() 获取日志类型。当前仅支持设置为slowlog，指慢查询日志。
 * @method void setLogType(string $LogType) 设置日志类型。当前仅支持设置为slowlog，指慢查询日志。
 * @method boolean getEnabled() 获取日志投递开启状态。
- true：开启。
- false：关闭。
 * @method void setEnabled(boolean $Enabled) 设置日志投递开启状态。
- true：开启。
- false：关闭。
 * @method string getLogsetId() 获取投递的日志集ID。通过接口[DescribeInstanceLogDelivery](https://cloud.tencent.com/document/product/239/110878)的返回参数 **SlowLog** 的子参数 **LogsetId** 获取。
 * @method void setLogsetId(string $LogsetId) 设置投递的日志集ID。通过接口[DescribeInstanceLogDelivery](https://cloud.tencent.com/document/product/239/110878)的返回参数 **SlowLog** 的子参数 **LogsetId** 获取。
 * @method string getTopicId() 获取投递的日志主题ID。请通过接口[DescribeInstanceLogDelivery](https://cloud.tencent.com/document/product/239/110878)的返回参数 **SlowLog** 的子参数 **TopicId** 获取。
 * @method void setTopicId(string $TopicId) 设置投递的日志主题ID。请通过接口[DescribeInstanceLogDelivery](https://cloud.tencent.com/document/product/239/110878)的返回参数 **SlowLog** 的子参数 **TopicId** 获取。
 * @method string getLogsetName() 获取日志集名称。若**LogsetId**未指定具体的日志集ID，请配置该参数，设置日志集名称，系统会以设置的日志集名称自动创建新的日志集。
 * @method void setLogsetName(string $LogsetName) 设置日志集名称。若**LogsetId**未指定具体的日志集ID，请配置该参数，设置日志集名称，系统会以设置的日志集名称自动创建新的日志集。
 * @method string getTopicName() 获取日志主题名称，TopicId为空时必传，会自动创建新的日志主题。
 * @method void setTopicName(string $TopicName) 设置日志主题名称，TopicId为空时必传，会自动创建新的日志主题。
 * @method string getLogRegion() 获取日志集所在地域，不传默认使用实例所在地域。
 * @method void setLogRegion(string $LogRegion) 设置日志集所在地域，不传默认使用实例所在地域。
 * @method integer getPeriod() 获取日志存储时间，默认为30天，可选范围1-3600天。
 * @method void setPeriod(integer $Period) 设置日志存储时间，默认为30天，可选范围1-3600天。
 * @method boolean getCreateIndex() 获取创建日志主题时，是否创建索引。
 * @method void setCreateIndex(boolean $CreateIndex) 设置创建日志主题时，是否创建索引。
 */
class ModifyInstanceLogDeliveryRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 日志类型。当前仅支持设置为slowlog，指慢查询日志。
     */
    public $LogType;

    /**
     * @var boolean 日志投递开启状态。
- true：开启。
- false：关闭。
     */
    public $Enabled;

    /**
     * @var string 投递的日志集ID。通过接口[DescribeInstanceLogDelivery](https://cloud.tencent.com/document/product/239/110878)的返回参数 **SlowLog** 的子参数 **LogsetId** 获取。
     */
    public $LogsetId;

    /**
     * @var string 投递的日志主题ID。请通过接口[DescribeInstanceLogDelivery](https://cloud.tencent.com/document/product/239/110878)的返回参数 **SlowLog** 的子参数 **TopicId** 获取。
     */
    public $TopicId;

    /**
     * @var string 日志集名称。若**LogsetId**未指定具体的日志集ID，请配置该参数，设置日志集名称，系统会以设置的日志集名称自动创建新的日志集。
     */
    public $LogsetName;

    /**
     * @var string 日志主题名称，TopicId为空时必传，会自动创建新的日志主题。
     */
    public $TopicName;

    /**
     * @var string 日志集所在地域，不传默认使用实例所在地域。
     */
    public $LogRegion;

    /**
     * @var integer 日志存储时间，默认为30天，可选范围1-3600天。
     */
    public $Period;

    /**
     * @var boolean 创建日志主题时，是否创建索引。
     */
    public $CreateIndex;

    /**
     * @param string $InstanceId 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     * @param string $LogType 日志类型。当前仅支持设置为slowlog，指慢查询日志。
     * @param boolean $Enabled 日志投递开启状态。
- true：开启。
- false：关闭。
     * @param string $LogsetId 投递的日志集ID。通过接口[DescribeInstanceLogDelivery](https://cloud.tencent.com/document/product/239/110878)的返回参数 **SlowLog** 的子参数 **LogsetId** 获取。
     * @param string $TopicId 投递的日志主题ID。请通过接口[DescribeInstanceLogDelivery](https://cloud.tencent.com/document/product/239/110878)的返回参数 **SlowLog** 的子参数 **TopicId** 获取。
     * @param string $LogsetName 日志集名称。若**LogsetId**未指定具体的日志集ID，请配置该参数，设置日志集名称，系统会以设置的日志集名称自动创建新的日志集。
     * @param string $TopicName 日志主题名称，TopicId为空时必传，会自动创建新的日志主题。
     * @param string $LogRegion 日志集所在地域，不传默认使用实例所在地域。
     * @param integer $Period 日志存储时间，默认为30天，可选范围1-3600天。
     * @param boolean $CreateIndex 创建日志主题时，是否创建索引。
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

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("CreateIndex",$param) and $param["CreateIndex"] !== null) {
            $this->CreateIndex = $param["CreateIndex"];
        }
    }
}
