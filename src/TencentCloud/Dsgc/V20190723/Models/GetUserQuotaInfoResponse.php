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
 * @method string getCosQuotaUnit() 获取COS存储量单位，比如TB。
 * @method void setCosQuotaUnit(string $CosQuotaUnit) 设置COS存储量单位，比如TB。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
     * @var string COS存储量单位，比如TB。
     */
    public $CosQuotaUnit;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param integer $DbTotalQuota 用户购买的DB配额。
     * @param integer $CosTotalQuota 用户购买的COS存储量配额。
     * @param integer $DbRemainQuota 用户可用的DB配额。
     * @param float $CosRemainQuota 用户可用的COS存储量配额。
     * @param string $CosQuotaUnit COS存储量单位，比如TB。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
