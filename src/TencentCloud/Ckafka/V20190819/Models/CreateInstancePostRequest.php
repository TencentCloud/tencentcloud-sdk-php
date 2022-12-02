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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstancePost请求参数结构体
 *
 * @method string getInstanceName() 获取实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method void setInstanceName(string $InstanceName) 设置实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method integer getBandWidth() 获取实例带宽
 * @method void setBandWidth(integer $BandWidth) 设置实例带宽
 * @method string getVpcId() 获取vpcId，不填默认基础网络
 * @method void setVpcId(string $VpcId) 设置vpcId，不填默认基础网络
 * @method string getSubnetId() 获取子网id，vpc网络需要传该参数，基础网络可以不传
 * @method void setSubnetId(string $SubnetId) 设置子网id，vpc网络需要传该参数，基础网络可以不传
 * @method integer getMsgRetentionTime() 获取可选。实例日志的最长保留时间，单位分钟，默认为10080（7天），最大30天，不填默认0，代表不开启日志保留时间回收策略
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) 设置可选。实例日志的最长保留时间，单位分钟，默认为10080（7天），最大30天，不填默认0，代表不开启日志保留时间回收策略
 * @method integer getZoneId() 获取可用区
 * @method void setZoneId(integer $ZoneId) 设置可用区
 * @method integer getClusterId() 获取创建实例时可以选择集群Id, 该入参表示集群Id
 * @method void setClusterId(integer $ClusterId) 设置创建实例时可以选择集群Id, 该入参表示集群Id
 */
class CreateInstancePostRequest extends AbstractModel
{
    /**
     * @var string 实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     */
    public $InstanceName;

    /**
     * @var integer 实例带宽
     */
    public $BandWidth;

    /**
     * @var string vpcId，不填默认基础网络
     */
    public $VpcId;

    /**
     * @var string 子网id，vpc网络需要传该参数，基础网络可以不传
     */
    public $SubnetId;

    /**
     * @var integer 可选。实例日志的最长保留时间，单位分钟，默认为10080（7天），最大30天，不填默认0，代表不开启日志保留时间回收策略
     */
    public $MsgRetentionTime;

    /**
     * @var integer 可用区
     */
    public $ZoneId;

    /**
     * @var integer 创建实例时可以选择集群Id, 该入参表示集群Id
     */
    public $ClusterId;

    /**
     * @param string $InstanceName 实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     * @param integer $BandWidth 实例带宽
     * @param string $VpcId vpcId，不填默认基础网络
     * @param string $SubnetId 子网id，vpc网络需要传该参数，基础网络可以不传
     * @param integer $MsgRetentionTime 可选。实例日志的最长保留时间，单位分钟，默认为10080（7天），最大30天，不填默认0，代表不开启日志保留时间回收策略
     * @param integer $ZoneId 可用区
     * @param integer $ClusterId 创建实例时可以选择集群Id, 该入参表示集群Id
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

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
