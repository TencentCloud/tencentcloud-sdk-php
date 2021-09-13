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
 * DescribeServersAndRiskAndFirstInfo返回参数结构体
 *
 * @method integer getRiskFileCount() 获取风险文件数
 * @method void setRiskFileCount(integer $RiskFileCount) 设置风险文件数
 * @method integer getAddRiskFileCount() 获取今日新增风险文件数
 * @method void setAddRiskFileCount(integer $AddRiskFileCount) 设置今日新增风险文件数
 * @method integer getServersCount() 获取受影响服务器台数
 * @method void setServersCount(integer $ServersCount) 设置受影响服务器台数
 * @method boolean getIsFirstCheck() 获取是否试用：true-是，false-否
 * @method void setIsFirstCheck(boolean $IsFirstCheck) 设置是否试用：true-是，false-否
 * @method string getScanTime() 获取木马最近检测时间
 * @method void setScanTime(string $ScanTime) 设置木马最近检测时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeServersAndRiskAndFirstInfoResponse extends AbstractModel
{
    /**
     * @var integer 风险文件数
     */
    public $RiskFileCount;

    /**
     * @var integer 今日新增风险文件数
     */
    public $AddRiskFileCount;

    /**
     * @var integer 受影响服务器台数
     */
    public $ServersCount;

    /**
     * @var boolean 是否试用：true-是，false-否
     */
    public $IsFirstCheck;

    /**
     * @var string 木马最近检测时间
     */
    public $ScanTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $RiskFileCount 风险文件数
     * @param integer $AddRiskFileCount 今日新增风险文件数
     * @param integer $ServersCount 受影响服务器台数
     * @param boolean $IsFirstCheck 是否试用：true-是，false-否
     * @param string $ScanTime 木马最近检测时间
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
        if (array_key_exists("RiskFileCount",$param) and $param["RiskFileCount"] !== null) {
            $this->RiskFileCount = $param["RiskFileCount"];
        }

        if (array_key_exists("AddRiskFileCount",$param) and $param["AddRiskFileCount"] !== null) {
            $this->AddRiskFileCount = $param["AddRiskFileCount"];
        }

        if (array_key_exists("ServersCount",$param) and $param["ServersCount"] !== null) {
            $this->ServersCount = $param["ServersCount"];
        }

        if (array_key_exists("IsFirstCheck",$param) and $param["IsFirstCheck"] !== null) {
            $this->IsFirstCheck = $param["IsFirstCheck"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
