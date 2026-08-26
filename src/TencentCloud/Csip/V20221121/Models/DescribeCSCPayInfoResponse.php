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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCSCPayInfo返回参数结构体
 *
 * @method integer getAppID() 获取<p>租户AppID。</p>
 * @method void setAppID(integer $AppID) 设置<p>租户AppID。</p>
 * @method integer getOrderStatus() 获取<p>订单状态。取值：0（未购买）、1（正常）、2（隔离）、3（销毁）、4（修改）、5（续费）、6（试用）、7（过期）、8（试用到期）。</p>
 * @method void setOrderStatus(integer $OrderStatus) 设置<p>订单状态。取值：0（未购买）、1（正常）、2（隔离）、3（销毁）、4（修改）、5（续费）、6（试用）、7（过期）、8（试用到期）。</p>
 * @method integer getPayMode() 获取<p>付费模式。取值：0（后付费）、1（预付费）。</p>
 * @method void setPayMode(integer $PayMode) 设置<p>付费模式。取值：0（后付费）、1（预付费）。</p>
 * @method string getBeginTime() 获取<p>订单开始时间，格式：2006-01-02 15:04:05。</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>订单开始时间，格式：2006-01-02 15:04:05。</p>
 * @method string getEndTime() 获取<p>订单结束时间，格式：2006-01-02 15:04:05。</p>
 * @method void setEndTime(string $EndTime) 设置<p>订单结束时间，格式：2006-01-02 15:04:05。</p>
 * @method integer getAutoRenew() 获取<p>自动续费标志。取值：0（未设置）、1（自动续费）、2（不自动续费）。</p>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>自动续费标志。取值：0（未设置）、1（自动续费）、2（不自动续费）。</p>
 * @method integer getTimeSpan() 获取<p>购买时长。</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>购买时长。</p>
 * @method string getTimeUnit() 获取<p>时间单位，如 m（月）。</p>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>时间单位，如 m（月）。</p>
 * @method string getResourceId() 获取<p>资源ID。</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID。</p>
 * @method string getTimeNow() 获取<p>当前服务器时间，格式：2006-01-02 15:04:05。</p>
 * @method void setTimeNow(string $TimeNow) 设置<p>当前服务器时间，格式：2006-01-02 15:04:05。</p>
 * @method string getUin() 获取<p>账号UIN。</p>
 * @method void setUin(string $Uin) 设置<p>账号UIN。</p>
 * @method string getNickName() 获取<p>账号昵称。</p>
 * @method void setNickName(string $NickName) 设置<p>账号昵称。</p>
 * @method integer getNewUser() 获取<p>是否为新用户。取值：1（新用户）、0（旧用户）。</p>
 * @method void setNewUser(integer $NewUser) 设置<p>是否为新用户。取值：1（新用户）、0（旧用户）。</p>
 * @method array getQuotaList() 获取<p>用户计费信息，Key为L4</p>
 * @method void setQuotaList(array $QuotaList) 设置<p>用户计费信息，Key为L4</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCSCPayInfoResponse extends AbstractModel
{
    /**
     * @var integer <p>租户AppID。</p>
     */
    public $AppID;

    /**
     * @var integer <p>订单状态。取值：0（未购买）、1（正常）、2（隔离）、3（销毁）、4（修改）、5（续费）、6（试用）、7（过期）、8（试用到期）。</p>
     */
    public $OrderStatus;

    /**
     * @var integer <p>付费模式。取值：0（后付费）、1（预付费）。</p>
     */
    public $PayMode;

    /**
     * @var string <p>订单开始时间，格式：2006-01-02 15:04:05。</p>
     */
    public $BeginTime;

    /**
     * @var string <p>订单结束时间，格式：2006-01-02 15:04:05。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>自动续费标志。取值：0（未设置）、1（自动续费）、2（不自动续费）。</p>
     */
    public $AutoRenew;

    /**
     * @var integer <p>购买时长。</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>时间单位，如 m（月）。</p>
     */
    public $TimeUnit;

    /**
     * @var string <p>资源ID。</p>
     */
    public $ResourceId;

    /**
     * @var string <p>当前服务器时间，格式：2006-01-02 15:04:05。</p>
     */
    public $TimeNow;

    /**
     * @var string <p>账号UIN。</p>
     */
    public $Uin;

    /**
     * @var string <p>账号昵称。</p>
     */
    public $NickName;

    /**
     * @var integer <p>是否为新用户。取值：1（新用户）、0（旧用户）。</p>
     */
    public $NewUser;

    /**
     * @var array <p>用户计费信息，Key为L4</p>
     */
    public $QuotaList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AppID <p>租户AppID。</p>
     * @param integer $OrderStatus <p>订单状态。取值：0（未购买）、1（正常）、2（隔离）、3（销毁）、4（修改）、5（续费）、6（试用）、7（过期）、8（试用到期）。</p>
     * @param integer $PayMode <p>付费模式。取值：0（后付费）、1（预付费）。</p>
     * @param string $BeginTime <p>订单开始时间，格式：2006-01-02 15:04:05。</p>
     * @param string $EndTime <p>订单结束时间，格式：2006-01-02 15:04:05。</p>
     * @param integer $AutoRenew <p>自动续费标志。取值：0（未设置）、1（自动续费）、2（不自动续费）。</p>
     * @param integer $TimeSpan <p>购买时长。</p>
     * @param string $TimeUnit <p>时间单位，如 m（月）。</p>
     * @param string $ResourceId <p>资源ID。</p>
     * @param string $TimeNow <p>当前服务器时间，格式：2006-01-02 15:04:05。</p>
     * @param string $Uin <p>账号UIN。</p>
     * @param string $NickName <p>账号昵称。</p>
     * @param integer $NewUser <p>是否为新用户。取值：1（新用户）、0（旧用户）。</p>
     * @param array $QuotaList <p>用户计费信息，Key为L4</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TimeNow",$param) and $param["TimeNow"] !== null) {
            $this->TimeNow = $param["TimeNow"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("NewUser",$param) and $param["NewUser"] !== null) {
            $this->NewUser = $param["NewUser"];
        }

        if (array_key_exists("QuotaList",$param) and $param["QuotaList"] !== null) {
            $this->QuotaList = [];
            foreach ($param["QuotaList"] as $key => $value){
                $obj = new OrderQuotaInfo();
                $obj->deserialize($value);
                array_push($this->QuotaList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
