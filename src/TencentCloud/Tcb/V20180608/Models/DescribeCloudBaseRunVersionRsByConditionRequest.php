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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudBaseRunVersionRsByCondition请求参数结构体
 *
 * @method string getEnvId() 获取环境ID；EnvId和ClusterId不能同时为空
 * @method void setEnvId(string $EnvId) 设置环境ID；EnvId和ClusterId不能同时为空
 * @method string getClusterId() 获取集群ID；EnvId和ClusterId不能同时为空
 * @method void setClusterId(string $ClusterId) 设置集群ID；EnvId和ClusterId不能同时为空
 * @method boolean getFilterGwSwitch() 获取过滤网关服务开关
 * @method void setFilterGwSwitch(boolean $FilterGwSwitch) 设置过滤网关服务开关
 */
class DescribeCloudBaseRunVersionRsByConditionRequest extends AbstractModel
{
    /**
     * @var string 环境ID；EnvId和ClusterId不能同时为空
     */
    public $EnvId;

    /**
     * @var string 集群ID；EnvId和ClusterId不能同时为空
     */
    public $ClusterId;

    /**
     * @var boolean 过滤网关服务开关
     */
    public $FilterGwSwitch;

    /**
     * @param string $EnvId 环境ID；EnvId和ClusterId不能同时为空
     * @param string $ClusterId 集群ID；EnvId和ClusterId不能同时为空
     * @param boolean $FilterGwSwitch 过滤网关服务开关
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("FilterGwSwitch",$param) and $param["FilterGwSwitch"] !== null) {
            $this->FilterGwSwitch = $param["FilterGwSwitch"];
        }
    }
}
