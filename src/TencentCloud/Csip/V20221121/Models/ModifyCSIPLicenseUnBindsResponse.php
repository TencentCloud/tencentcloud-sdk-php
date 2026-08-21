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
 * ModifyCSIPLicenseUnBinds返回参数结构体
 *
 * @method integer getTotal() 获取<p>总数</p>
 * @method void setTotal(integer $Total) 设置<p>总数</p>
 * @method integer getSuccessNum() 获取<p>成功数</p>
 * @method void setSuccessNum(integer $SuccessNum) 设置<p>成功数</p>
 * @method integer getFailedNum() 获取<p>失败数</p>
 * @method void setFailedNum(integer $FailedNum) 设置<p>失败数</p>
 * @method array getFailedList() 获取<p>失败明细</p>
 * @method void setFailedList(array $FailedList) 设置<p>失败明细</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyCSIPLicenseUnBindsResponse extends AbstractModel
{
    /**
     * @var integer <p>总数</p>
     */
    public $Total;

    /**
     * @var integer <p>成功数</p>
     */
    public $SuccessNum;

    /**
     * @var integer <p>失败数</p>
     */
    public $FailedNum;

    /**
     * @var array <p>失败明细</p>
     */
    public $FailedList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total <p>总数</p>
     * @param integer $SuccessNum <p>成功数</p>
     * @param integer $FailedNum <p>失败数</p>
     * @param array $FailedList <p>失败明细</p>
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("SuccessNum",$param) and $param["SuccessNum"] !== null) {
            $this->SuccessNum = $param["SuccessNum"];
        }

        if (array_key_exists("FailedNum",$param) and $param["FailedNum"] !== null) {
            $this->FailedNum = $param["FailedNum"];
        }

        if (array_key_exists("FailedList",$param) and $param["FailedList"] !== null) {
            $this->FailedList = [];
            foreach ($param["FailedList"] as $key => $value){
                $obj = new LicenseUnbindFailedItem();
                $obj->deserialize($value);
                array_push($this->FailedList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
