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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstancesAttribute返回参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getRegularBackupEnable() 获取定期备份状态 enable-开启，disable-关闭
 * @method void setRegularBackupEnable(string $RegularBackupEnable) 设置定期备份状态 enable-开启，disable-关闭
 * @method integer getRegularBackupSaveDays() 获取定期备份保留天数 [90 - 3650]天
 * @method void setRegularBackupSaveDays(integer $RegularBackupSaveDays) 设置定期备份保留天数 [90 - 3650]天
 * @method string getRegularBackupStrategy() 获取定期备份策略 years-每年，quarters-每季度，months-每月
 * @method void setRegularBackupStrategy(string $RegularBackupStrategy) 设置定期备份策略 years-每年，quarters-每季度，months-每月
 * @method integer getRegularBackupCounts() 获取定期备份保留个数
 * @method void setRegularBackupCounts(integer $RegularBackupCounts) 设置定期备份保留个数
 * @method string getRegularBackupStartTime() 获取定期备份开始日期，格式-YYYY-MM-DD 默认当前日期
 * @method void setRegularBackupStartTime(string $RegularBackupStartTime) 设置定期备份开始日期，格式-YYYY-MM-DD 默认当前日期
 * @method integer getBlockedThreshold() 获取阻塞进程阈值，单位毫秒
 * @method void setBlockedThreshold(integer $BlockedThreshold) 设置阻塞进程阈值，单位毫秒
 * @method integer getEventSaveDays() 获取慢SQL、阻塞、死锁扩展事件文件保留时长
 * @method void setEventSaveDays(integer $EventSaveDays) 设置慢SQL、阻塞、死锁扩展事件文件保留时长
 * @method TDEConfigAttribute getTDEConfig() 获取TDE透明数据加密配置
 * @method void setTDEConfig(TDEConfigAttribute $TDEConfig) 设置TDE透明数据加密配置
 * @method SSLConfig getSSLConfig() 获取SSL加密
 * @method void setSSLConfig(SSLConfig $SSLConfig) 设置SSL加密
 * @method DrReadableInfo getDrReadableInfo() 获取备机只读信息
 * @method void setDrReadableInfo(DrReadableInfo $DrReadableInfo) 设置备机只读信息
 * @method array getOldVipList() 获取等待回收的IP列表
 * @method void setOldVipList(array $OldVipList) 设置等待回收的IP列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstancesAttributeResponse extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 定期备份状态 enable-开启，disable-关闭
     */
    public $RegularBackupEnable;

    /**
     * @var integer 定期备份保留天数 [90 - 3650]天
     */
    public $RegularBackupSaveDays;

    /**
     * @var string 定期备份策略 years-每年，quarters-每季度，months-每月
     */
    public $RegularBackupStrategy;

    /**
     * @var integer 定期备份保留个数
     */
    public $RegularBackupCounts;

    /**
     * @var string 定期备份开始日期，格式-YYYY-MM-DD 默认当前日期
     */
    public $RegularBackupStartTime;

    /**
     * @var integer 阻塞进程阈值，单位毫秒
     */
    public $BlockedThreshold;

    /**
     * @var integer 慢SQL、阻塞、死锁扩展事件文件保留时长
     */
    public $EventSaveDays;

    /**
     * @var TDEConfigAttribute TDE透明数据加密配置
     */
    public $TDEConfig;

    /**
     * @var SSLConfig SSL加密
     */
    public $SSLConfig;

    /**
     * @var DrReadableInfo 备机只读信息
     */
    public $DrReadableInfo;

    /**
     * @var array 等待回收的IP列表
     */
    public $OldVipList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $RegularBackupEnable 定期备份状态 enable-开启，disable-关闭
     * @param integer $RegularBackupSaveDays 定期备份保留天数 [90 - 3650]天
     * @param string $RegularBackupStrategy 定期备份策略 years-每年，quarters-每季度，months-每月
     * @param integer $RegularBackupCounts 定期备份保留个数
     * @param string $RegularBackupStartTime 定期备份开始日期，格式-YYYY-MM-DD 默认当前日期
     * @param integer $BlockedThreshold 阻塞进程阈值，单位毫秒
     * @param integer $EventSaveDays 慢SQL、阻塞、死锁扩展事件文件保留时长
     * @param TDEConfigAttribute $TDEConfig TDE透明数据加密配置
     * @param SSLConfig $SSLConfig SSL加密
     * @param DrReadableInfo $DrReadableInfo 备机只读信息
     * @param array $OldVipList 等待回收的IP列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RegularBackupEnable",$param) and $param["RegularBackupEnable"] !== null) {
            $this->RegularBackupEnable = $param["RegularBackupEnable"];
        }

        if (array_key_exists("RegularBackupSaveDays",$param) and $param["RegularBackupSaveDays"] !== null) {
            $this->RegularBackupSaveDays = $param["RegularBackupSaveDays"];
        }

        if (array_key_exists("RegularBackupStrategy",$param) and $param["RegularBackupStrategy"] !== null) {
            $this->RegularBackupStrategy = $param["RegularBackupStrategy"];
        }

        if (array_key_exists("RegularBackupCounts",$param) and $param["RegularBackupCounts"] !== null) {
            $this->RegularBackupCounts = $param["RegularBackupCounts"];
        }

        if (array_key_exists("RegularBackupStartTime",$param) and $param["RegularBackupStartTime"] !== null) {
            $this->RegularBackupStartTime = $param["RegularBackupStartTime"];
        }

        if (array_key_exists("BlockedThreshold",$param) and $param["BlockedThreshold"] !== null) {
            $this->BlockedThreshold = $param["BlockedThreshold"];
        }

        if (array_key_exists("EventSaveDays",$param) and $param["EventSaveDays"] !== null) {
            $this->EventSaveDays = $param["EventSaveDays"];
        }

        if (array_key_exists("TDEConfig",$param) and $param["TDEConfig"] !== null) {
            $this->TDEConfig = new TDEConfigAttribute();
            $this->TDEConfig->deserialize($param["TDEConfig"]);
        }

        if (array_key_exists("SSLConfig",$param) and $param["SSLConfig"] !== null) {
            $this->SSLConfig = new SSLConfig();
            $this->SSLConfig->deserialize($param["SSLConfig"]);
        }

        if (array_key_exists("DrReadableInfo",$param) and $param["DrReadableInfo"] !== null) {
            $this->DrReadableInfo = new DrReadableInfo();
            $this->DrReadableInfo->deserialize($param["DrReadableInfo"]);
        }

        if (array_key_exists("OldVipList",$param) and $param["OldVipList"] !== null) {
            $this->OldVipList = [];
            foreach ($param["OldVipList"] as $key => $value){
                $obj = new OldVip();
                $obj->deserialize($value);
                array_push($this->OldVipList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
