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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlertList返回参数结构体
 *
 * @method array getAlertList() 获取全量告警列表
 * @method void setAlertList(array $AlertList) 设置全量告警列表
 * @method array getAlertTypeCount() 获取告警大类数量
 * @method void setAlertTypeCount(array $AlertTypeCount) 设置告警大类数量
 * @method integer getTotalCount() 获取告警总数
 * @method void setTotalCount(integer $TotalCount) 设置告警总数
 * @method integer getReturnCode() 获取0：succeed 1：timeout
 * @method void setReturnCode(integer $ReturnCode) 设置0：succeed 1：timeout
 * @method string getReturnMsg() 获取返回状态信息
 * @method void setReturnMsg(string $ReturnMsg) 设置返回状态信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAlertListResponse extends AbstractModel
{
    /**
     * @var array 全量告警列表
     */
    public $AlertList;

    /**
     * @var array 告警大类数量
     */
    public $AlertTypeCount;

    /**
     * @var integer 告警总数
     */
    public $TotalCount;

    /**
     * @var integer 0：succeed 1：timeout
     */
    public $ReturnCode;

    /**
     * @var string 返回状态信息
     */
    public $ReturnMsg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AlertList 全量告警列表
     * @param array $AlertTypeCount 告警大类数量
     * @param integer $TotalCount 告警总数
     * @param integer $ReturnCode 0：succeed 1：timeout
     * @param string $ReturnMsg 返回状态信息
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
        if (array_key_exists("AlertList",$param) and $param["AlertList"] !== null) {
            $this->AlertList = [];
            foreach ($param["AlertList"] as $key => $value){
                $obj = new AlertInfo();
                $obj->deserialize($value);
                array_push($this->AlertList, $obj);
            }
        }

        if (array_key_exists("AlertTypeCount",$param) and $param["AlertTypeCount"] !== null) {
            $this->AlertTypeCount = [];
            foreach ($param["AlertTypeCount"] as $key => $value){
                $obj = new TagCount();
                $obj->deserialize($value);
                array_push($this->AlertTypeCount, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
