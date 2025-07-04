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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRuntimes返回参数结构体
 *
 * @method array getRuntimes() 获取TIEMS支持的运行环境列表
 * @method void setRuntimes(array $Runtimes) 设置TIEMS支持的运行环境列表
 * @method integer getUserAccess() 获取用户对runtime对权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAccess(integer $UserAccess) 设置用户对runtime对权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRuntimesResponse extends AbstractModel
{
    /**
     * @var array TIEMS支持的运行环境列表
     */
    public $Runtimes;

    /**
     * @var integer 用户对runtime对权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAccess;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Runtimes TIEMS支持的运行环境列表
     * @param integer $UserAccess 用户对runtime对权限
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Runtimes",$param) and $param["Runtimes"] !== null) {
            $this->Runtimes = [];
            foreach ($param["Runtimes"] as $key => $value){
                $obj = new Runtime();
                $obj->deserialize($value);
                array_push($this->Runtimes, $obj);
            }
        }

        if (array_key_exists("UserAccess",$param) and $param["UserAccess"] !== null) {
            $this->UserAccess = $param["UserAccess"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
