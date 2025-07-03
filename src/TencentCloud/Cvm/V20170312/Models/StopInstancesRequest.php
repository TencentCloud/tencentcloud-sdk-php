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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取一个或多个待操作的实例ID。可通过 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) 接口返回值中的`InstanceId`获取。每次请求批量实例的上限为100。
 * @method void setInstanceIds(array $InstanceIds) 设置一个或多个待操作的实例ID。可通过 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) 接口返回值中的`InstanceId`获取。每次请求批量实例的上限为100。
 * @method boolean getForceStop() 获取本参数已弃用，推荐使用StopType，不可以与参数StopType同时使用。表示是否在正常关闭失败后选择强制关闭实例。取值范围：<br><li>true：表示在正常关闭失败后进行强制关闭</li><li>false：表示在正常关闭失败后不进行强制关闭</li><br>默认取值：false。
 * @method void setForceStop(boolean $ForceStop) 设置本参数已弃用，推荐使用StopType，不可以与参数StopType同时使用。表示是否在正常关闭失败后选择强制关闭实例。取值范围：<br><li>true：表示在正常关闭失败后进行强制关闭</li><li>false：表示在正常关闭失败后不进行强制关闭</li><br>默认取值：false。
 * @method string getStopType() 获取实例的关闭模式。取值范围：<br><li>SOFT_FIRST：表示在正常关闭失败后进行强制关闭</li><li>HARD：直接强制关闭</li><li>SOFT：仅软关机</li>默认取值：SOFT。
 * @method void setStopType(string $StopType) 设置实例的关闭模式。取值范围：<br><li>SOFT_FIRST：表示在正常关闭失败后进行强制关闭</li><li>HARD：直接强制关闭</li><li>SOFT：仅软关机</li>默认取值：SOFT。
 * @method string getStoppedMode() 获取按量计费实例关机收费模式。
取值范围：<br><li>KEEP_CHARGING：关机继续收费</li><li>STOP_CHARGING：关机停止收费</li><br>默认取值：KEEP_CHARGING。
该参数只针对部分按量计费实例生效，详情参考[按量计费实例关机不收费说明](https://cloud.tencent.com/document/product/213/19918)
 * @method void setStoppedMode(string $StoppedMode) 设置按量计费实例关机收费模式。
取值范围：<br><li>KEEP_CHARGING：关机继续收费</li><li>STOP_CHARGING：关机停止收费</li><br>默认取值：KEEP_CHARGING。
该参数只针对部分按量计费实例生效，详情参考[按量计费实例关机不收费说明](https://cloud.tencent.com/document/product/213/19918)
 */
class StopInstancesRequest extends AbstractModel
{
    /**
     * @var array 一个或多个待操作的实例ID。可通过 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) 接口返回值中的`InstanceId`获取。每次请求批量实例的上限为100。
     */
    public $InstanceIds;

    /**
     * @var boolean 本参数已弃用，推荐使用StopType，不可以与参数StopType同时使用。表示是否在正常关闭失败后选择强制关闭实例。取值范围：<br><li>true：表示在正常关闭失败后进行强制关闭</li><li>false：表示在正常关闭失败后不进行强制关闭</li><br>默认取值：false。
     * @deprecated
     */
    public $ForceStop;

    /**
     * @var string 实例的关闭模式。取值范围：<br><li>SOFT_FIRST：表示在正常关闭失败后进行强制关闭</li><li>HARD：直接强制关闭</li><li>SOFT：仅软关机</li>默认取值：SOFT。
     */
    public $StopType;

    /**
     * @var string 按量计费实例关机收费模式。
取值范围：<br><li>KEEP_CHARGING：关机继续收费</li><li>STOP_CHARGING：关机停止收费</li><br>默认取值：KEEP_CHARGING。
该参数只针对部分按量计费实例生效，详情参考[按量计费实例关机不收费说明](https://cloud.tencent.com/document/product/213/19918)
     */
    public $StoppedMode;

    /**
     * @param array $InstanceIds 一个或多个待操作的实例ID。可通过 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) 接口返回值中的`InstanceId`获取。每次请求批量实例的上限为100。
     * @param boolean $ForceStop 本参数已弃用，推荐使用StopType，不可以与参数StopType同时使用。表示是否在正常关闭失败后选择强制关闭实例。取值范围：<br><li>true：表示在正常关闭失败后进行强制关闭</li><li>false：表示在正常关闭失败后不进行强制关闭</li><br>默认取值：false。
     * @param string $StopType 实例的关闭模式。取值范围：<br><li>SOFT_FIRST：表示在正常关闭失败后进行强制关闭</li><li>HARD：直接强制关闭</li><li>SOFT：仅软关机</li>默认取值：SOFT。
     * @param string $StoppedMode 按量计费实例关机收费模式。
取值范围：<br><li>KEEP_CHARGING：关机继续收费</li><li>STOP_CHARGING：关机停止收费</li><br>默认取值：KEEP_CHARGING。
该参数只针对部分按量计费实例生效，详情参考[按量计费实例关机不收费说明](https://cloud.tencent.com/document/product/213/19918)
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }

        if (array_key_exists("StopType",$param) and $param["StopType"] !== null) {
            $this->StopType = $param["StopType"];
        }

        if (array_key_exists("StoppedMode",$param) and $param["StoppedMode"] !== null) {
            $this->StoppedMode = $param["StoppedMode"];
        }
    }
}
