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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterConfigs返回参数结构体
 *
 * @method array getClusterConfList() 获取返回实例的配置文件相关的信息
 * @method void setClusterConfList(array $ClusterConfList) 设置返回实例的配置文件相关的信息
 * @method string getBuildVersion() 获取返回当前内核版本 如果不存在则返回空字符串
 * @method void setBuildVersion(string $BuildVersion) 设置返回当前内核版本 如果不存在则返回空字符串
 * @method string getErrorMsg() 获取错误信息
 * @method void setErrorMsg(string $ErrorMsg) 设置错误信息
 * @method boolean getHasCN() 获取是否包含CN节点
 * @method void setHasCN(boolean $HasCN) 设置是否包含CN节点
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterConfigsResponse extends AbstractModel
{
    /**
     * @var array 返回实例的配置文件相关的信息
     */
    public $ClusterConfList;

    /**
     * @var string 返回当前内核版本 如果不存在则返回空字符串
     */
    public $BuildVersion;

    /**
     * @var string 错误信息
     */
    public $ErrorMsg;

    /**
     * @var boolean 是否包含CN节点
     */
    public $HasCN;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ClusterConfList 返回实例的配置文件相关的信息
     * @param string $BuildVersion 返回当前内核版本 如果不存在则返回空字符串
     * @param string $ErrorMsg 错误信息
     * @param boolean $HasCN 是否包含CN节点
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
        if (array_key_exists("ClusterConfList",$param) and $param["ClusterConfList"] !== null) {
            $this->ClusterConfList = [];
            foreach ($param["ClusterConfList"] as $key => $value){
                $obj = new ClusterConfigsInfoFromEMR();
                $obj->deserialize($value);
                array_push($this->ClusterConfList, $obj);
            }
        }

        if (array_key_exists("BuildVersion",$param) and $param["BuildVersion"] !== null) {
            $this->BuildVersion = $param["BuildVersion"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("HasCN",$param) and $param["HasCN"] !== null) {
            $this->HasCN = $param["HasCN"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
