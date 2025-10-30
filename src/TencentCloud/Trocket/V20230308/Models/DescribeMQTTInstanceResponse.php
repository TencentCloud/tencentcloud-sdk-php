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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMQTTInstance返回参数结构体
 *
 * @method string getInstanceType() 获取实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
 * @method void setInstanceType(string $InstanceType) 设置实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getTopicNum() 获取主题数量
 * @method void setTopicNum(integer $TopicNum) 设置主题数量
 * @method integer getTopicNumLimit() 获取实例最大主题数量
 * @method void setTopicNumLimit(integer $TopicNumLimit) 设置实例最大主题数量
 * @method integer getTpsLimit() 获取TPS限流值
 * @method void setTpsLimit(integer $TpsLimit) 设置TPS限流值
 * @method integer getCreatedTime() 获取创建时间，秒为单位
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间，秒为单位
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method string getInstanceStatus() 获取实例状态
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态
 * @method string getSkuCode() 获取实例规格
 * @method void setSkuCode(string $SkuCode) 设置实例规格
 * @method integer getSubscriptionNumLimit() 获取订阅数上限
 * @method void setSubscriptionNumLimit(integer $SubscriptionNumLimit) 设置订阅数上限
 * @method integer getClientNumLimit() 获取客户端数量上限
 * @method void setClientNumLimit(integer $ClientNumLimit) 设置客户端数量上限
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMQTTInstanceResponse extends AbstractModel
{
    /**
     * @var string 实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
     */
    public $InstanceType;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 主题数量
     */
    public $TopicNum;

    /**
     * @var integer 实例最大主题数量
     */
    public $TopicNumLimit;

    /**
     * @var integer TPS限流值
     */
    public $TpsLimit;

    /**
     * @var integer 创建时间，秒为单位
     */
    public $CreatedTime;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var string 实例状态
     */
    public $InstanceStatus;

    /**
     * @var string 实例规格
     */
    public $SkuCode;

    /**
     * @var integer 订阅数上限
     */
    public $SubscriptionNumLimit;

    /**
     * @var integer 客户端数量上限
     */
    public $ClientNumLimit;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceType 实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $TopicNum 主题数量
     * @param integer $TopicNumLimit 实例最大主题数量
     * @param integer $TpsLimit TPS限流值
     * @param integer $CreatedTime 创建时间，秒为单位
     * @param string $Remark 备注信息
     * @param string $InstanceStatus 实例状态
     * @param string $SkuCode 实例规格
     * @param integer $SubscriptionNumLimit 订阅数上限
     * @param integer $ClientNumLimit 客户端数量上限
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("SubscriptionNumLimit",$param) and $param["SubscriptionNumLimit"] !== null) {
            $this->SubscriptionNumLimit = $param["SubscriptionNumLimit"];
        }

        if (array_key_exists("ClientNumLimit",$param) and $param["ClientNumLimit"] !== null) {
            $this->ClientNumLimit = $param["ClientNumLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
