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
 * Android加固结果
 *
 * @method string getResultId() 获取结果Id,用于查询加固结果
 * @method void setResultId(string $ResultId) 设置结果Id,用于查询加固结果
 * @method string getOrderId() 获取与当前任务关联的订单id
 * @method void setOrderId(string $OrderId) 设置与当前任务关联的订单id
 * @method string getResourceId() 获取与当前任务关联的资源Id
 * @method void setResourceId(string $ResourceId) 设置与当前任务关联的资源Id
 * @method integer getOpUin() 获取本次任务发起者
 * @method void setOpUin(integer $OpUin) 设置本次任务发起者
 * @method string getAppType() 获取应用类型：android-apk; android-aab;
 * @method void setAppType(string $AppType) 设置应用类型：android-apk; android-aab;
 * @method string getAppPkgName() 获取应用包名
 * @method void setAppPkgName(string $AppPkgName) 设置应用包名
 * @method string getBindAppPkgName() 获取后台资源绑定的包名
 * @method void setBindAppPkgName(string $BindAppPkgName) 设置后台资源绑定的包名
 * @method integer getEncryptState() 获取加固结果
 * @method void setEncryptState(integer $EncryptState) 设置加固结果
 * @method string getEncryptStateDesc() 获取加固结果描述
 * @method void setEncryptStateDesc(string $EncryptStateDesc) 设置加固结果描述
 * @method integer getEncryptErrCode() 获取加固失败错误码
 * @method void setEncryptErrCode(integer $EncryptErrCode) 设置加固失败错误码
 * @method string getEncryptErrDesc() 获取加固失败原因
 * @method void setEncryptErrDesc(string $EncryptErrDesc) 设置加固失败原因
 * @method string getEncryptErrRef() 获取加固失败解决方案
 * @method void setEncryptErrRef(string $EncryptErrRef) 设置加固失败解决方案
 * @method string getCreatTime() 获取任务创建时间
 * @method void setCreatTime(string $CreatTime) 设置任务创建时间
 * @method string getStartTime() 获取任务开始处理时间
 * @method void setStartTime(string $StartTime) 设置任务开始处理时间
 * @method string getEndTime() 获取任务处理结束时间
 * @method void setEndTime(string $EndTime) 设置任务处理结束时间
 * @method integer getCostTime() 获取加固耗时（秒单位）
 * @method void setCostTime(integer $CostTime) 设置加固耗时（秒单位）
 * @method string getAppUrl() 获取在线加固-android应用原包下载链接
 * @method void setAppUrl(string $AppUrl) 设置在线加固-android应用原包下载链接
 * @method string getAppMd5() 获取在线加固-android应用文件MD5算法值
 * @method void setAppMd5(string $AppMd5) 设置在线加固-android应用文件MD5算法值
 * @method string getAppName() 获取在线加固-android应用应用名称
 * @method void setAppName(string $AppName) 设置在线加固-android应用应用名称
 * @method string getAppVersion() 获取在线加固-android应用版本；
 * @method void setAppVersion(string $AppVersion) 设置在线加固-android应用版本；
 * @method integer getAppSize() 获取在线加固-android应用大小
 * @method void setAppSize(integer $AppSize) 设置在线加固-android应用大小
 * @method string getOnlineToolVersion() 获取在线加固-android加固-腾讯云应用加固工具版本
 * @method void setOnlineToolVersion(string $OnlineToolVersion) 设置在线加固-android加固-腾讯云应用加固工具版本
 * @method string getEncryptAppMd5() 获取在线加固-android加固，加固成功后文件md5算法值
 * @method void setEncryptAppMd5(string $EncryptAppMd5) 设置在线加固-android加固，加固成功后文件md5算法值
 * @method integer getEncryptAppSize() 获取在线加固-android加固，加固成功后应用大小
 * @method void setEncryptAppSize(integer $EncryptAppSize) 设置在线加固-android加固，加固成功后应用大小
 * @method string getEncryptPkgUrl() 获取在线加固-android加固，加固包下载链接。
 * @method void setEncryptPkgUrl(string $EncryptPkgUrl) 设置在线加固-android加固，加固包下载链接。
 * @method string getOutputToolVersion() 获取输出工具-android加固-腾讯云输出工具版本
 * @method void setOutputToolVersion(string $OutputToolVersion) 设置输出工具-android加固-腾讯云输出工具版本
 * @method integer getOutputToolSize() 获取输出工具-android加固-工具大小
 * @method void setOutputToolSize(integer $OutputToolSize) 设置输出工具-android加固-工具大小
 * @method string getToolOutputTime() 获取输出工具-android加固-工具输出时间
 * @method void setToolOutputTime(string $ToolOutputTime) 设置输出工具-android加固-工具输出时间
 * @method string getToolExpireTime() 获取输出工具-android加固-工具到期时间
 * @method void setToolExpireTime(string $ToolExpireTime) 设置输出工具-android加固-工具到期时间
 * @method string getOutputToolUrl() 获取输出工具-android加固-输出工具下载链接
 * @method void setOutputToolUrl(string $OutputToolUrl) 设置输出工具-android加固-输出工具下载链接
 * @method AndroidPlan getAndroidPlan() 获取本次android加固策略信息
 * @method void setAndroidPlan(AndroidPlan $AndroidPlan) 设置本次android加固策略信息
 */
class AndroidResult extends AbstractModel
{
    /**
     * @var string 结果Id,用于查询加固结果
     */
    public $ResultId;

    /**
     * @var string 与当前任务关联的订单id
     */
    public $OrderId;

    /**
     * @var string 与当前任务关联的资源Id
     */
    public $ResourceId;

    /**
     * @var integer 本次任务发起者
     */
    public $OpUin;

    /**
     * @var string 应用类型：android-apk; android-aab;
     */
    public $AppType;

    /**
     * @var string 应用包名
     */
    public $AppPkgName;

    /**
     * @var string 后台资源绑定的包名
     */
    public $BindAppPkgName;

    /**
     * @var integer 加固结果
     */
    public $EncryptState;

    /**
     * @var string 加固结果描述
     */
    public $EncryptStateDesc;

    /**
     * @var integer 加固失败错误码
     */
    public $EncryptErrCode;

    /**
     * @var string 加固失败原因
     */
    public $EncryptErrDesc;

    /**
     * @var string 加固失败解决方案
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
     * @var string 在线加固-android应用原包下载链接
     */
    public $AppUrl;

    /**
     * @var string 在线加固-android应用文件MD5算法值
     */
    public $AppMd5;

    /**
     * @var string 在线加固-android应用应用名称
     */
    public $AppName;

    /**
     * @var string 在线加固-android应用版本；
     */
    public $AppVersion;

    /**
     * @var integer 在线加固-android应用大小
     */
    public $AppSize;

    /**
     * @var string 在线加固-android加固-腾讯云应用加固工具版本
     */
    public $OnlineToolVersion;

    /**
     * @var string 在线加固-android加固，加固成功后文件md5算法值
     */
    public $EncryptAppMd5;

    /**
     * @var integer 在线加固-android加固，加固成功后应用大小
     */
    public $EncryptAppSize;

    /**
     * @var string 在线加固-android加固，加固包下载链接。
     */
    public $EncryptPkgUrl;

    /**
     * @var string 输出工具-android加固-腾讯云输出工具版本
     */
    public $OutputToolVersion;

    /**
     * @var integer 输出工具-android加固-工具大小
     */
    public $OutputToolSize;

    /**
     * @var string 输出工具-android加固-工具输出时间
     */
    public $ToolOutputTime;

    /**
     * @var string 输出工具-android加固-工具到期时间
     */
    public $ToolExpireTime;

    /**
     * @var string 输出工具-android加固-输出工具下载链接
     */
    public $OutputToolUrl;

    /**
     * @var AndroidPlan 本次android加固策略信息
     */
    public $AndroidPlan;

    /**
     * @param string $ResultId 结果Id,用于查询加固结果
     * @param string $OrderId 与当前任务关联的订单id
     * @param string $ResourceId 与当前任务关联的资源Id
     * @param integer $OpUin 本次任务发起者
     * @param string $AppType 应用类型：android-apk; android-aab;
     * @param string $AppPkgName 应用包名
     * @param string $BindAppPkgName 后台资源绑定的包名
     * @param integer $EncryptState 加固结果
     * @param string $EncryptStateDesc 加固结果描述
     * @param integer $EncryptErrCode 加固失败错误码
     * @param string $EncryptErrDesc 加固失败原因
     * @param string $EncryptErrRef 加固失败解决方案
     * @param string $CreatTime 任务创建时间
     * @param string $StartTime 任务开始处理时间
     * @param string $EndTime 任务处理结束时间
     * @param integer $CostTime 加固耗时（秒单位）
     * @param string $AppUrl 在线加固-android应用原包下载链接
     * @param string $AppMd5 在线加固-android应用文件MD5算法值
     * @param string $AppName 在线加固-android应用应用名称
     * @param string $AppVersion 在线加固-android应用版本；
     * @param integer $AppSize 在线加固-android应用大小
     * @param string $OnlineToolVersion 在线加固-android加固-腾讯云应用加固工具版本
     * @param string $EncryptAppMd5 在线加固-android加固，加固成功后文件md5算法值
     * @param integer $EncryptAppSize 在线加固-android加固，加固成功后应用大小
     * @param string $EncryptPkgUrl 在线加固-android加固，加固包下载链接。
     * @param string $OutputToolVersion 输出工具-android加固-腾讯云输出工具版本
     * @param integer $OutputToolSize 输出工具-android加固-工具大小
     * @param string $ToolOutputTime 输出工具-android加固-工具输出时间
     * @param string $ToolExpireTime 输出工具-android加固-工具到期时间
     * @param string $OutputToolUrl 输出工具-android加固-输出工具下载链接
     * @param AndroidPlan $AndroidPlan 本次android加固策略信息
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

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("OpUin",$param) and $param["OpUin"] !== null) {
            $this->OpUin = $param["OpUin"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("AppPkgName",$param) and $param["AppPkgName"] !== null) {
            $this->AppPkgName = $param["AppPkgName"];
        }

        if (array_key_exists("BindAppPkgName",$param) and $param["BindAppPkgName"] !== null) {
            $this->BindAppPkgName = $param["BindAppPkgName"];
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

        if (array_key_exists("AppUrl",$param) and $param["AppUrl"] !== null) {
            $this->AppUrl = $param["AppUrl"];
        }

        if (array_key_exists("AppMd5",$param) and $param["AppMd5"] !== null) {
            $this->AppMd5 = $param["AppMd5"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("AppSize",$param) and $param["AppSize"] !== null) {
            $this->AppSize = $param["AppSize"];
        }

        if (array_key_exists("OnlineToolVersion",$param) and $param["OnlineToolVersion"] !== null) {
            $this->OnlineToolVersion = $param["OnlineToolVersion"];
        }

        if (array_key_exists("EncryptAppMd5",$param) and $param["EncryptAppMd5"] !== null) {
            $this->EncryptAppMd5 = $param["EncryptAppMd5"];
        }

        if (array_key_exists("EncryptAppSize",$param) and $param["EncryptAppSize"] !== null) {
            $this->EncryptAppSize = $param["EncryptAppSize"];
        }

        if (array_key_exists("EncryptPkgUrl",$param) and $param["EncryptPkgUrl"] !== null) {
            $this->EncryptPkgUrl = $param["EncryptPkgUrl"];
        }

        if (array_key_exists("OutputToolVersion",$param) and $param["OutputToolVersion"] !== null) {
            $this->OutputToolVersion = $param["OutputToolVersion"];
        }

        if (array_key_exists("OutputToolSize",$param) and $param["OutputToolSize"] !== null) {
            $this->OutputToolSize = $param["OutputToolSize"];
        }

        if (array_key_exists("ToolOutputTime",$param) and $param["ToolOutputTime"] !== null) {
            $this->ToolOutputTime = $param["ToolOutputTime"];
        }

        if (array_key_exists("ToolExpireTime",$param) and $param["ToolExpireTime"] !== null) {
            $this->ToolExpireTime = $param["ToolExpireTime"];
        }

        if (array_key_exists("OutputToolUrl",$param) and $param["OutputToolUrl"] !== null) {
            $this->OutputToolUrl = $param["OutputToolUrl"];
        }

        if (array_key_exists("AndroidPlan",$param) and $param["AndroidPlan"] !== null) {
            $this->AndroidPlan = new AndroidPlan();
            $this->AndroidPlan->deserialize($param["AndroidPlan"]);
        }
    }
}
