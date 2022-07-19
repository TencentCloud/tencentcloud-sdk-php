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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccount返回参数结构体
 *
 * @method string getUin() 获取查询的账号id
 * @method void setUin(string $Uin) 设置查询的账号id
 * @method integer getBillType() 获取1线上计费，2线下计费
 * @method void setBillType(integer $BillType) 设置1线上计费，2线下计费
 * @method integer getBillMode() 获取0未定义，1按套餐预付费，2按量后付费
 * @method void setBillMode(integer $BillMode) 设置0未定义，1按套餐预付费，2按量后付费
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccountResponse extends AbstractModel
{
    /**
     * @var string 查询的账号id
     */
    public $Uin;

    /**
     * @var integer 1线上计费，2线下计费
     */
    public $BillType;

    /**
     * @var integer 0未定义，1按套餐预付费，2按量后付费
     */
    public $BillMode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Uin 查询的账号id
     * @param integer $BillType 1线上计费，2线下计费
     * @param integer $BillMode 0未定义，1按套餐预付费，2按量后付费
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            $this->BillType = $param["BillType"];
        }

        if (array_key_exists("BillMode",$param) and $param["BillMode"] !== null) {
            $this->BillMode = $param["BillMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
