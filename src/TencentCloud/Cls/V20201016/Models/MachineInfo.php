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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器状态信息
 *
 * @method string getIp() 获取机器的IP
 * @method void setIp(string $Ip) 设置机器的IP
 * @method string getInstanceID() 获取机器实例ID
 * @method void setInstanceID(string $InstanceID) 设置机器实例ID
 * @method integer getStatus() 获取机器状态，0:异常，1:正常
 * @method void setStatus(integer $Status) 设置机器状态，0:异常，1:正常
 * @method string getOfflineTime() 获取机器离线时间，空为正常，异常返回具体时间。时间格式：YYYY-MM-DD HH:mm:ss
 * @method void setOfflineTime(string $OfflineTime) 设置机器离线时间，空为正常，异常返回具体时间。时间格式：YYYY-MM-DD HH:mm:ss
 * @method integer getAutoUpdate() 获取机器是否开启自动升级。0:关闭，1:开启
 * @method void setAutoUpdate(integer $AutoUpdate) 设置机器是否开启自动升级。0:关闭，1:开启
 * @method string getVersion() 获取机器当前版本号。
 * @method void setVersion(string $Version) 设置机器当前版本号。
 * @method integer getUpdateStatus() 获取机器升级功能状态。 0：升级成功；1：升级中；-1：升级失败。
 * @method void setUpdateStatus(integer $UpdateStatus) 设置机器升级功能状态。 0：升级成功；1：升级中；-1：升级失败。
 * @method integer getErrCode() 获取机器升级结果标识。
0：成功；1200：升级成功；其他值表示异常。
 * @method void setErrCode(integer $ErrCode) 设置机器升级结果标识。
0：成功；1200：升级成功；其他值表示异常。
 * @method string getErrMsg() 获取机器升级结果信息。
“ok”：成功；“update success”：升级成功；其他值为失败原因。
 * @method void setErrMsg(string $ErrMsg) 设置机器升级结果信息。
“ok”：成功；“update success”：升级成功；其他值为失败原因。
 */
class MachineInfo extends AbstractModel
{
    /**
     * @var string 机器的IP
     */
    public $Ip;

    /**
     * @var string 机器实例ID
     */
    public $InstanceID;

    /**
     * @var integer 机器状态，0:异常，1:正常
     */
    public $Status;

    /**
     * @var string 机器离线时间，空为正常，异常返回具体时间。时间格式：YYYY-MM-DD HH:mm:ss
     */
    public $OfflineTime;

    /**
     * @var integer 机器是否开启自动升级。0:关闭，1:开启
     */
    public $AutoUpdate;

    /**
     * @var string 机器当前版本号。
     */
    public $Version;

    /**
     * @var integer 机器升级功能状态。 0：升级成功；1：升级中；-1：升级失败。
     */
    public $UpdateStatus;

    /**
     * @var integer 机器升级结果标识。
0：成功；1200：升级成功；其他值表示异常。
     */
    public $ErrCode;

    /**
     * @var string 机器升级结果信息。
“ok”：成功；“update success”：升级成功；其他值为失败原因。
     */
    public $ErrMsg;

    /**
     * @param string $Ip 机器的IP
     * @param string $InstanceID 机器实例ID
     * @param integer $Status 机器状态，0:异常，1:正常
     * @param string $OfflineTime 机器离线时间，空为正常，异常返回具体时间。时间格式：YYYY-MM-DD HH:mm:ss
     * @param integer $AutoUpdate 机器是否开启自动升级。0:关闭，1:开启
     * @param string $Version 机器当前版本号。
     * @param integer $UpdateStatus 机器升级功能状态。 0：升级成功；1：升级中；-1：升级失败。
     * @param integer $ErrCode 机器升级结果标识。
0：成功；1200：升级成功；其他值表示异常。
     * @param string $ErrMsg 机器升级结果信息。
“ok”：成功；“update success”：升级成功；其他值为失败原因。
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("AutoUpdate",$param) and $param["AutoUpdate"] !== null) {
            $this->AutoUpdate = $param["AutoUpdate"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("UpdateStatus",$param) and $param["UpdateStatus"] !== null) {
            $this->UpdateStatus = $param["UpdateStatus"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
