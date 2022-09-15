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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ForwardTKEEdgeApplicationRequestV3请求参数结构体
 *
 * @method string getMethod() 获取请求集群addon的访问
 * @method void setMethod(string $Method) 设置请求集群addon的访问
 * @method string getPath() 获取请求集群addon的路径
 * @method void setPath(string $Path) 设置请求集群addon的路径
 * @method string getAccept() 获取请求集群addon后允许接收的数据格式
 * @method void setAccept(string $Accept) 设置请求集群addon后允许接收的数据格式
 * @method string getContentType() 获取请求集群addon的数据格式
 * @method void setContentType(string $ContentType) 设置请求集群addon的数据格式
 * @method string getRequestBody() 获取请求集群addon的数据
 * @method void setRequestBody(string $RequestBody) 设置请求集群addon的数据
 * @method string getClusterName() 获取集群名称，例如cls-1234abcd
 * @method void setClusterName(string $ClusterName) 设置集群名称，例如cls-1234abcd
 * @method string getEncodedBody() 获取是否编码请求内容
 * @method void setEncodedBody(string $EncodedBody) 设置是否编码请求内容
 */
class ForwardTKEEdgeApplicationRequestV3Request extends AbstractModel
{
    /**
     * @var string 请求集群addon的访问
     */
    public $Method;

    /**
     * @var string 请求集群addon的路径
     */
    public $Path;

    /**
     * @var string 请求集群addon后允许接收的数据格式
     */
    public $Accept;

    /**
     * @var string 请求集群addon的数据格式
     */
    public $ContentType;

    /**
     * @var string 请求集群addon的数据
     */
    public $RequestBody;

    /**
     * @var string 集群名称，例如cls-1234abcd
     */
    public $ClusterName;

    /**
     * @var string 是否编码请求内容
     */
    public $EncodedBody;

    /**
     * @param string $Method 请求集群addon的访问
     * @param string $Path 请求集群addon的路径
     * @param string $Accept 请求集群addon后允许接收的数据格式
     * @param string $ContentType 请求集群addon的数据格式
     * @param string $RequestBody 请求集群addon的数据
     * @param string $ClusterName 集群名称，例如cls-1234abcd
     * @param string $EncodedBody 是否编码请求内容
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
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Accept",$param) and $param["Accept"] !== null) {
            $this->Accept = $param["Accept"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("RequestBody",$param) and $param["RequestBody"] !== null) {
            $this->RequestBody = $param["RequestBody"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("EncodedBody",$param) and $param["EncodedBody"] !== null) {
            $this->EncodedBody = $param["EncodedBody"];
        }
    }
}
