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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道合作加固小程序加固结果
 *
 * @method string getResultId() 获取加固任务结果id
 * @method void setResultId(string $ResultId) 设置加固任务结果id
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method string getOrderId() 获取订单id
 * @method void setOrderId(string $OrderId) 设置订单id
 * @method integer getOpUin() 获取操作账号
 * @method void setOpUin(integer $OpUin) 设置操作账号
 * @method integer getEncryptState() 获取加固结果
 * @method void setEncryptState(integer $EncryptState) 设置加固结果
 * @method string getEncryptStateDesc() 获取加固结果描述
 * @method void setEncryptStateDesc(string $EncryptStateDesc) 设置加固结果描述
 * @method integer getEncryptErrCode() 获取失败错误码
 * @method void setEncryptErrCode(integer $EncryptErrCode) 设置失败错误码
 * @method string getEncryptErrDesc() 获取失败原因
 * @method void setEncryptErrDesc(string $EncryptErrDesc) 设置失败原因
 * @method string getEncryptErrRef() 获取解决方案
 * @method void setEncryptErrRef(string $EncryptErrRef) 设置解决方案
 * @method string getCreatTime() 获取任务创建时间
 * @method void setCreatTime(string $CreatTime) 设置任务创建时间
 * @method string getStartTime() 获取任务开始处理时间
 * @method void setStartTime(string $StartTime) 设置任务开始处理时间
 * @method string getEndTime() 获取任务处理结束时间
 * @method void setEndTime(string $EndTime) 设置任务处理结束时间
 * @method integer getCostTime() 获取加固耗时（秒单位）
 * @method void setCostTime(integer $CostTime) 设置加固耗时（秒单位）
 * @method string getEncryptPkgUrl() 获取在线加固成功下载包
 * @method void setEncryptPkgUrl(string $EncryptPkgUrl) 设置在线加固成功下载包
 * @method AppletInfo getAppletInfo() 获取本次加固配置
 * @method void setAppletInfo(AppletInfo $AppletInfo) 设置本次加固配置
 */
class AppletResult extends AbstractModel
{
    /**
     * @var string 加固任务结果id
     */
    public $ResultId;

    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var string 订单id
     */
    public $OrderId;

    /**
     * @var integer 操作账号
     */
    public $OpUin;

    /**
     * @var integer 加固结果
     */
    public $EncryptState;

    /**
     * @var string 加固结果描述
     */
    public $EncryptStateDesc;

    /**
     * @var integer 失败错误码
     */
    public $EncryptErrCode;

    /**
     * @var string 失败原因
     */
    public $EncryptErrDesc;

    /**
     * @var string 解决方案
     */
    public $EncryptErrRef;

    /**
     * @var string 任务创建时间
     */
    public $CreatTime;

    /**
     * @var string 任务开始处理时间
     */
    public $StartTime;

    /**
     * @var string 任务处理结束时间
     */
    public $EndTime;

    /**
     * @var integer 加固耗时（秒单位）
     */
    public $CostTime;

    /**
     * @var string 在线加固成功下载包
     */
    public $EncryptPkgUrl;

    /**
     * @var AppletInfo 本次加固配置
     */
    public $AppletInfo;

    /**
     * @param string $ResultId 加固任务结果id
     * @param string $ResourceId 资源id
     * @param string $OrderId 订单id
     * @param integer $OpUin 操作账号
     * @param integer $EncryptState 加固结果
     * @param string $EncryptStateDesc 加固结果描述
     * @param integer $EncryptErrCode 失败错误码
     * @param string $EncryptErrDesc 失败原因
     * @param string $EncryptErrRef 解决方案
     * @param string $CreatTime 任务创建时间
     * @param string $StartTime 任务开始处理时间
     * @param string $EndTime 任务处理结束时间
     * @param integer $CostTime 加固耗时（秒单位）
     * @param string $EncryptPkgUrl 在线加固成功下载包
     * @param AppletInfo $AppletInfo 本次加固配置
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
        if (array_key_exists("ResultId",$param) and $param["ResultId"] !== null) {
            $this->ResultId = $param["ResultId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("OpUin",$param) and $param["OpUin"] !== null) {
            $this->OpUin = $param["OpUin"];
        }

        if (array_key_exists("EncryptState",$param) and $param["EncryptState"] !== null) {
            $this->EncryptState = $param["EncryptState"];
        }

        if (array_key_exists("EncryptStateDesc",$param) and $param["EncryptStateDesc"] !== null) {
            $this->EncryptStateDesc = $param["EncryptStateDesc"];
        }

        if (array_key_exists("EncryptErrCode",$param) and $param["EncryptErrCode"] !== null) {
            $this->EncryptErrCode = $param["EncryptErrCode"];
        }

        if (array_key_exists("EncryptErrDesc",$param) and $param["EncryptErrDesc"] !== null) {
            $this->EncryptErrDesc = $param["EncryptErrDesc"];
        }

        if (array_key_exists("EncryptErrRef",$param) and $param["EncryptErrRef"] !== null) {
            $this->EncryptErrRef = $param["EncryptErrRef"];
        }

        if (array_key_exists("CreatTime",$param) and $param["CreatTime"] !== null) {
            $this->CreatTime = $param["CreatTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("EncryptPkgUrl",$param) and $param["EncryptPkgUrl"] !== null) {
            $this->EncryptPkgUrl = $param["EncryptPkgUrl"];
        }

        if (array_key_exists("AppletInfo",$param) and $param["AppletInfo"] !== null) {
            $this->AppletInfo = new AppletInfo();
            $this->AppletInfo->deserialize($param["AppletInfo"]);
        }
    }
}
