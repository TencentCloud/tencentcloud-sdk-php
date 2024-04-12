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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListQA返回参数结构体
 *
 * @method string getTotal() 获取问答数量
 * @method void setTotal(string $Total) 设置问答数量
 * @method string getWaitVerifyTotal() 获取待校验问答数量
 * @method void setWaitVerifyTotal(string $WaitVerifyTotal) 设置待校验问答数量
 * @method string getNotAcceptedTotal() 获取未采纳问答数量
 * @method void setNotAcceptedTotal(string $NotAcceptedTotal) 设置未采纳问答数量
 * @method string getAcceptedTotal() 获取已采纳问答数量
 * @method void setAcceptedTotal(string $AcceptedTotal) 设置已采纳问答数量
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method array getList() 获取问答详情
 * @method void setList(array $List) 设置问答详情
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ListQAResponse extends AbstractModel
{
    /**
     * @var string 问答数量
     */
    public $Total;

    /**
     * @var string 待校验问答数量
     */
    public $WaitVerifyTotal;

    /**
     * @var string 未采纳问答数量
     */
    public $NotAcceptedTotal;

    /**
     * @var string 已采纳问答数量
     */
    public $AcceptedTotal;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var array 问答详情
     */
    public $List;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Total 问答数量
     * @param string $WaitVerifyTotal 待校验问答数量
     * @param string $NotAcceptedTotal 未采纳问答数量
     * @param string $AcceptedTotal 已采纳问答数量
     * @param integer $PageNumber 页码
     * @param array $List 问答详情
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
