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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulInfoCvss请求参数结构体
 *
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method string getSource() 获取兼容应用防护漏洞防御容器视角告警里漏洞详情，默认是主机视角，可选字段，Source=tcss则为容器视角漏洞详情，后端会把VulId转为主机vul_vuls里的VulId
 * @method void setSource(string $Source) 设置兼容应用防护漏洞防御容器视角告警里漏洞详情，默认是主机视角，可选字段，Source=tcss则为容器视角漏洞详情，后端会把VulId转为主机vul_vuls里的VulId
 */
class DescribeVulInfoCvssRequest extends AbstractModel
{
    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var string 兼容应用防护漏洞防御容器视角告警里漏洞详情，默认是主机视角，可选字段，Source=tcss则为容器视角漏洞详情，后端会把VulId转为主机vul_vuls里的VulId
     */
    public $Source;

    /**
     * @param integer $VulId 漏洞id
     * @param string $Source 兼容应用防护漏洞防御容器视角告警里漏洞详情，默认是主机视角，可选字段，Source=tcss则为容器视角漏洞详情，后端会把VulId转为主机vul_vuls里的VulId
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
