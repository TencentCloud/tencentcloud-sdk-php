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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetUserQuotaInfo返回参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID。
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID。
 * @method integer getDbTotalQuota() 获取用户购买的DB配额。
 * @method void setDbTotalQuota(integer $DbTotalQuota) 设置用户购买的DB配额。
 * @method integer getCosTotalQuota() 获取用户购买的COS存储量配额。
 * @method void setCosTotalQuota(integer $CosTotalQuota) 设置用户购买的COS存储量配额。
 * @method integer getDbRemainQuota() 获取用户可用的DB配额。
 * @method void setDbRemainQuota(integer $DbRemainQuota) 设置用户可用的DB配额。
 * @method float getCosRemainQuota() 获取用户可用的COS存储量配额。
 * @method void setCosRemainQuota(float $CosRemainQuota) 设置用户可用的COS存储量配额。
 * @method string getCosQuotaUnit() 获取COS存储量单位，例如TB。
 * @method void setCosQuotaUnit(string $CosQuotaUnit) 设置COS存储量单位，例如TB。
 * @method integer getDBUnbindNum() 获取db月解绑次数
 * @method void setDBUnbindNum(integer $DBUnbindNum) 设置db月解绑次数
 * @method integer getCOSUnbindNum() 获取cos月解绑次数
 * @method void setCOSUnbindNum(integer $COSUnbindNum) 设置cos月解绑次数
 * @method integer getInsTotalQuota() 获取用户购买的实例配额。
 * @method void setInsTotalQuota(integer $InsTotalQuota) 设置用户购买的实例配额。
 * @method integer getInsRemainQuota() 获取用户可用的实例配额。
 * @method void setInsRemainQuota(integer $InsRemainQuota) 设置用户可用的实例配额。
 * @method string getVersion() 获取用户购买的版本
 * @method void setVersion(string $Version) 设置用户购买的版本
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetUserQuotaInfoResponse extends AbstractModel
{
    /**
     * @var string DSPA实例ID。
     */
    public $DspaId;

    /**
     * @var integer 用户购买的DB配额。
     */
    public $DbTotalQuota;

    /**
     * @var integer 用户购买的COS存储量配额。
     */
    public $CosTotalQuota;

    /**
     * @var integer 用户可用的DB配额。
     */
    public $DbRemainQuota;

    /**
     * @var float 用户可用的COS存储量配额。
     */
    public $CosRemainQuota;

    /**
     * @var string COS存储量单位，例如TB。
     */
    public $CosQuotaUnit;

    /**
     * @var integer db月解绑次数
     */
    public $DBUnbindNum;

    /**
     * @var integer cos月解绑次数
     */
    public $COSUnbindNum;

    /**
     * @var integer 用户购买的实例配额。
     */
    public $InsTotalQuota;

    /**
     * @var integer 用户可用的实例配额。
     */
    public $InsRemainQuota;

    /**
     * @var string 用户购买的版本
     */
    public $Version;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param integer $DbTotalQuota 用户购买的DB配额。
     * @param integer $CosTotalQuota 用户购买的COS存储量配额。
     * @param integer $DbRemainQuota 用户可用的DB配额。
     * @param float $CosRemainQuota 用户可用的COS存储量配额。
     * @param string $CosQuotaUnit COS存储量单位，例如TB。
     * @param integer $DBUnbindNum db月解绑次数
     * @param integer $COSUnbindNum cos月解绑次数
     * @param integer $InsTotalQuota 用户购买的实例配额。
     * @param integer $InsRemainQuota 用户可用的实例配额。
     * @param string $Version 用户购买的版本
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("DbTotalQuota",$param) and $param["DbTotalQuota"] !== null) {
            $this->DbTotalQuota = $param["DbTotalQuota"];
        }

        if (array_key_exists("CosTotalQuota",$param) and $param["CosTotalQuota"] !== null) {
            $this->CosTotalQuota = $param["CosTotalQuota"];
        }

        if (array_key_exists("DbRemainQuota",$param) and $param["DbRemainQuota"] !== null) {
            $this->DbRemainQuota = $param["DbRemainQuota"];
        }

        if (array_key_exists("CosRemainQuota",$param) and $param["CosRemainQuota"] !== null) {
            $this->CosRemainQuota = $param["CosRemainQuota"];
        }

        if (array_key_exists("CosQuotaUnit",$param) and $param["CosQuotaUnit"] !== null) {
            $this->CosQuotaUnit = $param["CosQuotaUnit"];
        }

        if (array_key_exists("DBUnbindNum",$param) and $param["DBUnbindNum"] !== null) {
            $this->DBUnbindNum = $param["DBUnbindNum"];
        }

        if (array_key_exists("COSUnbindNum",$param) and $param["COSUnbindNum"] !== null) {
            $this->COSUnbindNum = $param["COSUnbindNum"];
        }

        if (array_key_exists("InsTotalQuota",$param) and $param["InsTotalQuota"] !== null) {
            $this->InsTotalQuota = $param["InsTotalQuota"];
        }

        if (array_key_exists("InsRemainQuota",$param) and $param["InsRemainQuota"] !== null) {
            $this->InsRemainQuota = $param["InsRemainQuota"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
