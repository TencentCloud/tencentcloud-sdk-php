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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetInfo返回参数结构体
 *
 * @method integer getMachineCount() 获取主机数
 * @method void setMachineCount(integer $MachineCount) 设置主机数
 * @method integer getAccountCount() 获取账号数
 * @method void setAccountCount(integer $AccountCount) 设置账号数
 * @method integer getPortCount() 获取端口数
 * @method void setPortCount(integer $PortCount) 设置端口数
 * @method integer getProcessCount() 获取进程数
 * @method void setProcessCount(integer $ProcessCount) 设置进程数
 * @method integer getSoftwareCount() 获取软件数
 * @method void setSoftwareCount(integer $SoftwareCount) 设置软件数
 * @method integer getDatabaseCount() 获取数据库数
 * @method void setDatabaseCount(integer $DatabaseCount) 设置数据库数
 * @method integer getWebAppCount() 获取Web应用数
 * @method void setWebAppCount(integer $WebAppCount) 设置Web应用数
 * @method integer getWebFrameCount() 获取Web框架数
 * @method void setWebFrameCount(integer $WebFrameCount) 设置Web框架数
 * @method integer getWebServiceCount() 获取Web服务数
 * @method void setWebServiceCount(integer $WebServiceCount) 设置Web服务数
 * @method integer getWebLocationCount() 获取Web站点数
 * @method void setWebLocationCount(integer $WebLocationCount) 设置Web站点数
 * @method integer getAccountNewCount() 获取账号今日新增
 * @method void setAccountNewCount(integer $AccountNewCount) 设置账号今日新增
 * @method integer getPortNewCount() 获取端口今日新增
 * @method void setPortNewCount(integer $PortNewCount) 设置端口今日新增
 * @method integer getProcessNewCount() 获取进程今日新增
 * @method void setProcessNewCount(integer $ProcessNewCount) 设置进程今日新增
 * @method integer getSoftwareNewCount() 获取软件今日新增
 * @method void setSoftwareNewCount(integer $SoftwareNewCount) 设置软件今日新增
 * @method integer getDatabaseNewCount() 获取数据库今日新增
 * @method void setDatabaseNewCount(integer $DatabaseNewCount) 设置数据库今日新增
 * @method integer getWebAppNewCount() 获取Web应用今日新增
 * @method void setWebAppNewCount(integer $WebAppNewCount) 设置Web应用今日新增
 * @method integer getWebFrameNewCount() 获取Web框架今日新增
 * @method void setWebFrameNewCount(integer $WebFrameNewCount) 设置Web框架今日新增
 * @method integer getWebServiceNewCount() 获取Web服务今日新增
 * @method void setWebServiceNewCount(integer $WebServiceNewCount) 设置Web服务今日新增
 * @method integer getWebLocationNewCount() 获取Web站点今日新增
 * @method void setWebLocationNewCount(integer $WebLocationNewCount) 设置Web站点今日新增
 * @method integer getMachineNewCount() 获取主机今日新增
 * @method void setMachineNewCount(integer $MachineNewCount) 设置主机今日新增
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetInfoResponse extends AbstractModel
{
    /**
     * @var integer 主机数
     */
    public $MachineCount;

    /**
     * @var integer 账号数
     */
    public $AccountCount;

    /**
     * @var integer 端口数
     */
    public $PortCount;

    /**
     * @var integer 进程数
     */
    public $ProcessCount;

    /**
     * @var integer 软件数
     */
    public $SoftwareCount;

    /**
     * @var integer 数据库数
     */
    public $DatabaseCount;

    /**
     * @var integer Web应用数
     */
    public $WebAppCount;

    /**
     * @var integer Web框架数
     */
    public $WebFrameCount;

    /**
     * @var integer Web服务数
     */
    public $WebServiceCount;

    /**
     * @var integer Web站点数
     */
    public $WebLocationCount;

    /**
     * @var integer 账号今日新增
     */
    public $AccountNewCount;

    /**
     * @var integer 端口今日新增
     */
    public $PortNewCount;

    /**
     * @var integer 进程今日新增
     */
    public $ProcessNewCount;

    /**
     * @var integer 软件今日新增
     */
    public $SoftwareNewCount;

    /**
     * @var integer 数据库今日新增
     */
    public $DatabaseNewCount;

    /**
     * @var integer Web应用今日新增
     */
    public $WebAppNewCount;

    /**
     * @var integer Web框架今日新增
     */
    public $WebFrameNewCount;

    /**
     * @var integer Web服务今日新增
     */
    public $WebServiceNewCount;

    /**
     * @var integer Web站点今日新增
     */
    public $WebLocationNewCount;

    /**
     * @var integer 主机今日新增
     */
    public $MachineNewCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MachineCount 主机数
     * @param integer $AccountCount 账号数
     * @param integer $PortCount 端口数
     * @param integer $ProcessCount 进程数
     * @param integer $SoftwareCount 软件数
     * @param integer $DatabaseCount 数据库数
     * @param integer $WebAppCount Web应用数
     * @param integer $WebFrameCount Web框架数
     * @param integer $WebServiceCount Web服务数
     * @param integer $WebLocationCount Web站点数
     * @param integer $AccountNewCount 账号今日新增
     * @param integer $PortNewCount 端口今日新增
     * @param integer $ProcessNewCount 进程今日新增
     * @param integer $SoftwareNewCount 软件今日新增
     * @param integer $DatabaseNewCount 数据库今日新增
     * @param integer $WebAppNewCount Web应用今日新增
     * @param integer $WebFrameNewCount Web框架今日新增
     * @param integer $WebServiceNewCount Web服务今日新增
     * @param integer $WebLocationNewCount Web站点今日新增
     * @param integer $MachineNewCount 主机今日新增
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MachineCount",$param) and $param["MachineCount"] !== null) {
            $this->MachineCount = $param["MachineCount"];
        }

        if (array_key_exists("AccountCount",$param) and $param["AccountCount"] !== null) {
            $this->AccountCount = $param["AccountCount"];
        }

        if (array_key_exists("PortCount",$param) and $param["PortCount"] !== null) {
            $this->PortCount = $param["PortCount"];
        }

        if (array_key_exists("ProcessCount",$param) and $param["ProcessCount"] !== null) {
            $this->ProcessCount = $param["ProcessCount"];
        }

        if (array_key_exists("SoftwareCount",$param) and $param["SoftwareCount"] !== null) {
            $this->SoftwareCount = $param["SoftwareCount"];
        }

        if (array_key_exists("DatabaseCount",$param) and $param["DatabaseCount"] !== null) {
            $this->DatabaseCount = $param["DatabaseCount"];
        }

        if (array_key_exists("WebAppCount",$param) and $param["WebAppCount"] !== null) {
            $this->WebAppCount = $param["WebAppCount"];
        }

        if (array_key_exists("WebFrameCount",$param) and $param["WebFrameCount"] !== null) {
            $this->WebFrameCount = $param["WebFrameCount"];
        }

        if (array_key_exists("WebServiceCount",$param) and $param["WebServiceCount"] !== null) {
            $this->WebServiceCount = $param["WebServiceCount"];
        }

        if (array_key_exists("WebLocationCount",$param) and $param["WebLocationCount"] !== null) {
            $this->WebLocationCount = $param["WebLocationCount"];
        }

        if (array_key_exists("AccountNewCount",$param) and $param["AccountNewCount"] !== null) {
            $this->AccountNewCount = $param["AccountNewCount"];
        }

        if (array_key_exists("PortNewCount",$param) and $param["PortNewCount"] !== null) {
            $this->PortNewCount = $param["PortNewCount"];
        }

        if (array_key_exists("ProcessNewCount",$param) and $param["ProcessNewCount"] !== null) {
            $this->ProcessNewCount = $param["ProcessNewCount"];
        }

        if (array_key_exists("SoftwareNewCount",$param) and $param["SoftwareNewCount"] !== null) {
            $this->SoftwareNewCount = $param["SoftwareNewCount"];
        }

        if (array_key_exists("DatabaseNewCount",$param) and $param["DatabaseNewCount"] !== null) {
            $this->DatabaseNewCount = $param["DatabaseNewCount"];
        }

        if (array_key_exists("WebAppNewCount",$param) and $param["WebAppNewCount"] !== null) {
            $this->WebAppNewCount = $param["WebAppNewCount"];
        }

        if (array_key_exists("WebFrameNewCount",$param) and $param["WebFrameNewCount"] !== null) {
            $this->WebFrameNewCount = $param["WebFrameNewCount"];
        }

        if (array_key_exists("WebServiceNewCount",$param) and $param["WebServiceNewCount"] !== null) {
            $this->WebServiceNewCount = $param["WebServiceNewCount"];
        }

        if (array_key_exists("WebLocationNewCount",$param) and $param["WebLocationNewCount"] !== null) {
            $this->WebLocationNewCount = $param["WebLocationNewCount"];
        }

        if (array_key_exists("MachineNewCount",$param) and $param["MachineNewCount"] !== null) {
            $this->MachineNewCount = $param["MachineNewCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
