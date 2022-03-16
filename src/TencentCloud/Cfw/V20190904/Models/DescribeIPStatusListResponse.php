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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIPStatusList返回参数结构体
 *
 * @method array getStatusList() 获取ip状态信息
 * @method void setStatusList(array $StatusList) 设置ip状态信息
 * @method integer getReturnCode() 获取状态码
 * @method void setReturnCode(integer $ReturnCode) 设置状态码
 * @method string getReturnMsg() 获取状态信息
 * @method void setReturnMsg(string $ReturnMsg) 设置状态信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIPStatusListResponse extends AbstractModel
{
    /**
     * @var array ip状态信息
     */
    public $StatusList;

    /**
     * @var integer 状态码
     */
    public $ReturnCode;

    /**
     * @var string 状态信息
     */
    public $ReturnMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $StatusList ip状态信息
     * @param integer $ReturnCode 状态码
     * @param string $ReturnMsg 状态信息
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
        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = [];
            foreach ($param["StatusList"] as $key => $value){
                $obj = new IPDefendStatus();
                $obj->deserialize($value);
                array_push($this->StatusList, $obj);
            }
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
