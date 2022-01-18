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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 连接抑制相关配置
 *
 * @method integer getSdNewLimit() 获取基于源IP+目的IP的每秒新建数限制
 * @method void setSdNewLimit(integer $SdNewLimit) 设置基于源IP+目的IP的每秒新建数限制
 * @method integer getDstNewLimit() 获取基于目的IP的每秒新建数限制
 * @method void setDstNewLimit(integer $DstNewLimit) 设置基于目的IP的每秒新建数限制
 * @method integer getSdConnLimit() 获取基于源IP+目的IP的并发连接控制
 * @method void setSdConnLimit(integer $SdConnLimit) 设置基于源IP+目的IP的并发连接控制
 * @method integer getDstConnLimit() 获取基于目的IP+目的端口的并发连接控制
 * @method void setDstConnLimit(integer $DstConnLimit) 设置基于目的IP+目的端口的并发连接控制
 * @method integer getBadConnThreshold() 获取基于连接抑制触发阈值，取值范围[0,4294967295]
 * @method void setBadConnThreshold(integer $BadConnThreshold) 设置基于连接抑制触发阈值，取值范围[0,4294967295]
 * @method integer getNullConnEnable() 获取异常连接检测条件，空连接防护开关，，取值范围[0,1]
 * @method void setNullConnEnable(integer $NullConnEnable) 设置异常连接检测条件，空连接防护开关，，取值范围[0,1]
 * @method integer getConnTimeout() 获取异常连接检测条件，连接超时，，取值范围[0,65535]
 * @method void setConnTimeout(integer $ConnTimeout) 设置异常连接检测条件，连接超时，，取值范围[0,65535]
 * @method integer getSynRate() 获取异常连接检测条件，syn占比ack百分比，，取值范围[0,100]
 * @method void setSynRate(integer $SynRate) 设置异常连接检测条件，syn占比ack百分比，，取值范围[0,100]
 * @method integer getSynLimit() 获取异常连接检测条件，syn阈值，取值范围[0,100]
 * @method void setSynLimit(integer $SynLimit) 设置异常连接检测条件，syn阈值，取值范围[0,100]
 */
class ConnectLimitConfig extends AbstractModel
{
    /**
     * @var integer 基于源IP+目的IP的每秒新建数限制
     */
    public $SdNewLimit;

    /**
     * @var integer 基于目的IP的每秒新建数限制
     */
    public $DstNewLimit;

    /**
     * @var integer 基于源IP+目的IP的并发连接控制
     */
    public $SdConnLimit;

    /**
     * @var integer 基于目的IP+目的端口的并发连接控制
     */
    public $DstConnLimit;

    /**
     * @var integer 基于连接抑制触发阈值，取值范围[0,4294967295]
     */
    public $BadConnThreshold;

    /**
     * @var integer 异常连接检测条件，空连接防护开关，，取值范围[0,1]
     */
    public $NullConnEnable;

    /**
     * @var integer 异常连接检测条件，连接超时，，取值范围[0,65535]
     */
    public $ConnTimeout;

    /**
     * @var integer 异常连接检测条件，syn占比ack百分比，，取值范围[0,100]
     */
    public $SynRate;

    /**
     * @var integer 异常连接检测条件，syn阈值，取值范围[0,100]
     */
    public $SynLimit;

    /**
     * @param integer $SdNewLimit 基于源IP+目的IP的每秒新建数限制
     * @param integer $DstNewLimit 基于目的IP的每秒新建数限制
     * @param integer $SdConnLimit 基于源IP+目的IP的并发连接控制
     * @param integer $DstConnLimit 基于目的IP+目的端口的并发连接控制
     * @param integer $BadConnThreshold 基于连接抑制触发阈值，取值范围[0,4294967295]
     * @param integer $NullConnEnable 异常连接检测条件，空连接防护开关，，取值范围[0,1]
     * @param integer $ConnTimeout 异常连接检测条件，连接超时，，取值范围[0,65535]
     * @param integer $SynRate 异常连接检测条件，syn占比ack百分比，，取值范围[0,100]
     * @param integer $SynLimit 异常连接检测条件，syn阈值，取值范围[0,100]
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
        if (array_key_exists("SdNewLimit",$param) and $param["SdNewLimit"] !== null) {
            $this->SdNewLimit = $param["SdNewLimit"];
        }

        if (array_key_exists("DstNewLimit",$param) and $param["DstNewLimit"] !== null) {
            $this->DstNewLimit = $param["DstNewLimit"];
        }

        if (array_key_exists("SdConnLimit",$param) and $param["SdConnLimit"] !== null) {
            $this->SdConnLimit = $param["SdConnLimit"];
        }

        if (array_key_exists("DstConnLimit",$param) and $param["DstConnLimit"] !== null) {
            $this->DstConnLimit = $param["DstConnLimit"];
        }

        if (array_key_exists("BadConnThreshold",$param) and $param["BadConnThreshold"] !== null) {
            $this->BadConnThreshold = $param["BadConnThreshold"];
        }

        if (array_key_exists("NullConnEnable",$param) and $param["NullConnEnable"] !== null) {
            $this->NullConnEnable = $param["NullConnEnable"];
        }

        if (array_key_exists("ConnTimeout",$param) and $param["ConnTimeout"] !== null) {
            $this->ConnTimeout = $param["ConnTimeout"];
        }

        if (array_key_exists("SynRate",$param) and $param["SynRate"] !== null) {
            $this->SynRate = $param["SynRate"];
        }

        if (array_key_exists("SynLimit",$param) and $param["SynLimit"] !== null) {
            $this->SynLimit = $param["SynLimit"];
        }
    }
}
