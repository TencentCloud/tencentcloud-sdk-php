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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetMainEditVersion请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>应用ID</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>应用ID</p>
 * @method integer getRoomId() 获取<p>课堂ID</p>
 * @method void setRoomId(integer $RoomId) 设置<p>课堂ID</p>
 * @method integer getVersionNo() 获取<p>版本号，可通过DescribeEditVersion接口获取当前课堂全部版本，来查看到版本号。</p>
 * @method void setVersionNo(integer $VersionNo) 设置<p>版本号，可通过DescribeEditVersion接口获取当前课堂全部版本，来查看到版本号。</p>
 * @method string getOperator() 获取<p>操作者ID</p>
 * @method void setOperator(string $Operator) 设置<p>操作者ID</p>
 */
class SetMainEditVersionRequest extends AbstractModel
{
    /**
     * @var integer <p>应用ID</p>
     */
    public $SdkAppId;

    /**
     * @var integer <p>课堂ID</p>
     */
    public $RoomId;

    /**
     * @var integer <p>版本号，可通过DescribeEditVersion接口获取当前课堂全部版本，来查看到版本号。</p>
     */
    public $VersionNo;

    /**
     * @var string <p>操作者ID</p>
     */
    public $Operator;

    /**
     * @param integer $SdkAppId <p>应用ID</p>
     * @param integer $RoomId <p>课堂ID</p>
     * @param integer $VersionNo <p>版本号，可通过DescribeEditVersion接口获取当前课堂全部版本，来查看到版本号。</p>
     * @param string $Operator <p>操作者ID</p>
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("VersionNo",$param) and $param["VersionNo"] !== null) {
            $this->VersionNo = $param["VersionNo"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
