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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChannelDescribeAccountBillDetail返回参数结构体
 *
 * @method integer getBoundAccountsNumber() 获取当前绑定中账号数量
 * @method void setBoundAccountsNumber(integer $BoundAccountsNumber) 设置当前绑定中账号数量
 * @method integer getRemainAvailableAccountsNumber() 获取剩余可绑定账号数量
 * @method void setRemainAvailableAccountsNumber(integer $RemainAvailableAccountsNumber) 设置剩余可绑定账号数量
 * @method integer getInvalidAccountsNumber() 获取已失效账号数量
 * @method void setInvalidAccountsNumber(integer $InvalidAccountsNumber) 设置已失效账号数量
 * @method integer getTotalBuyAccountsNumber() 获取购买数量
 * @method void setTotalBuyAccountsNumber(integer $TotalBuyAccountsNumber) 设置购买数量
 * @method integer getTotalGiftAccountsNumber() 获取赠送数量
 * @method void setTotalGiftAccountsNumber(integer $TotalGiftAccountsNumber) 设置赠送数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ChannelDescribeAccountBillDetailResponse extends AbstractModel
{
    /**
     * @var integer 当前绑定中账号数量
     */
    public $BoundAccountsNumber;

    /**
     * @var integer 剩余可绑定账号数量
     */
    public $RemainAvailableAccountsNumber;

    /**
     * @var integer 已失效账号数量
     */
    public $InvalidAccountsNumber;

    /**
     * @var integer 购买数量
     */
    public $TotalBuyAccountsNumber;

    /**
     * @var integer 赠送数量
     */
    public $TotalGiftAccountsNumber;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BoundAccountsNumber 当前绑定中账号数量
     * @param integer $RemainAvailableAccountsNumber 剩余可绑定账号数量
     * @param integer $InvalidAccountsNumber 已失效账号数量
     * @param integer $TotalBuyAccountsNumber 购买数量
     * @param integer $TotalGiftAccountsNumber 赠送数量
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
        if (array_key_exists("BoundAccountsNumber",$param) and $param["BoundAccountsNumber"] !== null) {
            $this->BoundAccountsNumber = $param["BoundAccountsNumber"];
        }

        if (array_key_exists("RemainAvailableAccountsNumber",$param) and $param["RemainAvailableAccountsNumber"] !== null) {
            $this->RemainAvailableAccountsNumber = $param["RemainAvailableAccountsNumber"];
        }

        if (array_key_exists("InvalidAccountsNumber",$param) and $param["InvalidAccountsNumber"] !== null) {
            $this->InvalidAccountsNumber = $param["InvalidAccountsNumber"];
        }

        if (array_key_exists("TotalBuyAccountsNumber",$param) and $param["TotalBuyAccountsNumber"] !== null) {
            $this->TotalBuyAccountsNumber = $param["TotalBuyAccountsNumber"];
        }

        if (array_key_exists("TotalGiftAccountsNumber",$param) and $param["TotalGiftAccountsNumber"] !== null) {
            $this->TotalGiftAccountsNumber = $param["TotalGiftAccountsNumber"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
