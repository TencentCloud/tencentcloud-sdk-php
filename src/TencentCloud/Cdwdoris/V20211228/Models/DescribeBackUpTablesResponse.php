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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackUpTables返回参数结构体
 *
 * @method array getAvailableTables() 获取可备份表列表
 * @method void setAvailableTables(array $AvailableTables) 设置可备份表列表
 * @method string getMsg() 获取msg
 * @method void setMsg(string $Msg) 设置msg
 * @method boolean getIsUnknownVersion() 获取未知version
 * @method void setIsUnknownVersion(boolean $IsUnknownVersion) 设置未知version
 * @method string getErrorMsg() 获取错误信息
 * @method void setErrorMsg(string $ErrorMsg) 设置错误信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackUpTablesResponse extends AbstractModel
{
    /**
     * @var array 可备份表列表
     */
    public $AvailableTables;

    /**
     * @var string msg
     */
    public $Msg;

    /**
     * @var boolean 未知version
     */
    public $IsUnknownVersion;

    /**
     * @var string 错误信息
     */
    public $ErrorMsg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AvailableTables 可备份表列表
     * @param string $Msg msg
     * @param boolean $IsUnknownVersion 未知version
     * @param string $ErrorMsg 错误信息
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
        if (array_key_exists("AvailableTables",$param) and $param["AvailableTables"] !== null) {
            $this->AvailableTables = [];
            foreach ($param["AvailableTables"] as $key => $value){
                $obj = new BackupTableContent();
                $obj->deserialize($value);
                array_push($this->AvailableTables, $obj);
            }
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("IsUnknownVersion",$param) and $param["IsUnknownVersion"] !== null) {
            $this->IsUnknownVersion = $param["IsUnknownVersion"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
