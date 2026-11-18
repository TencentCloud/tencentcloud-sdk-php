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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEnvAccessControl返回参数结构体
 *
 * @method integer getAffectedRows() 获取<p>本次请求影响的权限数量</p>
 * @method void setAffectedRows(integer $AffectedRows) 设置<p>本次请求影响的权限数量</p>
 * @method array getCurrent() 获取<p>修改之后，当前的生效的配置</p><p>SourceType = PUBLIC 表示公网链路访问配置<br>SourceType = VPC 表示 VPC 链路访问配置<br>SourceType = WOA 表示办公网链路访问配置</p>
 * @method void setCurrent(array $Current) 设置<p>修改之后，当前的生效的配置</p><p>SourceType = PUBLIC 表示公网链路访问配置<br>SourceType = VPC 表示 VPC 链路访问配置<br>SourceType = WOA 表示办公网链路访问配置</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyEnvAccessControlResponse extends AbstractModel
{
    /**
     * @var integer <p>本次请求影响的权限数量</p>
     */
    public $AffectedRows;

    /**
     * @var array <p>修改之后，当前的生效的配置</p><p>SourceType = PUBLIC 表示公网链路访问配置<br>SourceType = VPC 表示 VPC 链路访问配置<br>SourceType = WOA 表示办公网链路访问配置</p>
     */
    public $Current;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AffectedRows <p>本次请求影响的权限数量</p>
     * @param array $Current <p>修改之后，当前的生效的配置</p><p>SourceType = PUBLIC 表示公网链路访问配置<br>SourceType = VPC 表示 VPC 链路访问配置<br>SourceType = WOA 表示办公网链路访问配置</p>
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
        if (array_key_exists("AffectedRows",$param) and $param["AffectedRows"] !== null) {
            $this->AffectedRows = $param["AffectedRows"];
        }

        if (array_key_exists("Current",$param) and $param["Current"] !== null) {
            $this->Current = [];
            foreach ($param["Current"] as $key => $value){
                $obj = new AccessSourceSetting();
                $obj->deserialize($value);
                array_push($this->Current, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
