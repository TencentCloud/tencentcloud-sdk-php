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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBaselineStrategyDetail返回参数结构体
 *
 * @method integer getPassRate() 获取策略扫描通过率
 * @method void setPassRate(integer $PassRate) 设置策略扫描通过率
 * @method string getStrategyName() 获取策略名
 * @method void setStrategyName(string $StrategyName) 设置策略名
 * @method string getScanCycle() 获取策略扫描周期(天)
 * @method void setScanCycle(string $ScanCycle) 设置策略扫描周期(天)
 * @method string getScanAt() 获取定期检测时间, 该时间下发扫描
 * @method void setScanAt(string $ScanAt) 设置定期检测时间, 该时间下发扫描
 * @method integer getIsGlobal() 获取扫描范围是否全部服务器, 1:是  0:否, 为1则为全部专业版主机
 * @method void setIsGlobal(integer $IsGlobal) 设置扫描范围是否全部服务器, 1:是  0:否, 为1则为全部专业版主机
 * @method string getMachineType() 获取云服务器类型：
cvm：腾讯云服务器
bm：裸金属
ecm：边缘计算主机
lh: 轻量应用服务器
ohter: 混合云机器
 * @method void setMachineType(string $MachineType) 设置云服务器类型：
cvm：腾讯云服务器
bm：裸金属
ecm：边缘计算主机
lh: 轻量应用服务器
ohter: 混合云机器
 * @method string getRegion() 获取主机地域
 * @method void setRegion(string $Region) 设置主机地域
 * @method array getQuuids() 获取用户该策略下的所有主机id
 * @method void setQuuids(array $Quuids) 设置用户该策略下的所有主机id
 * @method array getCategoryIds() 获取用户该策略下所有的基线id
 * @method void setCategoryIds(array $CategoryIds) 设置用户该策略下所有的基线id
 * @method integer getIfScanned() 获取1 表示扫描过, 0没扫描过
 * @method void setIfScanned(integer $IfScanned) 设置1 表示扫描过, 0没扫描过
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBaselineStrategyDetailResponse extends AbstractModel
{
    /**
     * @var integer 策略扫描通过率
     */
    public $PassRate;

    /**
     * @var string 策略名
     */
    public $StrategyName;

    /**
     * @var string 策略扫描周期(天)
     */
    public $ScanCycle;

    /**
     * @var string 定期检测时间, 该时间下发扫描
     */
    public $ScanAt;

    /**
     * @var integer 扫描范围是否全部服务器, 1:是  0:否, 为1则为全部专业版主机
     */
    public $IsGlobal;

    /**
     * @var string 云服务器类型：
cvm：腾讯云服务器
bm：裸金属
ecm：边缘计算主机
lh: 轻量应用服务器
ohter: 混合云机器
     */
    public $MachineType;

    /**
     * @var string 主机地域
     */
    public $Region;

    /**
     * @var array 用户该策略下的所有主机id
     */
    public $Quuids;

    /**
     * @var array 用户该策略下所有的基线id
     */
    public $CategoryIds;

    /**
     * @var integer 1 表示扫描过, 0没扫描过
     */
    public $IfScanned;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $PassRate 策略扫描通过率
     * @param string $StrategyName 策略名
     * @param string $ScanCycle 策略扫描周期(天)
     * @param string $ScanAt 定期检测时间, 该时间下发扫描
     * @param integer $IsGlobal 扫描范围是否全部服务器, 1:是  0:否, 为1则为全部专业版主机
     * @param string $MachineType 云服务器类型：
cvm：腾讯云服务器
bm：裸金属
ecm：边缘计算主机
lh: 轻量应用服务器
ohter: 混合云机器
     * @param string $Region 主机地域
     * @param array $Quuids 用户该策略下的所有主机id
     * @param array $CategoryIds 用户该策略下所有的基线id
     * @param integer $IfScanned 1 表示扫描过, 0没扫描过
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
        if (array_key_exists("PassRate",$param) and $param["PassRate"] !== null) {
            $this->PassRate = $param["PassRate"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("ScanCycle",$param) and $param["ScanCycle"] !== null) {
            $this->ScanCycle = $param["ScanCycle"];
        }

        if (array_key_exists("ScanAt",$param) and $param["ScanAt"] !== null) {
            $this->ScanAt = $param["ScanAt"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("CategoryIds",$param) and $param["CategoryIds"] !== null) {
            $this->CategoryIds = $param["CategoryIds"];
        }

        if (array_key_exists("IfScanned",$param) and $param["IfScanned"] !== null) {
            $this->IfScanned = $param["IfScanned"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
