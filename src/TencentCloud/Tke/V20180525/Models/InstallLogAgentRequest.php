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
 * InstallLogAgent请求参数结构体
 *
 * @method string getClusterId() 获取TKE集群ID
 * @method void setClusterId(string $ClusterId) 设置TKE集群ID
 * @method string getKubeletRootDir() 获取kubelet根目录
 * @method void setKubeletRootDir(string $KubeletRootDir) 设置kubelet根目录
 */
class InstallLogAgentRequest extends AbstractModel
{
    /**
     * @var string TKE集群ID
     */
    public $ClusterId;

    /**
     * @var string kubelet根目录
     */
    public $KubeletRootDir;

    /**
     * @param string $ClusterId TKE集群ID
     * @param string $KubeletRootDir kubelet根目录
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("KubeletRootDir",$param) and $param["KubeletRootDir"] !== null) {
            $this->KubeletRootDir = $param["KubeletRootDir"];
        }
    }
}
