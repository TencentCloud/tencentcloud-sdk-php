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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getHealthSwitch() 获取是否开启健康检查：1（开启）、0（关闭）。
 * @method void setHealthSwitch(integer $HealthSwitch) 设置是否开启健康检查：1（开启）、0（关闭）。
 * @method integer getTimeOut() 获取健康检查的响应超时时间，可选值：2~60，默认值：2，单位：秒。响应超时时间要小于检查间隔时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeOut(integer $TimeOut) 设置健康检查的响应超时时间，可选值：2~60，默认值：2，单位：秒。响应超时时间要小于检查间隔时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIntervalTime() 获取健康检查探测间隔时间，默认值：5，可选值：5~300，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntervalTime(integer $IntervalTime) 设置健康检查探测间隔时间，默认值：5，可选值：5~300，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHealthNum() 获取健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2~10，单位：次。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthNum(integer $HealthNum) 设置健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2~10，单位：次。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnHealthNum() 获取不健康阈值，默认值：3，表示当连续探测三次不健康则表示该转发异常，可选值：2~10，单位：次。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnHealthNum(integer $UnHealthNum) 设置不健康阈值，默认值：3，表示当连续探测三次不健康则表示该转发异常，可选值：2~10，单位：次。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHttpCode() 获取健康检查状态码（仅适用于HTTP/HTTPS转发规则）。可选值：1~31，默认 31。
1 表示探测后返回值 1xx 表示健康，2 表示返回 2xx 表示健康，4 表示返回 3xx 表示健康，8 表示返回 4xx 表示健康，16 表示返回 5xx 表示健康。若希望多种码都表示健康，则将相应的值相加。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpCode(integer $HttpCode) 设置健康检查状态码（仅适用于HTTP/HTTPS转发规则）。可选值：1~31，默认 31。
1 表示探测后返回值 1xx 表示健康，2 表示返回 2xx 表示健康，4 表示返回 3xx 表示健康，8 表示返回 4xx 表示健康，16 表示返回 5xx 表示健康。若希望多种码都表示健康，则将相应的值相加。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpCheckPath() 获取健康检查路径（仅适用于HTTP/HTTPS转发规则）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpCheckPath(string $HttpCheckPath) 设置健康检查路径（仅适用于HTTP/HTTPS转发规则）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpCheckDomain() 获取健康检查域名（仅适用于HTTP/HTTPS转发规则）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpCheckDomain(string $HttpCheckDomain) 设置健康检查域名（仅适用于HTTP/HTTPS转发规则）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpCheckMethod() 获取健康检查方法（仅适用于HTTP/HTTPS转发规则），取值为HEAD或GET。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpCheckMethod(string $HttpCheckMethod) 设置健康检查方法（仅适用于HTTP/HTTPS转发规则），取值为HEAD或GET。
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *健康检查信息
 */
class HealthCheck extends AbstractModel
{
    /**
     * @var integer 是否开启健康检查：1（开启）、0（关闭）。
     */
    public $HealthSwitch;

    /**
     * @var integer 健康检查的响应超时时间，可选值：2~60，默认值：2，单位：秒。响应超时时间要小于检查间隔时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeOut;

    /**
     * @var integer 健康检查探测间隔时间，默认值：5，可选值：5~300，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntervalTime;

    /**
     * @var integer 健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2~10，单位：次。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthNum;

    /**
     * @var integer 不健康阈值，默认值：3，表示当连续探测三次不健康则表示该转发异常，可选值：2~10，单位：次。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnHealthNum;

    /**
     * @var integer 健康检查状态码（仅适用于HTTP/HTTPS转发规则）。可选值：1~31，默认 31。
1 表示探测后返回值 1xx 表示健康，2 表示返回 2xx 表示健康，4 表示返回 3xx 表示健康，8 表示返回 4xx 表示健康，16 表示返回 5xx 表示健康。若希望多种码都表示健康，则将相应的值相加。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpCode;

    /**
     * @var string 健康检查路径（仅适用于HTTP/HTTPS转发规则）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpCheckPath;

    /**
     * @var string 健康检查域名（仅适用于HTTP/HTTPS转发规则）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpCheckDomain;

    /**
     * @var string 健康检查方法（仅适用于HTTP/HTTPS转发规则），取值为HEAD或GET。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpCheckMethod;
    /**
     * @param integer $HealthSwitch 是否开启健康检查：1（开启）、0（关闭）。
     * @param integer $TimeOut 健康检查的响应超时时间，可选值：2~60，默认值：2，单位：秒。响应超时时间要小于检查间隔时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IntervalTime 健康检查探测间隔时间，默认值：5，可选值：5~300，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HealthNum 健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2~10，单位：次。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnHealthNum 不健康阈值，默认值：3，表示当连续探测三次不健康则表示该转发异常，可选值：2~10，单位：次。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HttpCode 健康检查状态码（仅适用于HTTP/HTTPS转发规则）。可选值：1~31，默认 31。
1 表示探测后返回值 1xx 表示健康，2 表示返回 2xx 表示健康，4 表示返回 3xx 表示健康，8 表示返回 4xx 表示健康，16 表示返回 5xx 表示健康。若希望多种码都表示健康，则将相应的值相加。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpCheckPath 健康检查路径（仅适用于HTTP/HTTPS转发规则）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpCheckDomain 健康检查域名（仅适用于HTTP/HTTPS转发规则）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpCheckMethod 健康检查方法（仅适用于HTTP/HTTPS转发规则），取值为HEAD或GET。
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("HealthSwitch",$param) and $param["HealthSwitch"] !== null) {
            $this->HealthSwitch = $param["HealthSwitch"];
        }

        if (array_key_exists("TimeOut",$param) and $param["TimeOut"] !== null) {
            $this->TimeOut = $param["TimeOut"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("HealthNum",$param) and $param["HealthNum"] !== null) {
            $this->HealthNum = $param["HealthNum"];
        }

        if (array_key_exists("UnHealthNum",$param) and $param["UnHealthNum"] !== null) {
            $this->UnHealthNum = $param["UnHealthNum"];
        }

        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("HttpCheckPath",$param) and $param["HttpCheckPath"] !== null) {
            $this->HttpCheckPath = $param["HttpCheckPath"];
        }

        if (array_key_exists("HttpCheckDomain",$param) and $param["HttpCheckDomain"] !== null) {
            $this->HttpCheckDomain = $param["HttpCheckDomain"];
        }

        if (array_key_exists("HttpCheckMethod",$param) and $param["HttpCheckMethod"] !== null) {
            $this->HttpCheckMethod = $param["HttpCheckMethod"];
        }
    }
}
