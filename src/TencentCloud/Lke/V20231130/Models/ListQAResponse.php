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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListQA返回参数结构体
 *
 * @method string getTotal() 获取<p>问答数量</p>
 * @method void setTotal(string $Total) 设置<p>问答数量</p>
 * @method string getWaitVerifyTotal() 获取<p>待校验问答数量</p>
 * @method void setWaitVerifyTotal(string $WaitVerifyTotal) 设置<p>待校验问答数量</p>
 * @method string getNotAcceptedTotal() 获取<p>未采纳问答数量</p>
 * @method void setNotAcceptedTotal(string $NotAcceptedTotal) 设置<p>未采纳问答数量</p>
 * @method string getAcceptedTotal() 获取<p>已采纳问答数量</p>
 * @method void setAcceptedTotal(string $AcceptedTotal) 设置<p>已采纳问答数量</p>
 * @method integer getPageNumber() 获取<p>页码</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码</p>
 * @method array getList() 获取<p>问答详情</p>
 * @method void setList(array $List) 设置<p>问答详情</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ListQAResponse extends AbstractModel
{
    /**
     * @var string <p>问答数量</p>
     */
    public $Total;

    /**
     * @var string <p>待校验问答数量</p>
     */
    public $WaitVerifyTotal;

    /**
     * @var string <p>未采纳问答数量</p>
     */
    public $NotAcceptedTotal;

    /**
     * @var string <p>已采纳问答数量</p>
     */
    public $AcceptedTotal;

    /**
     * @var integer <p>页码</p>
     */
    public $PageNumber;

    /**
     * @var array <p>问答详情</p>
     */
    public $List;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Total <p>问答数量</p>
     * @param string $WaitVerifyTotal <p>待校验问答数量</p>
     * @param string $NotAcceptedTotal <p>未采纳问答数量</p>
     * @param string $AcceptedTotal <p>已采纳问答数量</p>
     * @param integer $PageNumber <p>页码</p>
     * @param array $List <p>问答详情</p>
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

        if (array_key_exists("WaitVerifyTotal",$param) and $param["WaitVerifyTotal"] !== null) {
            $this->WaitVerifyTotal = $param["WaitVerifyTotal"];
        }

        if (array_key_exists("NotAcceptedTotal",$param) and $param["NotAcceptedTotal"] !== null) {
            $this->NotAcceptedTotal = $param["NotAcceptedTotal"];
        }

        if (array_key_exists("AcceptedTotal",$param) and $param["AcceptedTotal"] !== null) {
            $this->AcceptedTotal = $param["AcceptedTotal"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new ListQaItem();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
