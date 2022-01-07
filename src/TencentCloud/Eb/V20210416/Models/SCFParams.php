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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云函数参数
 *
 * @method integer getBatchTimeout() 获取批量投递最长等待时间
 * @method void setBatchTimeout(integer $BatchTimeout) 设置批量投递最长等待时间
 * @method integer getBatchEventCount() 获取批量投递最大事件条数
 * @method void setBatchEventCount(integer $BatchEventCount) 设置批量投递最大事件条数
 * @method boolean getEnableBatchDelivery() 获取开启批量投递使能
 * @method void setEnableBatchDelivery(boolean $EnableBatchDelivery) 设置开启批量投递使能
 */
class SCFParams extends AbstractModel
{
    /**
     * @var integer 批量投递最长等待时间
     */
    public $BatchTimeout;

    /**
     * @var integer 批量投递最大事件条数
     */
    public $BatchEventCount;

    /**
     * @var boolean 开启批量投递使能
     */
    public $EnableBatchDelivery;

    /**
     * @param integer $BatchTimeout 批量投递最长等待时间
     * @param integer $BatchEventCount 批量投递最大事件条数
     * @param boolean $EnableBatchDelivery 开启批量投递使能
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
        if (array_key_exists("BatchTimeout",$param) and $param["BatchTimeout"] !== null) {
            $this->BatchTimeout = $param["BatchTimeout"];
        }

        if (array_key_exists("BatchEventCount",$param) and $param["BatchEventCount"] !== null) {
            $this->BatchEventCount = $param["BatchEventCount"];
        }

        if (array_key_exists("EnableBatchDelivery",$param) and $param["EnableBatchDelivery"] !== null) {
            $this->EnableBatchDelivery = $param["EnableBatchDelivery"];
        }
    }
}
