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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListReceiverDetails返回参数结构体
 *
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method array getData() 获取数据记录
 * @method void setData(array $Data) 设置数据记录
 * @method integer getValidCount() 获取有效邮件地址数
 * @method void setValidCount(integer $ValidCount) 设置有效邮件地址数
 * @method integer getInvalidCount() 获取无效邮件地址数
 * @method void setInvalidCount(integer $InvalidCount) 设置无效邮件地址数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ListReceiverDetailsResponse extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var array 数据记录
     */
    public $Data;

    /**
     * @var integer 有效邮件地址数
     */
    public $ValidCount;

    /**
     * @var integer 无效邮件地址数
     */
    public $InvalidCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总数
     * @param array $Data 数据记录
     * @param integer $ValidCount 有效邮件地址数
     * @param integer $InvalidCount 无效邮件地址数
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new ReceiverDetail();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("ValidCount",$param) and $param["ValidCount"] !== null) {
            $this->ValidCount = $param["ValidCount"];
        }

        if (array_key_exists("InvalidCount",$param) and $param["InvalidCount"] !== null) {
            $this->InvalidCount = $param["InvalidCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
