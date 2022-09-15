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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApkDetectionResult返回参数结构体
 *
 * @method string getResult() 获取响应结果，ok表示正常，error表示错误
 * @method void setResult(string $Result) 设置响应结果，ok表示正常，error表示错误
 * @method string getReason() 获取Result为error错误时的原因说明
 * @method void setReason(string $Reason) 设置Result为error错误时的原因说明
 * @method array getResultList() 获取APK检测结果数组
 * @method void setResultList(array $ResultList) 设置APK检测结果数组
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeApkDetectionResultResponse extends AbstractModel
{
    /**
     * @var string 响应结果，ok表示正常，error表示错误
     */
    public $Result;

    /**
     * @var string Result为error错误时的原因说明
     */
    public $Reason;

    /**
     * @var array APK检测结果数组
     */
    public $ResultList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Result 响应结果，ok表示正常，error表示错误
     * @param string $Reason Result为error错误时的原因说明
     * @param array $ResultList APK检测结果数组
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ResultList",$param) and $param["ResultList"] !== null) {
            $this->ResultList = [];
            foreach ($param["ResultList"] as $key => $value){
                $obj = new ResultListItem();
                $obj->deserialize($value);
                array_push($this->ResultList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
